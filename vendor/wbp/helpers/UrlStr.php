<?php
/**
 * Created by PhpStorm.
 * User: Maksim Sergeevich (doctorpepper608@gmail.com)
 * Date: 19.05.2016
 * Time: 16:36
 */

namespace vendor\wbp\helpers;


class UrlStr
{
    public static function urlstr($str, $char = '-')
    {
        // Returns $str, in which all non-alphanumeric characters are replaced by $char, and $char is trimmed from both ends.
        return mb_strtolower(trim(preg_replace('/[^[:alnum:]]+/', $char, UrlStr::translitIt($str)), $char));
    }

    public static function translitIt($str)
    {
        $tr = array(
            "А" => "A", "Б" => "B", "В" => "V", "Г" => "G",
            "Д" => "D", "Е" => "E", "Ж" => "J", "З" => "Z", "И" => "I",
            "Й" => "Y", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N",
            "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T",
            "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "TS", "Ч" => "CH",
            "Ш" => "SH", "Щ" => "SCH", "Ъ" => "", "Ы" => "YI", "Ь" => "",
            "Э" => "E", "Ю" => "YU", "Я" => "YA", "а" => "a", "б" => "b",
            "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ж" => "j",
            "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l",
            "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
            "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h",
            "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "y",
            "ы" => "yi", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya",

            'ù' => 'u', 'û' => 'u', 'ü' => 'u', 'ÿ' => 'y', 'à' => 'a',
            'â' => 'a', 'æ' => 'ae', 'ç' => 'c', 'é' => 'e', 'è' => 'e',
            'ê' => 'e', 'ë' => 'e', 'ï' => 'i', 'î' => 'i', 'ô' => 'o', 'œ' => 'ce',
            'Ù' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ÿ' => 'Y', 'À' => 'A', 'Â' => 'A',
            'Æ' => 'AE', 'Ç' => 'C', 'É' => 'E', 'È' => 'E', 'Ê' => 'E', 'Ë' => 'E',
            'Ï' => 'I', 'Î' => 'I', 'Ô' => 'O', 'Œ' => 'CE',

        );
        return strtr($str, $tr);
    }
}