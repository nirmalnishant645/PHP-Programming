<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>For-Each Loop</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>For-Each Loop in PHP</h1>

          <div class="code-content">

            <?php

                $fruits = array('apple', 'orange', 'melon', 'banana', 'pear');

                foreach($fruits as $fruit) {
                    echo $fruit."<br/>";
                } 
            
            ?>
            
          </div>
    </div>

  </body>
</html>