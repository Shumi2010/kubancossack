
<html>
<head>

        <title> ���� ��� ��������� ������� � ������� ����������. ��������� ������.</title>
	<META Name="keywords" Content="��������� ������, ������� ����������">
	<META Name="description" Content="���� ��� ��������� ������� � ������� ����������. ������� ������. ">

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
           include 'head.txt';�
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
<H2> ���� ��� ��������� ������� </H2> </center>

�� ������ ����� ����� �������� � ������� ���������� ������, �� � �������� ���� �������� ���������� ��� ��������� �������.<br>

������, ������ �� �������� �������, - ��� �������������� ������ ���������� ����������, ������� ������������� ���� �� ���������� ������� ����, �����, ����� ������� ����
��������� �������� ���������� ����� ����� ������ � �������. ������������ ������ ����������� �� ���������� �������� � ������� ��������, ����, ����� ������ � ������� ������<br>

������ ������, ������ - ��� ���������� � ������������, ������ �� 30-40 ����� - ��� �����. ������ �������-����� - ��� ������������ ����, ������� � ����� ��� ������ ������
������, ����� ��������, ������� ������� � �.�. �� � �������� ��������� ������, ���������� ��������� ������ ����� ����������� � ����������������, ������ �������� ���� ������������ �����, ���� �������, ��� 
� ��� �� �������.<br>

������ ���� ��������� �������� ����� ������. ������ ���� ����� �������� ������, ��� �����, ������ �����, ��������� �������, ������� �������. <br><br>

���� � XIX ���� � ������ ����������� � ������ ����������, �� � ������ XX ���� � ������ ����������� ���� �� ������������ ����������.<br>

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