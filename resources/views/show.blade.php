<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="{{ route('posts.show', $post) }}" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->content }}" />
    <meta property="og:image" content="https://ahrefs.com/blog/wp-content/uploads/2019/12/fb-how-to-become-an-seo-expert.png" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h2>Blog Demo</h2>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">{{ $post->title }}</h3>
                        <div class="mb-1 text-muted">{{ $post->created_at->format('M y') }}</div>
                        <p class="mb-auto">{{ $post->content }}</p>
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end">
                                    <div class="mx-2">Share</div>
                                    <div class="mx-2 text-primary"><a href="{{ $post->social_share['facebook'] }}"><i class="bi bi-facebook"></i></a></div>
                                    <div class="mx-2 text-primary"><a href="{{ $post->social_share['linkedin'] }}"><i class="bi bi-linkedin"></i></a></div>
                                    <div class="mx-2 text-primary"><a href="{{ $post->social_share['twitter'] }}"><i class="bi bi-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('posts.index') }}">Back</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>