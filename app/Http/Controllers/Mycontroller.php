<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addrecord;
use App\empdata;
use Session;
use Crypt;
use Auth;


class Mycontroller extends Controller
{
    //
    public function display()
    {
        $data = addrecord::all();
        return view('Display', ["data" => $data]);
    }

    public function addproduct(Request $req)
    {
        $add = new addrecord;
        $add->pname = $req->input('txtproduct');
        $add->price = $req->input('txtprice');
        $add->save();
        $req->session()->flash('status', $add->pname . ' ' . 'Added Successfully');
        return redirect('display');
    }

    public function deleteprod($id)
    {
        $d = addrecord::find($id);
        $d->delete();
        Session::flash('status', $d->pname . ' ' . 'Deleted Successfully');
        return redirect('display');
    }

    public function editprod($id)
    {
        $data = addrecord::find($id);
        return view('edit', ['data' => $data]);
    }

    public function updateprod(Request $req)
    {
        $add = addrecord::find($req->input('txthid'));
        $add->pname = $req->input('txtproduct');
        $add->price = $req->input('txtprice');
        $add->save();
        $req->session()->flash('status', $add->pname . ' ' . 'Updated Successfully');
        return redirect('display');
    }

    public function submitemp(Request $req)
    {
        // return $req->input();
        $add = new empdata([
            'empname' => $req->input("txtname"),
            'username' => $req->input("txtusername"),
            'contact' => $req->input("txtcontact"),
            'password' => Crypt::encrypt($req->input("txtpassword")),
            //'password' => $req->input("txtpassword"),
        ]);
        $add->save();
        $req->session()->flash('status', $add->empname . ' ' . 'Added Successfully');
        return redirect('addemp');
    }

    public function mlogin(Request $req)
    {
        // $user = empdata::where("username", $req->input("txtusername"))->get();

        // if (Crypt::decrypt($user[0]->password) == $req->input("txtpassword") &&  $user[0]->username == $req->input("txtusername")) {
        //     $req->session()->put('loginstatus', $user[0]->empname);
        //     return redirect('add');
        // } else {
        //     $req->session()->flash('errstatus', 'UserName or Password Is Incorrect');
        //     return view('mylogin');
        // }

        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('add');
        } else {
            return redirect('/mylogin');
        }
    }
}
