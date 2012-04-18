<?php defined('SYSPATH') or die('No direct script access.');

class Tinyurl{
    
    public static function create($url){
        $tiny = 'http://tinyurl.com/api-create.php?url='.$url;
        return trim(file_get_contents($tiny));
    }
    
}