<div>
    <style>
        .service-item {
            height: 100%; /* Make the service item take up the full height of the column */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Ensures even spacing between elements */
        }

        .fixed-size {
            width: 100%;
            height: 200px; /* or any desired height */
            object-fit: cover; /* Ensure the image covers the area without stretching */
        }

        .de{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 503px; /* Set a fixed height for the column, adjust as needed */
        }
        .py-5 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .clickable {
            text-decoration: none;
            color: inherit;
        }
    </style>
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="text-secondary text-uppercase">Our Rolling Shutters</h2>
            </div>
            <div class="row g-4">
                @foreach ($shutters as $shutter)
                <div class="col-md-6 col-lg-4 wow fadeInUp de" data-wow-delay="0.3s">
                    <a class="clickable" href="{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}">
                        <div class="service-item p-4">
                            @foreach($shutter->photos as $photo)
                            <img class="img-fluid fixed-size" src="{{ Storage::url(basename($photo->image_url)) }}"  alt="{{$shutter->name}}">
                            @endforeach
                            <h4 class="mb-3">{{$shutter->name_out}}</h4>
                            <p>{{ $this->stripTagsAndTruncate($shutter->desc_out) }}</p>
                            <a class="btn-slide mt-2" href="{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
