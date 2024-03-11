<?php
$stock=file_get_contents("https://mis.twse.com.tw/stock/api/getStockInfo.jsp?ex_ch=tse_2330.tw&json=1&delay=0");
$stock=trim($stock);
echo $stock;
?>