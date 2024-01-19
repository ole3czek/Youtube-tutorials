<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php



$pensja = $_POST['pensja'];

$zero = 0;


if (empty($pensja)) {
    echo "Prosze uzupelnic poprawnie pole pensja";
}else{
    $tablica = ["8979", "7698", "8345", "8642", "8112", "8999", "7920", "8100", "8720", "7891", "7777",  "8021", ];
    $tablica2 = ["Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien"];

    echo "<table>";
    

    for($i=0; $i < 12; $i++){

        $wynik = $pensja/$tablica[$i];
        
        echo "<tr><th>".$tablica2[$i]."</th><td>".round($wynik, 2)."  uncji<br></td></tr>";
        
        $zero = $zero + $wynik;

    }}

    echo "<th> Suma: </th>";
    echo "<td>".round($zero, 2)."  uncji </td>";
    echo "</table>";




?>


<style>

table {
    border: solid black 1px
}

</style>
    
</body>
</html>