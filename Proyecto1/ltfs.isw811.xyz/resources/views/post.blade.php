<!DOCTYPE html>
<title>Mi blog</title>
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="/vendor.css">

<body>
    <article>
       <h1>{{ $post -> title }}</h1>
       <div>
            {!! $post ->body !!}
       </div>
    </article>

    <a href="/">ir atras</a>
</body>