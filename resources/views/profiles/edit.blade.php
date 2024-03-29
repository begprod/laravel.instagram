@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit profile</div>

                    <div class="card-body">
                        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">
                                    Title
                                </label>

                                <div class="col-md-6">
                                    <input
                                        id="title"
                                        type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        name="title"
                                        value="{{ old('title') ?? $user->profile->title }}"
                                        autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">
                                    Description
                                </label>

                                <div class="col-md-6">
                                    <input
                                        id="description"
                                        type="text"
                                        class="form-control @error('description') is-invalid @enderror"
                                        name="description"
                                        value="{{ old('description') ?? $user->profile->description }}"
                                        autofocus>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right">
                                    Url
                                </label>

                                <div class="col-md-6">
                                    <input
                                        id="url"
                                        type="text"
                                        class="form-control @error('url') is-invalid @enderror"
                                        name="url"
                                        value="{{ old('url') ?? $user->profile->url}}"
                                        autofocus>

                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">
                                    Profile image
                                </label>

                                <div class="col-md-6">
                                    <input
                                        id="image"
                                        type="file"
                                        class="form-control-file @error('image') is-invalid @enderror"
                                        name="image">

                                    @error('image')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
