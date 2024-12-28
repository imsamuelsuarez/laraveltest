<x-layout>  
  <x-slot:heading> 
   Create page

 </x-slot:heading> 


<form method="POST" action="/jobs">
@csrf
        <input type="text" name="title" placeholder="Titulo">
        <input type="text" name="salary" placeholder="Salario">

    <button type="submit"> Enviar</button>

</form>


 </x-layout>