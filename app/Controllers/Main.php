<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bundesland;
use App\Models\Station;
use App\Models\Data;

class Main extends BaseController
{
    var $bundesland;
    var $stanice;
    var $sdata;
    public function __construct() {
        
        $this->bundesland = new Bundesland();
        $this->stanice = new Station();
        $this->sdata = new Data();


    }
    public function getLand() {
        $data["bundesland"]  = $this->bundesland->findAll();
        //var_dump($data["hraci"]);                    up- DANGER - "where to look" , "what to look for"
        echo view("Countries", $data);
    }
    public function getStaniceCard($bundeslandId) {
       // $bundesland = $this->bundesland->findAll();
        $data["station"]  = $this->stanice->where("bundesland", $bundeslandId)->findAll();
        $data["name"] =  $this->bundesland->find($bundeslandId)->name;
        echo view("StaniceCard", $data);
    }
    public function getStaniceInfo($stationId){
        $data["info"] = $this->sdata->where("Stations_ID", $stationId)->findAll();
        $data["name"] = $this->stanice->where("S_ID",$stationId)->place;
        echo view("InfoStation", $data);
    }
    public function index()
    {
        
    }
    
   
}
