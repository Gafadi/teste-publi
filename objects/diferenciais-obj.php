<?php
    $diferenciais = [
        "Pontualidade na Entrega",
        "Maior Estoque",
        "Facilidade no Pagamento",
        "Entrega 24h",
    ];
    $i = 1;
    foreach ($diferenciais as $key => $value) { ?>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 element">
            <div class="holder">
                <figure>
                    <picture>
                        <source srcset="<?=$url; ?>images/home/icons/<?=$i ?>.svg" type="image/svg">
                        <img src="<?=$url; ?>images/home/icons/<?=$i ?>.svg" alt="" class="img-responsive">
                    </picture>
                    <figcaption>
                        <p><?=$value; ?></p>
                    </figcaption>
                </figure>
            </div>
        </div>
    <?php $i++; }
?>