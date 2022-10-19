<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Convert string in associative format to assoc array
 */

if (!function_exists('string_to_array')) {

    function string_to_array($string)
    {
        $array = explode(",", $string);
        $new_array = array();

        foreach ($array as $new_string) {
            $narr = explode("=>", $new_string);
            //$narr[0] = str_replace("\x98", "", $narr[0]);
            //$ytr[1] = $narr[1];
            $new_array[$narr[0]] = $narr[1];
        }

        return $new_array;
    }
}
