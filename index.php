<?php
$GLOBALS['_ta_campaign_key'] = '05496a43fad65fdec8776248055898e2';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=05496a43fad65fdec8776248055898e2' parameter

require 'bootloader_640ab9c6129921a20bc1a1fe286e8311.php';

$campaign_id = '4lg26b';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    case 'reverse_proxy':
        if(!empty($_GET['rp'])) {
            reverse_proxy($response['url'], "tarp_640ab9c6129921a20bc1a1fe286e8311/");

            header('location: '.$_GET['rp']);
            exit;
        }

        print reverse_proxy($response['url'], "tarp_640ab9c6129921a20bc1a1fe286e8311/");
        exit;        
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
    default:
        print other_methods($response['url']);
        break;    
}
/*
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<?php
include 'inc/layout/head.php';
?>

<body>

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s hero-section">
		<div class="container">
			<div class="hero-content">
				<div class="row dm">
					<div class="col-lg-6 dp">
						<div class="hero-text text-center">
							<span class="hero-subtitle">Envíos rápidos con</span>
							<h1 class="hero-title"><span class="primary-accent domain"></span></h1>
							<p class="hero-slogan">Con <span class="domain"></span>, tendrás tu paquete en tan solo 24h a nivel nacional. Todos los envíos son tratados con sumo cuidado para garantizar la perfecta entrega de los mismos. Infórmese aquí.</p>
							<div class="button-wrapper text-center">
								<a class="button contact-modal-trigger">Realizar envío</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 dp">
						<div class="hero-featured">
							<div class="hero-featured-content">
								<div class="row">
									<div class="col-lg-6">
										<div class="hero-featured-col text-center">
											<h3>Envíos online</h3>
											<p>Puedes gestionar tus envíos online desde nuestra plataforma privada. Podrán ser recogidos en local/domicilio o podrás entregarlos en nuestra oficina</p>
										</div>
									</div>
									<div class="col-lg-6 hero-featured-col-m">
										<div class="hero-featured-col text-center">
											<h3>Entrega</h3>
											<p>Puedes elegir cómo prefieres la entrega, ya sea con entrega a domicilio o con recogida en el sitio de tu preferencia. Contamos con más de 200 puntos de recogida en España.</p>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="hero-featured-col hero-featured-col-h text-center">
											<h3>Envíos internacionales</h3>
											<p>Puedes enviar paquetes a cualquier lugar del mundo, disponible para destinos a los que se pueda llegar a través de transporte terrestre. Las salidas son diarias, así que se trata de una modalidad económica y eficiente.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-two">
		<div class="container">
			<div class="section-content section-two-content">
				<div class="row dm">
					<div class="col-lg-6 dp">
						<div class="section-two-images-wrapper">
							<div class="s2-count-banner-wrapper">
								<div class="s2-count-banner-content">
									<div class="s2-count-wrapper">
										<span id="s2-count-val" class="s2-count-val" data-from="0" data-to="35" data-speed="500" data-refresh-interval="1">0</span>
										<span class="s2-count-text">Años de experiencia</span>
									</div>
								</div>
							</div>
							<div class="s2-img-1-w">
								<img src="img/s2-img-1.png" class="s2-img-1 img-fluid" alt="" />
							</div>
						</div>
					</div>
					<div class="col-lg-6 dp mt-om">
						<span class="s2c-subh">QUIENES SOMOS</span>
						<h2>Somos servicios de envío y entrega local de <span class="primary-accent">logística global</span></h2>
						<ul class="list-big">
							<li><span class="material-icons-two-tone list-icon">done_outline</span>Envío el mismo día</li>
							<li><span class="material-icons-two-tone list-icon">done_outline</span>Entrega urgente</li>
							<li><span class="material-icons-two-tone list-icon">done_outline</span>Envío estándar</li>
						</ul>
						<div class="button-wrapper">
							<a class="button contact-modal-trigger">Consigue una cotización</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-services bg-w-secondary">
		<div class="container">
			<div class="section-content section-services-content">
				<div class="section-title-wrapper text-center">
					<span class="section-title-before">NUESTROS SERVICIOS</span>
					<h2 class="section-title">Servicios de logística <span class="primary-accent">de envío</span></h2>
				</div>
				<div class="services-wrapper">
					<div class="row dm">
						<div class="col-lg-4 dp mb-om">
							<div class="services-item-wrapper">
								<div class="services-item-img">
									<img src="img/services-1.jpg" class="services-item-image img-fluid" alt="" />
								</div>
								<div class="services-item-content">
									<div class="services-item-icon">
										<i class="flaticon-plane"></i>
									</div>
									<div class="services-item-text">
										<h4 class="services-item-text-title">Envíos aéreos</h4>
										<p class="services-item-text-desc">Si necesitas envíos urgentes de ofrecemos envíos aéreos para que tus paquetes lleguen lo más rápido posible.</p>
									</div>
								</div>
								<div class="more-info-button-wrapper">
									<a class="more-info-button contact-modal-trigger">Más información<i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 dp mb-om">
							<div class="services-item-wrapper">
								<div class="services-item-img">
									<img src="img/services-3.jpg" class="services-item-image img-fluid" alt="" />
								</div>
								<div class="services-item-content">
									<div class="services-item-icon">
										<i class="flaticon-free-shipping"></i>
									</div>
									<div class="services-item-text">
										<h4 class="services-item-text-title">Envíos terrestres</h4>
										<p class="services-item-text-desc">Puedes enviar paquetes a cualquier lugar del mundo, disponible para destinos a los que se pueda llegar a través de transporte terrestre.</p>
									</div>
								</div>
								<div class="more-info-button-wrapper">
									<a class="more-info-button contact-modal-trigger">Más información<i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 dp mb-om">
							<div class="services-item-wrapper">
								<div class="services-item-img">
									<img src="img/services-2.jpg" class="services-item-image img-fluid" alt="" />
								</div>
								<div class="services-item-content">
									<div class="services-item-icon">
										<i class="flaticon-boat"></i>
									</div>
									<div class="services-item-text">
										<h4 class="services-item-text-title">Envíos marítimos</h4>
										<p class="services-item-text-desc">Puedes realizar envíos en containers de 30 metros cúbicos para exportar tus productos a otros países, obtendrás el precio más económico por artículo.</p>
									</div>
								</div>
								<div class="more-info-button-wrapper">
									<a class="more-info-button contact-modal-trigger">Más información<i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-stats">
		<div class="container">
			<div class="section-content section-stats-content">
				<div class="front-stats">
					<div class="row">
						<div class="col-lg-3 col-12">
							<div class="stats-col-content">
								<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="10000" data-speed="2000" data-refresh-interval="50">10000</span>+</span>
								<span class="stats-col-text">PAQUETES ENTREGADOS</span>
							</div>
						</div>
						<div class="col-lg-3 col-12">
							<div class="stats-col-content">
								<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="500" data-speed="2500" data-refresh-interval="50">500</span>+</span>
								<span class="stats-col-text">SOCIO DE SUCURSAL</span>
							</div>
						</div>
						<div class="col-lg-3 col-12">
							<div class="stats-col-content">
								<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="250" data-speed="700" data-refresh-interval="1">250</span>+</span>
								<span class="stats-col-text">SOCIO DE TIENDA</span>
							</div>
						</div>
						<div class="col-lg-3 col-12">
							<div class="stats-col-content">
								<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="10000" data-speed="3500" data-refresh-interval="50">10000</span>+</span>
								<span class="stats-col-text">CLIENTES FELICES</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-plans bg-w-secondary">
		<div class="container">
			<div class="section-content section-plans-content">
				<div class="section-title-wrapper text-center">
					<span class="section-title-before">SUSCRIPCIÓN</span>
					<h2 class="section-title">Más ahorro para envíos de <span class="primary-accent">gran tráfico</span></h2>
					<p>Ahorra en el envío de tus paquetes. Te damos soluciones a medida y pensadas para enviar de forma económica.</p>
				</div>
				<div class="plans-wrapper">
					<div class="row dm">
						<div class="col-lg-4 dp mb-om">
							<div class="plans-item-wrapper">
								<div class="plans-item-content">
									<div class="plans-item-title-wrapper">
										<h4 class="plans-item-title">Estandar 48 horas</h4>
									</div>
									<div class="plans-item-price-wrapper">
										5.95€<span>/Paquete</span>
									</div>
									<ul class="plans-item-features-list">
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Recogida en oficina</li>
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Entrega a domicilio</li>
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Tracking en tiempo real</li>
									</ul>
									<div class="button-wrapper text-center">
										<a class="button contact-modal-trigger">Obtener ahora</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 dp mb-om">
							<div class="plans-item-wrapper">
								<div class="plans-item-content">
									<div class="plans-item-title-wrapper">
										<h4 class="plans-item-title">Rápido 24 horas</h4>
									</div>
									<div class="plans-item-price-wrapper">
										9.95€<span>/Paquete</span>
									</div>
									<ul class="plans-item-features-list">
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Recogida a domicilio</li>
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Entrega a domicilio</li>
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Tracking en tiempo real</li>
									</ul>
									<div class="button-wrapper text-center">
										<a class="button contact-modal-trigger">Obtener ahora</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 dp mb-om">
							<div class="plans-item-wrapper">
								<div class="plans-item-content">
									<div class="plans-item-title-wrapper">
										<h4 class="plans-item-title">Urgente 12 horas</h4>
									</div>
									<div class="plans-item-price-wrapper">
										11.95€<span>/Paquete</span>
									</div>
									<ul class="plans-item-features-list">
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Recogida a domicilio</li>
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Entrega a domicilio</li>
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Entrega sin contacto</li>
										<li><span class="material-icons-two-tone list-icon">done_outline</span>Tracking en tiempo real</li>
									</ul>
									<div class="button-wrapper text-center">
										<a class="button contact-modal-trigger">Obtener ahora</a>
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
</body>
<?php
include 'inc/layout/scripts.php';
?>

</html>