<?php
class CsvWriter extends Writer
{
    public function write($data){
        $fp = fopen($this->_file,'w');
        foreach ($data as $v) {
            fputcsv($fp,$v);
        }
        fclose($fp);
    }
}