<?php

class Encrypter {

    private static $Key = "laguna";

    public static function encrypt ($input) {

        $encrypted = base64_encode(openssl_encrypt($input, AES-256-CBC, md5(Encrypter::$Key), $options = 0, $iv = "" ));
        return $encrypted;
    }

    public static function decrypt ($input) {

        $decrypted = openssl_decrypt(base64_decode($input), AES-256-CBC, md5(Encrypter::$Key), $options = 0, $iv = "");
        return $decrypted;
    }
}