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
       <div id="piechart" style="width: 500px; height: 500px; float:right;"></div>
<script>
		google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Yerler', 'Tercih Edilme Oranı'],
          ['Buca',     200],
          ['Buca Tınaztepe',      150],           
          ['Konak',  200],
          ['Alsancak', 400],
          ['Gediz',    50]
        ]);

        var options = {
          title: 'En Çok Tercih Edilen Yerler'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	  </script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <div id="piechart1" style="width: 500px; height: 500px; margin-left:300px;"></div>
   
<script>

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Yerler', 'Kiralanma'],
          ['Buca',     115],
          ['Buca Tınaztepe',      100],
          ['Konak',  12],
          ['Alsancak', 150],
          ['Gediz',    25]
        ]);

        var options = {
          title: '2018 Yılı Kiralanan Yerler'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
</script>
	  
	  
</html>