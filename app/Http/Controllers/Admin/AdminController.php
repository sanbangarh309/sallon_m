<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Redirect;
use San_Help;
use Validator;
use App\Models\Module;
use App\Models\Provider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->data = array();
        $this->request = app('request');
        $this->page = app('request')->segment(2);
        $this->data['modules'] = Module::all()->toArray();
        // echo '<pre>';print_r($this->data['modules']);exit;
        // $action = $this->request->route()->getAction();
        if(isset(Auth::user()->id) && Auth::user()->id != 1){
            abort(404);
        }
        if (!isset(Auth::user()->id)) {
            Redirect::to('admin/login')->send();
        }
    }

    public function index()
    {
        return View('admin.pages.index', $this->data);
    }

    function providers($id=''){
        if($id){
            $provider = Provider::find($id);
            $provider->modules = unserialize($provider->modules);
            $provider->avatar = url('storage/app/public/'.str_replace('providers','providers/thumbs',$provider->avatar));
            $this->data['provider'] = $provider;
            $provider_html = View('admin.includes.bootstrap_models', $this->data)->render();
            return response()->json(compact('provider_html'));
            // return response()->json(array(
            //     'detail' => $provider
            //  ));
        }
        $this->data['providers'] = Provider::paginate(5);
        return View('admin.pages.providers', $this->data);
    }

    function addProvider(){
        // echo '<pre>';print_r($this->request->all());
        $validator = Validator::make($this->request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users|max:100',
            'password' => 'required'
        ]);
        if (!$this->request->ajax()) {
            return response()->json(array(
                'message' => 'Something went wrong'
            ));
        }
        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json(array(
                'message' => $error
            ));
        }
        $data = $this->request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => 2, 
            'password' => Hash::make($data['password']),
        ]);
        $pro = new Provider();
        $image = San_Help::uploadFile('providers');
        $pro->id = $user->id;
        $pro->name = $data['name'];
        $pro->email = $data['email'];
        $pro->phone = $data['phone'];
        $pro->duration = $data['duration'];
        $pro->address = $data['address'];
        $pro->commission = $data['commission'];
        $pro->modules = serialize($data['modules']);
        $pro->status = $data['status'];
        $pro->avatar = $image;
        $pro->save();
        $pro->password = $data['password'];
        San_Help::sanSendMail('admin.emails.user_register', $pro);
        $pro->avatar = url('storage/app/public/'.str_replace('providers','providers/thumbs',$pro->avatar));
        return response()->json(array(
           'message' => 'Provider Created Successfully',
           'detail' => $pro
        ));
        // $lists = View('admin.includes.providers_list', [
        //     'user' => $user
        // ])->render();
        // return response()->json(compact('order_html'));
    }

    function updateProvider(){
        $validator = Validator::make($this->request->all(), [
            'id' => 'required|exists:users|max:100'
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json(array(
                'message' => $error
            ));
        }
        $pro = Provider::find($this->request->id);
        $image = San_Help::uploadFile('providers');
        $pro->name = $this->request->name;
        $pro->email = $this->request->email;
        $pro->phone = $this->request->phone;
        $pro->duration = $this->request->duration;
        $pro->address = $this->request->address;
        $pro->commission = $this->request->commission;
        $pro->modules = serialize($this->request->modules);
        $pro->status = $this->request->status;
        if($image){
            San_Help::deleteMedia($pro);
            $pro->avatar = $image;
        }
        $pro->save();
        return redirect()->intended('admin/providers');
        // return response()->json(array(
        //     'message' => 'Provider Updated Successfully'
        // ));
    }

    function deleteProvider($id){
        $pro = Provider::find($id);
        San_Help::deleteMedia($pro);
        $pro->delete();
        User::destroy($id);
        return redirect()->intended('admin/providers');
    }

    function dashboard($id){
        session(['provider_id' => $id]);
        return redirect()->intended('/');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->intended('admin/login');
    }

    public function create($data)
    {
        $data = $this->request->all();
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return view('auth.register');
    }
}
