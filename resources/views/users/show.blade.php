@extends('layouts.app', ['title' => 'Account Profile:' . ' ' . auth()->user()->username])

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-secondary">User Account Profile</h3>
                </div>
                @if ($user->thumbnail)
                <img src="{{ asset('/storage/'.auth()->user()->thumbnail) }}" class="img-thumbnail" height="300px" width="300px">
                @endif
                <div class="card-body">
                    <p class="card-title h5">name: {{ $user->name }}</p>
                    <p class="card-title text-info">username: {{ $user->username }}</p>
                    <p class="card-title">email: {{ $user->email }}</p>
                </div>
                <div class="card-footer">
                    <div>
                        @if(auth()->user()->role==="admin" && $user->role!=="admin")
                        <form action="{{ route('users.delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-link btn-sm text-danger p-0">Delete User</button>
                        </form>
                        @endcan
                        <!-- <a href="" class="btn btn-link btn-sm text-danger p-0">Delete Account</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection