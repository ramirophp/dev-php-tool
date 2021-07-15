<?php

class Piezas {

    public function __construct () {}

    public function getArticles () {

        $sesionCurl = curl_init();

        curl_setopt($sesionCurl,CURLOPT_URL,'https://api.piezas.xyz/articulos/registros');

        curl_setopt($sesionCurl,CURLOPT_RETURNTRANSFER,true);

        $response = curl_exec($sesionCurl);

        if(curl_errno($sesionCurl)) {

            die(curl_error($sesionCurl));

        }

        curl_close($sesionCurl);

        return json_decode($response,true);

    }

    public function getCategories () {

        $sesionCurl = curl_init();

        curl_setopt($sesionCurl,CURLOPT_URL,'https://api.piezas.xyz/categorias/registros');

        curl_setopt($sesionCurl,CURLOPT_RETURNTRANSFER,true);

        $response = curl_exec($sesionCurl);

        if(curl_errno($sesionCurl)) {

            die(curl_error($sesionCurl));

        }

        curl_close($sesionCurl);

        return json_decode($response,true);

    }

    public function getTags () {

        $sesionCurl = curl_init();

        curl_setopt($sesionCurl,CURLOPT_URL,'https://api.piezas.xyz/etiquetas/registros');

        curl_setopt($sesionCurl,CURLOPT_RETURNTRANSFER,true);

        $response = curl_exec($sesionCurl);

        if(curl_errno($sesionCurl)) {

            die(curl_error($sesionCurl));

        }

        curl_close($sesionCurl);

        return json_decode($response,true);

    }

    public function getAttrs () {

        $sesionCurl = curl_init();

        curl_setopt($sesionCurl,CURLOPT_URL,'https://api.piezas.xyz/atributos/registros');

        curl_setopt($sesionCurl,CURLOPT_RETURNTRANSFER,true);

        $response = curl_exec($sesionCurl);

        if(curl_errno($sesionCurl)) {

            die(curl_error($sesionCurl));

        }

        curl_close($sesionCurl);

        return json_decode($response,true);

    }

    public function listTags (array $tags) {

        echo "<pre>";

        foreach ( $tags['data'] as $tag ) {

            echo "{$tag['id']} ------- {$tag['name']}\n";

        }

        echo "</pre>";

    }

    public function listAttrs (array $attrs) {

        echo "<pre>";

        foreach ( $attrs['data'] as $attr ) {

            echo "{$attr['id']} ------- {$attr['name']}\n";

        }

        echo "</pre>";

    }

    public function listArticles (array $articles) {

        echo "<pre>";

        foreach ( $articles['data'] as $article ) {

            echo "id ------- {$article['id']}\n";
            echo "title ------- {$article['title']}\n";
            echo "body ------- {$article['body']}\n";
            echo "author ------- {$article['author']}\n";
            echo "category id ------- {$article['category_id']}\n";
            echo "category name ------- {$article['category_name']}\n";
            echo "\n-----------------------------------------------\n";

        }

        echo "</pre>";

    }

    public function listCategories (array $categories) {

        echo "<pre>";

        foreach ( $categories['data'] as $category ) {

            echo "id ------- {$category['id']}\n";
            echo "name ------- {$category['name']}\n";
            echo "\n-----------------------------------------------\n";

        }

        echo "</pre>";

    }

}

$piezas = new Piezas;

$a = $piezas->getTags();

$b = $piezas->getAttrs();