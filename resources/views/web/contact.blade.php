<x-web-layout>

<!-- Contact Section -->
<section class="contact-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Contact Us</h2>
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <h4>Get in Touch</h4>
                    <p>We’d love to hear from you! Feel free to reach out with any questions, comments, or feedback.</p>
                    <p><strong>Address:</strong> 123 Main St, Anytown, USA</p>
                    <p><strong>Email:</strong> info@organic.com</p>
                    <p><strong>Phone:</strong> +123 456 7890</p>
                </div>
                <!-- Contact Form -->
                <div class="col-md-7">
                    <form action="#" method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-web-layout>