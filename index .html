<html>
<head>
<title>Полив теплицы</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta name=viewport content="width=device-width, initial-scale=1">

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style.css">

  
<!--  AJAX обработчик --> 

    <script>  


        function show()  
        {  
            
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
        }); 
        

          function AjaxFormRequest(result_id,button,url) {
      jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+button).serialize(),

         });
}
  

</script>
  
 
<!--  код разметки HTML страницы --> 
  
</head>
    <body style="background-image:url(img/fon.jpg)">



<table>
    <style>
   table {
    border: 0px solid #000;
    width: 95%;
    margin: auto;
   }
  </style>
  
	<tbody>
		<tr>
			<td style="text-align:center"><span style="color:#008000"><span style="font-size:24px"><strong>Умный дом</strong></span></span></td>
		</tr>
		<tr>
			<td style="text-align: center;"><img alt="" src="img/dom.jpg" style="height:113px; width:150px" /></td>
		</tr>
	</tbody>
</table>


 <table align="center" border="0" cellpadding="4" cellspacing="0" style="width:95%">
	<tbody>
		<tr>
			<td style="text-align: center; vertical-align: middle;">

 
<!--  HTML код обработки кнопок --> 

<form  id="led" action="" method="post"  >

       <div class="descr"><input type="radio" visibility= "hidden"; checked="checked" name="status" value="ON(")></div>
                 
        <img alt="" src="img/but_on.jpg" style="height:80px; width:80px" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/greenhouse.php')"/>
             
 </form>




</td>
			<td style="text-align: center; vertical-align: middle;">


<form  id="ledd" action="" method="post"  >     
           <div class="descr"><input type="radio" checked="checked" name="status" value="Off)")></div>      
        <img alt="" src="img/but_off.jpg" style="height:75px; width:75px" onclick="AjaxFormRequest('messegeResult', 'ledd', 'transfer/greenhouse.php')"/>            
 </form>

</td>
			<td style="text-align: center; vertical-align: middle;">

 
<!--   PHP скрипт изменения картинки статуса работы насоса --> 


<script>
<!--  setInterval позволяет вызывать функцию регулярно, повторяя вызов через определённый интервал времени(1000)   --> 
setInterval(function(){
<!--  получить данные с сервера. .load() устанавливает HTML содержимое в указанный элемент из возвращенных данных. ищет элемент с ID равным Nasos(2).--> 
<!-- Этот элемент, со всем своим содержимым, будет вставлен в элемент с ID равным Nasos(1) и остальная часть загруженного документа будет проигнорирована.  --> 

$("#Nasos").load("index.php #Nasos");
}, 1000); 
</script>

<div id="Nasos"> 

<?php

$myFile = "txt/pomidor.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);

if  ( $theData == "ON(")
{
 echo  '<img src="img/led_on.jpg" style="height:95px; width:50px">'; 
}

if  ( $theData == "Off)" )
{
 echo '<img src="img/led_off.jpg" style="height:95px; width:50px">'; 
}
?>

</div>

</td>
		</tr>
	</tbody>
</table>

<!--  HTML код  параметров --> 


<table align="center" border="0" cellpadding="4" cellspacing="0" style="width:95%">
	<tbody>
		<tr>
			<td style="text-align: center; vertical-align: middle; width: 10%;"><span style="color:#008080"><span style="font-size:16px">temperature</span></span></td>
			<td style="text-align: center; vertical-align: middle; width: 10%;"><span style="color:#008080"><span style="font-size:16px">humidity</span></span></td>
			<td style="text-align: center; vertical-align: middle; width: 10%;"><span style="color:#008080"><span style="font-size:16px">pressure</span></span></td>
			
		</tr>
		
<!--  HTML код значка температуры --> 		
		<tr>
			<td style="text-align: center; vertical-align: middle;">
      <div class="r2" style="display:inline-block;">
       <img alt="" src="img/temp.jpg" style="height:30px; width:18px" />
   <div class="r3" id="content-2">
  </div> 
  
<div class="r3">

<!--  скрипт  вывода температуры--> 
<script>
setInterval(function(){
$("#temp").load("index.php #temp");
}, 1000); 
</script>

<!-- запись значения температуры --> 

<div id="temp"> 
<?php
$myFile = "in/1/log.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>

 &ordm;C</div>
</div>			
</td>

<!--  HTML код значка влажности --> 


	<td style="text-align: center; vertical-align: middle;">
   <div class="r2" style="display:inline-block;">
   <img alt="" src="img/hum.png" style="height:30px; width:30px" /> 
  <div class="r3" id="content-2">
  </div> 
 <div class="r3">
 <!--  скрипт  вывода влажности-->    
     <script>
setInterval(function(){
$("#hum").load("index.php #hum");
}, 1000); 
</script>

<div id="hum"> 

<?php

$myFile = "in/2/log.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>

 % </div>
</div>			
</td>





<!--  HTML код значка давленияы --> 		
		
			<td style="text-align: center; vertical-align: middle;">
      <div class="r2" style="display:inline-block;">
       <img alt="" src="img/pres.png" style="height:30px; width:30px" />
   <div class="r3" id="content-2">
  </div> 
  
<div class="r3">

<!--  скрипт  вывода температуры--> 
<script>
setInterval(function(){
$("#pres").load("index.php #pres");
}, 1000); 
</script>

<!-- запись значения давления --> 

<div id="pres"> 
<?php
$myFile = "in/3/log.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>

 mmHg</div>
</div>			
</td>

		</tr>
	</tbody>
</table>









     
        
   </body>
</html> 
