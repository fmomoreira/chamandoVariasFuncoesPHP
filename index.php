  <?php
require_once("funcoes.php");



    $nome = "felipe";

    $imprime = nome($nome);

    $infopessoal =  idade($imprime);

    $dados = moradia($infopessoal);



    echo $dados;

