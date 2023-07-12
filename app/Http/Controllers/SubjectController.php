<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
         $subjects=Subject::orderBy('id','ASC')->paginate(10);
        return view('subjects.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
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
            'coursecode'=>'required',
            'coursename'=>'required',
             
        ]);
        $subject=new Subject();
        $subject->coursecode=$request->coursecode;
        $subject->coursename=$request->coursename;
        $subject->save();
        return redirect()->route('subject.index')
        ->with('success','subject successfully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $subject=Subject::find($id);
            return view('subjects.edit',compact('subject'));
           }
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
            'coursecode'=>'required',
            'coursename'=>'required',
             
        ]);
        $subject=Subject::find($id);
        $subject->coursecode=$request->coursecode;
        $subject->coursename=$request->coursename;
        $subject->update();
        return redirect()->route('subject.index')
        ->with('success','subject successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject=Subject::find($id);
        $subject->delete();
        return redirect()->route('subject.index');
    }
}
