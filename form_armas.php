
<?php
    include('cabecalho.php')
?>

<main>
    <div class="container" id="form">
        <form method="POST" action="cadastrar_armas.php">
            </br></br></br>
            <fieldset>
                <label >Nome da Arma</label>
                <input type="text"  name="nome" class="form-control">   
                <label>Dano Máximo</label>
                <input type="text" name="danomax" class="form-control">
                <label >Dano Mínimo</label>
                <input type="text" name="danomin" class="form-control">
                
            </fieldset>
            <fieldset>
                <label>Tipo da Arma</label>
                <select name ="tipo" class="form-control">
                    <option selected>Escolha...</option>
                    <option> Escudo </option>
                    <option> Espada </option>
                    <option> Arco e Flecha</option>
                    <option> Machado </option>
                </select>
            </fieldset>
            <label for="mensagem">Descrição da Arma</label>
            <textarea class="form-control" id="mensagem" name="descricao" cols="60" rows="10" placeholder="Uma breve descrição da arma..."></textarea>
            </br>
            <button  class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
            </br></br></br>
        </form>
    </div>
</main>

<?php
    include('rodape.php')
?>