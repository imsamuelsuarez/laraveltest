<x-layout>  
  <x-slot:heading> 
   Create page

 </x-slot:heading> 


<form method="POST" action="/jobs">
@csrf
              <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="janesmith">        
              
              
              
              <input type="text" name="salary" placeholder="Salario">

    <button type="submit"> Enviar</button>

</form>


 </x-layout>