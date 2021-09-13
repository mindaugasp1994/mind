$(document) .ready (function(){
    $(".art").click(function(){
        $(".portfolio-slider__mystery").addClass("hide");
        $(".portfolio-slider__illusion").addClass("hide");
        $(".portfolio-slider__travel").addClass("hide");
        $(".portfolio-slider__painting").addClass("hide");
        $(".portfolio-slider__art").removeClass("hide");
    });

    $(".mystery").click(function(){
        $(".portfolio-slider__art").addClass("hide");
        $(".portfolio-slider__illusion").addClass("hide");
        $(".portfolio-slider__travel").addClass("hide");
        $(".portfolio-slider__painting").addClass("hide");
        $(".portfolio-slider__mystery").removeClass("hide");
    });

    $(".illusion").click(function(){
        $(".portfolio-slider__mystery").addClass("hide");
        $(".portfolio-slider__art").addClass("hide");
        $(".portfolio-slider__travel").addClass("hide");
        $(".portfolio-slider__painting").addClass("hide");
        $(".portfolio-slider__illusion").removeClass("hide");
    });

    $(".travel").click(function(){
        $(".portfolio-slider__mystery").addClass("hide");
        $(".portfolio-slider__illusion").addClass("hide");
        $(".portfolio-slider__art").addClass("hide");
        $(".portfolio-slider__painting").addClass("hide");
        $(".portfolio-slider__travel").removeClass("hide");
    });

    $(".painting").click(function(){
        $(".portfolio-slider__mystery").addClass("hide");
        $(".portfolio-slider__illusion").addClass("hide");
        $(".portfolio-slider__travel").addClass("hide");
        $(".portfolio-slider__art").addClass("hide");
        $(".portfolio-slider__painting").removeClass("hide");
    });
});