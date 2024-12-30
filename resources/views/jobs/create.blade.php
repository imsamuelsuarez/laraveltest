<x-layout>  
  <x-slot:heading> 
   Create page

 </x-slot:heading> 


<form method="POST" action="/jobs">
@csrf
              <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="janesmith">        
              @error('title')
            <x-error>{{$message}}</x-error>
              @enderror
              
              <input type="text" name="salary" placeholder="Salario">
              @error('salary')
            <x-error>{{$message}}</x-error>
              @enderror

    <button type="submit"> Enviar</button>

</form>

{{-- @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach --}}

 </x-layout>