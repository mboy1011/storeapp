@extends('layout.main')
@section('title','Create Posts')
@section('content')
<div class="container">
    <form action="/posts" method="post" class="row">
        <h5 class="center">Create Post</h5>
        @csrf
        <div class="input-field col s6">
            <input type="text" id="tt" class="validate @error('title') invalid @enderror" name="title">
            <label for="tt">Title</label>
            <span class="helper-text" data-error="@error('title') {{$message}} @enderror"></span>
        </div>
        
        <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea @error('body') invalid @enderror" data-length="120" name="body"></textarea>
            <label for="textarea2">Body</label>
            <span class="helper-text" data-error="@error('body'){{$message}}@enderror"></span>
        </div>
        <div class="input-field col s12">
            <button type="submit" class="btn large blue" name="submit">Submit <i class="material-icons right">send</i></button>
        </div>

    </form>
</div>
@endsection
@section('js')
<script>
    // MaterializeCSS Character Count for Text Area
    document.addEventListener('DOMContentLoaded', function () {
        let tarea = document.querySelectorAll('textarea');
        M.CharacterCounter.init(tarea);
    });
    @if(session('data'))
        @if(session('data')==true)
            M.toast({html:"Succesfully Created <i class='material-icons tiny green-text right'>check</i>"});
        @elseif(session('data')==false)
            M.toast({html:"Failed to Create <i class='material-icons tiny red-text right'>close</i>"});
        @endif
    @endif
</script>
@endsection
