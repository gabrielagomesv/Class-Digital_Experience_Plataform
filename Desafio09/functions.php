<?php include "db.php";
    function criaPokemon(){
        global $connection;
        
        if(isset($_POST['enviar'])){
            $pokename = $_POST['name'];
            $tipo = $_POST['type'];
            $hp = $_POST['hp'];
            
            $query = "INSERT INTO pokemon(name, type, hp) VALUES('$pokename', '$tipo', $hp)";
            
            $resultado = mysqli_query($connection, $query);
            
            if(!$resultado){
                die('Não deu certo a inclusão');
            } else {
                echo "Pokémon registrado com sucesso em sua Pokedex!";
            }
            
        }    
    }

    function lePokemon(){
        global $connection;

        $query = "SELECT * FROM pokemon WHERE type ='fogo'";
        $resultado = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($resultado)){
            echo $row['name'];
        }
    }

    function mostraPokemon(){
        global $connection;
        $query = "SELECT * FROM pokemon";
        $resultado = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($resultado)){
            $id = $row['id'];
            echo "<option value='id'>$id</option>";
        }
    }

    function atualizaPokemon(){
        global $connection;

        if(isset($_POST['enviar'])){
            $name = $_POST['name'];
            $type = $_POST['type'];
            $hp = $_POST['hp'];
            $id = $_POST['id'];

            $query = "UPDATE pokemon SET name = '$name', type = '$type', hp = '$hp' WHERE id=$id";
            $resultado = mysqli_query($connection, $query);
    
            if(!$resultado){
                die('Erro ao atualizar!');
            } else {
                echo "Pokémon atualizado com sucesso em sua Pokedex!";
            }
        }
    }

    function deletaPokemon(){
        global $connection;
        
        if(isset($_POST['enviar'])){
            $id = $_POST['id'];

            $query = "DELETE from pokemon WHERE id = $id";
            $resultado = mysqli_query($connection, $query);

            if(!$resultado){
                die('Erro ao deletar!');
            } else {
                echo "Pokémon deletado com sucesso em sua Pokedex!";
            }
        }
    }
   
?>