<?php
// Função para calcular a média de um vetor de notas
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    if ($quantidade > 0) {
        return $soma / $quantidade;
    } else {
        return 0;
    }
}

// Vetor de alunos e suas notas
$alunos = array(
    array("nome" => "João", "notas" => array(7.5, 8.0, 6.5)),
    array("nome" => "Maria", "notas" => array(6.0, 7.0, 8.0)),
    array("nome" => "Pedro", "notas" => array(5.5, 6.0, 6.5))
);

// Exibição das notas e médias
foreach ($alunos as $aluno) {
    echo "<h2>{$aluno['nome']}</h2>";
    echo "<p>Notas: " . implode(", ", $aluno['notas']) . "</p>";
    $media = calcularMedia($aluno['notas']);
    echo "<p>Média: $media</p>";
}
?>
