<?php include 'db.php'; ?>
<?php include 'functions.php' ?>
<?php deletaPokemon() ?>
<?php include 'header.php'; ?>
    
    <div class="container">
        <div class="col-sm-6">
            <h1>Deleta POKÉMON</h1>
            <form action="deletePokemon.php" method="post">
              <div class="form-group">
                <select name="id"> 
                  <?php 
                      mostraPokemon();
                  ?>
                </select>
              </div>       
                <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
                
                <?php include "buttons.php"; ?>
            </form>
        </div>    
    </div>

<?php include 'footer.php'; ?>