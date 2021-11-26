<?php include $_SERVER['DOCUMENT_ROOT'].'/data.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <p>header</p>
        <menu>
            <ul>
                <li>
                    <a href="<?php echo $globalVal['link']; ?>/">home</a>
                </li>
                <li>
                    <a href="<?php echo $globalVal['link']; ?>/about">about</a>
                </li>
                <li>
                    <a href="<?php echo $globalVal['link']; ?>/contact">contact</a>
                </li>
                <li>
                    <a href="<?php echo $globalVal['link']; ?>/blog">blog</a>
                    <ul>
                        <li>
                            <a href="<?php echo $globalVal['link']; ?>/blog/post1">post1</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </menu>
    </header>