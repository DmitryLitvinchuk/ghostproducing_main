﻿<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Чтобы обеспечить надлежащий рендеринг и изменение размера касанием -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- ограничить возможности приближения на мобильных устройствах -->
    <title>Ghostinger @yield('title')</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  </head>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
              <a class="navbar-brand" href="{{ url('/') }}">Ghostinger</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">жанры <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="house.html">house</a></li>
                        <li><a href="trance.html">trance</a></li>
                        <li><a href="techno.html">techno</a></li>
                      </ul>
                    </li>
                    <li><a href="/tracks">треки</a></li>
                    <li><a href="producers.html">продюсеры</a></li>
                    <li><a href="ads.html">объявления</a></li>
                </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Поиск">
                </div>
                <button type="submit" class="btn btn-default">Найти</button>
              </form>
              
                
                
            <ul class="nav navbar-nav navbar-right">
                <?php if (Auth::check()): 
                // Проверяем, пусты ли переменные логина и id пользователя Если пусты, то мы не выводим ссылку?>
                <!-- Collect the nav links, forms, and other content for toggling -->
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle uppercase" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ '/profile/main/{id}' }}">профиль</a></li>
                        <li><a href="">заказы<span class="badge">2</span></a></li>
                        <li><a href="">сообщения</a></li>
                        <li><a href="{{ '/auth/logout' }}">выйти</a></li>
                      </ul>
                    </li>
                </div><!-- /.navbar-collapse -->
                <?php else: 
                // Если не пусты, то мы выводим ссылку ?>
                    <li><a type="button" href="{{ url('/profile/main/{id}') }}"> Войти </a></li>
                <?php endif ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    
    <body class="center-block">
        <div class="modal fade login-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Вход</h4>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="control-label">Логин</label>
                      <input type="email" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="password" class="control-label">Пароль</label>
                      <input type="password" class="form-control" id="password">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary pull-left"><a href="registration.html">Регистрация</a></button>
                  <a href="profile_main.html"><button type="button" class="btn btn-default pull-right">Войти</button></a>
                </div>
               </div>
            </div> 
        </div>
            @yield('content')
    </body> 
    
    <script src="/jquery/jquery.js"></script>
    <script>
        function aud_play_pause(object) {
            var myAudio = object.querySelector(".xnine-player");
            var myIcon = object.querySelector(".control");
            if (myAudio.paused) {
                myIcon.className = "glyphicon glyphicon-play-circle control icon-pause";
                myAudio.play();
            } else {
                myIcon.className = "glyphicon glyphicon-play-circle control icon-play";
                myAudio.pause();
            }
        }
    </script>
    <script src="/dist/bootstrap.js"></script>
</html>

