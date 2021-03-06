html
  head
    meta(charset='utf-8')
    // <meta name="viewport" content="width=device-width,initial-scale=1.0">
    script(src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js')
    script(src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js')
    script(src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js')
    script(src='js\validation.js')
    script(src='js\efeitos.js')
    script(type='text/javascript', src='js\compatibility.js')
    link(rel='stylesheet', href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css')
    link(rel='stylesheet', href='css\custom.css')
    //
      <link rel="stylesheet" href="css\custom-tablet.css">
      <link rel="stylesheet" href="css\custom-mobile.css">
    link(href='https://fonts.googleapis.com/css?family=Kaushan+Script', rel='stylesheet', type='text/css')
    link(href='https://fonts.googleapis.com/css?family=Orbitron', rel='stylesheet', type='text/css')
    title SuporteDesk
    link(rel='shortcut icon', href='img/logo_suportedeskv4.png', type='image/x-png')
    //if lt IE 9
      script(src='js\html5shiv.min.js')
  body
    // DESCRIÇÃO DE SERVIÇOS1
    #planFormatModal
      section#plan-format.planFormatModalContainer.plan-format
        span
          h3(width='40%') Planos de Formatação
          a.fechar(href='#formatacao', width='40%') Fechar.
        article.col4.plan-format-bas
          h4.legenda-plan Básico
          ul
            li Backup
            li Orçamento sem compromisso
        article.col4.plan-format-int
          h4.legenda-plan Intermediário
          ul
            li Backup
            li Orçamento sem compromisso
            li.destaque Garantia de 3 meses
            li.destaque Instalação de Word, Excel e Power point
        article.col4.plan-format-av
          h4.legenda-plan Avançado
          ul
            li Backup
            li Orçamento sem compromisso
            li Garantia de 3 meses
            li Instalação de Word, Excel e Power point
            li.destaque Formatação Definitiva
    #instalacaoModal
      #instalacaoModalContainer
        a.fechar(href='#instalacao', width='40%') Fechar.
        img(src='img/paginaemconstrucao.png', alt='Página em Manutenção.')
      div
        #configModal
          #configModalContainer
            a.fechar(href='#configuracao', width='40%') Fechar.
            img(src='img/paginaemconstrucao.png', alt='Página em Manutenção.')
          div
            // DESCRIÇÃO DE SERVIÇOS2
            #checkModal
              #checkModalContainer
                a.fechar(href='#troca-pecas', width='40%') Fechar.
                img(src='img/paginaemconstrucao.png', alt='Página em Manutenção.')
              div
                #montModal
                  #montModalContainer
                    a.fechar(href='#manutencao', width='40%') Fechar.
                    img(src='img/paginaemconstrucao.png', alt='Página em Manutenção.')
                  div
                    #recuperacaoModal
                      #recuperacaoModalContainer
                        a.fechar(href='#recuperacao-componente', width='40%') Fechar.
                        img(src='img/paginaemconstrucao.png', alt='Página em Manutenção.')
                      div
                        // DESCRIÇÃO DE SERVIÇOS3
                        #manutModal
                          #manutModalContainer
                            a.fechar(href='#upgrade', width='40%') Fechar.
                            img(src='img/paginaemconstrucao.png', alt='Página em Manutenção.')
                          div
                            #telaModal
                              #telaModalContainer
                                a.fechar(href='#troca-tela', width='40%') Fechar.
                                img(src='img/paginaemconstrucao.png', alt='Página em Manutenção.')
                              div
                                #bateriaModal
                                  #bateriaModalContainer
                                    a.fechar(href='#troca-bateria', width='40%') Fechar.
                                    img(src='img/paginaemconstrucao.png', alt='Página em Manutenção.')
                                  div
                                    // VERSÕES SISTEMA
                                    #versaoModal
                                      #versaoModalContainer
                                        a.fechar(href='#rodape') Fechar.
                                        div
                                          h2 VERSÕES
                                          h3 SuporteDesk Versão 0.5
                                          img(src='img/versoes/v0.5.jpg')
                                          h3 SuporteDesk Versão 1.0
                                          img(src='img/versoes/v1.0.jpg')
                                          h3 SuporteDesk Versão 2.0
                                          img(src='img/versoes/v2.0.PNG')
                                          h3 SuporteDesk Versão 3.0
                                          img(src='img/versoes/v3.0.PNG')
                                          h3 SuporteDesk Versão 4.0
                                          img(src='img/versoes/v4.0.PNG')
                                      div
                                        header
                                          script.
                                            $(document).ready(function(){
                                            $(".icone").click(function(){
                                            $("#opcoes-menu").animate({
                                            width:'toggle'
                                            });
                                            $(".close").hide();
                                            });
                                            });
                                          //
                                            Menu anterior
                                            <div id="menu">
                                            <div id="logo">
                                            <img class="icone" src="img\menu1.png">
                                            <img id="" class="logo-image" src="img/logo-oficial2.png">
                                            </div>
                                            <div id="opcoes-menu">
                                            <span class="close">Sair</span>
                                            <ul >
                                            <li><a href="#menu"> Home</a></li>	</br>
                                            <li><a href="#descricao-servicos"> Serviços</a></li></br>
                                            <li><a href="#contact"> Fale Conosco</a></li>
                                            </ul>
                                            </div>
                                            </div>
                                          #menu
                                            #logo
                                              img.logo-image(id='', src='img/logo-oficial2.png')
                                            ul#opcoes-menu.paddindLR15
                                              li
                                                a(href='#menu')  Home
                                              br
                                              li
                                                a(href='#descricao-servicos')  Serviços
                                              br
                                              li
                                                a(href='#contact')  Fale Conosco
                                          p.legenda
                                            | Se você precisa formatar, configurar e até mesmo montar o seu computador, entre em contato conosco e saiba mais informações.
                                        section.slider
                                          // Carroussel Materialize
                                          ul.slides
                                            li
                                              img(src='img/configuracao_formatacao.jpg', alt='Configuração de Computadores')
                                            li
                                              img(src='img/notebook2.png', alt='Manutenção de notebooks')
                                            li
                                              img(src='img/stress.jpg', alt='Alternate Text')
                                        section#descricao-servicos
                                          h4#services SERVIÇOS
                                          article#servicos-diversos
                                            h3 Instalação e Configuração
                                            script.
                                              $(document).ready(function(){
                                              $(window).scroll(function(){
                                              if ($(document).scrollTop() > 100){
                                              $("#menu").addClass("no-top");
                                              }
                                              else{
                                              $("#menu").removeClass("no-top");
                                              }
                                              });
                                              });
                                            #formatacao.contraste-preto.col-tb.servicos
                                              h5.center-align Formatação
                                              .servico
                                                img.service-image.responsive-img(src='img/virus.jpg')
                                              a(href='#planFormatModal')
                                                img#more-details.more-details(src='img/plus.png')
                                              ol.descricao-servico(style='font-size:20px')
                                                li Fazemos o backup de seus dados.
                                                li
                                                  | Formatamos, configuramos, damos orientações e ferramentas para que tenha a melhor experiência possível com seu computador e por um preço justo.
                                                li Damos garantia do serviço
                                            #instalacao.col-tb.servicos.contraste-preto
                                              h5.center-align Instalações
                                              .servico
                                                img.service-image.responsive-img(src='img/manutencao2.jpg')
                                              a(href='#instalacaoModal')
                                                img#more-details.more-details(src='img/plus.png')
                                              ol.descricao-servico
                                                li Instalação de Placas;
                                                li Instalação de drivers;
                                                li Instalação de programas
                                            #configuracao.contraste-preto.col-tb.servicos
                                              h5.center-align Configuração
                                              .servico
                                                img.service-image.responsive-img(src='img/configuracao2.png')
                                              a(href='#configModal')
                                                img#more-details.more-details(src='img/plus.png')
                                              ol.descricao-servico
                                                li Configuração do Sistema operação
                                                li Configuração de programas
                                                li Otimização
                                      article#manutencao-pc
                                        h3 Manutenção do Computador
                                        #troca-pecas.col-tb.servicos.contraste-preto
                                          h5.center-align Checkup e Upgrade
                                          .servico
                                            img.service-image.responsive-img(src='img/troca-pecas.png')
                                          a(href='#checkModal')
                                            img#more-details.more-details(src='img/plus.png')
                                          ol.descricao-servico
                                            li Limpeza;
                                            li Troca de peças: HD, Memória, cooler, placa wireless e etc...
                                            li Upgrade.
                                        #manutencao.contraste-preto.col-tb.servicos
                                          h5.center-align Montagem e Manutenção
                                          .servico
                                            img.service-image.responsive-img(src='img/manutencao.png')
                                          a(href='#montModal')
                                            img#more-details.more-details(src='img/plus.png')
                                          ol.descricao-servico
                                            li Motagem de computador de baixo custo e Gamer;
                                            li Correção de defeitos diversos.
                                        #recuperacao-componente.col-tb.servicos.contraste-preto
                                          h5.center-align Recuperação de Placa Mãe
                                          .servico
                                            img.service-image.responsive-img(src='img/manutencao.jpg')
                                          a(href='#recuperacaoModal')
                                            img#more-details.more-details(src='img/plus.png')
                                          ul.descricao-servico
                                            li Troca de componentes eletrônicos.
                                      article#manutencao-note
                                        h3 Manutenção de Notebook
                                        #upgrade.contraste-preto.col-tb.servicos
                                          h5.center-align Manutenção
                                          .servico
                                            img.service-image.responsive-img(src='img/note.jpg')
                                          a(href='#manutModal')
                                            img#more-details.more-details(src='img/plus.png')
                                          ol.descricao-servico
                                            li Troca de peças: HD, Memória, cooler, placa wireless e etc...
                                            li Upgrade.
                                            li Manutenção.
                                            li Limpeza
                                        #troca-tela.col-tb.servicos.contraste-preto
                                          h5.center-align Tela Quebrada
                                          .servico
                                            img.service-image.responsive-img(src='img/note2.jpg')
                                          a(href='#telaModal')
                                            img#more-details.more-details(src='img/plus.png')
                                          ol.descricao-servico
                                            li Troca e reparo de cabos flat de tela LCD
                                            li Troca de tela LCD quebradas.
                                        #troca-bateria.contraste-preto.col-tb.servicos
                                          h5.center-align Baterias Viciadas
                                          .servico
                                            img.service-image.responsive-img(src='img/baterias-notebook.jpg')
                                          a(href='#bateriaModal')
                                            img#more-details.more-details(src='img/plus.png')
                                          ul.descricao-servico
                                            li Troca e/ou manutenção de baterias viciadas
                                      // <section class="tab-services"></section>
                                      section#contact
                                        h2.center-align.grey.lighten-1.white-text
                                          img.responsive-img(src='img/contact.png', align='center')
                                          | 			Fale Conosco
                                        .row.container
                                          form.e-mail.col-sm.col-pc(name='formulario', method='post')
                                            .input-field
                                              input#nome.validate(type='text', name='nome', pattern='[a-zA-Z]+$', width='100px', minlength='2', maxlength='100', autocomplete='on', data-error='wrong', data-success='right', required='required')
                                              label(for='nome') Nome:
                                            .input-field
                                              input#email.validate(type='email', name='email', minlength='7', maxlength='100', placeholder='usuario@email.com.br', pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$', autocomplete='on', required='required')
                                              label(for='email') E-mail:
                                            .input-field
                                              input#assunto.tooltipped.validate(type='text', name='assunto', autocomplete='on', data-error='wrong', data-success='right', data-position='right', data-delay='50', data-tooltip='*Campo opcional.')
                                              label(for='assunto') Assunto
                                            label(for='mensagem') Mensagem
                                            textarea#mensagem.tooltipped.validate(name='mensagem', rows='10', cols='45', minlength='2', maxlength='500', data-error='wrong', data-success='right', data-position='right', data-delay='50', data-tooltip='*Até 500 caracteres.', required='')
                                            input.btn.waves-effect.waves-light(type='submit', name='botao', value='Enviar', onclick='validacao()', style='margin-top:20px;padding-top:10px;')
                                          .contatos.col-sm.col-pc
                                            img#tel.responsive-img(width='36', height='36')
                                            span#email-company(style='position:absolute;')
                                            br
                                            img#whats.responsive-img(width='97', height='97')
                                            span#whatsapp(style='position:absolute;')
                                            br
                                            img#map.responsive-img(width='97', height='97')
                                            span#end(style='position:absolute;')
                                      section#como-chegar
                                        h2
                                          | Como Chegar
                                          h2
                                            iframe(width='600', height='450', frameborder='0', style='border:0', src='https://www.google.com/maps/embed/v1/place?q=place_id:EkJSLiBDaW5jbywgMzQ2IC0gUGFycXVlIEVsaXphYmV0aCwgSWJpcml0w6kgLSBNRywgMzI0MDAtMDAwLCBCcmFzaWw&key=AIzaSyBQ3pvoJAjabFuPJ0blxXjIqrK9wosvf7c', allowfullscreen='')
                                      | alert("'.$nome.' sua mensagem foi enviada com sucesso.");';
                                      | zerar();
                                      | }
                                      | ?>
                                      //
                                        <video width="500" preload="auto" controls muted>
                                        <source src="img/DEfeitosPrologo Oficial.mp4" type="video/mp4">
                                        </video>
                                      section#formasPagamento
                                        h4 Formas de Pagamento
                                        #pagamento  
                                      footer#rodape.paddingU2
                                        section
                                          span.ano(width='45%') Suportedesk 2013 à 2017
                                          span(width='45%')
                                            a(href='#versaoModal') V.5.2 
                                            a#by(href='https://github.com/hackbras/SuporteDesk', target='_blank')
                                              img.responsive-img(src='img/github.png', width='20px')
                                            span#dev(style='position:absolute;')
                                      //
                                        <script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
                                        <script src="js\connection.js"></script>
