<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Contact-->
    <title>Nilkanth</title>

    <?php require('Include/links.php')?>
   
</head>
<body class="bg-light">
    <!--Header--->
    <?php require('Include/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Ut reiciendis, accusamus ea corrupti sint unde ab sit doloremque 
            laborum saepe debitis voluptate natus ad rem voluptatibus est. 
            Cupiditate, laborum sit.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14880.137970014679!2d72.78853930781251!3d21.190788700000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e78b01fd5d9%3A0x9ba98b96bda070e!2sBAPS%20Shri%20Swaminarayan%20Mandir!5e0!3m2!1sen!2sin!4v1705149722941!5m2!1sen!2sin" loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/ZgJnmaiKroFrQ1RT9" target="_blank" class="d-line-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i>
                        BAPS Shri Swaminarayan Mandir <br>
                        Surat, Gujarat 395009
                    </a>
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +919870064474" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+91 9870064474
                    </a>
                    <br>
                    <a href="tel: +919870064474" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+91 9870064474
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: suratmandir@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> suratmandir@gmail.com
                    </a>
                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send Message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" placeholder="Full Name" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" placeholder="xyz@gmail.com or xzy@icloud.com" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" placeholder="Your subject" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea placeholder="Text your message here" class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Footer--->
    <?php require('Include/footer.php')?>

</body>
</html>