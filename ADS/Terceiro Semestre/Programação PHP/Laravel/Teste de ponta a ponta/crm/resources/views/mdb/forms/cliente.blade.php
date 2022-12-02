@include('mdb.codigo')
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Cadastrar Cliente</h1>
      <div class="row">
        @csrf
        <div class="rounded mx-auto d-block">
           <label>
              <p>Nome: <input value="{{old('nome')}}" type="text" id="nome" name="nome"></p>
              @error('nome')
                  <p class="red-text">{{$message}}</p>
              @enderror
           </label>

           <label>
            <p>Sobrenome: <input value="{{old('snome')}}" type="text" id="snome" name="snome"></p>
            @error('snome')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
         </div>
      </div>

      <div class="row">
          <div class="rounded mx-auto d-block">
            <label>
               <p>Email: <input value="{{old('email')}}" type="text" MAXLENGTH="30" id="email" name="email"></p>
               @error('email')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
           
            <label> 
                <p>CPF: <input value="{{old('cpf')}}" type="text" MAXLENGTH="15" id="cpf" name="cpf"> </p>
                @error('cpf')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
          </div>
      </div>

      <div class="row">
        <div class="rounded mx-auto d-block">
            <label> 
               <p class="ml-3">Sexo: 
                <input class="ml-3" dusk="masc" type="radio" value="1" name="genero" id="Sexo_0"> Masculino
                <input type="radio" dusk="femi" class="ml-3" name="genero" value="2" id="Sexo"> Feminino
                <input type="radio" dusk="outro" class="ml-3" name="genero" value="0" id="Sexo"> Não informado
               </p>
               @error('genero')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>

            <label> 
                <p class="ml-3">Telefone: <input type="text" id="telefone" name="telefone"> </p>
                @error('telefone')
                  <p class="red-text">{{$message}}</p>
              @enderror
            </label>
        </div>			
      </div>
           <p><input type="submit" dusk="submit" class="btn btn-success rounded mx-auto d-block" value="Cadastrar"></p>
           
   </form>
</div>