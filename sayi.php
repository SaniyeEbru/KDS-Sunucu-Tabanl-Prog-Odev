<!DOCTYPE HTML>

<head>
<title>Mekancım.com</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="dikey.css">
	<link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<div class="d-menu" style="float:left;">
    <ul>
        <li><a href="" title="">ANA SAYFA</a></li>
        <li><a href="" title="">MEKANLAR</a>
            <ul>
                <li><a href="kira.php" title="">MEKAN KİRALARI</a></li>
                <li><a href="sayi.php" title="">MEKAN ÇEVRESİNDEKİ KAFE VE RESTORAN SAYILARI</a></li>
                <li><a href="kisisayi.php" title="">MEKANIN ÖNÜNDEN BİR GÜNDE GEÇEN KİŞİ SAYISI</a></li>
        
            </ul>
        </li>
        </li>
        <li><a href="tercih.php" title="">RAPOR</a></li>
        <li><a href="" title="">İLETİŞİM</a></li>
    </ul>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div" style="float:right;">
  <style>
div{
width:850px;
height:500px;
float:right;
}
</style>
  </div>
  <script>
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBarColors);
  function drawBarColors() {
      var data = google.visualization.arrayToDataTable([
        ['Mekanlar', 'Kafe', 'Restoran'],
        ['Buca',10 ,3 ],
        ['Buca Tınaztepe', 5, 4],
        ['Konak', 5, 0],
        ['Alsancak', 7, 6],
        ['Gediz',0, 1]
      ]);

      var options = {
        title: 'Konum Çevresindeki Kafe ve Restoran Sayıları',
        chartArea: {width: '50%'},
        colors: ['#b0120a', '#ffab91'],
        hAxis: {
          title: '',
          minValue: 0
        },
        vAxis: {
          title: 'Mekanlar'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
  
 </html>