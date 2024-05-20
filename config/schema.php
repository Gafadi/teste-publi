<?php
    $retorno =
    '<script type="application/ld+json">
    {
        "@context":"http://schema.org",
        "@type":"LocalBusiness",
        "name":"'.$nome_empresa.'",
        "image":"'.$url.$logo_cliente.'",
        "telephone":[';
            foreach ($telefones_cliente as $key => $tel) {
                $retorno .= '"' . $tel . '"' . (($key + 1) < count($telefones_cliente) ? ',': '');
            }
        $retorno .='
        ],
        "email":"'.$emailContato.'",
        "address":{
            "@type":"PostalAddress",
            "streetAddress":"'.$unidades[1]['rua'].'",
            "addressLocality":"'.$unidades[1]['bairro'].'",
            "addressRegion":"'.$unidades[1]['cidade'].'",
            "postalCode":"'.$unidades[1]['cep'].'"
        },
        "url":"'.$url.'"
    }
    </script>
    <script type="application/ld+json">
    {
        "@context":"http://schema.org",
        "@type":"Article",
        "name":"'.$title.'",
        "headline":"'.$title.'",
        "author":[
            {
                "@type":"Person",
                "name":"'.$nome_empresa.'"
            },
            {
                "@type":"Person",
                "name":"Unity Digital Solutions"
            }
        ],
        "datePublished":"'.$dataDePublicacao.'",
        "image":"'.(!empty($meta_img) ? $meta_img : $url.$logo_cliente).'",
        "articleSection":"'.$title.' - '.$nome_empresa.'",
        "articleBody":"'.$description.'",
        "url":"'.$canonical.'",
        "publisher":{
            "@type":"Organization",
            "name":"Unity Digital Solutions",
            "logo":{
                "@type":"ImageObject",
                "name":"'.$nome_empresa.'",
                "url":"'.$url.$logo_cliente.'"
            },
            "image":"'.$url.$logo_cliente.'"
        },
        "dateModified":"'.$dataDeModificacao.'",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "'.$url.'"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context":"http://schema.org",
        "@type":"Organization",
        "url":"'.$url.'",
        "logo":{
            "@type":"ImageObject",
            "name":"'.$nome_empresa.'",
            "url":"'.$url.$logo_cliente.'"
        },
        "contactPoint":[';
            foreach ($telefones_cliente as $key => $tel) {
                $retorno .='{
                    "@type":"ContactPoint",
                    "telephone":"+55 '.$tel.'",
                    "contactType":"customer service"
                }' . (($key + 1) < count($telefones_cliente) ? ',': '');
            }
            $retorno .=']
    }
    </script>
    <script type="application/ld+json">
    {
        "@context":"http://schema.org",
        "@type":"Person",
        "name":"'.$nome_empresa.'",
        "url":"'.$url.'",
        "sameAs":[
            "'.$instagram.'"
        ]
    }
    </script>';
    $paginaTratada = "";
    if ($canonical != $url) {
        $paginaTratada .= '/';
    } else {
        $paginaTratada .= '';
    }
    $paginaTratada .= str_replace($url, '', $canonical);
    $retorno .= '
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [';$pg = explode('/', $paginaTratada);$breadcrumbjs = '';$arvore = '';
        foreach ($pg as $key => $value) {
            $arvore .= $value;$breadcrumbjs .= '{"@type": "ListItem","position": '.($key + 1).',"name": "'.$title.'","item": "'.$url.$arvore.'"},';
        }
        $breadcrumbjs = $config->replace($breadcrumbjs, '},', 0, '}');$retorno .= $breadcrumbjs;$retorno .= ']
    }
    </script>';
    echo str_replace(array("\t"), '', $retorno);