<script type="text/javascript" src="js/main.js"></script>
<form name="kapcsolat" action="feldolgoz.php" onsubmit="return ellenoriz();" method="post">
   <div id="urlap">
<label id="Kemail">E-mail:</label><input type="email" id="email" name="email" required> <br>

<label id="Knev">Név:</label><input type="text" id="nev" name="nev" autocomplete="$_SESSION['name']" pattern="[A-Z,a-z, ]{8}[A-Z,a-z, ]*"
required><br>
<p></p>
<label id="Kphone">Telefonszám</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{11}">

<p></p>
<h2 id="megjegyzestext">Megjegyzés:</h2>
<textarea name="szoveg" id="szoveg" rows="4" cols="50"></textarea>
<p>
<input id="kuld" type="submit" value="Küldés">
</p>
</div>
</form>