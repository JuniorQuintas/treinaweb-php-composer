<?php
require_once('vendor/autoload.php'); // inicializando todos os pacotes instaldos com o composer
use Dompdf\Dompdf; // referencia o namespace Dompdf
// instanciar e usar a classe dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>hello world</h1>'); // conteúdo a ser convertido
$dompdf->setPaper('A4', 'landscape'); // (Opcional) Configure o tamanho e a orientação do papel
$dompdf->render(); // Renderiza o HTML como PDF
$dompdf->stream(); // Envie o PDF gerado para o navegador (baixa o pdf no navegador)
