<?php
echo $this->extend("layout/template");
echo $this->section("content"); ?>
<h1>Station id is  <?=$name?></h1>
<?php $table = new \CodeIgniter\View\Table();

$template = [
    'table_open' => '<table class="table table-stripped">',

    'thead_open'  => '<thead>',
    'thead_close' => '</thead>',

    'heading_row_start'  => '<tr>',
    'heading_row_end'    => '</tr>',
    'heading_cell_start' => '<th>',
    'heading_cell_end'   => '</th>',

    'tfoot_open'  => '<tfoot>',
    'tfoot_close' => '</tfoot>',

    'footing_row_start'  => '<tr>',
    'footing_row_end'    => '</tr>',
    'footing_cell_start' => '<td>',
    'footing_cell_end'   => '</td>',

    'tbody_open'  => '<tbody>',
    'tbody_close' => '</tbody>',

    'row_start'  => '<tr>',
    'row_end'    => '</tr>',
    'cell_start' => '<td>',
    'cell_end'   => '</td>',

    'row_alt_start'  => '<tr>',
    'row_alt_end'    => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end'   => '</td>',

    'table_close' => '</table>',
];

$table->setTemplate($template);


$table->setHeading("Date","Quality", "Humidity", "Max Wind", "Air Pressure");


//var_dump($bundesland);
foreach($info as $row) {
    $newDate = date("j.n.Y", strtotime($row->date));
    $table-> addRow($newDate, $row->quality, $row->humidity, $row->max_wind, $row->mid_air_pressure);
}


echo $table->generate();




 $this->endSection(); ?>