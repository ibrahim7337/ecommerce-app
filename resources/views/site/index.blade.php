{{-- @extends('site.layout.layout') --}}
{{-- @section('content') --}}
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($products as $product)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <a href="{{route('product.show' , $product->id)}}">
                    <img
                        class="card-img-top"
                        src="{{asset($product->image)}}"
                        alt="..."
                    />
                    </a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <!-- Product price-->
                            $40.00 - $80.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div
                        class="card-footer p-4 pt-0 border-top-0 bg-transparent"
                    >
                        <div class="text-center">
                            <a
                                class="btn btn-outline-dark mt-auto"
                                href="#"
                                >View options</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
{{-- @endsection --}}

