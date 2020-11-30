<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Hoofdstuk-3 op-1</title>
            <style>
                img{
                    display: table-row;
                }
            </style>
        </head>

        <body>
            <?php
                for ( $i = 1; $i <= 10 ; $i++){
                echo '<img src="apen/aap1 ' .$i. '.jpg">';
                }
            ?>
        </body>
    </html>