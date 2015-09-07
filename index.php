<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Allow zooming on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Model's Guide is a website created by Devon Yarbrough for GIT class.">

    <title>A Model's Guide</title>
    <!-- Linking Bootstrap file, but no css is used in assignment yet-->
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>

  <body>
    <!-- I know we're not supposed to have divs but I need for bootstrap! :) -->
    <div class ="container-fluid">
      <!-- Linking to header file -->
      <?php include 'header.php'; ?>
    <nav class ="navbar col-md-12"> 
      <ul>
        <li><a href="eating.html">Eating</a></li>
        <li><a href="exercising.html">Exercising</a></li>
        <li><a href="modeling.html">Modeling</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>


    <section>
      <article class="col-md-4">
        <p> Hey Text here! </p>
      </article>
      <article class="col-md-4">
        <p> Hey Text here! </p>
      </article>
      <article class="col-md-4">
        <p> Hey Text here! </p>
      </article>
    </section>
    <footer> Here's my footer</footer>
</div>
  </body>
</html>