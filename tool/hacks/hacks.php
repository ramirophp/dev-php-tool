<?php

function links (array $text_url,Envoltura $evta) {

    $items = [];

    $texts = array_keys($text_url);
    $urls = array_values($text_url);

    for ($i = 0; $i < count($texts); $i++) {

        array_push($items,$evta->a($texts[$i],[
            'href' => $urls[$i]
        ]));

    }

    return $items;

}