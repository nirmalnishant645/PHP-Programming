<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>While Loop</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>While Loop in PHP</h1>

          <div class="code-content">

            <?php

                $fruits = array('apple', 'orange', 'melon', 'banana', 'pear');

                $i = 0;

                while($i < count($fruits)) {
                    echo ++$i." ".$fruits[--$i]."<br/>";
                    $i++;
                }
            
            ?>
            
          </div>
    </div>

  </body>
</html>