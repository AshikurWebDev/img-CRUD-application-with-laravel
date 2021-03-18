<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent() 
    {
        return view('add-student');
    }

    public function storeStudent(Request $req)
    {
        $name = $req->name;
        $image = $req->file('file');
        $imageName = time(). '.'. $image->extension();
        $image-> move(public_path('images'), $imageName);

        $student = new Student();

        $student->name = $name;
        $student->profileimage = $imageName;
        $student->save();
        return back()->with("student_added", "Student Record has been inserted successfully....");
    }

    public function students() 
    {
        $students = Student::all();
        return view('all-student', compact('students'));
    }

    public function editstudent($id) 
    {
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    public function updateStudent(Request $req)
    {
        $name = $req->name;
        $image = $req->file('file');
        $imageName = time(). '.'. $image->extension();
        $image->move(public_path('images'), $imageName);

        $student = Student::find($req->id);
        $student->name = $name;
        if($imageName != $student->profileImage){
            unlink(public_path('images').'/'.$student->profileImage);
            $student->profileImage = $imageName;
        }else{
            echo "<script> alert('Image already Exits'); </script>";
        }
        $student->save();
        return back()->with('student_updated', 'Student Record hass been updated successfully');
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        unlink(public_path('images').'/'.$student->profileImage);
        $student->delete();
        return back()->with('student_deleted', 'Student deleted successfully');
    }
}
