<?php
/*
Template Name: About Us
*/

get_header();
?>

<div class="container">
    <div class="row" style="min-height: 70vh;">
        <div class="col-12">
            <h1 class="font-xlarge  w-100 my-5 textPink text-center"><?php echo the_title(); ?></h1>
        </div>
        <div class="col-lg-6 col-sm-12">
            <p class="font-large">Levitate é uma marca que busca transformar a vida das pessoas com produtos de beleza e de higiene pessoal inovadores e exclusivos no mercado</p>

            <p class="font-large">Nossas fórmulas são desenvolvidas por especialistas e refletem os avanças da indústria de comséticos para atender suas encessidades.</p>

            <img src="<?php echo get_stylesheet_directory_uri();?>/img/LOGO_AZUL.png " alt="LOGO_AZUL" style="display: block;
    margin: 10rem auto;">
        </div>

        <div class="col-lg-6 col-sm-12">
            <h2 class="textPink font-xlarge">Missão e Visão</h2>
            <p class="font-large">Nossa missão é proporcionar a todos os nossos clientes umas sensação de leveza e confiança ao longo do dia, por meios de produtos de alta qualidade, eficazes e seguros.</p>
            <p class="font-large">Nossa visão é ser a principal escolha em cosméticos de higiene pessoal e, assim, otimizar a rotina das pessoas</p>
            <h2 class="textPink font-xlarge">Nossos Valores</h2>
            <p class="font-large">Nossa emprese se dedida a continuamente pela inovação e <b>excelência.</b> Mantendo o compromisso com a sustentabilidade, responsabilidade para com nossos clientes e colaboradores durante cada fase de criação, produção e distribuição.</p>
        </div>
    </div>
</div>

<?php
get_footer();
?>