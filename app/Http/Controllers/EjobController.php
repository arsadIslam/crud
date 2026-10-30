<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejob;
class EjobController extends Controller
{
    function index()
    {
        return view('productform');
    }
    function addproducts(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $obj = new Ejob();
        $obj->title = $title;
        $obj->description = $description;
        $obj->save();
        return redirect('/viewproducts');


    }
    function viewproducts()
    {
        $data = Ejob::all();
        return view('viewproducts', ['data' => $data]);
    }
    function editproducts($eid)
    {
        $data = Ejob::find($eid);
        return view('editproducts', ['data' => $data]);
    }
    function updateproducts(Request $request)
    {
        $eid = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('description');
        $obj = Ejob::find($eid);
        $obj->title = $title;
        $obj->description = $description;
        $obj->save();
        return redirect('/viewproducts');
    }
    function deleteproducts($eid)
    {
        $obj = Ejob::find($eid);
        $obj->delete();
        return redirect('/viewproducts');
    }
}