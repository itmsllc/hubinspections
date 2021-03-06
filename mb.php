<?php
    require_once 'header.php';

    if(!$loggedin) die();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Computerized Inspection System</title>
        <style type="text/css">
            body.back {background: lightblue}
            h1 {text-align: center}
            h2 {text-align: center}
            h3.ital {font-style: italic}
            p {text-align: center}
        </style>
    </head>
    <body class="back">
        <h2>Computerized Inspection System</h2>
        <p style="text-align:right"><a href="logout.php">Log out</a></p>
        <h1>Main Building</h1>
        <h3 class="ital" align="center">&copy; Isabel Molines</h3>
        <h2>Inspection General Information</h2>
        <form action="cart.php" method="POST">
            <?php
            session_start();
            //echo "Old session ID: ".session_id().".<br>";
//            session_destroy();
            //echo "Old session destroyed.<br>";
//            session_start();
            //echo "New session ID: ".session_id()." created.<br>";
            $date_array = getDate();
            echo "<p><strong>Today's date:  ".$date_array['weekday'].", ".$date_array['month']." ".$date_array['mday'].", ".$date_array['year']."</strong></p>";
            ?>              
            <p><strong>Date room inspected (yyyy-mm-dd): </strong><br>
                <input type="text" name="inspdate" value="" /></p>
            <p><strong>Room number: </strong><br>
                <input type="text" name="room" value="" /></p>
            <p><strong>Room status: </strong><br>
                <select name="status">
                    <option>Vacant clean</option>
                    <option>Occupied clean</option>
                </select></p>
            <p><strong>Date room cleaned (yyyy-mm-dd): </strong><br>
                <input type="text" name="cleandate" value="" /></p>
            <p><strong>Manager: </strong><br>
                <select name="manager">
                    <option>Zuleika Pinto</option>
                    <option>Butti Farra</option>
                    <option>Chi Chi</option>
                </select></p>
            <p><strong>Supervisor: </strong><br>
                <select name="supervisor">
                    <option>Isabel Molines</option>
                    <option>Bobbie</option>
                    <option>Adelita</option>
                     <option>Laptop 2</option>
               </select></p>
            <p><strong>GRA: </strong><br>
                <select name="gra">
 
                    <option>Aida X Y Tang (Omni - Self-inspector)</option>	   
                    <option>Angelie</option>	   
                    <option>Aurelien (Expert)</option>	   
                    <option>Bety Chavez</option>	   
                    <option>Brenda</option>	   
                    <option>Carlin</option>	   
                    <option>Carline</option>	   
                    <option>Carmelita (Omni)</option>	   
                    <option>Carmen (Expert)</option>       
                    <option>Carole (Omni)</option>	   
                    <option>Carolyn</option>	   
                    <option>Danielle (Expert - Self-inspector)</option>	   
                    <option>Eduina Rodriguez (Omni - Self-inspector)</option>	   
                    <option>Eileen (Omni)</option>       
                    <option>Eira Sanchez (Omni)</option>	   
                    <option>Elaine (Omni)</option>       
                    <option>Elizee (Omni)</option>       
                    <option>Erika Yanez</option>	   
                    <option>Filomena Barcellos (Omni - Self-inspector)</option>	   
                    <option>García (Expert)</option>	   
                    <option>Georgina (Expert)</option>       
                    <option>Guerlin</option>	   
                    <option>Guerline Jules (Omni - Self-inspector)</option>	   
                    <option>Guerline T (Omni - Self-inspector)</option>
                    <option>Janeth</option>	   
                    <option>Jasmatie Singh (Omni)</option>	   
                    <option>Jeanty</option>	   
                    <option>Jessica</option>	   
                    <option>Joanna Rodriguez (Omni)</option>	   
                    <option>Joaquina Gómez (Expert - Self-inspector)</option>	   
                    <option>Josebe (Expert - Self-inspector)</option>	   
                    <option>Josefina</option>	   
                    <option>Joseph</option>	   
                    <option>Ketty</option>                   
                    <option>Laveirne (Expert)</option>
                    <option>Levone</option>	 
                    <option>Lilia (Omni - Self-inspector)</option>	   
                    <option>Ludmyla</option>       
                    <option>Luisa</option>	   
                    <option>M. Eloise</option>	   
                    <option>M. Jerowe</option>	   
                    <option>M. Taipe (Omni)</option>       
                    <option>Ma. Fontaine</option>	   
                    <option>Magalie (Omni)</option>
                    <option>Maria Barrera (Omni - Self-inspector)</option>
                    <option>Maria Isabel Bernal (Expert)</option>	   
                    <option>Maria Jerome</option>	   
                    <option>Maricel (Omni - Self-inspector)</option>	   
                    <option>Marie Alcinma (Omni)</option>	   
                    <option>Marie St. Elise</option>	   
                    <option>Marlene (Omni - Self-inspector)</option>	   
                    <option>Melanie (Omni - Self-inspector)</option>	   
                    <option>Myrtha (Omni - Self-inspector)</option>	   
                    <option>Monica (Expert)</option>	   
                    <option>Nanal</option>	   
                    <option>Natalia</option>	   
                    <option>Pamela (Omni)</option>       
                    <option>Paola Sanchez (Expert - Self-inspector)</option>	   
                    <option>Paulette</option>	   
                    <option>Rose (Expert)</option>
                    <option>St. Amen (Omni)</option>	   
                    <option>Tamara (Expert)</option>	   
                    <option>Tereza</option>	   
                    <option>Valerie Charles (Omni - Self-inspector)</option>	   
                    <option>Valia (Expert)</option>	   
                    <option>Ver�nica Zacar�as (Expert - Self-inspector)</option>	   
                    <option>Winnie (Omni - Self-inspector)</option>	   
                    <option>Yeanty (Expert)</option>       
                    <option>Yelena (Omni)</option>       
                    <option>Yelnick (Expert)</option>	   
                    <option>Yesenia</option>	   
                    <option>Yube</option>	   
                    <option>Yum Wei (Omni)</option>	 
               </select></p>
                   
            <p><input type="submit" value="Proceed to Cart Set-up" /></p>
        </form>
    </body>
</html>
