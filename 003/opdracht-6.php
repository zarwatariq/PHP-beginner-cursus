<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Hoofdstuk-3 op-6</title>
        </head>

        <body>
            <?php
            define("FARE", 10);
            define("SENIOR_AGE" , 65);
            define("SENIOR_DISCOUNT", 50);
            define("JUNIOR_AGE" , 12);
            define("JUNIOR_DISCOUNT" , 50);
            define("KIDS_AGE" , 3);
            define("KIDS_DISCOUNT" , 100);

            echo "<table>\n";
            for ($i = 0 ; $i <= 80 ; $i++)
            {
                $age = $i;
                if ($age >= SENIOR_AGE) {
                    $price = FARE * ((100 - SENIOR_DISCOUNT) / 100);
                } else if ($age < KIDS_AGE) {
                    $price = FARE * ((100 - KIDS_DISCOUNT) / 100);
                } else if ($age <= JUNIOR_AGE) {
                    $price = FARE * ((100 - JUNIOR_DISCOUNT) / 100);
                } else {
                    $price = FARE;
                }
                echo '<tr><td>Iemand van ' . $age . ' betaalt ' . $price . "euro.</td></tr>\n";
            }
            echo "</table>";
            ?>
        </body>
    </html>