<?php
$tablog = array("zak"=>'0123');
print_r($tablog);
if (isset($_POST["pseudo"], $_POST["pass"])) 
{
	$pseudo = $_POST["pseudo"];
	$pass = $_POST["pass"];

	foreach ($tablog as $key => $value)
	{
		if ($pseudo==$key && $pass==$value) 
		{
			echo "Vous ete bien logue !";
		}
		else
		{
			echo "Erreur mdp !";
		}
	}
}

?>


<!doctype html>
<html lang="fr">
	<body>
		<form action="login_password.php" method="post">
			<input type="text" name="pseudo">
			<input type="password" name="pass">
			<input type="submit" value="Envoyer" />
		</form>
	</body>
</html>