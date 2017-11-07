<?php
require "../inc/config.php";
require "../inc/function.class.php";

//公司简介
$strSQL = "select content from pageset  where id_pageset='5'" ;
$objDB->Execute($strSQL);
$contact_intro=$objDB->fields();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="/inc/css/css1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/inc/js/stmenu.js"></script>    
<script src="/inc/js/jquery.js" type="text/javascript"></script>

<script src="/inc/js/jcarousellite_1.0.1.pack.js" type="text/javascript"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $(".jCarouselLite").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
   auto: 1000,
   scroll: 1,
   speed: 1000,
   visible: 1
    }); 
   });
</script>



<?php if($setinfo[iscopy]=='1'){?>
<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>
<?php }?>
<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
</head>
<body>
<? require "../header.php"; ?>




<table width="968" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><? require "../banner.php"; ?></td>
  </tr>
</table>
<table width="968" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="205"><? require "../leftmenu.php"; ?></td>
    <td width="763" align="right" valign="top"><table width="95%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left"><img src="../inc/pics/termusi.jpg" width="213" height="38" /></td>
      </tr>
      <tr>
        <td bgcolor="#4F9BD2" style="padding:0; height:1px;"></td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" class="txt"><?php echo $contact_intro[content];?></td>
      </tr>
    </table></td>
  </tr>
</table>
<? require "../footer.php"; ?>
</body>
</html>
