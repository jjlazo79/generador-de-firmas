<?php

/**
 * Template Name: Generador de firmas
 *
 * @package WordPress
 * @subpackage Theme_child
 * @since Theme 1.0
 */
?>

<?php get_header(); ?>
<?php // subcarpeta con las imágenes de los empleados ?>
<?php $path = ABSPATH . '/firmas'; ?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-da67a3f elementor-section-boxed elementor-section-height-default elementor-section-height-default parallax_section_no qode_elementor_container_no" data-id="da67a3f" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b624fc3" data-id="b624fc3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-62ef861 elementor-widget elementor-widget-heading" data-id="62ef861" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container">
						<?php the_title('<h1>', '</h1>'); ?>
						<h2 class="elementor-heading-title elementor-size-default">Genera la firma de tu email corporativo</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-f5b3964 elementor-section-boxed elementor-section-height-default elementor-section-height-default parallax_section_no qode_elementor_container_no" data-id="f5b3964" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-695ef3f" data-id="695ef3f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-5528d24 elementor-widget elementor-widget-text-editor" data-id="5528d24" data-element_type="widget" data-widget_type="text-editor.default">
					<div class="elementor-widget-container">
						<form class="form-horizontal">
							<fieldset>
								<div class="form-group row"><label class="small-12 medium-4 columns control-label" for="form-name">Nombre</label>
									<div class="small-12 medium-6 columns"><input id="form-name" class="form-control input-md" name="form-name" type="text" placeholder="Nombre Apellido Apellido"></div>
								</div>
								<div class="form-group row"><label class="small-12 medium-4 columns control-label" for="form-pos">Puesto</label>
									<div class="small-12 medium-6 columns"><input id="form-pos" class="form-control input-md" name="form-pos" type="text" placeholder="Nombre del puesto"></div>
								</div>
								<div class="form-group row"><label class="small-12 medium-4 columns control-label" for="form-tel">Teléfono</label>
									<div class="small-12 medium-6 columns"><input id="form-tel" class="form-control input-md" name="telephone" type="text" placeholder="+34 931 005 432"></div>
								</div>
								<div class="form-group row"><label class="small-12 medium-4 columns control-label" for="form-user">Foto equipo</label>
									<div class="small-12 medium-6 columns">
										<?php $files = array_diff(scandir($path), array('.', '..')); ?>

										<select id="form-user" class="form-control" name="user">
											<option value="no-picture">Sin foto</option>
											<?php foreach ($files as $key => $picture) {
												echo '<option value="' . $picture . '">' . substr($picture, 0, -4) . '</option>';
											} ?>
										</select>

									</div>
								</div>
								<div class="form-group">
									<div class="small-12 medium-7 columns"><button id="button" class="btn btn-primary" name="button" type="button" onclick="generateSignature();">Generar</button></div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a80ef0" data-id="1a80ef0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-a7b683c elementor-widget elementor-widget-text-editor" data-id="a7b683c" data-element_type="widget" data-widget_type="text-editor.default">
					<div class="elementor-widget-container">
						<div id="result">
							<div id="firma">


								<link rel="preconnect" href="https://fonts.gstatic.com">
								<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" rel="stylesheet">
								<link href="https://fonts.googleapis.com/css2?family=Varela+Round&amp;display=swap" rel="stylesheet">


								<table style="font-family: Poppins, sans-serif;">
									<tbody>
										<tr>
											<td width="91">
												<a href="https://www.isocialweb.agency">
													<img id="user_image" height="98.78" width="auto" src="https://www.isocialweb.agency/wp-content/uploads/2021/06/iSocialWeb-Agency-6-1.png" alt="iSocialWeb" style="margin:0 10px 0 0;padding:0px;border:0px none;font:inherit;vertical-align:baseline;" title="Generador de firmas">
												</a>
											</td>
											<td>
												<table>
													<tbody>
														<tr style="padding:0; margin:0">
															<td style="padding:0; margin:0">
																<p id="name" style="color:#272828;text-align: left;font-size:16px;margin: 0px;line-height: 20px;letter-spacing:
													1px;font-family: Varela Round,sans-serif;font-weight: 800;">
																	Nombre</p>
															</td>
														</tr>
														<tr style="padding:0; margin:0">
															<td style="padding:0; margin:0">
																<p id="pos" style="color:#d1b48c;margin: 0px;line-height: 20px;text-align: left;font-size: 16px;letter-spacing:
													1px;font-family: Varela Round,sans-serif;">
																	Cargo en la empresa</p>
															</td>
														</tr>
														<tr style="padding:0; margin:0">
															<td style="padding:0; margin:0">
																<p style="color:#818081;text-decoration: none;line-height: 18px;text-align: left;font-size: 14px;margin:
													0;letter-spacing: 1px;">
																	<a id="tel" style="text-decoration: none;color:#818081;font-family: Poppins,sans-serif;" href="tel:+34931005432">+34 931 005 432</a>
																</p>
															</td>
														</tr>
														<tr style="padding:0; margin:0">
															<td style="padding:0; margin:0">
																<p style="color:#818081;text-decoration: none;line-height: 18px;text-align: left;font-size: 14px;margin:
													0;letter-spacing: 1px;font-family: Poppins,sans-serif;">
																	<a href="https://www.isocialweb.agency">
																		<img width="18" src="https://www.isocialweb.agency/firmas/DN.png" alt="iSocialWeb" style="margin-left:3px;padding:0px;vertical-align:middle;max-width:100%;height:auto;width:18px" title="Generador de firmas"></a>
																	<a style="color:#818081; text-decoration: none;vertical-align: middle;" href="https://www.isocialweb.agency/" target="_blank">isocialweb.agency</a>
																</p>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
								<table style="font-family: Poppins, sans-serif;">
									<tbody>
										<tr>
											<td>
												<span style="text-align: left;color:#818081;font-size:12px;display: block; margin-top: 20px;font-style: italic;line-height: 15px;font-family: Poppins,sans-serif;">
													<strong>Información Protección de datos.</strong><br> Responsable: ISOCIALWEB MARKETING S.L. Le informamos que sus datos identificativos y los contenidos en los correos electrónicos y ficheros adjuntos pueden ser incorporados a nuestras bases de datos con la finalidad de mantener relaciones profesionales y/o comerciales y, que serán conservados mientras se mantenga la relación. Si lo desea, puede ejercer su derecho a acceder, rectificar y suprimir sus datos y demás reconocidos normativamente dirigiéndose al correo emisor o en los datos del responsable. Este mensaje y cualquier documento que lleve adjunto, en su caso, puede ser confidencial y destinado únicamente a la persona o entidad a quien ha sido enviado.
												</span>
											</td>
										</tr>
									</tbody>
								</table>


							</div>
						</div>
						<div><button id="demo" onclick="copyToClipboard('result');">Copiar código</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	function copyToClipboard(idelement) {
		// Crea un campo de texto "oculto"
		var aux = document.createElement("input");
		// Asigna el contenido del elemento especificado al valor del campo
		aux.setAttribute("value", document.getElementById(idelement).innerHTML);
		// Añade el campo a la página
		document.body.appendChild(aux);
		// Selecciona el contenido del campo
		aux.select();
		// Copia el texto seleccionado
		document.execCommand("copy");
		// Elimina el campo de la página
		document.body.removeChild(aux);
		// Avisamos de que está copiado
		alert('Texto copiado al portapapeles. Pulsa "Ctrl+V" para pegar en el correo');
	}

	function generateSignature() {
		name = document.getElementById('form-name').value;
		pos = document.getElementById('form-pos').value;
		user = document.getElementById('form-user').value;
		tel = document.getElementById('form-tel').value;

		if (!name || !pos) return;

		if (tel === '') {
			tel = document.getElementById('form-tel').placeholder;
		}

		document.getElementById('name').innerHTML = name;
		document.getElementById('pos').innerHTML = pos;
		document.getElementById('tel').innerHTML = tel;
		tel = tel.replace(/\s+/g, '');
		document.getElementById('tel').href = "tel:" + tel;


		var path = 'https://www.isocialweb.agency/firmas/';
		noPicture = 'https://www.isocialweb.agency/wp-content/uploads/2021/06/iSocialWeb-Agency-6-1.png';

		if (user === 'no-picture') {
			document.getElementById('user_image').src = noPicture;
		} else {
			document.getElementById('user_image').src = path + user;
		}

	}
</script>

<?php get_footer();
