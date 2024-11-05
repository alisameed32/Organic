<x-web-layout>

<!-- Filter Section -->
<section class="filter-section py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="section-title">Our Products</h2>
            <select class="form-select filter-select" aria-label="Filter by category">
                <option selected>Filter by Category</option>
                <option value="1">Fruits</option>
                <option value="2">Vegetables</option>
                <option value="3">Dairy</option>
            </select>
        </div>
    </section>

    <!-- Product Grid Section -->
    <section class="product-grid py-5">
        <div class="container">
            <div class="row">
                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/paleo_powder.jpg') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/green bean.jpg') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/milk.jpg') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/cocoas powder.png') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="#{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/Organic Apples.jpg') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/Almonds Milk.png') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/Fresh Spinach.png') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/Organic Carrots.png') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/Natural Honey.png') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/Organic Olive Oil.png') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>

                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/Berries.jpeg') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                

                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body position-relative">
                            <img src="{{ asset('/build/assets/images/Whole Grain Oats.png') }}" class="img-fluid product-image" alt="Product 1">
                            <a href="{{ route('productdetail') }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                        </div>
                    </div>
                    <h6>Organic Apples</h6>
                    <p>$15.99</p>
                </div>


                
                <!-- Repeat the above block for more products -->
                <!-- You can add more products by copying this structure -->
            </div>
        </div>
    </section>

</x-web-layout>