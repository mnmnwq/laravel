<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller
{
    public function __construct(){
    }
    /**
     * 图片上传
     */
    public function upload(){
        $file = Input::file('Filedata');
        if($file->isValid()){    //验证$file是否有效
            //$realPath = $file->getRealPath();   //临时文件的真实路径（绝对路径）
            $entension = $file->getClientOriginalExtension();  //上传文件的后缀
            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
            $path = $file->move(base_path().'/uploads/'.date('ymd',time()),$newName);  //移动并且重命名
            $file_path = 'uploads/'.date('ymd',time()).'/'.$newName;
            return $file_path;
        }
        exit();
    }
}
