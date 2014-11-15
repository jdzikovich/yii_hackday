<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="windows-1252" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>That Job Thing</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/app.css">
  <script src="js/vendor/modernizr.js"></script>
</head>
<body>

  <!-- TOP NAV  -->
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">That Job Thing</a></h1>
      </li>
    </ul>
    <section class="top-bar-section">

      <!-- Left Nav Buttons -->
      <ul class="left">
        <li><a href="#" data-reveal-id="myModal">CREATE NEW JOB</a></li>
      </ul>

      <!-- NEW JOB MODAL -->
      <div id="myModal" class="reveal-modal" data-reveal>
        <h2>Add a new job</h2>

        <!-- NEW JOB FORM -->
        <form>
          <div class="row">
            <div class="large-6 columns">
              <label>Position
                <input type="text" />
              </label>
            </div>
            <div class="large-6 columns">
              <label>Company
                <input type="text" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <label>Input Label
                <input type="text" placeholder="large-4.columns" />
              </label>
            </div>
            <div class="large-4 columns">
              <label>Input Label
                <input type="text" placeholder="large-4.columns" />
              </label>
            </div>
            <div class="large-4 columns">
              <div class="row collapse">
                <label>Input Label</label>
                <div class="small-9 columns">
                  <input type="text" placeholder="small-9.columns" />
                </div>
                <div class="small-3 columns">
                  <span class="postfix">.com</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Select Box
                <select>
                  <option value="husker">Not yet applied</option>
                  <option value="starbuck">Have connection, will reach out</option>
                  <option value="hotdog">Applied</option>
                  <option value="apollo">Setting up interview</option>
                  <option value="foo">Didn't work out</option>
                </select>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-6 columns">
              <label>Choose Your Favorite</label>
              <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
              <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
            </div>
            <div class="large-6 columns">
              <label>Check these out</label>
              <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
              <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Textarea Label
                <textarea placeholder="small-12.columns"></textarea>
              </label>
            </div>
          </div>
        </form>

        <a href="#" class="button expand">Expanded Button</a>

        <a class="close-reveal-modal">&#215;</a>
      </div>

      <!-- Right Nav Buttons -->
      <ul class="right">
      <!--  ******************
            * SESSIONS LOGIC *
            ****************** -->
        <li class="active log-in"><a href="#">Log In</a></li>
        <li class="active log-out"><a href="#">
          Log Out</a></li>
        </ul>
      </section>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="row table-padding">

      <!-- MY JOBS -->
      <div class="large-8 columns">
        <dl class="accordion" data-accordion>
        <?php	
        	foreach($Jobs as $i => $Job)
        	{?>
        	 <dd class="accordion-navigation">
            <a href="#panel<?php echo $i?>"><?php echo $Job->title?> @ <?php echo $Job->Company->name?></a>
            <div id="panel<?php echo $i?>" class="content">
              <?php echo $Job->notes?>
            </div>
          </dd>	
        	<?php }
        ?>
        </dl>
      </div>

      <!-- CALENDAR -->
      <div class="large-4 columns calendar-padding">
        <div class="panel callout radius calendar-height">
          <h5>Calendar</h5>
          <iframe id="googleCalendarFrame" src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=julia.dzikovich%40gmail.com" style=" border-width:0 " height="600" width="250" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>
    </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script>
    $(document).foundation();
    </script>
  </body>
  </html>
