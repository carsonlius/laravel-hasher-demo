<?php

namespace Carsonlius\Hasher;


class MD5Hasher
{
    /**
     * hash加密
     * @param string $value
     * @param array $option
     * @return string
     */
    public function make(string $value, $option=[]) : string
    {
        $slat = $option['salt'] ?? '';
        return hash('md5', $value . $slat);
    }

    /**
     *
     * @param string $value
     * @param string $hashValue
     * @param array $option
     * @return bool
     */
    public function check(string $value, string $hashValue, array $option=[]) : bool
    {
        $slat = $option['salt'] ?? '';
        return hash('md5', $value . $slat) === $hashValue;
    }
}