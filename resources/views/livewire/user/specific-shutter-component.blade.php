<div>
    <style>
.overflow-hidden.mb-4 {
    text-align: center;
}img.img-fluid.maix {
    width: 70%;
    height: 415px;
}

.section-title {
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
    position: relative;
}



.image-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 10px;
}

.image-item {
            flex: 1;
            margin: 5px;
            height: 200px; /* Default height */
        }

.image-item img {
    width: 100%;
    height: 178px;
    display: block;
}.image-grid.single-image .image-item {
            height: auto;
        }


img.auto {
    height: auto;
}
    </style>
 @section("title", $shutter->name)
 @section('desc', strip_tags($shutter->desc))




    <div class="container-fluid page-header py-5" style=" background-image: url('{{ Storage::url(basename($shutter->photos->first()->image_url)) }}'); background-size: cover; background-position: center;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $shutter->name }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="service.html">{{ $shutter->tag }}</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-12  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">

                        <h4 class="mb-3">{{ $shutter->name }}</h4>
                        <p>{!! $shutter->desc !!}</p>
                        <p>{!! $shutter->key_features !!}</p>
                        @if($photosshuttersapplication && $photosshuttersapplication->isNotEmpty())
                        <section class="garage-door-applications">
                            <div class="container">
                                <h2 class="section-title">Applications For {{ $shutter->name }} </h2>
                                <div class="image-grid">
                                    @foreach($photosshuttersapplication as $photo)
                                    <div class="image-item"><img  src="{{ Storage::url(basename($photo->image_url)) }}" alt="{{$shutter->name}}"></div>
                                    @endforeach

                                </div>
                            </div>
                        </section>
                        @endif

                        @if($photosshutterslast && $photosshutterslast->isNotEmpty())
                        <br>
                        <br>
                        <br>
                        <br>
                        <section class="garage-door-applications">
                            <div class="container">
                                <h2 class="section-title">Gallary of Our Recent Work For {{ $shutter->name }} </h2>
                                <div class="image-grid">

                                    @foreach($photosshutterslast as $photo)
                                    <div class="image-item"><img src="{{ Storage::url(basename($photo->image_url)) }}" alt="{{$shutter->name}}"></div>
                                    @endforeach

                                </div>
                            </div>
                        </section>
                        @endif

                        <br>
                        <br>
                        <br>
                        <br>
                        <h5>Features of {{ $shutter->name }}:</h5>
                        <ul>
                           <p>{!!$shutter->features!!}</p>
                        </ul>
                        <p>For more details on {{ $shutter->name }}, contact us using the information below.</p>
                        <a class="btn btn-primary mt-3" href="{{ route('contact') }}">Get a Quote</a>

                        @if($photosshuttershardware && $photosshuttershardware->isNotEmpty())
                        <section class="garage-door-applications">
                            <div class="container">
                                <h2 class="section-title">Hardware For {{ $shutter->name }}</h2>
                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="image-grid {{ $photosshuttershardware->count() == 1 ? 'single-image' : '' }}">
                                    @foreach($photosshuttershardware as $photo)
                                        <div class="image-item"><img class="auto" src="{{ Storage::url(basename($photo->image_url)) }}"alt="{{ $shutter->name }}"></div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    @endif


                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="container-xxxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Quote!</h1>
                    <p class="mb-5">
                        Discover the ultimate in security and convenience with our state-of-the-art rolling shutters in Dubai. Perfect for both residential and commercial properties, our shutters offer unparalleled protection against harsh weather conditions, intruders, and noise. Designed to blend seamlessly with your property's aesthetics, our rolling shutters are easy to operate and maintain, ensuring long-lasting durability and peace of mind. Get a free quote today and enhance your property's safety and style with our premium rolling shutters.
                    </p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone text-primary me-3 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0"><a href="tel:+971557474526" class="text-primary">+971 55 7474 526</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-12">
                    <livewire:user.items.contact-component />
                </div>
            </div>
        </div>
    </div>
    <livewire:user.service-component/>


</div>
