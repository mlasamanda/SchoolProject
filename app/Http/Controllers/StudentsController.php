<?php

namespace App\Http\Controllers;
use App\models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $students=Student::orderBy('id','ASC')->paginate(10);
     return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate( [
            'fname' => 'required',
            'middle'=>'required',
            'lname' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'dob'=>'required',
            'form' => 'required',
            'tution'=>'required',
             'nation'=>'required'
        ]);
    
        $student=new Student();
        $student->fname=$request->fname;
        $student->middle=$request->middle;
        $student->lname=$request->lname;
        $student->gender=$request->gender;
        $student->mobile=$request->mobile;
        $student->form=$request->form;
        $student->tutionFee=$request->tution;
        $student->dob=$request->dob;
        $student->nation=$request->nation;
        $student->save();
        return redirect()->route('students.index');
                         
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $students=Student::find($id);
    return view('students.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $student=Student::find($id);
    return view('students.edit',compact('student'));
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
        $request->validate( [
            'fname' => 'required',
            'middle'=>'required',
            'lname' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'form' => 'required',
            'nation'=>'required'
        ]);
        
        $student=Student::find($id);
        $student->fname=$request->fname;
        $student->middle=$request->middle;
        $student->lname=$request->lname;
        $student->gender=$request->gender;
        $student->form=$request->form;
        $student->nation=$request->nation;
        $student->mobile=$request->mobile;
        $student->update();
        return redirect()->route('students.index')
        ->with('success','student successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    Student::find($id)->delete();
    return redirect()->route('students.index')
    ->with('success','User successfully deleted');
    }
}
