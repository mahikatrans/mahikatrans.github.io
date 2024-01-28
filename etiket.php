<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<style>
* {
  box-sizing: border-box;
}
input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #0f4d92;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #000;
}

.container {
  border-radius: 5px;
  background-color: #fff;
  padding: 20px;
  color: #000;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}



</style>

</head>
<body>
 <div style="overflow-x:auto;">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiQ4eTxeoa1nSHbbhFjw33oRgjlCdB1tW6z8VdFU9e_nt8ihNWQ46QHZu-4sZBWevaoyCzfjO42nY9Q2o6LKtzaMPAaaN7iK0jO41uq6FFOoVLIFxAW0cWi-xl8ynPE7SsoUzk5ZUfLGJVQkqEUmqpWLeo3V60SSnNx58KoiLxyD3GdvOQxIo56uugwnw80/s2065/logo-atas.png" width="120" height="48"></legend>

<!-- Text input-->
<div class="form-group">
<div class="container">
  
  <div class="row">
    <div class="col-25">
     
    </div>
  </div>


<?php
if(isset($_POST['simpan'])){
echo '<table>';
echo '<tr><td>'.'Nama:'.'</td><td>'.$_POST['nama'].'</td></tr>';
echo '<tr><td>'.'No Hp:'.'</td><td>'.$_POST['hp'].'</td></tr>';
echo '<tr><td>'.'Tujuan:'.'</td><td>'.$_POST['tujuan'].'</td></tr>';
echo '<tr><td>'.'Armada:'.'</td><td>'.$_POST['armada'].'</td></tr>';
echo '<tr><td>'.'No Kursi:'.'</td><td>'.$_POST['seat'].'</td></tr>';
echo '<tr><td>'.'Harga:'.'</td><td>'.$_POST['harga'].'</td></tr>';
echo '<tr><td>'.'Pemberangkatan: '.'</td><td>'.$_POST['tanggal'].'</td></tr>';
echo '</table>';
}
?>
 
  <br>
  <div class="row">
<div class="w3-container w3-center">
  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhHxxVrbCrOATooGgAWllVhbA_xDRlCZkxYJ13DIYptskXm0h9M7YVqMEeEHhBe-TsiKBd29DNz4lH-sga2HJ3YyW9rHvvTX7dLg5GKqYZ_puNE239lA0V5V1D4j9KNCtrymkffjqSFdo6LZzd7tEp5dwbe9gX3VT5KU2_WQWqtH_IwWF0ARsLatZYipXoj/s2100/maps.png" width="150" height="150">
  
   <p>Terimakasih atas kepercayaan anda menggunakan layanan kami</p>
  </div>
  </form>
</div>
</div>
</body>
</html>
