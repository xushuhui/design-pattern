<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
class DataModel
{
    private $writer;
    public function __construct($writer){
        $this->writer = $writer;
    }
    
    public function export(){
        $data = [
            [1,'test1'],
            [2,'test2'],
            [3,'test3']
        ];
        $this->writer->write($data);
    }
}