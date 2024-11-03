<x-web-layout>

<style>
        h2,
        h4 {
            color: #333;
        }

        button {
            transition: background-color 0.3s, border-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

<div class="container my-5">
        <h2 class="text-center mb-4">Checkout</h2>
        <div class="row">
            <!-- Customer Details -->
            <div class="col-md-8">
                <h4>Customer Details</h4>
                <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Shipping Address</label>
                        <textarea class="form-control" id="address" rows="3" placeholder="Enter your address"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter your city" required>
                    </div>
                    <div class="mb-3">
                        <label for="zipCode" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zipCode" placeholder="Enter your zip code" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number"
                            required>
                    </div>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="col-md-4 mt-4 mt-md-0">
                <h4>Order Summary</h4>
                <div class="card p-3">
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
                    <button class="btn btn-primary w-100 mt-3">Place Order</button>
                </div>
            </div>
        </div>
    </div>


</x-web-layout>