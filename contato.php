<?php require_once "header.php" ?>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/validate/jquery.validate.js"></script>
    <script type="text/javascript" src="js/valida_form.js"></script>
<?php
	
	if($_GET){		
		if($_GET['env'] =='True'){
			require_once 'function/function.php';
			if(sendMail($_POST['nome'], $_POST['email'], $_POST['mensagem'])){
				echo 'Mensagem enviada';
			}else{
				echo 'Mensagem não enviada';
			}
		}
	}
	
	
?>
<?php require_once "menu.php" ?>
			<div id="box-form-contato">
           	  <h1>Contato</h1>
            	<form id="form-contato" method="post" action="contato.php?env=True">
                	<label class="title">Nome*</label>
                    <input type="text" name="nome">
                    <br><br>
                	<label class="title">E-mail*</label>
                    <input type="text" name="email">
                    <br><br>
                    <label class="title">Telefone</label>
                    <input type="text" name="telefone">
                    <br><br>
                    <label class="title">Celular</label>
                    <input type="text" name="celular">
                    <br><br>
                    <label class="title">Informação*</label>
                    <textarea name="mensagem"></textarea>
                    <div class="clear"></div>
                    <br>                    
                    <button>Enviar</button>
                </form>
            </div>  
            <div id="box-data-contato">
            	<div id="col1">
                	<br>
                    <p>Arena Piscinas</p>
                    <br><br>
                    <p>
                        Rua dois Coqueiros, 152 - Loja 02 <br>                  
                        Pereque<br>
                        Ilhabela - SP <br>
                        CEP: 12030-110 <br><br>
                        Seg a Sexta - 09h as 18h<br>
                        Sab - 09h as 13h <br><br>                        
                       	(12) 3632-7731<br><br>                      
                        (12) 7978-2323<br>
                        96* 24242<br><br>
                        contato@arenapiscinas.com.br
                    </p>            
<?php include_once "footer.php"?>

