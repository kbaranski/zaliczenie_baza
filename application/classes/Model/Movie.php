<?php defined('SYSPATH') or die('No direct script access.');


class Model_Movie extends ORM {

    public static function get_popular() {
        $sql = 'SELECT * , (SELECT count(*) FROM movies_opinions WHEre movies_id = movies.id) as count FROM movies ORDER by count desc ';
        $records = DB::query(DATABASE::SELECT,$sql)->execute(NULL,true);
        return $records;
    }

}


