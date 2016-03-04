<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var_dump($has_access);

if ($has_access === false) {

echo $row->name . '<br />';
foreach ($row->topics as $topic) {
    echo $topic->name . '<br />';
}
} else {
 echo 'you can have it all';
}
?>

