<?php

class FileLocator {
    protected $file = array();
    
    public function __construct($file) {
        $this->file = $file;
    }
    public function get() {
        $filename = $this->file[$file];
        if(is_null($filename)) {
            $filename = realpath($this->filename);
        }
        if(!file_exists($filename)) {
            throw new FileLocatorException("{$file} not found.");
        }
        return $filename;
    }
}