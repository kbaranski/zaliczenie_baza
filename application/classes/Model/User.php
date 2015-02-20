<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM {


    public function login($data) {
        $record = ORM::Factory('User')->where('login','=',$data['login'])->where('pass','=',md5($data['pass']))->find();

        if($record->id!='') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}


