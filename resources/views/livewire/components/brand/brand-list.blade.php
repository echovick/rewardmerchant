<section class="section-padding">
    <div class="container">
        <div class="row pt-lg-4">
            @foreach ($data['brands'] as $brand)
            <div class="col-xl-3 col-md-12 mb-4">
                <div class="bg-white p-4 shadow-sm text-center h-100 border-radius">
                    <div class="all-coupon">
                        <img class="mb-3 user-cou-img rounded" src="{{ asset('storage/' . $brand->logo) }}" alt="Generic placeholder image">
                        <a href="{{ route('admin.view-brand-details', $brand->uuid) }}"><h4 class="mt-1 h5 text-gray-900">{{ $brand->name }}</h4></a>
                        <h6 class="mb-4 mt-3 pb-2 text-secondary font-weight-normal">{{ $brand->description }}</h6>
                    </div>
                    <div class="mb-0">
                        Date Created: <p class="mb-0 text-info"><i class="icofont-clock-time"></i>{{ $brand->created_at }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
