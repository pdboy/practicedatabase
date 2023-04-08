<?php 
    date_default_timezone_set("Asia/Bangkok");
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <link rel="stylesheet" href="style.css">
    <head>
        <meta charset="utf-8">
        <title>form</title>

</head>
<body>
    <div class="grup">
    <h2 for="">REGISTRASI</h2>
    <form class="" action="proses.php" method="post">
    <div class="user-box">
        <p for=""> NAMA </p>
        <input type="text" name="nama" autocomplete="off"> <br>
    </div>
    <div class="user-box">
        <p for="">UMUR</p>
        <input type="text" name="umur" autocomplete="off"> <br>
    </div>
    <div class="user-box">
        <p for="">EMAIL</p>
        <input type="text" name="email" autocomplete="off"> <br>
    </div>
        

        <div class="select">
  <select class="" name="jeniskelamin">
    <option name="jeniskelamin" value="jeniskelamin" >Jenis Kelamin</option>
    <option name="jeniskelamin" value="Laki-Laki">Laki - Laki</option>
    <option name="jeniskelamin" value="Perempuan">Perempuan</option>
  </select>
</div>

<br>

    <div class="select">
  <select class="" name="agama">
    <option value="agama">Agama</option>
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Buddha">Buddha</option>
    <option value="Hindu">Hindu</option>
    <option value="Konghucu">Konghucu</option>
  </select>
</div>

   <div class="user-box">
        <p for="">KOMENTAR</p>
        <input type="text" name="komentar" autocomplete="off"> <br>
    </div>
    
    <button type="submit" name="submit" value = <?php echo date ("h:i:sa");?> >
     Submit 
     <span class="first"></span>
      <span class="second"></span>
      <span class="third"></span>
      <span class="fourth"></span>
      <span class="five"></span>
      <span class="six"></span>
    
    </button>
    
    



    </form>
    </div>
    
</body>
</html>