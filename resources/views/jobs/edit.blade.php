<x-layout>
    <x-slot:heading>Editar</x-slot:heading>    

    <form method="POST" action="/jobs">
                @method('PATCH')
                <input type="text" value="{{$job->title}}" name="title" id="title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="title">


                <input type="text" value="{{$job->salary}}" name="salary" id="salary" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="salary">


                <button type="submit">Editar</button>
    </form>

</x-layout>