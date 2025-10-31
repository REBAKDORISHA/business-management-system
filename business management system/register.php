<?php include("head.html")
?>
<body>

<div class="register">
<form action="connect.php" method="post">

<label for="name">Name</label><br>
<input type="text" size="40" placeholder="enter your name" name="n" required /><br><br>
<label for="name">Age</label><br>
<input type="number" name="a" required /><br><br>
<label for="name">DOB</label><br>
<input type="date" name="d" required /><br><br>
<label for="name">gender</label><br>
<input type="radio" name="g"   value="male"/>Male
<input type="radio" name="g"   value="female"/>FeMale<br><br>
<label for="name">email</label><br>
<input type="email" size="40" placeholder="enter your mail" name="e" required /><br><br>
<label for="name">pwd</label><br>
<input type="password" min="4" maxlength="8" name="p" required /><br><br>
<label for="name">Dept</label><br>
<select name="s">
<option value="cse">CSE</option>
<option value="ece">ECE</option>
<option value="eee">EEE</option>
</select>
<br><br>
<input type="submit" value="register" />
<input type="reset" value="reset" />
</form>
</div>
</body>
<?php include("footer.html")
?>