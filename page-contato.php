<?php
/*
 * Template Name: Página Contato
 */

get_header();
?>

<div class="container">
    <div class="row" style="padding:5% 0px;">
        <div class="col-12">
            <h1 class="font-xxlarge w-100 mb-5 textPink text-center"><?php echo the_title(); ?></h1>
        </div>
        <div class="col-lg-8 col-sm-12">
            <ul class="contatoText">
                <li class="font-large">Estamos aqui para ajudar! Envie um e-mail através do formulário ao lado, para sugestões, dúvidas ou assistência.</li>
                <li class="font-large">Nossa equipe está pronta para garantir que sua experiência com Levitate seja positiva e satisfatória.</li>
                <li class="font-large">Os links seguintes contêm informações que podem ser úteis: <a class="textPink" href="">Dicas Levitate</a> e <a class="textPink" href="">Dúvidas Frequentes</a></li>
                <li class="font-large">Agradecemos por escolher Levitate, em breve, retornaremos o seu contato.</li> 
            </ul>
        </div>

        <div class="col-lg-4 col-sm-12">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact_form'])) {
                // Sanitize and validate form inputs
                $name = sanitize_text_field($_POST['name']);
                $email = sanitize_email($_POST['email']);
                $message = sanitize_textarea_field($_POST['message']);

                if (!empty($name) && !empty($email) && !empty($message) && is_email($email)) {
                    // Email details
                    $to = get_option('admin_email'); // Sends to the site admin email
                    $subject = "Contato de $name";
                    $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";
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
                <h6 class="textPink">Contato</h6>
                <div class="form-group">
                    <label class="textPink" for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="textPink" for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="textPink" for="message">Mensagem</label>
                    <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" name="submit_contact_form" class="btn btnPink">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php
get_footer();
?>