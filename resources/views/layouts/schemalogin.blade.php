<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image" href="/img/m24.png"/>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Mudate24</title>

    <!-- Bootstrap core CSS -->
    {!!Html::style('css/bootstrap.css')!!}    
    <!--external css-->
    {!!Html::style('font-awesome/css/font-awesome.css')!!}
        
    <!-- Custom styles for this template -->
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      @yield('content')

    <!-- js placed at the end of the document so the pages load faster -->
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.backstretch.min.js')!!}      

    <script>
        $.backstretch("img/login-bg.jpg", {speed: 500});
    </script>
  </body>
</html>
