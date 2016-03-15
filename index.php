<?php include('header.php') ?>


  <div id="startchange"></div>
  <div class="header alt vert img-responsive">
    <article class="introduction">
    <img src="css/photos/selfImage.jpg" id="selfImage" />
      <hgroup>
        <h2><span>Hello</span></h2>
        <h3><span>How's it going? My name is Noah</span></h3>
        <h4><span>I'm a Web Developer</span></h4>
        <h5><span>I work at <a href="http://google.com/" target="_blank">CDK Global</a> (SEA)</span></h5>
        <h6><span>I'm from Seattle, WA</span></h6>
        <h6><span>I love </span><span class="typer"></span></h6>
      </hgroup>
    </article>
    <a class="arrow-wrap" href="#content">
      <h6 id="scroll-text">Check out my stuff <span class="arrow"></span></h6>
      <!--<span class="hint">scroll</span>-->
    </a>
  </div>

  <div class="container" id="content">
    <h1 class="text-center" id="exp">My Experiments</h1>
    <div class="row projectImages">
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/Prep-Car-Image.png">
          <figcaption class="img-title">
            <h5>Prep-Car Web App</h5>
            <p>Prep-Car is a Web App I built for a startup I am currently apart of. PHP, Jquery, JSON, MySQL <a href="https://safe-atoll-65361.herokuapp.com/index.php#">View</a></p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/Salmon-Bay-Image.png">
          <figcaption class="img-title">
            <h5>Salmon Bay Marina</h5>
            <p>This is a site that I built for my marina. I love to sail btw. PHP, Jquery, JSON, MySQL <a href="https://serene-fjord-8357.herokuapp.com/index.php">View</a></p>
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
            <p>This is a site I built for one of my old employees. Long story short, this company builds/refurbishes DPF Filters. PHP, Jquery, JSON, MySQL <a href="https://frozen-stream-9514.herokuapp.com/">View</a></p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/Dealer-Locator-Image.png">
          <figcaption class="img-title">
            <h5>GM Dealer Locator</h5>
            <p>I was having a hard time remembering where all of my accounts were so I whipped this together to easily access all of my accounts. PHP, Jquery, JSON, MySQL <a href="https://github.com/nmkettler/Dealership-Locator">View</a></p>
          </figcaption>
        </figure>
      </div>
    </div>
    <div class="row projectImages">
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/accMenu.png">
          <figcaption class="img-title">
            <h5>Accordian Menu</h5>
            <p>A custom built accordian menu that is mobile friendly. Ready to use on any website. Works in all major browsers. Jquery <a href="#" data-toggle="modal" data-target="#vertAcc">View</a></p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/fast-chat.png">
          <figcaption class="img-title">
            <h5>Fast Chat</h5>
            <p>A chat web application built with PHP. All messages are stored in the MySQL database. PHP, MySQL, JQuery <a href="https://github.com/nmkettler/Fast-Chat-">View</a></p>
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
            <a href="https://github.com/nmkettler"><i class="fa fa-github hov" id="linkIcon"></i></a>
              <p>My Github</p>
        </div>
        <div class="col-md-4">
          <a href="#"><i class="fa fa-file-text-o hov" id="linkIcon"></i></a>
          <p>Online Resume</p>
        </div>
        <div class="col-md-4">
          <a href="https://www.linkedin.com/in/noahkettler"><i class="fa fa-linkedin hov" id="linkIcon"></i></a>
          <p>LinkedIn Profile</p>
        </div>
      </div>
    </div>
  </div>

  <div class="content-space-two" id="commentAffix">
    
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

<!-- Modal -->
<div class="modal fade" id="vertAcc" tabindex="-1" role="dialog" aria-labelledby="accModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="accModal">Collapsing Accordian Menu</h4>
      </div>
      <div class="modal-body" id="accordianModalBody">
        <div id="accordian">
        <ul>
          <li>
            <h3><span class="icon-dashboard"></span>Dashboard</h3>
            <ul>
              <li><a href="#">Reports</a></li>
              <li><a href="#">Search</a></li>
              <li><a href="#">Graphs</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
          </li>
          <!-- we will keep this LI open by default -->
          <li class="active">
            <h3><span class="icon-tasks"></span>Tasks</h3>
            <ul>
              <li><a href="#">Today's tasks</a></li>
              <li><a href="#">Urgent</a></li>
              <li><a href="#">Overdues</a></li>
              <li><a href="#">Recurring</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
          </li>
          <li>
            <h3><span class="icon-calendar"></span>Calendar</h3>
            <ul>
              <li><a href="#">Current Month</a></li>
              <li><a href="#">Current Week</a></li>
              <li><a href="#">Previous Month</a></li>
              <li><a href="#">Previous Week</a></li>
              <li><a href="#">Next Month</a></li>
              <li><a href="#">Next Week</a></li>
              <li><a href="#">Team Calendar</a></li>
              <li><a href="#">Private Calendar</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
          </li>
          <li>
            <h3><span class="icon-heart"></span>Favorites</h3>
            <ul>
              <li><a href="#">Global favs</a></li>
              <li><a href="#">My favs</a></li>
              <li><a href="#">Team favs</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
          </li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>

  <?php include('footer.php') ?>
