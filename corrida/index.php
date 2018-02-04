<?php		    
	error_reporting(E_ALL ^ E_DEPRECATED);
	require_once('functions.php');		    
	index();	
?>

<?php include(HEADER_TEMPLATE); ?>	

	<header>			
		<div class="row">				
			<div class="col-sm-6">
				<h2>Corridas</h2>
			</div>				
			<div class="col-sm-6 text-right h2">			    	
				<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova corrida</a>			    	
				<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>			    
			</div>			
		</div>		
	</header>

<?php if (!empty($_SESSION['message'])) : ?>			
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">				
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>				
		<?php echo $_SESSION['message']; ?>			
	</div>			

	<?php clear_messages(); ?>		
<?php endif; ?>			

<hr>	

<table class="table table-hover">		
	<thead>			
		<tr>				
			<th>ID</th>				
			<th>Motorista</th>
			<th> Passageiro </th>			
			<th>Valor</th>					
		</tr>		
	</thead>		
	<tbody>		

<?php if ($corridas) : ?>		
<?php foreach ($corridas as $corrida) : ?>	

	
	<?php

		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
            mysql_select_db(DB_NAME, $link); 

            $result = mysql_query("SELECT * FROM motorista where id =" .$corrida['id_motorista']."", $link);
            $rows = mysql_fetch_array($result);

            $result2 = mysql_query("SELECT * FROM passageiro where id =" .$corrida['id_passageiro']."", $link);
            $rows2 = mysql_fetch_array($result2);

	?>

	<tr>				
		<td><?php echo $corrida['id']; ?></td>				
		<td><?php echo $rows['nome']; ?></td>	
		<td><?php echo $rows2['nome']; ?></td>			
		<td><?php echo $corrida['valor']; ?></td>

		<td class="actions text-right">					
			<a href="view.php?id=<?php echo $corrida['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>				
			<a href="edit.php?id=<?php echo $corrida['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>					
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-corrida="<?php echo $corrida['id']; ?>">						
				<i class="fa fa-trash"></i> Excluir					
			</a>				
		</td>			
	</tr>

<?php endforeach; ?>		
<?php else : ?>			
	<tr>				
		<td colspan="6">Nenhum registro encontrado.</td>			
	</tr>		

<?php endif; ?>		
</tbody>		
</table>

<?php include ('modal.php'); ?>

<?php include(FOOTER_TEMPLATE_COR); ?>