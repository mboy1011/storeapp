@extends('layout.main')
@section('content')
<div class="container">
    <form action="#" method="POST" enctype="multipart/form-data">
        <!-- <h3 class="header pink-text">Register<i class="material-icons medium left">person_add</i></h3> -->
        
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