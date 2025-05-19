<footer id="footer greyBg">
   
   <div class="container-fluid">
      <div class="row bgRoxo" style="padding:50px 0;">

      </div>

      <?php if ( wp_is_mobile() ) : ?>
    <!-- Mobile-specific content goes here -->


 <div class="row " style="padding: 5% 0; ">
        
         <div class="col-12 mb-5">
            
            <ul style="list-style-type: none; padding:0; text-align:center;">
              <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'dicas-levitate' ) ); ?>">Dicas Levitate</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'duvidas-frequentes' ) ); ?>">Dúvidas Frequentes</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'contato' ) ); ?>">Contato</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="">Afiliados</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="<?php echo get_permalink( get_page_by_path( 'termos-e-condicoes' ) ); ?>">Termos e Condições</a></li>
            </ul>
         </div>
         
         <div class="col-12 text-center"><p class="fontBig">Siga nas Redes Sociais</p>
      
         <ul class="listaIcons" style="list-style-type: none; padding:0; justify-content:center;">
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/WHATSAPP.png" alt=""></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/FACEBOOK.png" alt=""></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/ICONE_INSTAGRAM.png" alt=""></li>
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
         <div class="col-4"><img src="<?php echo get_stylesheet_directory_uri();?>/img/LOGO_AZUL.png" alt="LOGO_AZUL" style="float:right;" class="logo_footer"></div>
         <div class="col-4 text-center"><p class="fontBig">Siga nas Redes Sociais</p>
      
         <ul class="listaIcons" style="list-style-type: none; padding:0; justify-content:center;">
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/WHATSAPP.png" alt=""></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/FACEBOOK.png" alt=""></li>
            <li style="width: auto;"><img style="max-width: 50px;" src="<?php echo get_stylesheet_directory_uri();?>/img/ICONE_INSTAGRAM.png" alt=""></li>
         </ul>

         <p class="fontNormal greyText">Levitate Cosméticos e Artigos LTDA</p>
         <p class="fontNormal greyText">CNPJ: 58.068.912/0001-85</p>
         <p class="fontNormal greyText">Todos os direitos reservados</p>
<!--         
         <p><b>Email:</b>Loja@gmail.com</p>
         <p><b>Telefone:</b>99 9999-9999</p> -->
        
      </div>
         <div class="col-4">
            
            <ul style="list-style-type: none; padding:0;">
              <li class="fontBigMinus"><a style="color:black;" href="">DICAS LEVITATE</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="">Dúvidas Frequentes</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="">Contato</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="">Afiliados</a></li>
               <li class="fontBigMinus"><a style="color:black;" href="">Termos e Condições</a></li>
            </ul>
         </div>
      </div>




<?php endif; ?>
     
   </div>


</footer>

<?php wp_footer(); ?>
</body>
</html>

