<?php
    $title = "Loja Tintas";
    $description = "";
    $keywords = $title;
    $meta_img = "";
    include "config/param.php";
    $sub = "";
    $wave;
?>
</head>
<body>
    <?php include "components/header.php"; ?>
    <main>
        <?php include "components/heading.php"; ?>
        <section id="about" class="padding-cust">
            <div class="container">
                <h1>Sobre Nós</h1>
                <p>Na Loja Tintas, temos orgulho em oferecer soluções de pintura que transformam ambientes e dão vida às suas ideias. Fundada há mais de 20 anos, nossa empresa se destaca no mercado por sua inovação, qualidade e compromisso com a satisfação do cliente.</p>
                <p>Valorizamos o relacionamento com nossos clientes e acreditamos que um atendimento personalizado faz toda a diferença. Nossa equipe de especialistas está sempre disponível para oferecer consultoria técnica, ajudando você a escolher o produto ideal para cada projeto. Seja um grande empreendimento ou uma pequena reforma, estamos aqui para garantir que você obtenha os melhores resultados.</p>
                <p>Investimos constantemente em pesquisa e desenvolvimento para garantir que nossos produtos estejam na vanguarda da tecnologia. </p>
            </div>
            <div id="wave-1">
                <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                    <defs>
                        <path id="wave-path-1" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                    </defs>
                    <g class="wave1">
                        <use xlink:href="#wave-path-1" x="50" y="3" fill="rgba(247, 247, 247, .1)"></use>
                    </g>
                    <g class="wave2">
                        <use xlink:href="#wave-path-1" x="50" y="0" fill="rgba(247, 247, 247, .2)"></use>
                    </g>
                    <g class="wave3">
                        <use xlink:href="#wave-path-1" x="50" y="9" fill="#F7F7F7"></use>
                    </g>
                </svg>
            </div>
        </section>
    </main>
    <?php include "components/footer.php"; ?>
</body>
</html>