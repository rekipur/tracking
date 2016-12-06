
   @foreach ($posts as $post)
  <article class="post" data-postid="{{ $posts->id }}">
   <h2>{{ $post->body }}</h2>
  </article>
  @endforeach