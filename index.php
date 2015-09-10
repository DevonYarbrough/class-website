<!DOCTYPE html>


<!-- So far the privacy and index pages are complete. 
All pages will pull in the header.html and footer.html using php.
When I start to work on the css I'll create a new file on top of the bootstrap
framework in order to override styling and easily show everything that I've changed/added.

I might try to place all the posts inside a folder and then pull them in using a database or php
but for now I'll just add them individually for each page
-->

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Allow zooming on mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A Model's Guide is a website created by Devon Yarbrough for GIT class.">

  <title>A Model's Guide</title>
  <!-- Linking Bootstrap file, but css(mostly) hasn't been coded yet-->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Adding Kepley for headings and Azo Sans for body from TypeKit-->
  <script src="https://use.typekit.net/iib8zqj.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body class ="container-fluid">
  <!-- Linking to header file -->
  <?php include 'header.html'; ?>

  <main role="main">
    <section>
      <article class="col-md-4">
        <h2> Types of Modeling </h2>
        <img src="images/runway.jpg" alt="Runway Models" style="width:400px; height:auto;" class="img-responsive center-block">
        <p> Where to begin your modeling career? First, figure out what type of modeling you want to do. Commercial,
          fashion, editorial, runway, or glamour. </p>
          <ul>
            <li> Commercial: Photoshoots for commercial clothing stores like Old Navy, Dillards, etc... You don't
              have to be as tall to be a commercial model. </li>
            <li> Fashion: Think magazines. Fashion models are taller, 5'10 or above, and have a more 'exotic' look. </li>
            <li> Runway: Walking the runway is the modeling dream. Runway models are usually at or above
              5'10/5'11 </li>
            <li> Glamour: Glamour modeling is more 'sexy' and 'alluring'. There won't be much info on glamour
                modeling here. </li>
          </ul>
        <p>
          Then, research various agencies in you area. It's always best if you live in a big city, although that isn't
          required. There are plenty of models who travel several hours to attend a shoot               Finally, realize what you're signing up for. Modeling isn't glitz and glamor all the time. The industry is riddled
          with drugs and sexual abuse, but if you keep your values close and stay focused, you'll do just fine. If you
          think you want to do one of the above, read more Physical Requirements. </p>
      </article>
      <article class="col-md-4">
        <h2> Modeling Requirements </h2>
        <img src="images/candice.jpeg" alt="Candice Modeling" style="width:400px; height:auto;" class="img-responsive center-block">
        <p> Do you have what it takes to be a model? For fashion, the requirements are strict, although there a exceptions. </p>
                  <ul>
                    <li> At least 5'8 </li>
                    <li> No taller than 6'2 </li>
                    <li> Measurements around 34/24/34 (Bust/Waist/Hips) </li>
                    <li> Younger than 24 </li>
                  </ul>
                  <p>If you meet these requirements, congratulations! Your odds of getting signed have just increased-fold. If you
                    didn't, there's hope yet. You can still do commercial modeling or plus sized modeling. Please note that these
                    two industries are competitive, but if you have what it takes, you could still earn some big bucks.
                    Meet all of the above? Click here for how to contact agencies.
                  </p>
      </article>
      <article class="col-md-4">
        <h2> Contacting Agencies </h2>
        <img src="images/before_models.jpg" alt="Polaroid Models" style="width:400px; height:auto;" class="img-responsive center-block">
        <p>The first big step into the modeling world is contacting agencies. Agencies run your career for you by
         scheduling shows, shoots, meetings, and anything else that'll make you a star. You can try googling
         "modeling agencies" to locate some in your area.
         The key to landing a good agency is to submit to as many as possible. Then, if they call to schedule a
         meeting, you get to pick the best one out of the group. Also, the more agencies you submit to, the more
         likely at least one will respond.
         </p>
         <h3>What to submit?</h3>
         <p>Each agency has their own requirements for submitting photos. Some want it through mail, some email, and
         some have online forms. Regardless, you'll usually need a few photos.
         You do NOT need to get professional photos done. In fact, many agencies prefer casual, no makeup shots
         taken at home. Get a friend (or a camera that can take delayed shots), find a white/blank wall, and start
         snapping away. Usually you will only need to send two or three photos. For good measure, taking these
         shots will cover almost any agency requirements:
         </p>
           <ul>
             <li> Full front, smiling </li>
             <li> Full front, unsmiling </li>
             <li> Full profile (where you are facing 90 degrees away from the camera) </li>
             <li> Full back </li>
             <li> 3/4 front (head to knees) </li>
             <li> Headshot, smiling </li>
             <li> Headshot, unsmiling </li>
             <li> Profile headshot, smiling </li>
             <li> Profiling headshot, unsmiling </li>
            </ul>
          <p>Some agencies want you to be wearing just your bathing suit. Do not feel obligated to do it, because if they
           like what they see, bathing suit or no, they will most probably call you in for a meeting. In this industry, it is
           vital to only do what you are comfortable with, and it's never too late to start early.
          </p>
      </article>
    </section>
  </main>
<?php include 'footer.html'; ?>
</body>
</html>