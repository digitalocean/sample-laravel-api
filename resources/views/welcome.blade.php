<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Welcome to Your Laravel API</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
  <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
</head>
<body>

  <div class="lg:flex min-h-screen">
    {{-- left side image --}}
    <div class="w-full lg:w-1/2 h-56 lg:h-auto bg-black">
      <img src="https://images.unsplash.com/photo-1595234235838-2fc8984bc651?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2600&q=80" class="h-full w-full object-cover" />
    </div>

    {{-- right side content --}}
    <div class="prose w-full lg:w-1/2 flex flex-col justify-center p-12">
      <h2>Welcome to Your Laravel API</h2>

      <p>This is a sample <a href="https://laravel.com/">Laravel</a> API to deploy to <a href="https://digitalocean.com">DigitalOcean</a>. It is a REST API to CRUD (<span class="text-green-400">C</span>reate, <span class="text-green-400">R</span>ead, <span class="text-green-400">U</span>pdate, <span class="text-green-400">D</span>elete) blog posts.</p>

      <h3>Getting Started</h3>

      <ol>
        <li>Create your own .env file (copy .env.example)</li>
        <li>Generate your key: <code>php artisan key:generate</code></li>
        <li>Fill out your own database credentials</li>
        <li>Run migrations: <code>php artisan migrate</code></li>
        <li>Seed the database: <code>php artisan db:seed</code></li>
        <li>Test the API w/ <a href="https://www.postman.com/">POSTman</a> or <a href="https://insomnia.rest/">Insomnia</a></li>
      </ol>

      <h3>Functionality and Routes</h3>

      <ul>
        <li>View all blog posts: <a href="{{ route('posts.index') }}"><span class="text-red-400">GET</span> /api/posts</a></li>
        <li>Create a blog post: <span class="text-red-400">POST</span> /api/posts</li>
        <li>Show a single blog post: <a href="{{ route('posts.show', ['post' => 1]) }}"><span class="text-red-400">GET</span> /api/posts/1</a></li>
        <li>Update a blog post: <span class="text-red-400">PUT/PATCH</span> /api/posts/1</li>
        <li>Delete a blog post: <span class="text-red-400">DELETE</span> /api/posts/1</li>
      </ul>

      <h3>Important Files to Read Through</h3>

      <ul>
        <li>Routes: <code>routes/api.php</code></li>
        <li>Migrations: <code>database/migrations/</code></li>
        <li>Models: <code>app/Post.php</code></li>
        <li>Controllers: <code>app/Http/Controllers/PostController.php</code></li>
      </ul>
    </div>
  </div>
</body>
</html>
