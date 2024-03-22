<?php

use App\Models\Bundesland;

echo $this->extend("layout/template");
echo $this->section("content"); 
$mapRoute = 'pic/mapy/';
$flagRoute = 'pic/vlajky/';

$myFlag = [
  "src" => $flagRoute.$bundesland->flag,
  "class" => "img-responsive card-img-top",
  "alt" => "Flag"
];

$myMap = [
  "src" => $mapRoute.$bundesland->map,
  "class" => "img-responsive card-img-top",
  "alt" => "Map"
];

?>

<div class="container-fluid">
    <div class ="row">
<div class="card">
  <div class="card-body">
  <h4 class="card-title"><?= $bundesland->name?></h4>
     <p class="card-text"><?php echo img ($myFlag);?> </p>
    <p class="card-text"><?php echo img ($myMap);?></p> 
  
  
   
  </div>
</div>
</div>
</div>



<?php $this->endSection(); ?>