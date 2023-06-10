<div class="col-md-4 col-sm-12 mb-3" >
    <div class="card bg-light">
        <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
                <img src="{{ $testimonial->user_avatar }}" alt="{{ $testimonial->user_name }}"
                     class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">{{ $testimonial->user_name }}</h5>
            <h6 class="font-weight-bold my-3">{{ $testimonial->user_bio }}</h6>
            <x-review-rate></x-review-rate>
            <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>
                {!! nl2br($testimonial->comment) !!}
            </p>
        </div>
    </div>
</div>
