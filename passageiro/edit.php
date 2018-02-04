<?php   

    require_once('functions.php'); 		  
    edit();	
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Atualizar Passageiro</h2>

    <form action="edit.php?id=<?php echo $passageiro['id']; ?>" method="post">		  
        <hr />		  
        <div class="row">		    
            <div class="form-group col-md-5">		      
                <label for="name">Nome</label>		      
                <input type="text" class="form-control" required="true" name="passageiro['nome']" value="<?php echo $passageiro['nome']; ?>">		    
            </div>

            <div class="form-group col-md-2">             
                <label for="campo2">Data de Nascimento</label>            
                <input type="text" class="form-control" placeholder="YYYY-MM-DD" required="true" name="passageiro['data_nascto']" value="<?php echo $passageiro['data_nascto']; ?>">           
            </div>

            <div class="form-group col-md-3">		      
                <label for="campo3">CPF</label>		      
                <input type="text" class="form-control" placeholder="000.000.000-00" required="true" name="passageiro['cpf']" value="<?php echo $passageiro['cpf']; ?>">		    
            </div>

            <div class="form-group col-md-2">             
                <label for="campo4">Sexo</label>           
                <select type="text" class="select form-control" required="true" name="passageiro['sexo']" value="<?php echo $passageiro['sexo']; ?>"> 
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