@extends('layout')

@section('content')
<h2>Users</h2>

<div x-data="{}" class="mb-2" >
    <button class="btn btn-dark" @click="$dispatch('open-user-modal')">New User</button>
</div>

<ul class="list-group">
    @foreach ($users as $user)
<li class="list-group-item d-flex justify-content-between">
    {{ $user->name }}
    <div x-data="{}">

        <button class="btn btn-sm btn-primary" @click="$dispatch('open-user-modal',{{$user}})">Edit</button>
    </div>
</li>
    @endforeach
</ul>



{{ $users->links() }}
    
@endsection