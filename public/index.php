<?php

include './teste.php';

$nome = "Rodrigues";
$logged = false;
$idade = 36;


$dados = ['Walter', 'Renan', 'Charlene'];


/* for($i = 0; $i < count($dados); $i++) {
    echo $i . '=>' . $dados[$i] . "<br>";
} */

/* $i = 0;
while ($i < count($dados)) {
    echo $i . ' ' . $dados[$i] . "<br>";
    $i++;
} */

/* foreach ($dados as $key => $dado) {
    echo $key . '=>' . $dado . "<br>";
} */

/* $soma = function($n1, $n2){
    $result = $n1 + $n2;
    return $result;
};

echo $soma(3, 5); */

/* function teste($name)
{
    return 'Olá, meu nome é: ' . $name;
}

function teste2($callback)
{
    return $callback('Walter');
}

echo teste2('teste'); */

/* class User 
{
    public function __invoke()
    {
        return 'testando';
    }
}

$user = new User;

function teste($callback) {
    return $callback();
}

echo teste($user); */

/* $variavel = 'Walter';

if(isset($variavel)){
    echo "Esta variável existe";
    return;
}
echo "Esta variável não existe"; */


/* setcookie('name', 'Walter', time() + 2 * 24 * 60 * 60);


print_r($_COOKIE['name']); */

/* session_start();

require './teste.php';

 $_SESSION['name'] = 'Walter'; */
