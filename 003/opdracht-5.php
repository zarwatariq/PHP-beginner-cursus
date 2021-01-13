<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Hoofdstuk-3 op-5</title>
            <style>
                body{
                    text-align: center;
                }
                img {
                    width: 150px;
                }
                img.green-border {
                    border: solid 2px green;
                }
                img.red-border {
                    border: solid 2px red;
                }
            </style>
        </head>
        <body>
            <?php
                $borderColor = "red";
                $borderColor = "green";
               for ($i = 1; $i <= 9 ; $i++) {
                   if ($i % 2 == 0) {
                   } else {
                   }
                   echo'<img class="' . $borderColor . '-border" src="apen/aap ' . $i . '.jpg"alt="Aap ' . $i . '">';
               }
            ?>
            <img src="003/apen/aap1.jpg">
            <img src="apen/aap1.jpg">
        </body>
    </html>