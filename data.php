<?php
    $globalVal = [
        'components' => $_SERVER['DOCUMENT_ROOT'].'/assets/src/components/',
        'link' => stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://' . $_SERVER["HTTP_HOST"]
    ];
    $hello = 'from global';
?>