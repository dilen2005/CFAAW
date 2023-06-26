<?php

include_once 'header.php';

?>


    <div class="about-title">
        <h1>Login now</h1>
        <p>Center of Acheivements and Wellbeing <i class="fa-solid fa-chevron-right"></i> Home <i class="fa-solid fa-chevron-right"></i> Login</p>
    </div>

    <section class="registersection">
        <center>
            <div class="register-container">
                <center><img src="img/pfp.png" style="width: 150px;margin:10px;"></center>
                <form action="process-signup.php" method="post" novalidate>
                    <table id="register-form">
                        <tr>
                            <td class="register-column1">Email:</td>
                            <td class="register-column2"><input type="email" name="email" id="email" placeholder="Enter Your Email Adress"></td>
                        </tr>
                        <tr>
                            <td class="register-column1">Password:</td>
                            <td class="register-column2"><input type="password" name="password" id="password" placeholder="Enter A Password"></td>
                        </tr>
                    </table>
                    <p style="font-family: 'Raleway', sans-serif;font-size: 12px;"><a href="#">Forgor username or password?</a></p>
                    <p style="font-size: 13px;">Dont Have an account? <a href="signup.html">Register Now</a></p>
                    <center><button type="submit" name="submit" class="normal register-btn">Login Now<i class="fa-solid fa-id-card" style="margin-left: 10px;"></i></button></center>
                    
                </form>
            </div>
        </center>
    </section>


<?php

include_once 'footer.php';

?>