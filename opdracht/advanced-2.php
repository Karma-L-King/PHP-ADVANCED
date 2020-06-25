<html>
<body>

<table id="table">
    
<?php 
$karma = array("voornaam"=>"karma","achternaam"=>"King","klas"=>"LTCA009C","Leeftijd"=>17,"Woonplaats"=>"Zaandam","partner"=>"fayza");
function rijtje($key,$value){

    echo "<tr> <td> $key </td> <td> $value </td> </tr>" ;
}


$Achtergrond = $_POST["achtergrond"]; 
$dikte = $_POST["border"];
$padding = $_POST["padding"];
$tekstkleur = $_POST["tekstkleur"];
echo "<style>
td,table,tr,th{
    border: $dikte;
    border-collapse: collapse;
}
td,th{
    padding: $padding;
}

</style>";
echo    "<body style='color:$tekstkleur;background-color:$Achtergrond'>" ;  
 
foreach($karma as $key => $value){
 rijtje($key,$value);
}

?>  
    
</table>
</body>
</hmtl>