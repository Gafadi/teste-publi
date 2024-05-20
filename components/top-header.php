<div class="top-header">
    <div class="container">
        <div class="flex sb">
            <ul class="info-top-header col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 padding-0">
                <?php
                    include "./objects/header-obj.php";
                    foreach ($info as $key => $value) { ?>
                        <li>
                            <a href="<?=$value["target"]; ?>" title="<?=$value["description"]; ?>" target="_blank"><i class="mdi mdi-<?=$key; ?>"></i> <?=$value["content"]; ?></a>
                        </li>
                    <?php }
                ?>
            </ul>
            <div class="contact-top-header col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 padding-0">
                <div class="flex">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 padding-0 text-center tel">
                        <p><a id="btn-top" href="<?=$unidades[1]["link_tel"]; ?>" title="Entre em contato via Telefone" target="_blank"><i class="mdi mdi-phone"></i> Fale com um consultor <?=$unidades[1]["tel"]; ?></a></p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 padding-0">
                        <ul class="flex gap-10 buttons">
                            <?php
                                foreach ($social as $key => $value) { ?>
                                    <li>
                                        <a href="<?=$value["target"]; ?>" title="<?=$value["description"]; ?>" target="_blank"><i class="mdi mdi-<?=$key; ?>"></i></a>
                                    </li>
                                <?php }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>