<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movie extends Controller_Template {
    public $template = 'movie';
	public function action_index()
    {
        $id = $this->request->param('id');



        if(isset($_POST['opinion'])) {

            $add = ORM::Factory('Movies_Opinion')->values($_POST);
            $add->save();

            $this->template->info = 'Recenzja została dodana';
        }

        $this->template->opinions = ORM::Factory('Movies_Opinion')->where('movies_id','=',$id)->find_all();



        $this->template->movie = ORM::Factory('Movie',$id);

    }



}
