<?php
echo("VARIÁVEIS<BR>");
$nome = "Alex";
echo $nome;
var_dump($nome);
unset($nome);
echo "<br>";
if(isset($nome)){
	echo($nome);
}
else{
	echo("Var não definada");
}
echo("<BR><BR>");

echo("<BR>CONCATENAÇÃO<BR>");
$nome = "Alex";
echo("Nome : " . $nome);
?>