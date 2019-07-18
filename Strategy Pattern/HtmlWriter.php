<?php
/**
 * Copyright (c) 2019 - xushuhui
 * Author: xushuhui
 * 微信公众号: 互联网工程师
 * Email: xushuhui@qq.com
 * 博客: https://www.phpst.cn
 */
class HtmlWriter extends Writer
{
    public function write($data){
        $fp = fopen($this->_file,'w');
        fwrite($fp,'<table>');
        foreach ($data as $v) {
            fwrite($fp,"<tr><td>".$v."</td></tr>");
        }
        fwrite($fp,'<table>');
        fclose($fp);
    }
}