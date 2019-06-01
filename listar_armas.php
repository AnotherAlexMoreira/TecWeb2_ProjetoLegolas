<?php
    include('conexao.php');
?>
<?php
    include('cabecalho.php');
?>
    <div class="container" id="container-armas">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Armas cadastradas</h2>
            </div>
        </div>
        <div class="row">

            <?php

                $result = mysqli_query($link, "Select * from armas");
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    //popula a página com as armas do banco
            ?>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            
                <div class="jumbotron">
                    <img src="<?php echo $row['tipo_arma']?>" alt="Image" class="img-fluid icones-armas">
                    <div class="unit-1-text">
                        <strong class="text-primary mb-2 d-block text-center">Dano Máximo: <?php echo $row['dano_max']?></strong>
                        <strong class="text-primary mb-2 d-block text-center">Dano mínimo: <?php echo $row['dano_min']?></strong>
                        <h3 class="unit-1-heading text-center"><?php echo $row['nome']?></h5>
                        <h5 class="unit-1-heading text-center"><?php echo $row['descricao']?></h5>
                    </div>
                </div>
            
            </div>
            <?php
                } //fecha o while
            ?>
        </div>
    </div>
</div>
<?php
    include('rodape.php');
?>
