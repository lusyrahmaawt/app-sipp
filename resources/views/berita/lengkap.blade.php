<!-- resources/views/news/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<body>
    <h1>Latest News</h1>
    @foreach($artikel as $item)
        <div>
            <h2><a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a></h2>
            <p>{{ Str::limit($item->content, 100) }}</p>
        </div>
    @endforeach
</body>
</html>
