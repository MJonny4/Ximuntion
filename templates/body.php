<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -99%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

<div id="home" class="w3-content"> 
  <div id="home2">
  <img src="./images/1.jpg"  alt="day"   class="w3-image slides w3-card-4 w3-round">
  <img src="./images/3.jpg"  alt="noon" class="w3-image slides w3-card-4 w3-round">
  <img src="./images/2.jpg"  alt="night" class="w3-image slides w3-card-4 w3-round">
  <script>
    w3.slideshow(".slides", 5000);
  </script>
  </div>
  <div class="w3-container w3-center w3-padding-32">
    <h3 class="w3-wide">Welcome to Ximuntion</h3>
    <p class="w3-opacity">A webpage made by Ion Munteanu</p>
  </div>

  <div id="about" class="w3-container w3-padding-32 w3-card-4 w3-round">
    <div class="w3-row">
      <div class="w3-col m6 w3-padding-large">
        <h1 class="w3-center">About Me</h1>
        <h1 class="w3-center"><i class="fa-solid fa-user-astronaut fa-4x"></i></h1>
      </div>
      <div class="w3-col m6 w3-padding-large">
        <p style="  text-align: justify ">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea iusto inventore animi aspernatur at sit doloremque 
           quia reiciendis consectetur, quisquam quas voluptatum harum nisi in accusamus neque earum incidunt autem.
           Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id asperiores eligendi dicta voluptatibus eum qui veniam, 
           nulla ad quos consequuntur fugiat animi repellendus, vitae possimus dolor consectetur cupiditate omnis? Sint!
          </p>
          <button id="btninfo" class="w3-btn w3-pale-red w3-right w3-round" onclick="showHobbies('info')">More</button>
      </div>
    </div>
  </div>
  
<div id="info" class="w3-hide w3-container w3-padding-32 w3-card-4 w3-round w3-animate-top">
  <h1 class="w3-center">Hobbies</h1>
  <div class="w3-row w3-center">
    <div class="w3-col m4 w3-padding-large">
  <i class="fa-solid fa-dumbbell fa-5x"></i>
  <h3>Workout</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
</div>
<div class="w3-col m4 w3-padding-large">
  <i class="fa-solid fa-laptop-code fa-5x"></i>
  <h3>Programming</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
</div>
<div class="w3-col m4 w3-padding-large">
  <i class="fa-solid fa-gamepad fa-5x"></i>
  <h3>Gaming</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
</div>
  </div>
</div>
  
  <div id="features" class="w3-container w3-padding-32 w3-card-4 w3-round">
    <h1 class="w3-center">Features</h1>
    <div class="w3-row w3-center">
      <div class="w3-col m3 w3-padding-large">
        <i class="fa-solid fa-desktop fa-5x"></i>
        <h3>Responsive</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
      </div>
      <div class="w3-col m3 w3-padding-large">
        <i class="fa-solid fa-pencil-ruler fa-5x"></i>
        <h3>Design</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
      </div>
      <div class="w3-col m3 w3-padding-large">
        <i class="fa-solid fa-cogs fa-5x"></i>
        <h3>Easy to use</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
      </div>
      <div class="w3-col m3 w3-padding-large">
      <i class="fa-solid fa-face-smile fa-5x"></i>
        <h3>Good</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
      </div>
    </div>
  </div>
  
    <div id="contact" class="w3-container w3-padding-32 w3-card-4 w3-round">
      <h1 class="w3-center">Contact</h1>
      <p class="w3-center"><em>I'd love to hear from you!</em></p>
      <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
          <p class="w3-justify" style="padding-left: 50px; margin-top:5px;">
          <i class="fa-solid fa-location-dot fa-1x"></i> Igualada, ES<br>
          <i class="fa-solid fa-phone fa-1x"></i> +34 634 20 41 98<br>
          <i class="fa-solid fa-envelope fa-1x"></i> ion.munteanu@ximuntion.com<br>
          </p>
        </div>
        <div class="w3-col m6">
          <form action="./database/contact.php" method="POST">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="email">
              </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
            <button class="w3-btn w3-white w3-section w3-right w3-round w3-pale-green" type="submit" name="contact_user">SEND</button>
          </form>
        </div>
      </div>
    </div>

  <div id="bye" class="w3-center w3-padding-12">
    <img src="http://pngimg.com/uploads/goodbye/goodbye_PNG22.png"  alt="night" class="w3-image slides w3-round">
  </div>

  <div id="footer" class="w3-center w3-padding-32">
    <span class="w3-text-grey">&copy; 2022 Ximuntion</span>
  </div>
</div>
</div>
<script src="./javascript/hobbies.js" defer></script>