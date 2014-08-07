#!/usr/bin/php
<?php
@header("Content-Type: text; charset=utf-8");
$feed  = 'http://www.safran.io/feed.rss';
$data = simplexml_load_file($feed);
$items = array_slice($data->channel->item,0,10);

foreach($data->channel->item as $item){
	echo "\n\xF0\x9F\x94\xB9  \033[0;37m{$item->title}\033[0m ";
	echo "\n\t{$item->link}";
}