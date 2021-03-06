// Fonction qui colorise et réduit la navbar au scroll
$(document).ready(function() {
    $(window).scroll(function() {
        // Animation à bascule
        if(this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
        // Annimation au scroll du btn retour en haut
        if(this.scrollY > 50) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // Script du retour en haut
    $('.scroll-up-btn').click(function() {
        $('html').animate({scrollTop: 0});
    });
    

    // Animation menu à bascule
    $('.menu-btn').click(function() {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    // Menu Portfolio
    $("#portfolio-wordpress, #portfolio-exercices").hide();
    $(".menu-item").click(function() {
        $(".menu-item").removeClass("active");
        $(this).addClass("active");
        changePortfolio = this.id;
        $(".item").hide();
        $("#portfolio-" + changePortfolio).show();
    });
    
    // Type script animation
    let typed = new Typed(".typing", {
        strings: ["Web-junior...", "Front-End...", "Freelance...", "WordPress..."],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    let type = new Typed(".typing-2", {
        strings: ["junior...", "Front-End...", "Freelance...", "WordPress."],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });  
});



