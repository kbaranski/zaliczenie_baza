<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Template {
    public $template = 'movies';
	public function action_index()
    {
        $is_login = Session::instance()->get('login');
        if($is_login == 0) $this->redirect('');

        $this->template->movies = ORM::Factory('Movie')->find_all();
        $this->template->movies_popular = ORM::Factory('Movie')->get_popular();

    }



}
