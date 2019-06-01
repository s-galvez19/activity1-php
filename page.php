<?php

$tags = file_get_contents("tags.txt");

$array = explode(",", $tags);

foreach($array as $tag) {
    echo $tag."<br>";
}