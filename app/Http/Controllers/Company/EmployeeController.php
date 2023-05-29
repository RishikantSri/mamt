<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Employee\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function registerEmployee()
    {
        return view('backend.company.employee.register');
    }

    public function storeEmployee(Request $request)
    {

        // bail|required_unless:fee,=,2|integer|gte:1

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
            'email' => ['required', 'max:255', 'regex:/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/', 'unique:employees,email'],
            'mobile' => ['required', 'max:255', 'regex:/^[0-9]{10,10}$/', 'unique:employees,mobile'],
            'designation' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
            'experience' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
            'qualification' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
            'reporting' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
            'grade' => ['required'],
        ]);

        $id = Auth::guard('company')->user()->id;
        $company_id = Auth::guard('company')->user()->company_id;
        $password = 'password';
        $employee = Employee::where('company_id',$company_id)->orderBy('id', 'desc')->limit(1)->get();
        $name = $request->name;
        // to create code of 5 digit lenth first would be 00001
        $data = 1;
        $length = 5;
        $code = substr(str_repeat(0, $length) . $data, -$length);
        // dd($code);    
        // end
        $str=str_replace(' ', '', $name);
        $sbstr=substr($str,0,3);
        // to create COM-EMP-00001
        if(count($employee) <= 0){
            $empid = $company_id."-".$sbstr."-" . $code;
        }else{
            $emp_id = $employee[0]->employee_id;
            $ex_emp_id = explode("-",$emp_id);
            $tempid = (int)$ex_emp_id[3];
            $tempid = $tempid+1;
            $code = substr(str_repeat(0, $length) . $tempid, -$length);
            $empid = $company_id."-".$sbstr."-" . $code;
        }

        $empid = strtoupper($empid);

        $result = Employee::insertGetId([
            'company_id' => $company_id,
            'employee_id' => $empid,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'designation' => $request->designation,
            'experience' => $request->experience,
            'qualification' => $request->qualification,
            'reporting_to' => $request->reporting,
            'grade' => $request->grade,
            'status' => '0',
            'password' => Hash::make($password),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        if ($result) {
            return back()->with('success', 'Employee created successfully!');
        } else {
            return back()->with('error', 'Error Occured Try After Sometimes!');
        }

        
    }
}
