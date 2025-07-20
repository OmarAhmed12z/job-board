<x-layout :title="$pageTitle">
  <h2>Comments Exploring (testing)</h2>
@foreach ($comments as $comment)
 <h1 class="text-2xl">{{ $comment->content }}
    <p>{{ $comment->author }}</p>
    <a href="/blog/{{ $comment->post->id  }}">{{ $comment->post->title }}</a>
 </h1>
@endforeach
</x-layout>

