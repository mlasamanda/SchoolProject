<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $teachers=User::orderBy('id','ASC')->paginate(10);
     return view('teachers.index',compact('teachers'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'nation'=>'required',
            'salary'=>'required',
            'mobile'=>'required',
            'dob'=>'required',
        ]);
        $teacher=new User();
        $teacher->fname=$request->fname;
        $teacher->lname=$request->lname;
        $teacher->email=$request->email;
        $teacher->password=md("123456");
        $teacher->gender=$request->gender;
        $teacher->nation=$request->nation;
        $teacher->mobile=$request->mobile;
        $teacher->salary=$request->salary;
        $teacher->dob=$request->dob;
        $teacher->roles="student";
        $teacher->save();
        return redirect()->route('teachers.index')
        ->with('success','New Successfully added ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachers = User::find($id);
        return view('teachers.show',compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $teacher=User::find($id);
     return view('teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'nation'=>'required',
            'salary'=>'required',
            'mobile'=>'required',
            'dob'=>'required',
            'roles'=>'required',
        ]);
       $teacher=User::find($id);
       $teacher->fname=$request->fname;
       $teacher->lname=$request->lname;
       $teacher->email=$request->email;
       $teacher->gender=$request->gender;
       $teacher->nation=$request->nation;
       $teacher->salary=$request->salary;
       $teacher->mobile=$request->mobile;
       $teacher->dob=$request->dob;
       $teacher->roles=$request->roles;
       $teacher->update();
       return redirect()->route('teachers.index')
       ->with('success','successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=User::find($id);
        $teacher->delete();
        return redirect()->route('teachers.index')
        ->with('success','User successfull deleted');

    }
}
