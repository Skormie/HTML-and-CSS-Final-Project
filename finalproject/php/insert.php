<?php
session_start();
$mysqli = mysqli_connect("localhost", "user_sql5", "password1", "lovelyvh_cp_db");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $today = getdate();
    $result = mysqli_query($mysqli, "SELECT * FROM `login` WHERE userid = '".$_SESSION['username']."';");
	if(mysqli_num_rows($result) != 0) {
        echo "That username already exists!";
        mysqli_close($mysqli);
        exit();
    }
    //sprintf('%s-%s-%s', $today['year'], $today['mon'], $today['mday'])
	$sql = "INSERT INTO `login` " .
		"( userid, user_pass, `email`, `birthdate` ) " .
		"VALUES " .
		"('".clean_input('username')."', '".mysqli_real_escape_string($GLOBALS['mysqli'], password_hash ( clean_input('pass'), PASSWORD_BCRYPT ) )."', '".clean_input('email')."', '".$_SESSION['birthday']."')";
	$res = mysqli_query($mysqli, $sql);

    if ($res === TRUE) {
        echo "Account has been created!";
        echo "<p>Redirecting to login page in 3 seconds!";
        echo "<meta http-equiv=\"refresh\" content=\"3;url=../loginmenu.html\" />";
    } else {
        printf("Could not insert record: %s\n", mysqli_error($mysqli));
    }

mysqli_close($mysqli);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function clean_input($data) {
    $clean_text = mysqli_real_escape_string($GLOBALS['mysqli'], $_SESSION[$data]);
    $clean_text = test_input($clean_text);
    return $clean_text;
}
?>