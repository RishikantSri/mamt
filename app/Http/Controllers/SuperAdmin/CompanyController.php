<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CompanyController extends Controller
{

    public function registerCompany()
    {
        return view('backend.superadmin.company.register');
    }

    public function storeCompany(Request $request)
    {

        // bail|required_unless:fee,=,2|integer|gte:1

        if (isset($request->identity_type) && ($request->identity_type == 1)) {
            $request->validate([
                'account_created_by' => ['required'],
                'name' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
                'title' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
                'company_name' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
                'industry_type' => ['required'],
                'contact' => ['required', 'max:255', 'regex:/^[0-9]{10,10}$/', 'unique:companies,mobile'],
                'email' => ['required', 'max:255', 'regex:/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/', 'unique:companies,email'],
                'address' => ['required', 'max:255', 'regex:/^[#.0-9a-zA-Z\s,-]+$/'],
                'identity_type' => ['required'],
                'pan' => 'bail|required_unless:identity_type,!=,2|max:255',
                'gst' => 'bail|required_unless:identity_type,!=,1|max:255',

            ],[
                'account_created_by.required' => 'Account created By is required Field!',
                'name.required' => 'Please Enter your name !',
                'contact.required.unique' => 'Mobile is exist !',
                'email.required.unique' => 'Email is exist !'
                
            ]);
        }

        // $password = rand(000000,999999);


        $company = Company::orderBy('id', 'desc')->limit(1)->get();

        $name = $request->name;
        $data = 1;
        $length = 5;
        $code = substr(str_repeat(0, $length) . $data, -$length);

        $str = str_replace(' ', '', $name);
        $sbstr = substr($str, 0, 3);

        if (count($company) <= 0) {
            $companyid = $sbstr . "-" . $code;
        } else {
            $company_id = $company[0]->company_id;
            $ex_company_id = explode("-", $company_id);

            $tempid = (int)$ex_company_id[1];
            $tempid = $tempid + 1;
            $code = substr(str_repeat(0, $length) . $tempid, -$length);
            $companyid = $sbstr . "-" . $code;
        }

        $companyid = strtoupper($companyid);

        $result = Company::create([
            'company_id' => $companyid,
            'account_created_by' => $request->account_created_by,
            'name' => $request->name,
            'title' => $request->title,
            'company_name' => $request->company_name,
            'industry_type' => $request->industry_type,
            'mobile' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
            'identity_type' => $request->identity_type,
            'pan' => $request->pan,
            'gstno' => $request->gst,
            'status' => '0',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()
        ]);

        if ($result) {
            return back()->with('success', 'Company created successfully!');
        } else {
            return back()->with('error', 'Error Occured Try After Sometimes!');
        }
    }
}
