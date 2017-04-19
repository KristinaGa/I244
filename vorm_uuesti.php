<?php
setcookie("nimi","vaartus", time()+60*10);
$texts="Siia tuleb sinu muudetud stiiliga tekst";

    if (isset($_POST['backgroundColor']) && $_POST['backgroundColor']!='') {
        $bg=htmlspecialchars($_POST['backgroundColor']);
    } else {
        $bg='';
    }  

    if (isset($_POST['text']) && $_POST['text']!='') {
        $texts=htmlspecialchars($_POST['text']);
    } else {
        $texts='';
    }  

    if (isset($_POST['textColor']) && $_POST['textColor']!='') {
        $textCol=htmlspecialchars($_POST['textColor']);
    } else {
        $textCol='';
    }  

    if (isset($_POST['borderColor']) && $_POST['borderColor']!='') {
        $borderCol=htmlspecialchars($_POST['borderColor']);
    } else {
        $borderCol='';
    }  

    if (isset($_POST['borderWidth']) && $_POST['borderWidth']!='') {
        $borderW=htmlspecialchars($_POST['borderWidth']);
    } else {
        $borderW='';
    }  

    if (isset($_POST['borderRadius']) && $_POST['borderRadius']!='') {
        $borderR=htmlspecialchars($_POST['borderRadius']);
    } else {
        $borderR='';
    }  

    if (isset($_POST['borderStyle']) && $_POST['borderStyle']!='') {
        $borderS=htmlspecialchars($_POST['borderStyle']);
    } else {
        $borderS='';
    }  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>10. nädal - vormi taastäitmine</title>
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

        <p>Taustavärvus <input type="color" name="backgroundColor" value="<?php echo $bg ?>"></p>
        <p>Tekstivärvus <input type="color" name="textColor" value="<?php echo $textCol ?>"></p>
        <p>Piiroone värvus <input type="color" name="borderColor" value="<?php echo $borderCol ?>"></p>
        <p>Piirjoone laius (0-20px) <input type="number" name="borderWidth" min="0" max="20" value="<?php echo $borderW ?>"></p>
        <p>Piirjoone nurga raadius (0-100px) <input type="number" name="borderRadius" min="0" max="100" value="<?php echo $borderR ?>"></p>
        <p>Piirjoone stiil <select name="borderStyle">
            <option value="solid" <?php if ($borderS=="solid") echo 'selected="selected"';?>>Solid</option>
            <option value="double" <?php if ($borderS=="double") echo 'selected="selected"';?>>Double</option>
            <option value="dashed" <?php if ($borderS=="dashed") echo 'selected="selected"';?>>Dashed</option>
            <option value="dotted" <?php if ($borderS=="dotted") echo 'selected="selected"';?>>Dotted</option>
        </select></p>
        
        <p><input type="submit" name="Muuda tekst"></p>
        </form>
    </body>
</html>
