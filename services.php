<?php require 'template.php'; ?>

<?php function styles_include(){ ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style>
  .red {
    color: #FEFEFD;
    width: 100%;
  }
  .red h3{
    color: #FFF;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
  }
  .red p{
    text-align: center;
  }
  .grey1 p, li {
    font-weight: 600;
  }
  .grey2 {
    padding-bottom: -35%;
  }
  .uk-container h3{
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 220%;
    margin-right: 2%;
  }
  .red p{
    font-size: 90%;
  }
  
  .uk-container li {
    margin-bottom: 4%;
  }
  .imageleft {
    margin-left: 2%;
  }
  .red p {
    font-weight: 500;
  }
  .grey1 .platform-content {
    color: #6B7C93;
    margin-bottom: -5%;
    margin-left: 0%;
  }
  .grey1 .platform-content h3 {
    color: #2C3135;
    margin-bottom: 10px;
  }
  .grey1 .platform-content p {
    font-weight: 600;
  }
  .grey1 .platform-content li {
    font-weight: 600;
  }
  .grey1 p, li {
    color: #6B7C93;
  }
  #pl_list {
    list-style: none;
  }
  .white1 .crmsection .crm-one h3 {
    color: #2C3135;
  }
  .white1 .crmsection .crm-one p {
    font-weight: 600;
     color: #6B7C93;
  }
  .white1 .crmsection .crm-one li {
    font-weight: 600;
  }
  .gradientcrypto {
    background: #142C5C;
    background: linear-gradient(to right, #142C5C , #134093);
    margin-bottom: -5.7%;
    width: 100%;
  }
  .gradientcrypto .gradientcrypto-img img {
    margin-top: -5.5%;
    margin-bottom: -16%;
    width: 59%;
    margin-left: 28.5%;
  }
  .gradientcrypto .gradientcrypto-content p {
    font-weight: 600;
    color: #fff;
    max-width: 80%;
    text-align: justify;
  }
  .white2 .creditcardsection .cc-content {
    color: #6B7C93;
    margin-top: -12%;
  }
  .white2 .creditcardsection .cc-content h3 {
    color: #2C3135;
    padding-top: 33%;
  }
  .white2 .creditcardsection .cc-content .cc-first-p {
    margin-bottom: 32%;
    font-weight: 600;
    text-align: justify;
  }
  .white2 .creditcardsection .cc-content img {
    width: 18%;
  }
  .custodian-two p {
    font-weight: 600;
  }
  
  /* Desktops and laptops ----------- */
  @media only screen and (min-width: 959px) {
    .imgbttm {
      display: none;
      visibility: hidden;
    }
    .red p {
      max-width: 48%;
      margin-left: 26%;
    }
    .grey1 .pratform-content-p {
      margin-top: -3%;
      margin-left: 1.1%;
      max-width: 80%;
    }
    .white1 .crmsection1 {
      margin-bottom: 0%;
    }
    .white1 .crm-content-p {
      max-width: 79%;
    }
    .white1 .crm-content-p {
      color: #6B7C93;
    }
    .gradientcrypto .gc-cotainer{
      margin-bottom: 2%;
    }
    .white2 .cc-content .cc-first-p{
      max-width: 75%; 
      margin-bottom: 28%;
    }
    .white2 .creditcardsection .cc-content img{
      width: 11.5%;
      height: 34%;
    }
    .grey2 .custodiansection .custodian-two .custodian-title {
      color: #2C3135;
      padding-top: 25.5%;
      margin-bottom: 5%;
    }
    .grey2 .custodiansection .custodian-two .custodian-p-1 {
     max-width: 85%;
    }
    .custodianimg {
      display: inline;
      visibility: visible;
    }
    .white1 {
      margin-bottom: 0%;
    }
  }

  /* Large screens ----------- */
  @media only screen and (min-width: 1824px) {
    .imgbttm {
      display: none;
      visibility: hidden;
    }
    .red p {
      max-width: 48%;
      margin-left: 26%;
    }
    .grey1 .pratform-content-p {
      margin-top: -3%;
      margin-left: 1.1%;
      max-width: 80%;
    }
    .white1 .crmsection1 {
      margin-bottom: 0%;
    }
    .white1 .crm-content-p {
      max-width: 79%;
    }
    .gradientcrypto .gc-cotainer{
      margin-bottom: 2%;
    }
    .white2 .cc-content .cc-first-p{
      max-width: 75%; 
      margin-bottom: 28%;
    }
    .white2 .cc-content img{
      width: 11.5%;
      height: 34%;
    }
    .grey2 .custodiansection .custodian-two .custodian-title {
      color: #2C3135;
      padding-top: 25.5%;
      margin-bottom: 5%;
    }
    .grey2 .custodiansection .custodian-two .custodian-p-1 {
     max-width: 85%;
    }
    .white1 {
      margin-bottom: 0%;
    }
  }
  
  /* Small screens ----------- */
  @media only screen and (min-width: 481px) and (max-width: 959px) {
    
  }
  
  /* ----------- Nokia Lumia 520 ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 320px) 
    and (max-device-width: 533px)
    and (-webkit-min-device-pixel-ratio: 1) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- LG Optimus L70 ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 384px) 
    and (max-device-width: 640px)
    and (-webkit-min-device-pixel-ratio: 1) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  
  
  /* ----------- iPhone 5, 5S, 5C and 5SE ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 320px) 
    and (max-device-width: 568px)
    and (-webkit-min-device-pixel-ratio: 2) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }

  /* ----------- iPhone 6, 6S, 7 and 8 ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 375px) 
    and (max-device-width: 667px) 
    and (-webkit-min-device-pixel-ratio: 2) { 
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- iPhone 6+, 7+ and 8+ ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 414px) 
    and (max-device-width: 736px) 
    and (-webkit-min-device-pixel-ratio: 3) { 
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- iPhone X ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 375px) 
    and (max-device-width: 812px) 
    and (-webkit-min-device-pixel-ratio: 2) { 
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;
      max-width: 200%;
      width: 187%;
      top: -4%;
      margin-left: 11%;
      height: 120%;
    }
  }
  
  /* ----------- Galaxy S3 ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 320px) 
    and (device-height: 640px) 
    and (-webkit-device-pixel-ratio: 2) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- Galaxy S4, S5 and Note 3 ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 320px) 
    and (device-height: 640px) 
    and (-webkit-device-pixel-ratio: 3) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- Galaxy S6 ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 360px) 
    and (device-height: 640px) 
    and (-webkit-device-pixel-ratio: 4) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- Google Pixel ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 360px) 
    and (device-height: 640px) 
    and (-webkit-device-pixel-ratio: 3) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- Google Pixel XL ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 360px) 
    and (device-height: 640px) 
    and (-webkit-device-pixel-ratio: 4) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- HTC One ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 360px) 
    and (device-height: 640px) 
    and (-webkit-device-pixel-ratio: 3) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- Windows Phone ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 480px) 
    and (device-height: 800px) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- iPad 1, 2, Mini and Air ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 768px) 
    and (max-device-width: 959px) 
    and (-webkit-min-device-pixel-ratio: 1) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
      .imageCont{
        overflow-x: hidden;
        overflow-y: hidden;
      }
      .imgbttm {

        padding-bottom: 15%;
      }
  }
  
  /* ----------- iPad 3, 4 and Pro 9.7" ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 768px) 
    and (max-device-width: 959px) 
    and (-webkit-min-device-pixel-ratio: 2) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- iPad Pro 10.5" ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 834px) 
    and (max-device-width: 959px)
    and (-webkit-min-device-pixel-ratio: 2) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- Galaxy Tab 2 ----------- */

  /* Portrait and Landscape */
  @media 
    (min-device-width: 800px) 
    and (max-device-width: 959px) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- Galaxy Tab S ----------- */

  /* Portrait and Landscape */
  @media 
    (min-device-width: 800px) 
    and (max-device-width: 959px)
    and (-webkit-min-device-pixel-ratio: 2) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  /* ----------- Nexus 7 ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 601px) 
    and (device-height: 906px) 
    and (-webkit-min-device-pixel-ratio: 1.331) 
    and (-webkit-max-device-pixel-ratio: 1.332) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
   /* ----------- Nexus 9 ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 1536px) 
    and (device-height: 2048px) 
    and (-webkit-min-device-pixel-ratio: 1.331) 
    and (-webkit-max-device-pixel-ratio: 1.332) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  } 
  
  /* ----------- Kindle Fire HD 7" ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 800px) 
    and (max-device-width: 959px) 
    and (-webkit-min-device-pixel-ratio: 1.5) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
  }
  
  
  
  /* ----------- iPhone 4 and 4S ----------- */

  /* Portrait and Landscape */
  @media only screen 
    and (min-device-width: 320px) 
    and (max-device-width: 480px)
    and (-webkit-min-device-pixel-ratio: 2) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
      .imgbttm {
        padding-bottom: 15%;
      }
      .imageCont .imgbttm{
        overflow-x: hidden;
        overflow-y: hidden;
      }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;
      max-width: 200%;
      width: 187%;
      top: -4%;
      left: -17%;
      margin-left: -6%;
      height: 120%;
      overflow-x: hidden;
    }
    .custodian-title{
      margin-top: 40px!important;
    }
    .white2 {
      padding-bottom: 8%;
      }
    .crmsection2 {
      margin-top: 0!important; 
    }
    .white2 .creditcardsection .cc-content h3{
       padding-top: 0;
     }
      .white1{
        background-color: #F7F7F7;
      }
      .red p {
        max-width: 100%;
      }
      .red .red1p {
        max-width: 75%;
        margin-left: 12%;
        padding-bottom: 8%;
      }
      .red .redpcontents {
        margin-bottom: 15%;
      }
      .platformp-content {
        margin-left: 8%;
      }
      .grey1 .grey1h3 {
        margin-top: 22%;
        margin-bottom: 15%;
      }
      .grey1 .platform-li {
        margin-top: 5%;
        margin-bottom: 10%
      }
      .grey1 .platformp-content .pratform-content-p {
        text-align: justify;
      }
      .white1 .crmsection {
        margin-left: -19%;
        margin-top: -30%;
      }
      .white1 .crm-li {
        margin-bottom: 10%;
      }
      .white1 .crm-content-p {
        word-spacing: 2px;
        text-align: justify; 
      }
      .gradientcrypto .gradientcrypto-img .cblogo {
        width: 84%;
        margin-left: 8%;
      }
      .gradientcrypto .gradientcrypto-content p {
        margin-top: 12%;
        text-align: justify;
        max-width: 100%;
      }
      .gradientcrypto .gradientcrypto-content h3 {
        margin-top: 8%;
      }
      .gradientcrypto .gradientcrypto-content {
        margin-left: 3%;
      }
      .gradientcrypto {
        margin-bottom: -20%
      }
      .white2 .cc-content {
        margin-left: -14%;
        padding-top: 5%;
      }
      .white2 .cc-content .cc-title {
        padding-bottom: 10%;
      }
      .white2 .cc-content .cc-first-p{
        max-width: 98%;
        word-spacing: 0px;
        text-align: justify;
      }
      .white2 .creditcardsection .cc-content img {
        width: 21.7%;
      }
      .white2 .creditcardsection .cc-content .amexpress {
        margin-top: 5%;
      }
      .white2 .creditcardsection .cc-content .paypal {
        margin-top: 5%;
      }
      .white2 .creditcardsection .cc-content .maestro {
        margin-top: 5%;
      }
      .white2 .creditcardsection .cc-content .secondimgsec {
        margin-top: 5%;
      }
      .grey2 .custodiansection .custodian-two {
        margin-left: 8%;
      }
      .grey2 .custodiansection .custodian-two .custodian-p-1 {
        max-width: 100%;
        margin-top: 5%;
        text-align: justify;
      }
      .imgbttm .laptopimg {
        max-width: 200%;
        width: 187%;
        top: -7%;
        margin-left: -45%;
        height: 123%;
        position: relative;
        left: 38%;
        margin-right: -38%;
        margin-top: 0%;    
      }
  }
  
  /* ----------- Blackberry Playbook ----------- */

  /* Portrait and Landscape */
  @media screen 
    and (device-width: 600px) 
    and (device-height: 1024px) 
    and (-webkit-min-device-pixel-ratio: 1) 
    and (-webkit-max-device-pixel-ratio: 1) {
    .crmsection .crm .crmimage  {
       display: none;
    }
    .creditcardsection .phone .phoneimg {
       display: none;    
    }
    .custodiansection .custodian .custodianimg {
       display: none;    
    }
    .imgtop img {
      display: none;
      visibility: hidden;   
    }
    .imgbttm img {
      display: block;
      visibility: visible;    
    }
    .imgbttm .laptopimg {
      max-width: 200%;
      width: 187%;
      top: -7%;
      margin-left: -45%;
      height: 123%;
      position: relative;
      left: 38%;
      margin-right: -38%;
      margin-top: 0%;    
    }
  }
  

</style>

<script>
</script>
<?php } ?>

<?php function display_title(){ ?>
  Services - Ibinex
<?php } ?>

<?php function display_content(){ ?>
<div class="uk-section uk-section-default red" style="background-color: #C11722; padding-bottom: 6.5%">
    <div class="uk-container">
      <h3 class="animated red-h3" id="animated1" style="padding-top: 0.4%; padding-bottom: 2.5%;"><em style="color: #fff;">Services</em></h3>
        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
            <div class="redpcontents">
                <p class="animated fadeInLeft red1p" style="margin-top: -0.8%; margin-bottom: 2%;">Ibinex services are all characterised by high-level innovation made practical for your personalised exchange integration.</p>
                <p class="animated fadeInRight" style="margin-top: 0%;">Our ecosystem of services compromises of the following units:</p>  
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted grey1" style="background-color: #F7F7F7; padding-top: 0; margin-bottom: -6.5%;">
    <div class="uk-container imageCont">
        <div class="uk-margin-remove-top uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div class="imgtop">
                <img class="laptopimg" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/5356c1f9ac7989278c2052fb77b370fb/platform-laptop.png" style="position: relative; top: 13.2%; height: 100%; margin-left: 8.5%; max-width: 200%; width: 143.4%;" alt="macbook">
            </div>
            <div class="uk-margin platformp-content" style="padding-top: 6.5%; padding-left: 2%;">
                <h3 class="animated fadeInRight grey1h3">Platform</h3>
                <p class="pratform-content-p" style="color: #6B7C93;">Your exchange is your launchpad. Our suite elevates your exchange by equipping you with your own platform consisting of:</p>
                <ul class="uk-list uk-list-space" id="pl_list" style="margin-top: -2%; margin-left: 1%;">
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Tailor-made private, institutional while label infrastructure</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Fully-customisable front-end website</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Completely integrated web-based trading platform</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Flexible front-end user trading</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Performance-driven features</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Secure private cloud hosting</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Total compatibility with your own branding deck</li>
                </ul>
            </div>
            <div class="imgbttm">
                <img class="laptopimg" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/5356c1f9ac7989278c2052fb77b370fb/platform-laptop.png" alt="macbook">
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default white1">
    <div class="uk-container uk-margin crmsection">
        <div class="uk-grid-match uk-child-width-1-2@m uk-margin-xlarge-top crmsection1"   uk-grid>
            <div class="crm-one" style="margin-left: 15.8%; margin-top: -4.5%;">
                <h3 class="crm-title">CRM/Back Office</h3>
                <p class="crm-content-p">The Ibinex solution unites the front-end and platform with a full back office suit including CRM with:</p>
                <ul class="uk-margin uk-list uk-list-space" id="pl_list">
                  <li class="uk-margin-small-top crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> KYC/AML documentation collection</li>
                  <li class="crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Documentation verification</li>
                  <li class="crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Account and money management</li>
                  <li class="crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Optimised back-office administrative workflow</li>
                  <li class="crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Enhanced UI/UX</li>
                </ul>
            </div>
            <div class="crm">
                <p style="margin-bottom: -134%;"><img class="crmimage" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/58b870772ce4f99e05237aa42f18cdbb/crm-back.png" style="position: relative; top: -60%; left: 104%; max-width: 117%; height: 74%; margin-left: -3%;" alt="windows"></p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-primary uk-light gradientcrypto">
    <div class="uk-container gc-cotainer">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div class="uk-inline gradientcrypto-img">
                <p><img src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/04c8654a3ae5429e6e914cbda971a9f8/cryptobridge.png" class="uk-align-center cblogo" alt="CryptoBridge&trade;"></p>
            </div>
            <div class="uk-margin gradientcrypto-content" style="padding-top: 1.3%; position: relative; left: -1%;">
                <h3 class="uk-margin-remove-bottom" style="padding-bottom: 2%;">CryptoBridge&trade;</h3>
                <p class="uk-margin-xlarge-bottom">Aggregate elite exchanges and indexes as the cryptocurrency market moves, with out patent-pending proprietary software suite, CryptoBridge&trade;. Gain access to 60 premier exchanges for maximum liquidity cryptocurrencies, all available only through CryptoBridge&trade; by Ibinex.</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default white2">
    <div class="uk-container creditcardsection">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid style="margin-top: -4%;">
            <div class="uk-margin cc-content" style="position: relative; left: 15.5%; margin-top: -8.7%;">
                <h3 class="uk-margin-large-top cc-title" style="margin-bottom: 0%;">Credit Card Processing</h3>
                <p class="uk-margin-small-top cc-first-p">We offer full spectrum payment processing for cryptocurrencies, and a complete selection that is unavailable elsewhere. Exchanging your way with Ibinex means experiencing a whole new world of payment options including: credit cards, debit cards, wire transfers, alternative payments, hosted wallets and cold wallets.</p>
                <p style="margin-top: -30%; position: relative; top: 3%;">
                  <img class="" src="assets/images/visa.svg" alt="cards" data-tilt >
                  <img class="imageleft mastercard" src="assets/images/master-card.svg" alt="cards" data-tilt >
                  <img class="imageleft discover" src="assets/images/credit-card.svg" alt="cards" data-tilt >
                  <img class="imageleft dinnersclub" src="assets/images/dinners-club.svg" alt="cards" data-tilt >
                  <br>
                
                    <img class="amexpress" src="assets/images/american-express.svg" alt="cards" data-tilt >
                    <img class="imageleft paypal" src="assets/images/paypal.svg" alt="cards" data-tilt >
                    <img class="imageleft maestro" src="assets/images/maestro.svg" alt="cards" data-tilt >

                </p>
            </div>
            <div class="uk-margin phone">
              <p><img class="phoneimg" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/23e46f532ad13d99fa6810dbef622156/First-Option-Services_Desktop_(1)-min.png" alt="iphonex" style="margin-bottom: -16%; width: 72.5%; margin-left: 14%; padding-top: 8%; height: 118%;"></p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted grey2" style="background-color: #FBFBFB; padding-bottom: 0%; padding-top: 0%; margin-bottom: 0%;">
    <div class="uk-container custodiansection" style="margin-bottom: -0.4%;">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div class="custodian">
                <p><img class="custodianimg" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/870456d77b7a7525d39fe55b27cdd354/custodian-accounts.jpg" style="height: 99.1%; width: 82%; position: relative; left: 20%;" alt="Man"></p>
            </div>
            <div class="uk-margin custodian-two" style="color: #6B7C93; padding-left: 3.3%;">
                <h3 class="custodian-title">Custodian Accounts</h3>
                <div class="custodian-p-content">
                  <p class="custodian-p-1">Another first sees Ibinex leading the way as the world's first cryptocurrency exchange with a finance transaction license. We are proud to be the first to offer you:</p>
                  <p class="custodian-p">Fully-compliant and licensed custodian proceeding and accounts</p>  
                  <p class="custodian-p">The choice to instead select a custodian of your choice</p>
                  <p class="custodian-p">Payments via swipe-and-transmit from FIAT to base currency</p>
                  <p class="uk-margin-xlarge-bottom custodian-p">A raft of other custodian account options unavailable elsewhere</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script>
$('.cblogo').tilt({
    glare: true,
    maxGlare: .5
})
</script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
$(document).ready(function(){
  $(window).on("load", function() {
    $( "#animated1" ).addClass( "fadeInDown" );
    $( "#animated2" ).addClass( "fadeInLeft" );
    $( "#animated3" ).addClass( "fadeInRight" );
    window.sr = ScrollReveal({ mobile: true });
    sr.reveal('.pratform-content-p', { duration: 2000 });
    sr.reveal('.platform-li', { duration: 3000}, {container: '.platform-content' }, 300);

    sr.reveal('.crm-title', { origin: 'left' }, { duration: 3000}, 600);
    sr.reveal('.crm-content-p', { origin: 'left'}, {duration: 3000 }, 600);
    sr.reveal('.crm-li', { origin: 'left' }, { duration: 3000}, {container: '.crm-one' }, 600);

    sr.reveal('.cc-title', { origin: 'left' }, { duration: 4000});
    sr.reveal('.cc-first-p', { origin: 'left'}, {duration: 4000 }, 600);
    sr.reveal('.visa', { origin: 'bottom' }, { duration: 9000}, 3000);
    sr.reveal('.mastercard', { origin: 'top' }, { duration: 9000}, 3000);
    sr.reveal('.discover', { origin: 'bottom' }, { duration: 9000}, 3000);
    sr.reveal('.dinnersclub', { origin: 'top' }, { duration: 9000}, 3000);
    sr.reveal('.amexpress', { origin: 'bottom' }, { duration: 9000}, 3000);
    sr.reveal('.paypal', { origin: 'top' }, { duration: 9000}, 3000);
    sr.reveal('.maestro', { origin: 'bottom' }, { duration: 9000}, 3000);

    sr.reveal('.custodian-title', { origin: 'right' }, { duration: 4000});
    sr.reveal('.custodian-p', { duration: 3000}, {container: '.custodian-two' }, 300);
  });
});
</script>
<?php } ?>