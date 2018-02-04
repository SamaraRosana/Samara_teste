<?php				

	require_once('/../config.php');		
	require_once(DBAPI);				

	$corridas = null;	
	$corrida = null;		
	
	function index() {			
		global $corridas;			
		$corridas = find_all('corrida');		
	}

	function add() {
		if (!empty($_POST['corrida'])) { 
    
       	$corrida = $_POST['corrida'];
    	    
    save('corrida', $corrida);
    header('location: index.php');
  }
	}

	function view($id = null) {
		global $corrida;
		$corrida = find('corrida', $id);		
	}

	function delete($id = null) {
		global $corrida;		  
		$corrida = remove('corrida', $id);

		header('location: index.php');		
	}

?>