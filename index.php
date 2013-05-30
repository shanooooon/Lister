<?php

include('Config.php');
include('Item.php');

$myItemId = 1;

$myItem = new Item($myItemId);

/*
$myItem->set_name('My List');
$myItem->set_status('publish');
$myItem->set_type('list');
$myItem->save();
*/

echo 'ID: ' . $myItem->get_id() . '<br/>';
echo 'Name: ' . $myItem->get_name() . '<br/>';
echo 'Status: ' . $myItem->get_status() . '<br/>';
echo 'Parent: ' . $myItem->get_parent() . '<br/>';
echo 'Type: ' . $myItem->get_type() . '<br/>';