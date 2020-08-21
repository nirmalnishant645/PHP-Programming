<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User-Defined Functions</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>User-Defined Functions in PHP</h1>

          <div class="code-content">

            <?php

                function say_hello() {
                    echo "Hello World!<br/>";
                }

                say_hello();

                function sum() {
                    echo 2 + 2 ."<br/>";
                }

                sum();

                function say_hello_custom($name) {
                    echo "Hello ".$name.".<br/>";
                }

                say_hello_custom('Nishant');
                say_hello_custom('Sachin');
                say_hello_custom('Dhoni');

                function sum_custom($num1, $num2) {
                    echo $num1 + $num2."<br/>";
                }

                sum_custom(2, 3);
                sum_custom(4,7);
                sum_custom(8,-3);
            
            ?>
            
          </div>
    </div>

  </body>
</html>