@extends('layout.main')
@section('title','Login')
@section('content')
<div class="container">
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf        
        <div class="input-field col s12 l6">
            <input type="email" id="em" class="validate" name="email" required>
            <label for="em">Email</label>
        </div>
        
        <div class="input-field col s12 l6">
            <input type="password" id="pwd" class="validate" name="passwd" required>
            <label for="pwd">Password</label>
        </div>
        
        <button type="submit" class="btn large blue" name="submit">Submit <i class="material-icons right">send</i></button>
    </form>
</div>
@endsection