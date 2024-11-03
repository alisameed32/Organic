<x-web-layout>

<div class="container my-5">
        <h2 class="text-center mb-4">Your Shopping Cart</h2>
        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div
                    class="cart-item d-flex flex-column flex-md-row justify-content-between align-items-center py-3 border-bottom">
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                        <img src="{{ asset('/build/assets/images/Organic Apples.jpg') }}" class="cart-product-img" alt="Product Image">
                        <div class="ms-3">
                            <h6>Apples</h6>
                            <p class="text-muted">$25.00</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <input type="number" min="1" value="1" class="form-control form-control-sm w-50 mb-2">
                        <p class="text-muted">$25.00</p>
                        <button class="btn btn-outline-danger btn-sm remove-btn">Remove</button>
                    </div>
                </div>

                <!-- Additional dummy product for demonstration -->
                <div
                    class="cart-item d-flex flex-column flex-md-row justify-content-between align-items-center py-3 border-bottom">
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                        <img src="{{ asset('/build/assets/images/cocoas powder.png') }}" class="cart-product-img" alt="Product Image">
                        <div class="ms-3">
                            <h6>Cocoas Powder</h6>
                            <p class="text-muted">$35.00</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <input type="number" min="1" value="1" class="form-control form-control-sm w-50 mb-2">
                        <p class="text-muted">$35.00</p>
                        <button class="btn btn-outline-danger btn-sm remove-btn">Remove</button>
                    </div>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card p-3">
                    <h5 class="text-center">Cart Summary</h5>
                    <div class="d-flex justify-content-between">
                        <p>Subtotal</p>
                        <p>$60.00</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Tax</p>
                        <p>$5.00</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h6>Total</h6>
                        <h6>$65.00</h6>
                    </div>
                    <div class="payment-method mt-4">
                        <h6>Payment Method</h6>
                        <select class="form-select">
                            <option selected>Choose...</option>
                            <option value="1">Credit Card</option>
                            <option value="2">PayPal</option>
                            <option value="3">Cash on Delivery</option>
                        </select>
                    </div>
                    <a href="checkout"><button class="btn btn-primary w-100 mt-3">Proceed to Checkout</button></a>
                </div>
            </div>
        </div>
    </div>

</x-web-layout>