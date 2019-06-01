<?php
    include('cabecalho.php');
    $link = mysqli_connect("localhost", "root", "","bancolegolas") or die (mysqli_error);

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $dano_max = $_POST['danomax'];
        $dano_min = $_POST['danomin'];
        $descricao = $_POST['descricao'];

        switch ($_POST['tipo']) {
            case "Escudo":
                $tipo_arma = "img/2.png";
            break;
            case "Espada":
                $tipo_arma = "img/3.png";
            break;
            case "Arco e Flecha":
                $tipo_arma = "img/1.png";
            break;
            case "Machado":
                $tipo_arma = "img/4.png";
            break;
            }
        
        if(mysqli_query($link, "Insert into armas(nome, dano_min, dano_max, descricao, tipo_arma) 
                                values ('".$nome."', 
                                '".$dano_min."',
                                '".$dano_max."',
                                '".$descricao."',
                                '".$tipo_arma."')")){
            ?>
            <p class="alert-sucess">A arma <?=$nome?>, foi cadastrada com sucesso!</p>
            <?php

        }else{
            ?>
                <p class="alert-danger">A arma <?=$nome?>, não foi cadastrada, tente novamente!</p>
            <?php
        }
    }
include('rodape.php');
?>
