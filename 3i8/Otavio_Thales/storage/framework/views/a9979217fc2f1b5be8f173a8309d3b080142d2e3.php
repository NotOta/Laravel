<?php

$cor_da_tinta= $_POST['tinta'];
$espessura_da_linha= $_POST['espessura'];
$comprimento_da_escrita= $_POST['escrita'];
$material_do_corpo= $_POST['material'];
$peso= $_POST['peso'];

$especificacoes = [
    'cor_da_tinta' => 'Azul',
    'espessura_da_linha' => 0.7,
    'comprimento_da_escrita' => 500,
    'material_do_corpo' => 'Plástico reciclável',
    'peso' => 10
];

$resultados_dos_testes = [
    'cor_da_tinta' => $cor_da_tinta,
    'espessura_da_linha' => $espessura_da_linha,
    'comprimento_da_escrita' => $comprimento_da_escrita,
    'material_do_corpo' => $material_do_corpo,
    'peso' => $peso
];

function validarEspecificacoes($especificacoes, $resultados_dos_testes) {
    foreach ($especificacoes as $especificao => $valor){
        if ($resultados_dos_testes[$especificacoes] != $valor){
            return "Falha na validação: A especificação '{$especificao}'
            deveria ser '{$valor}', mas o resultado foi'
            {$resultados_dos_teste[$especificao]}'";
        }
    }
    return "Validação bem-sucedida: O produto atende a todas as especificações.";
}

$mensagem = validarEspecificacoes($especificacoes, $resultados_dos_teste);
echo $mensagem;
?><?php /**PATH E:\ThalesDURA e OtaTREMBO\3i8\Otavio_Thales\resources\views/topo.blade.php ENDPATH**/ ?>