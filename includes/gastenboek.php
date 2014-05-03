<?php 
/*
	Script voor het schrijven en lezen van de gastenboek
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

$maxRows_Gastenboek = 3;
$pageNum_Gastenboek = 0;
if (isset($_GET['pageNum_Gastenboek'])) {
  $pageNum_Gastenboek = $_GET['pageNum_Gastenboek'];
}
$startRow_Gastenboek = $pageNum_Gastenboek * $maxRows_Gastenboek;

mysql_select_db($database_chirodon_chirodb, $chirodon_chirodb);
$query_Gastenboek = "SELECT * FROM gastenboek ORDER BY gastenboek.datum DESC";
$query_limit_Gastenboek = sprintf("%s LIMIT %d, %d", $query_Gastenboek, $startRow_Gastenboek, $maxRows_Gastenboek);
$Gastenboek = mysql_query($query_limit_Gastenboek, $chirodon_chirodb) or die(mysql_error());
$row_Gastenboek = mysql_fetch_assoc($Gastenboek);

if (isset($_GET['totalRows_Gastenboek'])) {
  $totalRows_Gastenboek = $_GET['totalRows_Gastenboek'];
} else {
  $all_Gastenboek = mysql_query($query_Gastenboek);
  $totalRows_Gastenboek = mysql_num_rows($all_Gastenboek);
}
$totalPages_Gastenboek = ceil($totalRows_Gastenboek/$maxRows_Gastenboek)-1;
?>

<h4>Gastenboek</h4>
<table class="gasttekst">
  <?php do { ?>
    <tr>
      <td colspan="2" class="gastdate"><?php echo $row_Gastenboek['datum']; ?></td>
    </tr>
    <tr>
      <td colspan="2"><?php echo $row_Gastenboek['bericht']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><h5><?php echo $row_Gastenboek['naam']; ?></h5></td>
    </tr>
    <?php } while ($row_Gastenboek = mysql_fetch_assoc($Gastenboek)); ?>
</table>

<?php
mysql_free_result($Gastenboek);
?>
