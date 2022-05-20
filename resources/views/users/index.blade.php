@extends('layouts.app', ['title' => 'All Users Page'])

@section('content')

<div class="container">


    <div class="d-flex justify-content-between">
        <h2>All Users</h2>
    </div>
    <div class="row">
        @forelse ($users as $user)
        <div class="col-md-4 mt-3">
            <div class="card mb-3">
                @if($user->thumbnail)
                <img src="{{ asset($user->takeImage) }}" class="img-thumbnail">
                @endif
                <div class="card-body">
                    <p class="card-title text-secondary">{{ $user->name }}</p>
                    <hr>
                    {{ \Str::limit($user->username, 140, '...') }}

                    <div>
                        <a href="{{ route('users.show', $user->id) }}" class="text-info">Detail User</a>
                    </div>
                </div>
                <!-- <div class="card-footer">
                        {{ 'Registered account:' . ' ' . $user->created_at->format('d F Y') }}
                    </div> -->
            </div>
        </div>
        @empty
        <div class="col-md-6 mt-3">
            <div class="alert alert-danger">
                There no users.
            </div>
        </div>
        @endforelse
    </div>

</div>

@endsection