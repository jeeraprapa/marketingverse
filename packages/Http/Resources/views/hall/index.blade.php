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

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <meta property="og:url"                content="http:{{request()->url()}}" />--}}
{{--    <meta property="og:type"               content="article" />--}}
{{--    <meta property="og:title"              content="นิทรรศการประชุมวิชาการวัคซีนแห่งชาติ ครั้งที่ 10" />--}}
{{--    <meta property="og:description"        content="The 10 th National Vaccine Conference Virtual Exhibition" />--}}
{{--    <meta property="og:image"              content="{{asset('images/logo2.png')}}" />--}}

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid" id="hall">
        <main class="min-vh-100">
            <figure id="stage">
                <img src="{{asset('images/stage.png')}}" alt="stage" class="img-fluid">
            </figure>
            <section id="exhibition">

                <div class="row justify-content-center">
                    @foreach($brands->shift(3) as $item)
                        <figure class="col-12 col-md-6 col-lg-3">
                            <img src="{{asset('images/scg.png')}}" alt="scg" class="img-fluid">
                        </figure>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    @foreach($brands->shift(4) as $item)
                        <figure class="col-12 col-md-6 col-lg-3">
                            <img src="{{asset('images/scg.png')}}" alt="scg" class="img-fluid">
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
