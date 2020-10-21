@extends('layouts.app')
@section('content')
<div class='display-4 p-5 text-center'>
    Benvenuto nel mio Blog
</div>

@guest
 <p class='lead text-center'>Guest</p>
@else    
<p class='lead text-center'>Il tuo nome e': {{ Auth::user()->name }}</p>
@endguest
@endsection