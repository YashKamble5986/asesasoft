<?php include('header.php'); ?>
<section>
<div class="contact d-flex align-items-end mobile_align_end contactNew" >
    <div class="container">
        <div class="row d_intro pb-5 mb-3">
            <div class="col-lg-5 col-md-12">
                <h1 class="special_header mobile_w_100" style="color: #FFFF;">Say Hello!</h1>              
                <h4 class="sub_header pt-3 fontKarla" style="color: #FFFF;">Drop us an email or fill in the below form to discuss your next project with us. </h4>
                <div class="">
                    <div class="contactUsSuccessMessage" style="padding: 5px 5px;border: 1px solid #42ff02;color: #42ff02;text-align: center;margin-bottom: 18px;display:none;">Thank you for submitting form.We will contact you soon.</div>
                    <form id="contactUsForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="txtFirstNameContactUs" name="txtFirstNameContactUs" placeholder='First Name' class='form-control rounded-0 bg-transparent requiredContactUsField fField' onKeyPress="return ValidateAlpha(event);" maxlength="25" autocomplete="off" onpaste="return false;">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="txtLastNameContactUs" name="txtLastNameContactUs" placeholder='Last Name' class='form-control rounded-0 bg-transparent requiredContactUsField fField' onKeyPress="return ValidateAlpha(event);" maxlength="25" autocomplete="off" onpaste="return false;">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="txtContactNoContactUs" name="txtContactNoContactUs" placeholder='Contact No.' class='form-control rounded-0 bg-transparent requiredContactUsField fField' maxlength="10" min="10" autocomplete="off" onpaste="return false;" />
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="txtEmailContactUs" name="txtEmailContactUs" placeholder='Email ID' class='form-control rounded-0 bg-transparent requiredContactUsField fField' maxlength="100" autocomplete="off" onpaste="return false;">
                            </div>
                            <div class="col-12">
                                <textarea name="txtMessageContactUs"  placeholder='Message (Optional)' id="txtMessageContactUs" cols="30" rows="5" class='form-control rounded-0 bg-transparent fField'></textarea>
                            </div>
                            <div class="col-12 pt-5"> 
                                <div id="google_recaptcha"></div><br>
                            </div>
                            <div class="col-12 pt-lg-1">
                                <button type="button" id="btnSubmitContactUs" class="link_bt mt-3 mt-md-0 text-uppercase newContactBtn "  ><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="contactUsSpinner" style="display:none;"></span>Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 pl-lg-0 pt-5 pt-lg-0 ml-auto mt-lg-4">
                <div class="row">
                    <h1 class='montserratMedium_14 mb-md-4 mb-3 col-12 pl-md-0' style='font-size: 20px;color: #FFFF;'>Our Offices</h1>
                    <div class="col-md-5 pl-md-0 ">
                        <h4 class="addHeader text-white mb-3">Pune</h4>
                        <p class="muli_light fontKarla" style="color: #E5E5E5;">First Floor, Teerth Technospace, Bangalore - Mumbai Highway, Baner, Pune, Maharashtra 411045</p>
                        <p class="muli_light text-white mb-1 fontKarla" style="color: #E5E5E5;">Email: <a href='mailto:info@asesasoft.com' class='text-white text-lowercase' style="color: #E5E5E5;">info@asesasoft.com</a></p>
                        <p class="muli_light text-white fontKarla " style="color: #E5E5E5;">Mob: <a style="color: #E5E5E5;" href="tel:9970099596">99700 99596</a>, <a class='text-white' href="tel:9730753630" style="color: #E5E5E5;">97307 53630</a></p>
                    </div>
                    <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d472.7791989096529!2d73.7661864!3d18.5635047!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2dfae70193%3A0xd1893d4941592f7f!2sTeerth%20Coworking!5e0!3m2!1sen!2sin!4v1652274293392!5m2!1sen!2sin" class="h-100 w-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="row pt-md-5 pt-4 mt-2 mt-md-0">
                    <div class="col-md-5 pl-md-0">
                        <h4 class="addHeader text-white mb-3">Kolhapur</h4>
                        <p class="muli_light fontKarla"  style="color: #E5E5E5;">201, Second Floor, Vishwa Prestige, Devkar Panand Chowk, Kolhapur 416 012</p>
                        <p class="muli_light text-white mb-1 fontKarla" style="color: #E5E5E5;">Email: <a href='mailto:info@asesasoft.com' class='text-white text-lowercase'>info@asesasoft.com</a></p>
                        <p class="muli_light text-white fontKarla" style="color: #E5E5E5;">Mob: <a class='text-white'  href="tel:9970099596">99700 99596</a>, <a class='text-white' href="tel:9730753630">97307 53630</a></p>
                    </div>
                    <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.9328829326523!2d74.2115779152932!3d16.680241727202556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0fffb8c3acc53%3A0x39732681b2a04d6d!2sDigital%20Marketing%20Agency%20%7C%20Web%20Design%20and%20Development%20%7C%20eCommerce%20Development%20-%20Asesa%20Soft!5e0!3m2!1sen!2sin!4v1652273915761!5m2!1sen!2sin" class='h-100 w-100' style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contact_footer">
            <div class="col-md-12 text-center pb-2">
                <ul class="nav justify-content-center">
                    <li><a target='_blank' href="https://www.facebook.com/asesasoft"><i class='fa fa-facebook'></i></a></li>
                    <li><a target='_blank' href="https://www.instagram.com/asesasoft/"><i class='fa fa-instagram'></i></a></li>
                    <li><a target='_blank' href="https://twitter.com/asesasoft"><i class='fa fa-twitter'></i></a></li>
                    <li><a target='_blank' href="https://www.linkedin.com/company/asesa-soft"><i class='fa fa-linkedin'></i></a></li>
                    <li><a target='_blank' href="https://in.pinterest.com/asesasoft/"><i class='fa fa-pinterest'></i></a></li>
                </ul>
                <p style='font-size: 14px;color: #FFFFFF;' class='pt-4'> &copy; 2023 Asesa Soft, All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
</section>
<a href='#' class='goTopButton d-lg-none'><img src='images/down-arrow.svg' style='transform: rotate(180deg);' class='img-fluid' alt='Go to Top' /></a>

<script src='js/bootstrap.min.js'></script>
<script>
 var onloadCallback = function() {
   grecaptcha.render('google_recaptcha', {
     'sitekey' : '6LeyaG0eAAAAALBaJg7ltAsKcXBpWgb7bbyepM4N'
   });
 };
</script>
<script>
function ValidateAlpha(evt)
{
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
     
    return false;
        return true;
}

 $("#txtContactNoContactUs").keypress(function (e) {     
        var charCode = (e.which) ? e.which : event.keyCode 
        if (String.fromCharCode(charCode).match(/[^0-9]/g))
                return false; 
});

$("#btnSubmitContactUs").click(function(){
    var error = 0;
    var errorArr = [];
    
    $(".requiredContactUsField").each(function(){
        if($.trim($(this).val())==''||$.trim($(this).val())==null){
            $(this).css('border-color','#ff0000');
            error = 1;
            errorArr.push(error);
        }else{
            $(this).css('border-color','');
            error = 0;
            errorArr.push(error);
        }
    });
    
    var txtContactNoContactUs = $("#txtContactNoContactUs").val();
    if(txtContactNoContactUs.length !== 10){
        $("#txtContactNoContactUs").css('border-color','#ff0000');
        error = 1;
        errorArr.push(error);
    }else{
        $("#txtContactNoContactUs").css('border-color','');
        error = 0;
        errorArr.push(error);
    }
    
    var email = $('#txtEmailContactUs').val();
    var batposition = email.indexOf("@");  
    var bdotposition = email.lastIndexOf(".");  
    if(batposition<1 || bdotposition<batposition+2 || bdotposition+2>=email.length){  
        $('#txtEmailContactUs').css('border-color','#ff0000');
        error = 1;
        errorArr.push(error);
    }else{
        $('#txtEmailContactUs').css('border-color','');
        error = 0;
        errorArr.push(error);
    }
    
    
    if(errorArr.indexOf(1) !== -1){ 
      return false;
    }else{
        if (grecaptcha.getResponse()) {
              $("#contactUsSpinner").css('display','inline-block');
              var form=$("#contactUsForm");
              $.ajax({
                type:"POST",
                url:'contactUsSubmit', 
                data:form.serialize(), 
                success:function(msg){
                    if(msg=='success'){
                        $("#contactUsSpinner").css('display','none');
                        // $(".contactUsSuccessMessage").css('display','block');
                        window.location.href = "https://asesasoft.com/thank-you";
                        grecaptcha.reset();
                        setTimeout(function() {
                            $(".contactUsSuccessMessage").css('display','none');
                            $("#txtFirstNameContactUs").val('');
                            $("#txtLastNameContactUs").val('');
                            $("#txtContactNoContactUs").val('');
                            $("#txtEmailContactUs").val('');
                            $("#txtMessageContactUs").val('');
                        }, 4000);
                    }else{
                        alert('Something went wrong.');
                    }
                }
              });
     	}else{
     	alert('Please confirm captcha to proceed');
     	}
    }
});    
</script>    
</body>
</html>