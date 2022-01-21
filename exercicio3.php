<?php
function cortarExtencoes($arquivo){
    $arq = new SplFileInfo($arquivo);
    return ".". $arq->getExtension();
}
$arrayArquivos  = ['music.mp4', 'video.mov', 'imagem.jpeg'];
$arrayExtencoes = array_map('cortarExtencoes', $arrayArquivos);
//ordeno alfab
sort($arrayExtencoes);

foreach ($arrayExtencoes as $clave => $valor) {
    echo $clave+1 . " ". $valor . "<br>";
}
//imprimo
//print_r($arrayExtencoes);

?>