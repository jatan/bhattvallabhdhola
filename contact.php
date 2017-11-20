<?php
include('header.php');
?>
<script type="text/javascript">
    function validateForm() {
        var text = "Feel All the Mandatory Fields";
        var flag = true;
        if (document.forms["contact-form"]["name"].value == "") {
            document.getElementById("contact_name").style.border = "2px solid Red";
            flag = false;
        }else{
            document.getElementById("contact_name").style.border = "0";
        }
        if (document.forms["contact-form"]["email"].value == "") {
            document.getElementById("contact_email").style.border = "2px solid Red";
            flag = false;
        }else{
            document.getElementById("contact_email").style.border = "0";
        }
        if (document.forms["contact-form"]["phone"].value == "") {
            document.getElementById("contact_phone").style.border = "2px solid Red";
            flag = false;
        }else{
            document.getElementById("contact_phone").style.border = "0";
        }
        if (document.forms["contact-form"]["subject"].value == "") {
            document.getElementById("contact_subject").style.border = "2px solid Red";
            flag = false;
        }else{
            document.getElementById("contact_subject").style.border = "0";
        }
        if (document.forms["contact-form"]["message"].value == "") {
            document.getElementById("contact_message").style.border = "2px solid Red";
            flag = false;
        }else{
            document.getElementById("contact_message").style.border = "0";
        }
        if(!flag){
            document.getElementById('validate').classList.remove("hidden");
            document.getElementById("contact").scrollIntoView();
        }
        return flag;
    }

</script>
<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Get in Touch</h2>
                <h3 class="title-description">You Can Reach Us Here</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
        <div class="span8">
        <div class="span8 validation hidden" id="validate">Feel All the Mandatory Fields</div>
            <form name="contact-form" id="contact-form" class="contact-form" action="contact-process.php" method = "post" onsubmit="validateForm();">
                <p class="contact-name">
                    <input id="contact_name" class="validate" type="text" placeholder="Full Name" value="" name="name" />
                </p>
                <p class="contact-email">
                    <input id="contact_email" class="validate" type="text" placeholder="Email Address" value="" name="email" />
                </p>
                <p class="contact-phone">
                    <input id="contact_phone" class="validate" type="text" placeholder="Phone Number" value="" name="phone" />
                </p>
                <p class="contact-subject">
                    <input id="contact_subject" class="validate" type="text" placeholder="Subject" value="" name="subject" />
                </p>
                <p class="contact-message">
                    <textarea id="contact_message" placeholder="Your Message" name="message" rows="12" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                    <a id="contact-submit" class="submit" onclick="validateForm()">Send your Email</a> 
                </p>
            </form>
        </div>
        
        <div class="span4">
            <div class="contact-details">
                <ul>
                    <li><h3>Email</h3></li>
                    <li><h4 style="word-wrap: break-word;">kalpesh.bhatt911@gmail.com</h4></li>
                    <li><h3>Phone</h3></li>
                    <li><h4>+91-98256-33791</h4></li>
                    <li><h3>Address</h3></li>
                    <li><h4>
                        41 Devpriya Soc. - 2
                        <br>
                        Behind Madhur Hall
                        <br>
                        Nr. Anandnagar Cross Roads
                        <br>
                        Ahmedabad, Gujarat
                        <br>
                        380015
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->
<script type="text/javascript">
    document.getElementById("contact-submit").onclick = function() {
    if(validateForm())
        document.getElementById("contact-form").submit();
}
</script>

<?php
include('footer.php');
include('js.php');
?>