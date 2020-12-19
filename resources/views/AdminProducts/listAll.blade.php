@extends('layouts.app')

@section('content')

<table class="table">
    <tr>
        <td><h3>Products:</h3></td>
    </tr>
    <tr>
        <td>name</td>
        <td>age</td>
        <td>price</td>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->age}}</td>
        <td>{{$product->price}}</td>
        <td>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <button class="deleteRecord" data-id="{{ $product->id }}" >Delete Record</button>
        </td>
    </tr>
   @endforeach


<script>
$(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "product/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            console.log("it Works");
        }
    });
   
});
</script>


@endsection