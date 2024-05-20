<?php
    $info = [
        "map-marker" => [
            "content" => $unidades[1]['rua']." - ".$unidades[1]['bairro']." - ".$unidades[1]['cidade']."/".$unidades[1]['uf'],
            "description" => "Como chegar pelo Google Maps",
            "target" => $unidades[1]['link_maps'],
        ],
        "email" => [
            "content" => "$emailContato",
            "description" => "Entre em contato via E-Mail",
            "target" => "mailto:$emailContato",
        ],
    ];
    $social = [
        "instagram" => [
            "description" => "Confira no Instagram!",
            "target" => $instagram,
        ],
        "linkedin" => [
            "description" => "Confira no LinkedIn!",
            "target" => $linkedin,
        ],
    ];
    $nav = [
        "index" => "Home",
        "sobre" => "Sobre Nós",
        "Produtos" => [
            "Principal" => [
                "Tinta",      
            ],
        ],
        // "blog" => "Notícias",
    ];
?>