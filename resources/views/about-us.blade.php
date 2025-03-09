
    
<x-layout>
<header>
    <div class="container-fluid header">
        <div class="row h-100 justify-content-around align-items-center">
            <div class="col-6">

            <h2 class="text-white text-color text-center">Chi siamo</h2>
            <p class="text-white text-color">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores facilis ipsum ratione incidunt vel voluptatem iure voluptate officiis harum neque maiores, odio repudiandae fugit dicta consequuntur sunt autem quos velit?</p>
            </div>

            <div class="col-6">
                <img src="/media/people-2557396_1280.jpg" alt="foto gruppo" class="shadow rounded justify-content-around align-items-center">

            </div>
        </div>
    </div>
</header>


<section>
    <div class="container">
        <div class="row">
            @if(isset($users) && !empty($users))
                @foreach ($users as $user)
                    <div class="col-12 col-md-4">
                        <h3>{{ $user['name'] }}</h3>

                        @if(isset($movies) && !empty($movies))
                            @foreach ($movies as $movie)
                                <x-card :movie="$movie" />
                            @endforeach
                        @else
                            <p>Nessun film disponibile per questo utente.</p>
                        @endif

                    </div>
                @endforeach
            @else
                <p>Nessun utente disponibile.</p>
            @endif
        </div>
    </div>
</section>


  


</x-layout>










