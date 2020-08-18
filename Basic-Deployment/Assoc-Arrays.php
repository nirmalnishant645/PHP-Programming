<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Assoc Arrays PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>Associative Arrays</h1>

          <div class="code-content">

            <?php
                $student = array(
                    'first_name' => 'Nishant',
                    'last_name' => 'Nirmal',
                    'country' => 'India'
                );

                echo $student['first_name']." ".$student['last_name']." from ".$student['country'];
            ?>
            
          </div>
    </div>

  </body>
</html>