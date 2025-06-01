<?php
/*
Template Name: Lencos Page
*/
get_header();
?>


<div class="container my-5">
    <div class="row rowCustomReverse">

    <div class="col-md-4 col-sm-12">
        <?php
            // Replace with the ID or SKU of the product you want to display
            $product_id = 69; // Replace 123 with your product ID
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
        <h2 class="textBlue  ">Lenços Levitate 48 unid</h2>
        <p class="fontNormal">Os Lenços Levitate foram especialmente <b>desenvolvidos para a aplicação da Água Micelar Levitate</b> na pele. Ao umedecer o Lenço com a Água Micelar, você pode higienizar <b>orelhas, pescoço, axilas, abdômen, região íntima, virilhas, pernas, pés</b> e onde precisar!</p>
        <p class="fontNormal">Sua <b>textura delicada</b> proporciona uma <b>aplicação segura e confortável</b>, garantindo uma <b>experiência de frescor e limpeza.</b></p>
        <p class="fontNormal">Indicado para todos os tipos de pele e para todas as regiões do corpo, pois ele é <b>dermatologicamente e ginecologicamente testado.</b></p>
        <div class="modoUsar w-100">
            <p class="fontNormalPlus textPink">Modo de usar:</p>
            <p class="fontNormal"><b class="textBlue">Aplique a Água Micelar Levitate</b> no <b class="textBlue">Lenço Levitate</b> e friccione-o delicadamente na pele retirando os resíduos.Descarte o lenço em lixo comum.
            <p class="fontNormal"><b>Frequência:</b> Até 3 vezes ao dia em cada local corpo</p>


        </div>
        <div class="modoUsar w-100">
            <p class="fontNormal"><b class="textPink">Quantidade:</b> 48 lenços descartáveis secos</p>
            <p class="fontNormal"><b class="textPink">Tamanho:</b> 15 cm x 20 cm cada</p>
            <p class="fontNormal"><b class="textPink">Composição:</b> TNT 40% poliéster 60% viscose</p>
        </div>

        <p class="fontNormal">Levitate proporciona uma experiência única de cuidado pessoal para trazer leveza e confiança em seus dia</p>
        <h5 class="textBlue">LEVITE COM LEVITATE</h5>
        </div>
    </div>
</div>


<?php
get_footer();
?>