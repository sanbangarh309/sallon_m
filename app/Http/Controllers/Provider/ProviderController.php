<?php
namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Redirect;
use San_Help;
use Validator;
use App\Models\Category;
use App\Models\Service;
use App\Models\Provider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class ProviderController extends Controller
{

    public function __construct()
    {
        $this->data = array();
        $this->request = app('request');
        $this->page = app('request')->segment(2);
        $this->data['modules'] = config('sallon.modules');
        // echo '<pre>';print_r(config('sallon.modules'));exit;
        // $action = $this->request->route()->getAction();
        if(Auth::user() && Auth::user()->id != 1){
            $this->request->session()->forget('provider_id');
            $this->data['provider_name'] = Provider::find(Auth::user()->id)->name;
        }
        if(Auth::user() && Auth::user()->id == 1){
            $this->data['provider_name'] = Provider::find($this->request->session()->get('provider_id'))->name;
        }
        if (!isset(Auth::user()->id)) {
            $this->request->session()->forget('provider_id');
            Redirect::to('login')->send();
        }
        
    }

    public function index()
    {
        if($this->request->session()->has('provider_id')){
            $id = $this->request->session()->get('provider_id');
        }else{
            $id = Auth::user()->id;
        }
        $provider = Provider::find($id);
        $this->data['provider'] = $provider;
        $this->data['ownmodules'] = unserialize($provider->modules);
        // echo '<pre>';print_r($this->data['modules']);exit;
        // $this->data['modules'] = 
        return View('pages.index', $this->data);
    }

    public function moduleTemplate($slug){
        return View('pages.modules.'.$slug, $this->data);
    }

    public function temps($slug){
        return View('pages.modules.'.$slug, $this->data);
    }

    function addCategory(){
        $cat = new Category();
        $cat->name = $this->request->name;
        $cat->slug = str_replace(' ', '_', strtolower($this->request->name));
        $icon = San_Help::uploadFile('categories');
        $cat->icon = $icon;
        $cat->save();
        // $cat->icon = url('storage/app/public/'.str_replace('categories','categories/thumbs',$cat->icon));
        return response()->json(array(
           'message' => 'Category Added Successfully',
           'detail' => $cat
        ));
    }

    function manageService(){
        // echo '<pre>';print_r($this->request->all());exit;
        if($this->request->id && $this->request->id !=''){
            $ser = Service::find($this->request->id);    
        }else{
            $ser = new Service();
            if($this->request->session()->get('provider_id') && $this->request->session()->get('provider_id') != ''){
                $ser->provider_id = $this->request->session()->get('provider_id');
            }else{
                $ser->provider_id = Auth::user()->id;
            }
        }
        $ser->name = $this->request->name;
        $ser->category_id = $this->request->category;
        $ser->type = serialize($this->request->type);
        $ser->price = $this->request->price;
        $ser->duration = $this->request->duration;
        $ser->expiration = serialize(array('start'=>$this->request->start,'end'=>$this->request->end));
        if($this->request->image !=''){
            if($this->request->id){
                San_Help::deleteFiles($ser,'services');
            }
            $icon = San_Help::uploadFile('services');
            $ser->icon = $icon;
        }
        $ser->save();
        return response()->json(array(
           'message' => $this->request->id ? 'Service Updated Successfully' : 'Service Added Successfully',
           'detail' => Service::with('category')->find($ser->id)
        ));
    }

    function getServices(){
        if($this->request->session()->get('provider_id') && $this->request->session()->get('provider_id') != ''){
            $provider_id = $this->request->session()->get('provider_id');
        }else{
            $provider_id = Auth::user()->id;
        }
        $services = Service::with('category')->where('provider_id',$provider_id)->get()->toArray();
        foreach($services as $key => $service){
            $services[$key]['type'] = unserialize($service['type']);
            $services[$key]['expiration'] = unserialize($service['expiration']);
        }

        // $services = Service::with('category')->where('provider_id',$provider_id)->latest('created_at')->paginate(5);
        // foreach($services as $key => $service){
        //     $services[$key]->type = unserialize($service->type);
        //     $services[$key]->expiration = unserialize($service->expiration);
        // }
        // if ($this->request->ajax()) {
        //     return view('includes.services_list', ['services' => $services])->render();  
        // }

        return response()->json(array(
            'message' => 'success',
            'detail' => $services
         ));
    }

    function getService($id){
        $service = Service::with('category')->find($id);
        $service->type = unserialize($service->type);
        $service->expiration = unserialize($service->expiration);
        return response()->json(array(
            'message' => 'success',
            'detail' => $service
         ));
    }

    function deleteService($id){
        $sr = Service::find($id);
        San_Help::deleteFiles($sr,'services');
        $sr->delete();
        return response()->json(array(
            'message' => 'Service Deleted Successfully'
        ));
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }

}