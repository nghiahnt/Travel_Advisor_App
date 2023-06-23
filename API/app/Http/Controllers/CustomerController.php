<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

use DB;

class CustomerController extends Controller
{
    //
    public function index($id = null){
        if($id==null){
            return Customer::orderBy('customer_id','asc')->get();
        }
        else{
            return Customer::where('customer_id', $id)->get();
        }
    }
    public function create (Request $req){
        try { 
            $customer = new Customer();
            $customer->username = $req->input('username');
            $customer->password = $req->input('password');
            $customer->name = $req->input('name');
            $customer->info = $req->input('info');

            $customer->save();
            return $customer;
        } catch(Throwable $err){
            return $err->getMessage();
        }
    }
    public function update ($id, Request $req){
        try { 
            $customer = Customer::find($id);
            if($customer!=null){
                $customer->username = $req->input('username');
                $customer->password = $req->input('password');
                $customer->name = $req->input('name');
                $customer->info = $req->input('info');
                $customer->save();
                return $customer;
            }
            else{
                return "data not found";
            }
        } catch(Throwable $err){
            return $err->getMessage();
        }
    }
    public function delete ($id, Request $req){
        try { 
            $customer = Customer::find($id);
            if($customer!=null){
                $customer->delete();
                return $customer;
            }
        } catch(Throwable $err){
            return $err->getMessage();
        }
    }
    public function login (Request $req){
        try { 
            $customer = Customer::where('username',$req->username)->where('password',$req->password)->get();
            if($customer!=null){
                return $customer;
            }
            else{
                return "Tài khoản hoặc mật khẩu sai" ;
            }
        } catch(Throwable $err){
            return $err->getMessage();
        }
    }
}
