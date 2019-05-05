<?php
namespace Helpers;

class Tools {
    
    private static $posts = array();
    
    // --- XSS free
    public static function getPost($name, $default = "") {
        if (array_key_exists($name, $_POST)) {
            $post = $_POST[$name];
            if (is_string($post))
                $post = self::_sanitize($post);
                return $post;
        }
        return $default;
    }
    
    public static function getGet($name, $default = "") {
        if (array_key_exists($name, $_GET)) {
            $get = $_GET[$name];
            if (is_string($get))
                $get = self::_sanitize($get);
                return $get;
        }
        return $default;
    }
    
    public static function getRequest($name, $default = "") {
        if (array_key_exists($name, $_REQUEST)) {
            $req = $_REQUEST[$name];
            if (is_string($req))
                $req = self::_sanitize($req);
                return $req;
        }
        return $default;
    }
    
    // --- Raw
    public static function getRawPost($name, $default = "") {
        if (array_key_exists($name, $_POST))
            return $_POST[$name];
            return $default;
    }
    
    public static function getRawGet($name, $default = "") {
        if (array_key_exists($name, $_GET))
            return $_GET[$name];
            return $default;
    }
    
    public static function getRawRequest($name, $default = "") {
        if (array_key_exists($name, $_REQUEST))
            return $_REQUEST[$name];
            return $default;
    }
    
    // --- Private functions
    // Prevent XSS injection
    private static function _sanitize($value) {
        return strip_tags( trim($value) );
    }
    
}

