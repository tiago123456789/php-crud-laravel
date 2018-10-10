<?php
/**
 * Created by PhpStorm.
 * User: servidor
 * Date: 10/10/18
 * Time: 08:56
 */

namespace App\Helpers;


class MessageHelper
{

    private static $messages = [
        "EDIT.SUCCESS" => "Edited with success",
        "SAVE.SUCCESS" => "Saved with success",
        "DELETE.SUCCESS" => "Deleted with success",
        "EMAIL_JA_EXISTE" => "Email já  está sendo usado!"
    ];

    public static function getMessage(String $key): String {
        $key = strtoupper($key);
        return MessageHelper::$messages[$key];
    }
}