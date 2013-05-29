<?php

include('Item.php');

$my_item_id = 1;

$my_item = new Item($my_item_id);

echo $my_item->get_id();