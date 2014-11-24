<?php

    use Validator\CustomRules;

    require_once('Validator/CustomRules.php');

    try{

        $data = array(
            'mobile' => '1234578965',
            'email' => 'aaatestnext.com',
        );

        $ret = CustomRules::validator($data);

        if($ret !== true){
            throw new Exception('验证不通过',-1);
        }
    }catch(Exception $e) {
        echo "hello" . $e->getMessage() .$e->getCode();
    }