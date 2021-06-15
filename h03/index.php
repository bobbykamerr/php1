<?php
Echo "opdracht 1 <br>";

for ($x = 0; $x <=9; $x++){
    Echo "<img src='img/aap/aap1.jpg' height= 150px width=150px>";
}
Echo "<br> opdracht 2 <br>";

$boom = ["*","* *", "* * *", "* * * *", "* * * * *", "* * * * * *", "* * * * * * *"];
for ($i = 0; $i< 7; $i++) {
    echo "<p style='text-align:center'>" . $boom[$i] . "</p>";
}
Echo "<br> opdracht 3 <br>";

For($x = 35; $x >= 25; $x--) {
    echo " hoppelepee ";
}
Echo "<br> <br> opdracht 4 <br>";

for($i = 0; $i < 9; $i++) {
    if ($i % 2 == 0) {
        echo "<img style='border: solid 3px black' src='img/aap/aap" . ($i + 1) . ".jpg' height= 150px width=150px>";
    } else {
        echo "<img style='border: solid 3px red' src='img/aap/aap" . ($i + 1) . ".jpg' height= 150px width=150px>";
    }
}



$leeftijd = [10,2,65,12];
$betalen = 0;
$mensen = 0;
for ($i = 0; $i <= count($leeftijd) - 1; $i++) {
    if ($leeftijd[$i] > 65 || $leeftijd[$i] < 3) {
        $mensen++;
    } elseif ($leeftijd[$i] <= 12) {
        $betalen += 5;
        $mensen++;
    } else {
        $betalen += 10;
        $mensen++;
    }
}

Echo "<br> <br> opdracht 6 <br>";

$zwemclubs["spartelkuikens"] = 25;
$zwemclubs["waterbuffels"] = 32;
$zwemclubs["Plonsmderin"] = 11;
$zwemclubs["Bommetje"] = 23;

echo "<table border='1'>";
foreach ($zwemclubs as $label => $waarde) {
    echo "<tr><td>" . $label . "</td><td>" . $waarde . "</td><td>";
    for ($i = 0; $i < (floor($waarde / 5)); $i++) {
        echo "<img src='img/zwemmer.png'>";
    }
    echo "</td></tr>";
}
echo "</table>";

Echo "<br> <br> opdracht 7 <br>";

$kappersagenda["9:15"] = "";
$kappersagenda["9:30"] = "";
$kappersagenda["9:45"] = "Hans";
print("De beschikbaren momenten zijn:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}
print("</ul>");
