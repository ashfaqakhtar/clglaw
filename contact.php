<?php
$title = "Clglaw | Contact";
$meta = "";
$metakeyword = "";
include "header.php";
?>

<section class="section position-relative mb-5" style="background-image: url(image/image-1920x900-2.jpg);">
    <div class="r-container">
        <div class="image-overlay"></div>
        <div class="d-flex flex-column position-relative py-5" style="z-index: 2;">
            <h2 class="text-white">CONTACT US</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fw-bold">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">HOME</a></li>
                    <li class="breadcrumb-item active" aria-current="faq.php">CONTACT US</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- 
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="contact-details">
                <h3>CREDITOR LAW GROUP INFO</h3>
                <br>
                <h4>CALL: <span><a class=" active" href="tel:(800) 216-7211">(800) 216-7211</a></span></h4>
                <h4>EMAIL: <span><a href="mailto:info@clglawpc.com">info@clglawpc.com</a></span></h4>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div> -->


<section class="section">
    <div class="r-container">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col mb-3">
                <div class="d-flex flex-column gap-3">
                    <!-- <h5 class="accent-color font-1 fw-semibold">CONTACT US</h5> -->
                    <h3 class="font-2 fw-semibold outline-text">HAVE A QUESTION ?</h3>
                    <div class="d-flex flex-lg-row flex-column gap-4">
                        <div class="d-flex flex-row gap-3 align-items-center">
                            <i class="fa-solid fa-phone accent-color fs-4"></i>
                            <span class="text-gray fs-5">(800) 216-7211</span>
                        </div>
                        <div class="d-flex flex-row gap-3 align-items-center">
                            <i class="fa-solid fa-envelope accent-color fs-4"></i>
                            <span class="text-gray fs-5">info@clglawpc.com</span>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3544.2693507525146!2d-82.53392452454577!3d27.336046476397527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c3406fbac9dc2d%3A0x19024a29ccf75386!2s1990%20Main%20St%20Office%20750%2C%20Sarasota%2C%20FL%2034236%2C%20USA!5e0!3m2!1sen!2sin!4v1717790448860!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col mb-3">
                <div class=" h-100 d-flex flex-column p-lg-5">
                    <div class="success_msg toast align-items-center w-100 shadow-none mb-3 bg-transparent border border-success rounded-0 my-4"
                        role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex p-2">
                            <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                <i class="fa-solid fa-check f-36 text-success"></i>
                                Your Message Successfully Send.
                            </div>
                            <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                                data-bs-dismiss="toast" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                    <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 bg-transparent my-4 border rounded-0"
                        role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex p-2">
                            <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                Something Wrong ! Send Form Failed.
                            </div>
                            <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                                data-bs-dismiss="toast" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                    <form action="" method="post" class="d-flex flex-column h-100 justify-content-center w-100 needs-validation mb-3 form px-lg-5"
                        novalidate="">
                        <h5 class="accent-color font-1 fw-semibold">CONTACT US</h5>
                        <div class="mb-3">
                            <input type="text" class="form-control py-2 px-4" name="name" id="name" placeholder="Name"
                                required="">
                            <div class="invalid-feedback">
                                The field is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control py-2 px-4" name="email" id="email"
                                placeholder="Email" required="">
                            <div class="invalid-feedback">
                                The field is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control py-2 px-4" name="subject" id="subject"
                                placeholder="Subject" required="">
                            <div class="invalid-feedback">
                                The field is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control py-2 px-4" id="message" name="message" rows="5"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn rounded-0 submit_form font-1 py-3">
                                SUBMIT
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>







<!-- 
<?php
include "legal-case-section.php";
?> -->


<?php
include "footer.php";
?>