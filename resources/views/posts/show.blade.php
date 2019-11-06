@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center pb-3">
                    <div class="col-3 pr-3">
                        <a href="/profile/{{ $post->user->id }}">
                            <img class="rounded-circle" src="/storage/{{ $post->user->profile->image }}" alt="{{ $post->user->profile->description }}">
                        </a>
                    </div>
                    <div class="col-9">
                        <h5 class="font-weight-bold">
                            <a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                        </h5>
                    </div>
                </div>

                <hr>

                <div>
                    <p>
                        <span class="font-weight-bold">
                            <a class="text-dark" href="/profile/{{ $post->user->id }}">
                                {{ $post->user->username }}
                            </a>
                        </span>
                        {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
