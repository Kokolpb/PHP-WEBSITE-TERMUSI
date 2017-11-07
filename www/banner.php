<?php

//banner
$strSQL = "select opicname as pic from layoutpic  where id_layout='7' order by id_layoutpic desc limit 5" ;
$objDB->Execute($strSQL);
$qj_banner=$objDB->GetRows();
?>

<SCRIPT type=text/javascript src="/inc/js/advsheadlb.js"></SCRIPT>
<DIV id=advsheadlb>
<?php for($i=0;$i<sizeof($qj_banner);$i++){?>
<IMG id=advsheadlbpic_<?php echo $i;?> class=advsheadlbpic border=0 src="/upload/layout/<?php echo $qj_banner[$i][pic];?>">
<?php }?>
</DIV>
