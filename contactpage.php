<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
       
      <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" > -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="stylesheets/cv.css">
       
    </head>


<body>

<div id="bug-fix">
</div>    

<div id="wrapper">

<div class="container about-cont">




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html"><img src="images/logo1.png" width="30" height="30" class="d-inline-block logo align-top" alt="logo">
  
  </a>
  <span id="initials">GR</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portfolio.html">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">Skills</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactpage.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>


      
<div class="row">
    <div class="col-md-offset-3" id="form_container">
        <h3>Contact Me <span class="lines">//</span></h2> 
        <p> Please send your message below. I'll get back to you at the earliest! </p>
        <form role="form" method="post" action="send.php" id="contact-form">
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="message"> Message:</label>
                    <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name"> Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email"> Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group contact-form">
                    <button type="submit" id="submit-contact" class="btn contact-button btn-lg btn-default pull-right" >Send &rarr;</button>
                </div>
            </div>
        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; "> <h3></h3> </div>
        <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3>Sorry there was an error sending your form.</div>
    </div>
</div>


</div>


    <footer class="footer">
    <div id="contact">
        <h2>Contact <span class="lines">//</span></h2>
        <p>gogashkk@gmail.com<br>
        066 <span class="lines">/</span> 432 <span class="lines">/</span> 926</p>
    </div>
   <!--
copyright
    -->
<div id="copy">
    <p>&copy; 2017 Gordana Rajnjak All Rights Reserved.</p>
</div>

</footer>

</div>

       <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>     
        <script src="/js/contact.js"></script>
        
    </body>
</html>