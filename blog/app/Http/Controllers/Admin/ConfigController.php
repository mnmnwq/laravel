<?php
namespace App\Http\Controllers\Admin;
use App\Http\Model\Config;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ConfigController extends CommonController
{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 信息列表
     */
    public function index(){
        $data = Config::orderBy('conf_order','asc')->get();
        foreach($data as $k=>$v){
            switch($v->field_type){
                case 'input':
                    $data[$k]->_html='<input type="text" name="conf_content[]" class="lg" value="'.$v->conf_content.'">';
                    break;
                case 'textarea':
                    $data[$k]->_html='<textarea class="lg" name="conf_content[]">'.$v->conf_content.'</textarea>';
                    break;
                case 'radio':
                    $data[$k]->_html = '';
                    $radio_arr = explode(',',$v->field_value);
                    foreach($radio_arr as $m=>$n){
                        $arr = explode('|',$n);
                        if($v->conf_content == $arr[0]){
                            if($m != (count($radio_arr) - 1)){
                                $data[$k]->_html .= '<input type="radio" name="conf_content[]" checked value="'.$arr[0].'">'.$arr[1].'&nbsp;&nbsp;|&nbsp;&nbsp;';
                            }else{
                                $data[$k]->_html .= '<input type="radio" name="conf_content[]" checked value="'.$arr[0].'">'.$arr[1];
                            }
                        }else{
                            if($m != (count($radio_arr) - 1)){
                                $data[$k]->_html .= '<input type="radio" name="conf_content[]" value="'.$arr[0].'">'.$arr[1].'&nbsp;&nbsp;|&nbsp;&nbsp;';
                            }else{
                                $data[$k]->_html .= '<input type="radio" name="conf_content[]" value="'.$arr[0].'">'.$arr[1];
                            }
                        }
                    }
                    break;
            }
        }
        return view('admin.config.index',compact('data'));
    }

    /**
     * 删除配置项
     * delete. admin/config/{config} 删除配置项
     */
    public function destroy($conf_id){
        $re = Config::where('conf_id',$conf_id)->delete();
        if($re){
            $this->putFile();
            $data = ['status'=>0,'msg'=>'操作成功'];
        }else{
            $data = ['status'=>1,'msg'=>'操作失败'];
        }
        return $data;
    }

    /**
     * get.admin/config/create  添加
     */
    public function create(){
        return view('admin/config/add',compact('data'));
    }

    /**
     * post.admin/config  添加信息提交
     */
    public function store(){
        $input = Input::except('_token');
        $add_result = Config::create($input);
        if($add_result){
            return redirect('admin/config');
        }else{
            return back('admin/config/create')->with('msg','添加失败');
        }
    }

    /**
     * get.admin/config/{config}/edit 编辑信息
     */
    public function edit($conf_id){
        $field = Config::find($conf_id);
        return view('admin.config.edit',compact('field'));
    }

    /**
     *  put. admin/config/{config}  更新信息
     */
    public function update($conf_id){
        $input = Input::except('_token','_method');
        $result = Config::where('conf_id',$conf_id)->update($input);
        if($result){
            $this->putFile();
            return redirect('admin/config');
        }else{
            return back()->with('msg','修改失败');
        }
    }

    /**
     * get. admin/config/{config}  显示单个配置项
     */
    public function show(){}

    /**
     * 网站配置项的写入
     */
    public function putFile(){
        //echo \Illuminate\Support\Facades\Config::get('web.web_count');
        $config = Config::pluck('conf_content','conf_name')->all();
        $path = base_path().'\config\web.php';
        $str = "<?php return ".var_export($config,true).';';
        file_put_contents($path,$str);
    }

    /**
     * 修改配置项的值
     */
    public function change_content(){
        if($input = Input::all()){
            foreach($input['conf_id'] as $k=>$v){
                Config::where("conf_id",$v)->update(array('conf_content'=>$input['conf_content'][$k]));
            }
            $this->putFile();
            return back()->with('msg','操作成功');
        }
    }

    /**
     * ajax请求修改分类order排序
     * time:2016/9/17 17:38
     */
    public function change_order(){
        $input = Input::all();
        $result = Config::where('conf_id',$input['conf_id'])->update(array('conf_order'=>$input['conf_order']));
        if($result){
            $data = ['state'=>'0','msg'=>'排序更新成功'];
        }else{
            $data = ['state'=>'1','msg'=>'排序更新失败'];
        }
        return $data;
    }
}
