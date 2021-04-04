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
									
		
		<button type="button" class="btn btn-danger"><a href="imballaggi.html">Inserisci nuovo Imballaggio</a></button>
	
                                <h5>Ricerca Imballaggio</h5>
								
								<form class="form-inline" action="ListaImballaggi.php" method="POST">
									<div class="form-group mr-2">
										<label class="sr-only" for="inputID">ID</label> <br>
										<input type="text" class="form-control" name="id_imballaggio" placeholder="ID">
									</div>
									<div class="form-group mr-2">
										<label class="sr-only" for="inputNome">Nome</label> <br>
										<input type="text" class="form-control" name="nome" placeholder="Nome">
									</div>
									<div class="form-group mr-2">
										<label class="sr-only" for="inputVolume">Volume</label> <br>
										<input type="text" class="form-control" name="volume" placeholder="Volume">
									</div>
									<div class="form-group mr-2">
										<label class="sr-only" for="inputLunghezza">Lunghezza</label> <br>
										<input type="text" class="form-control" name="lunghezza" placeholder="Lunghezza">
									</div>
									<div class="form-group mr-2">
										<label class="sr-only" for="inputLarghezza">Larghezza</label> <br>
										<input type="text" class="form-control" name="larghezza" placeholder="Larghezza">
									</div>
									<div class="form-group mr-2">
										<label class="sr-only" for="inputAltezza">Altezza</label> <br>
										<input type="text" class="form-control" name="altezza" placeholder="Altezza">
									</div>
									<button type="submit" class="btn btn-danger" name="cerca">Cerca</button> <br>
								</form>
								
								<h2> Lista degli Imballaggi presenti </h2>
<?php
    $hostname_connect = "localhost";
	$database_connect = "Bardiani";
	$username_connect = "root";
	$password_connect = "";
	
	$connect = mysqli_connect($hostname_connect, $username_connect, $password_connect, $database_connect);
	
	$condizione="";
	$controllo=0;
	
	if(isset($_POST['id_imballaggio']) AND trim($_POST['id_imballaggio'])!=''){
		$id=$_POST['id_imballaggio'];
		$condizione.="WHERE id_imballaggio= '".$id."'";
		$controllo=1;
	}
	else{
		$id=0;
	}
	
	if(isset($_POST['nome']) AND trim($_POST['nome'])!=''){
		$nome=$_POST['nome'];
		if($controllo==1){
			$condizione.=" OR nome= '".$nome."'";
			$controllo=1;
		}
		else if($controllo==0){
			$condizione.=" WHERE nome= '".$nome."'";
		}
		$controllo=1;
	}
	else{
		$nome="";
	}
	
	if(isset($_POST['volume']) AND trim($_POST['volume'])!=''){
		$volume=$_POST['volume'];
		if($controllo==1){
			$condizione.=" OR volume= '".$volume."'";
			$controllo=1;
		}
		else if($controllo==0){
			$condizione.=" WHERE volume= '".$volume."'";
		}
		$controllo=1;
	}
	else{
		$volume=0;
	}
	
	if(isset($_POST['lunghezza']) AND trim($_POST['lunghezza'])!=''){
		$lunghezza=$_POST['lunghezza'];
		if($controllo==1){
			$condizione.=" OR lunghezza= '".$lunghezza."'";
			$controllo=1;
		}
		else if($controllo==0){
			$condizione.=" WHERE lunghezza= '".$lunghezza."'";
		}
		$controllo=1;
	}
	else{
		$lunghezza=0;
	}
	
	if(isset($_POST['larghezza']) AND trim($_POST['larghezza'])!=''){
		$larghezza=$_POST['larghezza'];
		if($controllo==1){
			$condizione.=" OR larghezza= '".$larghezza."'";
			$controllo=1;
		}
		else if($controllo==0){
			$condizione.=" WHERE larghezza= '".$larghezza."'";
		}
		$controllo=1;
	}
	else{
		$larghezza=0;
	}
	
	if(isset($_POST['altezza']) AND trim($_POST['altezza'])!=''){
		$altezza=$_POST['altezza'];
		if($controllo==1){
			$condizione.=" OR altezza= '".$altezza."'";
		$controllo=1;
		}
		else if($controllo==0){
			$condizione.=" WHERE altezza= '".$altezza."'";
		}
		$controllo=1;
	}
	else{
		$altezza=0;
	}
	
	if(isset($_GET['pagina'])){
		$pagina=$_GET['pagina'];
	}
	else{
		$pagina=1;
	}
	$x=($pagina-1)*10;
	$total_pages_sql = "SELECT COUNT(*) FROM imballaggio";
	$result = mysqli_query($connect,$total_pages_sql);
	$total_rows = mysqli_fetch_array($result)[0];
	$total_pages = ceil($total_rows / 3);
	
    $query='SELECT * FROM imballaggio '.$condizione.' ORDER BY id_imballaggio DESC LIMIT '.$x.',3';
	$risultato = mysqli_query($connect,$query);
	
	if($risultato){
		$num_righe = mysqli_num_rows($risultato);
	
		if($num_righe>0){
	?>	
		<?php
			while($num_righe = mysqli_fetch_assoc($risultato)) {
		?>

<div class="table-responsive">		
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Volume</th>
      <th scope="col">Lunghezza</th>
	  <th scope="col">Larghezza</th>
	  <th scope="col">Altezza</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td><?php echo $num_righe['id_imballaggio']?></td>
	 <td><?php echo $num_righe['nome']?></td>
	 <td><?php echo $num_righe['volume']?></td>
	 <td><?php echo $num_righe['lunghezza']?></td>
	 <td><?php echo $num_righe['larghezza']?></td>
	 <td><?php echo $num_righe['altezza']?></td>
	 <td><?php echo' '.'<a href="ModificaImballaggi2.php?id='.$num_righe['id_imballaggio'].'">Modifica</a>'?></td>
	 <td><?php echo' '.'<a href="EliminaImballaggio.php?id='.$num_righe['id_imballaggio'].'">Elimina</a>'?></td>
	 <td><input type "button" value="ELimina" onClick="eliminazione(<?php echo $num_righe['id_imballaggio'];?>)"</td>
    </tr>
  </tbody>
</table>
</div>

<?php
			}
		}
		else {
			echo "Non ci sono imballaggi presenti!";
		}
	}
  ?>
  
 <!-- <nav aria-label="Page navigation example" style="text-align:center">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href=<?php"ListaImballaggi.php?id='.x.'"?>>Previous</a></li>
    <li class="page-item"><a class="page-link" href=<?php"ListaImballaggi.php?id='1'"?>>1</a></li>
    <li class="page-item"><a class="page-link" href=<?php"ListaImballaggi.php?id='2'"?>>2</a></li>
    <li class="page-item"><a class="page-link" href=<?php"ListaImballaggi.php?id='3'"?>>3</a></li>
    <li class="page-item"><a class="page-link" href=<?php"ListaImballaggi.php?id='.x.'"?>>Next</a></li>
  </ul>
</nav> -->

<ul class="pagination">
    <li><a href="?pagina=1">Primo</a></li>
    <li class="<?php if($pagina <= 1){
		echo 'disabled'; 
		} ?>">
        <a href="<?php if($pagina <= 1){
			echo '#'; }
			else { 
			echo "?pagina=".($pagina - 1);
			}
			?>">Precedente</a>
    </li>
    <li class="<?php if($pagina >= $total_pages){
		echo 'disabled';
		} ?>">
        <a href="<?php if($pagina >= $total_pages){
			echo '#'; 
			} 
			else {
				echo "?pagina=".($pagina + 1); 
				} ?>">Successivo</a>
    </li>
    <li><a href="?pagina=<?php echo $total_pages; ?>">Ultimo</a></li>
</ul>

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
		
		<script> 
		function eliminazione(id){
			if(confirm('Vuooi eliminare?')) {
        window.location='EliminaImballaggio.php?id='+id;
        }
    return false;
		}
		</script>
    </body>
</html>