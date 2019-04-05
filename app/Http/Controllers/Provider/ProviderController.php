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
use App\Models\Module;
use App\Models\Category;
use App\Models\Service;
use App\Models\Provider;
use App\Models\Employee;
use App\Models\Appointment;
use App\Models\Clock;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Exception;

class ProviderController extends Controller
{
    public function __construct()
    {
        $this->data = array();
        $this->request = app('request');
        $this->page = app('request')->segment(2);
        $this->server_side = false;
        if ($this->request->ajax() || $this->request->method() == 'POST') {
            $this->server_side = true;
        }
        $this->data['modules'] = Module::all()->toArray();
        // echo '<pre>';print_r($this->data['modules']);exit;
        // $action = $this->request->route()->getAction();
        if(Auth::user() && Auth::user()->id != 1){
            $this->request->session()->forget('provider_id');
            $this->data['provider_name'] = Provider::find(Auth::user()->id)->name;
            $this->providerid = Auth::user()->id;
        }
        if(Auth::user() && Auth::user()->id == 1){
            $this->data['provider_name'] = Provider::find($this->request->session()->get('provider_id'))->name;
            $this->providerid = $this->request->session()->get('provider_id');
        }
        if (!isset(Auth::user()->id)) {
            $this->request->session()->forget('provider_id');
            Redirect::to('login')->send();
        }
        $this->data['providerid'] = $this->providerid;
    }

    public function index()
    {
        $provider = Provider::find($this->providerid);
        $this->data['provider'] = $provider;
        $this->data['ownmodules'] = unserialize($provider->modules);
        // echo '<pre>';print_r($this->data['ownmodules']);exit;
        // $this->data['modules'] = 
        return View('pages.index', $this->data);
    }

    public function moduleTemplate($slug){
        $module = Module::where('name',trim($slug))->first();
        // if(!$module)
        //     return View('pages.error');
        try {
            if($module){
                if(!class_exists($module->model)){
                    return View('pages.error');
                }
                if($module->relation){
                    $query = $module->model::with($module->relation);
                }else{
                    $query = $module->model::select('*');
                }
                $Content = $query->where('provider_id',$this->providerid)->latest('created_at')->paginate(5);
                // echo '<pre>';print_r($Content);exit;
                if ($this->server_side) {
                    $list_html = View('includes.'.$slug.'_list', [$slug => $Content,'slug'=>$slug,'user_type'=>$slug])->render();
                    return response()->json(compact('list_html'));
                }
                $this->data[$slug] = $Content;
            }
            $this->data['user_type'] = $slug;
            $this->data['slug'] = $slug;
            return View('pages.modules.'.$slug, $this->data);
        } catch (Exception $e) {
            return View('pages.error');
        }


        // if($slug =='employee_management'){
        //     $role = Role::first();
        //     $employees = Employee::with('role')->where('provider_id',$this->providerid)->where('role_id',$role->id)->latest('created_at')->paginate(5);
        //     $this->data['user_type'] = 'technician';
        //     if ($this->server_side) {
        //         $employee_html = View('includes.employee_table', ['employees' => $employees,'user_type'=>'technician'])->render();
        //         return response()->json(compact('employee_html'));
        //     }
        //     $this->data['employees'] = $employees;
        // }
        // if($slug =='appointment'){
        //     $appointments = Appointment::where('provider_id',$this->providerid)->latest('created_at')->paginate(5);
        //     if ($this->server_side) {
        //         $appointments_html = View('includes.appointment_list', ['appointments' => $appointments])->render();
        //         return response()->json(compact('appointments_html'));
        //     }
        //     $this->data['appointments'] = $appointments;
        // }
        // if($slug =='customer_management' || $slug =='customer_report'){
        //     $customers = Appointment::with('user')->where('provider_id',$this->providerid)->latest('created_at')->paginate(5);
        //     if ($this->server_side) {
        //         $customers_html = View('includes.customer_list', ['customers' => $customers,'slug' => $slug])->render();
        //         return response()->json(compact('customers_html'));
        //     }
        //     $this->data['slug'] = $slug;
        //     $this->data['customers'] = $customers;
        // }
        // return View('pages.modules.'.$slug, $this->data);
    }

    public function temps($slug,$type){
        try {
            $this->data['user_type'] = $type;
            $role = Role::where('name',$type)->first();
            if($role){
                $employees = Employee::with('role')->where('provider_id',$this->providerid)->where('role_id',$role->id)->latest('created_at')->paginate(5);
                // print_r($this->request->method());exit;
                if ($this->request->ajax() || $this->request->method() == 'POST') {
                    $employee_html = View('includes.employee_table', ['employees' => $employees,'user_type'=>$type])->render();
                    return response()->json(compact('employee_html'));
                }
                $this->data['employees'] = $employees;
                return View('pages.modules.'.$slug, $this->data);
            }else{
                return View('pages.error');
            }
        } catch (Exception $e) {
            return View('pages.error');
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
        if($this->request->has('id') && $this->request->id !=''){
            $string = 'required|max:30';
        }else{
            $string = 'required|unique:employees|max:30';
        }
        
          $validator = Validator::make($this->request->all(), [
            'phone' => $string,
          ]);
          if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json([
              'success' => false,
              'message' => $error
            ]);
          }
        $role = Role::where('name',$this->request->user_type)->first();
        if($this->request->has('id') && $this->request->id !=''){
            $emp = Employee::find($this->request->id);
        }else{
            $emp = new Employee();
            $emp->provider_id = $this->providerid;
            $emp->role_id = $role->id;
        }
        $image = San_Help::uploadFile('employees');
        if($image){
            if($this->request->has('id') && $this->request->id !=''){
                San_Help::deleteFiles($emp,'employees');
            }
            $emp->image = $image;
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

        $emp->contract_option = $this->request->contract;
        $emp->contract_option_value = $this->request->{$this->request->contract};
        $emp->tips_charges = $this->request->tips_charges;
        $emp->clean_ups = $this->request->clean_ups;
        $emp->other = $this->request->other;
        $emp->w4_status = $this->request->w4_status;

        $emp->dependents = $this->request->dependents;
        $emp->medicare = $this->request->medicare;
        $emp->social_security = $this->request->social_security;
        $emp->fed_allowance = $this->request->fed_allowance;
        $emp->state_allowance = $this->request->state_allowance;

        if($this->request->hourly_rate_check){
            $emp->hourly_rate = $this->request->hourly_rate;
        }
        $emp->save();
        $emp = Employee::with('role')->find($emp->id);
        return response()->json(array(
           'success' => true,
           'message' => $this->request->id ? 'Employee Updated Successfully' :  'Employee Added Successfully',
           'detail' => $emp
        ));
    }

    function addSkills(){ 
          $validator = Validator::make($this->request->all(), [
            'id' => 'required',
            'skills' => 'required|array'
          ]);
          if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json([
              'success' => false,
              'message' => $error
            ]);
          }
        $emp = Employee::find($this->request->id);
        $emp->skills = serialize($this->request->skills);
        $emp->save();
        return response()->json(array(
            'success' => true,
            'message' => 'skill updated successfully',
         ));
    }

    function getEmployee($id){
        $emp = Employee::with('role')->find($id);
        $emp->skills = unserialize($emp->skills);
        if($emp->image){
            $emp->image = url('storage/app/public/'.str_replace('employees','employees/thumbs',$emp->image));
        }
        return response()->json(array(
            'message' => 'success',
            'detail' => $emp
         ));
    }

    function addAppointment(){
          $validator = Validator::make($this->request->all(), [
            'email' => 'required|unique:users|max:100',
            'phone' => 'required|unique:appointments|max:30',
          ]);
          if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json([
              'success' => false,
              'message' => $error
            ]);
          }
        if($this->request->has('id') && $this->request->id !=''){
            $apnt = Appointment::find($this->request->id);
        }else{
            $apnt = new Appointment();
            $apnt->provider_id = $this->providerid;
        }
        $apnt->fname = $this->request->fname;
        $apnt->lname = $this->request->lname;
        $apnt->phone = $this->request->phone;
        $apnt->note = $this->request->note;
        $apnt->services = serialize(json_decode($this->request->services));
        $apnt->employees = serialize(json_decode($this->request->technicians));
        $apnt->appointment_date = $this->request->appointment_date;
        $user = User::create([
            'name' => $this->request->fname,
            'email' => $this->request->email,
            'role_id' => 7, 
            'password' => Hash::make($this->request->email),
        ]);
        $apnt->user_id = $user->id;
        $apnt->save();
        $apnt = Appointment::find($apnt->id);  
        return response()->json(array(
           'success' =>true,
           'message' => $this->request->id ? 'Appointment Updated Successfully' :  'Appointment Added Successfully',
           'detail' => $apnt
        ));
    }

    function getAppointment($id){
        $apnt = Appointment::find($id);
        $apnt->employees = unserialize($apnt->employees);
        $apnt->services = unserialize($apnt->services);
        return response()->json(array(
            'message' => 'success',
            'detail' => $apnt
         ));
    }

    function updateAppointment(){
        $validator = Validator::make($this->request->all(), [
            'id' => 'required',
          ]);
          if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json([
              'success' => false,
              'message' => $error
            ]);
          }
        // echo '<pre>';print_r($this->request->all());exit;
        $apnt = Appointment::find($this->request->id);
        $apnt->fname = $this->request->name;
        $apnt->phone = $this->request->phone;
        $apnt->note = $this->request->note;
        $apnt->services = serialize($this->request->services);
        $apnt->employees = serialize($this->request->employees);
        $apnt->appointment_date = $this->request->appointment_date;
        $apnt->save();
        return response()->json(array(
            'message' => 'Appointment Updated Successfully',
            'detail' => $apnt
         ));
    }

    function deleteAppointment($id){
        $apnt = Appointment::find($id);
        $apnt->delete();
        return response()->json(array(
            'message' => 'Appointment Deleted Successfully'
        ));
    }

    function manageService(){
        // echo '<pre>';print_r($this->request->all());exit;
        if($this->request->id && $this->request->id !=''){
            $ser = Service::find($this->request->id);    
        }else{
            $ser = new Service();
            $ser->provider_id = $this->providerid;
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
        $services = Service::with('category')->where('provider_id',$this->providerid)->get()->toArray();
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
        San_Help::deleteFiles($emp,'employees');
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