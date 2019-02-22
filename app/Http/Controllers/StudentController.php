<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        

       //$students=Student::orderBy('lastname','DESC')->paginate(10);
        $students= Student::all();
        return view('Student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(empty($request->user()))
        {
            return redirect()->route('login');
        }

        $request->user()->authorizeRoles(['admin']);      



        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['id_student'=>'required','name'=>'required','lastname'=>'required','age'=>'required','phone'=>'required','address'=>'required','birthdate'=>'required']);
        Student::create($request->all());
        return redirect()->route('Student.index')->with('status','Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_student)
    {
        //
        $students=Student::find($id_student);
        return view('Student.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id_student)
    {
        //
        $student=student::find($id_student);
        return view('student.edit',compact('student'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_student)
    {
        
         $this->validate($request,['id_student'=>'required','name'=>'required','lastname'=>'required','age'=>'required','phone'=>'required','address'=>'required','birthdate'=>'required']);
         Student::find($id_student)->update($request->all());
         return redirect()->route('Student.index')->with('status','Record updated succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_student)
    {
        //
        Student::find($id_student)->delete();
        return redirect()->route('Student.index')->with('status','Record deleted succesfully');
    }
}
