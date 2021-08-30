@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/profile.svg" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>50</strong> posts </div>
                <div class="pr-4"><strong>10k</strong> followers</div>
                <div class="pr-4"><strong>150</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/bride.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/concert.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/sunset.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
