$(document).ready(function(){
    var header = $(".header-wrapper-carousel");
    header.owlCarousel({
        items:1,
        loop:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:10000,
        animateOut: 'fadeOut'
    });

    $("#roadmap").click(function(){
        $("body").scrollTop() = $(".cohorts").offset().top;
        $(window).css("transition","800ms");
    });

    $slideCount = $('[data-owl-index]').length / 2;
        header.on('change.owl.carousel', function(event) {
        $cur = $('.owl-item.active > .item').data('owl-index');
        $nxt = ($cur == $slideCount)? 1 : $cur+1;
        console.log($slideCount + ':' + $cur + ' -- ' + $nxt);
        $('.owl-item.active h4').removeClass('fadeInLeft');
        $(".owl-item > [data-owl-index="+$nxt+"] h4").addClass('bounceInDown');});
  $(".btn-nwts-2").mouseenter(function(){
        $(".btn-nwts-2").css("background","#8C82FC");
        $(".btn-nwts-2").css("color","white");
        $(".btn-nwts-2").css("border-radius",".5em");
        $(".btn-nwts-2").css("transition","800ms");
        $(".post-mid-div h4 hd").css("color","#8C82FC");
        $(".post-mid-div h4 ").css("color","#999");
        $(".post-mid-div-over").css("background","#fff");
        $(".post-mid-div h4").css("transition","800ms");
        $(".post-mid-div h4 hd").css("transition","800ms");
        $(".post-mid-div-over").css("transition","800ms");});
    $(".btn-nwts-2").mouseleave(function(){
        $(".post-mid-div-over").css("background","#FF9DE2");
        $(".btn-nwts-2").css("background","transparent");
        $(".btn-nwts-2").css("border-radius","0em");
        $(".btn-nwts-2").css("transition","400ms");
        $(".post-mid-div h4").css("color","white");
        $(".post-mid-div h4 hd").css("color","white");
        $(".post-mid-div h4").css("transition","800ms");
        $(".post-mid-div h4 hd").css("transition","800ms");
        $(".post-mid-div").css("transition","800ms");});

      $('.navbar-toggle').click(function(){

         if($('#my-navbar').hasClass("collapse in") == false){

              $('.navbar-brand').css("color","#777");
              $('nav').css("background","white");
              $('.navbar-collapse').css("border","none");
             $('.navbar-nwts').css("box-shadow","0px 0.1em .01em 0px #8C82FC");
              $('nav').css("transition","900ms");

            $(".icon-bar").css("background","#999");
              }if($('#my-navbar').hasClass("collapse in") == true ){
            $('.navbar-brand').css("color","white");
            $('.navbar-nwts .navbar-nav > li > a').css("color","#666");
            $('nav').css("background","#8C82FC");
             $('nav').css("transition","900ms");
            $('.navbar-nwts').css("box-shadow","");
            $(".icon-bar").css("background","white");}});

    $(window).scroll(function(){

       if($(window).scrollTop() == 0 && $('.navbar-toggle').css("display") == "none"){

           $('nav').css("background","#8C82FC");
           $('nav').css("transition","900ms");
           $('.navbar-brand').css("color","white");
           $('.navbar-nwts').css("box-shadow","none");
           $(".icon-bar").css("background","white");}

           if($(window).scrollTop() == 0 && $('.navbar-toggle').css("display") != "none"){

           $('nav').css("background","#8C82FC");
           $('nav').css("transition","900ms");
           $('.navbar-brand').css("color","white");
           $('.navbar-nwts').css("box-shadow","none");
           $(".icon-bar").css("background","white");}

        else if($(window).scrollTop() != 0 ){

           $(".icon-bar").css("background","#777");
           $('nav').css("opacity","1");
           $('.navbar-brand').css("color","white");
           $('nav').css("background","#8C82FCs");
           $('nav').css("transition","300ms");
           $('.navbar-nwts .navbar-nav > li > a').css("color","#666");

       }else if($(window).scrollTop() == 0 && $('.navbar-toggle').css("display") == "none" ){

                $('.navbar-nwts.home .navbar-nav.home > li > a').css("color","#fff");
    }});
});

$(document).ready(function(){
    $("#media-player").click( function(){
    $file_url = "/nwt-app/uploads/"+this.dataset.media_url;
       var player = document.getElementById('media-video');
        var media_source = document.getElementById('media-source');
      player.pause();
      media_source.src = $file_url;
      player.load();
        $(".modal").addClass("open");
    });

     $("#close-modal").click( function(){
        var player = document.getElementById('media-video');
         player.pause();
        $(".modal").removeClass("open");
    });
});
