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
        <div class="btn-back position-absolute mt-3 ml-3">
            <a href="{{route('http::hall')}}"
               class="btn btn-primary text-white radius-15 p-3 rounded-pill"
               style="background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(8,0,70,1) 43%, rgba(28,116,181,1) 100%);border-color:rgba(8,0,70,1)">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M48 256a208 208 0 1 1 416 0A208 208 0 1 1 48 256zm464 0A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM217.4 376.9c4.2 4.5 10.1 7.1 16.3 7.1c12.3 0 22.3-10 22.3-22.3V304h96c17.7 0 32-14.3 32-32V240c0-17.7-14.3-32-32-32H256V150.3c0-12.3-10-22.3-22.3-22.3c-6.2 0-12.1 2.6-16.3 7.1L117.5 242.2c-3.5 3.8-5.5 8.7-5.5 13.8s2 10.1 5.5 13.8l99.9 107.1z"/></svg>
                <span class="fw-bold">BACK TO HALL</span>
            </a>
        </div>

        <main class="position-absolute min-vw-100 top-50 start-50 translate-middle" style="border: solid 1px red">
            <div class="text-center">
                <img src="{{ $brand->getFirstMediaUrl("booth") }}" alt="{{$brand->name}}" class="img-fluid w-100">


                <div class="block-info z-3">
                    <a href="#infoModal" data-bs-toggle="modal" data-bs-target="#infoModal">
                        <img src="{{asset('images/info-icon.png')}}" alt="info" class="icon-block icon-block-info">
                    </a>
                </div>
                <div class="block-photo z-3">
                    <a href="#gallery" onclick="showGallery()">
                        <img src="{{asset('images/photo-icon.png')}}" alt="photo" class="icon-block icon-block-photo">
                    </a>
                </div>
                <div class="block-vdo z-3">
                    <a href="#video" id="video">
                        <img src="{{asset('images/video-icon.png')}}" alt="vdo" class="icon-block" data-src="{{$brand->youtube_url}}">
                    </a>
                </div>
                <div class="block-poster z-3">
                    <a href="#poster" onclick="showPoster()">
                        <img src="{{asset('images/poster-icon.png')}}" alt="ico-poster" class="icon-block">
                    </a>
                </div>
                <div class="block-brochure z-3">
                    <a href="{{$brand->getFirstMediaUrl('brochure')}}" target="_blank">
                        <img src="{{asset('images/brochure-icon.png')}}" alt="brochure" class="icon-block">
                    </a>
                </div>


                <div class="block-doc z-3">
                    <a href="{{$brand->getFirstMediaUrl('document')}}" target="_blank">
                        <img src="{{asset('images/doc-icon.png')}}"
                             alt="doc"
                             class="icon-block"
                        >
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
