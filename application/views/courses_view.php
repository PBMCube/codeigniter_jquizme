<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



echo $row->name . '<br />';
foreach ($row->topics as $topic) {
    echo $topic->name . '<br />';
}
?>

