<div class="col-md-4 col-sm-12">
    <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20">
        @if($subscribe->is_popular)
            <span class="badge badge-primary badge-popular px-15 py-5">{{ trans('panel.popular') }}</span>
        @endif

        <div class="plan-icon">
            <img src="{{ $subscribe->icon }}" class="img-cover" alt="">
        </div>

        <h3 class="mt-20 font-30 text-dark-blue">{{ $subscribe->title }}</h3>
        <p class="font-weight-500 text-gray mt-10">{{ $subscribe->description }}</p>

        <div class="d-flex align-items-start text-primary mt-30">
            <span class="font-36 line-height-1">{{ addCurrencyToPrice($subscribe->price) }}</span>
        </div>

        <ul class="mt-20 plan-feature">
            <li class="mt-10">{{ $subscribe->days }} {{ trans('financial.days_of_subscription') }}</li>
            <li class="mt-10">
                @if($subscribe->infinite_use)
                    {{ trans('update.unlimited') }}
                @else
                    {{ $subscribe->usable_count }}
                @endif
                <span class="ml-5">{{ trans('update.subscribes') }}</span>
            </li>
        </ul>

        @if(auth()->check())
            <form action="/panel/financial/pay-subscribes" method="post" class="w-100">
                {{ csrf_field() }}
                <input name="amount" value="{{ $subscribe->price }}" type="hidden">
                <input name="id" value="{{ $subscribe->id }}" type="hidden">
                <button type="submit" class="btn btn-dark-blue btn-block mt-50">{{ trans('financial.purchase') }}</button>
            </form>
        @else
            <a href="/login" class="btn btn-dark-blue btn-block mt-50">{{ trans('financial.purchase') }}</a>
        @endif
    </div>
</div>
