<x-web-layout>

<!-- Product Detail Section -->
<div class="container my-5">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-6">
                <img src="https://nutrition.org/wp-content/uploads/2021/12/organic-food.jpg" alt="Product Image" class="img-fluid product-image">
            </div>
            <!-- Product Details -->
            <div class="col-md-6">
                <h2 class="product-title">Organic Apple</h2>
                <p class="product-price">$10.00</p>
                <p class="product-description">This organic apple is grown using sustainable farming methods. Rich in vitamins and perfect for a healthy snack.</p>
                <form class="add-to-cart-form">
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                </form>
                <ul class="list-group mt-4">
                    <li class="list-group-item"><strong>Category:</strong> Organic Fruits</li>
                    <li class="list-group-item"><strong>Availability:</strong> In Stock</li>
                    <li class="list-group-item"><strong>Shipping:</strong> Free Worldwide</li>
                </ul>
            </div>
        </div>
    </div>

</x-web-layout>