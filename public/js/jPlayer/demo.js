$(document).ready(function(){

  var myPlaylist = new jPlayerPlaylist({
    jPlayer: "#jplayer_N",
    cssSelectorAncestor: "#jp_container_N"
  }, [
    {
      title:"Busted Chump",
      artist:"ADG3",
      mp3:"http://flatfull.com/themes/assets/musics/adg3com_bustedchump.mp3",
      poster: "images/m0.jpg"
    },
    {
      title:"Chucked Knuckles",
      artist:"3studios",
      mp3:"http://flatfull.com/themes/assets/musics/adg3com_chuckedknuckles.mp3",
      poster: "images/m0.jpg"
    },
    {
      title:"Cloudless Days",
      artist:"ADG3 Studios",
      mp3:"http://flatfull.com/themes/assets/musics/adg3com_cloudlessdays.mp3",
      poster: "images/m0.jpg"
    },
    {
      title:"Core Issues",
      artist:"Studios",
      mp3:"http://flatfull.com/themes/assets/musics/adg3com_coreissues.mp3",
      poster: "images/m0.jpg"
    },
    {
      title:"Cryptic Psyche",
      artist:"ADG3",
      mp3:"http://flatfull.com/themes/assets/musics/adg3com_crypticpsyche.mp3",
      poster: "images/m0.jpg"
    },
    {
      title:"Electro Freak",
      artist:"Studios",
      mp3:"http://flatfull.com/themes/assets/musics/adg3com_electrofreak.mp3",
      poster: "images/m0.jpg"
    },
    {
      title:"Freeform",
      artist:"ADG",
      mp3:"http://flatfull.com/themes/assets/musics/adg3com_freeform.mp3",
      poster: "images/m0.jpg"
    }
  ], {
    playlistOptions: {
      enableRemoveControls: true,
      autoPlay: true
    },
    swfPath: "js/jPlayer",
    supplied: "webmv, ogv, m4v, oga, mp3",
    smoothPlayBar: true,
    keyEnabled: true,
    audioFullScreen: false
  });
  
  $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').removeClass('animate');
    $('.jp-play-me').removeClass('active');
    $('.jp-play-me').parent('li').removeClass('active');
  });

  $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').addClass('animate');
  });

  $(document).on('click', '.jp-play-me', function(e){
    e && e.preventDefault();
    var $this = $(e.target);
    if (!$this.is('a')) $this = $this.closest('a');

    $('.jp-play-me').not($this).removeClass('active');
    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');

    $this.toggleClass('active');
    $this.parent('li').toggleClass('active');
    if( !$this.hasClass('active') ){
      myPlaylist.pause();
    }else{
      var i = Math.floor(Math.random() * (1 + 7 - 1));
      myPlaylist.play(i);
    }
    
  });



  // video

  $("#jplayer_1").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "张艺兴-梦不落雨林(标清)",
        m4v: "http://220.181.91.148/vcloud1049.tc.qq.com/1049_M0110100000YdPoB3XpmMi1001593459.f40.mp4?vkey=D71949652DBF3B9AD822AB707B3BF9643B01EB0A8D1F12B7759DF4F586C76BB3C04070FE71070A2B61D65E9966D6F00E0AD9C8970CEFF3B960DC42FC3ADDD90FCAEE2E8F3DB8B25C1354CF1C01F856B9847ACC176A095719",
        ogv: "http://220.181.91.148/vcloud1049.tc.qq.com/1049_M0110100000YdPoB3XpmMi1001593459.f40.mp4?vkey=D71949652DBF3B9AD822AB707B3BF9643B01EB0A8D1F12B7759DF4F586C76BB3C04070FE71070A2B61D65E9966D6F00E0AD9C8970CEFF3B960DC42FC3ADDD90FCAEE2E8F3DB8B25C1354CF1C01F856B9847ACC176A095719",
        webmv: "http://220.181.91.148/vcloud1049.tc.qq.com/1049_M0110100000YdPoB3XpmMi1001593459.f40.mp4?vkey=D71949652DBF3B9AD822AB707B3BF9643B01EB0A8D1F12B7759DF4F586C76BB3C04070FE71070A2B61D65E9966D6F00E0AD9C8970CEFF3B960DC42FC3ADDD90FCAEE2E8F3DB8B25C1354CF1C01F856B9847ACC176A095719",
        poster: "images/m41.jpg"
      });
    },
    swfPath: "js",
    supplied: "webmv, ogv, m4v",
    size: {
      width: "100%",
      height: "auto",
      cssClass: "jp-video-360p"
    },
    globalVolume: true,
    smoothPlayBar: true,
    keyEnabled: true
  });

});