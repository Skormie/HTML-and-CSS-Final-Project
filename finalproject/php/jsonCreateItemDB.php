<?php
    $conn = new mysqli('localhost', 'user_sql5', "password1", 'lovelyvh_cp_db');
    $result = $conn->query("SELECT * FROM `item_db` ORDER BY `id`") or die(mysqli_error($conn));
    $outp = array();
    $outp = $result->fetch_all(MYSQLI_ASSOC);

    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($outp, JSON_PRETTY_PRINT));
    fclose($fp);

    echo "<h2>The ItemDB table backup has been saved to results.json.</h2><p>";
    echo "<a href='./jsonViewItemDB.php'>[View Item DB]</a><a href='./results.json'>[View/Download JSON]</a><p>";
	echo "<br>";
?>