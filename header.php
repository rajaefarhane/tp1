
<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon integration</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<div class="container-fluid mob ">
  <div class="open-btn">
    <button class="open-button" onclick="openForm()"><strong>connection</strong></button>
  </div>
  <div class="login-popup">
    <div class="form-popup" id="popupForm">
      <form action="/action_page.php" class="form-container">
        <h2>Bienvenu</h2>

           <a href="inscription.php" class="t">Note a member? REGISTER</a><br>

           <a href="connection.php" class="t">Call Us Now: 815-123-4567</a>
        <button type="submit" class="btn">s'inscrire</button>
             <button type="submit" class="btn">se connecter</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
      </form>
    </div>
  </div>
</div>
<div class="container-full bande">
 <div class="row">
   <div class="col-lg-8 col-sm-8 ">

       <img src="image/icone.png" class="img-fluid im" alt="Responsive image">
       <a href="inscription.php" class="t">s'inscrire</a>
       <img src="image/icone.png" class="img-fluid i ii" alt="Responsive image">
       <a href="connection.php" class="t">se connecter</a>
       <a href="inscription.php" class="ii" id="to">Note a member? <h6 id="regs">REGISTER </h6></a>
       <a href="info.php" id="tt">Call Us Now: 815-123-4567</a>
    </div>
    <div class="col-lg-4 col-sm-4 align-self-center">
        <a href="http://facboock.com"><img src="image/fac.png" class="img-fluid "id="fbk" alt="Responsive image"><a>
        <a href="http://twiter.com"><img src="image/twiter.png" class="img-fluid "id="twtr" alt="Responsive image"><a>
        <a href="http://email.com"><img src="image/g.png" class="img-fluid "id="email" alt="Responsive image"><a>
        <a href="http://gmail.com"><img src="image/email.png" class="img-fluid " id="emaill" alt="Responsive image"><a>
    </div>
 </div>
</div>

<div class="container-full  ">
  <div class="row">
    <div class="col-lg-4 col-sm-4 ">
           <img src="image/logo.jpg" class="img-fluid logo" alt="Responsive image">
    </div>

<div class="col-lg-8 col-sm-8 align-self-center" >
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbare" href="#">Home</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item active ">
             <a class="nav-link coll" href="destination.php">DESTINATIONS <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link coll" href="criuses.php">CRIUSES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coll" href="spasials.php">SPECIALS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coll" href="holidays.php">HOLIDAYS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coll" href="blog.php">BLOG</a>
          </li>
   </ul>
   <div >
      <a href="recherche.php"><img src="imbo/rech.png" class="img-fluid " id="rech" alt="Responsive image"><a>
  </div>
  </div>
    </nav>
</div>
</div>
</div>

  </head>
  <body >
