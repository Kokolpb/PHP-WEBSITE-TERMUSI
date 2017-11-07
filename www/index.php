<?php
require "./inc/config.php";
require "./inc/function.class.php";

//首页产品
$strSQL = "SELECT a.title,a.intro,a.id_prodinfo,b.fatherid from productinfo as a left join productdir as b on a.id_proddir=b.id_proddir
           where a.dele='1' order by a.id_prodinfo desc limit 8";   
$objDB->Execute($strSQL);
$sy_product=$objDB->GetRows();

for($i=0;$i<8;$i++){
$strSQL = "SELECT opicname from productpic where id_prodinfo='".$sy_product[$i][id_prodinfo]."' and dele='1' limit 1";   
$objDB->Execute($strSQL);
$sy_productpic=$objDB->fields();
$arr_pic[]=$sy_productpic[opicname];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="inc/css/css1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/inc/js/stmenu.js"></script>    
<script src="inc/js/jquery.js" type="text/javascript"></script>

<script src="inc/js/jcarousellite_1.0.1.pack.js" type="text/javascript"></script>
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
<? require "header.php"; ?>
<table width="968" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="315" align="left" valign="top"><table width="315" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top">
        <A class="right_menu_1  menupost link_01 " href="/product/prolist.php?id=1">标准彩色摄像机</A>
        <A class="right_menu_2  menupost link_01 " href="/product/prolist.php?id=2">超宽动态摄像机</A>
        <A class="right_menu_3  menupost link_01 " href="/product/prolist.php?id=3">半球彩色摄像机</A>
        <A class="right_menu_4  menupost link_01 " href="/product/prolist.php?id=4">红外半球摄像机</A>
        <A class="right_menu_5  menupost link_01 " href="/product/prolist.php?id=20">红外防水摄像机</A>
        <A class="right_menu_6  menupost link_01 " href="/product/prolist.php?id=25">阵列红外摄像机</A>
        <A class="right_menu_7  menupost link_01 " href="/product/prolist.php?id=27">双CCD红外防水摄像机</A>
        <A class="right_menu_8  menupost link_01 " href="/product/prolist.php?id=29">车牌专用摄像机</A>
        <A class="right_menu_9  menupost link_01 " href="/product/prolist.php?id=31">一体化摄像机</A>
        <A class="right_menu_10  menupost link_01 " href="/product/prolist.php?id=33">普通球型摄像机</A>
        <A class="right_menu_11  menupost link_01 " href="/product/prolist.php?id=35">高速球型摄像机</A>
        <A class="right_menu_12  menupost link_01 " href="/product/prolist.php?id=37">迷你球型摄像机</A>
        <A class="right_menu_13  menupost link_01 " href="/product/prolist.php?id=39">红外球型摄像机</A> 
        <A class="right_menu_14  menupost link_01 " href="/product/prolist.php?id=41">网络高清摄像机</A> 
        <A class="right_menu_15  menupost link_01 " href="/product/prolist.php?id=43">大型网络矩阵</A> 
        <A class="right_menu_16  menupost link_01 " href="/product/prolist.php?id=45">超大型网路矩阵</A> 
        <A class="right_menu_17  menupost link_01 " href="/product/prolist.php?id=47">二维主控键盘</A> 
        <A class="right_menu_18  menupost link_01 " href="/product/prolist.php?id=49">三维主控键盘</A> 
        </td>
      </tr>
    </table></td>
    <td width="14">&nbsp;</td>
    <td width="639" align="left" valign="top"><table width="637" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="241"><OBJECT 
            codeBase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" 
            classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 width=637 height=241>
            <PARAM NAME="movie" VALUE="/inc/pics/banner.swf">
            <PARAM NAME="quality" VALUE="high">
          <embed src="/inc/pics/banner.swf" quality="high" 
            pluginspage="http://www.macromedia.com/go/getflashplayer" 
            type="application/x-shockwave-flash" width="637" 
            height="241"></embed>          </OBJECT></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="50"><DIV class=index_product_span>
            <DIV class=product>
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD height=104 width=100 align=middle><A href="/product/prolist.php?id=<?=$sy_product[0][fatherid];?>"><IMG border=0 src="/upload/product/<?=$arr_pic[0];?>" width=90 height=90></A></TD>
                <TD vAlign=top>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width=200>
                    <TBODY>
                    <TR>
                      <TD height=35 align=left><IMG 
                        src="/inc/pics/index_71.gif" width=15 height=11> <A 
                        href="/product/prolist.php?id=/product/prolist.php?id=<?=$sy_product[0][fatherid];?>" class="link_03"><STRONG><?=$sy_product[0][title];?></STRONG></A></TD></TR>
                    <TR>
                      <TD height=45 vAlign=top align=left><A 
                        href="/product/prolist.php?id=/product/prolist.php?id=<?=$sy_product[0][fatherid];?>" class="link_navi"><?php echo cutstr($sy_product[0][intro],60,1);?></A></TD></TR>
                    <TR>
                      <TD bgColor=#c0cbd6 height=1></TD></TR>
                    <TR>
                      <TD height=20 vAlign=bottom align=right><A href="/product/prolist.php?id=/product/prolist.php?id=<?=$sy_product[0][fatherid];?>" class="link_01"><IMG border=0 src="/inc/pics/index_79.gif" width=8 height=11> 
                        详细信息</A>&nbsp;&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
          <DIV class=drak_bg></DIV></DIV></td>
          <td width="50"><DIV class=index_product_span>
            <DIV class=product>
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD height=104 width=100 align=middle><A href="/product/prolist.php?id=<?=$sy_product[1][fatherid];?>"><IMG 
                  border=0 src="/upload/product/<?=$arr_pic[1];?>" width=90 
                  height=90></A></TD>
                <TD vAlign=top>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width=200>
                    <TBODY>
                    <TR>
                      <TD height=35 align=left><IMG 
                        src="/inc/pics/index_71.gif" width=15 height=11> <A 
                        href="/product/prolist.php?id=<?=$sy_product[1][fatherid];?>" class="link_03"><STRONG><?=$sy_product[1][title];?></STRONG></A></TD></TR>
                    <TR>
                      <TD height=45 vAlign=top align=left><A 
                        href="/product/prolist.php?id=<?=$sy_product[1][fatherid];?>" class="link_navi"><?php echo cutstr($sy_product[1][intro],60,1);?></A></TD></TR>
                    <TR>
                      <TD bgColor=#c0cbd6 height=1></TD></TR>
                    <TR>
                      <TD height=20 vAlign=bottom align=right><A 
                        href="/product/prolist.php?id=<?=$sy_product[1][fatherid];?>" class="link_01"><IMG 
                        border=0 src="/inc/pics/index_79.gif" width=8 height=11> 
                        详细信息</A>&nbsp;&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
          <DIV class=drak_bg></DIV></DIV></td>
        </tr>
        <tr>
          <td><DIV class=index_product_span>
            <DIV class=product>
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD height=104 width=100 align=middle><A href="/product/prolist.php?id=<?=$sy_product[2][fatherid];?>"><IMG 
                  border=0 src="/upload/product/<?=$arr_pic[2];?>" width=90 
                  height=90></A></TD>
                <TD vAlign=top>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width=200>
                    <TBODY>
                    <TR>
                      <TD height=35 align=left><IMG 
                        src="/inc/pics/index_71.gif" width=15 height=11> <A 
                        href="/product/prolist.php?id=<?=$sy_product[2][fatherid];?>" class="link_03"><STRONG><?=$sy_product[2][title];?></STRONG></A></TD></TR>
                    <TR>
                      <TD height=45 vAlign=top align=left><A 
                        href="/product/prolist.php?id=<?=$sy_product[2][fatherid];?>" class="link_navi"><?php echo cutstr($sy_product[2][intro],60,1);?></A></TD></TR>
                    <TR>
                      <TD bgColor=#c0cbd6 height=1></TD></TR>
                    <TR>
                      <TD height=20 vAlign=bottom align=right><A 
                        href="/product/prolist.php?id=<?=$sy_product[2][fatherid];?>" class="link_01"><IMG 
                        border=0 src="/inc/pics/index_79.gif" width=8 height=11> 
                        详细信息</A>&nbsp;&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
          <DIV class=drak_bg></DIV></DIV></td>
          <td><DIV class=index_product_span>
            <DIV class=product>
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD height=104 width=100 align=middle><A href="/product/prolist.php?id=<?=$sy_product[3][fatherid];?>"><IMG 
                  border=0 src="/upload/product/<?=$arr_pic[3];?>" width=90 
                  height=90></A></TD>
                <TD vAlign=top>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width=200>
                    <TBODY>
                    <TR>
                      <TD height=35 align=left><IMG 
                        src="/inc/pics/index_71.gif" width=15 height=11> <A 
                        href="/product/prolist.php?id=<?=$sy_product[3][fatherid];?>" class="link_03"><STRONG><?=$sy_product[3][title];?></STRONG></A></TD></TR>
                    <TR>
                      <TD height=45 vAlign=top align=left><A 
                        href="/product/prolist.php?id=<?=$sy_product[3][fatherid];?>" class="link_navi"><?php echo cutstr($sy_product[3][intro],60,1);?></A></TD></TR>
                    <TR>
                      <TD bgColor=#c0cbd6 height=1></TD></TR>
                    <TR>
                      <TD height=20 vAlign=bottom align=right><A 
                        href="/product/prolist.php?id=<?=$sy_product[3][fatherid];?>" class="link_01"><IMG 
                        border=0 src="/inc/pics/index_79.gif" width=8 height=11> 
                        详细信息</A>&nbsp;&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
          <DIV class=drak_bg></DIV></DIV></td>
        </tr>
        <tr>
          <td><DIV class=index_product_span>
            <DIV class=product>
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD height=104 width=100 align=middle><A href="/product/prolist.php?id=<?=$sy_product[4][fatherid];?>"><IMG 
                  border=0 src="/upload/product/<?=$arr_pic[4];?>" width=90 
                  height=90></A></TD>
                <TD vAlign=top>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width=200>
                    <TBODY>
                    <TR>
                      <TD height=35 align=left><IMG 
                        src="/inc/pics/index_71.gif" width=15 height=11> <A 
                        href="/product/prolist.php?id=<?=$sy_product[4][fatherid];?>" class="link_03"><STRONG><?=$sy_product[4][title];?></STRONG></A></TD></TR>
                    <TR>
                      <TD height=45 vAlign=top align=left><A 
                        href="/product/prolist.php?id=<?=$sy_product[4][fatherid];?>" class="link_navi"><?php echo cutstr($sy_product[4][intro],60,1);?></A></TD></TR>
                    <TR>
                      <TD bgColor=#c0cbd6 height=1></TD></TR>
                    <TR>
                      <TD height=20 vAlign=bottom align=right><A 
                        href="/product/prolist.php?id=<?=$sy_product[4][fatherid];?>" class="link_01"><IMG 
                        border=0 src="/inc/pics/index_79.gif" width=8 height=11> 
                        详细信息</A>&nbsp;&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
          <DIV class=drak_bg></DIV></DIV></td>
          <td><DIV class=index_product_span>
            <DIV class=product>
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD height=104 width=100 align=middle><A href="/product/prolist.php?id=<?=$sy_product[5][fatherid];?>"><IMG 
                  border=0 src="/upload/product/<?=$arr_pic[5];?>" width=90 
                  height=90></A></TD>
                <TD vAlign=top>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width=200>
                    <TBODY>
                    <TR>
                      <TD height=35 align=left><IMG 
                        src="/inc/pics/index_71.gif" width=15 height=11> <A 
                        href="/product/prolist.php?id=<?=$sy_product[5][fatherid];?>" class="link_03"><STRONG><?=$sy_product[5][title];?></STRONG></A></TD></TR>
                    <TR>
                      <TD height=45 vAlign=top align=left><A 
                        href="/product/prolist.php?id=<?=$sy_product[5][fatherid];?>" class="link_navi"><?php echo cutstr($sy_product[5][intro],60,1);?></A></TD></TR>
                    <TR>
                      <TD bgColor=#c0cbd6 height=1></TD></TR>
                    <TR>
                      <TD height=20 vAlign=bottom align=right><A 
                        href="/product/prolist.php?id=<?=$sy_product[5][fatherid];?>" class="link_01"><IMG 
                        border=0 src="/inc/pics/index_79.gif" width=8 height=11> 
                        详细信息</A>&nbsp;&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
          <DIV class=drak_bg></DIV></DIV></td>
        </tr>
        <tr>
          <td><DIV class=index_product_span>
            <DIV class=product>
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD height=104 width=100 align=middle><A href="/product/prolist.php?id=<?=$sy_product[6][fatherid];?>"><IMG 
                  border=0 src="/upload/product/<?=$arr_pic[6];?>" width=90 
                  height=90></A></TD>
                <TD vAlign=top>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width=200>
                    <TBODY>
                    <TR>
                      <TD height=35 align=left><IMG 
                        src="/inc/pics/index_71.gif" width=15 height=11> <A 
                        href="/product/prolist.php?id=<?=$sy_product[6][fatherid];?>" class="link_03"><STRONG><?=$sy_product[6][title];?></STRONG></A></TD></TR>
                    <TR>
                      <TD height=45 vAlign=top align=left><A 
                        href="/product/prolist.php?id=<?=$sy_product[6][fatherid];?>" class="link_navi"><?php echo cutstr($sy_product[6][intro],60,1);?></A></TD></TR>
                    <TR>
                      <TD bgColor=#c0cbd6 height=1></TD></TR>
                    <TR>
                      <TD height=20 vAlign=bottom align=right><A 
                        href="/product/prolist.php?id=<?=$sy_product[6][fatherid];?>" class="link_01"><IMG 
                        border=0 src="/inc/pics/index_79.gif" width=8 height=11> 
                        详细信息</A>&nbsp;&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
          <DIV class=drak_bg></DIV></DIV></td>
          <td><DIV class=index_product_span>
            <DIV class=product>
            <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD height=104 width=100 align=middle><A href="/product/prolist.php?id=<?=$sy_product[7][fatherid];?>"><IMG 
                  border=0 src="/upload/product/<?=$arr_pic[7];?>" width=90 
                  height=90></A></TD>
                <TD vAlign=top>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width=200>
                    <TBODY>
                    <TR>
                      <TD height=35 align=left><IMG 
                        src="/inc/pics/index_71.gif" width=15 height=11> <A 
                        href="/product/prolist.php?id=<?=$sy_product[7][fatherid];?>" class="link_03"><STRONG><?=$sy_product[7][title];?></STRONG></A></TD></TR>
                    <TR>
                      <TD height=45 vAlign=top align=left><A 
                        href="/product/prolist.php?id=<?=$sy_product[7][fatherid];?>" class="link_navi"><?php echo cutstr($sy_product[7][intro],60,1);?></A></TD></TR>
                    <TR>
                      <TD bgColor=#c0cbd6 height=1></TD></TR>
                    <TR>
                      <TD height=20 vAlign=bottom align=right><A 
                        href="/product/prolist.php?id=<?=$sy_product[7][fatherid];?>" class="link_01"><IMG 
                        border=0 src="/inc/pics/index_79.gif" width=8 height=11> 
                        详细信息</A>&nbsp;&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
          <DIV class=drak_bg></DIV></DIV></td>
        </tr>
      </table></td>
  </tr>
</table>
<? require "footer.php"; ?>
</body>
</html>
