<x-layout>  
  <x-slot:heading> 
   Welcome page


 </x-slot:heading> 

 <ul>
        @foreach($job->getAttributes() as $key => $value)
            <li>{{ ucfirst($key) }}: {{ $value }}</li>
        @endforeach
    </ul>


<x-button href="/jobs/edit/{{$job['id']}}">Editar</x-button>

 </x-layout>