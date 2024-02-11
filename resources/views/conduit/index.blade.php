@extends('layouts.conduit')
@section('contents')
<div class="home-page">
  <div class="banner">
    <div class="container">
      <h1 class="logo-font">conduit</h1>
      <p>A place to share your knowledge.</p>
    </div>
  </div>
  <div class="container page">
    <div class="row">
      <div class="col-md-9">
        <div class="feed-toggle">
          <ul class="nav nav-pills outline-active">
            {{-- <li class="nav-item">
              <a class="nav-link" href="">Your Feed</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link active" href="">Global Feed</a>
            </li>
          </ul>
        </div>
        @each('components.article-preview', $articles, 'article')
          {{$articles->links('vendor.pagination.default')}}
      </div>

      <div class="col-md-3">
        <div class="sidebar">
          <p>Popular Tags</p>
          <div class="tag-list">
            @each('components.tag', $allTags, 'tag')

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
