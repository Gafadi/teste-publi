<footer>
    <div class="footer-content">
        <div class="container">
            <div class="flex not-a">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 element">
                    <figure>
                        <a href="<?=$url; ?>" title="Visite-nos">
                            <!-- <picture>
                                <source srcset="<?=$url; ?>images/logo-white.svg" type="image/svg">
                                <img src="<?=$url; ?>images/logo-white.svg" alt="" class="img-responsive">
                            </picture> -->
                        </a>
                    </figure>
                    <p class="resume">A melhor loja de Tintas do mercado.</p>
                    <p class="more"><a href="<?=$url; ?>sobre" title="Lojas Tintas"><span>Conheça as Tintas</span> <i class="mdi mdi-plus"></i></a></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 element">
                    <p class="heading-footer">Nossos Produtos</p>
                    <ul class="inst">
                        <li><a href="<?=$url; ?>tintas"><i class="mdi mdi-chevron-right"></i> <span>Tintas</span></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 element">
                    <p class="heading-footer">Contato</p>
                    <p class="cnpj">
                        Loja de Tintas
                        <br>
                    </p>
                    <p class="info-footer margin-0"><a href="<?=$unidades[1]["link_maps"]; ?>" title="Acesse no Google Maps" target="_blank"><i class="mdi mdi-map-marker"></i><?=$unidades[1]["rua"]." - ".$unidades[1]["bairro"]." - ".$unidades[1]["cidade"]." / ".$unidades[1]["uf"]; ?></a></p>
                    <ul class="flex jus-left gap-10 buttons margin-bottom-20">
                        <li><a href="<?=$unidades[1]["link_maps"]; ?>" title="Como chegar pelo Google Maps" target="_blank"><i class="mdi mdi-google-maps"></i></a></li>                        
                    </ul>
                    <!-- <p class="info-footer"><a href="<?=$unidades[1]["link_wpp"]; ?>" title="Entre em contato via WhatsApp" target="_blank"><i class="mdi mdi-whatsapp"></i><?=$unidades[1]["wpp"]; ?></a></p> -->
                    <p class="heading-footer">Redes Sociais</p>
                    <ul class="flex jus-left gap-10 buttons">
                        <li><a href="<?=$instagram; ?>" title="Confira no Instagram" target="_blank"><i class="mdi mdi-instagram"></i></a></li>
                        <li><a href="<?=$linkedin; ?>" title="Conecte no LinkedIn" target="_blank"><i class="mdi mdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container text-center">
            <p>Copyright &copy; <?php echo date("Y") ?> - <?=$nome_empresa; ?> - Todos os direitos reservados</p>
        </div>
    </div>
    <ul id="menu-mobile">
        <?php
            include "./objects/mobile-menu-obj.php";
            foreach ($icons as $key => $value) { ?>
                <li>
                    <a href="<?=$value["target"]; ?>" title="<?=$value["description"]; ?>" target="_blank">
                        <i class="mdi mdi-<?=$key; ?>"></i>
                    </a>
                </li>
            <?php }
        ?>
        <li>
            <a href="<?=$canonical; ?>#" title="Volte ao topo">
                <i class="mdi mdi-arrow-up"></i>
            </a>
        </li>
    </ul>
</footer>
<?php include "_essentials.php"; ?>