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
    <div class="row projectImages">
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/calcImage.png">
          <figcaption class="img-title">
            <h5>Specials Calculator</h5>
            <p>This calculator is primarily for a web app where the user can subtract vehicle specials. Javascript Jquery <a href="#" data-toggle="modal" data-target="#calcM">View</a></p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-6">
        <figure class="gallery-item">
          <img src="css/photos/comingSoon.png">
          <figcaption class="img-title">
            <h5>Coming Soon!</h5>
            <p>Stay tuned for some of my upcoming projects!</p>
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
      <input type="text" name="uname" class="form-control" id="nameInput" />
      <label for="inputEmail">Email:</label>
      <input type="text" name="uemail" class="form-control" id="emailInput" />
      <label for="inputComment">Comment:</label>
      <textarea type="text" name="ucomment" class="form-control" rows="5" id="comment"></textarea>
      <div class="submitBox">
        <input type="submit" id="commentSubmit" class="btn btn-default" />
      </div>
    </form>
  </div>

  <!-- Menu Modal -->
  <div class="modal fade" id="vertAcc" tabindex="-1" role="dialog" aria-labelledby="accModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="accModal">Collapsing Accordian Menu</h4>
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

  <!--Calculator Modal-->

  <div class="modal fade" id="calcM" tabindex="-1" role="dialog" aria-labelledby="calcModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="calcModal">Collapsing Accordian Menu</h4>
        </div>
        <div class="modal-body" id="accordianModalBody">
          <div id="calculator">
            <div class="title">
              <h6>Specials Calculator</h6>
            </div>
            <div class="top">
              <span class="clear">C</span>
              <div class="screen"></div>
            </div>

            <!--Operators and other keys-->
            <div class="keys">
              <span onkeydown="">7</span>
              <span>8</span>
              <span>9</span>
              <span class="operator">+</span>
              <span>4</span>
              <span>5</span>
              <span>6</span>
              <span class="operator">-</span>
              <span>1</span>
              <span>2</span>
              <span>3</span>
              <span class="operator">÷</span>
              <span>0</span>
              <span>.</span>
              <span class="eval">=</span>
              <span class="operator">x</span>
            </div>
            <script type="text/javascript">
              $(document).ready(function() {
                //Get all keys from the document
                var keys = document.querySelectorAll('#calculator span');
                var operators = ['+', '-', 'x', '÷'];
                var decimalAdded = false;

                //Add onClick event to all keys and perform operations
                for (var i = 0; i < keys.length; i++) {
                  keys[i].onclick = function(e) {
                    //Get input and button values
                    var input = document.querySelector('.screen');
                    var inputVal = input.innerHTML;
                    var btnVal = this.innerHTML;

                    //Append the key v3alues (btnValue) to the input string and use js eval function for result
                    //If clear key is pressed, erase everything
                    if (btnVal == 'C') {
                      input.innerHTML = "";
                      decimalAdded = false;
                    }
                    //if eval key is pressed, calculate and display it
                    else if (btnVal == '=') {
                      var equation = inputVal;
                      var lastChar = equation[equation.length - 1];

                      //Replace all instances of X and divide with * and /. Can be done using regex and 'g' tag which repalces all instances of matche charectar/substring
                      equation = equation.replace(/x/g, '*').replace(/÷/g, '/');

                      //Check last character of equation. If it's operator or decimal, remove it
                      if (operators.indexOf(lastChar) > 1 || lastChar == '.') {
                        equation.replace(/.$/, "")
                      }

                      if (equation)
                        input.innerHTML = eval(equation);

                      decimalAdded = false;
                    }

                    //Fix issues  for consecutive added operators, equation cant start from an operator except - no more than 1 dec per number
                    else if (operators.indexOf(btnVal) > -1) {
                      //operator is clicked
                      //get last charectar from equation
                      var lastChar = inputVal[inputVal.length - 1];

                      //only add operator if input is not empty
                      if (inputVal != "" && operators.indexOf(lastChar) == -1) {
                        input.innerHTML += btnVal;
                      }

                      //Allow minus if string is empty
                      else if (ipnutVal == "" && btnVal == '-')
                        input.innerHTML += btnVal;

                      //Replace last operator (if it exsists) with the new pressed operator
                      //'.' matches any character while $ denotes the end of the string so anything at the end will be replaced by new operator
                      if (operators.indexOf(lastChar) > -1 && inputVal.length > 1) {
                        input.innerHTML = inputVal.replace(/.$/, btnVal);
                      }

                      decimalAdded = false;
                    }

                    //decimal problem
                    else if (btnVal == '.') {
                      if (!decimalAdded) {
                        input.innerHTML += btnVal;
                        decimalAdded = true;
                      }
                    }

                    //if any other key is pressed, append it
                    else {
                      input.innerHTML += btnVal;
                    }
                    //prevent page jumps
                    e.preventDefault();


                  }

                }

                $("body").keydown(function(event) {

                  if (event.keyCode == 97) {
                    $(".screen").append("1");
                  } else if (event.keyCode == 96) {
                    $(".screen").append("0");

                  } else if (event.keyCode == 98) {
                    $(".screen").append("2");
                  } else if (event.keyCode == 99) {
                    $(".screen").append("3");
                  } else if (event.keyCode == 100) {
                    $(".screen").append("4");
                  } else if (event.keyCode == 101) {
                    $(".screen").append("5");
                  } else if (event.keyCode == 102) {
                    $(".screen").append("6");
                  } else if (event.keyCode == 103) {
                    $(".screen").append("7");
                  } else if (event.keyCode == 104) {
                    $(".screen").append("8");
                  } else if (event.keyCode == 105) {
                    $(".screen").append("9");
                  } else if (event.keyCode == 107) {
                    $(".screen").append("+");
                  } else if (event.keyCode == 110) {
                    $(".screen").append(".");
                  } else if (event.keyCode == 111) {
                    $(".screen").append("÷");
                  } else if (event.keyCode == 106) {
                    $(".screen").append("x");
                  } else if (event.keyCode == 109) {
                    $(".screen").append("-");
                  } else if (event.keyCode == 13) {
                    $(".screen").append("=");
                  }
                });
              });

            </script>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php') ?>
