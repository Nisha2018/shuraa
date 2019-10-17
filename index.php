<?php

if(isset($_POST['submit'])){
    $form_submit = 'none';
    $form_message = 'block';
    $email_to = "kanyalnisha26@gmail.com";
    $subject = "ICRI | Leads";
    $email_message .= "
<html>
<head>
    <title>HTML email</title>
  </head>
  <body>    
      <table style='background-color :#f1f2f1; padding: 5px 5px 5px 5px;'>
        <tr>";
            $email_message .= "<td>name:</td>";
            $email_message .= "<td>".$_POST['name']."</td>\n";
            $email_message .= "</tr>
           
        <tr>
            <td>mail:</td>";
           $email_message .= "<td>".$_POST['mail']."</td>\n";
           $email_message .="</tr>
           
        <tr>  
            <td>mobile:</td>";
           $email_message .= "<td>".$_POST['mobile']."</td>\n";
           $email_message .="</tr>
           
        <tr>  
            <td>services:</td>";
           $email_message .= "<td>".$_POST['services']."</td>\n";
           $email_message .="</tr>  
           
            <td>Page:</td>";
             $email_message .= "<td>".$_POST['Page']."</td>\n";
             $email_message .= "</tr>
      </table>
    </body>
</html>
";
    $from = 'info@icriindia.com';
     
    // Sending email
    $headers = "From: info@icriindia.com\r\nReply-To: info@icriindia.com";
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    if(mail($email_to, $subject, $email_message, $headers)){
        //echo 'Your mail has been sent successfully.';
    } else{
        //echo 'Unable to send email. Please try again.';
    }
}else{
    $form_submit = 'block';
    $form_message = 'none';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Put your description here.">
    <title>Shuraa</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <section class="banner grid-m bg-img color-white">
        <div class="logo">
                <a href="https://www.shuraatax.com"><img src="images/logo.png"></a>
        </div>
        <div class="content grid-m grid-t">
            <div class="text" data-aos="zoom-in">
                <p class="heading">One Stop Support for Tax & Accounting Services</p>
                <p class="font-20">Our tax consultants intend to extend your company’s financial potential and achieve systematic and timely accounting reports for your company.</p>
            </div>
            
            <div class="form-area grid-m" data-aos="fade-up">
                <div class="form-text">
                    <p>Speak To A Tax expert</p>
                </div>
                <form method="get" action="" class="grid-m" autocomplete="off">
                    <div class="name grid-m">
                        <input class="form-control" type="text" name="name" placeholder="Name*" aria-label="first name" required>
                    </div>
                    <div>
                        <input class="form-control" type="email" name="mail" placeholder="Email Address*" aria-label="email" required>
                    </div>
                    <div>
                        <input class="form-control" type="tel" name="mobile" placeholder="Mobile Number*" aria-label="number" required>
                    </div>
                    <div>
                        <select name="services" required aria-label="services" placeholder="Services*">
                            <option value="" disabled selected>Services*</option>
                            <option value="">VAT Registration Process</option>
                            <option value="VAT Advisory Services">VAT Advisory Services</option>
                            <option value="Tax Agent Services">Tax Agent Services</option>
                            <option value="VAT Return Filing & Compliance Sevices">VAT Return Filing & Compliance Sevices</option>
                            <option value="Accounting & Book keeping Services">Accounting & Book keeping Services</option>
                            <option value="MIS Reporting & Compliance Review">MIS Reporting & Compliance Review</option>
                            <option value="UAE Excise registration">UAE Excise registration</option>
                            <option value="Excise Consultation Services">Excise Consultation Services</option>
                            <option value="UAE Tax residency certification">UAE Tax residency certification</option>
                        </select>
                    </div>
                    <div>
                        <textarea class="form-control" rows="5" cols="10" placeholder="Message*">Your Message*  
                        </textarea>
                    </div>
                    <div class="button">
                        <button class="btn">Request a Call Back</button>
                    </div>
                </form>
                <div id="form-message" style="display: <?php echo $form_message ?>">
                    <p>ThankYou for your Enquiry!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="services grid-m p-all">
        <div class="head font-bold
        font-22 color-grey">
            <p>Our Services</p>
        </div>
        <div class="content grid-m grid-t grid-d" data-aos="zoom-in">
            <div class="service grid-m test">
                <div class="icon">
                   <img class="img" src="images/vat process.jpg" alt="pic"> 
                </div>
                <div class="text">
                    <div class="title">
                        <p>VAT Registration Process</p>
                    </div>
                    <div class="info">
                        <ul>
                            <li>VAT registration application based on VAT laws and regulations</li>
                            <li>Ensuring provision of specific and correct required details and documents</li>
                            <li>
                                Guidance for registration on time to avoid any penalties.
                            </li>
                            <li>
                                Group and individual registrations.
                            </li>
                            <li>Guide to awareness of VAT registration procedure and VAT registration cost in UAE.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service grid-m test">
                <div class="icon">
                    <img class="img" src="images/vat advisory.jpg" alt="pic">
                </div>
                <div class="text">
                    <div class="title">
                        <p>VAT Advisory Services</p>
                    </div>
                    <div class="info">
                        <ul>
                            <li>Solution oriented advisory services in adherence to VAT laws and regualtions</li>
                            <li>Detailed case study to provide firm and effective advisory services.</li>
                            <li>
                                Assistance in establishing the system for proper charging of VAT as required by the VAT regulations.
                            </li>
                            <li>
                                VAT Impact Assessment on business and pro-active solutions. 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service grid-m test">
                <div class="icon">
                    <img class="img" src="images/tax agent.jpg" alt="pic">
                </div>
                <div class="text">
                    <div class="title">
                        <p>Tax Agent Services</p>
                    </div>
                    <div class="info">
                        <ul>
                            <li>Representing the company before the Federal Tax Authority.</li>
                            <li>Assistance in maintenance of VAT related proper records required by the authority under the VAT regulations.</li>
                            <li>
                                Preparation and filing of the monthly/quarterly VAT return.
                            </li>
                            <li>
                                Follow up for tax issues and refund. VAT Implementation, Support and Consulting.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service grid-m test">
                <div class="icon">
                    <img class="img" src="images/return filling.jpg" alt="pic">
                </div>
                <div class="text">
                    <div class="title">
                        <p>VAT Return Filing & Compliance Sevices</p>
                    </div>
                    <div class="info">
                        <ul>
                            <li>Review the VAT details and assist in computations of VAT return.</li>
                            <li>Ensuring tax compliance by team of qualified and experienced professional.</li>
            
                            <li>
                                Updating latest information of company to Authorities.
                            </li>
                            <li>Review services for earlier filed returns.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service grid-m test">
                <div class="icon">
                    <img class="img" src="images/acc& bookkepping.jpg" alt="pic">
                </div>
                <div class="text">
                    <div class="title">
                        <p>Accounting & Book keeping Services</p>
                    </div>
                    <div class="info">
                        <ul>
                            <li>Maintenance of books of accounts, weekly or monthly Financial Reporting, bank and Ledgers reconciliation.</li>
                            <li>Implementation of proper system of records and book keeping.</li>
                            <li>
                                Monthly closure of books of accounts.
                            </li>
                            <li>
                                Outsourced accounting review services.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service grid-m test">
                <div class="icon">
                    <img class="img" src="images/mis.jpg" alt="pic">
                </div>
                <div class="text">
                    <div class="title">
                        <p>MIS Reporting & Compliance Review</p>
                    </div>
                    <div class="info">
                        <ul>
                            <li>Monthly/quarterly MIS reporting.</li>
                            <li>Accounting and Financial reporting compliance.</li>
                            <li>
                                Analysis report on the financial statements of the Company.
                            </li>
                            <li>
                                Budgeting
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why grid-m p-all">
        <div class="head font-bold
        font-22 color-grey">
            <p>Why Choose Shuraa Tax Accountant & Consultant ?</p>
        </div>
        <div class="content grid-m grid-d" data-aos="fade-up">
            <div class="benefits grid-m">
                <div class="icon">
                    <img src="images/Qualified Tax experts.png" alt="icon">
                </div>
                <div class="text">
                    <div class="title">
                        <p>Qualified Tax experts</p>
                    </div>
                    <div class="desc">
                        <p>Our qualified experts at Shuraa Tax offer quality accounting and tax services in the UAE.</p>
                    </div>
                </div>
            </div>
            <div class="benefits grid-m">
                <div class="icon">
                    <img src="images/Well Informed Tax Agents.png" alt="icon">
                </div>
                <div class="text">
                    <div class="title">
                        <p>Well Informed Tax Agents</p>
                    </div>
                    <div class="desc">
                        <p>Our tax agents and consultants familiarize you with the varying tax regulations and latest reforms.</p>
                    </div>
                </div>
            </div>
            <div class="benefits grid-m">
                <div class="icon">
                   <img src="images/FTA Compliant.png" alt="icon"> 
                </div>
                <div class="text">
                    <div class="title">
                        <p>FTA Compliant</p>
                    </div>
                    <div class="desc">
                        <p>We solve complex tax matters & adhere to every FTA compliance through our accounting services.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="doubts grid-m p-all">
        <div class="head font-bold
        font-22" data-aos="zoom-in">
            <p>Have Doubts Related To UAE taxation ?</p>
        </div>
        <div class="content grid-m grid-t grid-d">
            <div class="number grid-m">
                <div class="icon">
                   <i class="fas fa-phone"></i>
                </div>
                <div class="title">
                    <p>Call Us</p>
                </div>
                <div class="link">
                    <p>+971 4408-1960</p>
                </div>
            </div>
            <div class="mail grid-m">
                <div class="icon">
                    <i class="fas fa-envelope-open"></i>
                </div>
                <div class="title">
                    <p>E-mail</p>
                </div>
                <div class="link">
                    <p>info@shuraatax.com</p>
                </div>
            </div>
            <div class="address grid-m">
                <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="title">
                    <p>Address</p>
                </div>
                <div class="link">
                    <p>106 Sheikh Zayed Road, 5th Floor, Aspin Tower - Dubai</p>
                </div>
            </div>
            <div class="website grid-m">
                <div class="icon">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="title">
                    <p>Website</p>
                </div>
                <div class="link">
                    <a href="https://www.shuraatax.com/">https://www.shuraatax.com/</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>