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
