<?php
/*
 * Template Name: NEutralizador
 */

get_header();
?>


<div class="container my-5">
    <div class="row rowCustomReverse">
        <div class="col-md-4 col-sm-12">
        <?php
            // Replace with the ID or SKU of the product you want to display
            $product_id = 100; // Replace 123 with your product ID
            $product = wc_get_product($product_id);

            if ($product) {
                echo '<div class="product text-center productCustom">';
                echo '<h2 class="textBlue">' . $product->get_name() . '</h2>'; // Product name
                echo '<p>' . $product->get_price_html() . '</p>'; // Product price
                echo '<div class="product-image productPage">' . $product->get_image() . '</div>'; // Product image
                echo '<a href="' . $product->get_permalink() . '" class=" my-5 btn btnPink">Experimente</a>'; // Product link
                echo '</div>';
            } else {
                echo '<p>Product not found.</p>';
            }
            ?>
        </div>
        <div class="col-md-8 col-sm-12">
<h2 class="textBlue  ">Neutralizador Têxtil 500ml</h2>
            <p class="font-large">O <b>Neutralizador Têxtil Levitate</b> é um produto em spray (não aerosol), que ao ser aplicado, <b>previne</b> maus odores, como <b>chulé, cecê e cheiro de mofo, em roupas, calçados e acessórios têxteis.</b></p>
            <p class="font-large">Além de mantê-los <b>cheirosos</b> por muito mais tempo. O Neutralizador Levitate ajuda a <b>reduzir lavagens desnecessárias, economiza produtos de limpeza e prolonga a durabilidade dos tecidos.</b></p>
            <h4 class="textPink">O Neutralizador Levitate pode ser usado em quais vestuários?</h4>
            <p class="font-large">Pode ser usado em roupas, calçados e acessórios têxteis, como <b>blusas, camisas, roupas de academia, bonés, calças, sandálias, tênis, meias e muito mais!</b></p>
            <h4 class="textPink">Qual a causa dos odores nos Vestuários?</h4>
          
            <p class="font-large">Todos temos vestuários que tendem a ter mais odores, como, por exemplo, roupas de academia e tênis.</p>
            <p class="font-large">Isso acontece porque <b>bactérias e fungos</b> causadores de odor aderem-se fortemente às fibras dos tecidos (principalmente em <b>malhas sintéticas e nas costuras de roupas de algodão)</b> formando uma camada protetora, chamada <b>biofilme</b>, que não é removida com a lavagem convencional.</b></p>
            <h4 class="textPink">Como o Neutralizador Levitate previne odores em tecidos?</h4>
            <p class="font-large">O Neutralizador Levitate possui o ativo <b>Ácido Lático</b> que tem a propriedade de inativar os biofilmes e os micro-organismos causadores de odores nos tecidos. Isso garante frescor e proteção prolongada para os vestuários.</p>
            
            <p class="font-large">Mais informações em <a href="/manual-levitate" class="btn btnPurple">Manual Levitate</a></p><p class="font-large">Sua fórmula <b>feita exclusivamente com componentes cosméticos</b>, é clinicamente segura, sendo <b>dermatologicamente testada e hipoalergênica.</b></p>
            <h4 class="textPink">Modo de Usar:</h4>
            <div class="comoUsar w-100">
            <ul class="listaUse">
                <li class="font-large">Pendure o seu vestuário, de preferência, seco e limpo.</li>
                <li class="font-large">Borrife o <b class="textBlue">Neutralizador Levitate</b> a uma distância de 30 cm e umedeça uniformemente o tecido;</li>
                <li class="font-large">Aguarde a secagem e está pronta para o uso.</li>
            </ul>
            </div>
            
            <h4 class="textPink">Limitações do uso:</h4>
            <ul>
                <li><p class="font-large">Não utilize em roupas íntimas e trajes de banho.</p></li>
                <li><p class="font-large">Reaplique o produto somente após lavar o vestuário.</p></li>
                <li><p class="font-large">Indicado para todos os tipos de tecido exceto: vinil, seda, camurça ou couro.</p></li>
            </ul>

            <p class="font-large">Poucas pessoas sabem que o suor do corpo é naturalmente sem cheiro. Ele é composto por água, sal, proteínas e óleos inodoros. O mal cheiro (chamado bromidrose) surge quando as <b>bactérias ou fungos</b> decompõem essas substâncias liberando odores</p>
        <p class="font-large">Mais informações em: <a href="<?php echo get_permalink( get_page_by_path( 'manual-levitate' ) ); ?>">Manual Levitate</a> e <a href="<?php echo get_permalink( get_page_by_path( 'duvidas-frequentes' ) ); ?>">Dúvidas Frequentes</a></p>
        
            <div class="comoUsar">
                <p class="font-large textPink"><b>Composição :</b></p>
                <p class="font-large">ÁGUA, GLICERINA, ÁCIDO LÁTICO, POLISORBATO 20, SORBATO DE POTÁSSIO, EDETATO DISSÓDICO, ESSÊNCIA</p>
            </div>

            <p class="font-large textPink">Nossos Selos</p>
            <ul class="listaIconsMicelar w-100">
           
      
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_DERMA_BLUE.svg" alt=""><p class="fontBold font-large textBlue">Dermatologicamente Testada</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_GINE_BLUE.svg" alt=""><p class="fontBold font-large textBlue">Ginecológicamente Testada</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_HIPO_BLUE.svg" alt=""><p class="fontBold font-large textBlue">Hipoalergênica</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_ALUM_BLUE.svg" alt=""><p class="fontBold font-large textBlue">Não contém Alumínio</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_VEGANA_BLUE.svg" alt=""><p class="fontBold font-large textBlue">Vegana</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_ANIMAL_BLUE.svg" alt=""><p class="fontBold font-large textBlue">Sem testes animais</p></li>
   
            </ul>

            <p class="font-large">Levitate proporciona uma experiência única de cuidado pessoal para trazer leveza e confiança em seus dias!</p>
            <h5 class="textBlue">LEVITE COM LEVITATE</h5>

        </div>
    </div>
</div>
<!-- Content goes here -->

<?php
get_footer();
?>