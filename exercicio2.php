<?php
function foiMordido(){
	return mt_rand(0,1);
}
$flag = foiMordido();
if ($flag == 0){
	echo "Joãozinho mordeu o seu dedo !" . "<br>";
}else if ($flag == 1){
	echo "Joaozinho NAO mordeu o seu dedo!" . "<br>";
}
?>