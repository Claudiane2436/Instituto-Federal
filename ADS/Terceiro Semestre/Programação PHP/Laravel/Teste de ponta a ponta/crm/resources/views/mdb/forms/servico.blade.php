@include('mdb.codigo')
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Agendar Serviço</h1>
      <div class="row">
        @csrf
        <div class="rounded mx-auto d-block">
           <label>
              <p>Email do Cliente: <input value="{{old('email')}}" type="text" id="email" name="email"></p>
              @error('email')
                  <p class="red-text">{{$message}}</p>
              @enderror
           </label>

           <label>
                <p>Servico: 
                    <select value="{{old('servico')}}"  name="servico">
                    <option value="">Escolha o serviço...</option>
                        <option dusk="modi" value="Difusor Traseiro">Modificação Interna</option>
                        <option dusk="ilu" value="Iluminação de LED">Iluminação de LED</option>
                        <option dusk="pintu" value="Pintura">Pintura</option>
                    </select>
                </p>
            @error('servico')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
         </div>
      </div>

      <div class="row">
          <div class="rounded mx-auto d-block">
            <label>
            <p>Categoria: 
                    <select value="{{old('categoria')}}"  name="categoria">
                    <option value="">Escolha a categoria...</option>
                        <option dusk="moto" value="Moto">Moto</option>
                        <option dusk="carro" value="Carro">Carro</option>
                    </select>
                </p>
                @error('categoria')
                  <p class="red-text">{{$message}}</p>
              @enderror
       
            </label>
           
            <label> 
            <p>Data: <input value="{{old('dia')}}" type="date" id="dia" name="dia"> </p>
               @error('dia')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
          </div>
      </div>


        <input type="submit" dusk="submit" class="col-3 btn btn-success rounded mx-auto d-block" value="Cadastrar">
          
           
   </form>
</div>