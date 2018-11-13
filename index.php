<?php

include_once('config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    $id = 1;
}

include_once('header.php');

include_once('page.php');

include_once('footer.php');

