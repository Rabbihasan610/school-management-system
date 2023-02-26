<?php

namespace App\Http\Controllers\Api\Teacher;

use App\Helper\ApiResponse;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeacherProfileController extends Controller
{
    // PROFILE - GET

    public function profile()
    {
        $profile = Auth::guard('teacherApi')->user();

        return response()->json([
            "status"   => 200,
            "data"     => $profile,
        ]);
    }



    //  LOGOUT METHODES - POST

    public function logout(Request $request)
    {
        $token = $request->user()->token();

        $token->revoke();

        return response()->json([
            "status"    => 200,
            "message"   => "Teacher Logged Out Successfully",
        ]);
    }

    public function edit(Request $request){
        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'dob'=>'required',
        ]);

        $teacher = Teacher::find(auth()->guard('teacherApi')->user()->id);
//        return $teacher;

        $teacher->name = $request->name;
        $teacher->gender = $request->gender;
        $teacher->phone = $request->phone;
        $teacher->dob = $request->dob;
        $teacher->save();

        return ApiResponse::success($teacher);
    }

    public function edit_image(Request $request){
        $request->validate([
           'image'=>'required|image'
        ]);
        $image =$request->file('image');
        $teacher = Teacher::find(auth()->guard('teacherApi')->user()->id);
        $width = 417;
        $height = 458;
        $directory = "assets/backend/teacher/";

        if ($image){
            if ($teacher->image){
                unlink($teacher->image);
            }

            $imageurl =image_upload($image,$width,$height,$directory);

            $teacher->image = $imageurl;
            $teacher->save();

            return ApiResponse::success($imageurl);
        }





    }

}
