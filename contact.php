<?php include('header.php') ?>
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1>Contact us</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Start Contact
    ============================================= -->
<div class="contact-area default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 contact-form-box">
                <div class="content">
                    <div class="heading">
                        <h2 class="title">Need Help?</h2>
                        <p class="desc">Reach out to explore the most dependable sovereign solutions.</p>
                    </div>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Please describe what you need."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit" class="btn-default btn-highlighted">
                                    Get a free consultation
                                </button>
                                <div class="hero-btn">

                                </div>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 info col-md-6">
                <div class="contact-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab_1" data-bs-toggle="tab" data-bs-target="#tabs_1"
                                type="button" role="tab" aria-controls="tabs_1" aria-selected="true">Get in
                                Touch</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab_2" data-bs-toggle="tab" data-bs-target="#tabs_2"
                                type="button" role="tab" aria-controls="tabs_2" aria-selected="false">Google
                                Maps</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs_1" role="tabpanel" aria-labelledby="tab_1">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            <strong>Our Location</strong>
                                            East 10th Street, New York, <br> NY 10003, United States
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            <strong>Send Us Mail</strong>
                                            info@yourdomain.com
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            <strong>Make a call</strong>
                                            +456 456 4443
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="tabs_2" role="tabpanel" aria-labelledby="tab_2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->
<?php include('footer.php') ?>