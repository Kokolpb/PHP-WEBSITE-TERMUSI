<?php
require "./../inc/config.php";
require "./../inc/function.class.php";
require "../inc/pagenav.class.php";

$intRows = 12;


if(isset($_GET[id])){//一级目录产品

$arrParam[0][name]="id1";
$arrParam[0][value]=$_GET[id];

$strSQLNum = "SELECT COUNT(*) as num from productinfo as a
left join productdir as c on a.id_proddir=c.id_proddir
where c.fatherid='$_GET[id]' and a.dele=1 ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select a.* from productinfo as a
left join productdir as c on a.id_proddir=c.id_proddir
where c.fatherid='$_GET[id]' and a.dele=1  order by a.id_prodinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrprods=$objDB->GetRows();



}else{// 目录不存在 所有产品


$strSQLNum = "SELECT COUNT(*) as num from productinfo  where dele=1";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select * from productinfo  where dele=1 order by id_prodinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrprods=$objDB->GetRows();

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
        <td align="right" bgcolor="#FFFFFF">
        <a href="/" class="link_navi">首页</a> > <a href="#" class="link_navi">产品中心</a></td>
      </tr>
      <tr>
        <td bgcolor="#2469a2"  style="padding:0; height:1px;"></td>
      </tr>

      <tr>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td height="120" align="center" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
	  <?
	
  for($i=0;$i<sizeof($arrprods);$i++){
  
  $strSQL = "select opicname as pic from productpic  where id_prodinfo ='".$arrprods[$i][id_prodinfo]."' order by id_prodpic asc limit 1" ;
  $objDB->Execute($strSQL);
  $arronepic=$objDB->fields();
 
 	 if($i!=0 && $i%3==0){?></tr><tr><? }?>		
		<td height="120" align="Center" valign="top" style="width:25%;">
				<table border="0" cellpadding="0" cellspacing="8" class="txt">
				  <tr align="center">
					<td bgcolor="#CCCCCC"><table width="100%"  border="0" cellspacing="1">
                      <tr>
                        <td bgcolor="#FFFFFF"> <a href="page.php?pid=<?php echo $arrprods[$i][id_prodinfo]?>" class="txt"><img src="../upload/product/<?php echo $arronepic[pic]?>" width="200" height="200" border="0" /></a></td>
                      </tr>
                    </table></td>
				  </tr>
				  <tr align="center">
					<td><a href="page.php?id=<?=$arrprods[$i]["id_prodinfo"];?>" target=_blank class="link_04"><?=$arrprods[$i]["title"];?></a></td>
				  </tr>
				</table>			  </td>
	  
	<? }?>		  
			  
	</tr>
</table> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php require "../footer.php";?>

</body>
</html>
