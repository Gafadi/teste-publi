<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.3.67/css/materialdesignicons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - <?php echo $nome_empresa; ?></title>
    <base href="<?php echo $url; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="ICBM" content="<?php echo $unidades[1]["latitude_longitude"]; ?>">
    <meta name="robots" content="index,follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="<?php echo $nome_empresa; ?>">
    <link rel="canonical" href="<?php echo $canonical; ?>">
    <link rel="shortcut icon" href="<?php echo $url; ?>images/favicon.svg">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?php echo $title; ?>">
    <?php echo !empty($meta_img)?"<meta property=\"og:image\" content=\"".$meta_img."\">":""; ?>
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:site_name" content="<?php echo $nome_empresa; ?>">
    <meta property="og:type" content="website">
    <meta name="geo.position" content="<?php echo $unidades[1]["latitude_longitude"]; ?>">
    <meta name="geo.placename" content="<?php echo $unidades[1]["estado"]; ?>-<?php echo $unidades[1]["uf"]; ?>">
    <meta name="geo.region" content="<?php echo $unidades[1]["uf"]; ?>-BR">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="<?php echo $canonical; ?>">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <?php include "config/schema.php"; ?>