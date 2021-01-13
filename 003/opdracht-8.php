<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Hoofdstuk-3 op-8</title>
        </head>

        <body>
            <?php
                $kappersagenda = array
                (
                    '9.15' => "Mevrouw Pietersen",
                    '9.30' => "Mevrouw Willems",
                    '9.45' => "",
                    '10.00' => "Paul van den Broek",
                    '10.15' => "Karel de Meeuw",
                    '10.30' => ""
                );

                    print("De volgende momenten zijn nog beschikbaar:<ul>");
                foreach ($kappersagenda as $tijden => $klanten)
                {
                if ($klanten == ""){
                    print("<li>".$tijden."</li>");
                }
                }
                    print("</ul>");
            ?>
        </body>
    </html>