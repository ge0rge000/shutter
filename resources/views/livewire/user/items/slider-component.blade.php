<div>
    <style>
        .owl-carousel-item {
    position: relative;
    overflow: hidden;
    width: 100%;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.owl-carousel-item img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the container while maintaining aspect ratio */
}
.owl-stage-outer {
    height: 700PX;
}
.position-absolute {
    display: flex;
    align-items: center;
    justify-content: center;
}

@media (max-width: 768px) {
    .display-3 {
        font-size: 2.5rem;
    }

    .fs-5 {
        font-size: 1rem;
    }

    .btn {
        padding: 0.5rem 1rem;
    }
}
    </style>
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            @foreach($shutters as $shutter)
                @foreach($shutter->photos as $photo)
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ Storage::url($photo->image_url) }}" alt="{{ $shutter->name }}">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-10 col-lg-8">

                                        <h1 class="display-3 text-white animated slideInDown mb-4">{{ $shutter->name }}</h1>
                                        <a href="{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}"
                                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ $shutter->name }}</a>
                                        <a href="{{route('contact')}}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
