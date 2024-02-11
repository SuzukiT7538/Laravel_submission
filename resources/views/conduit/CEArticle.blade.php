@extends('layouts.conduit')
@section('contents')
<div class="editor-page">
  <div class="container page">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-xs-12">
        @if (count($errors) > 0)
        <ul class="error-messages">
          <li>That title is required</li>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
        @isset($article)
        <form method="POST" action="/editor/{{$article->slug}}-{{$article->id}}">
        @else
        <form method="POST" action="/editor">
        @endisset
          @csrf
          <fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control form-control-lg" placeholder="Article Title" name="title"
              @isset($article->title)
              value="{{$article->title}}"/>
              @else
              value="{{old('title')}}"/>
              @endisset
            </fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control" placeholder="What's this article about?" name="description"
              @isset($article->description)
              value="{{$article->description}}" />
              @else
              value="{{old('description')}}" />
              @endisset
            </fieldset>
            <fieldset class="form-group">

              @isset($article->body)
              <textarea
                class="form-control"
                rows="8"
                placeholder="Write your article (in markdown)" name="body">{{$article->body}}</textarea>
              @else
              <textarea
                class="form-control"
                rows="8"
                placeholder="Write your article (in markdown)" name="body">{{old('body')}}</textarea>
              @endisset

            </fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control" placeholder="Enter tags" name="tags"
              @isset($tags)
              value="{{$tags}}"/>
              @else
              value="{{old('tags')}}"/>
              @endisset
              <div class="tag-list">
                @each('components.addTag', $allTag, 'tag')
              </div>
            </fieldset>
            <button class="btn btn-lg pull-xs-right btn-primary" type="submit">
              Publish Article
            </button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
