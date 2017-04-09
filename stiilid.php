<?php
    $texts="Siia tuleb sinu muudetud stiiliga tekst";

    if (isset($_POST['backgroundColor']) && $_POST['backgroundColor']!='') {
        $bg=htmlspecialchars($_POST['backgroundColor']);
    }

    if (isset($_POST['text']) && $_POST['text']!='') {
        $texts=htmlspecialchars($_POST['text']);
    }

    if (isset($_POST['textColor']) && $_POST['textColor']!='') {
        $textCol=htmlspecialchars($_POST['textColor']);
    }

    if (isset($_POST['borderColor']) && $_POST['borderColor']!='') {
        $borderCol=htmlspecialchars($_POST['borderColor']);
    }

    if (isset($_POST['borderWidth']) && $_POST['borderWidth']!='') {
        $borderW=htmlspecialchars($_POST['borderWidth']);
    }

    if (isset($_POST['borderRadius']) && $_POST['borderRadius']!='') {
        $borderR=htmlspecialchars($_POST['borderRadius']);
    }

    if (isset($_POST['borderStyle']) && $_POST['borderStyle']!='') {
        $borderS=htmlspecialchars($_POST['borderStyle']);
    }   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>8. nädal - stiilide muutmine</title>
        <style>
            body {
                background: <?php echo $bg; ?>; 
            }

            #preview {
                color: <?php echo $textCol; ?>; 
                border-color: <?php echo $borderCol; ?>;
                border: <?php echo $borderW; ?>px;
                border-style: <?php echo $borderS; ?>;
                border-radius: <?php echo $borderR; ?>px;
            }
        </style>
    </head>

    <body>
        

        <textarea id="preview" rows="2" cols="25">
            <?php
                echo $texts;
            ?>
        </textarea>
        <br>

        <form method="post" action="" id ="sisend">

        <textarea name="text" form="sisend" rows="2" cols="25" placeholder="Sisesta siia oma tekst"></textarea>

        <p>Taustavärvus <input type="color" name="backgroundColor" value=""></p>
        <p>Tekstivärvus <input type="color" name="textColor" value=""></p>
        <p>Piiroone värvus <input type="color" name="borderColor" value=""></p>
        <p>Piirjoone laius (0-20px) <input type="number" name="borderWidth" min="0" max="20" value=""></p>
        <p>Piirjoone nurga raadius (0-100px) <input type="number" name="borderRadius" min="0" max="100" value=""></p>
        <p>Piirjoone stiil <select name="borderStyle">
            <option value="solid">Solid</option>
            <option value="double">Double</option>
            <option value="dashed">Dashed</option>
            <option value="dotted">Dotted</option>
        </select></p>
        
        <p><input type="submit" name="Muuda tekst"></p>
        </form>
    </body>
</html>
