<!DOCTYPE html>
<html lang="en">
<head>

    <style>
     * {
font-family: 'Open Sans', sans-serif;
   }
    </style>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Vivoxti Blog</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
     <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
       <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
             <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Lato';
        }


        .hvlogin{
            opacity:0.03;
        }
           .hvlogin:hover{
            opacity:1;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->

              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                  На главную
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <a href="{{route('Admin.articles.index')}}" class="navbar-brand"><i class="fa fa-plus-square-o"></i> Добавить Статью</a>

              <ul class="nav navbar-nav">
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          Выбор раздела
                        </a>

                        <ul class="dropdown-menu" role="menu">
                          <li><a href="articles">1</a></li>
                          <li><a href="articles">2</a></li>
                          <li><a href="articles">3</a></li>
                          <li><a href="articles">4</a></li>
                          <li><a href="articles">5</a></li>
                          <li><a href="articles">6</a></li>

                        </ul>
                      <li>

                  </ul>
              </ul>
              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>


<div class="container">

<center><h2>Добавить новость</h2></center>

  <hr />

  <form class="form-horizontal" action="{{route('Admin.articles.store')}}" method="post">
    <input type="hidden" name="_token" value="e4Z8O6Rj16RdG1mCuQel1qQFIZqekty4KcpcZxW3">


    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  <style>
.mce-notification.mce-in {
	width: 0px;
	height: 0px;
	opacity: 0;
}
  </style>



<label for=""> Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="" required>

<label for=""> Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="" readonly="">
 <hr />

<label for=""> Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short"></textarea>

<label for=""> Полное описание</label>
<textarea class="form-control" id="description" name="description"></textarea>

<hr />

<label for=""> Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="">

<label for=""> Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="">

<label for=""> Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="">

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
<hr />


    <input type="hidden" name="created_by" value="1">
  </form>
</div>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script>
    console.log($("body").children());
    </script>
<!--
<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_vivoxtiblog&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>
</html>
