<?php
    include "config.php";
    // Parâmetros para URL
    $config = new configBase(array(
        // URL local
        "http://localhost/publinet/",
        // URL online
        ""
    ));

    // Principais Dados do Cliente
    $nome_empresa = "Loja Tintas";
    $emailContato = "dlucca29@hotmail.com";

    // Variaveis para schema e site
    $dataDePublicacao = "21/10/2023";
    $dataDeModificacao = "21/10/2023";
    $instagram = "https://www.instagram.com/agenciadigitalpublinet1/";
    $linkedin = "https://www.linkedin.com/company/publinet-1/";
    
    // Logo para o schema e site
    $logo_cliente = "";
    
    // Parâmetros de Unidade
    $unidades = array(
        1 => array(
            "nome" => "Loja de Tintas - Guarulhos / SP",
            "rua" => "R. Sarutaia, 620",
            "bairro" => "Jardim São Paulo",
            "cidade" => "Guarulhos",
            "estado" => "São Paulo",
            "uf" => "SP",
            "cep" => "07131-000",
            "latitude_longitude" => "-23.438698329778443, -46.52535975767193",
            "link_maps" => "https://maps.app.goo.gl/kSn5pnE72ssRkm6k7",
            "ddd" => "11",
            "telefone" => "2425-4678",
            "tel" => "(11) 2425-4678",
            "link_tel" => "tel:1124254678",
            "whatsapp" => "98707-1756",
            "wpp" => "(11) 98707-1756",
            "link_wpp" => "https://wa.me/5511987071756",
        )
    );

    // Telefones para Schema
    $telefones_cliente = [
        $unidades[1]["tel"],
        $unidades[1]["wpp"]
    ];

    // Variáveis da head.php
    $url = $config->url;
    $canonical = $config->canonical;
    
    //Código de acompanhamento GA4
    $ga4 = "";
    
    include "components/head.php";