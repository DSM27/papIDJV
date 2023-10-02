
	<?php
		include "header.php";
	 	?>

		<style>
    textarea {
        resize: none;
    }
		a{
			border-bottom-style: none;
		}
		</style>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->
							<!-- Footer -->
									<div class="container">
										<div class="row">
											<section class="col-6 col-12-narrower">
												<h2>Entre em Contacto</h2>
												<form method="post" action="mensagem.php">
													<div class="row gtr-50">
														<div class="col-6 col-12-mobilep">
															<input type="text" name="txtNome" id="nome" placeholder="Nome" required autofocus/>
														</div>
														<div class="col-6 col-12-mobilep">
															<input type="email" name="txtEmail" id="email" placeholder="Email" required/>
														</div>
														<div class="col-12">
															<textarea name="txtMensagem" id="mensagem" placeholder="Mensagem" rows="5" required></textarea>
														</div>
														<div class="col-12">
															<ul class="actions">
																<li><input type="submit" name="btnEnviar" class="button alt" value="Enviar Mensagem"/></li>
															</ul>
														</div>
													</div>
												</form>
											</section>
										<section class="split contact">
								<section class="alt">
									<h2>Sobre Escola</h2>
								<section>
									<h3>Phone</h3>
									<p>236360200</p>
								</section>
								<section>
									<h3>Email</h3>
									<p><a href="mailto:secretaria@idjv.pt">secretaria@idjv.pt</a></p>
								</section>
								<h3>Morada</h3>
								<p><a href="https://goo.gl/maps/AUWGwvBFujwP8UiG8">Rua Eng. Guilherme Santos, n.º 32 <br/>
								Apartado 5 <br/>
								3101-501 Louriçal</a></p>
							</section>
							</section>

							<section class="split contact">
					<section class="alt">
					<section>
						<h2>Sobre Mim</h2>
						<h3>Phone</h3>
						<p>925035705</p>
					</section>
					<section>
						<h3>Email</h3>
						<p><a href="mailto:david.s.marques123@gmail.com">david.s.marques123@gmail.com</a></p>
					</section>
				</section>
				</div>
					</div>
				</section>

				<?php include "footer.php" ?>

			 	</body>
