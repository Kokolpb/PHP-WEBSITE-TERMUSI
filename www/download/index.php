<?php
require "./../inc/config.php";
require "./../inc/function.class.php";
require "../inc/pagenav.class.php";


$arrParam[0][name]="id";
$arrParam[0][value]=$_GET[id];

if(!isset($_GET[id]) || $_GET[id]==''){
$intRows = 10;
$strSQLNum = "SELECT COUNT(*) as num from newsinfo  where id_newsdir='16' and dele=1";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select * from newsinfo  where id_newsdir='16' order by id_newsinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrnews=$objDB->GetRows();

}
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
        <td><?php require "../leftmenu.php"; ?></td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
      
      <tr>
        <td align="right" bgcolor="#FFFFFF"><a href="/" class="link_navi">首页</a> > <a href="#" class="link_navi">下载中心</a></td>
      </tr>
      <tr>
        <td bgcolor="#2469a2"  style="padding:0; height:1px;"></td>
      </tr>
      <tr>
        <td class="txt">  
          <table width="700" border="0" align="center" cellpadding="2" cellspacing="2" class="txt">
       <?php for($i=0;$i<sizeof($arrnews);$i++){
	   //pdf
$strSQL = "select opicname from newspic  where id_newsinfo='".$arrnews[$i][id_newsinfo]."' and type='PDF' order by id_newspic asc limit 1" ;
$objDB->Execute($strSQL);
$download_pdf=$objDB->fields();
	        
	   ?> 
        <tr>
          <td width="17" height="26" align="right" valign="middle" ><img src="../inc/pics/icon012.gif" /></td>
          <td width="557" align="left" valign="middle" class="link_navi"><?php echo cutstr($arrnews[$i][title],150,1);?> <a href="/upload/news/<?=$download_pdf[opicname];?>" class="link_navi_red" target="_blank">下载PDF</a></td>
          <td width="98"  align="center" valign="middle"><?php echo substr($arrnews[$i][indate],0,10);?></td>
        </tr>
                <tr>
          <td colspan="3"  bgcolor="#F2F4F6"style="padding:0; height:1px;"></td>
      </tr>
         <?php }?>

      </table>
      <table width="700" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td height="50" align="center"><?php echo $strNavigate;?></td>
        </tr>
      </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php require "../footer.php";?>

</body>
</html>
