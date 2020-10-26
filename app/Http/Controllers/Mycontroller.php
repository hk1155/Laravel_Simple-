<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addrecord;
use Session;

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
        $req->session()->flash('status', $add->pname);
        return redirect('add');
    }

    public function deleteprod($id)
    {
        $d = addrecord::find($id);
        $d->delete();
        Session::flash('status', $d->pname);
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
        $req->session()->flash('status', $add->pname);
        return redirect('display');
    }
}
