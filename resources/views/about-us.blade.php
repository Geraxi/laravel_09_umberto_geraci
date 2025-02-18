
    
<x-layout>
<header>
    <div class="container-fluid header">
        <div class="row h-100 justify-content-around align-items-center">
            <div class="col-6">

            <h2 class="text-white text-color text-center">Chi siamo</h2>
            <p class="text-white text-color">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores facilis ipsum ratione incidunt vel voluptatem iure voluptate officiis harum neque maiores, odio repudiandae fugit dicta consequuntur sunt autem quos velit?</p>
            </div>

            <div class="col-6">
                <img src="/media/people-2557396_1280.jpg" alt="foto gruppo" class="shadow rounded">

            </div>
        </div>
    </div>
</header>


<section>
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
             <div class="col-12 col-md-4">
             <div class="card" style="width: 18rem;">
     <div class="card-body">
      <h5 class="card-title">{{$user['name'] . " " . $user['surname']}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
      <a href="{{route('aboutUsDetail',['name'=>$user['name']])}}" class="card-link">Leggi di più</a>
     </div>
    </div>
</div>
</div>
            </div>
            
            @endforeach
        </div>
    </div>
</section>
  


</x-layout>










