<?php
include("header.php");
?>
<div class="container-fluid pb-4">
        <div class="container">
            <h1 class="text-center text-info pt-5 pb-2">CONTACT</h1>
            <div class="row">

                <div class="card lg-3 bg-light" style="max-width: 540px;">
                    <div class="row g-0 pb-4">
                        <div class="col-md-1">
                            <i class="fa fa-pen text-info fs-2 pt-5 ps-3"></i>
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="card-title pt-4">Address</h5>
                                <p class="card-text">A108 Adam Street, New York, NY 535022</p>
                                <p class="card-text"><small class="text-body-secondary"></small></p>
                            </div>
                        </div>
                        <!-- 111111 -->
                        <div class="col-md-1">
                            <i class="fa-solid fa-phone text-info fs-2 ps-3 pt-4 "></i>
                        </div>

                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="card-title ">Call Us</h5>
                                <p class="card-text">+1 5589 55488 55</p>
                                <p class="card-text"><small class="text-body-secondary"></small></p>
                            </div>
                        </div>
                        <!-- 2222 -->
                        <div class="col-md-1">
                            <i class="fa-solid fa-envelope text-info fs-2 ps-3 pt-4 "></i>
                        </div>
                        <div class="col-lg-11">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    Email Us</h5>
                                <p class="card-text">info@example.com</p>
                                <p class="card-text"><small class="text-body-secondary"></small></p>
                            </div>
                        </div>
                        <!-- 3333333 -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60650.76050347753!2d74.54919193958972!3d18.17899310799566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3a03bdb59287f%3A0x36e4fb47fb8d8a9d!2sBaramati%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1722660620949!5m2!1sen!2sin"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-6 bg-light ms-4" style="border-radius: 10px;">
                        <form>
                            <div class="row g-3">
                                <div class="col">
                                    <label class="pt-4 pb-2">Your Name</label>
                                <input type="text" class="form-control" placehoder="First name" aria-label="First name">
                            </div>
                            <div class="col">
                                <label class="pt-4 pb-2">Your Email</label>
                                <input type="email" class="form-control" placehoder="Last name" aria-label="Last name">
                            </div>

                        </div>
                        <label class="pt-5 pb-2">Subject</label>
                        <div class="col-sm-20">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                        <label class="pt-5 pb-2">Message</label><br>
                        <textarea style="width: 100%; height: 300px;"></textarea>
                        <p class="text-center"> <button type="button"
                                class="btn btn-info btn-lg rounded-pill text-light mt-2">Send Massage</button></p>
                    </form>
                </div>

            </div>


        </div>
    </div>
    <?php
    include("footer.php");
    
    ?>
