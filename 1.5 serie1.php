<h3>Esercizio 1</h3>
<?php

$righe=10;
$colonne=10;
?>

<table border="1">

    <?php for ($a=1;$a<$righe+1;$a++): ?>
    <tr>
        <?php for ($b=1;$b<$colonne+1;$b++): ?>
        <td>
           <?php echo $b*$a ?>
        </td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>
</table>
<hr>
<h3>Esercizio 2</h3>
<?php
$num=100;
for ($j = 2; $j <= $num; $j++) {
    for ($k = 2; $k < $j; $k++) {
        //se ha resto non è primo, quindi passo al prossimo
        if ($j % $k == 0) {
            break;
        }
    }
    if ($k == $j)
        echo "Numero primo : " . $j . "<br>";
}
?>
<hr>
<h3>Esercizio 3</h3>
<?php
for ($i=0;$i<10;$i++) {
    for ($c = 0; $c < 10; $c++) {

        echo "(" . $i . "," . $c . ") ";
        if($c==9)
        echo "<br>";

    }
}
?>
<hr>
<h3>Esercizio 4</h3>
<?php
$proverbio="Tanto va la gatta al lardo che ci lascia lo zampino";
echo strtoupper($proverbio);
echo "<br>";
echo strtolower($proverbio);
echo "<br>";


$prov = str_replace(' ', '', $proverbio);
$result = str_split($prov);

foreach ($result as $key => $value) {
    if ($key % 2 != 0) {
        echo $value;
    }
}
echo "<br>";

$prov = str_replace(' ', '', $proverbio);
$result = str_split($prov);

foreach ($result as $key => $value) {
    if ($key % 2 == 0) {
        echo $value;
    }
}
echo "<br>";
$arr_rimp = array("a","e","i","o");
echo str_replace($arr_rimp,"u",$proverbio);
echo "<br>";
$vocali = array("a","e","i","o","u");
$result = str_split($proverbio);

foreach ($result as $key => $value) {
    if (in_array($value, $vocali))
    {
        $value="<span style=\"color:red;\">$value</span>";
        echo($value);
    }
    else{

        $value="<span style=\"color:blue;\">$value</span>";
        echo($value);
    }
}
echo "<br>";
echo strrev ($proverbio);

?>
<hr>
<h3>Esercizio 5</h3>
<?php

/* quante vocali contiene il testo
b) quante consonanti contiene il testo
c) quante volte appare il carattere “a” nel testo
d) quanti spazi contiene il testo */

$testo= "Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita.";


$vocali = array("a","e","i","o","u");
$aa = array("a");
$arr=str_split($testo);
$voc=0;
$cons=0;
$a=0;
foreach($arr as $key=>$value) {

    if(in_array($value,$aa)){
        $a++;
    }

    if (in_array($value, $vocali)) {
        $voc++;
    }
    else
    {
        $cons++;
    }
}
echo "Numero vocali: ".$voc;
echo "<br>Numero consonanti: ".$cons;
echo "<br>Numero a: ".$a;

$spazi=count(explode(" ",$testo))-1;
echo "<br>Spazi : ".$spazi;
?>
<hr>
<h3>Esercizio 6</h3>


<?php
$numeri=0;
while($numeri<21){
    $num[$numeri]=rand(1,45);
    $numeri++;
}
echo "Numeri: ";
foreach($num as $nr){
    echo $nr." ";
}
//print_r($num);

$occorrenze=array_count_values($num);

$tot=array_sum($occorrenze);
//echo "</br>totale: ".$tot."</br>";
//print_r($occorrenze);

foreach($occorrenze as $key=>$value){
    $perc[$key]=$value/$tot*100;
    echo("Numero ".$key." apparso ".$value." volte.</br>");
}
//print_r($perc);
arsort($perc);
foreach($perc as $key=>$value){
    echo("Numero ".$key." con percentuale ".$value." %.</br>");
}
//echo array_sum($perc);


?>
<hr>
<h3>Esercizio 7</h3>

<?php
$nascita=DateTime::createFromFormat('d-m-Y', '28-06-1976');
$prossimo=DateTime::createFromFormat('d-m-Y', '28-06-2018');
$adesso=new DateTime();
$eta=$adesso->diff($nascita);

$prox=$prossimo->diff($adesso);

echo "Nato il giorno: ". $nascita->format('l')."</br>";

echo "Et&agrave;: ". $eta->y."</br>";
echo "Giorni al prossimo compleanno: ". $prox->days."</br>";

?>



<hr>
<h3>Esercizio 8</h3>

<?php
$docenti=array( '123'=>['Mario','Glub','Locarno'],
                '222'=>['Teresa','Lopar','Bellinzona'],
                '332'=>['Tio','Muzzo','Lugano']
              );

//print_r($docenti);

?>
<table border="1">
    <tr>
        <td>CID</td>
        <td>Nome</td>
        <td>Cognome</td>
        <td>Citt&agrave;</td>
    </tr>

    <?php foreach ($docenti as $cid=>$dati) : ?>
    <tr>
        <td>

            <?php echo $cid ?>
        </td>

        <?php foreach ($dati as $key=>$dato): ?>
            <td>
                <?php echo $dato ?>
            </td>
        <?php endforeach;?>
    </tr>
<?php endforeach;?>
</table>






