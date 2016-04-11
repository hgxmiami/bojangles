<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thursday Exercise</title>
    </head>
<body>
    <p>
        Hey!!
    </p>
        <?php 

        echo '<p> Tootsie Roll Thursday....Ladies line up!!</p>'; 
    
        $name = 'Hugo';
        $lname = 'Stallone';
        $address = '5656 Skid Row, Planet of Women, FL 33155';
        $phoneNumber1 = '1-800-666-0099';
        $phoneNumber2 = '305-666-9999';
        $description = 'A.W.E.S.O.M.E';
        
        echo '<table border="1">';
        printf('<tr><th>First Name </th><td>%s</td></tr>', $name);
        printf('<tr><th>Last Name </th><td>%s</td></tr>', $lname);
        printf('<tr><th>Address</th><td>%s</td></tr>', $address);
        printf('<tr><th>Phone Number</th><td>%d</td></tr>', $phoneNumber1);
        printf('<tr><th>My Private Number :)</th><td>%d</td></tr>', $phoneNumber2);
        printf('<tr><th>Desctiption</th><td>%s</td></tr>', $description);
        echo '</table>';

        ?>

    </body>

</html>

