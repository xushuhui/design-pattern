<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
class CsvWriter extends AbstractWriter
{
    public function write($data){
        $fp = fopen($this->_file,'w');
        foreach ($data as $v) {
            fputcsv($fp,$v);
        }
        fclose($fp);
    }
}