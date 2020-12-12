    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Hoofdstuk-3 op-2</title>
        </head>

        <body>
            <?php
                $bomenimages = array(
                    'boom1.jpg',
                    'boom2.jpg',
                    'boom3.jpg',
                    'boom4.jpg',
                    'boom5.jpg'
                );
                $teller = 1;
                foreach ($bomenimages as $image) {
                    echo '<img src="bomen/' . $image . \' alt="Aap\' .teller">';
                    $teller ++;
                }
            ?>

        </body>
    </html>