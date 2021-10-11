@extends('layout.main')
@section('title','Create Posts')
@section('content')
<div class="container">
    <form action="/posts" method="post">
        @csrf
        <div class="input-field col s12 l6">
            <input type="text" id="tt" class="validate" name="title" required>
            <label for="tt">Title</label>
        </div>
        
        <div class="input-field col s12 l6">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Body</label>
        </div>
        <button type="submit" class="btn large blue" name="submit">Submit <i class="material-icons right">send</i></button>
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
</script>
@endsection