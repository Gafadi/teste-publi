<script>
    $(window).scroll(function() { 
        let scroll = $(window).scrollTop();
        if ((scroll < 250)&&(scroll >= 0)) {
            $("#menu-mobile li:last-child a").removeClass("active");
            $("#menu-mobile").removeClass("right-mobile");
        }else {
            $("#menu-mobile li:last-child a").addClass("active");
            $("#menu-mobile").addClass("right-mobile");
        }
    });
    $(document).ready(function() {
        let firstDrop = $("ul.links-mobile>li.dropdown>i");
        let secondDrop = $("ul.sub-mobile>li:first-child>i");
        let next = $("ul.sub-mobile>li:first-child").find(".double-mobile");
        let thirdDrop = $("ul.sub-mobile>li:nth-child(2)>i");
        let nextt = $("ul.sub-mobile>li:nth-child(2)").find(".double-mobile");

        $(".mobile-button").on("click", function () {
            if ($(".nav-mobile").hasClass("display")) {
                $(".nav-mobile").removeClass("display");
                $(".nav-mobile").show(250);
                $("body").addClass("no-over");
            }
        })

        $(".close-button").on("click", function () {
            if ($(".nav-mobile").hasClass("display")) {
            } else {
                $(".nav-mobile").hide(250);
                $(".nav-mobile").addClass("display");
                $("body").removeClass("no-over");
                $(".sub-mobile").hide(250).addClass("display");
                $(".double-mobile").hide(250).addClass("display");
            }
        })

        $(firstDrop).on("click", function(){
            if ($(".sub-mobile").hasClass("display-none")) {
                $(".sub-mobile").show(250);
                $(".sub-mobile").removeClass("display-none");
            }else {
                $(".sub-mobile").hide(250);
                $(".sub-mobile").addClass("display-none");
                $(".double-mobile").hide(250);
            }
        });
        $(secondDrop).on("click", function(){
            if ($(next).hasClass("display-none")) {
                $(next).show(250);
                $(next).removeClass("display-none");
                $(nextt).hide(250);
                $(nextt).addClass("display-none");
            }else {
                $(next).hide(250);
                $(next).addClass("display-none");
            }
        });
        $(thirdDrop).on("click", function(){
            if ($(nextt).hasClass("display-none")) {
                $(nextt).show(250);
                $(nextt).removeClass("display-none");
                $(next).hide(250);
                $(next).addClass("display-none");
            }else {
                $(nextt).hide(250);
                $(nextt).addClass("display-none");
            }
        });
    });
</script>