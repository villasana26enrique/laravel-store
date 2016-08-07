<ul class="collapsible" data-collapsible="accordion">
		    <li>
		      <div class="collapsible-header active"><i class="material-icons">filter_drama</i>Categorias</div>
		      <div class="collapsible-body white" style="display: block">
		      	<ul class="collection with-header">
			        @foreach ($categorias as $categoria)
			        <a class="collection-item black-text">{{$categoria->nombre}}<span class="badge">{{$categoria->cantidadProductos->count()}}</span></a>
			        @endforeach
			    </ul>
		      </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">place</i>Marcas</div>
		      <div class="collapsible-body">
		      	<ul class="collection with-header">
			        @foreach ($marcas as $marca)
			        <a class="collection-item black-text">{{$marca->nombre}}<span class="badge">{{$marca->cantidadProductos->count()}}</span></a>
			        @endforeach
			    </ul>
		      </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">whatshot</i>Ubicación</div>
		      <div class="collapsible-body">
		      	<ul class="collection with-header">
			        @foreach ($ubicaciones as $ubicacion)
			        <a class="collection-item black-text">{{$ubicacion->nombre}}</a>
			        @endforeach
			    </ul>
		      </div>
		    </li>
		</ul>