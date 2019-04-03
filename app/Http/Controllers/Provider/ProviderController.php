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
use App\Models\Employee;
use App\Models\Role;
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

        if($this->request->session()->has('provider_id')){
            $this->providerid = $this->request->session()->get('provider_id');
        }else{
            $this->providerid = Auth::user()->id;
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
        if($slug =='employee_management'){
            $role = Role::first();
            $employees = Employee::with('role')->where('provider_id',$this->providerid)->where('role_id',$role->id)->latest('created_at')->paginate(5);
            $this->data['employees'] = $employees;
            $this->data['user_type'] = 'technician';
            if ($this->request->ajax() || $this->request->method() == 'POST') {
                $employee_html = View('includes.employee_table', ['employees' => $employees,'user_type'=>'technician'])->render();
                return response()->json(compact('employee_html'));
            }
        }
        return View('pages.modules.'.$slug, $this->data);
    }

    public function temps($slug,$type){
        $this->data['user_type'] = $type;
        if($this->request->session()->has('provider_id')){
            $id = $this->request->session()->get('provider_id');
        }else{
            $id = Auth::user()->id;
        }
        $role = Role::where('name',$type)->first();
        if($role){
            $employees = Employee::with('role')->where('provider_id',$id)->where('role_id',$role->id)->latest('created_at')->paginate(5);
            // print_r($this->request->method());exit;
            if ($this->request->ajax() || $this->request->method() == 'POST') {
                $employee_html = View('includes.employee_table', ['employees' => $employees,'user_type'=>$type])->render();
                return response()->json(compact('employee_html'));
            }
            $this->data['employees'] = $employees;
            return View('pages.modules.'.$slug, $this->data);
        }else{
            return response()->json(array('success'=>false,'err'=>'Unauthorized'));
        }
        
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

    function addEmployee(){
        if($this->request->session()->get('provider_id') && $this->request->session()->get('provider_id') != ''){
            $provider_id = $this->request->session()->get('provider_id');
        }else{
            $provider_id = Auth::user()->id;
        }
        $role = Role::where('name',$this->request->user_type)->first();
        if($this->request->has('id') && $this->request->id !=''){
            $emp = Employee::find($this->request->id);
        }else{
            $emp = new Employee();
            $emp->provider_id = $provider_id;
            $emp->role_id = $role->id;
        }
        $emp->fname = $this->request->fname;
        $emp->lname = $this->request->lname;
        $emp->dob = $this->request->dob;
        $emp->job_being = $this->request->job_being;
        $emp->job_end = $this->request->job_end;
        $emp->ssn = $this->request->ssn;
        $emp->phone = $this->request->phone;
        $emp->address = $this->request->address;
        $emp->city = $this->request->city;
        $emp->state = $this->request->state;
        $emp->zipcode = $this->request->zipcode;
        if($this->request->hourly_rate_check){
            $emp->hourly_rate = $this->request->hourly_rate;
        }
        $emp->save();
        $emp = Employee::with('role')->find($emp->id);
        return response()->json(array(
           'message' => $this->request->id ? 'Employee Updated Successfully' :  'Employee Added Successfully',
           'detail' => $emp
        ));
    }

    function getEmployee($id){
        $emp = Employee::with('role')->find($id);
        return response()->json(array(
            'message' => 'success',
            'detail' => $emp
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

    function deleteEmployee($id){
        $emp = Employee::find($id);
        $emp->delete();
        return response()->json(array(
            'message' => 'Employee Deleted Successfully'
        ));
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }

}