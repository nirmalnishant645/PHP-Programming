<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Template PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>Template Tags in PHP</h1>

          <div class="code-content">

            <?php

              function the_title() {
                  echo "Title Name";
              }

              function the_date() {
                  echo "dd mm yyyy";
              }

            ?>

            <h2><?php the_title(); ?></h2>
            <p><?php "Publushed on ".the_date();?></p>
            
          </div>
    </div>

  </body>
</html>