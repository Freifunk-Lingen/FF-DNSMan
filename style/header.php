
<?php


echo "<html>";
echo "<head>";
echo "<title>". getTitle() ."</title>";
echo '<link rel="stylesheet" href="'. $GLOBALS['WEBROOT'] .'include/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="'. $GLOBALS['WEBROOT'] .'include/css/style.css">';
echo '<script type="text/javascript" src="'. $GLOBALS['WEBROOT'] .'include/js/jquery.min.js"></script>';
echo '<script type="text/javascript" src="'. $GLOBALS['WEBROOT'] .'include/js/npm.js"></script>';
echo '<script type="text/javascript" src="'. $GLOBALS['WEBROOT'] .'include/js/bootstrap.min.js"></script>';
echo "<head>";
echo "<body>";
echo '
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="'. $GLOBALS['WEBROOT'] .'">'. getTitle() .'</a>
    </div>  
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php?view=zones">Zonen</a></li>
        <li><a href="index.php?view=records">Eintr&auml;ge</a></li>
        <li><a href="index.php?view=ns">Nameserver</a></li>
        <li><a href="index.php?view=users">Benutzer</a></li>
      </ul>
  </div>
</div>
</nav>

';

