<?php
$title = "Principal Tinta";
$description = "";
$keywords = $title;
include "config/param.php";
$url_title = $config->formatStringToURL($title);
$sub = "Produtos";
$wave = true;
?>
<meta property="og:image" content="<?= $url . "images/produtos/" . $url_title . ".webp"; ?>">
</head>

<body>
    <?php include "components/header.php"; ?>
    <main>
        <?php include "components/heading.php"; ?>
        <section id="about-prod" class="padding-cust">
            <div class="container">
                <div class="flex not-a rv-wp">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 element">
                        <h2>Por que Tintas é o Melhor para Seus Projetos</h2>
                        <p>Na Loja Tintas, oferecemos o produto <strong>Tintas</strong>, desenvolvido com a mais alta tecnologia e qualidade para garantir resultados excepcionais em qualquer projeto. Confira abaixo por que nossas tintas são a escolha ideal para você:</p>

                        <h3>Qualidade Superior</h3>
                        <p>Nossas tintas são formuladas com matérias-primas de excelência, proporcionando uma cobertura uniforme, duradoura e um acabamento impecável. A aplicação é fácil e o resultado final é sempre profissional.</p>

                        <h3>Variedade de Cores e Acabamentos</h3>
                        <p>Oferecemos uma ampla gama de cores vibrantes e sofisticadas, além de diversos acabamentos, como fosco, semibrilho e alto brilho. Com a Tintas, você encontra a cor perfeita para qualquer ambiente e estilo.</p>

                        <h3>Sustentabilidade</h3>
                        <p>Preocupamo-nos com o meio ambiente e a saúde dos nossos clientes. Nossas tintas possuem baixos níveis de compostos orgânicos voláteis (VOCs), reduzindo o impacto ambiental e garantindo um ambiente mais saudável.</p>

                        <h3>Durabilidade e Resistência</h3>
                        <p>As tintas da nossa linha são altamente resistentes a intempéries, desbotamento e desgaste, garantindo que suas paredes permaneçam bonitas por muito mais tempo, mesmo em áreas de alto tráfego ou condições adversas.</p>

                        <h3>Fácil Aplicação</h3>
                        <p>Desenvolvemos nossas tintas para serem fáceis de aplicar, proporcionando uma experiência mais agradável e menos trabalhosa, seja para profissionais ou para quem gosta de fazer o trabalho por conta própria.</p>

                        <h3>Atendimento Especializado</h3>
                        <p>Nossa equipe está sempre disponível para oferecer suporte técnico e ajudar você a escolher a tinta certa para cada necessidade. Contamos com profissionais experientes prontos para responder todas as suas dúvidas.</p>

                        <h2>Entre em Contato</h2>
                        <p>Visite nossa loja ou entre em contato para saber mais sobre o produto <strong>Tintas</strong> e descobrir como ele pode transformar o seu projeto. Estamos aqui para ajudar você a alcançar os melhores resultados!</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 element">
                        <figure>
                            <picture>
                                <source srcset="<?= $url . "images/produtos/" . $url_title; ?>.webp">
                                <img src="<?= $url . "images/produtos/" . $url_title; ?>.webp" alt="<?= $title; ?>" title=" Confira nossas <?= $title; ?>">
                            </picture>
                        </figure>
                    </div>
                </div>
            </div>
    </main>
    <?php include "components/footer.php"; ?>
</body>

</html>