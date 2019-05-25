<?php

class Encrypter {

    private static $Key = "laguna";

    public static function encrypt ($input) {

        //$output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
        $encrypted = base64_encode(openssl_encrypt($input, AES-256-CBC, md5(Encrypter::$Key), $options = 0, $iv = "" ));
        return $encrypted;
    }

    public static function decrypt ($input) {

        //$output = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), base64_decode($input), MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))), "\0");
        $decrypted = openssl_decrypt(base64_decode($input), AES-256-CBC, md5(Encrypter::$Key), $options = 0, $iv = "");
        return $decrypted;
    }
}