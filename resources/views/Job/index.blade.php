<div>

    @foreach ($jobs as $job)
     <div>{{ $job['title'] }}: {{ $job['salary'] }}</div>
    @endforeach
</div>
