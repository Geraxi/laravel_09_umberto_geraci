<x-layout>

    <header>

        <head>
            <style>
                .header {
                    background-image: url('{{ asset('media/cinema1.jpg') }}');
                    height: 95vh;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
        </head>



        <div class="container-fluid">
            @if (session()->has('emailSent'))
                <div class="alert alert-success pt-5">
                    {{ session('emailSent') }}
                </div>
            @endif

            @if (session()->has('emailError'))
                <div class="alert alert-danger pt-5">
                    {{ session('emailError') }}
                </div>
            @endif
            @if (session()->has('successMessage'))
                <div class="alert alert-success pt-5">
                    {{ session('successMessage') }}
                </div>

            @endif

            @if(session()->has('errorMessage'))
                <div class="alert alert-danger">
                    {{ session('errorMessage') }}
                </div>
            @endif
        </div>

        <div class="container-fluid header">
            <div class="row h-100">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h1 class="text-light display-1 fw-bold text-color">Movie Mania</h1>
                </div>
            </div>
        </div>

    </header>

</x-layout>