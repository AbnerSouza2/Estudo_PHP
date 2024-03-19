<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php


print_r($_GET);
print_r($_POST);


if(isset($_POST['senha']) and $_POST['senha'] <> "senha123"){
    echo '<br><br>';
    echo 'Senha incorreta! ';
}if(isset($_POST['senha']) and $_POST['senha'] == "senha123"){
    echo '<br><br>';
    echo 'PARABENS, você acertou a senha  ';}


$filename = "teste.txt";
if(!file_exists("teste.txt")){
    $handle = fopen("teste.txt", "w");
} else {
    $handle = fopen("teste.txt", "a");
}

fwrite($handle, ($_POST['senha']));
fwrite($handle, "\n");
fflush($handle);
fclose($handle);

$handle = fopen("teste.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
  
    }
fclose($handle);
?>
</body>
</html>
