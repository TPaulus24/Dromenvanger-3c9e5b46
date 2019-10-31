<?php
//array waar al de dromen instaan
$vrienden = [];
echo "Hoeveel vrienden zal ik vragen om hun droom??" . PHP_EOL;
// aantal dronem toevoegen
$aanvri = readline();

if(is_numeric($aanvri)){
    
    for ($a = 0; $a < $aanvri; $a++){
        echo"Wat is je naam???" . PHP_EOL;
        $naam = readline();
        // naam toevoegen
        
        echo "Hoeveel dromen ga je opgeven??" . PHP_EOL;
        $aantaldromen = readline();
        //getal toevoegen voor aantal dromen
        
        for($q = 0; $q < $aantaldromen; $q++){
            echo "Wat is je droom??" . PHP_EOL;
            $vrienden[$naam][$q] = readline();
            //dromen toevoegen
        }
    }    
    foreach($vrienden as $arrayInArray){
        $naam = array_search ($arrayInArray, $vrienden);
        //dromen worden in een array gezet
        
        foreach($arrayInArray as $droom){
         echo $naam . " Heeft als droom: " . $droom . PHP_EOL;
         //allen dromen op een rij uitgeprint
        }
    }
} else {
    echo "'$aanvri' is geen getal voer een geldig getal in." . PHP_EOL;
    exit();
    //als er geen getal word ingevoerd5
}
?>