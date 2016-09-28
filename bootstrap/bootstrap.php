<?php
//SPL库里面的spl_autoload_register自动加载类
function dirfilelist($path,&$items,$currentPrefix = ''){
    $dh = opendir($path);
    while(($d = readdir($dh)) != false){
        //逐个文件读取，添加!=false条件，是为避免有文件或目录的名称为0
        if($d=='.' || $d == '..'){//判断是否为.或..，默认都会有
            continue;
        }

        if(is_dir($path.'/'.$d)){//如果为目录
//            showdir($path.'/'.$d);//继续读取该目录下的目录或文件
            dirfilelist($path.'/'.$d,$items,$currentPrefix . '/'.$d);
        }else{
            array_push($items,array('path'=>$currentPrefix.'/'.$d,'filename'=>$d));
        }
    }
}

/**
 * @param $call
 * app下的类全部自动加载
 */
function psr_doncare_autoload($call){
    $items = array();
    dirfilelist(app_path,$items);
    foreach($items as $key=>$val){
        if($val['filename'] == $call . '.php'){
            include_once app_path . $val['path'];
            break;
        }
        continue;
    }
    return;
}


/**
 * @param $src
 * @param $filter
 * @return array
 */
function array_only($src,$filter){
    $res = array();
    foreach($src as $key=>$val){
        if(in_array($key,$filter)){
            $res[$key] = $val;
        }
    }
    return $res;
}

spl_autoload_register('psr_doncare_autoload');
require_once index_path . '/core/Twig-1.24.1/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
