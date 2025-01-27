<?php
    
class validator{
    public function string($value){
        $value = trim($value);
        if(strlen($value) === 0)
            return strlen($value);
        return 1;
    }
}