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
    <div class="container-fluid " id="brand">
        <main class="min-vh-100 position-relative">
            <div class="position-absolute min-vw-100 top-50 start-50 translate-middle text-center">
                <img src="{{asset('images/exhibition-cp.png')}}" alt="post" class="img-fluid">
            </div>

            <div class="block-photo">
                <div class="icon position-absolute z-3">
                    <img src="{{asset('images/PHOTO.png')}}" alt="photo" class="icon-block">
                </div>
            </div>

            <div class="block-vdo">
                <div class="icon position-absolute z-3">
                    <img src="{{asset('images/VDO.png')}}" alt="vdo" class="icon-block">
                </div>
            </div>
            
            <div class="block-brochure">
                <div class="icon position-absolute z-3">
                    <img src="{{asset('images/BROCHURE.png')}}" alt="brochure" class="icon-block">
                </div>
            </div>

            <div class="block-doc">
                <div class="icon position-absolute z-3">
                    <img src="{{asset('images/DOC.png')}}" alt="doc" class="icon-block">
                </div>
            </div>

            <div class="block-info">
                <div class="icon position-absolute z-3">
                    <img src="{{asset('images/INFO.png')}}" alt="info" class="icon-block">
                </div>
            </div>

            <div class="block-poster">
                <div class="icon position-absolute z-3">
                    <img src="{{asset('images/Poster.png')}}" alt="poster" class="icon-block">
                </div>
            </div>

        </main>
    </div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
