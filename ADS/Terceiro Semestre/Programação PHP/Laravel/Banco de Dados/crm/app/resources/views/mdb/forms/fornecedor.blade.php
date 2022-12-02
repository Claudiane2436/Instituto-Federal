@include('mdb.codigo')
<form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Cadastrar Fornecedor</h1>
   @csrf
   <div class="row" class="col-md-12">
      <label class="rounded mx-auto d-block">
         <p>Nome: <input value="{{old('nome')}}"type="text" id="nome" name="nome"></p>
         @error('nome')
         <p class="red-text">{{$message}}</p>
         @enderror
      </label>
      
    </div>

    <div class="row" class="col-md-12">
      <label class="rounded mx-auto d-block"> 
          <p>Telefone: <input value="{{old('telefone')}}" type="text"  id="telefone"name="telefone"> </p>
          @error('telefone')
         <p class="red-text">{{$message}}</p>
         @enderror
      </label>
      </div>
      <p><input type="submit" class="btn btn-success rounded mx-auto d-block" value="Cadastrar"></p>
      
   </form>

   