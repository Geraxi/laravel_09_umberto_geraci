  <x-layout>

  

  

<header>
    <div class="container-fluid header">
   
        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-center">
             <h1 class="text-light display-1 fw-bold text-color">I nostri docenti</h1>
             <div class="row justify-content-center align-items-center height-custom">
                 @foreach ($teachers as $teacher)
                 <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
             </div>
</div>
                {{$teacher['name']}}
                @endforeach
             </div>
            
             
            </div>
            
        </div>
    </div>
</header>
  
   






</x-layout>