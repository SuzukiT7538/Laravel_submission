@extends('layouts.conduit')
@section('contents')
<div class="article-page">
  <div class="banner">
    <div class="container">
      <h1>{{$article->slug}}</h1>


      <div class="article-meta">
        <a href="/profile/eric-simons"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
        <div class="info">
          <a href="/profile/eric-simons" class="author">{{$article->author}}</a>
          <span class="date">{{$article->created_at}}</span>
        </div>
        <button class="btn btn-sm btn-outline-secondary">
          <i class="ion-plus-round"></i>
          &nbsp; Follow Eric Simons <span class="counter">(10)</span>
        </button>
        &nbsp;&nbsp;
        <button class="btn btn-sm btn-outline-primary">
          <i class="ion-heart"></i>
          &nbsp; Favorite Post <span class="counter">(29)</span>
        </button>
        <button class="btn btn-sm btn-outline-secondary" onclick="location.href='/editor/{{$article->slug}}-{{$article->id}}'">
          <i class="ion-edit"></i> Edit Article
        </button>
        <button class="btn btn-sm btn-outline-danger" onclick="location.href='/article/{{$article->slug}}-{{$article->id}}/delete'">
          <i class="ion-trash-a"></i> Delete Article
        </button>
      </div>
    </div>
  </div>

  <div class="container page">
    <div class="row article-content">
      <div class="col-md-12">
        {{$article->body}}
        <ul class="tag-list">
          @each('components.taglist', $tags, 'tags')
        </ul>
      </div>
    </div>

    <hr />
{{-- TODO:ログイン状態で変化 --}}
    <div class="article-actions">
      <div class="article-meta">
        <a href="profile.html"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
        <div class="info">
          <a href="" class="author">Eric Simons</a>
          <span class="date">January 20th</span>
        </div>

        <button class="btn btn-sm btn-outline-secondary">
          <i class="ion-plus-round"></i>
          &nbsp; Follow Eric Simons
        </button>
        &nbsp;
        <button class="btn btn-sm btn-outline-primary">
          <i class="ion-heart"></i>
          &nbsp; Favorite Article <span class="counter">(29)</span>
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-8 offset-md-2">
        <form class="card comment-form" method="POST" action="/article/{{$article->slug}}-{{$article->id}}/addComment">
          @csrf
          <div class="card-block">
            <textarea class="form-control" placeholder="Write a comment..." rows="3" name="body"></textarea>
          </div>
          <div class="card-footer">
            <img src="http://i.imgur.com/Qr71crq.jpg" class="comment-author-img" />
            <button class="btn btn-sm btn-primary" type="submit">Post Comment</button>
          </div>
        </form>
        @each('components.card', $article->comment, 'comment')
      </div>
    </div>
  </div>
</div>
@endsection
