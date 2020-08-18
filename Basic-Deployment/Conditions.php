<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conditions PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>Conditions</h1>

          <div class="code-content">

            <?php
                $num_1 = 20;
                $num_2 = 21;

                if($num_1 > $num_2) {
                    echo $num_1." is greater than ".$num_2;
                }
                else if($num_2 > $num_1) {
                    echo $num_2." is greater than ".$num_1;
                }
                else {
                    echo $num_1." is equal to ".$num_2;
                }
            ?>
            
          </div>
    </div>

  </body>
</html>