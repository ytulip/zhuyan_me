<?php
class IndexController{
    public function index(){
        return View::show('index.html',array());
    }

    public function admin(){
        return View::show('admin.html',array());
    }

    public function savework(){
        $filename = time() . '.jpg';
        PostImage::save(index_path . '/images/work/' . $filename);
        $workModel = new WorkModel();
        $workModel->add(array(array('name'=>$filename,'type'=>IndexController::input('type',1))));
        $workModel->save();
        echo json_encode(array('status'=>true,'path'=>'/images/work/' . $filename));
        exit;
    }

    /**
     * 工作分类列表
     */
    public function worklist(){
        $type = IndexController::input('type');
        $workModel = new WorkModel();
        if($type){
            $workModel->where(array('type'=>$type));
        }
        $res = $workModel->get();
        echo json_encode(array('status'=>true,'data'=>$res));
        exit;
    }



    public function workdelete(){
        $id = IndexController::input('id');
        $workModel = new WorkModel();
        $workModel->where(array('id'=>$id));
        $workModel->delete();
        $workModel->save();
        echo json_encode(array('status'=>true));
        exit;
    }


    static public function input($index,$default=''){
        if(isset($_REQUEST[$index]) && ($_REQUEST[$index] !== '')){
            return $_REQUEST[$index];
        }else{
            return $default;
        }
    }

}