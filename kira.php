<?php
include("vt.php");
 
$sorgu=$vt->prepare('SELECT * FROM kiralar');
$sorgu->execute();
$kiralarr=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.
 
?>
 
<!doctype html>
<html lang="tr">
  <head>
	<center><h4 style="font-size:2vw" >MEKAN BUL </h4></center>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="dikey.css">
	<link href="style.css" type="text/css" rel="stylesheet"/>
	<header>

</header>
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
 
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    
  </head>
  <body>
  
	<div style="float:none;"> 
	  <div class="container">
	  <div class="row justify-content-center">
		<div class="col">
		 <table class="table table-bordered table-striped table-dark" style="width:650px;float:right;margin-top:70px;">
			<tr style="height:1px;">
			 <td style="weigth:1px;">ID</td>
			 <td style="weigth:1px;">Yer Adı</td>
			 <td style="weigth:1px;">Kira</td>
			 			 </tr>
						 </div>
			 
			 <?php
			 foreach($kiralarr as $kira){?>
			 
			 	<tr>
			 	<td><?= $kira->yer_id ?></td>
			 	<td><?= $kira->yer_adi ?></td>
			 	<td><?= $kira->kira ?></td>
			 	
			    </tr>
				 
			 <?php } ?>
 
			</table>  
		  </div>  
	  </div>
	  </div>
 
 
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>