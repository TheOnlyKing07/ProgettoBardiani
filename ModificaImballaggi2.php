<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <!-- meta charset -->
        <meta charset="utf-8">
        <!-- site title -->
        <title>Bardiani Valvole</title>
        <!-- meta description -->
        <meta name="description" content="">
        <!-- mobile viwport meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fevicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!--fontawesome-->
        <script src="https://kit.fontawesome.com/cc732eaf41.js" crossorigin="anonymous"></script>
        <!-- ================================
        CSS Files
        ================================= -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="css/themefisher-fonts.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/dark.css">
    </head>

    <body class="dark">
        <div class="preloader">
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
        </div>
        </div>

        <main class="site-wrapper">
		
            <div class="pt-table">
                <div class="pt-tablecell page-home relative" style="background-image: url('img/banner.jpg');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title home text-center">
                                    <h1>BARDIANI VALVOLE CALCOLO IMBALLAGGI</h1>
                                    <p>Software per calcolo dimensioni imballaggi Bardiani Valvole</p>
                                </div>
		<?php
		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "Bardiani";
		$connect = mysqli_connect($host, $user, $password, $db);

    if (mysqli_connect_error())
    {
      die("Errore connessione: " . mysqli_connect_error());
    }

        //ricerca
      if(!empty($_GET["id"]))
      {
          $sql = "SELECT * FROM imballaggio where id_imballaggio = " .$_GET["id"];

          $result = mysqli_query($connect, $sql);

          if (mysqli_num_rows($result) > 0)
          {
          while($row = mysqli_fetch_assoc($result))
          {
          echo "<form action=\"ModificaImballaggi2.php\" method=\"post\">
          <input name=\"id\"type=\"hidden\" value=".$_GET["id"].">
          <p>Nome</p><input name=\"nome\" value=\"". $row["nome"]."\"><br>
          <p>volume</p><input name=\"volume\"value=\"". $row["volume"]."\"><br>
          <p>altezza</p><input name=\"altezza\"value=\"". $row["altezza"]."\"><br>
          <p>larghezza</p><input name=\"larghezza\"value=\"". $row["larghezza"]."\"><br>
          <p>lunghezza</p><input name=\"lunghezza\"value=\"". $row["lunghezza"]."\"><br>

            <input type=\"submit\">
          </form>";
          }
        }
          else {
            echo"<h>ID non trovato</h>";
          }
        }else
        {
          if((!empty($_POST["id"])) &&(!empty($_POST["nome"])) && (!empty($_POST["volume"])) &&(!empty($_POST["altezza"])) &&(!empty($_POST["larghezza"])) &&(!empty($_POST["lunghezza"])))
          {
            $sql ="UPDATE imballaggio SET imballaggio.nome ='".$_POST["nome"]."', imballaggio.volume =".$_POST["volume"].",
            imballaggio.altezza =".$_POST["altezza"].",imballaggio.larghezza =".$_POST["larghezza"].",imballaggio.lunghezza ="
            .$_POST["lunghezza"]." WHERE id_imballaggio = ".$_POST["id"];

            $result = mysqli_query($connect, $sql);
            echo "modifica effettuata";
			header("location: ListaImballaggi.php");
          }
        }

    ?>
								</div> <!-- /.col-xs-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
        </main> <!-- /.site-wrapper -->
        
        <!-- ================================
        JavaScript Libraries
        ================================= -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- <script src="js/jquery.easing.min.js"></script> -->
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery-validation.min.js"></script>
        <script src="js/form.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>