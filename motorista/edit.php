<?php   

    require_once('functions.php'); 		  
    edit();	
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Atualizar Motorista</h2>

    <form action="edit.php?id=<?php echo $motorista['id']; ?>" method="post">		  
        <hr />		  
        <div class="row">		    
            <div class="form-group col-md-7">		      
                <label for="name">Nome</label>		      
                <input type="text" class="form-control" required="true" name="motorista['nome']" value="<?php echo $motorista['nome']; ?>">		    
            </div>

            <div class="form-group col-md-2">             
                <label for="campo2">Data de Nascimento</label>            
                <input type="text" class="form-control" required="true" name="motorista['data_nascto']" value="<?php echo $motorista['data_nascto']; ?>">           
            </div>

            <div class="form-group col-md-3">		      
                <label for="campo3">CPF</label>		      
                <input type="text" class="form-control" required="true" name="motorista['cpf']" value="<?php echo $motorista['cpf']; ?>">		    
            </div>

        </div>

        <div class="row">           
            <div class="form-group col-md-5">             
                <label for="name">Modelo do Carro</label>            
                <input type="text" class="form-control" required="true" name="motorista['modelo_carro']" value="<?php echo $motorista['modelo_carro']; ?>">         
            </div>

            <div class="form-group col-md-2">             
                <label for="campo2">Status</label>

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
                <label for="campo3">Sexo</label> 

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
        </div>        		  

        <div id="actions" class="row">		    
            <div class="col-md-12">		      
                <button type="submit" class="btn btn-primary">Salvar</button>		      
                <a href="index.php" class="btn btn-default">Cancelar</a>		    
            </div>		  
        </div>	

    </form>	

<?php include(FOOTER_TEMPLATE); ?>