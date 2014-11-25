<?php

    require 'vendor/autoload.php';

    $data = array(
        'mobile' => '1234578965',
        'email' => 'aaatestbaihe.com',
    );

    $ret = Validator\CustomRules::validator($data);

    try{
        if($ret !== true){
            var_dump($ret);
            throw new Exception('验证不通过',-1);
        }
    }catch(Exception $e) {
        echo "hello" . $e->getMessage() .$e->getCode();
    }