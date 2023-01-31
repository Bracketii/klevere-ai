{{-- @extends('user.layouts.app') --}}

{{-- @section('user-content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container py-5">
            <header class="text-center mb-5 text-white">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <h3>cashier subscription</h3>
                        <h1>price</h1>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <section>
        <div class="row">
            @foreach ($plans as $plan )

            <div class="col-sm-4">
                <div class="card text-center mb-3">
                    <h6>{{$plan->name}}</h6>
                    <h5>${{ $plan->price}}/month</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, nemo nesciunt facilis harum numquam officia alias quos corporis! Expedita voluptate soluta culpa libero eligendi impedit tempore porro! At, dolores sapiente.</p>
                    <a href="{{ route('plan.show',$plan->slug)}}" class="btn btn-success">buy-now</a>
                </div>
            </div>
            @endforeach

        </div>
    </section>
</body>
</html>
{{-- @endsection --}}
