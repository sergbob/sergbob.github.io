 <html>
<head>
<title>РџРѕР»РёРІ С‚РµРїР»РёС†С‹</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta name=viewport content="width=device-width, initial-scale=1">

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style.css">

  
<!--  AJAX РѕР±СЂР°Р±РѕС‚С‡РёРє --> 

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
  
 
<!--  РєРѕРґ СЂР°Р·РјРµС‚РєРё HTML СЃС‚СЂР°РЅРёС†С‹ --> 
  
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
			<td style="text-align:center"><span style="color:#008000"><span style="font-size:24px"><strong>РЈРјРЅС‹Р№ РґРѕРј</strong></span></span></td>
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

 
<!--  HTML РєРѕРґ РѕР±СЂР°Р±РѕС‚РєРё РєРЅРѕРїРѕРє --> 

<form  id="led" action="" method="post"  >

       <div class="descr"><input type="radio" visibility= "hidden"; checked="checked" name="status" value="ON(")></div>
                 
        <img alt="" src="img/but_on.jpg" style="height:80px; width:80px" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/pomidor.php')"/>
             
 </form>




</td>
			<td style="text-align: center; vertical-align: middle;">


<form  id="ledd" action="" method="post"  >     
           <div class="descr"><input type="radio" checked="checked" name="status" value="Off)")></div>      
        <img alt="" src="img/but_off.jpg" style="height:75px; width:75px" onclick="AjaxFormRequest('messegeResult', 'ledd', 'transfer/pomidor.php')"/>            
 </form>

</td>
			<td style="text-align: center; vertical-align: middle;">

 
<!--   PHP СЃРєСЂРёРїС‚ РёР·РјРµРЅРµРЅРёСЏ РєР°СЂС‚РёРЅРєРё СЃС‚Р°С‚СѓСЃР° СЂР°Р±РѕС‚С‹ РЅР°СЃРѕСЃР° --> 


<script>
<!--  setInterval РїРѕР·РІРѕР»СЏРµС‚ РІС‹Р·С‹РІР°С‚СЊ С„СѓРЅРєС†РёСЋ СЂРµРіСѓР»СЏСЂРЅРѕ, РїРѕРІС‚РѕСЂСЏСЏ РІС‹Р·РѕРІ С‡РµСЂРµР· РѕРїСЂРµРґРµР»С‘РЅРЅС‹Р№ РёРЅС‚РµСЂРІР°Р» РІСЂРµРјРµРЅРё(1000)   --> 
setInterval(function(){
<!--  РїРѕР»СѓС‡РёС‚СЊ РґР°РЅРЅС‹Рµ СЃ СЃРµСЂРІРµСЂР°. .load() СѓСЃС‚Р°РЅР°РІР»РёРІР°РµС‚ HTML СЃРѕРґРµСЂР¶РёРјРѕРµ РІ СѓРєР°Р·Р°РЅРЅС‹Р№ СЌР»РµРјРµРЅС‚ РёР· РІРѕР·РІСЂР°С‰РµРЅРЅС‹С… РґР°РЅРЅС‹С…. РёС‰РµС‚ СЌР»РµРјРµРЅС‚ СЃ ID СЂР°РІРЅС‹Рј Nasos(2).--> 
<!-- Р­С‚РѕС‚ СЌР»РµРјРµРЅС‚, СЃРѕ РІСЃРµРј СЃРІРѕРёРј СЃРѕРґРµСЂР¶РёРјС‹Рј, Р±СѓРґРµС‚ РІСЃС‚Р°РІР»РµРЅ РІ СЌР»РµРјРµРЅС‚ СЃ ID СЂР°РІРЅС‹Рј Nasos(1) Рё РѕСЃС‚Р°Р»СЊРЅР°СЏ С‡Р°СЃС‚СЊ Р·Р°РіСЂСѓР¶РµРЅРЅРѕРіРѕ РґРѕРєСѓРјРµРЅС‚Р° Р±СѓРґРµС‚ РїСЂРѕРёРіРЅРѕСЂРёСЂРѕРІР°РЅР°.  --> 

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

<!--  HTML РєРѕРґ  РїР°СЂР°РјРµС‚СЂРѕРІ --> 


<table align="center" border="0" cellpadding="4" cellspacing="0" style="width:95%">
	<tbody>
		<tr>
			<td style="text-align: center; vertical-align: middle; width: 10%;"><span style="color:#008080"><span style="font-size:16px">temperature</span></span></td>
			<td style="text-align: center; vertical-align: middle; width: 10%;"><span style="color:#008080"><span style="font-size:16px">humidity</span></span></td>
			<td style="text-align: center; vertical-align: middle; width: 10%;"><span style="color:#008080"><span style="font-size:16px">pressure</span></span></td>
			
		</tr>
		
<!--  HTML РєРѕРґ Р·РЅР°С‡РєР° С‚РµРјРїРµСЂР°С‚СѓСЂС‹ --> 		
		<tr>
			<td style="text-align: center; vertical-align: middle;">
      <div class="r2" style="display:inline-block;">
       <img alt="" src="img/temp.jpg" style="height:30px; width:18px" />
   <div class="r3" id="content-2">
  </div> 
  
<div class="r3">

<!--  СЃРєСЂРёРїС‚  РІС‹РІРѕРґР° С‚РµРјРїРµСЂР°С‚СѓСЂС‹--> 
<script>
setInterval(function(){
$("#temp").load("index.php #temp");
}, 1000); 
</script>

<!-- Р·Р°РїРёСЃСЊ Р·РЅР°С‡РµРЅРёСЏ С‚РµРјРїРµСЂР°С‚СѓСЂС‹ --> 

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

<!--  HTML РєРѕРґ Р·РЅР°С‡РєР° РІР»Р°Р¶РЅРѕСЃС‚Рё --> 


	<td style="text-align: center; vertical-align: middle;">
   <div class="r2" style="display:inline-block;">
   <img alt="" src="img/hum.png" style="height:30px; width:30px" /> 
  <div class="r3" id="content-2">
  </div> 
 <div class="r3">
 <!--  СЃРєСЂРёРїС‚  РІС‹РІРѕРґР° РІР»Р°Р¶РЅРѕСЃС‚Рё-->    
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





<!--  HTML РєРѕРґ Р·РЅР°С‡РєР° РґР°РІР»РµРЅРёСЏС‹ --> 		
		
			<td style="text-align: center; vertical-align: middle;">
      <div class="r2" style="display:inline-block;">
       <img alt="" src="img/pres.png" style="height:30px; width:30px" />
   <div class="r3" id="content-2">
  </div> 
  
<div class="r3">

<!--  СЃРєСЂРёРїС‚  РІС‹РІРѕРґР° С‚РµРјРїРµСЂР°С‚СѓСЂС‹--> 
<script>
setInterval(function(){
$("#pres").load("index.php #pres");
}, 1000); 
</script>

<!-- Р·Р°РїРёСЃСЊ Р·РЅР°С‡РµРЅРёСЏ РґР°РІР»РµРЅРёСЏ --> 

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


