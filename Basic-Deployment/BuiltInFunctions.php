<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Built-In Functions PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>var_dump, print_r and pre</h1>

          <div class="code-content">

            <?php
                $student = array(
                    'first_name' => 'Nishant',
                    'last_name' => 'Nirmal',
                    'country' => 'India',
                    'age' => 22
                );

                echo "<pre>";
                var_dump($student);
                echo "</pre>";

                echo "<pre>";
                var_dump($student['country']);
                echo "</pre>";

                echo "<pre>";
                print_r($student);
                echo "</pre>";

            ?>
            
          </div>
    </div>

  </body>
</html>