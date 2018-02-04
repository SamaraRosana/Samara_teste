<?php 		  
	require_once('functions.php'); 		 
	add();

	include(HEADER_TEMPLATE);		
?>	

<h2>Novo Motorista</h2>

<form action="add.php" method="post">

	<hr />		  
	<div class="row">		    
		<div class="form-group col-md-7">		      
			<label for="name">Nome</label>
			<input type="text" class="form-control" required="true" name="motorista['nome']">
		</div>

		<div class="form-group col-md-2">		     
    		<label for="campo2">Data de Nascimento</label>		      
    		<input type="text" class="form-control" placeholder="YYYY-MM-DD" required="true" name="motorista['data_nascto']">
    	</div>	

    	<div class="form-group col-md-3">		      
    		<label for="campo3">CPF</label>		      
    		<input type="text" class="form-control" placeholder="000.000.000-00" required="true" name="motorista['cpf']">		    
    	</div>	    			  
    </div>		  		  

    <div class="row">		    
    	<div class="form-group col-md-4">		      
    		<label for="campo1">Modelo do Carro</label>		      
    		<input type="text" class="form-control" required="true" name="motorista['modelo_carro']">		    
    	</div>	
    	

    <div class="form-group col-md-2"> 
    <label class="control-label " for="campo2">
       Status
      </label>
      <select class="select form-control" required="true" name="motorista['status']">
        <option value="">
        Selecione
       </option>
       <option value="A">
        Ativo
       </option>
       <option value="I">
        Inativo
       </option>
      </select>
     </div>

    <div class="form-group col-md-2"> 
      <label class="control-label " for="campo3">
        Sexo
      </label>
      <select class="select form-control" required="true" name="motorista['sexo']">
        <option value="">
          Selecione
       </option>
       <option value="F">
          Feminino
       </option>
       <option value="M">
          Masculino
       </option>
      </select>
     </div>
    
   	<div id="actions" class="row">		    
   		<div class="col-md-12">		      
   		  	<button type="submit" class="btn btn-primary">Salvar</button>		      
   		  	<a href="index.php" class="btn btn-default">Cancelar</a>		    
   		</div>		  
   	</div>	

</form>	

<?php include(FOOTER_TEMPLATE); ?>