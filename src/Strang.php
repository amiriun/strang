<?php

namespace Amiriun;

/**
 * Class Strang
 *
 * @package Amiriun
 */
class Strang
{
    /**
     * @param $length
     * @param string|null $characters
     * @return string
     */
    public function random($length, $characters = null)
    {
        if (is_null($characters)) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
