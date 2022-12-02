@include('mdb.codigo')
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Cadastrar Veículo</h1>
      <div class="row">
        @csrf
        <div class="rounded mx-auto d-block">
           <label>
              <p>Código do Cliente: <input value="{{old('cliente_id')}}" type="number" id="cliente_id" name="cliente_id"></p>
              @error('cliente_id')
                  <p class="red-text">{{$message}}</p>
              @enderror
           </label>

           <label>
                <p>Tipo de Veículo: 
                    <select value="{{old('tipo')}}"  name="tipo">
                    <option value="">Faça a sua escolha...</option>
                        <option value="Carro">Carro</option>
                        <option value="Moto">Moto</option>
                    </select>
                </p>
            @error('tipo')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
         </div>
      </div>

      <div class="row">
          <div class="rounded mx-auto d-block">
            <label>
               <p>Marca: <input value="{{old('marca')}}" type="text" id="marca" name="marca"></p>
               @error('marca')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
           
            <label> 
                <p>Modelo: <input value="{{old('modelo')}}" type="text" id="modelo" name="modelo"> </p>
                @error('modelo')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
          </div>
      </div>

      <div class="row">
        <div class="rounded mx-auto d-block">
            <label> 
            <p>Placa: <input value="{{old('placa')}}" type="text" id="placa" name="placa"> </p>
               @error('placa')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>

            <label> 
                <p class="ml-3">Ano: <input type="number" id="ano" name="ano"> </p>
                @error('ano')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
        </div>			
      </div>
           <p><input type="submit" class="btn btn-success rounded mx-auto d-block" value="Cadastrar"></p>
           
   </form>
</div>