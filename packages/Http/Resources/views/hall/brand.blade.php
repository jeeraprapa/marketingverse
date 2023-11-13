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

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url"                content="http:{{request()->url()}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Thailand marketing day 2023" />
    <meta property="og:description"        content="The new marketingverse" />
    <meta property="og:image"              content="{{asset('images/main-poster.png')}}" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Athiti:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('vendors/lightgallery/dist/css/lightgallery.css')}}" rel="stylesheet">
    <style>
        .modal-body{
            font-family: 'Athiti';
        }
    </style>
</head>
<body>
    <div class="container-fluid " id="brand">
        <main class="min-vh-100 position-relative">
            <div class="btn-back position-absolute mt-3 ml-3">
                <a href="{{route('http::hall')}}" class="btn btn-primary text-white radius-15 p-3 border-0" style="background: #273479">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="#fff">
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                    </svg>
                    Back To Hall
                </a>
            </div>
            <div class="position-absolute min-vw-100 top-50 start-50 translate-middle text-center">
                <img src="{{ $brand->getFirstMediaUrl("booth") }}" alt="{{$brand->name}}" class="img-fluid">
            </div>

            <div class="block-photo">
                <div class="icon position-absolute z-3">
                    <a href="#gallery" onclick="showGallery()">
                        <img src="{{asset('images/PHOTO.png')}}" alt="photo" class="icon-block">
                    </a>
                </div>
            </div>

            <div class="block-vdo">
                <div class="icon position-absolute z-3">

                    <a href="#video" id="video">
                        <img src="{{asset('images/VDO.png')}}" alt="vdo" class="icon-block" data-src="{{$brand->youtube_url}}">
                    </a>

                </div>
            </div>

            <div class="block-brochure">
                <div class="icon position-absolute z-3">
                    <a href="{{$brand->getFirstMediaUrl('brochure')}}" target="_blank">
                        <img src="{{asset('images/BROCHURE.png')}}" alt="brochure" class="icon-block">
                    </a>
                </div>
            </div>

            <div class="block-doc">
                <div class="icon position-absolute z-3">
                    <a href="{{$brand->getFirstMediaUrl('document')}}" target="_blank">
                        <img src="{{asset('images/DOC.png')}}"
                             alt="doc"
                             class="icon-block"
                        >
                    </a>
                </div>
            </div>

            <div class="block-info">
                <div class="icon position-absolute z-3">
                    <a href="#infoModal" data-bs-toggle="modal" data-bs-target="#infoModal">
                        <img src="{{asset('images/INFO.png')}}" alt="info" class="icon-block">
                    </a>
                </div>
            </div>

            <div class="block-poster">
                <div class="icon position-absolute z-3">
                    <a href="#poster" onclick="showPoster()">
                    <img src="{{asset('images/icon-poster.png')}}" alt="ico-poster" class="icon-block">
                    </a>
                </div>
            </div>

        </main>
    </div>
    <div class="d-none">
        <div id="gallery">
            @foreach($brand->getMedia('photos') as $media)
                <a href="{{$media->getUrl()}}">
                    <img src="{{$media->getUrl()}}" data-src="{{$media->getUrl()}}" alt="{{$media->name}}" />
                </a>
            @endforeach
        </div>
        <div id="poster">
            @foreach($brand->getMedia('posters') as $media)
                <a href="{{$media->getUrl()}}">
                    <img src="{{$media->getUrl()}}" data-src="{{$media->getUrl()}}" alt="{{$media->name}}" />
                </a>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModal" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Information</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! $brand->description !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendors/splide.min.js')}}"></script>
    <script src="{{ asset('js/vendors/splide-extension-url-hash.min.js')}}"></script>
    <script src="{{asset('vendors/lightgallery/js/lightgallery.js')}}"></script>
    <script src="{{asset('vendors/lightgallery/js/lg-fullscreen.js')}}"></script>
    <script src="{{asset('vendors/lightgallery/js/lg-zoom.js')}}"></script>
    <script src="{{asset('vendors/lightgallery/js/lg-rotate.js')}}"></script>
    <script src="{{asset('vendors/lightgallery/js/lg-video.js')}}"></script>
    <script>
    $(document).ready(function (){
        lightGallery(document.getElementById('gallery'))
        lightGallery(document.getElementById('poster'))
        lightGallery(document.getElementById('photo'));
        lightGallery(document.getElementById('video'));
    });
    function showGallery(){
        $("#gallery a:first-child > img").trigger("click");
    }
    function showPoster(){
        $("#poster a:first-child > img").trigger("click");
    }
</script>
</body>
</html>
