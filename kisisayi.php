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
       <div id="chart_div" style="width: 700px; height: 500px; float:right; margin-left:350px;"></div>
<script>
         google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mekanlar', 'Günde Geçen Kişi Sayısı'],
          [ 'Buca',      100],
          [ 'Buca Tınaztepe',      150],
          [ 'Konak',     200],
          [ 'Alsancak',      250],
          [ 'Gediz',      300],
        ]);

        var options = {
          title: 'Mekan Önünden Geçen Kişi Sayısı',
          hAxis: {title: 'Mekanlar', minValue: 0, maxValue: 15},
          vAxis: {title: 'Günde Geçen Kişi Sayısı', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
</script>

</html>