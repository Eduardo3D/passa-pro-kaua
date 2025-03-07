<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Login</title>
     
    <style>
        
        .hero.is-primary {
          
          background-image: linear-gradient(180deg, #2d0059,black);

}
.controle{

  background-color: black;

}
.card {
    margin: 20px;
  }
  .card-image img {
    width: 100%;
    height: auto;
  }
  .card {
    margin: 20px;
  }
  .card-image img {
    width: 100%;
    height: auto;
  }


  .carousel{
        max-width: 500px; /* Define a largura máxima do card */
        margin: 0 auto; /* Centraliza os cards no carrossel */  
    }

    .card-image figure {
        height: 300px; /* Altura menor para a imagem */
       
       
    }

     .card-image figure img {
        width: 100%; /* Garante que a imagem ocupe toda a largura */
        height: 100%; /* Ajusta a altura para preencher */
        object-fit: cover; /* Garante que a imagem mantenha proporções */
    }

    .carousel .card-content {
        padding: 10px; /* Reduz o espaçamento interno */
    }

   


    </style>

</head>
<body class="controle">


<section class="hero is-primary is-small">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      

    </a>

    
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    <a class="navbar-item has-text-white" href="pagnaprincipal.php">
        Home
      </a>

      <a class="navbar-item has-text-white" href="cursos.php">
        Cursos
      </a>

      <a class="navbar-item has-text-white" href="novo-usuario.php">
        Cadastrar-se
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link has-text-white">
          Mais
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-text-white">
            Criadores
          </a>
          <a class="navbar-item is-selected has-text-white">
            Contato
          </a>
          <a class="navbar-item has-text-white" href="login.php">
            Logar
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item has-text-white" href="suporte.php">
            Suporte
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
      <svg width="640" height="160" viewBox="0 0 640 160" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M170 132.571V27.5908C170 25.5451 170.915 23.93 172.746 22.7456C174.576 21.5612 176.729 20.969 179.206 20.969H210.377C232.019 20.969 242.84 30.4441 242.84 49.3943C242.84 62.5303 238.264 71.0902 229.112 75.074C234.603 77.2275 238.748 80.2692 241.548 84.1992C244.347 88.1292 245.747 93.8627 245.747 101.4V104.791C245.747 116.743 242.84 125.437 237.026 130.875C231.211 136.312 223.351 139.031 213.445 139.031H179.206C176.514 139.031 174.307 138.385 172.584 137.093C170.861 135.801 170 134.293 170 132.571ZM190.834 120.619H209.085C219.529 120.619 224.751 114.751 224.751 103.015V100.431C224.751 94.401 223.432 90.0404 220.794 87.3486C218.156 84.6568 214.253 83.3109 209.085 83.3109H190.834V120.619ZM190.834 66.8371H208.923C213.122 66.8371 216.326 65.5989 218.533 63.1225C220.74 60.646 221.844 57.2544 221.844 52.9475C221.844 48.7483 220.686 45.4374 218.371 43.0148C216.057 40.5922 212.853 39.3809 208.762 39.3809H190.834V66.8371ZM260.283 103.015V27.4293C260.283 25.2759 261.306 23.6608 263.351 22.5841C265.397 21.5074 267.873 20.969 270.781 20.969C273.688 20.969 276.164 21.5074 278.21 22.5841C280.256 23.6608 281.279 25.2759 281.279 27.4293V103.015C281.279 115.397 287.2 121.588 299.044 121.588C310.888 121.588 316.81 115.397 316.81 103.015V27.4293C316.81 25.2759 317.833 23.6608 319.879 22.5841C321.925 21.5074 324.401 20.969 327.308 20.969C330.215 20.969 332.692 21.5074 334.738 22.5841C336.783 23.6608 337.806 25.2759 337.806 27.4293V103.015C337.806 115.72 334.28 125.061 327.227 131.036C320.175 137.012 310.781 140 299.044 140C287.308 140 277.914 137.039 270.861 131.117C263.809 125.195 260.283 115.828 260.283 103.015ZM356.703 132.409V27.4293C356.703 25.2759 357.725 23.6608 359.771 22.5841C361.817 21.5074 364.293 20.969 367.201 20.969C370.108 20.969 372.584 21.5074 374.63 22.5841C376.676 23.6608 377.699 25.2759 377.699 27.4293V120.619H417.106C419.044 120.619 420.579 121.534 421.709 123.365C422.84 125.195 423.405 127.349 423.405 129.825C423.405 132.301 422.84 134.455 421.709 136.285C420.579 138.116 419.044 139.031 417.106 139.031H365.908C363.432 139.031 361.279 138.439 359.448 137.254C357.618 136.07 356.703 134.455 356.703 132.409ZM434.872 132.409V31.467C434.872 27.9138 435.868 25.2759 437.86 23.5532C439.852 21.8304 442.355 20.969 445.37 20.969C449.354 20.969 452.423 21.6689 454.576 23.0686C456.729 24.4684 459.098 27.4832 461.682 32.1131L481.548 68.2907L501.413 32.1131C503.997 27.4832 506.393 24.4684 508.6 23.0686C510.808 21.6689 513.903 20.969 517.887 20.969C520.902 20.969 523.405 21.8304 525.397 23.5532C527.389 25.2759 528.385 27.9138 528.385 31.467V132.409C528.385 134.455 527.335 136.07 525.236 137.254C523.136 138.439 520.686 139.031 517.887 139.031C514.98 139.031 512.503 138.439 510.458 137.254C508.412 136.07 507.389 134.455 507.389 132.409V62.961L488.493 96.5545C486.985 99.354 484.616 100.754 481.386 100.754C478.264 100.754 475.949 99.354 474.441 96.5545L455.868 61.6689V132.409C455.868 134.455 454.818 136.07 452.719 137.254C450.619 138.439 448.17 139.031 445.37 139.031C442.463 139.031 439.987 138.439 437.941 137.254C435.895 136.07 434.872 134.455 434.872 132.409ZM539.529 130.31C539.529 130.094 539.637 129.556 539.852 128.694L571.023 27.1063C571.669 24.8452 573.257 23.0956 575.787 21.8573C578.318 20.6191 581.198 20 584.428 20C587.658 20 590.565 20.6191 593.149 21.8573C595.734 23.0956 597.349 24.8452 597.995 27.1063L629.166 128.694C629.381 129.556 629.489 130.094 629.489 130.31C629.489 132.678 628.035 134.724 625.128 136.447C622.221 138.17 619.26 139.031 616.245 139.031C612.261 139.031 609.892 137.631 609.139 134.832L603.001 113.351H566.016L559.879 134.832C559.125 137.631 556.756 139.031 552.773 139.031C549.65 139.031 546.662 138.197 543.809 136.528C540.956 134.859 539.529 132.786 539.529 130.31ZM570.377 96.8775H598.479L584.428 47.2948L570.377 96.8775Z" fill="black" class="bd-svg-black" />
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 110L10 40L50 0L100 50L70 80L110 120L50 160L0 110Z" fill="#00D1B2"/>
</svg>
        
         
        </div>
      </div>
    </div>
  </div>
</nav>
</div>

<!-- Hero content: will be in the middle -->
<div class="hero-body">
    <div class="container has-text-centered">
      <p class="title has-text-white">On Training</p>
      <p class="subtitle has-text-white">O treinamento gestativo que você precisava!!</p>
    </div>
</div>
</section>

<div class="container">
    <div class="has-text-centered">
        <p class="title">Cursos em Destaque</p>
    </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    });
</script>

<div class="card">
  <div class="card-image">
  </div>
  <div class="carousel">
    <div class="media">
      <div class="media-content">
        <figure class="image">
          <img
            src="https://www.unicesumar.edu.br/blog/wp-content/uploads/2017/07/engenharia-de-software-mercado.jpg"
          />
        </figure>
      </div>
      <br>
      <div class="has-text-centered">
      <div class="media-content">
        <p class="title is-4">Gestão Financeira</p>
        <p class="subtitle is-6">2 Anos</p>
      </div>
    </div>
    </div>
    <div class="">
    <div class="content">

      <br>
    <strong>Gestão Financeira:</strong>
    <br>
A gestão financeira é um conjunto de práticas e ferramentas utilizadas para planejar, monitorar e controlar os recursos financeiros de uma pessoa, empresa ou organização. Ela desempenha um papel essencial na sustentabilidade e no crescimento de qualquer atividade econômica, garantindo que os recursos disponíveis sejam usados de forma eficiente e estratégica. Aqui está um resumo detalhado sobre o tema:
  <br>
  <br>
  <strong>Objetivos da Gestão Financeira:</strong>
  <br>
  <br>
  <strong>Planejamento Financeiro:</strong> Estabelecer metas de curto, médio e longo prazo, alinhando receitas e despesas ao orçamento disponível.
  <br>
  <br>
  <strong>Controle de Fluxo de Caixa:</strong> Monitorar entradas e saídas de recursos para manter a liquidez e evitar déficits.
  <br>
  <br>
  <strong>Tomada de Decisão:</strong> Basear decisões em análises financeiras para aumentar a rentabilidade e reduzir riscos.
  <br>
  <br>
  <strong>Análise de Investimentos:</strong> Identificar e avaliar oportunidades de investimento que maximizem os retornos.
  <br>
  <br>
  <strong>Prevenção de Riscos Financeiros:</strong> Antecipar e mitigar possíveis crises financeiras por meio de reservas e estratégias eficazes.
  <br>
  <br>

<strong>Orçamento:</strong>
<br>
Um guia detalhado que projeta as receitas e despesas dentro de um período específico.


A gestão financeira é, acima de tudo, um processo contínuo e dinâmico que exige conhecimento técnico e disciplina. Seja para indivíduos ou organizações, dominar os princípios dessa área pode fazer toda a diferença no sucesso econômico e na estabilidade a longo prazo.
    <br>
      <br />
      </div>
    </div>
  </div>
</div>
</div>
  </div>

</section>



<div class="columns">
  <div class="column">
    <div class="card">
        
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://setting.com.br/wp-content/uploads/2015/04/dicas-gestao-financeira.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>

      <div class="title-info">
        <p class="title is-4">Gestão Básica</p>
        <p class="subtitle is-6">20 horas</p>
      </div>
    </div>

    <div class="content">
    Descrição: Ideal para iniciantes, este curso oferece uma introdução à organização financeira, abordando conceitos como planejamento de orçamento, controle de despesas e fluxo de caixa. Com exercícios práticos, você aprenderá a identificar e corrigir gargalos financeiros para garantir estabilidade e crescimento.
    <br>

    <br>
    <br />
      <p>Conclusão em 15 dias</p>
    </div>
    <a class="button is-primary is-rounded" href="novo-compra.php">Mais info aqui</a>
  </div>
</div>
</div>


<div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://blog.ipog.edu.br/wp-content/uploads/2018/06/Gest%C3%A3o-Financeira-920x368.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Gestão para pequenas empresas</p>
        <p class="subtitle is-6">50 horas</p>
      </div>
    </div>

    <div class="content">
    Descrição: Voltado para empreendedores, este curso foca na administração eficiente das finanças de pequenos negócios. Temas como precificação, gestão de capital de giro e análise de lucratividade são abordados de forma prática e adaptada à realidade de micro e pequenas empresas.
    <br>


    <br>
    <br />
      <p>Conclusão em 30 Dias</p>
    </div>
    <a class="button is-primary is-rounded" href="novo-compra.php">Mais info aqui</a>
  </div>
</div>
</div>

<div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://blog.bcntreinamentos.com.br/wp-content/uploads/2018/07/220775-voce-entende-a-importancia-da-gestao-financeira-para-sua-empresa-veja-nesse-artigo.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Gestão Pessoal</p>
        <p class="subtitle is-6">75 horas</p>
      </div>
    </div>

    <div class="content">
    Descrição: Este curso foi criado para quem deseja tomar o controle de suas finanças pessoais. Nele, você aprenderá a criar e gerenciar orçamentos, identificar gastos desnecessários e investir de maneira consciente para alcançar metas financeiras de curto e longo prazo.
    <br>
      <br />
      <p>Conclusão em 2 Meses</p>
    </div>
    <a class="button is-primary is-rounded" href="novo-compra.php">Mais info aqui</a>
  </div>
</div>
</div>

<div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://pwrgestao.com/wp-content/uploads/2023/03/AdobeStock_570921123-compressed-2048x1365.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Gestão de tecnologia</p>
        <p class="subtitle is-6">70 horas</p>
      </div>
    </div>

    <div class="content">
    Descrição: Este curso combina fundamentos de gestão financeira com o uso de ferramentas tecnológicas. Aprenda a utilizar softwares de controle financeiro, plataformas de análise de dados e aplicativos que facilitam a tomada de decisão em tempo real.
    <br>

      <br />
      <p>Conclusão em 3 meses</p>
    </div>
    <a class="button is-primary is-rounded" href="novo-compra.php">Mais info aqui</a>
  </div>
</div>
</div>
</div>
</div>
</div>






<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('.carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
        });
    });
</script>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
/>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
/>

<div class="carousel">
    <!-- Card 1 -->
    <div class="card">
        <div class="card-image">
            <figure class="image">
                <img
                    src="https://www.unicesumar.edu.br/blog/wp-content/uploads/2017/07/engenharia-de-software-mercado.jpg"
                    alt="Placeholder image"
                />
            </figure>
        </div>
      
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                </div>
                <div class="media-content">
                    <p class="title is-4">Gestão Financeira</p>
                    <p class="subtitle is-6">2 Horas</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <div class="card-image">
            <figure class="image">
                <img
                    src="https://bulma.io/assets/images/placeholders/1280x960.png"
                    alt="Placeholder image"
                />
            </figure>
        </div>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img
                            src="https://bulma.io/assets/images/placeholders/96x96.png"
                            alt="Placeholder image"
                        />
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">Jane Doe</p>
                    <p class="subtitle is-6">@janedoe</p>
                </div>
            </div>
            <div class="content">
                Sed pulvinar quam non orci bibendum, nec maximus massa
                vestibulum. <a>@bulmaio</a>. <a href="#">#webdesign</a>
                <a href="#">#html</a>
                <br />
                <time datetime="2024-1-1">12:00 PM - 1 Jan 2024</time>
            </div>
        </div>
    </div>

</body>
</html>
