<section id="diferenciais" class="padding-cust">
    <div class="container">
        <h1>Nossos Diferenciais</h1>
        <p>Pensando sempre no nosso cliente, realizamos atendimento com suporte técnico ao pedido, estoque a pronta
            entrega, flexibilidade no pagamento com possibilidade de parcelamento, pontualidade e entregas rápidas.</p>
        <div class="flex not-a text-center margin-top-20">
            <?php include "objects/diferenciais-obj.php" ?>
        </div>
    </div>
    <?php
        if ($wave) { ?>
            <div id="wave-diferenciais">
                <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                    <defs>
                        <path id="wave-path-diferenciais" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                    </defs>
                    <g class="wave1">
                        <use xlink:href="#wave-path-diferenciais" x="50" y="3" fill="rgba(245, 245, 245, .1)"></use>
                    </g>
                    <g class="wave2">
                        <use xlink:href="#wave-path-diferenciais" x="50" y="0" fill="rgba(245, 245, 245, .2)"></use>
                    </g>
                    <g class="wave3">
                        <use xlink:href="#wave-path-diferenciais" x="50" y="9" fill="#F5F5F5"></use>
                    </g>
                </svg>
            </div>
        <?php }
    ?>
</section>