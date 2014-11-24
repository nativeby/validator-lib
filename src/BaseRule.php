<?php

namespace Validator;

require_once('Validator/Validator.php');

abstract class BaseRule
{
    protected static function rules(){}

    protected static function messages(){}

    protected static function setPresenceVerifier(Validator $validator)
    {
        return true;
    }

    public static function validator($params = array())
    {
        $class = get_called_class();

        $validator = new Validator($params, $class::rules(), $class::messages());

        $class::setPresenceVerifier($validator);

        if ($validator->fails()) {
            return $validator->getFallbackMessage();
        }

        return true;
    }
}