<form>
    <input type="text" name="nome">
    <input type="date" name="data">
    <input type="submit" value="Enviar">

</form>

<?php
if(isset($_GET)) {
              
    foreach ($_GET as $key => $value){
        echo '<p>Nome do campo: ' .$key. '</p>';
        echo '<p>Valor q está no campo: ' .$value. '</p>';
    }
  
}
?>
