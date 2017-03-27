<?php

require 'vendor/autoload.php';

use Maslosoft\EmbeDi\Adapters\ArrayAdapter;
use Maslosoft\EmbeDi\EmbeDi;
use Maslosoft\Guides\Mangan\Models\Leaf;
use Maslosoft\Guides\Mangan\Models\Plant;
use Maslosoft\Mangan\Mangan;

// Use EmbeDi to configure Mangan
$config = [
	'mongodb' => [
		'class' => Mangan::class,
		// Database name
		'dbName' => 'quick-start',
	]
];
EmbeDi::fly()->addAdapter(new ArrayAdapter($config));

// Store document
$plant = new Plant;

$plant->name = 'Oak';
$plant->leafs = [
	new Leaf,
	new Leaf
];

$plant->save();

// Retrieve stored document
$found = (new Plant)->find();

var_dump($found->name);
var_dump($found->leafs[0]->color);
