@extends('layout.list')

@section('title', 'Ini adalah judul pada meta')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<div class="overflow-x-auto">
    <table class="table">
        <thead>
            <tr class="bg-base-200">
                <th>ID</th>
                <th>Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['produk'] }}</td>
                <!--Data lainnya-->
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection