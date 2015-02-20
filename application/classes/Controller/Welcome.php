<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
    public $template = 'login';
	public function action_index()
    {

        if(isset($_POST['login']) and isset($_POST['pass'])) {

            if(ORM::factory('User')->login($_POST)) {

                Session::instance()->set('login', 1);

            } else {
                $this->template->error = 'Podano błędne dane.';
            }

        }

    }

    public function action_logout()
    {

        Session::instance()->set('login', 0);
        $this->redirect();


    }

} // End Welcome
