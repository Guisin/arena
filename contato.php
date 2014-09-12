<?php require_once "header.php" ?>
<?php require_once "menu.php" ?>
			<div id="box-text-page">
            	<h1>Contato</h1>
            	<form id="form-contato">
                	<p>Nome*</p>
                    <br>
                    <input type="text" required name="nome" value="nome">
                    <br><br>
                	<p>E-mail*</p>
                    <br>
                    <input type="text" required name="e-mail" value="e-mail">
                    <br><br>
                    <p>Telefone</p>
                    <br>
                    <input type="text" required name="telefone" value="telefone">
                    <br><br>
                    <p>Celular</p>
                    <br>
                    <input type="text" required name="celular" value="celular">
                    <br><br>
                    <p>Informação*</p>
                    <br>
                    <textarea required name="informacao" value="informacao"></textarea>
                    <div class="clear"></div>
                    <br>                    
                    <button>Enviar</button>
                </form>
            </div>  
            <div id="box-img-page">            	
            </div>               
<?php include_once "footer.php"?>

