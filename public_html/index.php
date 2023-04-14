<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bal">
	  <meta name="keywords" content="Tor,Hidden Service,Heroku,Nodejs,Php,Host Hidden Servics by me">
  	<meta name="author" content="James">
    <title>Tor Hidden Service By JAMES</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Tor Hidden Service By</span>  JAMES 😎</h1>
        </div>
        </nav>
      </div>
    </header>

    <section id="boxes">
      <div class="container">
        <h2><b>Welcome To The Landing Page</b></h2>
        
      </div>
    </section>
    <section id="boxes">
      <div class="container">
          <h2><b>Onion Link</b></h2>
          <?php
          if (file_exists(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname')) {
              $output = file_get_contents(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname');
              echo "Congratulation's 🥳🥳<br>THIS application is over tor <br>Here is MY Onion Link <a href=http://$output>$output</a>";
          } else {
              $output = "No domain";
              echo '<p>Something went wrong<br>Refer to  Github Repository <br><a href="https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme">https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme</a></p>';
              echo '<p>Or raise a issue at <br> <a href="https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme">https://github.com/sumithemmadi/tor-hidden-service-on-heroku/issues</a></p></br>';
          }
          ?>
      </div>
    </section>
    
    <footer>
      <p>Tor Hidden Service By JAMES 😎, Copyright &copy; 2023</p>
    </footer>
  </body>
</html>
