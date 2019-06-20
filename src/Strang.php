<?php

namespace Amiriun;

/**
 * Class Strang
 *
 * @package Amiriun
 */
class Strang
{
    public static $instance;

    /**
     * Strang constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return Strang
     */
    public static function make()
    {
        if (static::$instance) {
            return static::$instance;
        }

        return static::$instance = new self();
    }

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
