<?php				

	require_once('/../config.php');		
	require_once(DBAPI);				

	$motoristas = null;	
	$motorista = null;		
	
	function index() {			
		global $motoristas;			
		$motoristas = find_all('motorista');		
	}

	function add() {
	  if (!empty($_POST['motorista'])) {	       		      

	       $motorista = $_POST['motorista'];		        

	    save('motorista', $motorista);	
	    header('location: index.php');		  
		}		
	}

	function edit() {
		
		if (isset($_GET['id'])) {
		    $id = $_GET['id'];	

		    if (isset($_POST['motorista'])) {
		        $motorista = $_POST['motorista'];	
		        
		        update('motorista', $id, $motorista);		      
		        header('location: index.php');		    
		    } else {				     
		    	global $motorista;		      
		    	$motorista = find('motorista', $id);		    
		    } 		  
		} else {		    
			header('location: index.php');		 
		}		
	}

	function view($id = null) {
		global $motorista;
		$motorista = find('motorista', $id);		
	}

	function delete($id = null) {
		global $motorista;		  
		$motorista = remove('motorista', $id);

		header('location: index.php');		
	}

?>