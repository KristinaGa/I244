<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"></meta>
    <title>Lilled</title>
    <style>
      .lill {
        border: 2px dotted #ca9fce;
        display: inline-block;
        width: 700px;
        height: 90px;
        background-color: #fffbef;
        margin: 5px;
        padding: 3px;
        font-family:"Arial";
      }

      p {
        margin-top: 7px;
        margin-bottom: 7px;
      }
    </style>
  </head>

  <body>
    <?php
      $lilled = array(
        array("nimetus" => "roos", "varv" => "punane", "lad_keel" => "Rosa", "tykk" => 5,"wiki" => "https://et.wikipedia.org/wiki/Roos"),
        array("nimetus" => "nartsiss", "varv" => "kollane", "lad_keel" => "Narcissus poeticus", "tykk" => 15,"wiki" => "https://et.wikipedia.org/wiki/Nartsiss"),
        array("nimetus" => "sinilill", "varv" => "sinine", "lad_keel" => "Hepatica", "tykk" => 25,"wiki" => "https://et.wikipedia.org/wiki/Sinilill"),
        array("nimetus" => "rukkilill", "varv" => "sinine", "lad_keel" => "Centaurea cyanus", "tykk" => 17,"wiki" => "https://et.wikipedia.org/wiki/Rukkilill"),
        array("nimetus" => "tulp", "varv" => "punane", "lad_keel" => "Tulipa", "tykk" => 35,"wiki" => "https://et.wikipedia.org/wiki/Tulp")
      );
      foreach ($lilled as $lill) {
      include("lill.html");
      }
    ?>

  </body>
</html>