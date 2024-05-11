<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    // create
    public function create()
    {
        return view('Department.create');
    }
    // store
    public function store(Request $req)
    {
        $obj=new Department();
        $obj->name=$req->name;
        $obj->short_name=$req->shortName;
        $obj->established_at=$req->estAt;
        if($obj->save())
        {
            echo "insert successful";
        }
    }
    // all
    public function all()
    {
        $departments=Department::all();
        return view('Department.all',compact('departments'));
    }
    //edit
    public function edit($id)
    {
        $departments=Department::find($id);
        return view('Department.edit',compact('departments'));
    }
    // update
    public function update(Request $req, $id)
    {
        $obj=Department::find($id);
        $obj->name=$req->name;
        $obj->short_name=$req->shortName;
        $obj->established_at=$req->estAt;
        if($obj->save())
        {
           return  redirect('Department/all');
        }
    }
}
