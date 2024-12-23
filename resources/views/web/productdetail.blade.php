<x-web-layout>

<!-- Product Detail Section -->
<div class="container my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <div class="mb-4">
             <img src="{{ asset(path: 'storage/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
            </div>
        
        </div>
        <!-- Product Details -->
        <div class="col-md-6">
            <h2 class="product-title">{{ $product['name'] }}</h2>
            <p class="product-price">${{ $product['price'] }}</p>
            <p class="product-description">{{ $product['description'] }}</p>
            <form class="add-to-cart-form">
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
            </form>
            <ul class="list-group mt-4">
                <li class="list-group-item"><strong>Category:</strong> {{ $product['category']['name'] }}</li>
                <li class="list-group-item"><strong>Availability:</strong> {{ $product['availability'] }}</li>
                <li class="list-group-item"><strong>Shipping:</strong> {{ $product['shipping'] }}</li>
            </ul>
        </div>
    </div>
</div>


</x-web-layout>