<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\ExamList;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function list(){
        $exam = ExamList::where('status',1)->get();

        return ApiResponse::success($exam);
    }
}
