@include('mdb.codigo')
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Cadastrar Produto</h1>
      <div class="row">
        @csrf
        <div class="rounded mx-auto d-block">
           <label>
              <p>Código do Fornecedor: <input value="{{old('fornecedor_id')}}" type="number" id="fornecedor_id" name="fornecedor_id"></p>
              @error('fornecedor_id')
                  <p class="red-text">{{$message}}</p>
              @enderror
           </label>

           <label>
           <p>Nome: <input value="{{old('nome')}}" type="text" id="nome" name="nome"></p>
               @error('nome')
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
                    <option value="">Faça a sua escolha...</option>
                        <option value="Carro">Carro</option>
                        <option value="Moto">Moto</option>
                    </select>
                </p>
               @error('categoria')
                  <p class="red-text">{{$message}}</p>
              @enderror

              
            </label>
           
            <label> 
            <p>Estoque: <input value="{{old('estoque')}}" type="number" id="estoque" name="estoque"> </p>
                @error('estoque')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
          </div>
      </div>

      <div class="row">
        <div class="rounded mx-auto d-block">
            

            <label> 
                <p class="ml-3">Preço: <input type="number" id="preco" name="preco"> </p>
                @error('preco')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
        </div>			
      </div>
           <p><input type="submit" class="btn btn-success rounded mx-auto d-block" value="Cadastrar"></p>
           
   </form>
</div>