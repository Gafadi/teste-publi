<section id="heading">
    <div class="container">
        <h1><?=$title; ?></h1>
        <?php echo $sub == "" ?  $config->breadcrumb(array($title)) :  $config->breadcrumb(array($sub, $title)); ?>
    </div>
    <div id="wave-heading">
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path-heading" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path-heading" x="50" y="3" fill="rgba(255, 255, 255, .1)"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path-heading" x="50" y="0" fill="rgba(255, 255, 255, .2)"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path-heading" x="50" y="9" fill="#FFF"></use>
            </g>
        </svg>
    </div>
</section>