@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="rounded-circle p-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9rKSOA4QiGr08dU7wrblrkr-w70UWT9mar_pwgMQrcb0rdAhD&s" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="font-weight-bold">{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
            <div class="d-flex">
                <div class="pr-5">
                    <strong>
                        {{ $user->posts->count() }}
                    </strong> posts
                </div>
                <div class="pr-5">
                    <strong>23k</strong> followers
                </div>
                <div class="pr-5">
                    <strong>212</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? 'n/a' }}</div>
            <div>{{ $user->profile->description ?? 'n/a' }}</div>
            <div>
                <a href="#">{{ $user->profile->url ?? 'n/a' }}</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
