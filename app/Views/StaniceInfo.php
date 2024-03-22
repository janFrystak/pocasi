<?php
echo $this->extend("layout/template");
echo $this->section("content"); ?>
<h1>Přehled meteorologických stanic</h1>
<?php foreach ($bundesland as $stanice) : ?>

<div class="container-fluid">
    <div class ="row">
<div class="card">
  <div class="card-body">
  <h4 class="card-title"><?= $stanice->place ?></h4>
    <p class="card-text">Zeměpisná výška: <?= $stanice->geo_latitude ?></p>
    <p class="card-text">Zeměpisná šířka: <?= $stanice->geo_longtitude ?></p>
    <p class="card-text">Zeměpisná šířka: <?= $stanice->flag ?></p>
  
  
   
  </div>
</div>
</div>
</div>
<?php endforeach ;

 $this->endSection(); ?>