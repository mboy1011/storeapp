@extends('layout.main')
@section('content')
<div class="container">
<table class="responsive-table highlight">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Date Created</th>
        </tr>
    </thead>   
    <tbody>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->body}}</td>
            <td>{{$item->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection