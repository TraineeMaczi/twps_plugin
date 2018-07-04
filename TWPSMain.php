<?php


echo '<div class="hello_h">Witaj w Panelu Zarządzania TWPS</div>';
	
    echo '<div id="WlaczPodpowiedzi">
	<span class="TextInDivH">Włącz Podpowiedzi</span></br>
	<button type="button" class="ON_OFF_B">ON</button>
	<button type="button" class="ON_OFF_B">OFF</button>	
	</div>';
	
	echo '	
	<div id="ZbudujZeMnaStrone">
	<span class="TextInDivH">Zbuduj ze Mną Stronę</span> </br>
<button type="button" class="ON_OFF_B" id="B_Lekcje" onClick="GoToForm()">GO</button>
</div>
<script>
function GoToForm()
	{
		window.location.href = "admin.php?page=twps-budowa"; 
	}
</script>';
	
	//Te przeniesienia do innych pod stron niby dziłają ale jak to będzie na serwerze to nie wiem 
	echo '<div id="BKartaOdnosnika1">
	<span class="TextInDivH">Mini Narzędzia</span></br>
	<span class="NormalText">Tutaj znajdziesz zestaw przydatnych narzędzi (kontrolek do dodania) w pracy takich jak lista obecności,formularz itp.</br> 
	(Nie wiem jeszcze co umieścić strona w budowie.)</br></span>
	<button type="button" class="OdnosnikMainLeftZakladka" onClick="GoToMini()">Przejdź do Mini Narzędzia</button>
	</div>
	<script>
	function GoToMini()
	{
		window.location.href = "admin.php?page=twps-mini"; 
	}
	</script>';
	
	echo '<div id="BKartaOdnosnika2">
	<span class="TextInDivH">Rekomendacje</span></br>
	<span class="NormalText">Wordpress oferuje całą gamę darmowych szablonów i wtyczek.<br>
	Te wybrano specjalnie dla Ciebie.</span>
	<button type="button" class="OdnosnikMainLeftZakladka" onClick="GoToRec()">Przejdź do Rekomendacje</button>
	</div>
	
	<script>
	function GoToRec()
	{
		window.location.href = "admin.php?page=twps-recom"; 
	}
	</script>
	';
	
    echo '<div id="BKartaOdnosnika3">
	<span class="TextInDivH">Szablony UMK</span></br>
	<span class="NormalText">Tutaj znajdziesz gotowy szablon strony zgodny z najnowszą szatą graficzną Uniwersytetu Mikołaja Kopernika.<br>
    </span>
	<button type="button" class="OdnosnikMainLeftZakladka" onClick="GoToUMK()">Przejdź do UMK</button>
	</div>
	
	<script>
	function GoToUMK()
	{
		window.location.href = "admin.php?page=twps-umk"; 
	}
	</script>';
	
	echo '<div id="OMnie">
	<span class="TextInDivH">Kilka Słów o Mnie i o Projekcie </span></br>
	<span id="textOMnie">Wtyczka powstała jako projekt pracy inżynierskiej.</br>&copy; Karolina Makowska</span>
	
	<button type="button" class="OdnosnikMainLeft" onClick="GoToKM()">Moja Strona Domowa</button>
	
	<button type="button" class="OdnosnikMainRight" onClick="GoToTWPS()">O Projekcie TWPS</button>
	</div>
	<script>
	function GoToTWPS()
	{
		window.location.href = "http://twpsupport.cba.pl/"; 
	}
	function GoToKM()
	{
		window.location.href = "https://karolinamakowskasite.wordpress.com/"; 
	}
	
	</script>';
	?>