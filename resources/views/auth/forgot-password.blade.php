@extends('layouts.main_layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 card p-5">
            <form action="{{ route('password.email') }}" method="post" novalidate>
                @csrf
                <p class="display-6 text-center">Password recovery</p>
                <div class="mb-3">
                    <label for="email">Inform your e-mail address</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mt-4 d-flex justify-content-between">
                    <div>
                        <a href="{{ route('login') }}">I already know my password</a>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary px-5">Recover password</button>
                    </div>
                </div>

                {{-- email sent (shows the same message even if e-mail doesn`t exist to avoid security issues) --}}
                @if (session('status') || $errors->any())
                    <div class="text-center mt-5">
                        <p>An e-mail was sent to your e-mail address with the instructions to recover your password.</p>
                        <a href="{{ route('login') }}">Go back</a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection