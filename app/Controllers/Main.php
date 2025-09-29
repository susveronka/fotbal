<?php

#https://moodle.oauh.cz/mod/page/view.php?id=47063
namespace App\Controllers;
use App\Models\Article;
use App\Models\Team;
use App\Models\Season;
use App\Models\SeasonLeague;

class Main extends BaseController
{
    var $article;
    var $tym;
    var $season;
    var $seasonLeague;

    public function __construct()
    {
        $this->article = new Article(); 
        $this->tym = new Team();
        $this->season = new Season();
        $this->seasonLeague = new SeasonLeague();
    }

    public function prvniStranka() 
    {
            $data['articles'] = $this->article
        ->where('top', 1)
        ->orderBy('id', 'DESC')
        ->findAll();

    return view('prvniStranka', $data);
   
    } 

    public function clanek($id) 
    {
            $article['articles'] = $this->article
        ->where('id', $id)
        ->first();
      echo view('clanek', $article);
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
        ->orderBy('start', 'ASC')
        ->findAll();

        return view('sezony', $data);
    }


   /*  public function sezona($id) 
    {
       $data['season'] = $this->season
        ->select('season.*, season_league.*')
        ->join('season_league', 'season_league.season_id = seasons.id')
        ->where('seasons.id', $id)
        ->findAll();

    return view('sezona', $data);
  
    } */
}

