<x-layout>  
  <x-slot:heading> 
   Welcome page


 </x-slot:heading> 

@foreach($jobs as $job) 
      <a href="/job/{{$job['id']}}">
      <li> {{$job['title'] }}: {{$job['salary'] }}  </li>
      </a>
 @endforeach
 </x-layout>