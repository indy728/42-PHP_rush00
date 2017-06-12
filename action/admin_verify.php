<?PHP
$dir = "../admins/";
$file = $dir."passwd";

function auth_fail()
{
	header("Location: ../admin_login.php");
	exit ;
}

function auth_nofile()
{
	header("Location: admin_create.php");
	exit ;
}

function auth_success($admin)
{
	session_start();
	$_SESSION["admin"] = $admin;
	header("Location: ../home.php");
	exit ;
}

if ($_POST["submit"] === "submit")
{
	if (!file_exists($file))
		
	if (!$_POST["login"] || !$_POST["passwd"])
		auth_fail();
	$i = 0;
	$admins = unserialize(file_get_contents($file));
	foreach ($admins as $key=>$value)
	{
		if ($value["login"] === $_POST["login"])
		{
			if ($value["passwd"] === hash("whirlpool", "FFJ".$_POST["passwd"]))
				auth_success($value["login"]);
			else
				auth_fail();
		}
	}
	auth_fail();
}
?>
