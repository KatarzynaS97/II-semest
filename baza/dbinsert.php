<?Php
	require_once 'config.php';
	
	//$dane = $_GET['data']; może byc ale robimy inaczej 
	
	if($_SERVER['REQUEST_METHOD'] === 'GET') //serwer odpowiada na metode get jezeli nie to nie 
	{
		//konwersja z JSON na php 
		$data = json_decode(file_get_contents('php://input')); //zdekoduj jason do pliku ciala obiektu jako input na jezyk php 
		$sql = "insert.."
	}		
	
	

?>