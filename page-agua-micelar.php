<?php
/*
 * Template Name: Agua Micelar
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
<h2 class="textBlue  ">Água Micelar Corporal 200ml</h2>
            <p class="fontNormal">A Água Micelar Corporal Levitate foi desenvolvida para <b>higienizar a pele</b> e <b>prevenir os odores corporais</b> durante 24 horas</p>
            <p class="fontNormal">Ela contém <b>Niacinamida</b>, que uniformiza o e clareia tom da pele. O Pantenol e o <b>Extrato de Aloe Vera</b> que acalmam e conferem hidratação. E também o <b>Ácido Lático</b>, que regula o pH cutâneo.</p>
            <h4 class="textPink">Testes Clínicos</h4>
            <p class="fontNormal">Levitate realiza rigorosos testes clínicos  para garantir a <b>segurança e eficácia</b> dos seus produtos </p>
            <p class="fontNormal">Foi feita uma pesquisa credenciada pela Anvisa, <b>com 30 participantes, durante 30 dias</b>, com a Água Micelar, sendo que:</p>
            <ul class="w-100">
                <li class="fontNormal"><b>83%</b>  relataram clareamento da região íntima e <b>90%</b> relataram hidratação dessa região;</li>
                <li class="fontNormal"><b>87%</b>  relataram clareamento das axilas e <b>90%</b> relataram hidratação dessa região.</li>
            </ul>
            <p class="fontNormal">Além disso foi comprovado que a Água Micelar possui uma fórmula <b>hipoalergênica, dermatológica e ginecologicamente testada.</b></p>
            <h4 class="textPink">Em quais locais do corpo posso usar?</h4>
            <p class="fontNormal">Além disso foi comprovado que a Água Micelar possui uma fórmula <b>hipoalergênica, dermatológica e ginecologicamente testada.</b></p>
            <h4 class="textPink">Em quais locais do corpo posso usar?</h4>
            <p class="fontNormal">Você pode usar em qualquer lugar externo do corpo onde desejar, como em <b>orelhas, pescoço, axilas, abdômen, virilhas, pernas, pés e mais!</b></p>
            <p class="fontNormal">A Água Micelar também pode ser usada <b>na parte externa da região íntima,</b> isto é, em toda a <b>vulva.</b> Mas não deve ser aplicada no canal vaginal</p>
            <h4 class="textPink">Quando usar a Água Micelar Levitate?</h4>
            <p class="fontNormal">A Água Micelar pode ser aplicada <b>após o banho</b> para complementar a higienização e ajudar a prevenir odores. E também é ideal para momentos em que você <b>necessidade de se revitalizar,</b>  como após a academia, antes de uma reunião ou um encontro inesperado.</p>
            <h4 class="textPink">Como a Água Micelar funciona?</h4>
            <p class="fontNormal">Poucas pessoas sabem que o suor do corpo é naturalmente sem cheiro. Ele é composto por água, sal, proteínas e óleos inodoros. O mal cheiro (chamado bromidrose) surge quando as <b>bactérias ou fungos</b> decompõem essas substâncias liberando odores</p>
            <p class="fontNormal">A Água Micelar contém o ativo <b>Farnesol</b> que neutraliza os microorganismos causadores de odor, preservando o microbioma saudável da pele. E também, <b>Trietilcitrato</b> que impede a decomposição do suor pelas bactérias.</p>
            <p class="fontNormal">Além desses ativos, Levitate contém <b>Micelas</b>, pequenas partículas que atraem e removem as impurezas da pele gentilmente.</p>
            <div class="modoUsar w-100">
                <p class="fontNormal">Aplique a <b class="textBlue">Água Micelar Levitate</b> no <b class="textBlue">Lenço Levitate</b> e friccione delicadamente na pele retirando os resíduos.</p>
                <p class="fontNormal"><b>Frequência:</b> Até 3 vezes ao dia em cada local corpo.</p>
               
            </div>
            <p class="fontNormal"><b style="text-decoration:underline;">Observação:</b> A Água Micelar associada ao Antitranspirante Axilar potencializa a ação e a duração dele, e protege a pele contra danos.</p>
                <p class="fontNormal">Mais informações em <a href="" class="btn btnPurple">Dicas Levitate</a></p>
                <p class="fontNormal"><b style="text-decoration:underline;">Precauções:</b> Uso externo. Manter fora do alcance das crianças. Em caso de contato com os olhos, lavar com água em abundância. Em caso de sensibilização ou ingestão acidental, suspender o uso e procurar orientação médica. Manter o produto em local fresco, arejado e ao abrigode luz.</p>
                <h4 class="textPink">Composição <span class="fontNormalMinus">(Portugês)</span></h4>
                <div class="modoUsar w-100">
                    <p class="fontNormaal">ÁGUA, PANTENOL, TRIETILCITRATO, FARNESOL, NIACINAMIDA, ÁCIDO LÁTICO, ACETATO DE TOCOFERILA, POLISORBATO 20, SESQUICAPRILATO DE XILITILA, EDETATO DISSÓDICO, SORBATO DE POTÁSSIO, PROPANEDIOL, EXTRATO DE ALOE VERA.</p>
                    <p class="fontNormal"><b>o contém álcool, alumínio, petrolatos, parabenos, corantes e essências artificiais</b></p>
                </div>
            <ul class="listaIconsMicelar w-100">
           
            <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_DERMA_BLUE.svg" alt=""><p class="fontBold fontNormal textBlue">Dermatologicamente Testada</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_GINE_BLUE.svg" alt=""><p class="fontBold fontNormal textBlue">Ginecológicamente Testada</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_HIPO_BLUE.svg" alt=""><p class="fontBold fontNormal textBlue">Hipoalergênica</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_ALUM_BLUE.svg" alt=""><p class="fontBold fontNormal textBlue">Não contém Alumínio</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_VEGANA_BLUE.svg" alt=""><p class="fontBold fontNormal textBlue">Vegana</p></li>
      <li><img src="<?php echo get_stylesheet_directory_uri(  );?>/img/ICONE_ANIMAL_BLUE.svg" alt=""><p class="fontBold fontNormal textBlue">Sem testes animais</p></li>
   
            </ul>

            <p class="fontNormal">Levitate proporciona uma experiência única de cuidado pessoal para trazer leveza e confiança em seus dias!</p>
            <h5 class="textBlue">LEVITE COM LEVITATE</h5>

        </div>
    </div>
</div>
<!-- Content goes here -->

<?php
get_footer();
?>