<?php

#https://moodle.oauh.cz/mod/page/view.php?id=47063
namespace App\Controllers;
use App\Models\Article;
use App\Models\Team;

class Main extends BaseController
{
    var $article;
    var $tym;

    public function __construct()
    {
        $this->article = new Article(); 
        $this->tym = new Team();
    }

    public function prvniStranka() 
    {
        return view('prvniStranka');
    } 

    public function clanek() 
    {
        return view('clanek');
    } 
    public function seznamClanku($page = 1) 
    {
        $data['articles'] = $this->article->findAll();
        return view('seznamClanku', $data);
    }
}
