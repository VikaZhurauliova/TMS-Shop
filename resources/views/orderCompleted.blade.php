@extends('app')
@section('content')
    <!-- SHOP CHECKOUT COMPLETED -->
    <section id="shop-checkout-completed">
        <div class="container">
            <div class="p-t-10 m-b-20 text-center">
                <div class="text-center">
                    <h3>Congratulations! Your order is completed!</h3>
                </div>
                <br>
                <a class="btn icon-left" href="{{ route('main') }}"><span>Return To Main Page</span></a>
            </div>
        </div>
    </section>
    <!-- end: SHOP CHECKOUT COMPLETED -->
</div>
@endsection
