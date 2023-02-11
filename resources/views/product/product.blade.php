<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5" style="display: flex">
            @foreach ($product as $products )

            <div class="col-lg-3" style="margin-right: 5px">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Name:{{ $products->name}}</p>
                  {{-- <input type="text" value="name:"> --}}
                  <h6>price:${{$products->price}}</h6>
                  {{-- <input type="text" value=""> --}}
                <form action="{{route('checkout',$products->id)}}" method="post">

                  {{ csrf_field() }}
                  <button>checkout</button>
                </form>
                </div>
              </div>
            </div>
            @endforeach




    </div>

</div>

</body>
</html>
