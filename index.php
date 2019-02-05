<?php get_header(); ?>

<div class="ui secondary  menu">
  <div class="item">
    <img src="http://localhost/wordpress/wp-content/uploads/2019/02/Acme-Logo.png" alt="Logo">
  </div>
  <div class="right menu">
  <a class="item">
    Sales
  </a>
  <a class="item">
    Contact Us
  </a>
    <div class="item">
      <div class="ui icon input">
        <input type="text" placeholder="Search Products...">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>
</div>

<div class="ui two column doubling  grid container">
    <div class="column">
    <img class="ui medium rounded image" src="http://localhost/wordpress/wp-content/uploads/2019/02/iphone.jpg" alt="Iphone"/>
        <div class="ui labeled button" tabindex="0">
            <div class="ui red button">
                <i class="heart icon"></i>Like</div>
            <a class="ui basic red left pointing label">1,048</a>
        </div>

    </div>
    <div class="column">
        <p>The innovative solution in the iPhone was to remove the traditional
            keyboard; instead, there is a touch screen supported by the Multi-Touch
            technology. No stylus is needed; everything is operated with the use of a
            finger or multiple fingers. An additional novelty is the display that turns
            off when brought near the ear (proximity sensor) and a 3.5 in display, with
            320 x 480 pixels definition, that automatically adjust the screen to the
            device's orientation.</p>
            <button class="ui green button ">Buy Now</button>
            <a class="ui teal tag label">Only $900.00!!</a>
    </div>
</div>


<?php get_footer(); ?>