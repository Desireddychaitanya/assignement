<?php use PHPMailer\PHPMailer\PHPMailer; ?>


<?php include 'assests/header.php' ?>
     <?php
                    
                    if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
                        $email = $_POST["email"];
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                        if (!$email) 
                        {
                            $error .="Invalid email address";
                        } 
                        else 
                        {
                            $query = $this->db->query("select * from register where email =".$email);
                            if ($query->num_rows() == 0) {
                                $error .= "User Not Found";
                            }
                        }
                        if ($query > 0) {
                            echo $error;
                        } else {

                            $output = '';

                            $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
                            $expDate = date("Y-m-d H:i:s", $expFormat);
                            $key = md5(time());
                            $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
                            $key = $key . $addKey;
                          
                        $this->db->query("INSERT INTO signup (email, tempkey, expdate,) VALUES ('" . $email . "', '" . $key . "','".$expDate."');");


                            $output.='<p>Please click on the following link to reset your password.</p>';
                            //replace the site url
                            $output.='<p><a href="http://localhost/codeigniter3/resetpassword/restpass?tempkey=' . $key . '&email=' . $email . '&action=reset" target="_blank">http://localhost/codeigniter3/resetpassword/restpass?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
                            $body = $output;
                            $subject = "Password Recovery";

                            $email_to = $email;


                            //autoload the PHPMailer
                            require("vendor/autoload.php");
                            $mail = new PHPMailer();
                            $mail->IsSMTP();
                            $mail->Host = "smtp.gmail.com"; // Enter your host here
                            $mail->SMTPAuth = true;
                            $mail->Username = "support@rathorji.in"; // Enter your email here
                            $mail->Password = ""; //Enter your passwrod here
                            $mail->Port = 587;
                            $mail->IsHTML(true);
                            $mail->From = "support@rathorji.in";
                            $mail->FromName = "Rathorji PHP Tutorial";

                            $mail->Subject = $subject;
                            $mail->Body = $body;
                            $mail->AddAddress($email_to);
                            if (!$mail->Send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {
                                echo "An email has been sent";
                            }
                        }
                    }
                    ?>
    
                    <form method="post" action="" name="reset">
                        <div class="form-group">
                           <label><strong>Enter Your Email Address:</strong></label>
                            <input type="email" name="email" placeholder="username@email.com" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" id="reset" value="Reset Password"  class="btn btn-primary"/>
                        </div>
                    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>