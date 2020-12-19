@extends('layouts.app')

@section('content')



<form action="product" method="post">
    @csrf
    <tr>
        <td><input type="text" name=name placeholder="Name:"></td>
        <td><input type="number" name=age placeholder="age:"></td>
        <td><input type="number" name=price placeholder="price:"></td>
        <td><button>submit</button><td>
    </tr>
    
</form>


@endsection