<?php 
	$con=mysqli_connect("localhost","root","","gestion_immobiliere") or die("Connexion au serveur echoue");
	//mysql_select_db("gestion_patient") or die("Veillez selectionner une base de donnee");

	function get_url(){
		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'){
			$lien="https";
		}else{
			$lien="http";
		}

		$lien.='://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

		return $lien;
	}
?>
