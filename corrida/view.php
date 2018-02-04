<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);			
	require_once('functions.php'); 			
	view($_GET['id']);		
?>	

<?php include(HEADER_TEMPLATE); ?>

	<h2>Corrida <?php echo $corrida['id']; ?></h2>		
	<hr>

<?php if (!empty($_SESSION['message'])) : ?>			
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?>
		
	</div>		
<?php endif; ?>

<?php

		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
            mysql_select_db(DB_NAME, $link); 

            $result = mysql_query("SELECT * FROM motorista where id =" .$corrida['id_motorista']."", $link);
            $rows = mysql_fetch_array($result);

            $result2 = mysql_query("SELECT * FROM passageiro where id =" .$corrida['id_passageiro']."", $link);
            $rows2 = mysql_fetch_array($result2);

	?>

	<dl class="dl-horizontal">			
		<dt>Motorista:</dt>			
		<dd><?php echo $rows['nome']; ?></dd>

		<dt>Passageiro:</dt>			
		<dd><?php echo $rows2['nome']; ?></dd>	

		<dt>Valor:</dt>			
		<dd><?php echo $corrida['valor']; ?></dd>				
	</dl>		
	

	<div id="actions" class="row">			
		<div class="col-md-12">			  
			<a href="edit.php?id=<?php echo $corrida['id']; ?>" class="btn btn-primary">Editar</a>			  
			<a href="index.php" class="btn btn-default">Voltar</a>			
		</div>		
	</div>	

<?php include(FOOTER_TEMPLATE); ?>