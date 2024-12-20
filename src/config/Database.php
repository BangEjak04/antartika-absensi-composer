<?php

namespace AMCC\MVC\Config;

use mysqli;

class Database
{
    private static ?\mysqli $conn = null;

    public static function getConnection() : \mysqli
    {
        if (self::$conn == null) {
            self::$conn = new mysqli(
                'localhost',
                'root',
                '',
                'antartika_absensi'
            );
        }

        return self::$conn;
    }
}
