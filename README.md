<p align="center">
	<image width="75%" src="https://cdn.discordapp.com/attachments/740659775733497938/740719397714264176/IMG_20200805_204338.png">
	<h1>👋 Bem-vindo ao Projeto Sitio!</h1>
	<h3>Um site sem objetivos específicos, feito apenas com a intuição de aprender!</h3>
</p>
	
Boas vindas ao Projeto Sitio: um site sem fins lucrativos, sem objetivos e focado em **[PHP](https://www.php.net/manual/pt_BR/intro-whatis.php)**, com o intuito de aprender!<br>
Desculpe se o nome deixou o seu hype lá pra cima, e agora ele foi quebrado completamente, mas esse nome é bem fácil de se passar pela cabeça, além de que Sitio lembra um poquinho de zuera, um site chamado Sitio? Realmente achou que era algo tão importante assim?<br><br>
E apesar de o README estar bem apresentável, talvez o código não seja um dos melhores... Então se você é o cara do pedaço que sabe de tudo e olhar para esse código pensando:

<blockquote>
	"nossa, mas que código bagunçado, esse cara não sabe de nada!"
</blockquote>

Saiba que eu sou um inciante! Inclusive se você quiser dar algumas dicas para mim ou colaborar com o código, sinta-se livre para fazer alguns commits e pull requests!<br>
Mas afinal, por que o Sitio existe?

<p>
	<h1>📚 De onde surgiu essa ideia?</h1>
	<h3>Uma questão que ninguém perguntou mas eu vou responder de qualquer forma.</h3>
</p>

Bom, agradecimento ao tédio por ter me dado essa ideia genial, pois um dia o tédio tava tão forte que eu decidi preencher o tempo querendo montar um site de mangás. E até aí tudo bem, até chegar a parte de colocar os mangás... Eu não ia desperdiçar o tempo baixando cada uma das páginas dos mangás que eu queria colocar no Sitio, o que foi a porta para incluir o PHP no projeto.<br>
É possível pegar conteúdo de outra página da internet usando o PHP, e eu usei isso ao meu favor, coletando os links, descrições e imagens do **[YesMangas1](https://yesmangas1.com)** para formar a body da página.<br><br>

### O que eu achei legal do PHP

O PHP além de conseguir pegar o conteúdo de outra página, também me permite manipular esse conteúdo para poder ser o que eu queira. Isso é uma função e ela se chama `file_get_contents()`. Essa função retorna o código fonte da página em uma variável, onde você consegue achar o que deseja.<br><br>
Depois disso é necessário utilizar algo para separar o que você quer do que não quer, o que é bem simples, você pode usar `preg_match_all("texto para ser procurado", $varParaSerInspecionada, $varQueIraGuardarOResultado)` e essa função irá inspecionar a primeira variável `$varParaSerInspecionada` procurando pelo texto `"texto para ser procurado"`, e caso encontre, irá guardar o resultado em `$varQueIraGuardarOResultado`! Caso não encontre o texto que foi específicado, irá guardar na variável `$varQueIraGuardarOResultado` o resultado `false`. Isso ajudou MUITO o Sitio e ajudou a poupar processamento e tempo!

### Aviso

*Como eu peguei o conteúdo da YesMangas1, nada melhor do que fazer uma propagandinha para eles. Você encontra vários mangás por lá de graça! Por isso caso queria ler alguns mangás, a YesMangas1 é uma opção.*<br>
*Outro aviso que eu quero dar é que esse projeto teve intenções de aprendizado, então, por favor, NÃO PEGUE CONTEÚDO DOS OUTROS SEM O CONSENTIMENTO DELES! Caso o contrário, você vai ter problemas mais graves. Eu não irei me responsabilizar caso você venha a dar Fork no conteúdo e colocar um site no ar com esse código caso você não tenha o consentimento da YesMangas1.*

<p>
	<h1>✨ Sobre mim</h1>
</p>

Eu ainda sou uma pessoa indecisa. Não sei se eu realmente vou trabalhar com programação. Eu posso realmente estar montando meu futuro e eu não sei, mas eu não ligo, eu gosto muito de programar e sempre quero aprender sobre novas linguagens.<br><br>

O Projeto Sitio é uma prova disso. Além de preencher o meu tempo, está sendo realmente uma máquina de aprendizado, pois aprendi muito sobre PHP montando esse site, e prentendo aprender mais! De um coletor de conteúdo a um site com Database incluída. Uma grande evolução que eu tive!

<p>
	<h1>📦 Colaborações</h1>
	<h3>Toda a ajuda é bem-vinda!</h3>
</p>

Eu ADORARIA ter uma ajuda sua, caso você queira dar um help! E provavelmente qualquer pessoa iniciante em qualquer coisa iria gostar de uma ajudinha pra poder começar com o pé direito, não é mesmo?
- Você pode ajudar fazendo um Fork, corrigindo as coisas que você acha que ficaria melhor e em seguida, uma pull request!
- Você pode pedir pra virar um colaborador, pois eu gosto de trabalhar com outras pessoas em um projeto!
- Ou você pode abrir uma issue com **"Sugestão"** incluída no título, assim entenderei que você quer dar uma dica.
