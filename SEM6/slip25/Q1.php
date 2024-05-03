<?php
    //create new dom

    $doc = new DOMDocument();

    $cricketTeam = $doc->createElement("CricketTeam");

    $teamAus = $doc->createElement("Team");
    $teamAus->setAttribute("country","Austrilia");

    $player1 = $doc->createElement("player","Steve Smith");
    $teamAus->appendChild($player1);

    $runs1 = $doc->createElement("runs","7090");
    $teamAus->appendChild($runs1);

    $wicket1 = $doc->createElement("wicket","34");
    $teamAus->appendChild($wicket1);

    $cricketTeam->appendChild($teamAus);

    $doc->appendChild($cricketTeam);

    $doc->save("cricket.xml");
    echo"Elements are added !";
?>