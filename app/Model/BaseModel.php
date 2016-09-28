<?php
abstract class BaseModel{
    protected $_table;
    private $_list;
    protected $_base_cloumn = ['id','addtime'];
    protected $_extend_cloumn;
    protected $_column;
    protected $_list_index = 0;
    private $_storage_path;
    private $_where_condition = array();

    public function __construct(){
        if(!$this->_table){
            $this->_table = str_replace('model','',strtolower(__CLASS__));
        }
        $this->_column = array_merge($this->_base_cloumn,$this->_extend_cloumn);

        $this->_storage_path = index_path . '/database/' . $this->_table . '.json';

        if(file_exists($this->_storage_path)){
            $content = file_get_contents(index_path . '/database/' . $this->_table . '.json');
            $this->_list = json_decode($content,true);
        }else{
            $this->_list = array();
        }
    }

    public function add($data){
        foreach($data as $item){
            $record = array_merge($this->emptyRecord(),array_only($item,$this->_column));
            array_push($this->_list,$record);
        }
    }

    public function save(){
        file_put_contents($this->_storage_path,json_encode($this->_list));
        return true;
    }

    public function emptyRecord(){
        $record = array();
        foreach($this->_column as $val){
            if($val === 'id'){
                $endrecord = end($this->_list);
                $record['id'] = $endrecord['id'] + 1;
            }elseif($val == 'addtime'){
                $record['addtime'] = time();
            }else{
                $record[$val] = '';
            }
        }
        return $record;
    }

    /**
     * @param $conditon where
     */
    public function where($conditon){
        $this->_where_condition = array_merge($this->_where_condition,$conditon);
    }

    public function get(){
        $tmpList = $this->_list;
        foreach($this->_where_condition as $key=>$val){
            foreach($tmpList as $k=>$v){
                if($v[$key] != $val){
                    unset($tmpList[$k]);
                }
            }
        }
        return array_values($tmpList);
    }

    public function delete(){
        foreach($this->_where_condition as $key=>$val){
            foreach($this->_list as $k=>$v){
                if($v[$key] == $val){
                    unset($this->_list[$k]);
                }
            }
        }
        $this->_list = array_values($this->_list);
    }
}