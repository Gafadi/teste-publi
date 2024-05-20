<li class="select-all">Todos</li>
<?php
    foreach ($nav["$title"] as $key => $value) {
        $url_select = $config->formatStringToURL($key); ?>
        <li class="select-<?=$url_select; ?>"><?=$key; ?></li>
    <?php }
?>