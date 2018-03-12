@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">{{ $user->first_name }}'s Profile</div>
                        <div class="card-body">
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>First Name:</strong> {{ $user->first_name }}</p>
                        <p><strong>Last Name:</strong> {{ $user->last_name }}</p>
                        <p><strong>Phone:</strong> {{ $user->phone }}</p>
                        @if ($user->roles->has(1))
                            <p><strong>Trader Title:</strong> {{ $user->trader_title }}</p>
                            <p><strong>Trader Description:</strong> {{ $user->trader_description }}</p>
                        @endif
                        @if ($currentUser->id == $user->id)
                            <a href="/profile/edit"><button class="btn btn-primary">Edit Profile</button></a>
                            @if (!$user->roles->has(1))
                                <a href="/profile/apply_trader_role"><button class="btn btn-primary">Apply to be trader</button></a>
                            @else
                                <a href="/profile/remove_trader_role"><button class="btn btn-danger">Remove trader role</button></a>
                            @endif
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection