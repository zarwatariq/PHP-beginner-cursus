<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Hoofdstuk-3 op-3</title>
            <style>
                div#kerstboom {
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div id="kerstboom">
                <?php
                    for ($i = 1 ; $i <= 30 ; $i++ ){
                        echo '<div class ="row">';
                    for ($j = 0; $j < $i ; $j++ ) {
                        echo '*';
                    }
                        echo "</div\n>";
                    }
                ?>
            </div>
        </body>
    </html>