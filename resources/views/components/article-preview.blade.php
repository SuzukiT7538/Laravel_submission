<div class="article-preview">
          <div class="article-meta">
            <a href="/profile/eric-simons"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
            <div class="info">
              <a href="/profile/eric-simons" class="author">{{$article->author}}</a>
              <span class="date">{{$article->created_at}}</span>
            </div>
            <button class="btn btn-outline-primary btn-sm pull-xs-right">
              <i class="ion-heart"></i> {{$article->fav}}
            </button>
          </div>
          <a href="/article/{{$article->slug}}-{{$article->id}}" class="preview-link">
            <h1>{{$article->slug}}</h1>
            <p>{{$article->description}}</p>
            <span>Read more...</span>
            <ul class="tag-list">
              @php
              $array = $article->toArray();
              // var_export($tags['tag_article'][]);
              $tags = $array['tag_article'];
              @endphp
              @foreach ($tags as $key => $tag)
              <li class="tag-default tag-pill tag-outline">{{$tags[$key]['name']}}</li>
              @endforeach
            </ul>
          </a>
        </div>
