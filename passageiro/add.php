<?php 	

	require_once('functions.php'); 		 
	add();

	include(HEADER_TEMPLATE);		
?>	

<h2>Novo Passageiro</h2>

<form action="add.php" method="post">

	<hr />		  
	 <div class="row">		    
		  <div class="form-group col-md-5">		      
  			<label for="name">Nome</label>
  			<input type="text" class="form-control" required="true" name="passageiro['nome']">
  		</div>

		  <div class="form-group col-md-2">		     
    		<label for="campo2">Data de Nascimento</label>		      
    		<input type="text" class="form-control" placeholder="YYYY-MM-DD" required="true" name="passageiro['data_nascto']">
    	</div>	

    	<div class="form-group col-md-3">		      
    		<label for="campo3">CPF</label>		      
    		<input type="text" class="form-control" placeholder="000.000.000-00" required="true" name="passageiro['cpf']">		    
    	</div>	 			  
    
      <div class="form-group col-md-2"> 
        <label class="control-label " for="campo4">
          Sexo
        </label>
        <select class="select form-control" required="true" name="passageiro['sexo']">
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