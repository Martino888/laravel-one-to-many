@extends('layouts.admin')
@section('pageTitle', $post->title)
@section('content')
<div class="container">
    <div class="row pt-3 pb-3">
        <div class="col card mb-3" style="width: 1000px;">
            <div class="card-body">
                <h2 class="card-title">Title: {{$post->title}}</h2>
                <h4>{{$post->category->name}}</h4>
                <span class="text-uppercase">{{$post->user->name}}</span> - <span class="text-uppercase">{{$post->user->userInfo->address}}</span>
                <p class="card-text">Description: {{$post->description}}</p>
                <p class="card-text">Slug: {{$post->slug}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
