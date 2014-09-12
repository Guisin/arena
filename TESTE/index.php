<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var content = $('#content');
 
		//pre carregando o gif
		loading = new Image(); loading.src = 'images/loading.gif';
		$('#menu a').live('click', function( e ){
			e.preventDefault();
			content.html( '<img src="images/loading.gif" />' );
 
			var href = $( this ).attr('href');
			$.ajax({
				url: href,
				success: function( response ){
					//forçando o parser
					var data = $( '<div>'+response+'</div>' ).find('#content').html();
 
					//apenas atrasando a troca, para mostrarmos o loading
					window.setTimeout( function(){
						content.fadeOut('slow', function(){
							content.html( data ).fadeIn();
						});
					}, 500 );
				}
			});
 
		});
	});
	</script>
</head>
<body>
	<ul id="menu">
		<li><a href="index.php">Home1</a></li>
		<li><a href="fotos.php">Fotos</a></li>
		<li><a href="contato.html">Contato</a></li>
	</ul><!-- /menu -->
	<div id="content">
		<h1>Bem Vindo!</h1>
		<p>Essa eh a home desse nome pseudo-site.</p>
	</div><!-- /content -->
</body>
</html>