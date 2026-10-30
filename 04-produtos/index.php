<?php


function formatarPreco(float $valor): string {
    return "R$ " . number_format($valor, 2, ",", ".");
}


$produtos = [
    ["nome" => "Teclado mecânico", "preco" => 249.90,       "estoque" => 12],
    ["nome" => "Mouse sem fio",    "preco" => 79.50,        "estoque" => 30],
    ["nome" => "RX 5090",          "preco" => 9999.00,      "estoque" => 5],
    ["nome" => "Bomba Atômica",    "preco" => 142500000.00, "estoque" => 0],
];

$total = 0;
foreach ($produtos as $item) {
    $total += $item["preco"] * ($item["estoque"] ?? 0);
}
$quantidade = count($produtos);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>

<h1>Lista de Produtos</h1>


<table border="1" cellpadding="6">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Situação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item["nome"]) ?></td>
            <td><?= formatarPreco($item["preco"]) ?></td>
            <td><?= $item["estoque"] ?? 0 ?></td>
            <td><?= ($item["estoque"] ?? 0) > 0 ? "Disponível" : "Esgotado" ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p><?= $quantidade ?> produtos cadastrados. Valor total em estoque: <?= formatarPreco($total) ?></p>

</body>
</html>