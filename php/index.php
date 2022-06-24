
<!-- Abaixo é declarado a tag HTML -->
<html>

<!-- header indica o "cabeçalho" de uma parte do HTML, nesse caso o do --
  -- documento todo, podem haver mais de um header, mas nunca mais de um h1 -->
	<header>

<!-- title define o texto que será exibido na guia do navegador-->
		<title>Meu primeiro site em PHP! Woohoo!</title>
<!-- o elemento header é fechado aqui-->
	</header>

<!-- o elemento body, como o proprio nome sugere, contem o corpo do documento -->	
	<body>


<!-- o codigo php deve ser inserido dento de "<?php ?>"-->
		<?php
			for ( $i = 0 ; $i <10 ; $i++) {
			print( "Linha numero " . $i . "<br />");
			}
		?>
<!-- define o valor inicia do elemento $i como 0, enquanto o elemento $i for
		menor do que 10 incremente o elemento $i, imprima "Linha
		numero " $i e quebre a linha -->
		
		
		
<!-- o elemento body é fechado aqui-->
	</body>



</html>
