<?php
namespace Helpers;

class hError {
    
    const NO_ERROR = 1;
    public const ERROR_AJAX = "L'action n'existe pas !";
    
    public function getMessage($error)
    {
        echo self::$error;
    }
    
}