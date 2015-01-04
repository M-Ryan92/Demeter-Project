<?php
//Set the meta tags
$metatitle = setMetaData($metatitle, " ");
$metadescription = setMetaData($metadescription, " ");
$metakeywords = setMetaData($metakeywords, ", ");
$url = setMetaData($url);
$favicon = setMetaData($favicon);
$css = setCSS($css, $csspath);

function setMetaData($content, $spacing = "") {
    $returnValue = "";
    $first_key = reset(array_keys($content));
    foreach ($content as $key => $value) {
        if ($key != $first_key) {
            $returnValue .= $spacing;
        }
        $returnValue .= $value;
    }
    return $returnValue;
}

function setCSS($content, $path) {
    $returnValue = "";
    foreach ($content as $value) {
        if($value != null ||$value != "") {
            $returnValue .= '<link href="' . $path . $value . '" rel="stylesheet" type="text/css">
            ';
        }
    }

    return $returnValue;
}
?>
<html>
    <head>
        <title><?= $metatitle ?></title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?= $metakeywords ?>" >
        <meta name="description" content="<?= $metadescription ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link rel="canonical" href="<?= $url ?>">
        <link rel="shortcut icon" href="<?= base_url() .$favicon ?>" type="image/x-icon" />
        <link href="<?= $assets . 'Bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css">
        <?= $css ?>
    </head>