<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Template {
    public $template = 'register';
	public function action_index()
    {

        $is_login = Session::instance()->get('login');
        if($is_login == 1) $this->redirect('index.php/movies');

        if(isset($_POST['login']) and isset($_POST['pass'])) {
            $_POST['pass'] = md5($_POST['pass']);
           $save = ORM::factory('User')->values($_POST)->save();

            $this->template->info = 'Zostałeś zarejestrowany';

        }

    }



} // End Welcome
