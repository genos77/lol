<?php
include("header.php");


if(isset($_POST["btn_submit"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $no=$_POST["number"];
    $messg=$_POST["message"];


    $sql="insert into contact values(0,'$name','$email','$no','$messg',now())";

    $con=new connec();
    $con->insert($sql,"We Will Contact You Soon On Your Email Address");
}
?>



<section style="min-height:450px;">
    <div class="container" style="color:maroon;">

        <div class="col-md-12">   
            <center>
                <h1>Contact Us</h1>
                <h5>GET IN TOUCH</h5>
                <p>
                    We’d love to talk about how we can work together. 
                    Send us a message below and we’ll respond as soon as possible.
                </p>
            </center>
        </div>

        <div class="row" style="color:white">
            <div class="col-md-6 mt-5 mb-5 pl-5" style="border-radius:30px;background-color:maroon">
                <h2 class="mt-5" >Contact Information</h2>
                <p class="mt-1" >
                    Our team will get back to you with in 24hours. 
                </p>

                <p class="mt-5"><i class="fa fa-phone  mt-3"></i>&nbsp; +92 300 - 1234567</p>
                <p class="mt-3"><i class="fa fa-envelope  mt-3"></i>&nbsp; movieticket@live.com</p>
                <p class="mt-3"><i class="fa fa-map-marker mt-3"></i>&nbsp; movieticket@live.com</p>

                <h2 class="mt-5" >Join Us</h2>
                <div class="mb-5">
                        <a href="#" class="mt-5" style="color:white;"><i class="fa fa-facebook-square fa-2x  mt-3"></i></a>
                        <a href="#" class="mt-5 ml-3" style="color:white;"><i class="fa fa-twitter-square fa-2x  mt-3"></i></a>
                        <a href="#" class="mt-5 ml-3" style="color:white;"><i class="fa fa-instagram fa-2x  mt-3"></i></a>
                        <a href="#" class="mt-5 ml-3" style="color:white;"><i class="fa fa-linkedin-square fa-2x  mt-3"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <form method="post">
                    <div class="container" style="color:maroon;">
                       

                        <label for="username"><b>Your Name</b></label>
                        <input type="text" style="border-radius:30px;" placeholder="Enter Name" name="name" id="username" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" style="border-radius:30px;" placeholder="Enter Email" name="email" id="email" required>

                        <label for="number"><b>Number</b></label>
                        <input type="tel" style="border-radius:30px;" placeholder="Enter number" name="number" id="number" required>

                        <label for="message"><b>Message</b></label>
                        <textarea name="message" id="message"  rows="4" style="resize:none;width:100%;border-radius:30px;"></textarea>
                        
                        <button type="submit" name="btn_submit" class="btn" style="background-color:maroon;color:white;">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>





<?php
include("footer.php");
?>