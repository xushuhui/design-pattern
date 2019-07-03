<?php
abstract class Writer{
    protected $_file;
    public function __construct($file)
    {
        $this->_file = $file;
    }
    abstract function write($data);
}