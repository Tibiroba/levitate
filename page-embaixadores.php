<?php
get_header();

/*
Template Name: Embaixadores Page
*/  

?>

<div class="container my-3 px-2">
    <div class="row">
        <div class="col-12">
            <h1 class="textPink text-center my-2">Embaixadores Levitate</h1>
            <p class="textBlue fontNormalPlus fontBold my-3">Você é um influenciador e criador de conteúdo ?</p>
            <p class="fontNormal mb-3">Estamos em busca de parceiros incríveis!<br>Se você tem um público engajado e acredita no poder de promover Levitate, queremos você conosco.</p>
            <p class="textBlue fontNormalPlus fontBold my-3">Quais são as características de um Embaixador Levitate?</p>
            <p class="fontNormal">Um Embaixador Levitate é alguém que acredita no impacto positivo dos produtos excluisvos da marca. Ele os promove de forma autêntica, criado conexões genuínas e engajando sua comunidade. </p>
            <p class="fontNormal">Proativo e ético, representa a amrca com paixão. Sempre alinhado à missão de transformar vidas, levando autoestima, confiança e leveza à vida das pessoas.</p>
            <p class="textBlue fontNormalPlus fontBold my-3">Quais são os benefícios para os Embaixadores?</p>
            <ul class="listaEmbaixadores">
                <li class="fontNormal"><b>Comissão por vendas:</b> Ganhe comissões sobre todas as vendas geradas por suas indicações através da emissão de links e de cunpons de desconto personalizados.</li>
                <li class="fontNormal"><b>Acompanhamento de resultados: </b>Acesse métricas para otimizar suas estratégias e maximizar seus ganhos.</li>
                <li class="fontNormal"><b>Suporte Direto:</b> Envia suas dúvidas ou feedback para nossa equipe.</li>
            </ul>
            <p class="textBlue fontNormalPlus fontBold my-3">Para aderir ao Programa de Embaixadores Levitate, inscreva-se aqui:</p>

            <div class="formEmbaixadores">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact_form'])) {
                // Sanitize and validate form inputs
                $name = sanitize_text_field($_POST['name']);
                $email = sanitize_email($_POST['email']);
                $message = sanitize_textarea_field($_POST['message']);
                $telefone = sanitize_text_field($_POST['tel']);
                $redesSociais = sanitize_textarea_field($_POST['redesSociais']);


                if (!empty($name) && !empty($email) && !empty($message) && is_email($email)) {
                    // Email details
                    $to = get_option('admin_email'); // Sends to the site admin email
                    $subject = "Contato de $name";
                    $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message\nTelefone: $telefone\nRedes Sociais: $redesSociais";
                    $headers = ['Content-Type: text/plain; charset=UTF-8'];

                    // Send email
                    if (wp_mail($to, $subject, $body, $headers)) {
                        echo '<p class="text-success">Obrigado por entrar em contato! Em breve retornaremos.</p>';
                    } else {
                        echo '<p class="text-danger">Ocorreu um erro ao enviar o e-mail. Tente novamente mais tarde.</p>';
                    }
                } else {
                    echo '<p class="text-danger">Por favor, preencha todos os campos corretamente.</p>';
                }
            }
            ?>

            <!-- Contact Form -->
            <form method="POST" action="" class="my-3">
                
                <div class="form-group">
                    <label class="textPink" for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="textPink" for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="textPink" for="tel">Telefone</label>
                    <input type="tel" name="tel" id="tel" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="textPink" for="redesSociais">Redes Sociais</label>
                    <textarea name="redesSociais" id="redesSociais" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label class="textPink" for="message">Mensagem</label>
                    <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" name="submit_contact_form" class="btn btnPink w-100">Enviar</button>
            </form>
            </div>
            
        </div>
    </div>
</div>

<?php
get_footer();
?>