<div class="card">
          <div class="card-block">
            <p class="card-text">
              {{$comment->body}}
            </p>
          </div>
          <div class="card-footer">
            <a href="/profile/author" class="comment-author">
              <img src="http://i.imgur.com/Qr71crq.jpg" class="comment-author-img" />
            </a>
            &nbsp;
            <a href="/profile/jacob-schmidt" class="comment-author">{{$comment->author}}</a>
            <span class="date-posted">{{$comment->created_at}}</span>
          </div>
        </div>
