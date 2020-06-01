<p align="center">
	<img width="30%" src="https://cdn.discordapp.com/avatars/276181181970644993/f636c457c6bc126d92dbcc0dfb01b10a.png?size=2048">
</p>

<h1 align="center">Projeto Sítio</h1>

Bem-vindo ao repositório de um site que estou fazendo. Eu fiz esse site no intuito de aprender mais sobre PHP, as imagens, links e descrições foram retiradas do site <strong>[YesMangas1](https://yesmangas1.com)</strong>, abaixo você vai ver como eu fiz para gera as imagens direto do site deles ultilizando php.</p>
<br>
<br>
<p>O php além de conseguir pegar o conteúdo de outra página, também permite que eu consiga manipular esse conteúdo para o que eu preciso, básicamente estou falando da função file_get_contents() onde eu passo o link/local de onde eu quero pegar, essa função retorna o código fonte da página em uma varável, onde você consegue achar o que deseja, depois disso é necessário ultilizar algo para separar o que você quer do que não quer, nesse caso, eu ultilizei as expreções regulares e o explode(), o explode basicamente corta seu texto em duas partes e joga ambas em um array(uma variáel que pode armazenar outras), os parâmetros do explode são explode('textodb',variável), a função vai procurar esse texto dentro do código fonte e quando achar vai partir o código fonte em duas partes e joga-las em um array, fazendo isso você pode cortar o código fonte até sobrar o conteúdo que você deseja.</p><br>
<p>Agora vamos falar das expreções regulares, pelo que eu entendi, são um conjunto de parâmetros que vão ser buscados dentro do conteúdo adiquirido, são muitos parâmetros, recomendo que estude mais sobre, mas é báciamente um filtro, onde vão ser passados para a variável apenas o que estiver dentro dos parâmetros, exemplo preg_match_all('/"\>[0-9]{1,3}\<\/a/',$l, $result) isso vai procurar na variável $l valores de até 3 casas númericas entre o abrimento e fechamento de duas tags e vai jogar os resultados na variável $result.<p><br>
  <p>Bem, eu acho que expliquei tudo, até agora foi isso que eu fiz pra conseguir pegar as imagens dinâmicamente ultilizando apenas php.</p>