<?php				

	require_once('/../config.php');		
	require_once(DBAPI);				

	$passageiros = null;	
	$passageiro = null;		
	
	function index() {			
		global $passageiros;			
		$passageiros = find_all('passageiro');		
	}

	function add() {
		if (!empty($_POST['passageiro'])) { 
    
    	   	$passageiro = $_POST['passageiro'];
    	    
    save('passageiro', $passageiro);
    header('location: index.php');
  		}
	}

	function edit() {
		if (isset($_GET['id'])) {
		    $id = $_GET['id'];	

		    if (isset($_POST['passageiro'])) {
		        $passageiro = $_POST['passageiro'];	

		        update('passageiro', $id, $passageiro);		      
		        header('location: index.php');		    
		    } else {				     
		    	global $passageiro;		      
		    	$passageiro = find('passageiro', $id);		    
		    } 		  
		} else {		    
			header('location: index.php');		 
			}		
	}

	function view($id = null) {
		global $passageiro;
		$passageiro = find('passageiro', $id);		
	}

	function delete($id = null) {
		global $passageiro;		  
		$passageiro = remove('passageiro', $id);

		header('location: index.php');		
	}

?>