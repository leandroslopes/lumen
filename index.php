<?
include_once 'class/model/Contact.php';
include_once 'class/util/EmailUtil.php';

require 'app/config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Tenha os melhores momentos de sua vida registrados com os nossos ensaios fotográficos, e com a mais alta qualidade encontrada em São Luís/MA"> <!-- máx. 156 caract. -->

<title><?= $title_page ?>Lumem Studio Fotografia: Ensaios Fotográficos</title> <!-- máx. 65 caract. -->

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/mdb/css/mdb.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script src="plugins/jquery/jquery-min.js" type="text/javascript"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="plugins/mdb/js/mdb.min.js" type="text/javascript"></script>
<script src="plugins/bootstrap/js/validator.min.js" type="text/javascript"></script>

<script src="app/slider.js" type="text/javascript"></script>
<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
// <![CDATA[
    $(document).ready(function(){
        $(document).bind("contextmenu",function(e){
            return false;
        });
    });
// ]]>
</script>
</head>
<body>

<div class="container">

<div id="header">

  <div class="row">
    <img src="images/logo.png"
    class="img-responsive mybrand center-block" alt="Logomarca da Lumen Studio Fotografia">
  </div>
  <!-- /.row -->

  <div class="row" id="navbar-section">
    <nav class="navbar navbar-default mynavbar-default"
    role="navigation">
    <div class="container-fluid">
      <div class="navbar-header mynavbar-header">
        <button type="button" class="navbar-toggle collapsed"
        data-toggle="collapse" data-target="#navbar-collapse1">
        <span class="sr-only">Toggle navigation</span> <span
        class="icon-bar"></span> <span class="icon-bar"></span> <span
        class="icon-bar"></span>
      </button>
    </div>
    <!-- /.navbar-header -->
    <div class="collapse navbar-collapse mynavbar"
    id="navbar-collapse1">
    <ul class="nav navbar-nav">
      <li><a href="./">home<span class="sr-only">(current)</span></a></li>
      <li><a href="sobre">sobre</a></li>
      <li><a href="portifolio">portfólio</a></li>
      <li><a href="contato">contato</a></li>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
<!-- /.navbar -->
</div>
<!-- /#navbar-section -->

</div>
<!-- /.header -->

<div id="main-wrapper">

<?
$url[1] = (empty($url[1]) ? null : $url[1]);

if ($url[0] == 'index'):
require SITE_ROOT . 'home.php';
elseif (file_exists(SITE_ROOT . $url[0] . '.php')):
require SITE_ROOT . $url[0] . '.php';
else:
require SITE_ROOT . '404.php';
endif;
?>

</div>
<!-- /.main-wrapper -->

<div class="footer">

<div class="row" id="social-medias">

<p>
  <a href="https://www.facebook.com/lumenstudiofotografia" target="_blank"><img src="images/facebook.png" alt="Facebook"></a> &nbsp;
  <a href="https://www.instagram.com/lumenstudiofotografia/" target="_blank"><img src="images/instagram.png" alt="Instagram"></a>
</p>

</div>

<div class="row">

<p>
  Copyright <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2017
  Lumen Studio Fotografia. Todos os Direitos Reservados.
  <span class="blue-color">#webdesigner:</span>
  <a href="https://about.me/leandro.slopes" target="_blank"
  class="orange-color">about.me</a>
</p>

</div>

</div>
<!-- /.footer -->

</div>
<!-- /.container -->
</body>
</html>
