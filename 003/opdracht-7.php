<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Hoofdstuk-3 op-7</title>
            <style>
                img{
                    width: 20px;
                    height: 20px;
                }
                body {
                    font-family: sans-serif;
                    }
                table, tr, td {
                    border: solid 1px white;
                    border-collapse: collapse;
                    }
                td {
                    padding: 10px;
                    }
                td.border {
                    border: solid 1px gray;
                    }
            </style>
        </head>
        <body>
            <table>
                <?php
                    $zwemclubs = array
                    (
                        "De spartelkuikens" => 25,
                        "De waterbuffels" => 32,
                        "Plonsmderin" => 11,
                        "Bommetje" => 23
                    );

                    foreach ($zwemclubs as $clubs => $leden)
                    {
                        $aantal = floor($leden / 5);
                        print '<tr>';
                        print "<td class='border'> $clubs</td>";
                        print "<td class='border'>$leden</td>";
                        print '<td>';
                    for ($i = 0; $i < $aantal; $i++)
                    {
                        echo '<img src="apen/aap2.jpg">';
                    }
                        print '</td>';
                        print '</tr>';

                    }
                ?>
            </table>
        </body>
    </html>