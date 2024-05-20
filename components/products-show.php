<?php
    foreach ($nav["Produtos"] as $key => $value) {
        $url_cat = $config->formatStringToURL($key);
        foreach ($value as $chave => $valor) {
            $url_prod = $config->formatStringToURL($valor); ?>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 element <?=$url_cat; ?>">
                <div class="holder">
                    <figure>
                        <a href="<?=$url.$url_cat.'-'.$url_prod; ?>" title="Veja mais sobre <?=$key." ".$valor; ?>">
                            <picture>
                                <source srcset="<?=$url.'images/produtos/'.$url_cat."-".$url_prod.'.webp'; ?>" type="image/webp">
                                <img src="<?=$url.'images/produtos/'.$url_cat."-".$url_prod.'.webp'; ?>" alt="<?=$key." ".$valor; ?>" title="Leia mais sobre <?=$key." ".$valor; ?>">
                            </picture>
                        </a>
                        <figcaption>
                            <p><a href="<?=$url.$url_cat.'-'.$url_prod; ?>" title="Leia mais sobre <?=$key." ".$valor; ?>"><?=$key." ".$valor; ?></a></p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        <?php }
    }
?>