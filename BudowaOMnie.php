<?php
echo '
<div class="hello_h">
O Mnie
</div>
';
echo '	
<div>
<h2 id="h2One">Podstawowe Informacje</h2>


<p id="TextFotoProfilowe">Dodaj zdjęcie profilowe:</p>
	<form id="PoleNaFotoProfilowe"> 
	<p> <input type="file" name="FotoProfilowe" accept="image/*">
	<input value="Potwierdź" type="submit"></p>
	</form>
	
<p id="TextOSobie">Napisz coś o Sobie:</p>
	<form id="NapiszCosOSobie"> 
	<p><textarea id="TAOSobie" rows="6" cols="50" form="NapiszCosOSobie">Napisz coś o Sobie...</textarea></p>
	<input value="Potwierdź" type="submit"></p>
	</form>

	<form class="leftSiteForm">
	<p> Tytuł naukowy: <input type="text" size="20"/></p>
    <p> Imię: <input type="text" size="29"/></p>
	<p> Nazwisko: <input type="text" size="24"/></p>
	<p> Miejsce Pracy: <input type="text" size="20"/></p>
	<p> e-mail: <input type="text" size="27"/></p>
	<p> hobby: <input type="text" size="28"/></p>
	<input value="Stwórz Stronę O Mnie" type="submit"></p>
	</form>

<h2 id="h2Two">Dodaj Nowinki</h2>	
<form class="leftSiteForm" id="FormNowinka">
	<p> Tytuł Nowinki: <input type="text" size="100"/></p>
	<p><textarea rows="4" cols="117" form="FormNowinka">Treść Nowiki...</textarea></p>
	<p><input value="Dodaj Nowinkę" type="submit"></p>
</form>
</div>';

//Powyżej te action_page.php trzeba ogarnąć co to i jak dziła 
/*<p>Dodaj zdjęcie profilowe:</p>
	<form action="/action_page.php"> 
	<p> <input type="file" name="FotoProfilowe" accept="image/*">
	<input type="submit"></p>
	</form>
	*/
?>
