<?php require_once('../../Connections/chirodon_chirodb.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_chirodon_chirodb, $chirodon_chirodb);
$query_ole = "SELECT * FROM vast WHERE vast.id = 15";
$ole = mysql_query($query_ole, $chirodon_chirodb) or die(mysql_error());
$row_ole = mysql_fetch_assoc($ole);
$totalRows_ole = mysql_num_rows($ole);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/MainTemp.dwt.php" codeOutsideHTMLIsLocked="false" -->
<?php require_once('../../Connections/chirodon_chirodb.php'); ?>
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Chiro Don Bosco Hoboken</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../../CSS/MainSite.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<div class="container">
  <header>
    <a href="../index.php"><img src="../../Images/logodbh_red.png" width="255" height="135" alt="Chiro Don Bosco" longdesc="http://www.chirodonboscohoboken.be" class="headerimg"></a>
  </header>
  <div class="navcontainer">
    <div class="nav">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../afdelingsprogramma/index.php">Afdelingsprogramma's</a>
          <ul>
            <li><a href="../afdelingsprogramma/index.php">Ribbels</a></li>
            <li><a href="../afdelingsprogramma/index.php">Rakwi&prime;s</a></li>
            <li><a href="../afdelingsprogramma/index.php">Tito&prime;s</a></li>
            <li><a href="../afdelingsprogramma/index.php">Kea&prime;s</a></li>
          </ul>
        </li>
        <li><a href="index.php">Werkgroepen</a>
          <ul>
            <li><a href="index.php">Leiding</a></li>
            <li><a href="index.php">Veebees</a></li>
            <li><a href="ole.php">Ol&eacute;</a></li>
            <li><a href="vzw.php">VZW</a></li>
          </ul>
        </li>
        <li><a href="../verhuur/index.php">Verhuur</a></li>
        <li><a href="../contact/index.php">Contact</a></li>
        <li><a href="../links/index.php">Nuttige links &amp; weetjes</a></li>
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
    <!-- InstanceBeginEditable name="Content" -->
    <div class="content">
      <h1><?php echo $row_ole['titel']; ?></h1>
      <section><?php echo $row_ole['bericht']; ?></section>
      <!-- end .content -->
    </div>
    <!-- InstanceEndEditable -->
    <div class="sidebar 2">
      <aside>
        <div class="sidecontent gastenboek">
        	<?php include("../../includes/gastenboek.php"); ?>
        </div>
        <div align="center">&nbsp;</div>
        <div class="sidecontent agenda">
            <?php include("../../includes/agenda.php"); ?>
       	</div>
        <div align="center">&nbsp;</div>
        <div class="sidecontent bday">
        	<?php include("../../includes/jarigen.php"); ?>
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
<!-- InstanceEnd --></html>
<?php
mysql_free_result($ole);
?>
