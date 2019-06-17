<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
      <script type="text/javascript" src="./node_modules/vue/dist/vue.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title></title>
  </head>
  @include('nav')
  <body>
  <div id="app">
<ul class="">


      <li class="wall ">
          @yield('wall')
      <div class="wall-text">
<h1 class="title">Indie Reviews</h1>
<p>インディー専門のレビューサイトです。<br>
アカウントを作成することで新規投稿ができます。</p>
        </div>
    </li>
      <li class="wall2">
          @yield('wall')
      <div class="wall-text">
<h1 class="title">Indie Reviews</h1>
<p>インディー専門のレビューサイトです。<br>
アカウントを作成することで新規投稿が可能できます。</p>
        </div>
    </li>
</ul>
</div>

    <div class="container py-4">
      <h1></h1>
  @yield('content')
    </div>
  <p class="pagetop"><i class="fas fa-angle-double-up"></i></p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <footer class="mt-3">
    <!-- <img src="/images/indie.png" alt="" style="width:250px;height:130px;" class="position-absolute ml-5 mt-5"> -->
    <div class="list py-4 pr-5">
      <ul class="pt-3">
      <a href="#"><li>Twitter</li></a>
      <a href="#"><li>Facebook</li></a>
      <a href="#"><li>Soundcloud</li></a>
      <a href="#"><li>Youtube</li></a>
      </ul>

    </div>
    <div  v-cloak class="position-relative text-center pt-3">
<p >2013 taffy c All rights Reserved.</p>
    </div>
    @yield('footer')
  </footer>
  </body>
    <script type="text/javascript">

$('.wall-text').fadeIn('slow');


$('images').hover(function(){
  $(this).animate({'marginTop':'-3px'},200);
},function(){
  $(this).animate({'marginTop':'0px'},200);
});


var pagetop = $('.pagetop');
$(window).scroll(function(){
  if($(this).scrollTop() >200){
    pagetop.fadeIn();
  }else{
    pagetop.fadeOut();
  }
});

pagetop.click(function(){
 $('html,body').animate({scrollTop:0},500);
 return false;
});


var slide ='#app';
var i = 0;

$(slide).find('li').eq(0).show();
var total = 1;

setInterval(function(){

  if(i < total){
    $(slide).find('li').fadeOut(1000);
    i++;
    setTimeout(function(){
      $(slide).find('li').eq(i).fadeIn(1000);
    },1000);
  }else if(i == total){
    $(slide).find('li').fadeOut(1000);
    i = 0;
    setTimeout(function(){
      $(slide).find('li').eq(i).fadeIn(1000);
    },1000);
  };
},12000);


// var menuHeight = $('.navbar').height();
// var startPos = 0;
// $(window).scroll(function(){
//   var currentPos = $(this).scrollTop();
//   if(currentPos > startPos){
//     if($(window).scrollTop() >= 200){
//       #('.navbar').css('top','-'+menuHeight+'px');
//     }
//   }else{
//     $('.navbar').css('top',0+'px');
//   }
//   startPos = currentPos;
// });



   </script>

</html>
