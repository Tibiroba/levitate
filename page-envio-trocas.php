<?php
/*
Template Name: Sobre envios, trocas e devoluções
*/

get_header(); ?>

<div class="container my-3">
    <h2 class="font-xlarge textPink text-center my-5"><?php the_title(); ?></h2>

    <div class="row">
    <div id="manualAccordion1" class="accordion col-12">
                    <!-- Accordion Item 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-xlarge  textPink" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                Como acompanho o envio do produto?

                                </button>
                            </h5>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#manualAccordion1">
                            <div class="card-body">
                              <p class="font-large">Após o envio do seu pedido, você receberá um <b>e-mail com as informações de rastreamento.</b> Lembre-se de que o prazo de entrega considera apenas os dias úteis e não inclui fins de semana, feriados ou o tempo de preparação do pedido.
</p>
                              
                            </div>
                        </div>
                    </div>
                    <!-- Add more accordion items here -->
                </div>

                <div id="manualAccordion2" class="accordion col-12">
                    <!-- Accordion Item 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-xlarge  textPink" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                Cancelamentos

                                </button>
                            </h5>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#manualAccordion2">
                            <div class="card-body">
                              <p class="font-large">Depois de processado, <b>o pedido não pode ser cancelado, editado ou alterado.</b> Por isso, revise cuidadosamente os itens no carrinho e os dados de envio e cobrança antes de finalizar a compra.
</p>
                              
                            </div>
                        </div>
                    </div>
                    <!-- Add more accordion items here -->
                </div>

                <div id="manualAccordion3" class="accordion col-12">
                    <!-- Accordion Item 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-xlarge  textPink" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                Devoluções e Reembolsos

                                </button>
                            </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#manualAccordion3">
                            <div class="card-body">
                              <p class="font-large">Você pode <b>devolver</b> produtos Levitate® comprados em nosso site em até <b>7 dias após o  recebimento.</b> O reembolso será feito no mesmo valor pago, incluindo descontos, se houver. <b>O custo de envio pela Transportadora não será reembolsado.</b></p>
                              <p class="font-large">Se aprovado, enviaremos uma <b>etiqueta de devolução pré-paga</b> por e-mail. A qual deverá ser impressa e entregue junto ao produto nos <b>Correios.</b> O prazo de processamento é de até 15 dias úteis após o recebimento do item.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more accordion items here -->
                </div>

                <div id="manualAccordion4" class="accordion col-12">
                    <!-- Accordion Item 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-xlarge  textPink" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                Pedidos não recebidos

                                </button>
                            </h5>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#manualAccordion4">
                            <div class="card-body">
                              <p class="font-large">Se o rastreamento indicar que o pedido foi entregue, mas você não o recebeu, entre em contato diretamente com <b>a transportadora responsável para registrar uma reclamação. Ressaltamos que a entrega é de responsabilidade exclusiva da Transportadora que você escolheu.</b></p>
                              <p class="font-large"><b>Não reembolsamos pedidos enviados para endereços incorretos ou inválidos.</b></p>

                            </div>
                        </div>
                    </div>
                    <!-- Add more accordion items here -->
                </div>

                <div id="manualAccordion4" class="accordion col-12">
                    <!-- Accordion Item 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <button class="btn btn-link font-xlarge  textPink" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                            <h5 class="mb-0">
                                Trocas

                                </button>
                            </h5>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="headingOne" data-parent="#manualAccordion4">
                            <div class="card-body">
                              <p class="font-large"><b> Não realizamos trocas.</b> Contudo, você <b>pode devolver o produto</b> em até 7 dias após a compra e solicitar um reembolso.</b></p>
                              
                              
                            </div>
                        </div>
                    </div>
                    <!-- Add more accordion items here -->
                </div>

    </div>
    
    <!-- Add your content here -->
</div>

<?php get_footer(); ?>