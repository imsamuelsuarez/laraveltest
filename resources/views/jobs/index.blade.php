<x-layout>  
  <x-slot:heading> 
   Welcome page


 </x-slot:heading> 

<a href="/jobs/create">Crear empleo</a>

<section class="w-100 h-100 gap-10 flex justify-center items-center flex-wrap text-wrap text-center">
@foreach($jobs as $job) 

<div class="rounded text-wrap w-[400px]" style="border: 1px solid gray; box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
    <h3>{{$job['title'] }} : {{$job['salary']}}</h3>
      <a href="/job/{{$job['id']}}">
              <div>
                Ver mas
              </div>
      </a>
</div>

 @endforeach
</section>

 </x-layout>