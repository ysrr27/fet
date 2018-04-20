@extends('app')

@section('content')

			<section id="contacto" class="callout-dark heading-title heading-arrow-bottom" style="">
				<div class="container">
					<div class="text-center">
						<h3 class="size-30">Aplicaciones Moviles</h3>
					</div>
				</div>
			</section>
			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">
					<h3 style="color: #ffffff">Caracteristicas de la aplicación movíl</h3>
				</div>

			</div>
			<section>
				<div class="container">		
					<div class="container">
						<!-- 1 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile01.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Sus cursos a la vista</h3>
									<p class="text-muted">Sus cursos están listados con fácil acceso a contenidos, participantes, grados y notas. Un campo de filtro útil le permite encontrar un curso en particular rápidamente. Si su token caduca durante una sesión, se le pedirá que vuelva a introducir su contraseña y continúe.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile02.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Conectarse con los participantes del curso</h3>
									<p class="text-muted">El desplazamiento infinito mejora el acceso a la vista de los participantes, con el perfil completo de usuario ahora mostrado y disponible en cada página</p>
								</div>
							</div>
						</div>
						<!-- 2 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile03.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Tire para actualizar</h3>
									<p class="text-muted">La mayoría de las pantallas le permitirán aprovechar para actualizar, mejorando la experiencia de participación en tiempo real.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile04.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Soporte de orientación y resolución</h3>
									<p class="text-muted">La aplicación se muestra en modo vertical o horizontal, independientemente de la resolución de la pantalla.</p>
								</div>
							</div>
						</div>
						<!-- 3 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile05.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Acceda fácilmente al contenido del curso</h3>
									<p class="text-muted">Ver las actividades del curso y descargar materiales para uso fuera de línea. Trabaje en Libros y en Paquetes de contenido IMS directamente en la aplicación. El estado de descarga de los recursos se conserva incluso al cambiar secciones o páginas.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile06.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Culminacion de la actividad</h3>
									<p class="text-muted">Rastree el progreso desde su dispositivo con la finalización de la actividad. Se registra la finalización automática, y los estudiantes también pueden marcar manualmente una tarea completa en su móvil.</p>
								</div>
							</div>
						</div>
						<!-- 4 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile07.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Grados y clasificación</h3>
									<p class="text-muted">Un enlace de Grados para cada curso da acceso al libro de calificaciones y los instructores pueden ver las presentaciones de asignación en el momento.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile08.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Notas</h3>
									<p class="text-muted">Los instructores pueden ver el sitio, el curso y las notas personales de sus estudiantes y agregar sus propias notas.</p>
								</div>
							</div>
						</div>
						<!-- 5 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile09.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Mensajes entre amigos</h3>
									<p class="text-muted">Envíe y vea mensajes privados a amigos y estudiantes desde el enlace Mensajes en la pestaña lateral.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile10.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Manténgase actualizado con los eventos del calendario</h3>
									<p class="text-muted">Los eventos de sitio, curso y usuario se pueden ver en el calendario. Los eventos de calendario se pueden ver sin conexión y el desplazamiento infinito está disponible.</p>
								</div>
							</div>
						</div>
						<!-- 6 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile11.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Ver y subir a tus archivos privados</h3>
									<p class="text-muted">Compruebe el contenido de sus archivos privados y cargue los medios a ellos en cualquier lugar. Puede almacenar hasta 50 MB (dependiendo de la tarjeta SD).</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile12.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Notificaciones</h3>
									<p class="text-muted">Manténgase al día con las notificaciones. La aplicación admite notificaciones tanto locales (eventos de calendario) como de empuje (mensajes, mensajes en el foro, asignaciones enviadas, etc.). Consulta las notificaciones de la aplicación para móviles para obtener más detalles. El desplazamiento infinito está disponible.</p>
								</div>
							</div>
						</div>
						<!-- 7 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile13.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Tomar decisiones</h3>
									<p class="text-muted">La aplicación apoya a los estudiantes haciendo y eliminando opciones.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile14.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Participar en el chat, en momento</h3>
									<p class="text-muted">Participa en una actividad de chat en el curso.</p>
								</div>
							</div>
						</div>
						<!-- 8 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile15.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Feed back entre el instructor y el estudiante mediante encuestas</h3>
									<p class="text-muted">Las encuestas se pueden completar usando la aplicación.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile16.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Buscar en la lista de cursos</h3>
									<p class="text-muted">Los usuarios de aplicaciones pueden buscar cursos para encontrar uno que deseen tomar.</p>
								</div>
							</div>
						</div>
						<!-- 9 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile17.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Inscríbete desde tu smartphone</h3>
									<p class="text-muted">¿Encontraste un curso que te gusta? Inscríbase de inmediato a través de la aplicación.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile18.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Reproducir paquetes SCORM en y fuera de línea</h3>
									<p class="text-muted">El reproductor de la aplicacion SCORM controla las interacciones y se sincroniza cuando vuelve a estar en línea.</p>
								</div>
							</div>
						</div>
						<!-- 10 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile19.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Descargar todas las secciones del curso</h3>
									<p class="text-muted">Descarga fácilmente todas las secciones para verlas sin conexión.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile20.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Ver entradas de glosario</h3>
									<p class="text-muted">Le permite buscar y seleccionar entradas de glosario.</p>
								</div>
							</div>
						</div>
						<!-- 11 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile21.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Toma cuestionarios en tu móvil</h3>
									<p class="text-muted">Los cuestionarios pueden ser completados en el momento.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile22.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Planes de aprendizaje</h3>
									<p class="text-muted">Los planes de aprendizaje pueden ser vistos y el progreso se puede comprobar desde el móvil.</p>
								</div>
							</div>
						</div>
						<!-- 12 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile23.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Estudiantes: Vea fácilmente las calificaciones de su curso</h3>
									<p class="text-muted">Un nuevo enlace de Grados le permite ver rápidamente las calificaciones del curso.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile24.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Instructores: asignaciones de grado</h3>
									<p class="text-muted">Las asignaciones se pueden calificar en el momento, desde la aplicación y se pueden clasificar sin conexión.</p>
								</div>
							</div>
						</div>
						<!-- 13 columna -->
						<div class="row">
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile25.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Ver insignias de tu perfil</h3>
									<p class="text-muted">Las insignias se pueden ver desde un enlace en el perfil de usuario.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 text-center">
								<div class="service-box">
									<img src="{{ asset('smarty/assets/ilernus/mobil/mobile26.png') }}" alt="..." class="img-rounded" style="width: 100%">
									<h3>Notificaciones y preferencias de mensajería</h3>
									<p class="text-muted">La pantalla de preferencias le permite decidir cómo recibir alertas.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- / -->

<script type="text/javascript">
function showfield(name){
  if(name=='otros')
  	document.getElementById('div1').innerHTML='<label for="otroCargo">Indique</label><input type="text" class="form-control pointer" name="otroCargo" />';

  else document.getElementById('div1').innerHTML='';
}

function showfield2(name){
  if(name=='otros')
  	document.getElementById('div2').innerHTML='<label for="otroSector">Indique</label><input type="text" class="form-control pointer" name="otroSector" />';

  else document.getElementById('div2').innerHTML='';
}
</script>
@endsection					