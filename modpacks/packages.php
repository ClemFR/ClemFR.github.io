<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

if (count(array_intersect(array('lesreliquesontdutalent'), $keys)) > 0)
$packages[] = array(
    'name' => '1162++',
    'title' => 'Les Reliques ont du TALENT',
    'version' => 'rc1.0.0',
    'priority' => 1,
    'location' => 'reliques.json',
);

$packages[] = array(
    'name' => 'ZeAlmPak',
    'title' => 'ZeAlmPak',
    'version' => 'rc1.0.0',
    'priority' => 0,
    'location' => 'AlmPakRC1.0.0.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
