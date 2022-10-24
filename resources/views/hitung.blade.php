<?php
require 'functions.php';
date_default_timezone_set('Asia/Jakarta');
$a = date("Y-m-d");
$b = date('H:i:s');
$c = date("Y-m-d",strtotime("-1 day"));
$d = date("Y-m-d",strtotime("+1 day"));
$time7  ="$a 07:00:00";
$time8  ="$a 08:59:00";
$time9  ="$a 09:00:00";
$time10 ="$a 10:59:00";
$time11 ="$a 11:00:00";
$time12 ="$a 12:59:00";
$time13 ="$a 13:00:00";
$time14 ="$a 14:59:00";
$time15 ="$a 15:00:00";
$time16 ="$a 16:59:00";
$time17 ="$a 17:00:00";
$time18 ="$a 18:59:00";
$time19 ="$c 07:00:00";

$open = "0000-00-00 00:00:00";
$open1 = "";

$jit = query("SELECT * FROM tbl_orderjit WHERE ShopCode ='WELD1' and DeliveryDate > '$a 00:00:00'");
$jit1 = query("SELECT count(OrderNo) as countdel FROM tbl_orderjit WHERE DeliveryDate > '$time7' AND ShopCode = 'WELD1' ");
$jit2 = query("SELECT * FROM tbl_orderjit WHERE ShopCode ='WELD2' and DeliveryDate > '$a 00:00:00'");
$jit3 = query("SELECT count(OrderNo) as countdel1 FROM tbl_orderjit WHERE DeliveryDate > '$time7' AND ShopCode = 'WELD2' ");
$jit4 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate > '$a 00:00:00' ");


$jit5 = query("SELECT sum(GRDate = '$open') as countopen FROM tbl_orderjit WHERE DeliveryDate > '$time7' AND ShopCode = 'WELD1' ");
$jit6 = query("SELECT sum(GRDate = '$open') as countopen FROM tbl_orderjit WHERE DeliveryDate > '$time7' AND ShopCode = 'WELD2' ");

$jit7 = query("SELECT * FROM partreceipt WHERE ReceiptDate > '$time19'");
$jit8 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate > '$time19' AND OrderPcs != ReceiptQty");


$jit9 = query("SELECT count(OrderPcs != ReceiptQty) as MINDELW1 FROM tbl_orderjit WHERE DeliveryDate > '$time19' AND OrderPcs != ReceiptQty AND ShopCode = 'WELD1' ");
$jit10 = query("SELECT count(OrderPcs != ReceiptQty) as MINDELW2 FROM tbl_orderjit WHERE DeliveryDate > '$time19' AND OrderPcs != ReceiptQty AND ShopCode = 'WELD2' " );

$jit11 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate > '$time7' order by id asc");

$j78 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time7' AND '$time8' and ShopCode ='WELD1' order by GRDate,ReceiptBy asc");
$j910 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time9' AND '$time10' and ShopCode ='WELD1' order by GRDate,ReceiptBy asc");
$j1112 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time11' AND '$time12' and ShopCode ='WELD1' order by GRDate,ReceiptBy asc");
$j1314 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time13' AND '$time14' and ShopCode ='WELD1' order by GRDate,ReceiptBy asc");
$j1516 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time15' AND '$time16' and ShopCode ='WELD1' order by GRDate,ReceiptBy asc");
$j1718 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time17' AND '$time18' and ShopCode ='WELD1' order by GRDate,ReceiptBy asc");

$w78 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time7' AND '$time8' and ShopCode ='WELD2' order by GRDate,ReceiptBy asc");
$w910 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time9' AND '$time10' and ShopCode ='WELD2' order by GRDate,ReceiptBy asc");
$w1112 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time11' AND '$time12' and ShopCode ='WELD2' order by GRDate,ReceiptBy asc");
$w1314 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time13' AND '$time14' and ShopCode ='WELD2' order by GRDate,ReceiptBy asc");
$w1516 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time15' AND '$time16' and ShopCode ='WELD2' order by GRDate,ReceiptBy asc");
$w1718 = query("SELECT * FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time17' AND '$time18' and ShopCode ='WELD2' order by GRDate,ReceiptBy asc");



$u0 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time7' AND '$time18' AND ShopCode ='WELD2' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u1 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time7' AND '$time18' AND ShopCode ='WELD1' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");



$u2 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time7' AND '$time8' AND ShopCode ='WELD1' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u3 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time9' AND '$time10' AND ShopCode ='WELD1' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u4 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time11' AND '$time12' AND ShopCode ='WELD1' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u5 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time13' AND '$time14' AND ShopCode ='WELD1' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u6 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time15' AND '$time16' AND ShopCode ='WELD1' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u7 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time17' AND '$time18' AND ShopCode ='WELD1' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");





$u8 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time7' AND '$time8' AND ShopCode ='WELD2' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u9 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time9' AND '$time10' AND ShopCode ='WELD2' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u10 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time11' AND '$time12' AND ShopCode ='WELD2' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u11 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time13' AND '$time14' AND ShopCode ='WELD2' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u12 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time15' AND '$time16' AND ShopCode ='WELD2' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
$u13 = query("SELECT count(OrderNo) as OrderNocount FROM tbl_orderjit WHERE DeliveryDate BETWEEN '$time17' AND '$time18' AND ShopCode ='WELD2' AND GRDate = '0000-00-00 00:00:00' AND ReceiptBy IS NULL ");
?>
<!DOCTYPE html>
<html>
<head>
  <title>JIT</title>
  <link href="dataTables/datatables.min.css" rel="stylesheet">
<meta http-equiv="Refresh" content="120; URL=http://10.59.19.108/wos/views/jit">
<script src="chartjs/Chart.bundle.js"></script>
<script src="chartjs/samples/utils.js"></script>
</head>
<body style="text-align: center;background-color: black;color:white;">
          <table  border="1" class="table table-bordered table-hover tablesorter ">

            <th style="text-align: center;color: ;background-color: white;width: 10s%;" >
              <img src="logo.jpg" width="200px">
            </th>
            <th style="text-align: center;color: ;background-color:;width: 20%;">
              <h4>RED COLOR<br> OPEN STATUS</h4>
            </th>
            
            <th style="text-align: center;color: ;background-color: ;width: 40%;">
             <h3>DAY SHIFT STATUS DN JIT RELOAD : 120 SECONDS</h3>
            </th>
            <th style="text-align: center;color: ;background-color: ;width: 30%;"><h4>
               <?php date_default_timezone_set('Asia/Jakarta');
                                $a = date("Y-m-d");
                                $b = date('H:i:s');
                                echo $a;
                                 ?>
              <br> <a style="color: ;" id='MyclockDisplay'></a>
              <script type="text/javascript">
              function showTime(){
              var date = new Date();
              var h = date.getHours();
              var m = date.getMinutes();
              var s = date.getSeconds();

              var time = h + ":" + m + ":" + s;
              document.getElementById('MyclockDisplay').innerText = time;
              document.getElementById('MyclockDisplay').textContent = time;
              }
              setInterval(showTime, 1000);
              </script>
             </h4>
            </th>
          </table>

<table border="1" align="left" style="width: 100%;" style="width: 100%;">
<tr>
<td colspan="2" style="background-color: #337ab7;color:white;">COUNTER TOTAL ITEM WELD 1</td>
<td colspan="2" style="background-color: #337ab7;color:white;">COUNTER TOTAL ITEM WELD 2</td>
<td rowspan="3" style="width: 350px;"><canvas id="chart-area"></canvas></td>
</tr>
<tr>
  <td style="font-size: 12px;">TOTAL ITEM JOBNO DAY SHIFT </td>
  <td style="font-size: 12px;">TOTAL ITEM JOBNO OPEN STATUS</td>
  <td style="font-size: 12px;">TOTAL ITEM JOBNO DAY SHIFT </td>
  <td style="font-size: 12px;">TOTAL ITEM JOBNO OPEN STATUS</td> 
</tr>
<tr>
<?php foreach ($jit1 as $row) : ?>
    <td style="font-size: 80px;color:red;height: 100%;background-color:;"><?= $row["countdel"]; ?></td>  
<?php endforeach; ?>
<?php foreach ($u1 as $row) : ?>
    <td style="font-size: 80px;color:red;height: 100%;"><?= $row["OrderNocount"]; ?></td>
<?php endforeach; ?>
<?php foreach ($jit3 as $row) : ?> 
    <td style="font-size: 80px;color:red;height: 100%;background-color:;"><?= $row["countdel1"]; ?></td>
<?php endforeach; ?>
<?php foreach ($u0 as $row) : ?>
    <td style="font-size: 80px;color:red;height: 100%;"><?= $row["OrderNocount"]; ?></td>
<?php endforeach; ?>
</tr>

</table>


<script>
    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
    };

    var config = {
      type: 'pie',
      data: {
        datasets: [{
          data: [
        <?php foreach ($jit1 as $v) {
          echo "'".$v['countdel']."',";
        }?>
        <?php foreach ($jit3 as $v) {
          echo "'".$v['countdel1']."',";
        }?>
        <?php foreach ($u1 as $v) {
          echo "'".$v['OrderNocount']."',";
        }?>
        <?php foreach ($u0 as $v) {
          echo "'".$v['OrderNocount']."',";
        }?>
          ],
          backgroundColor: [
            window.chartColors.red,
            window.chartColors.blue,
            window.chartColors.yellow,
            window.chartColors.green,
          ],
          label: 'Dataset 1'
        }],
        labels: [
          'All WELD1',
          'All WELD2',
          'OPEN WELD1',
          'OPEN WELD2'
        ]
      },
      options: {
        responsive: true
      }
    };

    window.onload = function() {
      var ctx = document.getElementById('chart-area').getContext('2d');
      window.myPie = new Chart(ctx, config);
    };

    document.getElementById('randomizeData').addEventListener('click', function() {
      config.data.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
          return randomScalingFactor();
        });
      });

      window.myPie.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
      var newDataset = {
        backgroundColor: [],
        data: [],
        label: 'New dataset ' + config.data.datasets.length,
      };

      for (var index = 0; index < config.data.labels.length; ++index) {
        newDataset.data.push(randomScalingFactor());

        var colorName = colorNames[index % colorNames.length];
        var newColor = window.chartColors[colorName];
        newDataset.backgroundColor.push(newColor);
      }

      config.data.datasets.push(newDataset);
      window.myPie.update();
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
      config.data.datasets.splice(0, 1);
      window.myPie.update();
    });
  </script>

<table border="1" style="width: 100%;">
<tr>
  <td style="font-size:;background-color: #337ab7;color: white;" colspan="">GROUP BY DELIVERY DATE & TIME WELD1 DAY SHIFT</td>
</tr>
</table>

<!-- <div style="max-height: 30px;width: 100%;overflow: auto;"> -->
<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">07:00 s/d 08:59</td></tr>
<tr><?php foreach ($u2 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td hidden>DeliveryDate</td>
  <td>Vendor</td>
  <td>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($j78 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td hidden><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<!-- </div> -->

<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">09:00 s/d 10:59</td></tr>
<tr><?php foreach ($u3 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($j910 as $row) : ?>
<tr hidden

 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">11:00 s/d 12:59</td></tr>
<tr><?php foreach ($u4 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($j1112 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">13:00 s/d 14:59</td></tr>
<tr><?php foreach ($u5 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($j1314 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">15:00 s/d 16:59</td></tr>
<tr><?php foreach ($u6 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($j1516 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">17:00 s/d 18:59</td></tr>
<tr><?php foreach ($u7 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($j1718 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


<table border="1" style="width: 100%;">
<tr>
  <td style="font-size:;background-color: #337ab7;color: white;" colspan="">GROUP BY DELIVERY DATE & TIME WELD2 DAY SHIFT</td>
</tr>
</table>


<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">07:00 s/d 08:59</td></tr>
<tr><?php foreach ($u8 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($w78 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">09:00 s/d 10:59</td></tr>
<tr><?php foreach ($u9 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($w910 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">11:00 s/d 12:59</td></tr>
<tr><?php foreach ($u10 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($w1112 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">13:00 s/d 14:59</td></tr>
<tr><?php foreach ($u11 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($w1314 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">15:00 s/d 16:59</td></tr>
<tr><?php foreach ($u12 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($w1516 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<table class="" align="left" border="1" style="width: 16.7%;font-size:10px ;">
<tr><td style="font-size: 25px;">17:00 s/d 18:59</td></tr>
<tr><?php foreach ($u13 as $row) : ?>
    <td style="font-size: 25px;color:red;height: 100%;">OPEN : ITEM<br><a href="/wos/views/jit2" style="font-size: 80px;color:red;"><?= $row["OrderNocount"]; ?></a></td>
<?php endforeach; ?></tr>
<tr hidden>
  <td>No</td>
  <td>OrderNo</td>
  <td>DeliveryDate</td>
  <td>Vendor</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>JobNo</td>
  <td hidden>OrderPcs</td>
  <td hidden>GRDate</td>
  <td hidden>GRBy</td>
  <td hidden>ReceiptQty</td>
  <td hidden>ReceiptDate</td>
  <td hidden>ReceiptBy</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($w1718 as $row) : ?>
<tr hidden
 style="background-color:
<?php 
$st = $row["GRDate"]; 
$st1 = $row["ReceiptBy"];
  if($st1 != ""){
  echo "green";
  }else if($st!="0000-00-00 00:00:00"){
  echo "green";
  }else{
  echo "red";  
    } ?> ;color:white;
">
  <td><?= $i ?></td>
  <td><?= $row["OrderNo"]; ?></td>
  <td><?= $row["DeliveryDate"]; ?></td>
  <td><?= $row["VendorAlias"]; ?></td>
  <td hidden><?= $row["JobNo"]; ?></td>
  <td hidden><?= $row["OrderPcs"]; ?></td>
  <td hidden><?= $row["GRDate"]; ?></td>
  <td hidden><?= $row["GRBy"]; ?></td>
  <td hidden><?= $row["ReceiptQty"]; ?></td>
  <td hidden><?= $row["ReceiptDate"]; ?></td>
  <td hidden><?= $row["ReceiptBy"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


</body>
<script src="jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="dataTables/datatables.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
        $('#datatables').DataTable();
      });
    </script>
</html>