<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arrays PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>Arrays</h1>

          <div class="code-content">

            <?php
                $fruits = array('apple', 'orange', 'melon', 'banana'); # $fruits = [] also works the same
                echo $fruits[0];
                array_push($fruits, 'pear'); # Append
                echo "<br/>".$fruits[4];
                unset($fruits[1]); # Remove
                
                echo "<pre>";
                var_dump($fruits);
                echo "</pre>";

                echo $fruits[1]; # Won't print anything, nothing at the 1st index anymore

            ?>
            
          </div>
    </div>

  </body>
</html>