<?php

include_once 'header.php';

?>

    <div class="about-title">
        <h1>Register Now</h1>
        <p>Center of Acheivements and Wellbeing <i class="fa-solid fa-chevron-right"></i> Home <i class="fa-solid fa-chevron-right"></i> Register</p>
    </div>

    <section class="registersection">
        <center>
            <div class="register-container">
                <center><img src="img/pfp.png" style="width: 150px;margin:10px;"></center>
                <form action="process-signup.php" method="post" novalidate>
                    <table id="register-form">
                        <tr>
                            <td class="register-column1">Full name :</td>
                            <td class="register-column2"><input type="text" name="name" id="name" placeholder="Enter Your Full Name"></td>
                        </tr>
                        <tr>
                            <td class="register-column1">Email:</td>
                            <td class="register-column2"><input type="email" name="email" id="email" placeholder="Enter Your Email Adress"></td>
                        </tr>
                        <tr>
                            <td class="register-column1">Whatsapp No:</td>
                            <td class="register-column2"><input type="text" name="email" placeholder="Enter Your Whatsapp Number"></td>
                        </tr> 
                        <tr>
                            <td class="register-column1">District:</td>
                            <td class="register-column2"><input type="text" name="email" placeholder="Enter your District"></td>
                        </tr>
                        <tr>
                            <td class="register-column1">Username:</td>
                            <td class="register-column2"><input type="text" name="uid" placeholder="Enter a Username"></td>
                        </tr>
                        <tr>
                            <td class="register-column1">Password:</td>
                            <td class="register-column2"><input type="password" name="password" id="password" placeholder="Enter A Password"></td>
                        </tr>
                        <tr>
                            <td class="register-column1">Confirm Password:</td>
                            <td class="register-column2"><input type="password" name="password_confirmation" id="password_confirmation" placeholder="ReEnter Your Password"></td>
                        </tr>
                    </table>
                    
                    <center><button type="submit" name="submit" class="normal register-btn">Register Now<i class="fa-solid fa-id-card" style="margin-left: 10px;"></i></button></center>
                    
                </form>
                <p class="have-account" style="font-size: 13px;">Already Have an account? <a href="signin.html">Login Now</a></p>
            </div>
        </center>
    </section>


<?php

include_once 'footer.php';

?>