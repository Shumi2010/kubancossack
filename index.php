
<html>
<head>

        <title> Сайт про Кубанских казаков и истории казачества. Кубанские казаки.</title>
	<META Name="keywords" Content="кубанские казаки, история казачества">
	<META Name="description" Content="Сайт про Кубанских казаков и истории казачества. Казачьи войска. ">

</head>

<body>
<? 
     if (!defined('_SAPE_USER')){
        define('_SAPE_USER', '3a1128fd2488b26740743e5aa2485c4b'); 
     }
     require_once($_SERVER['DOCUMENT_ROOT'].'/'._SAPE_USER.'/sape.php'); 
     $sape = new SAPE_client();
?>

<table border="1" cellpadding="10" cellspacing="0" width="100%" background="">
   <tr>
       <td width="15%" valign="center">
           <?php
           include 'banner.txt';
           ?> 
       </td>
       
       <td width="65%" valign="center">
           <?php
           include 'head.txt'; 
           ?>    
       </td>
    
       <td width="20%" valign="center">
           <?php 
           include 'search.txt';
           ?>
       </td>  
   </tr>
  
   <tr>
       <td width="15%" valign="top">
          <?php
            include 'menu.txt';
          ?> 
       </td>
       
       <td width="65%" valign="top">

<center>
<H2> Сайт про Кубанских казаков </H2> </center>

На данном сайте можно почитать о истории казачества вообще, но в основном сайт содержит информацию про кубанских казаков.<br>

Казаки, иногда их называют черкасы, - это этносоциальная группа смешанного этногенеза, которая первоначально жила на территории Золотой Орды, затем, после распада Орды
основными центрами казачества степи Южной России и Украины. Впоследствии казаки расселились на территории Среднего и Нижнего Поволжья, Урал, Южную Сибирь и Дальний Восток<br>

Вообще говоря, казаки - это изначально и впоследствии, вплоть до 30-40 годов - это воины. Каждый мужчина-казак - это прирожденный воин, который с малых лет учился ездить
верхом, вести разведку, владеть оружием и т.д. Но с приходом Советской власти, вследствии изменения уклада жизни станичников и индустриализации, казаки утратили свои воинствующие нравы, став служить, как 
и все по призыву.<br>

Казаки были пионерами освоения новых земель. Казаки дали таких народных героев, как Ермак, Степан Разин, Кондратий Булавин, Емельян Пугачев. <br><br>

Если в XIX веке в казаки зачислялись и беглые крепостные, то в начале XX века в казаки зачислялись лишь по авторитетным протекциям.<br>

       </td>
    
       <td width="20%" valign="top">
           <?php
           include 'reclama1.txt';
           ?>
       </td>   
   </tr> 	

</table>

<table border="1" cellpadding="10" cellspacing="0" width="100%" background="">
   <tr>
       <td width="30%" valign="center">
          <? echo $sape->return_links(5); ?> 
          <?php  
          include 'ref1.txt';
          ?>
       </td>

       <td widht="40%" valign="center">  
          <?php
          include 'contact.txt';
          ?>
       </td> 

       <td width="30%" valign="center">
          <?php
          include 'ref2.txt';
          ?>
       </td>


   </tr>
</table>

<table border="1" cellpadding="10" cellspacing="0" width="100%" background="">
    <tr>
    <td valign="center">
      <?php 
      include 'count.txt';
      ?>
    </td>
    </tr>	
</table>

</body>

</html>