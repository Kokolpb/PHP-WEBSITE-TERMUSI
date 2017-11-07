<?php
//产品分类
$strSQL = "select * from productdir  where dele ='1' and level='1' order by ordernum asc" ;
$objDB->Execute($strSQL);
$product_fl=$objDB->GetRows();
?>
<table width="205" border="0" cellspacing="0" cellpadding="0">
<tr>
        <td colspan="2"><img src="/inc/pics/product_1.gif" width="205" height="56" /></td>
      </tr>
      <?php for($i=0;$i<sizeof($product_fl);$i++){?>
      <tr>
        <td width="25" align="center" valign="middle"><img src="/inc/pics/arrow_1.gif" width="7" height="5" /></td>
        <td width="70%" height="38" align="left" valign="middle"><a href="/product/prolist.php?id=<?php echo $product_fl[$i][id_proddir];?>" class="link_product"><?php echo $product_fl[$i][name];?></a></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#D1E5F3" style="padding:0; height:1px;"></td>
      </tr>
      <?php }?>
      <tr>
        <td colspan="2"><img src="/inc/pics/product_2.gif" width="205" height="19" /></td>
      </tr>
    </table>