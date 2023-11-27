@extends('layouts.app')
@section('content')
    <table>
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->qty }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->name }}</td>
        </tr>
    </table>
@endsection
