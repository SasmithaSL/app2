<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use App\Models\StudentModel;
use Illuminate\View\View;
class StudentController extends Controller
{
    public function test(){
        dd('sss');
    }
    public function index(): View
    { 
        // dd('gg');
        $students = StudentModel::all();
        return view ('index')->with('students', $students);
    }
 
    public function create()
    {
        return view('create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        // dd('ss');
        
        // $input = $request->all();
        // Student::create($input);

        $student = new StudentModel();
        $student->name=$request->name;
        $student->address=$request->name;
        $student->mobile=$request->name;
        $student->save();
        return redirect('/student')->with('flash_message', 'Student Addedd!');
    }
    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!'); 
    }
}