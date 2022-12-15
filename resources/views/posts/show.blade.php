<!DOCTYPE html>
<html>
<head>
   <title>View blog post details</title>
</head>
<body>
    <a href="/posts">All Posts</a>
    <h1 style="margin-top: 1rem;">{{ $post->title }}</h1>
    <div>{{ $post->body }}</div>
</body>
</html>
