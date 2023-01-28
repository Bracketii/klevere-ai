{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">you will be charged ${{ number_format($plan->price,2)}}for{{$plan->name}}</div>
                    <div class="card-body">
                          <form action="{{ route('subs.create')}}" method="POST" id="payment-form" class="form-group">
                            {{ csrf_field() }}
                            <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                            <input type="text" name="name" id="card-holder-name" value="" placeholder="card-holder-name">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="form-control">
                                        <label for="">card details</label>

                                            <div  id="card-element">

                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                            <input type="submit" name="submit" value="purchase" class="btn btn-success" id="card-button" data-secret="{{ $intent->client_secret}}">

                                </div>
                            </div>

                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe=Stripe('{{ env('STRIPE_KEY') }}')
        const elements =stripe.elements()
        const cardElement=elements.create('card')
        cardElement.mount('#card-element')

        const form=document.getElementsById('payment-form')
        const cardBtn= document.getElementsById('card-button')
        const cardHolderName=document.getElementsById('card-holder-name')


        form.addEventListener('submit', async (e)=>{
            e.preventDefault()
            cardBtn.disabled= true
            const { setupIntent, error}=await stripe.confirmCardSetup(
                cardBtn.dataset.secret,{
                    payment_method:{
                        card: cardElement,
                        billing_details:{
                            name : cardHolderName.value
                        }
                    }
                }
            )
            if(error){
                cardBtn.disable=false
            }else{
                let token=document.createElement('input')
                token.setAttribute('type','hidden')
                token.setAttribute('name','token')
                token.setAttribute('value',setupIntent.payment_method)
                form.appendChild(token)
                form.submit();
            }
        });
    </script>
</body>
</html>

{{-- @endsection --}}
