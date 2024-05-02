@include("front.header")


<div class="dp-body-area">

<!--============================
=           contact section            =
=============================-->

<section class="container contact-section">
  <div class="contact-info">
      <div>
        <h2 class="get-in-touch-mobile">Get in touch with us</h2>
        <form action="#">
          <input type="text" placeholder="Name">
          <input type="email" placeholder="Email">
          <input type="text" placeholder="Phone">
          <textarea placeholder="Message"></textarea>
          <button type="submit">SEND</button>
        </form>
      </div>
      <div>
        <h2 class="get-in-touch-desktop">Get in touch with us</h2>
        <div>
          <h6>Office Opening Hours:</h6>
          <br>
          <div class="dividing-line"></div>
          <span>Weekdays: 10:00 - 17:00 (EET)</span>
          <span>Saturdays: By appointment</span>
          <span>Sundays: By appointment</span>
        </div>
      </div>
  </div>

  <div class="address">
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11655.716305870437!2d25.6367936!3d43.0849864!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9261c1bc7ae1b%3A0xbc936639fa2c9e1a!2sYantra%20Homes%20Ltd%20Bulgaria%20Real%20Estate%20Agency!5e0!3m2!1sen!2sng!4v1702498478334!5m2!1sen!2sng" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="soc-media">
      <div>
        <h6>Address:</h6>
        <span>7, Slaveykov Square Veliko Tarnovo 5000 Bulgaria</span>
      </div>

      <div class="phone">
        <div>
          <p>Telephone:</p>
          <span>+359 (0)62 53 99 80</span>
        </div>

        <div>
          <p>Mobile:</p>
          <span>+359 (0)8777 76 521</span>
        </div>

        <div>
          <p>Email:</p>
          <span>info@yantrahomes.com</span>
        </div>
      </div>
      <div class="facebook">
        <a href="#">
          <img src="{{asset('assets/images/png/facebook.png')}}" alt="facebook logo">
        </a>
      </div>
    </div>
  </div>

  <div class="empty"></div>
</section>

<!--====  End of contact section  ====-->


@include("front.footer")

    