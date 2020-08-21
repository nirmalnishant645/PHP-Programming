<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Standard Functions</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>Standard Functions in PHP</h1>

          <div class="code-content">

            <?php

                $fruits = array('apple', 'orange', 'melon', 'banana', 'pear');

                echo count($fruits)."<br/>";

                $name = "Nishant Nirmal";
                $name_without_space = str_replace(' ', '', $name);

                echo strlen($name)."<br/>";
                echo strlen($name_without_space)."<br/>";

                echo strtoupper($name)."<br/>";
                echo strtolower($name)."<br/>";

                $password = "abcd";

                if(strlen($password) < 6) {
                    echo "Password is weak.<br/>";
                }
                else {
                    echo "Password is strong.<br/>";
                }
            
            ?>
            
          </div>
    </div>

  </body>
</html>