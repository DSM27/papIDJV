
	<?php
		include "header.php";
	 	?>

		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row gtr-200">
						<div class="col-8 col-12-narrower">
							<div id="content">

								<!-- Content -->

									<article>
										<header>
											<h2>Tutorial</h2>
											<h3 id="cap1">1. O que vai precisar</a></h3>
										</header>

										<!-- Posts -->
											<section class="wrapper style1">
												<div class="container">
													<div class="row">
														<section class="col-6 col-12-narrower">
															<div class="box post">
																<a href="#" class="image left"><img src="images/raspberrypi4.png" alt="" /></a>
																<div class="inner">
																	<h3>Raspberry Pi</h3>
																	<p>Existem vários modelos de Raspberry Pi e, para a maioria das pessoas.O Raspberry Pi 4 Modelo B é o mais novo, mais rápido e mais fácil de usar.</p>
																</div>
															</div>
														</section>
														<section class="col-6 col-12-narrower">
															<div class="box post">
																<a href="#" class="image left"><img src="images/transformador.png" alt="" /></a>
																<div class="inner">
																	<h3>Tranformador Raspberry</h3>
																	<p>Para conectar a uma tomada, todos os modelos Raspberry Pi têm uma porta USB (a mesma encontrada em muitos telefones celulares): USB-C para Raspberry Pi 4 ou micro USB para Raspberry Pi 3, 2 e 1.</p>
																</div>
															</div>
														</section>
													</div>
													<div class="row">
														<section class="col-6 col-12-narrower">
															<div class="box post">
																<a href="#" class="image left"><img src="images/sdcard.png" alt="" /></a>
																<div class="inner">
																	<h3>Cartão SD</h3>
																	<p>Seu Raspberry Pi precisa de um cartão SD para armazenar todos os seus arquivos e o sistema operacional Raspbian.Você precisa de um cartão microSD com capacidade de pelo menos 8 GB .</p>
																</div>
															</div>
														</section>
														<p style="margin-bottom:0px">É ainda necessário um rato, teclado, monitor ou uma TV e cabo HDMI.</p>
														<p style="font-size: 15; padding: 0 0 0 50px"> É de relembrar que todos os materiais são produtos oficiais.<p>
													</div>
												</div>
											</section>

						<section>
								<h3>Para começar a vamos seguir os passos de instalação.</h3>



								<h3 id="cap2">2. Configurar o Cartão SD</h3>
								  <p>Se possui um cartão SD que ainda não possui o sistema operativo Raspbian, ou se deseja redefinir o Raspberry Pi,
													pode instalar o Raspbian facilmente. Para fazer isso, você precisa de um computador com uma porta para cartão SD.</p>
								<h4 class="fas fa-dot-circle">O sistema operacional Raspbian via NOOBS</h4>
									<p>Usar o software NOOBS é a maneira mais fácil de instalar o Raspbian no seu cartão SD.</p>
								<h4 class="fas fa-dot-circle">Baixar NOOBS</h4>
										<ul>
											<p style="margin: 0">Visite a<a href="https://www.raspberrypi.org/downloads/"> página de downloads do Raspberry Pi</a></p>
											<p style="margin: 0">Deverá ver uma caixa com links para os arquivos NOOBS. Clique na caixa.</p>
											<p style="margin: 0">A opção mais simples é baixar o arquivo zip dos arquivos. Preste atenção ao local onde você salvou o arquivo, para poder encontrá-lo novamente rapidamente.</p>
										</ul>
								<h4 class="fas fa-dot-circle">Formate o cartão SD</h4>
								 	<p>Tudo o que estiver armazenado no cartão SD será substituído durante a formatação. Portanto, se o cartão SD no qual você deseja instalar o Raspbian atualmente tiver algum arquivo,
														por exemplo, a partir de uma versão anterior do Raspbian, convém fazer backup desses arquivos primeiro para não perdê-los permanentemente.</p>
										 <ul>
											 <p style="margin: 0">Visite o site da SD Association e baixe o <a href="https://www.sdcard.org/downloads/formatter/index.html">SD Formatter</a>< para Windows ou Mac./p>
											 <p style="margin: 0">Siga as instruções para instalar o software.</p>
											 <p style="margin: 0">Insira o seu cartão SD no slot para cartão SD do computador.</p>
										   <p style="margin: 0">No SD Formatter, selecione seu cartão SD e o formato do cartão.</p>
										 </ul>
								<h4 class="fas fa-dot-circle">Extrair NOOBS do arquivo zip</h4>
									<p>Em seguida, precisará extrair os arquivos do arquivo zip NOOBS baixado do site do Raspberry Pi.</p>
										 <ul>
											 <p style="margin: 0">Visite o site da SD Association e baixe o <a href="https://www.sdcard.org/downloads/formatter/index.html">SD Formatter</a>< para Windows ou Mac./p>
											 <p style="margin: 0">Encontre o arquivo baixado - por padrão, ele deve estar na sua "Downloads" pasta.</p>
											 <p style="margin: 0">Clique duas vezes nele para extrair os arquivos.</p>
										 </ul>
							 <h4 class="fas fa-dot-circle">Copie os arquivos</h4>
											<ul>
												<p style="margin: 0">Selecione todos os arquivos na "NOOBS" pasta e arraste-os para a janela do cartão SD para copiá-los para o cartão.</p>
												<p style="margin: 0">Uma vez que todos os arquivos foram copiados, você pode ejetar o cartão SD.</p>
											</ul>



									<h3 id="cap3">3. Conectar o Raspberry Pi</h3>
									<p>Agora conecte tudo ao seu Raspberry Pi. É importante fazer isso na ordem certa, para que todos os seus componentes estejam seguros.</p>
										<ul>
											<p style="margin: 0">Insira o cartão SD que você configurou com o Raspbian (via NOOBS) no slot para cartão microSD na parte inferior do seu Raspberry Pi.</p>
											<p style="margin: 0">Encontre a extremidade do conector USB do cabo do rato e conecte o rato a uma porta USB no Raspberry Pi (não importa qual a porta).</p>
											<p style="margin: 0">Conecte o teclado da mesma maneira.</p>
											<p style="margin: 0">Use um cabo para conectar a tela à porta HDMI do Raspberry Pi - use um adaptador, se necessário.</p>
											<p style="margin: 0">Se desejar conectar o Raspberry Pi à Internet via Ethernet, use um cabo Ethernet para conectar a porta Ethernet no Raspberry Pi.
												Se quiser pode usar a conectividade sem fio ou se não quiser conectar à Internet.</p>
										</ul>
									<p>E assim está conectado o Raspberry Pi.</p>


									<h3 id="cap4">4. Inicie o Raspberry Pi</h3>
									<p>O seu Raspberry Pi não possui um interruptor: assim que você o conecta a uma tomada, ele liga.</p>
										<ul>
											<p style="margin: 0">Conecte a fonte de alimentação USB a uma toma e conecte-a à porta de energia do Raspberry Pi.</p>
											<p style="margin: 0">Verá um LED vermelho acender no Raspberry Pi, o que indica que o Raspberry Pi está conectado à energia. Ao iniciar, verá framboesas no canto superior esquerdo da tela.</p>
											<p style="margin: 0">Após alguns segundos, o Raspbian Desktop aparecerá.</p>
										</ul>

								 <h3 id="cap5">5. Conclua a configuração</h3>
									<p>Quando inicia o Raspberry Pi pela primeira vez, o aplicativo "Bem-vindo ao Raspberry Pi" será exibido e o guiará pela configuração inicial.</p>
										<ul>
											<p style="margin: 0">Clique em "Avançar" para iniciar a instalação.</p>
											<p style="margin: 0">Defina seu "país" , "idioma" e "fuso horário" e clique em "Avançar" novamente.</p>
											<p style="margin: 0">Digite uma nova senha para o seu Raspberry Pi e clique em "Avançar" .</p>
											<p style="margin: 0">Conecte-se à sua rede Wi-Fi selecionando seu nome, digitando a senha e clicando em "Avançar".</p>
											<p style="margin: 0">Clique em "Avançar" e deixe o assistente verificar se há atualizações no Raspbian e instalá-las (pode demorar um pouco).</p>
											<p style="margin: 0">Clique em "Concluído" ou "Reinicializar" para concluir a instalação.</p>
										</ul>

									<h2>Raspberry pronto a utilizar.</h2>

							</div>
						</div>
						<div class="col-4 col-12-narrower">
							<div id="sidebar">

								<!-- Sidebar -->


									<section>
										<menu class="c-project__menu">
											<div class="c-project-navigation">
												<input class="c-project-navigation__toggle-checkbox u-hidden" id="c-project-navigation__toggle-checkbox" type="checkbox">
												<label class="c-project-navigation__toggle-label" for="c-project-navigation__toggle-checkbox">
													Contents
													<span class="c-project-navigation__toggle-icon"></span>
												</label>
												<ul class="c-project-navigation__list">
													<li class="c-project-navigation__item">
														<a class="c-project-navigation__link" data-on="click" data-event-category="Setting up your Raspberry Pi" data-event-action="Clicked Navigation Link" role="link" tabindex="0" href="#cap1">
															O que vai precisar</a>
														</li>
												  <li class="c-project-navigation__item">
														<a class="c-project-navigation__link c-project-navigation__link--is-done" data-on="click" data-event-category="Setting up your Raspberry Pi" data-event-action="Clicked Navigation Link" role="link" tabindex="0" href="#cap2">
															Configurar o Cartão SD</a>
														</li>
												  <li class="c-project-navigation__item">
														<a class="c-project-navigation__link c-project-navigation__link--is-done" data-on="click" data-event-category="Setting up your Raspberry Pi" data-event-action="Clicked Navigation Link" role="link" tabindex="0" href="#cap3">
															Conectar o Pi</a>
														</li>
													<li class="c-project-navigation__item">
														<a class="c-project-navigation__link c-project-navigation__link--is-done" data-on="click" data-event-category="Setting up your Raspberry Pi" data-event-action="Clicked Navigation Link" role="link" tabindex="0" href="#cap4">
															Iniciar o PI</a>
														</li>
													<li class="c-project-navigation__item">
														<a class="c-project-navigation__link c-project-navigation__link--is-done" data-on="click" data-event-category="Setting up your Raspberry Pi" data-event-action="Clicked Navigation Link" role="link" tabindex="0" href="#cap5">
															Conclua a Configuração</a>
														</li>
												</ul>
											</div>
										</menu>
									</section>


							</div>
						</div>
					</div>
				</div>
			</section>



				<?php include "footer.php" ?>

			 	</body>
