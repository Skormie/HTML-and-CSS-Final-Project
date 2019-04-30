<?php
include 'connect.php';
session_start();
doDB();

if (!isset($_SESSION['loggedin'])) {
    header("url: ../loginmenu.html");
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_GET['hair'] < 30 && $_GET['hair'] > 0 && $_GET['hairColor'] < 10 && $_GET['hairColor'] > 0 && ($_GET['gender'] == "M" || $_GET['gender'] == "F") && $_GET['charname'] != "" && $_SESSION['username'] == $_GET['username'] ) {

    $clean_username = mysqli_real_escape_string($mysqli, test_input($_SESSION['username']));
    $clean_charname = mysqli_real_escape_string($mysqli, test_input($_GET['charname']));
    $clean_hair = mysqli_real_escape_string($mysqli, test_input($_GET['hair']));
    $clean_hairColor = mysqli_real_escape_string($mysqli, test_input($_GET['hairColor']));
    $clean_gender = mysqli_real_escape_string($mysqli, test_input($_GET['gender']));

    $sql = "SELECT `account_id` FROM `login` WHERE userid = '".$clean_username."'";

    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    if (!mysqli_num_rows($result)) {
        header("url: ../logout.html");
        //exit;
        //$sql2 = "INSERT INTO auth_users ( f_name, l_name, email, username, password ) VALUES ( '".$safe_username."', '', 'a@a.com', '".$safe_username."', '".$safe_password."' )";
        //mysqli_query($mysqli, $sql2) or die(mysqli_error($mysqli));	
    }

    $row = mysqli_fetch_array($result);

    $sql = "SELECT * FROM `char` WHERE `account_id` = ".$row['account_id']."";

    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

    $charnumber = mysqli_num_rows($result);
    if ($charnumber > 6) {
        //$display_block = "<p style='text-align:center;color:red;font-size:2em;'>User created reload to login!</p>";
        //$display_block .= "<p style='text-align:center;font-size:2em;'><a href='userlogin.html'> Return to login</a></p>";
        $display_block = "You have to many characters. Redirecting in 3 seconds...";
    } else {
        $sql = "INSERT INTO `char` ( `account_id`, `char_num`, `name`, `class`, `base_level`, `job_level`, `base_exp`, `job_exp`, `zeny`, `str`, `agi`, `vit`, `int`, `dex`, `luk`, `hair`, `hair_color`, `sex` ) VALUES ( ".$row['account_id'].", ".$charnumber.", '".$clean_charname."', 0, 1, 1, 0, 0, 0, 10, 10, 10, 10, 10, 10, ".$clean_hair.", ".$clean_hairColor.", '".$clean_gender."' )";
        $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
        $display_block = "Character Created! Redirecting in 3 seconds...";
    }
}
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="3;url=../index.html" />
    </head>
    <body>
        <h1><?php echo $display_block; ?></h1>
    </body>
</html>