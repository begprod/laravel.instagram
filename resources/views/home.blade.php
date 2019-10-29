@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="rounded-circle p-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9rKSOA4QiGr08dU7wrblrkr-w70UWT9mar_pwgMQrcb0rdAhD&s" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1 class="font-weight-bold">{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5">
                    <strong>100</strong> posts
                </div>
                <div class="pr-5">
                    <strong>23k</strong> followers
                </div>
                <div class="pr-5">
                    <strong>212</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">instagram.com</div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam consequatur consequuntur dignissimos est exercitationem facere hic illum iste itaque minus molestiae nam perferendis, porro quam quidem quos veniam veritatis?</p>
            </div>
            <div>
                <a href="#">instagram.com</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://avatars.mds.yandex.net/get-pdb/936467/92e3a565-07b9-4773-9b09-83603dbab10b/s1200" alt="">
        </div>
        <div class="col-4">
            <img src="https://avatars.mds.yandex.net/get-pdb/989459/e0860035-ce26-495e-92ed-746e003267ed/s1200" alt="">
        </div>
        <div class="col-4">
            <img src="https://avatars.mds.yandex.net/get-pdb/234183/8948e03b-8346-494a-8e5e-084e548433fb/s1200" alt="">
        </div>
    </div>
</div>
@endsection
