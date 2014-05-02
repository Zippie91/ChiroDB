<?php 
/*
	Opmaak van de jarigen van de maand
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

$maxRows_Jarigen = 3;
$pageNum_Jarigen = 0;
if (isset($_GET['pageNum_Jarigen'])) {
  $pageNum_Jarigen = $_GET['pageNum_Jarigen'];
}
$startRow_Jarigen = $pageNum_Jarigen * $maxRows_Jarigen;

mysql_select_db($database_chirodon_chirodb, $chirodon_chirodb);
$query_Jarigen = "SELECT * FROM jarigen WHERE MONTH(jarigen.gebdatum) = MONTH(NOW()) ORDER BY jarigen.gebdatum ASC";
$query_limit_Jarigen = sprintf("%s LIMIT %d, %d", $query_Jarigen, $startRow_Jarigen, $maxRows_Jarigen);
$Jarigen = mysql_query($query_limit_Jarigen, $chirodon_chirodb) or die(mysql_error());
$row_Jarigen = mysql_fetch_assoc($Jarigen);

if (isset($_GET['totalRows_Jarigen'])) {
  $totalRows_Jarigen = $_GET['totalRows_Jarigen'];
} else {
  $all_Jarigen = mysql_query($query_Jarigen);
  $totalRows_Jarigen = mysql_num_rows($all_Jarigen);
}
$totalPages_Jarigen = ceil($totalRows_Jarigen/$maxRows_Jarigen)-1;


?>
<?php include("tijd.php"); ?>

<h4>Jarigen van <br /><?php echo $month; ?></h4>

<table>
  	<?php do { ?>
    <?php $time = strtotime($row_Jarigen['gebdatum']); ?>
    <tr>
      <td style="font-size:14px"><?php echo date('d', $time);?></td>
      <td><?php echo $row_Jarigen['naam']; ?></td>
    </tr>
  	<?php } while ($row_Jarigen = mysql_fetch_assoc($Jarigen)); ?>
</table>
<?php
mysql_free_result($Jarigen);
?>
