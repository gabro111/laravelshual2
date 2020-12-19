@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <form action="product" method="get">
                        <button> Create_Product</button>
                    </form>
                    <form action="product/1" method="get">
                        <button> List_all</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
