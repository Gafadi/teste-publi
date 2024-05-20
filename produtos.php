<?php
    $title = "Produtos";
    $description = "Acesse nossos produtos e conheça as Válvulas e Conexões em suas mais diversas normas, para as mais diversas aplicações.";
    $keywords = $title;
    $meta_img = "";
    include "config/param.php";
    $sub = "";
?>
</head>
<body>
    <?php include "components/header.php"; ?>
    <main>
        <?php include "components/heading.php"; ?>
        <section id="about-produtos" class="padding-50">
            <div class="container">
                <h1 class="display-none">Qual produto está procurando?</h1>
                <div class="flex not-a margin-top-20">
                    <aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 menu">
                        <ul class="select-menu">
                            <?php include "components/select-categories.php"; ?>
                        </ul>
                    </aside>
                    <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 produtos-show">
                        <div class="flex jus-left text-center">
                            <?php include "components/products-show.php"; ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <?php include "components/footer.php"; ?>
    <script>
        let buttonAll = document.querySelector(".select-all");
        let buttonValve = document.querySelector(".select-valvulas");
        let buttonConn = document.querySelector(".select-conexoes");
        buttonAll.addEventListener("click", function(){
            $(".select-menu li").removeClass("active");
            $(".select-menu li.select-all").addClass("active");
            $(".produtos-show .conexoes").show(400);
            $(".produtos-show .valvulas").show(400);
        });
        buttonValve.addEventListener("click", function(){
            $(".select-menu li").removeClass("active");
            $(".select-menu li.select-valvulas").addClass("active");
            $(".produtos-show .conexoes").hide(400);
            $(".produtos-show .valvulas").show(400);
        });
        buttonConn.addEventListener("click", function(){
            $(".select-menu li").removeClass("active");
            $(".select-menu li.select-conexoes").addClass("active");
            $(".produtos-show .valvulas").hide(400);
            $(".produtos-show .conexoes").show(400);
        });
    </script>
</body>
</html>