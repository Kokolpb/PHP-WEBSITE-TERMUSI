<?php
//页脚

$strSQL = "select content from layout  where id_layout='1'" ;
$objDB->Execute($strSQL);
$footer_BQ=$objDB->fields();

?>
<a href="http://www.ty-sh.com"  style="margin-left:-7458px; font-size:1px; line-height:1px;">腾岩科技</a>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#004073"  style="padding:0; height:2px;"></td>
  </tr>
  <tr>
    <td height="113" align="center" background="/inc/pics/fotter_bg.gif"><table width="968" border="0" cellspacing="0" cellpadding="0">
      
      <tr>
        <td width="302"><a href="/"><img src="/inc/pics/fotter_logo.gif" width="254" height="51" border="0" /></a></td>
        <td width="666" class="txt"><a href="/about/contactus.php" class="link_navi">联系我们</a> | <a href="/about/aboutus.php" class="link_navi">关于我们</a> | <a 
            href="/product/index.php" class="link_navi">产品中心</a> | <a 
            href="/download/index.php" class="link_navi">下载中心</a><br />
          版权所有 Copyright(C)2008-2011 上海获裕电子有限公司</td>
      </tr>
    </table></td>
  </tr>
</table>
