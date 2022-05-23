<div class="comments">
    <ul class="list-group">
        @foreach ($post->comments as $comment)
            <article>
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }} : &nbsp;
                    </strong>
                    {{ $comment->body }}
                </li>
            </article>
        @endforeach
    </ul>
</div>
<hr>
<div class="card">
    <div class="card-block">
        <form action="/posts/{{ $post->id }}/comments" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="body" id="body" placeholder="Your comment here." class="form-control" required></textarea>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
        @include('layouts.errors')
    </div>
</div>
