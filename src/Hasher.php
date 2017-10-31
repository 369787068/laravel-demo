<?php
namespace Laravist\Hasher;

class MD5Hasher{

    static public function encrypt($value, $salt=''){
        return hash('MD5', $value.$salt);
    }

    static public function check($value, $hashValue, $salt=''){
        return hash('MD5', $value . $salt) == $hashValue;
    }

}