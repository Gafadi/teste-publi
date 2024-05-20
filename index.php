<?php
    $title = "Home";
    $description = "Descrição";
    $keywords = $title;
    $meta_img = "";
    include "config/param.php";
    $url_title = $config->formatStringToURL($title);
    $wave = false;
?>
</head>

<body>
    <?php include "components/header.php"; ?>
    <main>
        <section id="home-home" class="text-center">
                        <div class="bg-2 bg-home">
                            <div class="cover">
                                <div class="container">
                                    <h2>Produtos de qualidade a pronta entrega!</h2>
                                    <p>Compre com um vendedor</p>
                                    <p class="more"><a href="<?=$url; ?>contato" title="Entre em contato!"><span>Entre em contato!</span> <i class="mdi mdi-calculator"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <section id="about-home" class="padding-cust">
            <div class="container">
                <h1>Qual a sua tinta?</h1>
                <p>Conheça um pouco mais sobre nossos produtos.</p>
                <div class="flex text-center margin-top-20">
                    <?php include "components/prod-index.php"; ?>
                </div>
            </div>
            <div id="wave-1">
                <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                    <defs>
                        <path id="wave-path-1" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                    </defs>
                    <g class="wave1">
                        <use xlink:href="#wave-path-1" x="50" y="3" fill="rgba(249, 249, 249, .1)"></use>
                    </g>
                    <g class="wave2">
                        <use xlink:href="#wave-path-1" x="50" y="0" fill="rgba(249, 249, 249, .2)"></use>
                    </g>
                    <g class="wave3">
                        <use xlink:href="#wave-path-1" x="50" y="9" fill="#F9F9F9"></use>
                    </g>
                </svg>
            </div>
        </section>
        <?php include "components/diferenciais.php" ?>
    </main>
    <?php include "components/footer.php"; ?>
    <script>
        const swiper = new Swiper('.swiper', {
            effect: "fade",
            loop: true,
            spaceBetween: 0,
            // autoplay: {
            //     delay: 2000
            // },
        });
    </script>
</body>

</html>