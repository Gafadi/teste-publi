<?php
    $title = "Contato";
    $description = "";
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
        <section id="about-contato" class="padding-cust">
            <div class="container">
                <h1 class="display-none">Entre em contato agora mesmo!</h1>
                <p>Entre em contato com a <strong>Loja Tintas</strong> preenchendo o formulário ou ligue para nós!</p>
                <div class="flex not-a rv-wp">
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 padding-0">
                        <p>Entre em contato com a Loja Tintas e transforme seus projetos com as cores perfeitas! Nossa equipe está pronta para ajudar você a escolher a tinta ideal, oferecendo produtos de alta qualidade e atendimento personalizado. Seja para sua casa, escritório ou indústria, temos as melhores soluções em tintas. Visite-nos ou ligue para a gente e descubra como podemos fazer a diferença no seu projeto. Esperamos por você na Loja Tintas, onde a cor e a qualidade se encontram!</p>
                        <p>Para solicitar um orçamento basta preencher o formulário abaixo. Entraremos em contato o mais breve possível para entender sua necessidade e encaminhar nossa proposta de orçamento para você.</p>
                        <p><small>Tempo médio de preenchimento: <strong>1 minuto</strong></small></p>
                        <h2 class="display-none">Preencha o formulário</h2>
                        <?php include "components/form.php"; ?>
                    </article>
                    <aside class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <h2>Informações</h2>
                        <p><a href="<?=$unidades[1]["link_tel"]; ?>" title="Entre em contato via telefone" target="_blank"><i class="mdi mdi-phone"></i> <span><?=$unidades[1]["tel"]; ?></span></a></p>
                        <p><a href="mailto:<?=$emailContato; ?>" title="Entre em contato via E-Mail" target="_blank"><i class="mdi mdi-email"></i> <span><?=$emailContato; ?></span></a></p>
                        <h3>Redes Sociais</h3>
                        <div class="social-buttons">
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
                    </aside>
                </div>
            </div>
            <iframe title="Confira nossa localização" src="<?=$unidades[1]["iframe_maps"]; ?>" class="map"></iframe>
        </section>
    </main>
    <?php include "components/footer.php"; ?>
    <script>
        $(document).ready(function () {
            document.querySelector('.mask-phone').addEventListener('keyup', function (e) {
                var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
                e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
            });

            $("#tipo").on("change", function() {
                if ($("#tipo").val() == "Pessoa Jurídica") {
                    $(".empresa").removeClass("hide");
                    $(".empresa").removeClass("noinclude");
                } else if ($("#tipo").val() == "Pessoa Física") {
                    $(".empresa").addClass("hide");
                    $(".empresa").addClass("noinclude");
                }
            });
            
            const form = document.querySelector(".form-contato");
            $(form).validate({
                rules: {
                    nome: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    telefone: {
                        required: true,
                    },

                },
                errorElement: "span" ,
                messages: {
                    nome: "Nome obrigatório",
                    email: "E-Mail obrigatório",
                    telefone: "Telefone obrigatório",
                },
            })

            form.onsubmit = function(event) {
                event.preventDefault();
                if ($(form).valid()) {
                    alert("Formulário enviado com sucesso!");
                }
                    const dados = $(form).serialize();
                    $.ajax({
                        type: 'POST',
                        async: true,
                        url: 'config/email/mailer.php',
                        data: dados,
                        datatype: 'json',
                        cache: true,
                        global: false,
                        beforeSend: function() {
                            
                        },
                        success: function(data) {
                            if(data == 'success'){
                                
                            } else {
                                
                            }

                        },
                        complete: function() { 
                            
                        }
                    });
            }
        })
    </script>
</body>
</html>