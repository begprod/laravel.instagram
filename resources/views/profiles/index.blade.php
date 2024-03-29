@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="rounded-circle p-5" src="{{ $user->profile->profileImage() }}" alt="{{ $user->username }}">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <div class="font-weight-bold h1">{{ $user->username }}</div>
                    @if( Auth::user()->id !== $user->id )
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endif
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5">
                    <strong>{{ $postsCount }}</strong> posts
                </div>
                <div class="pr-5">
                    <strong>{{ $followersCount }}</strong> followers
                </div>
                <div class="pr-5">
                    <strong>{{ $followingCount }}</strong> following
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
