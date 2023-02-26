<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Section;
use App\Models\SessionYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttandenceController extends Controller
{
    public function session(){
        $session  = SessionYear::all();
        return ApiResponse::success($session);
    }

    public function class(){
        $class  = Classes::all();
        return ApiResponse::success($class);
    }
    public function section($class_id){
        $section = Section::where('class_id',$class_id)->get();
        return ApiResponse::success($section);
    }

    public function students($session, $class, $section){
        $table_name = $session.'_'.$class.'_students';

        $students = DB::table($table_name)->where('section',$section)->get();

        return ApiResponse::success($students);
    }

    public function attendance($session, $class, $section, $date, Request $request){
        $table_name = $session.'_'.$class.'_attandence';
        $attandence = DB::table($table_name)->where('section',$section)->where('date',$date)->get();
//        return $request;

        if ($attandence->isNotEmpty()){
            for ($a = 0; $a < count($request->roll); $a++) {
//                return "hello";
                if ($request->roll[$a] && $request->stu_name[$a] && $request->attendance[$a]){
                    foreach ($attandence as $attain){
                        if ($request->roll[$a]==$attain->roll){
                            DB::table($table_name)->where('id',$attain->id)->update([
                                'student_name' => $request->stu_name[$a],
                                'roll'       => $request->roll[$a],
                                'attendance'      =>  $request->attendance[$a],
                                'session_year'   => $session,
                                'class_name'      => $class,
                                'section'    => $section,
                                'date'    => $date,
                            ]);
                        }

                    }


                }

            }
            $attandence2 = DB::table($table_name)->where('section',$section)->where('date',$date)->get();

            return ApiResponse::success($attandence2);

        }else{
//            return "hello";
            for ($a = 0; $a < count($request->roll); $a++) {
                if ($request->roll[$a] && $request->stu_name[$a] && $request->attendance[$a]){
                    DB::table($table_name)->insert([
                        'student_name' => $request->stu_name[$a],
                        'roll'       => $request->roll[$a],
                        'attendance'      =>  $request->attendance[$a],
                        'session_year'   => $session,
                        'class_name'      => $class,
                        'section'    => $section,
                        'date'    => $date,
                    ]);
                }

            }
            $attandence = DB::table($table_name)->where('section',$section)->where('date',$date)->get();

            return  ApiResponse::success($attandence);
        }
    }

}
