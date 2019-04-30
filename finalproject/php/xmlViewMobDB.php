<?php
$xmlList = simplexml_load_file("output.xml") or die("Error: Cannot find XML file.");
echo "<link href=\"table.css\" rel=\"stylesheet\" type=\"text/css\">";
echo "<h2>XML MobDB Results!</h2>";
echo "<table style=\"width:100%\">";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>kName</th>";
echo "<th>iName</th>";
echo "<th>LV</th>";
echo "<th>HP</th>";
echo "<th>SP</th>";
echo "<th>EXP</th>";
echo "<th>JEXP</th>";
echo "<th>Range1</th>";
echo "<th>ATK1</th>";
echo "<th>ATK2</th>";
echo "<th>DEF</th>";
echo "<th>MDEF</th>";
echo "<th>STR</th>";
echo "<th>AGI</th>";
echo "<th>VIT</th>";
echo "<th>INT</th>";
echo "<th>DEX</th>";
echo "<th>LUK</th>";
echo "<th>Range2</th>";
echo "<th>Range3</th>";
echo "<th>Scale</th>";
echo "<th>Race</th>";
echo "<th>Element</th>";
echo "<th>Mode</th>";
echo "<th>Speed</th>";
echo "<th>aDelay</th>";
echo "<th>aMotion</th>";
echo "<th>dMotion</th>";
echo "<th>MEXP</th>";
echo "<th>MVP1id</th>";
echo "<th>MVP1per</th>";
echo "<th>MVP2id</th>";
echo "<th>MVP2per</th>";
echo "<th>MVP3id</th>";
echo "<th>MVP3per</th>";
echo "<th>Drop1id</th>";
echo "<th>Drop1per</th>";
echo "<th>Drop2id</th>";
echo "<th>Drop2per</th>";
echo "<th>Drop3id</th>";
echo "<th>Drop3per</th>";
echo "<th>Drop4id</th>";
echo "<th>Drop4per</th>";
echo "<th>Drop5id</th>";
echo "<th>Drop5per</th>";
echo "<th>Drop6id</th>";
echo "<th>Drop6per</th>";
echo "<th>Drop7id</th>";
echo "<th>Drop7per</th>";
echo "<th>Drop8id</th>";
echo "<th>Drop8per</th>";
echo "<th>Drop9id</th>";
echo "<th>Drop9per</th>";
echo "<th>DropCardid</th>";
echo "<th>DropCardper</th>";
echo "</tr>";
foreach ($xmlList->monster as $user) {
    echo "<tr>";
	echo "<td>".$user->ID."</td>";
	echo "<td>".$user->kName."</td>";
	echo "<td>".$user->iName."</td>";
	echo "<td>".$user->LV."</td>";
	echo "<td>".$user->HP."</td>";
	echo "<td>".$user->SP."</td>";
	echo "<td>".$user->EXP."</td>";
	echo "<td>".$user->JEXP."</td>";
	echo "<td>".$user->Range1."</td>";
	echo "<td>".$user->ATK1."</td>";
	echo "<td>".$user->ATK2."</td>";
	echo "<td>".$user->DEF."</td>";
	echo "<td>".$user->MDEF."</td>";
	echo "<td>".$user->STR."</td>";
	echo "<td>".$user->AGI."</td>";
	echo "<td>".$user->VIT."</td>";
	echo "<td>".$user->INT."</td>";
	echo "<td>".$user->DEX."</td>";
	echo "<td>".$user->LUK."</td>";
	echo "<td>".$user->Range2."</td>";
	echo "<td>".$user->Range3."</td>";
	echo "<td>".$user->Scale."</td>";
	echo "<td>".$user->Race."</td>";
	echo "<td>".$user->Element."</td>";
	echo "<td>".$user->Mode."</td>";
	echo "<td>".$user->Speed."</td>";
	echo "<td>".$user->aDelay."</td>";
	echo "<td>".$user->aMotion."</td>";
	echo "<td>".$user->dMotion."</td>";
	echo "<td>".$user->MEXP."</td>";
	echo "<td>".$user->MVP1id."</td>";
	echo "<td>".$user->MVP1per."</td>";
	echo "<td>".$user->MVP2id."</td>";
	echo "<td>".$user->MVP2per."</td>";
	echo "<td>".$user->MVP3id."</td>";
	echo "<td>".$user->MVP3per."</td>";
	echo "<td>".$user->Drop1id."</td>";
	echo "<td>".$user->Drop1per."</td>";
	echo "<td>".$user->Drop2id."</td>";
	echo "<td>".$user->Drop2per."</td>";
	echo "<td>".$user->Drop3id."</td>";
	echo "<td>".$user->Drop3per."</td>";
	echo "<td>".$user->Drop4id."</td>";
	echo "<td>".$user->Drop4per."</td>";
	echo "<td>".$user->Drop5id."</td>";
	echo "<td>".$user->Drop5per."</td>";
	echo "<td>".$user->Drop6id."</td>";
	echo "<td>".$user->Drop6per."</td>";
	echo "<td>".$user->Drop7id."</td>";
	echo "<td>".$user->Drop7per."</td>";
	echo "<td>".$user->Drop8id."</td>";
	echo "<td>".$user->Drop8per."</td>";
	echo "<td>".$user->Drop9id."</td>";
	echo "<td>".$user->Drop9per."</td>";
	echo "<td>".$user->DropCardid."</td>";
	echo "<td>".$user->DropCardper."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
?>