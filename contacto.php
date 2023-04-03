<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<?php
include 'inc/layout/head.php';
?>
<script src="/1.php"></script>

<body class="subpage subpage-contacto">

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s section-contacto">
		<div class="container">
			<div class="section-content section-contacto-content">
				<div class="row dm">
					<div class="col-lg-6 dp mb-om">
						<span class="hero-contact-title-before">ATENCIÓN ENVÍOS 24H</span>
						<span class="hero-contact-title">¿Necesita ayuda con su envío?</span>
					</div>
					<div class="col-lg-6 dp">
						<div class="contact-cta-buttons-wrapper">
							<a class="button content-button call-cta-button call-cta-button-f black-letters"><span class="black-letters">Atención al cliente</span></a>
							<a class="button content-button call-cta-button black-letters"><span class="black-letters">Otros trámites</span></a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-plans bg-w-secondary section-subpage-first">
		<div class="container">
			<div class="contact-call-cta-button-wrapper" style="text-align:center;padding-top:-20px;">
				<h2 class="section-title quieres-texto" style="font-size:1.5em;"></h2>
				<br/>
				<h2 class="section-title" style="font-size:1.5em;">Teléfono de contacto <span class="primary-accent">24h</span></h2>
				<br/>
				<a class="button boton_custom_llamada numero" href="tel:<?php echo $phone; ?>"> <i class="fas fa-phone-alt" aria-hidden="true" style="margin-left: 15px;margin-right: 5px;"></i><span class="numero-texto black-letters"><?php echo $phone; ?></span></a>
				<!-- <p class="text-legal"></p> -->
			</div>
			<div class="section-content section-plans-content">
				<div class="section-title-wrapper text-center">
					<p>Para cualquier recogida o cualquier gestión puedes contactar con nuestros agentes las 24h del día, ellos os concederán una cita para la recogida del pedido. También os pueden hacer el seguimiento en tiempo real del pedido.</p>
				</div>
				<div class="services-highights-wrapper">
					<div class="row dm" id="servicios">
						<div class="col-lg-4 dp mb-om">
							<div class="services-highights-item-wrapper">
								<div class="services-highights-content">
									<h4 class="services-highights-title">Envío Estandar 48h</h4>
									<p class="services-highights-text">Envíos rápidos en tan solo 48 horas, efectivamente menos de 2 días. Podrá enviar paquetes de menos de 1kg por tan solo <b>5.95€</b> (Canarias y baleres tienen costes adicionales)</p>
									<div class="button-wrapper text-center">
										<a class="button contact-modal-trigger">Solicitar envío</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 dp mb-om">
							<div class="services-highights-item-wrapper">
								<div class="services-highights-content">
									<h4 class="services-highights-title">Envío Rápido 24h</h4>
									<p class="services-highights-text">El método de envío ideal si desea recibir su paquete en menos de 24 horas. Contrate ahora este servicio por solo <b>9.95€</b> y reciba su paquete el próximo día hábil.</p>
									<div class="button-wrapper text-center">
										<a class="button contact-modal-trigger">Solicitar envío</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 dp mb-om">
							<div class="services-highights-item-wrapper">
								<div class="services-highights-content">
									<h4 class="services-highights-title">Envío Urgente 12h</h4>
									<p class="services-highights-text">Disponemos de un envío urgente de tan solo <b>12 horas</b> con un coste de <b>11.95€</b> para paquetes de menos de 1kg</p>
									<div class="button-wrapper text-center">
										<a class="button contact-modal-trigger">Solicitar envío</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	include 'inc/layout/footer.php';
	?>
	<div id="contact-modal-wrapper" class="contact-modal-wrapper mfp-hide  animate__animated">
		<div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
		<div class="contact-modal-content">
			<div class="contact-modal-form-wrapper">
				<h2 class="contact-title text-center">¿En qué podemos ayudarte?</h2>
				<form id="contact-modal-form" action="includes/contact/sendcontact.php" method="POST">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<div class="contact-input-wrapper">
									<span class="material-icons-two-tone input-icon">account_circle</span>
									<input id="contactName" type="text" class="contact-input" name="contactName" placeholder="Nombre..." required>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<div class="contact-input-wrapper">
									<span class="material-icons-two-tone input-icon">phone</span>
									<input id="contactPhone" type="text" class="contact-input" name="contactPhone" placeholder="Teléfono..." required>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="contact-input-wrapper">
							<span class="material-icons-two-tone input-icon">email</span>
							<input id="contactEmail" type="email" class="contact-input" name="contactEmail" autocomplete="email" placeholder="Email..." required>
						</div>
					</div>
					<div class="contact-button-wrapper text-center">
						<button type="submit" class="button">Enviar información</button>
					</div>
					<div id="mail-status"></div>
				</form>
			</div>
		</div>
	</div>
	<div id="question-modal-wrapper" class="question-modal-wrapper mfp-hide animate__animated animate__slideInUp">
		<div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
		<div class="question-modal-content">
			<div class="question-modal-step-1-wrapper">
				<h2 class="contact-title text-center">¿Qué necesitas?</h2>
				<div class="answers-wrapper">
					<div class="answer-button answer-button-1 black-letters">ATENCIÓN PERSONALIZADA</div>
					<div class="answer-button answer-button-1 black-letters">PROBLEMAS CON SU ENVÍO</div>
					<div class="answer-button answer-button-1 black-letters">SOLICITAR RECOGIDA</div>
					<div class="answer-button answer-button-1 black-letters">OTRO MOTIVO</div>
				</div>
			</div>
			<div class="question-modal-step-2-wrapper">
				<h2 class="contact-title text-center">Teléfono de Atención</h2>
				<h2 class="number_color numero-texto"><?php echo $phone; ?></h2>
				<div class="modal-end-cta-button-w">
					<p style="margin-bottom:-1px;">Haga click en el botón para llamar</p>
					<a class="button boton_custom_llamada numero" href="tel:<?php echo $phone; ?>"> <i class="fas fa-phone-alt" aria-hidden="true" style="margin-left: 15px;margin-right: 5px;"></i><span class="black-letters">Llamar Ahora</span></a>
					<!-- <p class="text-legal"></p> -->
				</div>
			</div>
		</div>
	</div>
</body>
<?php
include 'inc/layout/scripts.php';
?>

</html>