<!DOCTYPE html>
<html>
<head>
   <title>My Blog</title>
</head>
<body>
    <h1>Add New Post</h1>

    <a href="/posts">All Posts</a>

    <form action="/posts" method="POST" style="margin: 2rem 0;">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>

        <div style="margin-top: 1rem;">
            <label for="body">Body</label>
            <textarea name="body" id="body"></textarea>
        </div>

        <button type="submit" style="margin-top: 1rem;">Save</button>
    </form>
</body>
</html>
