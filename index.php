<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Floating window with tabs</title>

<style>
/*
This defines the workspace where i place the demo.
*/
#container {
    text-align: left;
    background: #FFF;
    width: 865px;
    margin: 20px auto;
    padding: 20px;
    border-left: 1px solid #CCC;
    border-right: 1px solid #CCC;
    -moz-box-shadow: 0px 0px 10px #BBB;
    -webkit-box-shadow: 0px 0px 10px #BBB;
    box-shadow: 0px 0px 10px #BBB;
}
</style>

</head>
<body>


<div id="container">
    <?php
        if(isset($_POST["sending"])){
            
          echo '  
                   
                   <img id="imgFinal" src="bot.php?&text='.$_POST["text"].'" />



                ';
            

        }
    ?>


    <form name="formulario" action="bot.php" method="post" class="contactoFormulario">
        <div class="caja"><input type="text" name="text" />Imagen del Producto</div>
                           
        <button class="botonFormulario" type="submit" name="Submit" value="Enviar" />Generate image</button>
        <input type="hidden" name="sending" value="yes" />
    </form>
</div>

</body>
</html>