<!DOCTYPE html>
<html>
<head>
   <title>My Blog</title>
</head>
<body>
   <h1>All Posts</h1>

   <a href="/posts/create">Add New Post</a>

   <table style="width: 800px; margin-top: 1rem;" border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="/posts/{{ $post->id }}">View</a>
                        <a href="/posts/{{ $post->id }}/edit">Edit</a>
                        <a href="/posts/{{ $post->id }}/destroy">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
   </table>
</body>
</html>
