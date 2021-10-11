@extends('layout.main')
@section('title','Posts')
@section('content')
<div class="container">
<a class="waves-effect waves-light btn" href="/posts/create"><i class="material-icons left">add</i>Create Posts</a>
<table class="responsive-table highlight">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
    </thead>   
    <tbody>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->body}}</td>
            <td>{{$item->created_at}}</td>
            <td>
                <form method="POST" action="/posts/{{$item->id}}">
                    @csrf
                    @method('delete')
                    <button class="btn red darken-1"><i class="material-icons">delete</i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
@section('js')
<script>
    @if(session('data'))
        @if(session('data')==true)
            M.toast({html:"Succesfully Deleted <i class='material-icons tiny green-text right'>check</i>"});
        @elseif(session('data')==false)
            M.toast({html:"Failed to Deleted <i class='material-icons tiny red-text right'>close</i>"});
        @endif
    @endif
</script>    
@endsection