<?php require_once "header.php" ?>
    <meta name="description" content="Envie um e-mail para Arena Piscinas ou entre em contato através do nosso telefone (12) 3896-6968. Arena Piscinas Ilhabela" />
    <meta name="keywords" content="Piscina, Ilhabela, Serviços, Produtos" />
    <meta name="author" content="Arena Piscinas" />
	<title>Contato - Arena Piscinas</title>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/validate/jquery.validate.js"></script>
    <script type="text/javascript" src="js/valida_form.js"></script>
<?php require_once "menu.php" ?>
<?php
	
	if($_GET){		
		if($_GET['env'] =='True'){
			require_once 'function/function.php'; ?>
			<div id="box-form-contato">
            <?php
				if(sendMail($_POST['nome'], $_POST['email'], $_POST['mensagem'])){
				echo '<br><br><br><br><br><img class="img-envio" src="images/icone_de_correio_eletronico_email.jpg" alt="Email enviado"><p class="msg-status-envio">Sua mensagem foi enviada, assim que possivel retornaremos. <br> Muito Obrigado.</p><br><br> <a class="bt-voltar" href="contato.php">Voltar</a>';
				}else{
				echo '<br><br><br><br><br><img class="img-envio" src="images/icone_de_correio_eletronico_email_erro.jpg" alt="Email não enviado"><p class="msg-status-envio">Sua mensagem não pode ser enviada, tente novamente.<br> Caso o problema persista entre em contato através de um de nossos telefones, ou aguarde alguns minutos e tente novamente.</p> <br><br> <a class="bt-voltar" href="contato.php">Voltar</a>';
				} ?>
			</div> 
	<?php	}
	}else{
	?>
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
                 
<?php
	}
?>
<div id="box-data-contato">
            	<div id="col1">
                	<br>
                    <p>Arena Piscinas</p>
                    <br><br>
                    <p>
                        Rua Dois Coqueiros, 256<br>
                        Sala 05 <br>                  
                        Perequê<br>
                        Ilhabela - SP <br>
                        CEP: 11630-000 <br><br>
                        Seg a Sexta - 09h as 18h<br>
                        Sab - 09h as 13h <br><br>                        
                       	(12) 3896-6968<br><br>                      
                        (12) 7978-2323<br>
                        96* 24242<br><br>
                        contato@arenapiscinas.com.br
                    </p>
                 </div>
             </div>    
<?php include_once "footer.php" ?>

