<!-- navigation bar -->

<style>
  
  .navbar > * {
    transition: left 0.5s;
  }
  
  .contact-info-navbar {
    background: #E3E3E3;
    display: grid;
    grid-template-columns: 5fr auto 0.7fr;
    grid-template-rows: 45px;
    
  }
  
  .contact-info-navbar-child {
    grid-column: 2 / span 1;
    grid-row: 1 / span 1;
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: 1fr;
    align-items: center;
    grid-gap: 40px;
    margin-right: 31px;
  }
  
  .contact-info-navbar-nav {
    list-style-type: none;
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: 1fr;
    align-items: center;
    margin: 0;
    grid-gap: 20px;
  }
  
  .contact-info-navbar-nav > li {
    font-size: 9px;
    font-weight: 600;
    float: left;
  }
  
  .contact-info-navbar-nav > li > a {
    text-decoration: none;
  }
  
  .button-telegram-blue:hover {
    color: white;
    background-color: #4EA6D6;
  }

  .button-telegram-blue {
    border-radius: 7px;
    border: 1px solid #4EA6D6; 
    padding: 5px 15px;
    color: #4EA6D6;
    font-size: 9px;
    font-weight: 600;
    transition: all 0.5s ease;
  }
  
  .navigation-navbar {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    grid-template-rows: 60px;
    padding-bottom: 10px;
  }
  
  .navigation-navbar-child {
    grid-column: 2 / span 1;
    grid-row: 1 / span 1;
    display: grid;
    grid-template-columns: 1fr auto auto auto 1fr;
    grid-template-rows: auto;
    align-items: center;
  }
  
  .navbar-logo-main {
    grid-column: 2 / span 1;
  }
  
  .navigation-navbar-child-nav {
    list-style-type: none;
    display: grid;
    grid-template-columns: auto auto auto auto auto auto auto auto;
    grid-template-rows: auto;
    grid-gap: 25px;
  }
  
  .navigation-navbar-child-nav > li {
    float: left;
    font-size: 9px;
  }
  
  .navigation-navbar-child-nav > li > a {
    text-decoration: none;
    font-weight: 750;
    color: #102B5A;
  }
  
  .navigation-navbar-child-nav > li > a {
    transition: all 0.5s ease;
    padding-bottom: 4px;
    border-bottom: 2px solid transparent;
  }
  
  .navigation-navbar-child-nav > li > a:hover {
    border-bottom: 2px solid #2e1733;
  }

  .button-live-demo-blue {
    margin-left: 20px;
    border: 1px solid;
    border-radius: 8px;
    padding: 12px 27px;
    background-color: #102B58;
    color: white;  
    transition: all 0.5s ease;
    text-transform: uppercase;
    font-size: 9px;
  }

  .button-live-demo-blue:hover {
    background-color: white;
    color: #102B58;  
  }

  .label-increasing {
    color: #10C243;
  }

  .label-decreasing {
    color: #C41227;
  }

  .label-white {
    color: white;
  }

  .live-chat-green {
    color: #168D41;
  }
  
  .navbar-currency {
    background: linear-gradient(to right, #102B58, #6C223E , #CE1A27); 
    display: grid;
    grid-template-columns: auto;
    grid-template-rows: 40px;
    padding: 0.3% 0 0.3% 0
  }
  
  .navbar-currency-child {
    align-items: center;
  }
  
  .navbar-currency-child-nav {
    list-style-type: none;
  }
  
  .navbar-currency-child-nav > li {
    float: left;
    font-weight: 600;
    margin-left: 7%;
    font-size: 7px;
    padding: 0.7% 0.75% 0.75% 0.5vw;
  }
  
  .btn-invisible {
    border: none;
    padding: 0;
    background-color: inherit;
  }
  
  .navbar-currency-child-nav > li > a {
    text-decoration: none;
  }
  
  .media-larger-devices, .media-smaller-devices {
     transition: left 0.5s;
  }
  
  .navigation-navbar-sm {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto;
    list-style-type: none;
    padding: 0 0 2% 0;
    margin: 0;
  }
  
  .navigation-navbar-sm > li {
    float: left;
    grid-column: 1 / span 1;
    grid-row: 1 / span 1;
    padding: 15% 10% 14% 10%;
  }
  
  .navigation-navbar-sm > li:nth-child(2) {
    grid-column: 2 / span 1;
  }
  
  .navigation-navbar-sm > li > a {
    text-decoration: none;
  }
  
  .navigation-navbar-child-nav > li > a {
    display: block;
  }
  
  #hamburger-navbar-sm {
    font-size: 1.5em;
    color: #102B58;
    float:right;
    border: none;
    outline: none;
  }
  
  @media (min-width : 900px) {
    .media-smaller-devices {
      display: none;
    }
    
    .media-larger-devices {
      display: grid !important;
    }
  }
  
  @media (max-width: 900px) {
    .media-larger-devices {
      display: none
    }
    .navbar-currency {
      padding: 0.4% 0 0.3% 0;
      -webkit-box-shadow: inset 0px 49px 43px -40px rgba(87,87,87,1);
      -moz-box-shadow: inset 0px 49px 43px -40px rgba(87,87,87,1);
      box-shadow: inset 0px 49px 43px -40px rgba(87,87,87,1);
    }
    
    .navbar-currency-child-nav {
      padding: 0;
      display: grid;
      grid-template-columns: auto auto;
      grid-template-rows: auto;
    }
    
    .navbar-currency-child-nav > li {
      align-items: center;
      float: right;
      text-align: center;
      padding: 5% 1% 0.75% 1%;
    }
    
    .navbar-currency-child-nav > li > a {
      font-weight: 600;
      font-size: 1.3em;
    }
    
    .navigation-navbar {
      padding-bottom: 0;
    }
    
    .navigation-navbar-child {
      display: block
    }
  
    .navbar-currency {
      grid-template-rows: 8vh;
    }
    
    .navbar-currency-child-nav > li:not(.show-on-smaller-devices) {
      display: none;
    }
    
    .navbar-logo-main {
      display: none;
    }
    
    .navbar-nav-button-live-demo {
      display: block;
      align-self: center;
    }
    
    .navigation-navbar-child-nav {
      display: block;
      margin: 0;
      padding: 0;
    }
    
    .navigation-navbar-child-nav > li {
      display: block;
      float: none;
      background-color: #ffffff;
      padding: 4%;
      border-bottom: 1% solid #fcf9ff;
    }
    
    .navigation-navbar-child-nav > li  > a {
      color: #1d1428;
      text-decoration: none;
      padding: 0 0 0.2em 0;
    }

    .button-live-demo-blue {
      margin-left: 0;
      border: none;
      border-radius: 0;
      color: white;
      background-color: #102B58;  
      width: 100%;
      font-weight: 600;
      text-transform: uppercase;
    }

    .button-live-demo-blue:hover {
      background-color: #102B58;
      font-size: 1.2em;
      color: white;  
    }
  }
</style>

<div class="navbar">
  <!-- topmost navigation -->
  <div class="media-larger-devices">
    <nav class="contact-info-navbar">
      <div class="contact-info-navbar-child">

        <ul class="contact-info-navbar-nav">
          <li>
            <a href="#">
              <div style="color: #112C58;">
                <i class="fas fa-phone" data-fa-transform="flip-h" style="margin-right: 5px;"></i> 1-800-972-3981
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="live-chat-green">
                <i class="fas fa-comments" style="margin-right: 5px;"></i> Live Chat
              </div>
            </a>
          </li>
        </ul>

        <div>
          <form>
            <button class="button-telegram-blue">
              <i class="far fa-paper-plane"></i>  <span style="padding-left: 9px;padding-right: 9px;">join our telegram community</span>
            </button>
          </form>
        </div>

      </div>
    </nav>
  </div>
  <!-- topmost navigation -->

    <!--  navigation bar icon on smaller devices  -->
    <div class="media-smaller-devices">
      <!--   navigation bar icon at smaller devices   -->
      <ul class="navigation-navbar-sm">
        <li>
          <a class="" href="">
            <img src="assets/images/ibinex-logo.png" class="expand">
          </a>
        </li>

        <li>
          <button class="btn-invisible" id="hamburger-navbar-sm">
            <i class="fas fa-bars"></i>
          </button>
        </li>

      </ul>
      <!--   navigation bar icon at smaller devices   -->
    </div>
    <!--  navigation bar icon on smaller devices  -->

  <!-- nav for different pages -->
  <nav class="media-larger-devices navigation-navbar" id="base-navbar-sm">

    <!--  navigation bar on medium to large devices  -->
    <div class="navigation-navbar-child">
      <div class="navbar-logo-main">
        <a href="<?php echo $_SERVER['REQUEST_URI'] ?>"><img src="assets/images/ibinex-logo.png" alt="Ibinex Logo" width="70%" height="70%"></a>
      </div>

      <ul class="navigation-navbar-child-nav">

        <li>
          <a href="index.php">
              Home
          </a>
        </li>
        <li>
          <a href="why-ibinex.blade.php">
              Why Ibinex
          </a>
        </li>
        <li>
          <a href="pricing.php">
              Pricing
          </a>
        </li>
        <li>
          <a href="services.php">
              Services
          </a>
        </li>
        <li>
          <a href="about.php">
              About Us
          </a>
        </li>
        <li>
          <a href="security.php">
              Security
          </a>
        </li>
        <li>
          <a href="#">
              Legal
          </a>
        </li>
        <li>
          <a href="contact-us.php">
              Contact Us
          </a>
        </li>
      </ul>

      <div class="navbar-nav-button-live-demo">
        <form>
          <button class="button-live-demo-blue">Live Demo</button>
        </form>
      </div>

    </div>
    <!--  navigation bar on medium to large devices  -->
  </nav>
  <!-- nav for different pages -->

  <!-- nav for different currencies -->
  <nav class="navbar-currency">
    <div class="navbar-currency-child">

      <ul class="navbar-currency-child-nav">
        <li>
          <a href="">
            <div class="label-white">BTC/USD
              <div class="label-increasing"> 12,455.00</div>
            </div>
          </a>
        </li>

        <li class="show-on-smaller-devices">
          <a href="">
            <div class="label-white">BTC/USD
              <div class="label-increasing"> 12,455.00</div>
            </div>
          </a>
        </li>

        <li class="show-on-smaller-devices">
          <a href="">
            <div class="label-white">ETH/USD
              <div class="label-decreasing"> 697.00</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">DASH/USD
              <div class="label-increasing"> 957.34</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">XPR/USD
              <div class="label-decreasing"> 1.89</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">LTC/USD
              <div class="label-increasing"> 209.20</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">BTC/USD
              <div class="label-increasing"> 2,455.00</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">BH/USD
              <div class="label-increasing"> 12,455.00</div>
            </div>
          </a>
        </li>
      </ul>

    </div>
  </nav>
  <!-- nav for different currencies -->
</div>

<script type="text/javascript">
  navbar_button = document.getElementById('hamburger-navbar-sm')
  navbar_button.addEventListener('click', function(){
    display_type = document.getElementById('base-navbar-sm');
    if(display_type.style.display == 'block')
    {
      $('#base-navbar-sm').slideUp(400)
    }else
    {
      $('#base-navbar-sm').slideDown(400)
    }
  })
</script>