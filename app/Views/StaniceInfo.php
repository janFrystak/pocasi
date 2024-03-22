<?php
echo $this->extend("layout/template");
echo $this->section("content"); ?>
<h1>Přehled meteorologických stanic</h1>
<?php 

$cesta = "pic/vlajky/";
foreach ($bundesland as $stanice) : ?>

<div class="container-fluid">
    <div class ="row">
<div class="card">
  <div class="card-body">
  <h4 class="card-title"><?= $stanice->place ?></h4>
    <p class="card-text">Zeměpisná výška: <?= $stanice->geo_latitude ?></p>
    <p class="card-text">Zeměpisná šířka: <?= $stanice->geo_longtitude ?></p>
    <img class="card-img" width="400" height="300"> <?php echo img ($cesta.$stanice->flag);?></img>
  
  
   
  </div>
</div>
</div>
</div>
<?php endforeach ;

 $this->endSection(); ?>