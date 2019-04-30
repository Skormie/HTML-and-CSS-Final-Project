<?php
    $mysqli = mysqli_connect('localhost', 'user_sql5', "password1", 'lovelyvh_cp_db');
    $sql = "SELECT * FROM `mob_db` ORDER BY `id`";
    $res = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    $xml = new XMLWriter();
    $xml->openURI("output.xml"); //php://output
    $xml->startDocument('1.0', 'UTF-8');
    $xml->setIndent(true);
    $xml->startElement('mob_db');
    while ($row = mysqli_fetch_assoc($res)) {
        $xml->startElement('monster');
        foreach ($row as $column => $value) {
            //$xml->writeAttribute('id', $row['id']);
            $xml->startElement($column);
            $xml->writeRaw($value);
            $xml->endElement();
        }
        $xml->endElement();
    }
    $xml->endElement();
    $xml->endDocument();
    $xml->outputMemory();
    //header('Content-type: text/xml');
    unset($xml);
    echo "<h2>output.xml has been created!</h2><p>";
    echo "<a href='./xmlViewMobDB.php'>[View XML MobDB]</a><a href='./output.xml'>[View/Download XML]</a><p>";
	echo "<br>";
?>