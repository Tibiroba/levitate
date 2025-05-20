<?php get_header(); ?>





<div class="content">

<?php if ( wp_is_mobile() ) : ?>
    <!-- Mobile-specific content goes here -->
    <section class="banner" id="firstSection" >
<div class="container-fluid">
  <div class="row" style="justify-content:center">
  <h2 style="color:white; font-weight:bold; letter-spacing:7px;">Levite com Levitate!</h2>
    <div class="col-12">
    <img class="produtoCta" src="<?php echo get_stylesheet_directory_uri(); ?>/img/PRODUTO_BANNER.png" alt="img_cta_locao">
  </div>
  <h4 class="mt-5" style="color:white; letter-spacing:2px;   "><strong style="text-decoration:underline;">Água Micelar Corporal</strong> que<br>higieniza e previne odores<br>durante 24h</h4>
  </div>
</div>
    
  
    </section>









<?php else : ?>
    <!-- Desktop-specific content goes here -->
    <section class="banner" id="firstSection" >

  
  <div class="container-fluid " id="firstSection">

    <div class="row ">
      <div class="col-md-12 col-lg-6 p-0">


        <div class="ctaText ">
          <ul class="listaCta">
            <li>
              <h2 style="color:white; font-weight:bold; letter-spacing:7px;">Levite com Levitate!</h2>
            </li>
            <li>
              <h4 class="" style="color:white; letter-spacing:2px;   "><strong style="text-decoration:underline;">Água Micelar Corporal</strong> que<br>higieniza e previne odores<br>durante 24h</h4>
            </li>
            <li style="margin-top:75px; margin-left:10px;"><a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"></li>
          </ul>



        </div>


      </div>
      <div class="col-lg-6 col-md-12">
        <img class="produtoCta" src="<?php echo get_stylesheet_directory_uri(); ?>/img/PRODUTO_BANNER.png" alt="img_cta_locao">
      </div>

    </div>
  </div>
  </section>
<?php endif; ?>
  








  <section class="whiteRow" id="sectionTwo">

  <div class="container-fluid sectionDois">

  <div class="row">
      <div class="col-lg-6 col-md-12 p-0">
        <!-- <div class="backgroundLayer h-100 w-100" style="float:right;">
          <div class="backgroundLayerOne h-100  "> -->
          <img class="mulherSaltando"  src="<?php echo get_stylesheet_directory_uri();?>/img/MULHERSALTANDO.png" alt="mulher_saltando">
          <!-- </div>
        </div>
   -->
      </div>
      <div class="col-lg-6 col-md-12 p-0">

      <div class="boxSaltando" style="">
      <p class="text-center m-0 fontNormalPlus" >Levitate é especialista no controle de<br></p>
      <span class="textBlue fontXl">todos os odores corporais</span>
        
        <div class="listaBen mb-5">

       
        <ul class="mb-5" style="text-align:start;">
          <li>Axilas</li>
          <li>região íntima</li>
          <li>Pés</li>
          <li>e mais!</li>
        </ul>
        
  
        </div>
        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink btnPinkCustom" style="">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
      </div>
        
      </div>
    </div>
  </div>

  <div class="container-fluid">
    
  

  
    
    <?php if ( wp_is_mobile() ) : ?>
      <div class="row rowCustomTwo">

      
      <div class="col-12">
      <div class="textBoxMulher">
          <p class="fontNormalPlus textWhite mb-4" style=" font-weight:400; letter-spacing:3px;">Aplique a  <b class="fontBig">Água Micelar</b><br> no <b class="fontBig">Lenço Levitate</b> e higienize seu corpo:</p>
          <p class="fontNormalPlus textWhite" style=" font-weight:400; letter-spacing:3px; margin-bottom:70px;"><b class="fontBig">Após o banho,</b> para prevenção<br> de odores;</p>
          <p class="fontNormalPlus textWhite mb-5" style=" font-weight:400; letter-spacing:3px;">Ou quando sentir necessidades de revitaliza-lo, <b class="fontBig">ao longo do dia</b></p>
          
          </div>
      </div>

      <div class="col-12">
      <img src="<?php echo get_stylesheet_directory_uri(  );?>/img/MULHER.png" alt="" class="imgMulherMobile">
      <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink mb-5">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">  
    </div>
    </div>




      <?php else : ?>

        <div class="row rowCustom">
      <div class="col-lg-6 p-0">

    
        
       
        <div class="boxBlue" style="float:right; text-align:start; padding-right:15px;">
  
        <p class=" fontNormalPlus">Aplique a Àgua Micelar<br> no <strong class="textBlue fontBigMinus" >Lenço Levitate</strong> e higiene no seu corpo: </p>
    </div>

          <img src="<?php echo get_stylesheet_directory_uri(  );?>/img/MULHER.png" alt="" class="imgMulher">
        
      </div>
      <div class="col-lg-6  blueBg" style="">
        <!-- <div class="boxNuvem"> -->
          <!-- <img src="< echo get_stylesheet_directory_uri() ?>/img/NUVEM_03.png" alt=""> -->
          <div class="textBoxMulher">
          <p class="fontNormalPlus textWhite mb-4" style=" font-weight:400; letter-spacing:3px;">Aplique a  <b class="fontBig">Água Micelar</b><br> no <b class="fontBig">Lenço Levitate</b> e higienize seu corpo:</p>
          <p class="fontNormalPlus textWhite" style=" font-weight:400; letter-spacing:3px; margin-bottom:70px;"><b class="fontBig">Após o banho,</b> para prevenção<br> de odores;</p>
          <p class="fontNormalPlus textWhite mb-5" style=" font-weight:400; letter-spacing:3px;">Ou quando sentir necessidades de revitaliza-lo, <b class="fontBig">ao longo do dia</b></p>
          <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink mt-4 py-3"  >Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
          </div>
        
        <!-- </div> -->
        
      </div>
    </div>

        <?php endif; ?>
  
  </div>
  </section>








  <?php if ( wp_is_mobile() ) : ?>
    <!-- Mobile-specific content goes here -->
<section class="container-fluid">

<div class="row">
<h3 class="fontXl textBlue my-5" >Fórmula baseada em estudos científicos</h3>

<div class="col-12">
<img src="
     <?php echo get_stylesheet_directory_uri();?>/img/CIENTISTA.png" alt="" class="imgCientistaMobile">
</div>

<div class="col-12"> 
  <div class="txtBoxAguaMobile">
  <ul style=" padding:0; list-style-type:none; ">
    <li class="fontGrande" style="font-family:'MyriadPro-Semibold';" >Hipoeralergênica,</li>
    <li class="fontGrande" style="font-family:'MyriadPro-Semibold';" >Dermatologicamente e</li>
    <li class="fontGrande" style="font-family:'MyriadPro-Semibold';" >Ginecologicamente</li>
    <li class="fontGrande" style="font-family:'MyriadPro-Semibold';" >Testada</li>
  </ul>
    <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink my-5">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
  </div>
</div>
</div>

</section>
   

<?php else : ?>
    <!-- Desktop-specific content goes here -->
    <section class="rowTransicao bgRoxo">
      <h3 class="textWhite fontGrande" >Fórmula baseada em estudos científicos</h3>
    </section>
    <section class="whiteBg" style="padding:130px 0 120px 0 ;">
      <div class="container">
      <div class="row ">
      <div class="col-lg-6 col-md-12 p-0">

      <div class="txtBoxAgua">
      <ul style=" padding:0; list-style-type:none;">
        <li class="fontBigPlus">Hipoeralergênica,</li>
        <li class="fontBigPlus">Dermatologicamente e</li>
        <li class="fontBigPlus">Ginecologicamente</li>
        <li class="fontBigPlus">Testada</li>
      </ul>
        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink mt-5">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
      </div>
      

      </div>

      <div class="col-lg-6 col-md-12">
        <img src="
         <?php echo get_stylesheet_directory_uri();?>/img/CIENTISTA.png" alt="" class="imgCientista">
      </div>
    </div>
      </div>
    </section> 

<?php endif; ?>

   

    

    <section class="whiteRow ">
      
      
    <div class="container greyBg" style="padding:72px 0;">
    <div class="row ">
      <div class="col-12">
        <div class="mb-5 mx-3" style="text-align: center;" >
        <p class="fontXl">Clique nos botões abaixo e<br> conheça <b class="textPink fontGrande">DICAS LEVITATE</b> para:</p>
         
        </div>
</div>
  <div class="col-12">

 
        <ul class="listaCard ">
          <li class="my-3">
            <div class="card">
          <svg style="width:150px; margin:35px 0 0 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.71 119.36"><defs><style>.cls-1{fill:#666cfe;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="_4" data-name="#4"><path class="cls-1" d="M52,117.51c-2.71-9.29-7.17-19.09-13.88-26.14A102.23,102.23,0,0,1,23.48,71.56a225.1,225.1,0,0,1-15-30.64A94.2,94.2,0,0,1,4,27c-.6-2.69-1.72-7-.38-9.67,1-2,2.72-1.88,4.87-2.1a90.09,90.09,0,0,1,14.32-.1c6.92.42,14.28,2.39,21.21,1.9,1.91-.13,1.93-3.13,0-3-6.42.45-13.26-1.33-19.65-1.79A104,104,0,0,0,11.63,12c-2.46.13-6,0-8.25,1.23C-2.19,16.31.51,25.88,1.77,30.51c3,11.08,8,21.72,13.27,31.89,4.58,8.86,9.48,17.95,15.78,25.73,4.14,5.11,8.79,9.17,12,15.09a76.57,76.57,0,0,1,6.3,15.08c.54,1.85,3.43,1.07,2.89-.79Z"/><path class="cls-1" d="M48.24,30.52c-6.75.77-15.75.76-21.06-4-1.19-1.07-3.41.37-2.36,1.82A174,174,0,0,1,38.89,51.77C43.25,60.41,48.27,69.6,55.67,76c6,5.2,14.15,7.41,20.88,2.06,4.36-3.48,7-9.39,7.73-14.85.25-1.89-2.64-2.71-2.9-.8-.66,4.89-2.84,10.33-6.83,13.39C65.8,82.55,56.82,74,51.63,67.15,47,61,43.38,54.11,40,47.21A144.84,144.84,0,0,0,27.41,26.8l-2.35,1.81c6,5.39,15.55,5.78,23.18,4.91,1.9-.21,1.92-3.21,0-3Z"/><path class="cls-1" d="M62.78,5.79a15.37,15.37,0,0,0-6.89,7.44c-2.26,5.72,3.62,13.82-.48,18.56-2,2.35-9.37,5.17-6.08,9.6.47.63,1.29.75,1.73,1.27,1.62,1.85,0,1.85-.18,3.78-.12,1.21-.21,2,.87,2.89.41.34,2.21,1.87,1.66-.25.07.27-1,.86-.81,1.44.45,1.57,1.79,1.69,2.34,2.68.93,1.65-1.41,5.21,1.33,7.71,3.22,2.93,10.23,1.71,14.13,1.36a45.52,45.52,0,0,0,20-6.13c1.65-1,.14-3.59-1.51-2.59-7.64,4.63-18.29,7.12-27.28,5.94-2.52-.32-4.42-1.13-4-3.91.11-.67.68-1.21.68-1.89a2.41,2.41,0,0,0-.71-1.9,5.61,5.61,0,0,0-.89-.7c-.93-.66-1.28.19-.85-.2a1.49,1.49,0,0,0,.38-1.45c-.31-1.28-2-1.32-2.29-2.19-.14-.43,1.84-3.09,1.45-4.68-.26-1.08-1.08-1.41-1.67-2.17-1.58-.18-1.89-1.19-.93-3,1.15-.86,2.32-1.68,3.52-2.45a11.09,11.09,0,0,0,1.87-1.88c2.5-3.51,1.21-8,.5-11.85-1-5.65.44-10,5.58-12.83,1.7-.93.18-3.52-1.51-2.59Z"/><path class="cls-1" d="M112.64,52.22c-4.12-1-8.72-3.11-11.53-6.38-1.84-2.14-2.85-5-4.22-7.5a88.54,88.54,0,0,0-5.56-8.75c-3.52-4.85-7.48-9.24-12.68-12.27S62.9,8.41,62.21,1.44c-.18-1.91-3.19-1.93-3,0,.58,5.88,6.59,10.73,10.94,14,3.16,2.39,6.79,4,9.93,6.35a45.59,45.59,0,0,1,9.5,10.48c3.68,5.28,5.88,12.54,10.65,16.89a27.3,27.3,0,0,0,11.61,5.94c1.88.46,2.68-2.43.8-2.9Z"/><path class="cls-1" d="M101.22,29.74c-1.87-8.81-9.72-15.3-18-17.76-1.86-.55-2.65,2.34-.8,2.89,7.32,2.18,14.24,7.87,15.9,15.67.39,1.89,3.29,1.09,2.89-.8Z"/><path class="cls-1" d="M55.18,3.2C52,6.85,49,11.32,47.72,16.07c-2.06,7.71,2.82,12.33,10.06,13.87,1.88.4,2.68-2.49.79-2.89-3.28-.7-7.17-1.88-8.19-5.5-.74-2.65.37-5.65,1.49-8A35.46,35.46,0,0,1,57.3,5.32c1.28-1.44-.84-3.57-2.12-2.12Z"/><path class="cls-1" d="M55.77,108.31c3.58-7,1.72-15-4.9-19.35-1.61-1.07-3.12,1.53-1.51,2.59,5.2,3.45,6.62,9.72,3.82,15.25-.87,1.71,1.71,3.23,2.59,1.51Z"/></g></g></svg>
              <span >Bromidrose nas axilas - Cecê</span>
            </div>
          </li>
          <li class="my-3">
            <div class="card">
            <svg style="width:150px; margin-top:50px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.7 105.49"><defs><style>.cls-1{fill:#666cfe;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="_4" data-name="#4"><path class="cls-1" d="M44.66,2.65c9.27,15.79,18.52,31.61,27.55,47.54,6,10.6,11.72,21.76,20.56,30.35,2.87,2.78,6.21,4.35,9.57,6.43,2.19,1.36,6.63,3.76,7.18,6.58,1,5.41-7.6,6.43-10.46,3.22-1.29-1.44-3.41.69-2.12,2.12,4.74,5.32,17.86,2,15.47-6.14-2.18-7.45-13.16-9.9-18.21-15-8.48-8.61-14-19.52-19.89-29.92q-8-14.1-16.2-28.08Q52.7,10.42,47.25,1.14a1.5,1.5,0,0,0-2.59,1.51Z"/><path class="cls-1" d="M94.28,89.41a21.19,21.19,0,0,1,2.19,7.84c.1,1.93-.27,4.49-2.41,5.18a4.38,4.38,0,0,1-4.69-2c-1-1.62-3.64-.12-2.59,1.52,2.91,4.54,9.84,4.94,12.07-.46,1.76-4.24-.09-9.71-2-13.63-.84-1.74-3.43-.22-2.59,1.51Z"/><path class="cls-1" d="M85.65,89.06a24.64,24.64,0,0,1,1.66,8.85c-.07,2.13-1,4.37-3.68,3.63a2.92,2.92,0,0,1-1.92-2.7c-.12-1.92-3.13-1.94-3,0,.33,5,6.78,8.26,10.25,3.77,2.88-3.74,1-10.35-.41-14.35-.64-1.81-3.54-1-2.9.8Z"/><path class="cls-1" d="M77.52,89.94c1.11,2.17,2.2,5.2,1.57,7.63-.41,1.57-2.61,3.49-4.2,2.25a3.49,3.49,0,0,1-1-2.1c-.35-1.89-3.24-1.09-2.89.8.89,4.83,6.32,6.1,9.61,2.49,3.08-3.36,1.36-9-.48-12.58-.89-1.72-3.48-.2-2.59,1.51Z"/><path class="cls-1" d="M68.51,89.41a24.39,24.39,0,0,1,1.95,3.16c.32.63,1.22,2.09,1.11,2.83-.59,4.25-5.72,1.3-7.06-.36a14.81,14.81,0,0,0-5.06-4.61C52,85.9,44.54,81.18,36.58,77.6c-8.38-3.78-18.24-8.48-23.79-16.1-6-8.27,2.7-20.35,8.84-26.4a1.54,1.54,0,0,0,.24-1.82L2.81.72A1.5,1.5,0,0,0,.22,2.24L19.28,34.8,19.51,33C14,38.42,7.26,47.83,7.48,55.89c.25,9,11.19,15.57,18,19.48,7.67,4.39,15.8,7.8,23.45,12.28,3.72,2.18,7.8,4.21,11.27,6.77,1.46,1.08.26.17,1,1.17a11.21,11.21,0,0,0,4.46,4c3.11,1.44,8.28,1.52,9-2.69.5-3.07-1.82-6.64-3.53-9-1.12-1.55-3.72-.05-2.59,1.51Z"/><path class="cls-1" d="M28.42,33.33c-5.85,5-2.61,12.54,2.21,16.86,1.43,1.28,3.56-.83,2.12-2.12-3.63-3.26-6.76-8.7-2.21-12.62,1.47-1.26-.66-3.37-2.12-2.12Z"/></g></g></svg>
              <span >Bromidrose nos pés - Chulé</span>
            </div>
          </li>
          <li class="my-3">
            <div class="card">
            <svg style="    width: 190px;   margin: 55px 0 25px 35px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 142.29 92.59"><defs><style>.cls-1{fill:#666cfe;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="_4" data-name="#4"><path class="cls-1" d="M50.88,25.32C50.23,2.14,20.81-9.28,5.65,9.18-9.06,27.09,7.05,54.38,29.8,50.43c12.28-2.14,20.73-12.89,21.08-25.11,0-1.94-3-1.93-3,0-.35,12.25-10,22.5-22.5,22.5a22.72,22.72,0,0,1-22.5-22.5,22.7,22.7,0,0,1,22.5-22.5c12.51,0,22.15,10.24,22.5,22.5C47.93,27.24,50.93,27.25,50.88,25.32Z"/><path class="cls-1" d="M26.88,91.14V49.32a1.5,1.5,0,0,0-3,0V91.14a1.5,1.5,0,0,0,3,0Z"/><path class="cls-1" d="M40.69,72.35H8.79a1.5,1.5,0,0,0,0,3h31.9a1.5,1.5,0,0,0,0-3Z"/><path class="cls-1" d="M122.21,56.46c-.29-11.56-7.07-22.05-18-26.28a28.42,28.42,0,0,0-31.83,8.24c-16.48,19.87,1.38,50.4,26.77,45.75,13.45-2.46,22.73-14.27,23.07-27.71.05-1.93-2.95-1.93-3,0C118.86,70.21,108,81.62,94,81.65a25.19,25.19,0,1,1,0-50.38c14,0,24.84,11.47,25.19,25.19C119.26,58.39,122.26,58.39,122.21,56.46Z"/><path class="cls-1" d="M115.73,10.76h25.06L139.73,8.2,112.05,36.76c-1.34,1.38.78,3.51,2.12,2.12l27.68-28.56a1.52,1.52,0,0,0-1.06-2.56H115.73a1.5,1.5,0,0,0,0,3Z"/><path class="cls-1" d="M139.29,9.26V35.9a1.5,1.5,0,0,0,3,0V9.26a1.5,1.5,0,0,0-3,0Z"/></g></g></svg>
              <span >Higiene íntima</span>
            </div>
          </li>
          
        </ul>
        <?php if ( wp_is_mobile() ) : ?>
    <!-- Mobile-specific content goes here -->
    <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
<?php else : ?>
    <!-- Desktop-specific content goes here -->
<?php endif; ?>
        </div>
      </div>
    </div>
   
    </div>
    </section>




   
  <section class="bgRoxo rowTransicao">

  <div class="container">

    <div class="row  text-center">
     <h3 class="w-100 textWhite fontGrande">Levitate cuida da pele através dos ativos:</h3>
    </div>
  </section>

  <section class="whiteRow " style="    padding: 60px 0 90px 0;" id="niami">
    

    
  <div class="container-fluid">
  <div class="row ">
        <div class="col-lg-5 col-md-12">
        <img src="<?php echo get_stylesheet_directory_uri ();?>/img/MULHERSORRINDO.png" alt="MULHERSORRINDO.png" id="MULHERSORRINDO" >
        </div>

        <div class="col-lg-7 col-md-12">
          <ul class="customList">
            <li>
            <p class="fontBig textBlue m-0"><i class="fa fa-chevron-right" style="font-size:30px; margin-right:20px;"></i>Niacinamida</p>
              <span class="fontBigMinus"  class="fontNormal pl-5">Uniformiza o tom da pele;</span>
            </li>
            <li>
            <p class="fontBig textBlue m-0 "><i class="fa fa-chevron-right" style="font-size:30px; margin-right:20px;"></i>Ácido lático</p>
              <span class="fontBigMinus"  class="fontNormal pl-5">Regula o pH;</span>
            </li>
            <li>
            <p class="fontBig textBlue  m-0"><i class="fa fa-chevron-right" style="font-size:30px; margin-right:20px;"></i>Pantenol e Aloe Vera</p>
              <span class="fontBigMinus"  class="fontNormal pl-5">Acalmam e coonferem hidratação.</span>
            </li>

            <li>
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink btnPinkCustom" style="margin: 86px 0 0 80px;">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
            </li>
              
          </ul>
  
        </div>
 
  </div>
  </div>
  </section>
  
 
  
    
  <section class="bgRoxo rowTransicao">
    <div class="container-fluid">
    <div class="row text-center">
      <h3 class="w-100 textWhite fontGrande">Fórmula livre de <b>Alumínio, Álcool e Parabenos</b></h3>
    </div>
  </section>

  <section class="whiteRow sectionMicelar" >
   
   <div class="container ">

 
<div class="row ">

 

<?php if ( wp_is_mobile() ) : ?>
    <!-- Mobile-specific content goes here -->


    <div class="col-12">
 <img src="<?php echo get_stylesheet_directory_uri();?>/img/ICONEQUIMICA.png" alt="ICONEQUIMICA.png" class="iconeQuimica" style="display: block;margin: 0 auto;" class="mb-5">
</div>
<div class="col-12">
  
<div class="txtBox text-center mx-5 px-5">
<p class="fontBig mb-5" >A Água Micelar remove as impurezas através de Micelas.</p>
 <p class="fontBig mb-5">E combate as bactérias causadoras dos maus odores, preservando o microbioma saudável da pele</p>

 <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink mt-5">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
</div>

</div>







<?php else : ?>
    <!-- Desktop-specific content goes here -->


    <div class="col-lg-6 ">

<div class="txtBox text-center">
<p class="fontNormalPlus mb-5" >A Água Micelar remove as impurezas através de Micelas.</p>
 <p class="fontNormalPlus mb-5">E combate as bactérias causadoras dos maus odores, preservando o microbioma saudável da pele</p>

 <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink mt-5">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
</div>



</div>
<div class="col-lg-6 ">
 <img src="<?php echo get_stylesheet_directory_uri();?>/img/ICONEQUIMICA.png" alt="">
</div>



<?php endif; ?>





</div>
</div>
   

</div>
</section >

<section class="bgRoxo rowTransicao">
    <div class="container-fluid">
    <div class="row text-center">
      <h3 class="w-100 textWhite fontGrande">Levitate te faz setir <b>Leve e confiante!</b></h3>
    </div>
  </section>



  <!-- <section class="userFeedback">
  <div class="container">
    <div class="row">
      php
      // Query posts with the 'feedback' meta key
      $args = array(
        'post_type' => 'post', // Adjust if you're using a custom post type
        'meta_query' => array(
          array(
            'key' => 'feedback', // Custom meta key to identify feedback posts
            'value' => '1', // Value to filter feedback posts
            'compare' => '='
          )
        ),
        'posts_per_page' => 10, // Limit the number of posts
      );
      $feedback_posts = new WP_Query($args);

      if ($feedback_posts->have_posts()) :
        while ($feedback_posts->have_posts()) : $feedback_posts->the_post(); ?>
          <div class="col-lg-6 col-md-4">
            <div class="feedback-box">
              Display featured image 
              <div class="feedback-photo">
                php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('medium', ['class' => 'img-fluid']);
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/default-avatar.png') . '" class="img-fluid" alt="Default Image">';
                }
                ?>
              </div>

               Display post title 
              <h3 class="feedback-title">php the_title(); ?></h3>

               Display stars (post meta) 
              <div class="feedback-stars">
                php
                $stars = get_post_meta(get_the_ID(), 'stars', true); // Custom meta for stars
                if ($stars) {
                  for ($i = 0; $i < $stars; $i++) {
                    echo '<span class="star">&#9733;</span>'; // Unicode star
                  }
                } else {
                  echo '<p>No star rating available.</p>'; // Fallback if stars meta is missing
                }
                ?>
              </div>

               Display post excerpt 
              <div class="feedback-content">
                php the_excerpt(); ?>
              </div>
            </div>
          </div>
        php endwhile;
        wp_reset_postdata(); // Reset the global post object
      else : ?>
        <p>No feedback posts available at the moment.</p>
      php endif; ?>
    </div>
  </div>
</section> -->
  

    
  <section class="blueBg  sectionMicelar" style="padding:85px 0px 50px 0;" >
  <!-- <div class="nuvemRoxaTwo"> -->


  <?php if ( wp_is_mobile() ) : ?>
    <!-- Mobile-specific content goes here -->

<div class="container">
  <div class="row">

  <div class="col-6">
      <img src="<?php echo get_stylesheet_directory_uri();?>/img/PRODUTO_SINGLE.png" alt="PRODUTO_SINGLE" id="produtoSingleMobile">
      </div>

      <div class="col-6">
        <div class="textBoxSingle">

          <h2 class="text-white fontBold">Água Micelar Coportal Levitate</h2>
        </div>
  </div>
  <div class="col-12">
  <p class="fontBigMinus text-center  textWhite my-5">Primeira e única que<br> higieniza e previne <br> <b class="fontBigPlus">Todos OS ODORES<br> durante 24h</b></p>
  <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
  </div>
  </div>

  
</div>










<?php else : ?>
    <!-- Desktop-specific content goes here -->


    <div class="container">
    <div class="row">
      <div class="col-lg-4">
      <img src="<?php echo get_stylesheet_directory_uri();?>/img/PRODUTO_SINGLE.png" alt="PRODUTO_SINGLE" id="produtoSingle">
      </div>
    <div class="col-lg-8 ">

    <div class="txtBox text-center my-3">
    <p class="textWhite fontGrande">Água Micelar Coporal Levitate</p>
        <p class="fontNormal fontBold textWhite my-3">Primeira e única que<br> higieniza e previne <br> <b class="fontBig">Todos OS ODORES<br> durante 24h</b></p>
        <p class="fontGrande fontBold textWhite my-3">LEVITE COM LEVITATE</p>
        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink mt-5">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
    </div>
        
  </div>

 
    </div>
  
  </div>








<?php endif; ?>
  
    
 
  <!-- </div> -->
</section>
    


<section class="bgRoxo "> 
  <div class="container-fluid">
   


    <?php if ( wp_is_mobile() ) : ?>

      <div class="row rowLista" style="">

<div class="col-12 text-center">
  <p  class="textWhite fontGrande " style="text-align:center;" >Nossos Selos</p>
</div>
<div class="col-12"> 
<ul class="listaIcons listaIconsCustom p-0 text-center">
  
  <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_DERMA.svg" alt=""><p class="fontBold fontNormal textWhite">Dermatologicamente Testada</p></li>
  <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_GINE.svg" alt=""><p class="fontBold fontNormal textWhite">Ginecológica-<br>mente Testada</p></li>
  <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_HIPO.svg" alt=""><p class="fontBold fontNormal textWhite">Hipoalergênica</p></li>
</ul>
</div>
<div class="col-12">
  
<ul class="listaIcons listaIconsCustom p-0 text-center">
  <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_ALUM.svg" alt=""><p class="fontBold fontNormal textWhite">Não contém Alumínio</p></li>
  <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_VEGANA.svg" alt=""><p class="fontBold fontNormal textWhite">Vegana</p></li>
  <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_ANIMAL.svg" alt=""><p class="fontBold fontNormal textWhite">Sem testes animais</p></li>
</ul>
</div>
</div>
    <!-- Mobile-specific content goes here -->
<?php else : ?>




  <div class="col-12 text-center">
      <p  class="textWhite fontGrande " style="text-align:center;" >Nossos Selos</p>
    </div>
    <div class="col-12"> 
    <ul class="listaIcons">
      
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_DERMA.svg" alt=""><p class="fontBold fontNormal textWhite">Dermatologicamente Testada</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_GINE.svg" alt=""><p class="fontBold fontNormal textWhite">Ginecológica-<br>mente Testada</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_HIPO.svg" alt=""><p class="fontBold fontNormal textWhite">Hipoalergênica</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_ALUM.svg" alt=""><p class="fontBold fontNormal textWhite">Não contém Alumínio</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_VEGANA.svg" alt=""><p class="fontBold fontNormal textWhite">Vegana</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_ANIMAL.svg" alt=""><p class="fontBold fontNormal textWhite">Sem testes animais</p></li>
    </ul>
    </div>
    </div>


    <!-- Desktop-specific content goes here -->
<?php endif; ?>

    
   
  </div>
</section>

<section class="loopProdutos mb-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="fontGrande textBlue my-5">Nossos Produtos</h2>
      </div>
    
      <?php
      // WooCommerce product loop
      $args = array(
        'post_type' => 'product',
        'posts_per_page' => 3, // Number of products to display
      );

      $loop = new WP_Query($args);

      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
          global $product;
      ?>
          <div class="col-md-4 col-sm-6 mb-5">
            <div class="product-item- productItemBox text-center">
              <a href="<?php the_permalink(); ?>" class="mb-5">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium', array('class' => 'img-fluid imgLoopProducts')); ?>
                <?php else : ?>
                  <img  src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" class="img-fluid imgLoopProdutos">
                <?php endif; ?>
              </a>
              <p class="product-title  mt-5">
                <a class="fontNormal textPink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </p>

              <p class="product-short-description fontNormalPlus greytext">
  <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
              </p>


              <p class="product-price fontNormalPlus"><?php echo $product->get_price_html(); ?></p>
             
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p class="col-12 text-center">Nenhum produto encontrado.</p>';
      endif;
      ?>
      <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btnPink my-5">Experimente</a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
    </div>
  </div>
</section>


    

  </div>







</div>



<?php get_footer(); ?>