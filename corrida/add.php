<?php 		  
	require_once('functions.php'); 		 
	add();

	include(HEADER_TEMPLATE);		
?>


<h2>Nova corrida</h2>

<form action="add.php" method="post">

	<hr />		  
	<div class="row">		    
			<div class="form-group col-md-2">		     
    		<label for="campo1">Motorista</label>		      
    		<select type="text" class="form-control" required="true" name="corrida['id_motorista']"> 

          <option value="">Selecione</option>

          <?php
          
            $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
            mysql_select_db(DB_NAME, $link); 

            $result = mysql_query("SELECT * FROM motorista where status = 'A'", $link);
            
               while ($rows = mysql_fetch_array($result)) {
                 echo "<option value=" .$rows['id']. ">".$rows['nome']. "</option>";  
               }                
          ?>  
            
          </select> 
    	</div>	

    	<div class="form-group col-md-3">		      
    		<label for="campo3">Passageiro</label>		      
    		<select type="text" class="form-control" required="true" name="corrida['id_passageiro']"> 

          <option value="">Selecione</option>

          <?php

            $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
            mysql_select_db(DB_NAME, $link); 

            $result = mysql_query("SELECT * FROM passageiro", $link);
            
               while ($rows = mysql_fetch_array($result)) {
                 echo "<option value=" .$rows['id']. ">".$rows['nome']. "</option>";  
               }
                
               ?>  
            
          </select> 	    
    	</div>	 			  
    
      <div class="form-group col-md-2">		      
    		<label for="campo4">Valor</label>		      
    		<input type="text" class="form-control" required="true" name="corrida['valor']">		    
    	</div>	   		      		  
</div>

   	<div id="actions" class="row">		    
   		<div class="col-md-12">		      
   		  	<button type="submit" class="btn btn-primary">Salvar</button>		      
   		  	<a href="index.php" class="btn btn-default">Cancelar</a>		    
   		</div>		  
   	</div>	

</form>	

<?php include(FOOTER_TEMPLATE); ?>