<?php
foreach ($nav as $key => $value) {
    if (is_array($value)) {
        $url_item = $config->formatStringToURL($key); ?>
        <li>
            <a href="<?= $url . $url_item; ?>" title="Confira nossos <?= $key; ?>"><?= $key; ?></a>
            <ul class="sub-menu">
                <?php
                foreach ($value as $chave => $valor) {
                    $url_sub = $config->formatStringToURL($chave);
                    if (is_array($valor)) { ?>
                        <li>
                            <a href="<?= $canonical; ?>#" title="Veja mais sobre <?= $chave; ?>"><span><?= $chave; ?></span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="sub">
                                <?php
                                foreach ($valor as $k => $v) {
                                    $url_prod = $config->formatStringToURL($v); ?>
                                    <li>
                                        <a href="<?= $url . $url_sub . '-' . $url_prod; ?>" title="Veja mais sobre <?= $v; ?>"><?= $v; ?></a>
                                    </li>
                                <?php }
                                ?>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="<?= $url . $url_sub; ?>" title="Veja mais sobre <?= $chave; ?>"><?= $chave; ?></a>
                        </li>
                <?php }
                }
                ?>
            </ul>
        </li>
    <?php } else { ?>
        <li><a href="<?= $url . $key; ?>" title="<?= $value; ?>"><?= $value; ?></a></li>
<?php }
}
?>