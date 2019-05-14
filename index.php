<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="cr.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body style="background-color: lightgreen;"></body>
  	<style>

  	</style>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="inde.php">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="register.php">Login</a></li>
                <li><a href="formregister.php">Registrasi</a></li>
                <li><a href="ajax.php">Tutorial Youtube</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Siapakah Anda?<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="register.php">Admin</a></li>
                    <li><a href="manager.php">Manager</a></li>
                  </ul>
                </li>
                    <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="ha/patin.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pindang Ikan Patinn</h1>
              <p>~Maknyussss~</p>
              <p><a class="btn btn-lg btn-primary" href="manager.php" role="button">Klik</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="ha/tempoyak.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sambal Tempoyak</h1>
              <p>~Mantappp~</p>
              <p><a class="btn btn-lg btn-primary" href="manager.php" role="button">Klik</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="ha/gandus.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Kue Gandus</h1>
              <p>~Mantulllll~</p>
              <p><a class="btn btn-lg btn-primary" href="manager.php" role="button">Klik</a></p>
            </div>
          </div>
        </div>
      <div class="item">
          <img src="ha/mie_celor.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Mie Celor</h1>
              <p>~Yuhuuu~</p>
              <p><a class="btn btn-lg btn-primary" href="manager.php" role="button">Klik</a></p>
            </div>
          </div>
        </div>
      <div class="item">
          <img src="ha/burgo.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Burgo</h1>
              <p>~woow~</p>
              <p><a class="btn btn-lg btn-primary" href="manager.php" role="button">Klik</a></p>
            </div>
          </div>
        </div>
      <div class="item">
          <img src="ha/tekwan.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tekwan Palembang</h1>
              <p>~Yeeyy~</p>
              <p><a class="btn btn-lg btn-primary" href="manager.php" role="button">Klik</a></p>
            </div>
          </div>
        </div>
      <div class="item">
          <img src="ha/pempeklenggang.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pempek Lenggang Palembang</h1>
              <p>~Huhuuu~</p>
              <p><a class="btn btn-lg btn-primary" href="manager.php" role="button">Klik</a></p>
            </div>
          </div>
        </div>
      <div class="item">
          <img src="ha/pempek.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pempek Kapal Selam Palembang</h1>
              <p>~Huuhaaaa~</p>
              <p><a class="btn btn-lg btn-primary" href="manager.php" role="button">Klik</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
          <h1 class="page-header">WELCOME TO MY BLOG (^.^)</h1> 
      <br>
      <br>
      <br> 
    <div> 
      <h1>
      LETS GO !!! 
      </h1> 
      <div class="cols">
        <div class="col-sm-10 col-md-8">
        <div class="thumbnail">
          <img src="ha/gandus.jpg" alt="...">
          <div class="caption">
          <h3>Resep Gandus Lezatt</h3>
          <p>Kue gandus Palembang satu ini memang sangat spesial. Pasalnya selain rasanya yang enak, kue gandus juga memiliki tampilan bersama toping yang menggoda selera. Bagi masyarakat Palembang sendiri kue ini merupakan salah satu menu cemilan harian. Memang tangan-tangan kreatif masyarakat Palembang ini kerap menghasilkan suatu sajian yang cukup populer. Seperti hasil sajian lainya dari Palembang yang terkenal seperti pempek, tekwan, model, kue maksuba, martabak har dan masih banyak lagi.

            Cara Membuat Kue Gandus Palembang Lembut
            Untuk menyajikan pannganan enak ini anda bisa membeli dan membuatnya dengan versi Anda. Memang menurut kami dalam membuat kue gandus cukup mudah. Dan Anda pun bisa membuatnya sendiri. Namun sebaiknya pahami dulu proses pembuatanya agar menjaga proses pembuatan kue gandus agar tidak gagal.</p>
         </div>
        </div>
        </div>
      </div>
      <div class="cols">
        <div class="col-sm-10 col-md-8">
        <div class="thumbnail">
          <img src="ha/tempoyak.jpg" alt="...">
          <div class="caption">
          <h3>Sambal Manis Tempoyakkkk</h3>
          <p>Dream - Dianggap punya rasa aneh oleh orang-orang di luar negeri, Buah berduri paling banyak peminatnya di Indonesia. Aromanya yang khas dan rasanya yang legit membuat orang yang memakannya sulit berhenti.

            Tapi pernahkah berpikir memekan durian dengan cara berbeda? Pernahkah mendengar durian menjadi bahan olahan sambal?

            Mungkin bagi penduduk Sumatera Selatan, Lampung, dan Bengkulu tidak heran dan pernah mencicipi sambal durian. Atau dikenal Sambal Tempoyak Durian.

            Tempoyak adalah jenis makanan dari bahan dasar buah durian atau duren fermentasi yang dapat diolah menjadi makanan lezat seperti; sambal, campuran pais atau pepes ikan.

            Bagi Anda yang ingin mencoba masakan khas Sumatera Selatan tersebut, jangan khawatir. Dream akan memberikan resep jitu sambal Tempoyak durian enak. </p>
          </div>
        </div>
        </div>
      </div>
      <div class="cols">
        <div class="col-sm-20 col-md-8">
        <div class="thumbnail">
          <img src="ha/patin.jpg" alt="...">
          <div class="caption">
          <h3>Pindang Ikan Patin Maknyusss</h3>
          <p>Masakan ikan menjadi salah satu menu makanan favorit, terlebih bagi yang sedang melakukan liburan dimana selalu tersaji berbagai masakan dengan bahan dasar ikan. Salah satu ikan yang menjadi pilihan adalah ikan patin. Ikan patin yang yang hidup di air tawar ini sudah tidak diragukan lagi kenikmatannya khas rasanya yang gurih, selain itu ikan patin juga memiliki tekstur dagingnya yang lembut, serta memiliki berbagai kandungan gizi yang baik untuk kesehatan. Masakan ikan patin banyak sekali ragamnya, salahsatunya ikan patin bakar, ikan patin tempoyak, pepes ikan patin. Namun kali ini membuat masakan ikan patin yang berbeda yaitu membuat masakan pindang ikan patin. Penasaran bagaimana cara membuat pindang ikan patin.</p>
            </div>
        </div>
        </div>
      </div>
      

      <div class="cols">
        <div class="col-sm-10 col-md-8">
        <div class="thumbnail">
          <img src="ha/mie_celor.jpg" alt="...">
          <div class="caption">
          <h3>Mie Celor</h3>
          <p>Mie celor adalah makanan tradisional dari Sumatera Selatan. Makanan ini menggunakan udang sebagai bahan utamanya. Selain udang ada juga tambahan telur, tauge, daun seledri dan perasaan jeruk nipis sebagai isiannya.Untuk kuahnya makanan ini menggunakan santan hingga menciptakan rasa yang begitu gurih. Yang unik dari makanan ini adalah beberapa bahan diatas disiram dengan air panas dahulu sebelum dimasukan kedalam kuah santan.Makanan ini sangat pas dinikmati saat masih terasa panas, dan cocok untuk hidangan saat udara dingin.</p>
          </div>
        </div>
        </div>
      </div>
        <div class="cols">
        <div class="col-sm-10 col-md-8">
        <div class="thumbnail">
          <img src="ha/burgo.jpg" alt="...">
          <div class="caption">
          <h3>Burgo</h3>
          <p>Mungkin nama makanan ini masih agak terasa asing. Burgo adalah makanan asli dari Palembang makanan ini memiliki kuah santan, dan burgo sendiri memiliki tekstur yang kenyal. Makanan ini lebih lezat jika dinikmati dengan sambal.Jika anda berkunjung ke Sumatera Selatan khususnya Palembang jangan sampai lupa untuk mencicipi makanan yang satu ini. Karena mungkin anda tidak menemukannya ditempat lain.</p>
          </div>
        </div>
        </div>
      </div>
      <div class="cols">
        <div class="col-sm-10 col-md-8">
        <div class="thumbnail">
          <img src="ha/tekwan.jpg" alt="...">
          <div class="caption">
          <h3>Tekwan Palembang</h3>
          <p>Pasti anda sudah tidak asing lagi dengan makanan yang satu ini. tekwan adalah menu yang sangat terkenal dan anda dapat mendapatkanya dengan mudah di luar daerah Sumatera Selatan sekalipun.Tekwan adalah kuliner yang terbuat dari sagu dan ikan yang diolah menjadi bentuk yang kecil-kecil. Sebagai pelengkap biasanya ada tambahan bihun, jamur, daun bawang, bengkoang, dan seledri. Kuah yang digunakan makanan ini adalah kuah yang memiliki cita rasa udang.</p>
          </div>
        </div>
        </div>
      </div>
      <div class="cols">
        <div class="col-sm-10 col-md-8">
        <div class="thumbnail">
          <img src="ha/pempeklenggang.jpg" alt="...">
          <div class="caption">
          <h3>Pempek Lenggang Palembang</h3>
          <p>Lenggang adalah salah kuliner inovasi dari pempek Palembang. Makanan ini terbuat dari telur dan pempek. Pempek dimasukan kedalam adonan telur dan setelah itu telur digoreng dadar.Setelah matang ditambahkan bumbu cuka seperti halnya pempek pada umumnya. dan sebagai pelengkap biasanya ditambahkan potongan timun, dan bawang goreng. Jika anda berkunjung ke Sumatera Selatan jangan lupa mencoba makanan ringan yang satu ini.</p>
          </div>
        </div>
        </div>
      </div>
      <div class="cols">
        <div class="col-sm-10 col-md-8">
        <div class="thumbnail">
          <img src="ha/pempek.jpg" alt="...">
          <div class="caption">
          <h3>Pempek Kapal Selam Palembang</h3>
          <p>Siapa yang tidak tahu dengan makanan lezat yang satu ini. walaupun sebenarnya makanan ini sudah banyak tersebar di berbagai kota besar namun anda akan merasakan sesuatu yang berbeda kala mencicipi pempek langsung di tempat asalnya yaitu Palembang, Sumatera Selatan.Pempek adalah sejenis makanan ringan yang terbuat dari tepung dan olahan daging ikan. Pempek sendiri disajikan bersama potongan timun kecil-kecil, dengan kuah cuko. Pempek sebenarnya memiliki beragam jenis, salah satu jenis yang paling terkenal adalah pempek kapal selam. anda dapat dengan mudah menemukan pempek di seluruh penjuru Sumatera Selatan sekalipun.</p>
          </div>
        </div>
        </div>
      </div>




 	  
					 <?php 
					require 'koneksi.php';
					  $tampil = query ("SELECT * FROM blog");

					 ?>
					  
					  
					  <?php if(isset($_GET['status'])): ?>
					  <p>
						<?php
						  if($_GET['status'] == 'sukses'){
							echo "Pendaftaran  berhasil!";
						  } else {
							echo "Pendaftaran gagal!";
						  }
						?>
					  </p>
					  <?php endif; ?>
					  
				</div>
			  </div>
			</div>
         
          </div> 
	
 
          </div> 
        </div> 
      </div> 
    </div> 
         
          </div> 
 
          </div> 
        </div> 
      </div> 
    </div> 
 
    <!-- Bootstrap core JavaScript
    ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src="jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="../../assets/js/docs.min.js"></script> 
  </body> 
</html> 