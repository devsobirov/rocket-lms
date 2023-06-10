<div class="col-md-3 col-sm-12 py-2">
    <div class="course-item shadow-sm rounded-2 overflow-hidden">
        <div class="course-img" style="background-image: url('{{ $course->getImage() }}')"></div>
        <div class="course-details text-center py-3">
            <h4 class="mt-1"><a href="{{$course->getUrl()}}" class="text-decoration-none">{{$course->title}}</a></h4>
            <p>{{substr(strip_tags($course->description), 0, 80)}} ...</p>
            <div class="fw-bold mb-3">
                @if(!empty($course->price ) and $course->price > 0)
                    {{ handlePrice($course->price) }}
                @else
                    {{ trans('public.free') }}
                @endif
            </div>
            <a href="{{$course->getUrl()}}" class="btn btn-pink mb-1">Забронировать</a>
        </div>
    </div>
</div>
