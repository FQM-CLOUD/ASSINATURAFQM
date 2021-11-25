<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // $nome = "elias mendonca lisboa";
    // $funcao = "estagiario";
    // $numero = "(21) 2122-6272";
    // $endereco = "|
    // Av. José Silva de Azevedo Neto, 200
    // Condomínio O2 - Bloco I - 1o Andar
    // Barra da Tijuca - Rio de Janeiro - RJ CEP: 22775-056
    // .
    // Uma empresa do FQM Grupo." ;

    // echo 
    // "{$nome}
    // {$funcao}
    // .
	// {$numero} |
    
    // .
    // Uma empresa do FQM Grupo." ;
    foreach ($_POST as &$value) {
        echo " todos os valores captirados com sucesso {$value}";

    }
    ?>
</body>
</html>
<!-- 
    "Elias Mendonca Lisboa
    Estagiario
    .
	 	
    (21) 2122-6272 |
    Av. José Silva de Azevedo Neto, 200
    Condomínio O2 - Bloco I - 1o Andar
    Barra da Tijuca - Rio de Janeiro - RJ CEP: 22775-056
    .
    Uma empresa do FQM Grupo." -->