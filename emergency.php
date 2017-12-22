<html>
  <head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/javascript.js"></script>
      <title>Selamat Datang di SCMES</title>
  </head>
   <body>
   <nav>
      <div id="nav">
      <a id="logo" href="Home.php">SCMES</a>
       <a id="Home" href="home.php" style="background-color: white;color: coral">Home</a>
       <a id="News" href="news.php">News</a>
       <a id="Booking" href="booking.php">Booking</a>
       <a id="Review" href="review.php">Review</a>
       <a id="Contact" href="contact.php">Contact us</a>
       <a id="Partners" href="partners.php">Partners</a>
          <a id="About" href="about.php">About us</a>
           <a id="homesearch" href="search.php" style="margin-left:15%;"><span class="glyphicon glyphicon-search"></span> Search</a>
           <a id="homelogin" href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
       </div>

       </nav>
    <h2 id="emergencytitle">Pertolongan Darurat</h2>
       <div id="emergencyitem">
           <img src="images/noimage.jpg" id="imageemergency">
           <div id="emergencyinfo">
              <p id="emergencytext">
               Berikan data Setepat Mungkin dan Selengkap mungkin , agar kami dapat segera mengkonfirmasi sebuat kejadian dan kebenaran akan adanya korban jiwa , sertakan nomor telefon dan nama anda demi kenyamanan bersama. Sihakan isi informasi penting berikut :
               </p>
               <textarea class="form-control" placeholder="Informasi Penting keterangan dan Nomor HP Data yang Lengkap akan mempercepat verifikasi" name="infoemergency" cols="40" rows="8" id="emergencyiteminfo"></textarea>
           </div>
       </div>
       </div>
      
      
      <div id="Buttons">
          <button type="button" class="btn btn-info" id="addimageemergency">Tambah Gambar</button>
          <a href="pinpoint.php"><button type="button" class="btn btn-info" id="addlocation" >Tambah Lokasi</button></a>
          <button type="button" class="btn btn-info" id="autolocation">Otomatis Deteksi Lokasi</button>
      </div>
       <a href="Home.php"><button type="button" class="btn btn-danger" id="btnreport">Laporkan</button></a>
  <!--      <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>-->
</body>
</html>