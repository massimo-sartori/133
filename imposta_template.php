<?php
//es1/////////////////////////////////////////////////7
$temp=file_get_contents("template.html"); 

$temp=str_replace('{titolo}','Benvenuto',$temp);
if(date('H'>=12)){
	$temp=str_replace('{sfondo}','blue',$temp);
}
else{
	$temp=str_replace('{sfondo}','green',$temp);
}

$temp=str_replace('{nome}','Massimo',$temp);
echo $temp;

///es2////////////////////////////////////////////////////
$nome_file="home.html";
if($puntatore = fopen($nome_file, "w")){ 
	$totale = fwrite($puntatore, $temp); 
}
else{ 
	 echo("Impossibile aprire il file $nome_file in scrittura");
} 




?>
