<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller
{
    /**
     * 图片上传
     */
    public function upload(){
        $input = Input::file('Filedata');
        dd($input);
        var_dump($input);
        exit();
    }
}
