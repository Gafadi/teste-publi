<header>
    <?php include "top-header.php"; ?>
    <div class="header-main">
        <div class="flex">
            <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 col-xl-3 logo text-center padding-0">
                <a href="<?=$url; ?>" title="Bem vindo à <?=$nome_empresa; ?>!">
                    <!-- <picture>
                        <source type="image/svg" srcset="<?=$url.$logo_cliente; ?>">
                        <img src="<?=$url.$logo_cliente; ?>" alt="Logo <?=$nome_empresa; ?>!" title="Bem vindo à <?=$nome_empresa; ?>!">
                    </picture> -->
                </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-9 col-lg-9 col-xl-9 nav padding-0">
                <nav class="nav-desk">
                    <div class="container">
                        <ul class="flex jus-left gap-10">
                            <?php include "nav.php"; ?>
                            <li>
                                <a href="<?=$url; ?>contato" title="Entre em contato com nossa equipe">Contato <img src="<?=$url; ?>images/icons/telefone.svg" title="Solicite um Orçamento!" alt="Solicite um Orçamento! - Ícone calculadora"></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="mobile-button flex row">
                    <div class="mobile-line"></div>
                    <div class="mobile-line"></div>
                    <div class="mobile-line"></div>
                </div>
            </div>
            <div class="nav-mobile display">
                <div class="nav-inner">
                    <div class="nav-logo flex gap-50 sb">
                        <a href="<?=$url; ?>" title="Lojas Tintas">
                            <!-- <picture>
                                <source type="image/svg" srcset="<?=$url.$logo_cliente; ?>">
                                <img src="<?=$url.$logo_cliente; ?>" alt="Logo <?=$nome_empresa; ?>!" title="Bem vindo à <?=$nome_empresa; ?>!">
                            </picture> -->
                        </a>
                        <span class="close-button"></span>
                    </div>
                    <nav>
                        <ul class="links-mobile">
                            <li><a href="<?=$url; ?>index" title="Home">Home</a></li>
                            <li><a href="<?=$url; ?>sobre" title="Sobre Nós">Sobre Nós</a></li>
                            <li class="dropdown">
                                <a href="<?=$url; ?>produtos" title="Confira nossos Produtos">Produtos</a><i class="mdi mdi-chevron-right"></i>
                                <ul class="sub-mobile display-none">
                                    <li class="dropdown">
                                        <a href="<?=$canonical; ?>#" title="Tintas">Tintas</a><i class="mdi mdi-chevron-right"></i>
                                        <ul class="double-mobile display-none">
                                            <li><a href="<?=$url; ?>tintas" title="Leia mais sobre Tintas">Tintas</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?=$url; ?>contato" title="Entre em Contato">Contato</a></li>
                        </ul>
                    </nav>
                    <ul class="flex jus-left gap-10 margin-top-10 buttons">
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
</header>