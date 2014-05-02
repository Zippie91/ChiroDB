<?php
/*
	Opmaak van de agenda van activiteiten
*/
?>
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
$query_Agenda = "SELECT * FROM activiteit WHERE activiteit.datum >=  DATE(NOW()) ORDER BY activiteit.datum ASC";
$Agenda = mysql_query($query_Agenda, $chirodon_chirodb) or die(mysql_error());
$row_Agenda = mysql_fetch_assoc($Agenda);
$totalRows_Agenda = mysql_num_rows($Agenda);
?>

<h4>Agenda</h4>
<h5><?php date('d-m-Y', time()); ?></h5>
<h5>Volgende gezamelijke activiteit:</h5>
<a href=""> <?php echo $row_Agenda['titel']; ?></a>
<?php
mysql_free_result($Agenda);
?>
