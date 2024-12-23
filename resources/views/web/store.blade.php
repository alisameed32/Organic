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
                
            @foreach($products as $product)
    <!-- Product Item -->
    <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4 position-relative">
        <div class="card border-0 bg-light mb-2">
            <div class="card-body position-relative">
                
                <img src="{{ asset(path: 'storage/' . $product->image) }}" class="img-fluid product-image" alt="{{ $product->name }}">
                <a href="{{ route('productDetail', $product) }}" class="add-to-cart"><i class="plus-icon">+</i></a>
                
            </div>
        </div>
        <h6>{{ $product['name'] }}</h6>
        <p>${{ $product['price'] }}</p>
    </div>
@endforeach


            


                
                <!-- Repeat the above block for more products -->
                <!-- You can add more products by copying this structure -->
            </div>
        </div>
    </section>

</x-web-layout>