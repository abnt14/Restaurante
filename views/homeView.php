<html>
	<head>
		<title>Landing Page</title>
		<link href="../styles/home.css" rel="stylesheet">
		<script src="../scripts/home.js"></script>
		<header>
			<nav>
				<h1>Cantina italiana</h1>
				<div id="flagContainer">
					<img id="italianFlag" src="../imagens/italianFlag.avif">
				</div>
			</nav>
		</header>
	</head>
	<body onload="defineOpeningHours()">
		<main>
			<div id="sobreTexto">
				<h1>Quem somos</h1>
				<p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quam nisi, vestibulum id odio at, eleifend pretium purus. Donec dolor nunc, ultricies vel viverra id, luctus in ante. Vivamus vel scelerisque nulla. Integer tincidunt turpis ut metus ullamcorper pretium. Aenean imperdiet vulputate dapibus. In ligula sem, ornare sit amet massa nec, lobortis rutrum nunc. Proin eget ullamcorper diam. Suspendisse leo dolor, aliquam viverra efficitur id, facilisis sagittis arcu. Cras magna est, feugiat at leo et, pretium ultricies nunc. Nunc et enim feugiat, elementum massa at, congue neque. Maecenas sodales neque ut purus euismod pharetra. Pellentesque a quam sit amet lorem mollis aliquet in vel erat. Nulla fringilla tellus tortor, nec condimentum diam iaculis in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>	
			</div>
			<img id="sobreImg" src="imagens/quemSomos.jpg" width="700" height="500">
		</main>
		<section>
			<div id="cardapioDiv">
				<div id="cardapio">
					<h1>Cardápio</h1>	
					<?php	
						echo "<table class='menuTable'>";
						
						while($arr = $stmt->fetch(PDO::FETCH_ASSOC)){
							$dishName = $arr['name'];
							$dishPrice = $arr['price'];
							$dishDescription = $arr['description'];
							$dishId = $arr['id'];
							
							echo "<tr><td id='$dishId'onmouseout='updateSelectedDishOut(this.id)' onmouseover='updateSelectedDishIn(this.id)'>$dishName</td><td>$dishDescription</td><td>R$ $dishPrice</td></tr>";
						}
						
						echo "</table>";
					?>
				</div>
				<img id="imgCardapio" src="imagens/cardapio.jpg">
			</div>
			<div id="openingHoursDiv">
				<h1>Horário de funcionamento</h1>
				<table id="openingHoursTable">
					<tr>
						<td class="day1">Segunda-Feira</td>
						<td class="day1">Aberto</td>
					</tr>
					<tr>
						<td class="day2">Terça-Feira</td>
						<td class="day2">Aberto</td>
					</tr>
					<tr>
						<td class="day3">Quarta-Feira</td>
						<td class="day3">Aberto</td>
					</tr>
					<tr>
						<td class="day4">Quinta-Feira</td>
						<td class="day4">Aberto</td>
					</tr>
					<tr>
						<td class="day5">Sexta-Feira</td>
						<td class="day5">Aberto</td>
					</tr>
					<tr>
						<td class="day6">Sábado</td>
						<td class="day6">Aberto</td>
					</tr>
					<tr>
						<td class="day7">Domingo</td>
						<td class="day7">Fechado</td>
					</tr>
				</table>
			</div>
		</section>
		<footer id="ondeEcontrarDiv">
				<div>
					<h1>Onde encontrar</h1>
				</div>
				<div>
					<h3>Endereço</h3>
					<p>Rua, número cidade...</p>
				</div>
				<div>
					<h3>Contato</h3>
					<a href="https://web.whatsapp.com/"><button id="whatsBtn"><img src="imagens/whatsapp.png" width="30" height="30"></button></a>
				</div>
		</footer>
	</body>
</html>

