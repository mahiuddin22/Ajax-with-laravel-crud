<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('id', 'DESC')->paginate(5);
        return view('index', compact('teachers'));
    }
    public function allTeachers()
    {
        //
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                "name"      => "required",
                "email"     => "required|unique:teachers",
                "position"  => "required",
                "phone"     => "required|unique:teachers",
                "password"  => "required",
            ],
            [
                "name.required" => "Name is required",
                "email.required" => "Email is required",
                "email.unique" => "Email already exists",
                "position.required" => "Postion is required",
                "phone.required" => "Phone is required",
                "phone.unique" => "Phone already exixts",
                "password.required" => "password is required",
            ]
        );

        $teacher = new Teacher();

        if ($request->position == 1) {
            $position = "Principal";
        } elseif ($request->position == 2) {
            $position = "Head Master";
        } elseif ($request->position == 3) {
            $position = "Assistan Teacher";
        } elseif ($request->position == 4) {
            $position = "Sub-assistan Teacher";
        } else {
            echo "";
        }

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->position = $position;
        $teacher->phone = $request->phone;
        $teacher->password = $request->password;
        $teacher->save();
        return response()->json([
            'status' => 'success',
        ]);
    }
    public function test()
    {
        return view('test');
    }

    public function paginator(Request $request)
    {
        $teachers = Teacher::orderBy('id', 'DESC')->paginate(5);
        return view('pagination_index', compact('teachers'))->render();
    }

    //I used 3 way to search according to collumn. Only one column is enough for create search.
    public function search(Request $request)
    {
        $teachers = Teacher::where('name', 'like', "%" . $request->searchString . "%")
            ->orwhere('position', 'like', "%" . $request->searchString . "%")
            ->orwhere('email', 'like', "%" . $request->searchString . "%")
            ->orwhere('phone', 'like', "%" . $request->searchString . "%")->orderBy('id', 'DESC')->paginate(5);

        if ($teachers->count() >= 1) {
            return view('pagination_index', compact('teachers'))->render();
        } else {
            return response()->json([
                'status' => 'nothing'
            ]);
        }
    }
}
