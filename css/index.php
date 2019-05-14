<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM mainan");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>uas</title>
</head>
<body>
   <style>
  body{
    background-image : sus.jfif;
  }
  </style>

<center>
  <br>
    <h2>MAINAN</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>nama</th>
    <th>milik</th>
    
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["milik"];  ?></td>
    
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</center>
  </body>
</html>
