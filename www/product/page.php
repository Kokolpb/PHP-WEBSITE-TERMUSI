<?php
require "./../inc/config.php";
require "./../inc/function.class.php";

if(!isset($_GET[pid])){$_GET[pid]=1;}

//抽出单个产品
$strSQL = "SELECT * from productinfo where id_prodinfo=$_GET[pid] and dele='1'";   
$objDB->Execute($strSQL);
$oneproduct=$objDB->fields();

//去单个产品的所有图片
$strSQL = "SELECT * from productpic where id_prodinfo=$_GET[pid] and type='JPG' and dele='1'";   
$objDB->Execute($strSQL);
$oneproductpic=$objDB->GetRows();




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../inc/css/css1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/inc/js/stmenu.js"></script>    
<script src="/inc/js/jquery.js" type="text/javascript"></script>

<?php if($setinfo[iscopy]=='1'){?>
<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>
<?php }?>
<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
</head>
<body>
<?php require "../header.php";?>

<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="bottom">&nbsp;</td>
  </tr>
  <tr>
    <td height="169" align="center" valign="bottom"><? require "../banner.php"; ?></td>
  </tr>
  <tr>
    <td style="padding:0; height:14px;" align="left" valign="top" background="../inc/pics/bg2.gif"></td>
  </tr>
</table>
<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="250" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><?php require "../leftmenu.php"; ?></td>
      </tr>
      
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
        <tr>
        <td align="right" bgcolor="#FFFFFF">
        <a href="/" class="link_navi">首页</a> > <a href='#' class='link_navi'>产品中心</a></td>
      </tr>
      <tr>
        <td bgcolor="#2469a2"  style="padding:0; height:1px;"></td>
      </tr>

      <tr>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="middle" class="txt_title"><?=$oneproduct[title];?></td>
      </tr>
      <tr>
        <td height="120" align="left" valign="top"><?=$oneproduct[content];?>
 </td>
      </tr>
      
      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<?php require "../footer.php";?>

</body>
</html>
