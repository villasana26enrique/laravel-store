 <div class="card-panel teal lighten-2" style="border-radius: 20px">
		        <!--Header-->
		        <div class="card-content center-align">
		            <h4 class="card-title">Equipos disponibles</h4>
		        </div>
		        <div class="row">
		         @foreach($productos as $producto)
			        <div class="col m4">
			          <div class="card hoverable">
			            <div class="card-image">
			              <img src="img/banner8.jpg" class="responsive-img">
			              <span class="card-title">{{$producto->nombre}}</span>
			            </div>
			            <div class="card-content">
			              <p>{{str_limit($producto->descripcion,$limit=20,$end ='...')}}</p>
			            </div>
			            <div class="card-action">
			              {{$producto->precio}}
			            </div>
			          </div>
			        </div>
			    @endforeach      
			    </div>        
		    </div>