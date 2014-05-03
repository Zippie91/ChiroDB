<!doctype html>
<html>
<?php require_once('../Connections/chirodon_chirodb.php'); ?>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Chiro Don Bosco Hoboken</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="../CSS/MainSite.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<div class="container">
  <header>
    <a href="../Main/index.php"><img src="../Images/logodbh_red.png" width="255" height="135" alt="Chiro Don Bosco" longdesc="http://www.chirodonboscohoboken.be" class="headerimg"></a>
  </header>
  <div class="navcontainer">
    <div class="nav">
      <ul>
        <li><a href="../Main/index.php">Home</a></li>
        <li><a href="../Main/afdelingsprogramma/index.php">Afdelingsprogramma's</a>
          <ul>
            <li><a href="../Main/afdelingsprogramma/index.php">Ribbels</a></li>
            <li><a href="../Main/afdelingsprogramma/index.php">Rakwi&prime;s</a></li>
            <li><a href="../Main/afdelingsprogramma/index.php">Tito&prime;s</a></li>
            <li><a href="../Main/afdelingsprogramma/index.php">Kea&prime;s</a></li>
          </ul>
        </li>
        <li><a href="../Main/werkgroep/index.php">Werkgroepen</a>
          <ul>
            <li><a href="../Main/werkgroep/index.php">Leiding</a></li>
            <li><a href="../Main/werkgroep/index.php">Veebees</a></li>
            <li><a href="../Main/werkgroep/ole.php">Ol&eacute;</a></li>
            <li><a href="../Main/werkgroep/vzw.php">VZW</a></li>
          </ul>
        </li>
        <li><a href="../Main/verhuur/index.php">Verhuur</a></li>
        <li><a href="../Main/contact/index.php">Contact</a></li>
        <li><a href="../Main/links/index.php">Nuttige links &amp; weetjes</a></li>
      </ul>
      <br class="clearfloat" />
    </div>
  </div>
  <div class="contentcontainer">
    <div class="sidebar1">
    <aside>
        <div class="sidecontent memo">
        	<h4>OPGELET!</h4>
            <p>
            	Dit is een faketekst. Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek. Wat u hier leest is een voorbeeldtekst. Deze wordt later vervangen door de uiteindelijke tekst, die nu nog niet bekend is. De faketekst is dus een tekst die eigenlijk nergens over gaat. Het grappige is, dat mensen deze toch vaak lezen. Zelfs als men weet dat het om een faketekst gaat, lezen ze toch door.
            </p>
        </div>
      	<div class="sidecontent imgpic" >
          <script src="http://rndpic.appspot.com/user/chiro.db.hoboken?size=200u" type="text/javascript"></script>
        <strong></strong>
      </div>
    </aside>
  <!-- end .sidebar1 --></div>
    <!-- TemplateBeginEditable name="Content" -->
    <div class="content">
      <h1>Welkom</h1>
      <section> Dit is een faketekst. Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek. Wat u hier leest is een voorbeeldtekst. Deze wordt later vervangen door de uiteindelijke tekst, die nu nog niet bekend is. De faketekst is dus een tekst die eigenlijk nergens over gaat. Het grappige is, dat mensen deze toch vaak lezen. Zelfs als men weet dat het om een faketekst gaat, lezen ze toch door. </section>
      <!-- end .content -->
    </div>
    <!-- TemplateEndEditable -->
    <div class="sidebar 2">
      <aside>
        <div class="sidecontent gastenboek">
        	<?php include("../includes/gastenboek.php"); ?>
        </div>
        <div class="sidecontent agenda">
            <?php include("../includes/agenda.php"); ?>
       	</div>
        <div align="center">&nbsp;</div>
        <div class="sidecontent bday">
        	<?php include("../includes/jarigen.php"); ?>
        </div>
      </aside>
  <!-- end .sidebar 2 --></div>
  <!-- end .contentcontainer --></div>
  <footer>
    <p>This footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    <address>
      Address Content
    </address>
  <!-- end .footer --></footer>
  <!-- end .container --></div>
</body>
</html>