@include('mdb.codigo')
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Comprar Produto</h1>
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
                <p>Produto: 
                    <select value="{{old('produto')}}"  name="produto">
                    <option value="">Faça a sua escolha...</option>
                        <option value="Difusor Traseiro">Difusor Traseiro</option>
                        <option value="Aro">Aro</option>
                        <option value="Volante">Volante</option>
                        <option value="Motor">Motor</option>
                        <option value="Tinta">Tinta</option>
                        <option value="Luz de LED">Luz de LED</option>
                        <option value="Farol">Farol</option>
                    </select>
                </p>
            @error('produto')
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
                        <option value="Moto">Moto</option>
                        <option value="Carro">Carro</option>
                    </select>
                </p>
                @error('categoria')
                  <p class="red-text">{{$message}}</p>
              @enderror
       
            </label>
           
            <label> 
            <p>Quantidade: <input value="{{old('quantidade')}}" type="number" id="quantidade" name="quantidade"> </p>
               @error('quantidade')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
          </div>
      </div>

      <div class="row">
        <div class="rounded mx-auto d-block">
        <label> 
                <p class="ml-3">
                <p>Pagamento: 
                    <select value="{{old('pagamento')}}"  name="pagamento">
                    <option value="">Escolha a forma de pagar...</option>
                        <option value="Dinheiro">Dinheiro</option>
                        <option value="Cartão">Cartão</option>
                    </select>
                </p>
                @error('pagamento')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>

            
        </div>			
      </div>

      <div class="row">
        <input type="submit" class="col-3 btn btn-success rounded mx-auto d-block" value="Cadastrar">
        <a href="{{url('cadastroServico')}}" class="col-3 btn btn-danger rounded mx-auto d-block" value=""> Agenda Serviço</a>
      </div>
           
           
   </form>
</div>