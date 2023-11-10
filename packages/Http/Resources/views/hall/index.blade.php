<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @if(isset($title))
            {{$title}}
        @else
            {{ config('app.name', 'Marketingverse') }}
        @endif
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url"                content="http:{{request()->url()}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Thailand marketing day 2023" />
    <meta property="og:description"        content="The new marketingverse" />
    <meta property="og:image"              content="{{asset('images/main-poster.png')}}" />

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid" id="hall">
        <main class="min-vh-100">
            <a href="https://poplive.co/e/ThailandMarketingday2023" target="_blank">
                <figure id="stage">
                    <img src="{{asset('images/stage.png')}}" alt="stage" class="img-fluid">
                </figure>
            </a>

            <section id="exhibition">

                <div class="row justify-content-center">
                    @foreach($brands as $item)
                            <figure class="col-12 col-md-6 col-lg-4 col-xxl-3">
                                <a href="{{route('http::hall.brand',$item->slug )}}">
                                    @if($item->getFirstMediaUrl('thumbnail'))
                                        <img src="{{$item->getFirstMediaUrl('thumbnail')}}" alt="{{$item->name}}" class="img-fluid">
                                    @else
                                        <img src="{{asset('images/booth.png')}}" alt="booth" class="img-fluid">
                                    @endif
                                </a>
                            </figure>
                    @endforeach
                </div>

            </section>
        </main>
    </div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
