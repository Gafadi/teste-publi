<?php
    $tintas = [
        "Principal Tinta",
        
    ];
    foreach ($tintas as $key => $value) {
        $url_prod = $config->formatStringToURL($value); ?>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 element">
            <div class="holder">
                <figure>
                    <a href="<?=$url.''.$url_prod; ?>" title="Leia mais sobre <?=$value; ?>">
                        <picture>
                            <source srcset="<?=$url; ?>images/produtos/<?=$url_prod; ?>.webp" type="image/webp">
                            <img src="<?=$url; ?>images/produtos/<?=$url_prod; ?>.webp" alt="" class="img-responsive">
                        </picture>
                    </a>
                    <figcaption>
                        <p><a href="<?=$url.$url_prod; ?>" title="Leia mais sobre <?=$value; ?>"><?=$value; ?></a></p>
                    </figcaption>
                </figure>
            </div>
        </div>
    <?php }
?>