<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="Website Icon" type="png" href="../public/images/logo-noar.png" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../dist/output.css">
  <script src="../inc/js/nav_script.inc.js" defer></script>
  <title>Materiais Utilizados</title>
</head>
<body class="bg-bg-mobile bg-no-repeat bg-contain bg-local tablet:bg-none lg:bg-none">
  <!-- MOBILE: -->
  <main class="flex flex-col items-center w-full h-fit gap-3 font-poppins md:gap-8 lg:hidden">
    <!-- Texto placeholder -->
    <div class="placeholder flex flex-row justify-center items-center align-super gap-1.5 self-stretch py-4 text-white md:hidden">
      <p class="tablet:text-preto">Release 0.1</p>
    </div>
    <?php include "../inc/views/nav.inc.php" ?>
    <!-- Header -->
    <header class="noar_logo flex flex-col text-center items-center justify-center gap-1 font-poppins
      tablet:flex-row tablet:justify-start tablet:w-full md:hidden">
      <img src="../public/images/logo-noar-opt.svg" alt="" srcset="" class="w-[192px] h-[192px] tablet:w-[236px] tablet:h-[236px]">
      <div class="tablet:flex tablet:flex-col tablet:items-start tablet:gap-5 tablet:pt-10 tablet:justify-start tablet:text-left">
        <h1 class="hidden tablet:flex font-bold text-3xl text-white tablet:text-preto">Bombeiros Voluntários</h1>
      </div>
    </header>
    <section aria-labelledby="title_main" class="flex flex-col px-8 justify-center items-center gap-10 self-stretch">
      <header class="flex flex-col justify-center items-center gap-3 self-stretch text-center last:pb-2 last:border-b-2 last:border-[#595959]">
        <h1 id="title_main"  class="font-bold text-3xl">Materiais Utilizados<span class="text-vermelho"> deixados no Hospital</span></h1>
        <p id="subtitle"     class="text-cinza text-sm text-center">Selecione as opções abaixo de acordo com a sua <b>necessidade.</b></p>
        <p id="instructions" class="text-cinza text-sm text-center">Você pode <b>adicionar</b> clicando nos botões, ou <b>adicioná-los diretamente</b> clicando na caixa de texto.</p>
      </header>
    </section>
    <!-- FORM: -->
    <section class="form-container flex flex-col items-center justify-center md:w-full tablet:w-full">
      <form action="" class="flex flex-col items-center justify-center gap-3 odd:bg-white even:bg-[#F2F2F2] w-full">
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full bg-[#F2F2F2]">
          <p class="w-full text-center">Material</p>
          <p class="w-full text-center">Quantidade</p>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full">
          <label for="id1">Base do Estabilizador</label>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full bg-[#F2F2F2]">
          <label for="id1">Colar</label>
          <select name="" id="">
            <option value="None" disabled selected>Selecione:</option>
            <option value="Nenhum">Nenhum</option>
            <option value="GG">GG</option>
            <option value="G">G</option>
            <option value="PP">PP</option>
            <option value="P">P</option>
          </select>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full">
          <label for="id1">Coxins</label>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full bg-[#F2F2F2]">
          <label for="id1">KED</label>
          <select name="" id="">
            <option value="None" disabled selected>Selecione...</option>
            <option value="Nenhum">Nenhum</option>
            <option value="Adulto">Adulto</option>
            <option value="Infantil">Infantil</option>
          </select>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full">
          <label for="id1">Maca Rígida</label>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full bg-[#F2F2F2]">
          <label for="id1">T.T.F</label>
          <select name="" id="">
            <option value="None" disabled selected>Selecione...</option>
            <option value="Nenhum">Nenhum</option>
            <option value="Adulto">Adulto</option>
            <option value="Infantil">Infantil</option>
          </select>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full">
          <label for="id1">Tirante Aranha</label>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full bg-[#F2F2F2]">
          <label for="id1">Tirante de Cabeça</label>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full">
          <label for="id1">Cânula</label>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-between items-center px-8 py-4 w-full bg-[#F2F2F2]">
          <label for="id1">Base do Estabilizador</label>
          <div class="flex flex-row justify-end w-1/2">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-1/2 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button px-3 py-1 gap-2.5 lg:text-2xl text-3xl self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <div class="input-box flex flex-row justify-center items-start px-8 py-4 w-full gap-5" title="Outro material">
          <div class="outro flex flex-row justify-between gap-5 w-full">
            <label for="id1">Outro:</label>
            <textarea name="" id="" cols="30" rows="10" class="text-center input border-b-2 border-[#595959] w-full bg-input_color text-input_placeholder text-sm
            transition ease-in-out focus:text-black focus:outline-vermelho focus:bg-white" placeholder="Digite aqui..."></textarea>
          </div>
          <div class="flex flex-col justify-end w-1/2 h-max">
            <button type="submit" onclick="event.preventDefault()" class="button gap-2.5 lg:text-2xl text-2xl flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">-</button>
            <input id="num_fibra" type="number" class="text-center input border-b-2 border-[#595959] w-full h-20 bg-white text-input_placeholder text-sm
            transition ease-in-out focus:scale-105 focus:text-black focus:outline-vermelho focus:bg-white" placeholder="0">
            <button type="submit" onclick="event.preventDefault()" class="button gap-2.5 lg:text-2xl text-2xl flex items-center justify-center bg-vermelho font-poppins font-bold text-white
            transition ease-in-out hover:scale-105 focus:scale-105 disabled:opacity-75 disabled:transition-none">+</button>
          </div>
        </div>
        <button type="submit" onclick="event.preventDefault()" class="text-[16px] px-6 py-4 gap-2.5 self-stretch flex items-center justify-center bg-vermelho font-poppins font-bold text-xl text-white
        transition ease-in-out hover:scale-105">Salvar Dados</button>
        <p class="text-cinza text-sm text-center">Os dados serão salvos na sua <b>ocorrência.</b></p>
      </form>
    </section>
  </main>
  <footer class="flex flex-col justify-center items-start gap-[0.625rem] w-full h-full self-stretch bg-white
    desktop:flex-col desktop:items-start desktop:border-t-[4px] desktop:border-vermelho
  ">
    <section class="container_footer flex flex-col justify-center items-center gap-5 p-8 self-stretch first:pt-16 
      desktop:justify-between desktop:items-center desktop:flex-row
    ">
      <section class="logos_row flex flex-row justify-center items-center gap-4 self-stretch">
        <img src="../public/images/logo-noar.png" alt="Logo Noar" class="w-[126px] h-[126px] desktop:w-[192px] desktop:h-[192px]">
        <img src="../public/images/ambulancia.png" alt="Logo Ambulância" class="w-[126px] h-[126px] desktop:w-[192px] desktop:h-[192px]">
        <header aria-labelledby="footer_title" class="header hidden desktop:flex flex-col justify-center items-start gap-2.5 self-stretch">
          <h1 id="footer_title" class="text-4xl font-poppins font-bold leading-9 text-preto">SOS Bombeiros</h1>
          <p class="self-stretch text-cinza font-poppins text-xl font-normal leading-5 w-96">
            Fazendo uso da <b>tecnologia</b> para <b>otimizar</b> o atendimento de ocorrências e facilitar a <b>comunicação</b> entre bombeiros e médicos
          </p>
        </header>
      </section>
      <header aria-labelledby="footer_title_mobile" class="header flex desktop:hidden flex-col justify-center items-start gap-2.5 self-stretch">
        <h1 id="footer_title_mobile" class="text-4xl font-poppins font-bold leading-9 text-preto">SOS Bombeiros</h1>
        <p class="text-cinza font-poppins text-xl font-normal leading-5 w-fit">
          Fazendo uso da <b>tecnologia</b> para <b>otimizar</b> o atendimento de ocorrências e facilitar a <b>comunicação</b> entre bombeiros e médicos
        </p>
      </header>
      <section aria-labelledby="navegar_title" class="group_1 flex flex-col items-start gap-2.5 self-stretch text-left">
        <h1 id="navegar_title" class="font-poppins font-bold leading-10 text-4xl text-preto">Navegar</h1>
        <ul class="flex flex-col text-cinza font-poppins font-normal text-xl leading-5 w-full">
          <li class="hover:text-black"><a href="">Principal</a></li>
          <li class="hover:text-black"><a href="">Login</a></li>
          <li class="hover:text-black"><a href="">Ocorrências</a></li>
          <li class="hover:text-black"><a href="">Dados</a></li>
        </ul>
      </section>
      <section aria-labelledby="contato_title" class="contato flex flex-col items-start gap-2.5 self-stretch text-left">
        <h1 id="contato_title" class="font-poppins font-bold leading-10 text-4xl text-preto text-left">Contato</h1>
        <ul class="flex flex-col text-cinza font-poppins font-normal text-xl leading-5 w-full">
          <div class="text flex flex-row gap-2.5">
            <a href="" class="hover:text-black">Av. Procópio Gomes, 244</a>
          </div>
          <div class="text flex flex-row gap-2.5">
            <a href="" class="hover:text-black">+55 (47) 99735-5556</a>
          </div>
          <div class="text flex flex-row gap-2.5">
            <a href="" class="hover:text-black">paulo@email.com</a>
          </div>
          <div class="text flex flex-row gap-2.5">
            <a href="" class="hover:text-black">@plxulo</a>
          </div>
        </ul>
      </section>
    </section>
    <section class="container_footer2 flex flex-col px-8 py-16 w-full justify-center items-center gap-6 bg-vermelho font-poppins
      desktop:flex-row desktop:justify-between desktop:p-16 desktop:self-stretch desktop:text-center
    ">
      <header aria-labelledby="company_name" class="flex flex-col justify-center items-start gap-2.5 text-left">
        <h1 id="company_name" class="text-white font-poppins text-4xl font-bold leading-9">Senas Tech</h1>
        <p class="text-white font-poppins text-xl font-normal leading-5">
          Somos uma empresa de <b>tecnologia</b> localizada em Joinville, Santa Catarina, utilizamos de nossos <b>conhecimentos</b> e <b>ferramentas</b> para trazer aplicações <b>confiáveis</b> e <b>velozes</b> para o usuário final.
        </p>
      </header>
      <hr class="desktop:hidden" width="100%">
      <p class="font-poppins text-white w-full">Termos de uso e privacidade</p>
      <hr class="desktop:hidden" width="100%">
      <p class="font-poppins text-white w-full">Copyright, 2023</p>
    </section>
  </footer>
</body>
</html>