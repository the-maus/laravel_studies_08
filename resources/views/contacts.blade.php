@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <p class="display-6 text-info">This page is accessible to logged and non-logged users.</p>
        
            <hr>

            @auth
                <p class="display-6 text-success">This text is shown to logged users only.</p>
            @endauth

            @guest
                <p class="display-6 text-warning">This text is shown to guest users only.</p>
            @endguest


            <p>ANOTHER WAY</p>

            @auth
                <p class="display-6 text-success">This text is shown to logged users only.</p>
            @else
                <p class="display-6 text-warning">This text is shown to guest users only.</p>
            @endauth
        </div>
    </div>
</div>

@endsection