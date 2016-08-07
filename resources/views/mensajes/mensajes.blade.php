@if (session('mensaje'))
	<ul>
	<!--  Ver como poner este mensaje en un toast para ponerlo pepon -->
			<li>

				<h4 class="alerta">{{session('mensaje')}}</h4>
			</li>
	</ul>
@endif