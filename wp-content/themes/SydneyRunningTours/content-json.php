<?php
$data = ['title'=>get_field('title'),
    'lat'=>floatval(get_field('lat')),
    'lng'=>floatval(get_field('lng')),
    'description'=>get_field('description')];
echo json_encode($data) . ',';