<footer id="footer greyBg">
   
   <div class="container-fluid">
      <div class="row bgRoxo" style="padding:50px 0;">

      </div>

      <?php if ( wp_is_mobile() ) : ?>
    <!-- Mobile-specific content goes here -->


 <div class="row " style="padding: 5% 0; ">
        
         <div class="col-12 mb-5">
            
            <ul style="list-style-type: none; padding:0; text-align:center;">
              <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'manual-levitate' ) ); ?>">Manual Levitate</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'duvidas-frequentes' ) ); ?>">Dúvidas Frequentes</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'contato' ) ); ?>">Contato</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'Embaixadores' ) ); ?>">Embaixadores</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'termos-e-condicoes' ) ); ?>">Termos e Condições</a></li>
            </ul>
         </div>
         
         <div class="col-12 text-center"><p class="fontBig">Siga nas Redes Sociais</p>
      
         <ul class="listaIcons" style="list-style-type: none; padding:0; justify-content:center;">
            <li style="width: auto;"><a href="https://www.instagram.com/meulevitate/" target="_blank"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/ICONE_INSTAGRAM.png" alt="ICONE_INSTAGRAM.png"></a></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/TIKTOK.png" alt="TIKTOK.png"></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/FACEBOOK.png" alt="FACEBOOK.png"></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/YOUTUBE.png" alt="YOUTUBE.png"></li>
         </ul>

         <p class="fontNormal greyText">Levitate Cosméticos e Artigos LTDA</p>
         <p class="fontNormal greyText">CNPJ: 58.068.912/0001-85</p>
         <p class="fontNormal greyText">Todos os direitos reservados</p>
<!--         
         <p><b>Email:</b>Loja@gmail.com</p>
         <p><b>Telefone:</b>99 9999-9999</p> -->
        
      </div>
      </div>






<?php else : ?>
    <!-- Desktop-specific content goes here -->




    <div class="row" style="padding: 5% 0;">
         <div class="col-4"><a href="/"><img src="<?php echo get_stylesheet_directory_uri();?>/img/LOGO_AZUL.png" alt="LOGO_AZUL" style="float:right;" class="logo_footer"></a></div>
         <div class="col-4 text-center"><p class="font-xlarge fontBold">Siga nas Redes Sociais</p>
      
         <ul class="listaIconsFooter" style="list-style-type: none; padding:0; justify-content:center;">
         <li style="width: auto;"><a href="https://www.instagram.com/meulevitate/" target="_blank"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/ICONE_INSTAGRAM.png" alt="ICONE_INSTAGRAM.png"></a></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/TIKTOK.png" alt="TIKTOK.png"></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/FACEBOOK.png" alt="FACEBOOK.png"></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/YOUTUBE.png" alt="YOUTUBE.png"></li>
         </ul>

         <p class="font-large greyText">Levitate Cosméticos e Artigos LTDA</p>
         <p class="font-large greyText">CNPJ: 58.068.912/0001-85</p>
         <p class="font-large greyText">Todos os direitos reservados</p>
<!--         
         <p><b>Email:</b>Loja@gmail.com</p>
         <p><b>Telefone:</b>99 9999-9999</p> -->
        
      </div>
         <div class="col-4">
            
            <ul style="list-style-type: none; padding:0;">
              <li class="font-large fontBold"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'manual-levitate' ) ); ?>">Manual Levitate</a></li>
               <li class="font-large fontBold"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'duvidas-frequentes' ) ); ?>">Dúvidas Frequentes</a></li>
               <li class="font-large fontBold"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'contato' ) ); ?>">Contato</a></li>
               <li class="font-large fontBold"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'Embaixadores' ) ); ?>">Embaixadores</a></li>
               <li class="font-large fontBold"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'politica-de-privacidade' ) ); ?>">Política de Privacidade</a></li>
               <li class="font-large fontBold"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'termos-e-condicoes' ) ); ?>">Termos e Condições</a></li>
            </ul>
         </div>
      </div>




<?php endif; ?>
     
   </div>


</footer>

<?php wp_footer(); ?>
</body>
</html>

