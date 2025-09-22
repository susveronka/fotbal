<?php

#https://moodle.oauh.cz/mod/page/view.php?id=47063
namespace App\Controllers;
use App\Models\Article;
use App\Models\Team;
use App\Models\Season;

class Main extends BaseController
{
    var $article;
    var $tym;
    var $season;

    public function __construct()
    {
        $this->article = new Article(); 
        $this->tym = new Team();
        $this->season = new Season();
    }

    public function prvniStranka() 
    {
            $data['articles'] = $this->article
        ->where('top', 1)
        ->orderBy('id', 'DESC')
        ->findAll();

    return view('prvniStranka', $data);
   
    } 

    public function clanek() 
    {
      return view('clanek');
    } 

    public function seznamClanku() 
    {
      $data['articles'] = $this->article
        ->where('top', 1)
        ->orderBy('id', 'DESC')
        ->findAll();
        return view('seznamClanku', $data);
    }

    public function sezony() 
    {
      $data['season'] = $this->season
        ->orderBy('start_year', 'DESC')
        ->findAll();

        return view('sezony', $data);
    }
}
