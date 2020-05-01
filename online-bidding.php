<?php require_once('Connections/cms.php'); ?>
<?php
$pageID = 143;
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

mysqli_select_db($cms, $database_cms);
$query_currentPage = "SELECT * FROM cmsPages WHERE pageID = ".$pageID;
$currentPage = mysqli_query($cms, $query_currentPage) or die(mysqli_error($cms));
$row_currentPage = mysqli_fetch_assoc($currentPage);
$totalRows_currentPage = mysqli_num_rows($currentPage);

$query_websiteInfo = "SELECT * FROM cmsWebsites WHERE websiteID = ".$websiteID;
$websiteInfo = mysqli_query($cms, $query_websiteInfo) or die(mysqli_error($cms));
$row_websiteInfo = mysqli_fetch_assoc($websiteInfo);
$totalRows_websiteInfo = mysqli_num_rows($websiteInfo);
?>
<?php
$pageTitle = $row_currentPage['pageTitle'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $row_websiteInfo['firstName']; ?> <?php echo $row_websiteInfo['lastName']; ?> | <?php echo $row_currentPage['pageTitle']; ?></title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles/styles-old.css">
<link href="styles/styles.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<link rel="stylesheet" type="text/css" href="styles/masonry.css"/>

<script type="text/javascript" src="scripts/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="scripts/imagesloaded.pkgd.min.js"></script>
<script>
$(document).ready(function() {
  // initiallize masonry
  var $container = $('.masonry').masonry();
  $container.imagesLoaded( function() {
    $container.masonry();
  });
});
</script>
<!-- InstanceEndEditable -->
<script src="foo.js" type="text/javascript"></script>
</head>
<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="90">&nbsp;</td>
    <td width="750" height="90"><table width="750" height="150" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="600" height="100" bgcolor="#000000"><img src="images/design5C/top.gif" width="600" height="150"></td>
        <td width="150" height="100"><a href="http://flipperauctions.hibid.com/email/subscribe"><img src="images/design5C/logo.gif" width="150" height="150" border="0"></a></td>
      </tr>
    </table></td>
    <td height="90">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td width="750" height="30"><img src="images/design5C/links.gif" width="750" height="30" border="0" usemap="#LinkMap">
<map name="LinkMap" id="LinkMap">
<!--
  <area shape="rect" coords="4,2,58,28" href="index.php" alt="">
  <area shape="rect" coords="61,1,206,35" href="listings.php" alt="">
  <area shape="rect" coords="206,1,320,28" href="recent-results.php" alt="">
  <area shape="rect" coords="320,1,466,44" href="auction-advantages.php" alt="">
  <area shape="rect" coords="469,0,581,40" href="online-bidding.php" alt="">
  <area shape="rect" coords="582,-2,661,38" href="about.php" alt="">
  <area shape="rect" coords="662,1,748,34" href="contact.php" alt="">
  -->
  <area shape="rect" coords="4,2,58,28" href="index.php" alt="">
  <area shape="rect" coords="61,1,206,35" href="http://flipperauctions.hibid.com/auctions/current" alt="">
  <area shape="rect" coords="206,1,320,28" href="http://flipperauctions.hibid.com/auctions/past" alt="">
  <area shape="rect" coords="320,1,466,44" href="auction-advantages.php" alt="">
  <area shape="rect" coords="469,0,581,40" href="online-bidding.php" alt="">
  <area shape="rect" coords="582,-2,661,38" href="about.php" alt="">
  <area shape="rect" coords="662,1,748,34" href="contact.php" alt="">
</map></td>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="750" align="left" valign="top" class="colorC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20">&nbsp;</td>
        <td>&nbsp;</td>
        <td width="20">&nbsp;</td>
      </tr>
      <tr>
        <td width="20">&nbsp;</td><td align="left" valign="top">
        <!-- InstanceBeginEditable name="main" -->

  <h1 class="wf_centered" style="padding-top:15px; text-align:center"><?php echo $pageTitle; ?></h1>
    <?php echo $row_currentPage['pageContent']; ?>

  <!-- InstanceEndEditable --></td>
        <td width="20">&nbsp;</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td height="30" align="left" valign="middle" class="colorC"><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <td height="15" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><div align="center" class="footerText">Flipper McDaniel and Associates&nbsp; ::&nbsp; 426 South Wall Street&nbsp; ::&nbsp;&nbsp;Calhoun, GA&nbsp;30701</div></td>
        </tr>
      </table>
    </div></td>
    <td height="20">&nbsp;</td>
  </tr>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- InstanceBeginEditable name="scripts" --> <!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($currentPage);

mysql_free_result($websiteInfo);
?>
