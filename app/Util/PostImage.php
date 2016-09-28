<?php
class PostImage{
    static public function save($path){
        $firstKey = '';
        foreach($_FILES as $key=>$val){
            $firstKey = $key;
            break;
        }

        //开始移动文件到相应的文件夹
        move_uploaded_file($_FILES[$firstKey]['tmp_name'],$path);
    }
}