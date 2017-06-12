<?PHP
$dir = "../admins/";
$file = $dir."passwd";

if ($_POST["submit"] === "submit")
{
	$i = 0;
	if (file_exists($file))
	{
		$users = unserialize(file_get_contents($file));
		foreach ($users as $key=>$value)
		{
			if ($value["login"] === $_POST["login"])
			{
				header("Location: http://www.google.com");
				exit ;
			}
			++$i;
		}
	}
	if (!file_exists($dir))
		mkdir($dir);
	$users[$i]["login"] = $_POST["login"];
	$users[$i]["passwd"] = hash("whirlpool", "FFJ".$_POST["passwd"]);
	file_put_contents($file, serialize($users));
}
?>
<HTML><BODY>
<form title="admin_create.php" action="admin_create.php" method="post">
	Login:<input type="text" name="login" value="" /><br />
	Pass: <input type="password" name="passwd" value="" /><br />
	<input type="submit" name="submit" value="submit" />
</form>
</BODY></HTML>
