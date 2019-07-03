<?php
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