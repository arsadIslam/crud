<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejob;

class ApiController extends Controller
{
    function addproducts(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $obj = new Ejob();
        $obj->title = $title;
        $obj->description = $description;
        $obj->save();
        return response()->json(['status' => 'success', 'message' => 'Product added successfully']);
    }
    function viewproducts()
    {
        $data = Ejob::all();
        return response()->json(['status' => 'success', 'data' => $data]);
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
        return response()->json(['status' => 'success', 'message' => 'Product updated successfully']);
    
    }
    function deleteproducts($eid)
    {
        $obj = Ejob::find($eid);
        $obj->delete();
        return response()->json(['status' => 'success', 'message' => 'Product deleted successfully']);
    }
}