<?php
/**
 * Created by PhpStorm.
 * User: andrey-kun
 * Date: 24.01.19
 * Time: 16:27
 */

namespace App;


class Util
{
    public static function getValues(array $from_array, array $values_names)
    {
        $values = [];
        foreach ($values_names as $value_name) {
            if (isset($from_array[$value_name])) {
                $values[$value_name] = $from_array[$value_name];
            } else {
                $values[$value_name] = "";
            }
        }
        return $values;
    }

    public static function isExistsEmptyValues($values)
    {
        return $values == null || in_array('', $values);
    }
}