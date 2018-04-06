<?php include 'db.php'; ?>
<?php include 'functions.php' ?>
<?php  criaPokemon(); ?>
<?php include 'header.php'; ?>
    
    <div class="container">
        <div class="col-sm-6">
            <h1>INSERE POKÉMON</h1>
            <form action="createPokemon.php" method="post">
                <div class="form-group">
                <label>Nome do Pokémon</label>
                <input type="text" name="name" class="form-control">   
                </div>  
                
                <div class="form-group">
                <label>Tipo do Pokémon</label>
                <input type="text" name="type" class="form-control">   
                </div>   
                
                <div class="form-group">
                <label>HP</label>
                <input type='range' min="0" max="100" value="0" step='1' 
                 onchange="showValue(this.value)" name="hp" />
                    <span id="range" name="hp">0</span>  
                    
                    <script type="text/javascript">
                        function showValue(newValue) {
                            document.getElementById("range").innerHTML=newValue;
                        }
                    </script>    
                </div>
                
                <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
                
                <?php include "buttons.php"; ?>
            </form>
        </div>    
    </div>

<?php include 'footer.php'; ?>