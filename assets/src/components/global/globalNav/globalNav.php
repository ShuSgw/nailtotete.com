<?php include $_SERVER['DOCUMENT_ROOT'].'/data.php'; ?>

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