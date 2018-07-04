<?php
echo '<div class="hello_h">Witaj w Formularzu Budowy Strony Prowadzącego</div>';

//O Budowa
echo'
<div class="LargeDiv" id="OBudowa">
<p>
To jest strona nawigacyjna zakładki Budowa. Przejdź do każdej z sekcji i wypełnij formularze danymi.
Nie zapomnij zapisać zmian.</br>
I gotowe ! </br>
Właśnie stworzyłeś w pełni funkcjonalną stronę prowadzącego. </p>
</div>';

//O Mnie
echo '<div class="LargeDiv" id="OMnie">
<p class="InnerH">O Mnie</p>
<p>Wypełnij tę stronę podstawowymi informacjami o Sobie i dodaj zdjęcie.</p>
<p>
<button type="button" class="GoButtonLargeDiv" onClick="GoToForm1()">GO</button>
<script>
function GoToForm1()
	{
		window.location.href = "admin.php?page=twps-umk-budowa-o-mnie"; 
	}
</script></p>
</div>';

//Dla Studenta
echo '<div class="LargeDiv" id="DlaStudenta">
<p class="InnerH">Dla Studenta</p>
<p>Zamieść materiały do prowadzonych zajęć oraz informacje o konsultacjach.</p>
<p>
<button type="button" class="GoButtonLargeDiv" onClick="GoToForm2()">GO</button>

<script>
function GoToForm2()
	{
		window.location.href = "admin.php?page=twps-umk-budowa-student"; 
	}
</script></p>
</div>';

//Publikacje
echo '<div class="LargeDiv" id="Publikacje">
<p class="InnerH">Publikacje</p>
<p>Zamieści informacje o swoich osiągnięciach i publikacjach.</p> 
<p>
<button type="button" class="GoButtonLargeDiv" onClick="GoToForm3()">GO</button>

<script>
function GoToForm3()
	{
		window.location.href = "admin.php?page=twps-umk-budowa-publikacje"; 
	}
</script></p>
</div>';

//Kontakt
echo '<div class="SmallDiv" id="Kontakt">
<p class="InnerH">Kontakt</p>
<p>Bądź dostępny – Podaj dane Kontaktowe.</p>
<p>
<button type="button" class="GoButtonSmallDiv" onClick="GoToForm4()">GO</button>

<script>
function GoToForm4()
	{
		window.location.href = "admin.php?page=twps-umk-budowa-kontakt"; 
	}
</script></p>
</div>';

//Inne Materiały
echo '<div class="SmallDiv" id="InneMate">
<p class="InnerH">Inne Materiały</p>
<p>Zamieść zdjęcia i inne zasoby do pobrania.</p>
<p>
<button type="button" class="GoButtonSmallDiv" onClick="GoToForm5()">GO</button>
<script>
function GoToForm5()
	{
		window.location.href = "admin.php?page=twps-umk-budowa-materialy"; 
	}
</script></p>
</div>';

?>