<?php include('header.php') ?>


  <div id="startchange"></div>
  <div class="header alt vert img-responsive">
    <img src="css/photos/selfImage.jpg" id="selfImage" />
    <h2>Hello!</h2>
    <p class="myDesc">My name is Noah Kettler and I am currently a Freelance Web Developer. Feel free to check out my site and the projects I have done!</p>
    <a class="arrow-wrap" href="#content">
      <span class="arrow"></span>
      <!--<span class="hint">scroll</span>-->
    </a>

  </div>

  <div class="container" id="content">
    <h1 class="text-center" id="exp">My Experience</h1>
    <div class="row projectImages">
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/Prep-Car-Image.png">
          <figcaption class="img-title">
            <h5>Prep-Car Web App</h5>
            <p>Prep-Car is a Web App I built for a startup I am currently apart of. PHP, Jquery, JSON, MySQL </p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/Salmon-Bay-Image.png">
          <figcaption class="img-title">
            <h5>Salmon Bay Marina</h5>
            <p>This is a site that I built for my marina. I love to sail btw. PHP, Jquery, JSON, MySQL</p>
          </figcaption>
        </figure>
      </div>
    </div>
    <div class="row projectImages">
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/FSX-Image.png">
          <figcaption class="img-title">
            <h5>FSX</h5>
            <p>This is a site I built for one of my old employees. Long story short, this company builds/refurbishes DPF Filters. PHP, Jquery, JSON, MySQL </p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/Dealer-Locator-Image.png">
          <figcaption class="img-title">
            <h5>GM Dealer Locator</h5>
            <p>I was having a hard time remembering where all of my accounts were so I whipped this together to easily access all of my accounts. PHP, Jquery, JSON, MySQL </p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
  <!--/container-->
  <div class="content-space-one">
    <div class="container-fluid">
      <div class="row text-center" id="linkIconGroup">
        <div class="col-md-4">
            <a href="#"><i class="fa fa-github hov" id="linkIcon"></i></a>
              <p>My Github</p>
        </div>
        <div class="col-md-4">
          <a href="#"><i class="fa fa-file-text-o hov" id="linkIcon"></i></a>
          <p>Online Resume</p>
        </div>
        <div class="col-md-4">
          <a href="#"><i class="fa fa-linkedin hov" id="linkIcon"></i></a>
          <p>LinkedIn Profile</p>
        </div>
      </div>
    </div>
  </div>

  <div class="content-space-two">
    
      <form action="leaveComment.php" class="formcomment form-plat" method="post">
        <h2 class="formcomment-heading">Contact Me</h2>
        <label for "inputName">Name:</label> 
          <input type="text" name="uname" class="form-control" id="nameInput"/>
        <label for="inputEmail">Email:</label> 
          <input type="text" name="uemail" class="form-control" id="emailInput"/>
        <label for="inputComment">Comment:</label> 
          <textarea type="text" name="ucomment"class="form-control" rows="5" id="comment"></textarea>         
        <div class="submitBox">
          <input type="submit" id="commentSubmit"class="btn btn-default"/>
        </div>
      </form>
  </div>



  <?php include('footer.php') ?>
