<?php
echo '
<div class="hello_h">
Kontakt
</div>
';
echo'

<div id="bigDIV">
<form class="rightSiteForm">
<div id="UniFormTitle">
<h2>Miejsce Pracy</h2></div>
	<p> Uniwersytet: <input type="text" size="30"/></p>
    <p> Wydział: <input type="text" size="34"/></p>
	<p> Miejscowość: <input type="text" size="29"/></p>
	<p> kod pocztowy: <input type="text" size="4"/>-<input type="text" size="4"/></p>
	<p> Miasto: <input type="text" size="35"/></p>
	<p> Pokój: <input type="text" size="36"/></p>
	<p> Konsultacje:</p> 
	<p>Dzień:<input type="text" size="37"/> </p>
	<p>Od <input type="time" name="usr_time"> do <input type="time" name="usr_time"></p>
	<p> </p>
	<p>Dzień:<input type="text" size="37"/> </p>
	<p>Od <input type="time" name="usr_time"> do <input type="time" name="usr_time"></p>
	<p> tel: <input type="text" size="40"/></p>
	<p><input value="Dodaj" type="submit"></p>
	</form>



<form class="leftSiteForm">
<div id="KontFormTitle">
<h2>Podstawowe Dane Kontaktowe</h2>
</div>
	<p> Tytuł naukowy: <input type="text" size="20"/></p>
    <p> Imię: <input type="text" size="29"/></p>
	<p> Nazwisko: <input type="text" size="24"/></p>
	<p> e-mail: <input type="text" size="27"/></p>
	<p> tel: <input type="text" size="31"/></p>
	<p>Dodaj CV:</p>
	<p><input type="file" accept="file_extension"></p>
	<p><input value="Dodaj" type="submit"></p>
</form>

</div>
';
?>