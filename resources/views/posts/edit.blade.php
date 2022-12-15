<!DOCTYPE html>
<html>
<head>
   <title>My Blog</title>
</head>
<body>
    <h1>Edit Post</h1>

    <a href="/posts">All Posts</a>

    <form action="/posts/{{ $post->id }}" method="POST" style="margin: 2rem 0;">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>

        <div style="margin-top: 1rem;">
            <label for="body">Body</label>
            <textarea name="body" id="body">{{ $post->body }}</textarea>
        </div>

        <button type="submit" style="margin-top: 1rem;">Save</button>
    </form>
</body>
</html>
