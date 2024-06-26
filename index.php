<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$status = '';
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data from the POST request
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];



 

try {
    //Server settings
                      //Enable verbose debug output
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
      );
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'zidlena017@gmail.com';                     //SMTP username
    $mail->Password   = 'islprsrqkimndlmj';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('zidlena017@gmail.com', 'Zidlena Mejlis Website');
    $mail->addAddress('info@zidlenaarabianmejlis.com', 'Abdulkerim');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'A message from your website';
    $mail->Body = 'Name: ' . $name . '<br>' .
    'Email: ' . $email . '<br>' .
    'Phone: ' . $phone . '<br>' .
    'Message: ' . $message . '<br>' ;
   

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
    $status = 'Message has been sent';
    header("refresh:2");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $status = 'Message could not be sent. Please try again later';
    header("refresh:2");
}

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="zidlena arabian mejlis">
    <meta name="description" content="An arabian mejlis manufacturing company">
    <meta name="keywords" content="zidlena arabian mejlis,mejlis, arabian mejlis,ethiopia arabian mejlis,arbiyan mejlis">
    <meta name="image" content="https://zidlena.vercel.app/newLogo.jpg">
    <meta name="author" content="Zidlena Arabian Mejlis">
    <meta  property="og:title" content="Zidlena Arabian Mejlis">
    <meta  property="og:description" content="An arabian mejlis manufacturing company">
    <meta property="og:image" content="https://zidlena.vercel.app/newLogo.jpg" >

   <!--for to top-->
  
   <link rel="stylesheet" href="./styles/border.css">
  <link href="./styles/color.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./styles/customer2.css"> -->
  <link rel="stylesheet" href="./styles/footer.css">
  <link rel="stylesheet" href="./styles/gallery.css">
  <link rel="stylesheet" href="./styles/why.css">
  <link rel="stylesheet" href="./styles/customer.css">
  <link rel="stylesheet" href="./styles/card.css">
  <link rel="stylesheet" href="./styles/global.css">
  <link rel="stylesheet" href="./styles/checkbox.css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  
   <style>
    html {
  scroll-behavior: smooth;
}

/* end .slideOne */
  </style>

 


  <title>Zidlena Arabian Mejlis</title>

</head>
<body>
  <div class="bg-white">
    <section id="nav" class="">
      <nav class="md:border-2 md:border-b-[#075985] flex md:flex-row flex-col md:justify-around py-2 pl-3 lg:pl-0">
        <div class="flex flex-row justify-between pr-3">
          <div class="grid content-center">
            <div class='flex justify-center'><img src='images/newLogo.jpg' alt='zidlena arabian mejlis logo' class='h-[64px]'/></div>
          </div>
          <div class="col-start-12 grid content-center pr-3">
            <button class="md:hidden" id="toggleNav" onclick="toggleNavigation()">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>  
            </button>
          </div>
        </div>
        <div id="menu" class="hidden md:grid content-center mt-2 md:mt-0">
          <ul class="md:flex md:flex-row flex-col gap-7">
            <li class="mb-1 font-bold text-sm text-cyan-700 hover:text-green-500">
              <a href="#home" class="cursor-pointer english-content" id="english-content">Home</a>
              <a href="#home" class="cursor-pointer amharic-content" id="amharic-content">መነሻገፅ</a>
            </li>
            <li class="mb-1 font-bold text-sm text-cyan-700 hover:text-green-500">
              <a href="#about" class="cursor-pointer english-content">About Us</a>
              <a href="#about" class="cursor-pointer amharic-content">ስለ እኛ</a>
            </li>
            <li class="mb-1 font-bold text-sm text-cyan-700 hover:text-green-500">
              <a href='#products' class="cursor-pointer english-content">Products</a>
              <a href='#products' class="cursor-pointer amharic-content">ምርቶች</a>
            </li>
            <li class="mb-1 font-bold text-sm text-cyan-700 hover:text-green-500">
              <a href="#contact" class="cursor-pointer english-content">Contact Us</a>
              <a href='#products' class="cursor-pointer amharic-content">አግኙን</a>

            </li>
          </ul>
        </div>
        <div class="hidden md:flex md:flex-row gap-2 mt-3 md:mt-0" id="menu2">
          <div class="">
            <span class="text-cyan-700">English</span> 
          </div>
          <div class="cursor-pointer grid content-center">  
              <section title=".language">
    <!-- .slideOne -->
    <div class="checkbox-wrapper-7">
      <input class="tgl tgl-ios" id="cb2-7" type="checkbox"/>
      <label class="tgl-btn" for="cb2-7">
    </div>
    <!-- end .slideOne -->
  </section>
          </div>
          <div class="">
            <span class="text-cyan-700">አማርኛ</span> 
          </div>
        </div>
      </nav>


      </section>

      <section id='home'>
      <div class='container-fluid w-full'>
        <section class="bg-white testim w-full" id="testim">
          <div class="wrap">
            <span class="absolute bg-white top-0 left-0 h-full w-[50px]">
              <div class="arrow left" id="left-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5"  viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
              </div>
            </span>
            <span class="arrow right text-black" id="right-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
            </span>
            <ul id="testim-dots" class="dots bottom-2.5">
              <li class="dot active"></li>
              <li class="dot"></li>
              <li class="dot"></li>
              
            </ul>
            <div id="testim-content" class="cont">
              
            
              <div>
                <div class="img relative bg-[url('images/f3.jpg')] bg-cover w-full lg:h-[500px] md:h-[400px] h-[250px]">
                  <div class="absolute h-full w-full bg-slate-0/90 bottom-0">
                    <div class="flex justify-center absolute z-1 lg:top-1/2 md:top-1/3 top-1/3 w-full">
                      <div class="md:w-2/3 w-full">
                        <header>
                        <h1 class="text-center text-2xl md:text-3xl sm:2xl lg:text-5xl mb-4 animate-charcter english-content">
                          Zidlena Arabian Mejlis
                         </h1>
                         <h1 class="text-center text-2xl md:text-3xl sm:2xl lg:text-5xl mb-4 animate-charcter amharic-content">
                          ዚድለና አረቢያን መጅሊስ
                         </h1>

                        </header>
                 
                        <p class="text-center text-3xl animate-charcter2 mb-1 english-content">
                         Crafting Timeless Elegance for Your Home
                          </p>

                          <p class="text-center text-3xl animate-charcter2 mb-1 amharic-content">
                            ለቤትዎ ጊዜ የማይሽረው ውበትን መፍጠር
                             </p>
                       
                      </div>
                    </div>
                  </div>
                </div>
                
              
              </div>
              <div>
              <div class="img relative bg-[url('images/f5.jpg')] bg-cover w-full lg:h-[500px] md:h-[400px] h-[250px]">
                  <div class="absolute h-full w-full bg-slate-0/90 bottom-0">
                    <div class="flex justify-center absolute z-1 md:top-1/2 top-5 p-2 w-full">
                      <div class="md:w-2/3 w-full">
                        <header>
                          <h1 class="text-center text-2xl md:text-3xl sm:2xl lg:text-5xl mb-4 animate-charcter english-content">
                            About Us
                           </h1>
                           <h1 class="text-center text-2xl md:text-3xl sm:2xl lg:text-5xl mb-4 animate-charcter amharic-content">
                            ስለ እኛ
                           </h1>
  
                          </header>
                        <p class="text-center animate-charcter4 english-content">
                         At Zidlena Arabian Majlis, we take pride in our 7-year journey as a quality furniture producer in Ethiopia.
                         
                           </p>
                           <p class="text-center animate-charcter4 amharic-content">
                            ከሰባት አመታት በላይ ልምድ ባካበተው ድርጅታችን በጥራታቸው ልዪ የሆኑ አረብያን መጅሊሶችን በማምረት ይታወቃል
                              </p>
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>
              <div>
              <div class="img relative bg-[url('images/f6.jpg')] bg-cover w-full lg:h-[500px] md:h-[400px] h-[250px]">
                  <div class="absolute h-full w-full bg-slate-0/90 bottom-0">
                    <div class="flex justify-center absolute z-1 md:top-1/2 top-5 p-2 w-full">
                      <div class="md:w-2/3 w-full">
                        <header>
                          <h1 class="text-center text-2xl md:text-3xl sm:2xl lg:text-5xl mb-4 animate-charcter english-content">
                            Why Choose Us?
                           </h1>
                           <h1 class="text-center text-2xl md:text-3xl sm:2xl lg:text-5xl mb-4 animate-charcter amharic-content">
                            ለምን እኛን ይመርጣሉ?
                           </h1>
  
                          </header>
                        <p class="text-center animate-charcter3 english-content">
                          As a leading manufacturer of premium Arabian mejlis, we take great pride in our commitment to quality
 </p>
 <p class="text-center animate-charcter3 amharic-content">
  የፕሪሚየም አረብ መጅሊስ ግንባር ቀደም አምራች እንደመሆናችን ለጥራት ባለን ቁርጠኝነት ትልቅ ኩራት ይሰማናል።
</p>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        </div>

      </section>


      <section id='about'>
      <main class="container-fluid mt-16">

<section class='relative bg-[#ffffff] py-7 text-black'>
  <svg
    class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-[#075985]"
    preserveAspectRatio="none"
    viewBox="0 0 1440 54">
    <path
    fill="currentColor"
    d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"
    />
  </svg>
  <div class="mt-2 flex md:justify-center px-3">
    <div class='md:w-2/3'>
      <div class="mt-3">
        <div class='md:text-center'>
          <h2 class="font-bold text-center lg:text-4xl text-2xl text-[#075985] english-content ">
          About Us
          </h2>
          <h2 class="font-bold text-center lg:text-4xl text-2xl text-[#075985] amharic-content ">
            ስለ እኛ
            </h2>
        </div>
      </div>
      <div class="mt-5">
        <p class="font-bold text-2xl text-[#075985] english-content">
        Welcome to Zidlena Arabian Mejlis.
        </p>
        <p class="font-bold text-2xl text-[#075985] amharic-content">
          እንኳን ወደ ዚድለና አረብያን መጅሊስ በድህና መጡ
          </p>
      </div>
      <div class="mt-3">
        <p class="english-content">
          At Zidlena Arabian Majlis, we take pride in our 7-year journey as a quality furniture producer in Ethiopia. Inspired by the desire to create a household product that combines elegance and affordability, our founders have built a team of skilled artisans who meticulously craft each piece to the highest standards.
        </p>

        <p class="amharic-content">
          ለቤትዎ ጊዜ የማይሽረው ውበትን መፍጠርከሶስት ከሰባት አመት በላይ ልምድ ባካበተው ድርጅታችን በጥራታቸው ልዪ የሆኑ፤ በምቾታቸው ወደር የማይገኝላቸው አረብያን መጅሊሶችን በማምረት በተመጣጣኝ ዋጋ ለደንበኞቻችን በማቅረብ ላይ እንገኛለን፡፡ እርሶስ ለቤቶ፣ ለቤተሰቦ፣ ወይም ለወዳጅ ዘመዶ አረቢያን መጅሊሶችን ለመግዛት አስበዋል፤ እንግዲያውስ ወደ ዚድላና አረቢያን መጅሊስ ይምጡ ከጠበቁት በላይ አግኝተው ተደስተው ይመለሳሉ፤ እርሶ ያሰቡት የተለየ ዲዛይን ካለም የማክሩን ያሰቡትን ሰርተን እናስረክቦታለን፡፡
        </p>
        
      
        <p class=" mt-1  english-content" id="readmore">
     Zidlena Arabian Majlis is the leading manufacturer of exquisite Arabian-inspired furniture in Ethiopia. With a commitment to quality and a passion for preserving traditional craftsmanship, we bring the rich cultural heritage of Arab design to your living spaces.</p>
           
     <p class=" mt-1  amharic-content" id="readmore">
      በሀገራችን ከሚገኙ አረቢያን መጅሊስ አምራቾች ስመጥር በሆነው ፋብሪካችን ጥራትን ከምቾት ያጣመሩ አረብያን መጅሊሶችን አዘጋጅተን እንጠብቃችህዋለን፡፡ ቤቶን በአረቢያን መጅሊሶች ለማሳመር አስበዋል እንግዲያውስ ዚድላና አረቢያን መጅሊስን ሳይጎበኙ እንዳይወስኑ፡፡</p>
    <!--  <button class="text-[blue] hover:text-green btn-read" id="readmorebutton" onclick="Readmore()">
      Read More/ተጨማሪ ያንብቡ
    </button> -->
      </div>
    </div>
  </div>
</section>

</main>

      </section>
        <section id='whyus'> <div class="md:text-center"> 
          <h2 class="font-bold text-center lg:text-4xl text-2xl text-[#075985] mt-5 mb-5 english-content"> Why Choose Us? </h2> 
          <h2 class="font-bold text-center lg:text-4xl text-2xl text-[#075985] mt-5 mb-5 amharic-content"> ለምን እኛን ይመርጣሉ?? </h2> 
        </div>
              <main class="container-fluid bg-white py-5 flex justify-center">
                <div class="md:flex justify-center lg:w-3/5 sm:w-5/6 w-96 relative mt-7">
                  <div class="bg-slate-900 grid content-center rounded-l-[15px] rounded-r-[15px] h-48 md:h-auto md:rounded-l-[40px] md:rounded-r-none px-3 p-5 mx-5 md:mx-0">
                    <h2 class="font-bold text-white lg:text-3xl text-2xl english-content">
                    Why Us?
                    </h2>
                    <h2 class="font-bold text-white lg:text-3xl text-2xl amharic-content">
                      ምን ይለየናል?
                      </h2>
                    <p class="text-white md:flex text-xs md:text-base mt-1 english-content">
                    As a leading manufacturer of premium Arabian mejlis, we take great pride in our commitment to quality, craftsmanship, and customer satisfaction.
                    </p>
                    <p class="text-white md:flex text-xs md:text-base mt-1 amharic-content">
                      የፕሪሚየም አረብ መጅሊስ ግንባር ቀደም አምራች እንደመሆናችን ለጥራት፣ ለዕደ ጥበብ እና ለደንበኛ እርካታ ባለን ቁርጠኝነት ትልቅ ኩራት ይሰማናል።
                      </p>
                  </div>
                  <div class="p-5 content-center rounded-r-[20px] md:rounded-r-[40px] flex justify-center">
                    <div class="cards">
                      <div class="card red md:w-[350px] w-full px-3 ">
                        <p class="tip english-content">
                        Durability
                        </p>
                        <p class="tip amharic-content">
                          ዘላቂነት
                          </p>
                        <p class="second-text english-content">
                        Our mejlis are built to last, withstanding the test of time and everyday use. We stand behind the quality of our craftsmanship with a comprehensive warranty, giving you the peace of mind that your investment will last for years to come.
                        </p>
                        <p class="second-text amharic-content">
                          የእኛ መጅሊሶች የጊዜ እና የዕለት ተዕለት አጠቃቀምን ፈተና በመቋቋም ዘላቂነት ያላቸው ናቸው። ኢንቨስትመንትዎ ለሚቀጥሉት አመታት የሚቆይበትን የአእምሮ ሰላም በመስጠት ከዕደ ጥበብ ስራችን ጥራት በስተጀርባ ቆመናል።
                          </p>
                      </div>
                      <div class="card blue md:w-[350px] w-full px-3">
                        <p class="tip english-content">
                        Exceptional Customer Service
                        </p>
                        <p class="tip amharic-content">
                          ልዩ የደንበኞች አገልግሎት
                          </p>
                        <p class="second-text english-content">
                        From the moment you inquire about our products to the day your mejlis is delivered, our dedicated team is here to assist you. We pride ourselves on our responsiveness, attention to detail, and commitment to ensuring your complete satisfaction.
                        </p>
                        <p class="second-text amharic-content">
                          ስለ ምርቶቻችን ከጠየቃቹ ጊዜ ጀምሮ መጅሊሱ እስከሚደርስ ድረስ የኛ ቁርጠኛ ቡድን ሊረዳቹ ተዠጋጅታል።
                          </p>
                      </div>
                      <div class="card green md:w-[350px] w-full px-3">
                        <p class="tip english-content">
                        Customizable Options
                        </p>
                        <p class="tip amharic-content">
                          የተለያዩ አማራጮች
                          </p>
                        <p class="second-text english-content">
                        We understand that every home and personal style is unique. That's why we offer a wide range of customization options, allowing you to tailor the size, color, and upholstery of your mejlis to perfectly suit your space and preferences.
                        </p>
                        <p class="second-text amharic-content">
                          እያንዳንዱ ቤት እና የግል ዘይቤ ልዩ እንደሆነ እንረዳለን። ለዛም ነው የመጅሊሶቹን መጠን፣ ቀለም እና ጨርቃጨርቅ ለቦታዎ እና ለምርጫዎ ተስማሚ በሆነ መልኩ አማራጮችን እናቀርባለን።
                          </p>
                      </div>
                    </div>
                  </div>
                </div>
              </main>
            
              </section>
              <section id="products"> <section class="flex flex-col gap-7 py-7"> <div class="md:text-center"> 
                <h2 class="font-bold text-center lg:text-4xl text-2xl text-[#075985] mb-5 english-content"> Products </h2>
                <h2 class="font-bold text-center lg:text-4xl text-2xl text-[#075985] mb-5 amharic-content">ምርቶች  </h2>
                  
                   </div>
                    <div class="flex justify-center"> 
                    <div class="flex md:flex-row flex-col gap-7">
                      <div class="bg-slate-900 rounded-lg">
                        <div class=" image_container6">
                          <img src="./images/a1.jpg" id="card_image" alt="Arabian Mejlis" class="w-[350px] h-[250px] rounded-t-lg image6 fade-in"/>
                        
                        </div>
                        <div class="flex flex-col text-white gap-3 pt-5 pb-9">
                          <div>
                            <h2 class="pl-7 text-bold text-lg english-content">Furniture Mejlis</h2>
                            <h2 class="pl-7 text-bold text-lg amharic-content">ፈርኒቸር መጅሊስ</h2>
                          </div>
                          <div class="flex justify-end pr-7">
                            <div>
                              <button class="bg-indigo-800 py-3 px-4 text-sm rounded-md shadow-2xl shadow-indigo-500/50 english-content scrollToContact" id="scrollToContact">Order Now</button>
                              <button class="bg-indigo-800 py-3 px-4 text-sm rounded-md shadow-2xl shadow-indigo-500/50 amharic-content scrollToContact" id="scrollToContact">አሁን እዘዝ</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="bg-slate-900 rounded-lg">
                        <div class="image_container6">
                          <img src="./images/b2.jpg" id="card_image2" alt="Arabian Mejlis" class="w-[350px] h-[250px] rounded-t-lg image6 fade-in" />
                        
                        </div>
                        <div class="flex flex-col text-white gap-3 pt-5 pb-9">
                          <div>
                            <h2 class="pl-7 text-bold text-lg english-content">Bonded Mejlis</h2>
                            <h2 class="pl-7 text-bold text-lg amharic-content">ቦንድድ መጅሊስ</h2>
                          </div>
                          <div class="flex justify-end pr-7">
                            <div>
                              <button class="bg-indigo-800 py-3 px-4 text-sm rounded-md shadow-2xl shadow-indigo-500/50 english-content scrollToContact" id="scrollToContact">Order Now</button>
                              <button class="bg-indigo-800 py-3 px-4 text-sm rounded-md shadow-2xl shadow-indigo-500/50 amharic-content scrollToContact" id="scrollToContact">አሁን እዘዝ</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>     
                  </div> 
                </section>
              </section>
      
              <section id="contact">
                <div class="py-7 lg:pb-0">
                    <div class="md:text-center">
                        <h2 class="font-bold text-center lg:text-4xl text-2xl text-[#075985] mb-5">
                            <span id="contact-title" class="english-content">Get in touch</span>
                            <span id="contact-title" class="amharic-content">ከእኛ ጋር ይገናኙ</span>
                        </h2>
                    </div>
                    <section class="bg-[url('./images/a7.jpg')] cover">
                        <div class="bg-slate-900/70 grid content-center py-7 h-full cover">
                            <div class="flex justify-center">
                                <div class="border-1 bg-white lg:w-2/5 md:w-3/5 w-5/6 flex justify-center py-4">
                                    <div class="w-4/5 flex flex-col gap-3">
                                        <div>
                                            <p class="text-center lg:text-[14px] text-[12px] text-[#075985] english-content" id="contact-description">
                                                Feel Free to contact us about any questions you may have.
                                            </p>
                                            <p class="text-center lg:text-[14px] text-[12px] text-[#075985] amharic-content" id="contact-description">
                                              ለሚኖሩዎት ማንኛውም ጥያቄዎች እኛን ለማነጋገር ነፃነት ይሰማዎ።
                                          </p>
                                        </div>
                                        <div class="flex justify-center">
                                          <form class="flex flex-col gap-2" id="contact-form" onsubmit="handleSubmit()">
                                            <div class="flex justify-center">
                                                <div class="flex flex-col">
                                                    <div>
                                                        <input type="text" id="name"  name="name" placeholder="Name" class="bg-slate-200 py-2 pl-2 english-content">
                                                        <input type="text" id="name"   name="name" placeholder="ስም" class="bg-slate-200 py-2 pl-2 amharic-content">
                                                    </div>
                                                    <div id="error-name" class="text-rose-700 text-xs mt-1 ml-3"></div>
                                                </div>
                                            </div>
                                            <div class="flex justify-center">
                                                <div class="flex flex-col">
                                                    <div>
                                                        <input type="email" id="email"  name="email" placeholder="Email" class="bg-slate-200 py-2 pl-2 english-content">
                                                        <input type="email" id="email"  name="email" placeholder="ኢሜይል" class="bg-slate-200 py-2 pl-2 amharic-content">
                                                    </div>
                                                    <div id="error-email" class="text-rose-700 text-xs mt-1 ml-3"></div>
                                                </div>
                                            </div>
                                            <div class="flex justify-center">
                                                <div class="flex flex-col">
                                                    <div>
                                                        <input type="tel" id="phone"  name="phone" placeholder="Phone number" class="bg-slate-200 py-2 pl-2 english-content">
                                                        <input type="tel" id="phone"  name="phone" placeholder="ስልክ ቁጥር" class="bg-slate-200 py-2 pl-2 amharic-content">
                                                    </div>
                                                    <div id="error-phone" class="text-rose-700 text-xs mt-1 ml-3"></div>
                                                </div>
                                            </div>
                                            <div class="flex justify-center">
                                                <div class="flex flex-col">
                                                    <div>
                                                        <input  name="message" id="message" placeholder="Message" class="bg-slate-200 h-[80px] py-2 pl-2 english-content">
                                                        <input  name="message" id="message" placeholder="መልእክት" class="bg-slate-200 h-[80px] py-2 pl-2 amharic-content">
                                                    </div>
                                                    <div id="error-message" class="text-rose-700 text-xs mt-1 ml-3"></div>
                                                </div>
                                            </div>
                                            <div class="flex justify-center mt-2">
                                                <button type="submit" class="bg-[#075985] p-1">
                                                    <span id="send-button" class="english-content">Send</span>
                                                    <span id="send-button" class="amharic-content">ላክ</span>
                                                  
                                                </button>
                                                <div id="error-message" class="text-rose-700 text-xs mt-1 ml-3">
                                              
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

         

            <section id="footer" class="mt-5">
              <div class="container-fluid">
                <div class="main w-full">
                  <div class="footer w-full">
                    <!-- <div className="bubbles">
                      {Array.from({ length: 128 }).map((_, i) => (
                        <div
                          key={i}
                          className="bubble h-32"
                          style={{
                            width: `${2 + Math.random() * 4}rem`,
                            height: `${2 + Math.random() * 4}rem`,
                            bottom: `${-6 - Math.random() * 4}rem`,
                            left: `${-5 + Math.random() * 110}%`,
                            animationDuration: `${2 + Math.random() * 2}s`,
                            animationDelay: `${-1 * (2 + Math.random() * 2)}s`,
                          }}
                        />
                      ))}
                    </div> -->
                    <div class="content flex flex-col mt-10 gap-10 w-full">
                      <div class="flex justify-center lg:justify-normal w-full">
                        <div class="lg:flex lg:justify-between lg:w-full w-4/5 grid gap-5 lg:gap-0 lg:px-5">
                          <div class="flex flex-col gap-1 lg:w-1/3">
                            <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.2565294906867!2d38.71066397399636!3d9.04034828881332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8972e55151ff%3A0x1f9f18f4c4b59731!2sZidlena%20Arabian%20Mejlis!5e0!3m2!1sen!2set!4v1717171008393!5m2!1sen!2set"
                              frameborder="0"
                              style="border: 0"
                              aria-hidden="false"
                              title="Zidlena Arabian Mejlis"
                            ></iframe>
                          </div>
                          <div class="flex flex-col gap-1 lg:w-1/3">
                            <h2 class="font-bold text-lg english-content">
        
                              Address
                            </h2>
                            <h2 class="font-bold text-lg amharic-content">
        
                              አድራሻ
                            </h2>
                            <a href="#" class="english-content">Addis Ababa City, Atena Tera</a>
                            <a href="#" class="english-content">Efoyta Gebeya Meakel</a>
                            <a href="#" class="english-content">First Floor BA/GF007</a>

                            <a href="#" class="amharic-content">አዲስ አበባ ከተማ አተና ተራ</a>
                            <a href="#" class="amharic-content">እፎይታ ገበያ መአከል</a>
                            <a href="#" class="amharic-content">የመጀመሪያ ፎቅ BA/GF007</a>

                            <a href="tel:+251916800744" class="cursor-pointer hover:text-green-500 transition-colors duration-300">0916800744/0923854774</a>
                            <a href="#">info@zidlenaarabianmejlis.com</a>

                          </div>
                          <div class="flex flex-col gap-5 lg:w-1/3">
                            <div class="flex flex-col gap-1">
                              <h2 class="font-bold text-lg english-content">Links</h2>
                              <h2 class="font-bold text-lg amharic-content">አገናኞች</h2>
                              <a href="#home" class="cursor-pointer hover:text-green-500 transition-colors duration-300 english-content">Home</a>
                              <a href="#about" class="cursor-pointer hover:text-green-500 transition-colors duration-300 english-content">About Us</a>
                              <a href="#products" class="cursor-pointer hover:text-green-500 transition-colors duration-300 english-content">Products</a>
                           

                              <a href="#home" class="cursor-pointer hover:text-green-500 transition-colors duration-300 amharic-content">መነሻገፅ</a>
                              <a href="#about" class="cursor-pointer hover:text-green-500 transition-colors duration-300 amharic-content">ስለ እኛ</a>
                              <a href="#products" class="cursor-pointer hover:text-green-500 transition-colors duration-300 amharic-content">ምርቶች</a>
                   
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bg-[#082f49] w-full bottom-0 py-2 flex justify-center">
                        <div class="w-4/5 md:w-full flex lg:flex-row flex-col gap-3">
                          <div class="flex lg:justify-end justify-center lg:w-2/3">
                            <div>
                              <p>©2024. | Designed By: <a class="text-red-600 text-[16px]" href="#">MINA Tech</a> | All rights reserved.</p>
                            </div>
                          </div>
                          <div class="flex lg:justify-end justify-center lg:w-1/3 lg:pr-12">
  <div>
    <ul class="flex flex-row gap-4 bg-white rounded-md p-1 h-full">
      
      <li>
        <a href="https://www.facebook.com/profile.php?id=100095151285637" target="_blank">
          <i class="fa fa fa-facebook" style="font-size:24px; color: dodgerblue;"></i>
        </a>
      </li>
      <li>
        <a href="https://www.tiktok.com/@abdulkerim.oumer8" target="_blank">
          <img src="images/tiktok-color-icon.png" style="width: 24px; height: 24px;" alt="tiktok">
        </a>
      </li>
      <li>
        <a href="https://t.me/zidl1" target="_blank">
          <i class="fa fa-telegram" style="font-size:24px; color: dodgerblue;"></i>
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/@abdulkerimoumer8464" target="_blank">
          <i class="fa fa-youtube-play" style="font-size:24px; color:red; background:#fff;"></i>
        </a>
      </li>
    </ul>
  </div>
</div>
  

    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="./scripts/customer.js"></script>
    <script>
      var scrollToContactButtons = document.querySelectorAll('.scrollToContact');
      var contactSection = document.getElementById('contact');
    
      scrollToContactButtons.forEach(function(button) {
        button.addEventListener('click', function() {
          contactSection.scrollIntoView({ behavior: 'smooth' });
        });
      });
    </script>
    <script>
      var imageUrls1 = ['./images/a1.jpg', './images/a2.jpg', './images/a3.jpg', './images/a4.jpg', './images/a5.jpg', './images/a6.jpg', './images/a7.jpg'];
      var imageElement1 = document.getElementById('card_image');
      var currentIndex1 = 0;
    
      var imageUrls2 = ['./images/b1.jpg', './images/b2.jpg', './images/b3.jpg', './images/b4.jpg'];
      var imageElement2 = document.getElementById('card_image2');
      var currentIndex2 = 0;
    
      function changeImage() {
        imageElement1.classList.remove('fade-in');
        imageElement2.classList.remove('fade-in');
    
        setTimeout(function() {
          imageElement1.src = imageUrls1[currentIndex1];
          imageElement1.classList.add('fade-in');
    
          imageElement2.src = imageUrls2[currentIndex2];
          imageElement2.classList.add('fade-in');
    
          currentIndex1++;
          currentIndex2++;
    
          if (currentIndex1 >= imageUrls1.length) {
            currentIndex1 = 0;
          }
    
          if (currentIndex2 >= imageUrls2.length) {
            currentIndex2 = 0;
          }
        }, 500);
      }
    
      setInterval(changeImage, 3000);
    </script>
     <script>
  const form = document.getElementById('contact-form');
  const nameInput = document.getElementById('name');
  const emailInput = document.getElementById('email');
  const phoneInput = document.getElementById('phone');
  const messageInput = document.getElementById('message');
  const errorName = document.getElementById('error-name');
  const errorEmail = document.getElementById('error-email');
  const errorPhone = document.getElementById('error-phone');
  const errorMessage = document.getElementById('error-message');

  function validateName() {
    let nameValue = nameInput.value.trim();

    if (nameValue === '') {
      errorName.textContent = 'Please enter your name.';
      return false;
    }

    let nameRegex = /^[a-zA-Z\s]+$/;
    if (!nameRegex.test(nameValue)) {
      errorName.textContent = 'Name can only contain alphabets and spaces.';
      return false;
    }

    errorName.textContent = '';
    return true;
  }

  function validateEmail() {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value.trim())) {
      errorEmail.textContent = 'Please enter a valid email address.';
      return false;
    } else {
      errorEmail.textContent = '';
      return true;
    }
  }

  function validatePhone() {
    const phoneRegex = /^\+?\d{1,3}?[-.\s]?\(?\d{1,3}\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}$/;
    if (!phoneRegex.test(phoneInput.value.trim())) {
      errorPhone.textContent = 'Please enter a valid phone number.';
      return false;
    } else {
      errorPhone.textContent = '';
      return true;
    }
  }

  function validateMessage() {
    let messageValue = messageInput.value.trim();

    if (messageValue === '') {
      errorMessage.textContent = 'Please enter a message.';
      return false;
    }

    let messageRegex = /^[a-zA-Z0-9\s]+$/;
    if (!messageRegex.test(messageValue)) {
      errorMessage.textContent = 'Message can only contain alphabets, numbers, and spaces.';
      return false;
    }

    errorMessage.textContent = '';
    return true;
  }

  async function handleSubmit(event) {
    event.preventDefault();

    const isNameValid = validateName();
    const isEmailValid = validateEmail();
    const isPhoneValid = validatePhone();
    const isMessageValid = validateMessage();

    if (isNameValid && isEmailValid && isPhoneValid && isMessageValid) {
      try {
        const formData = {
          name: nameInput.value,
          email: emailInput.value,
          phone: phoneInput.value,
          message: messageInput.value
        };

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            console.log(response);
          }
        };

        xhttp.open("POST", "index.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        var params = Object.keys(formData).map(function(key) {
          return encodeURIComponent(key) + "=" + encodeURIComponent(formData[key]);
        }).join("&");

        alert("message sent successfully")

        xhttp.send(params);
      } catch (error) {
        console.error('Error sending email:', error);
      }
    }
  }
  nameInput.addEventListener('change', validateName);
nameInput.addEventListener('blur', validateName);

emailInput.addEventListener('change', validateEmail);
emailInput.addEventListener('blur', validateEmail);

phoneInput.addEventListener('change', validatePhone);
phoneInput.addEventListener('blur', validatePhone);

messageInput.addEventListener('change', validateMessage);
messageInput.addEventListener('blur', validateMessage);

  form.addEventListener('submit', handleSubmit);
</script>

    <script>
      function toggleNavigation() {
        const nav1 = document.getElementById('menu');
        nav1.classList.toggle('hidden');
        const nav2 = document.getElementById('menu2');
        nav2.classList.toggle('hidden');
      }
    </script>
       <script>
        let buttonText = "Read More/ተጨማሪ ያንብቡ";
     
     function Readmore() {
       const lessText = "Read Less/ያነሰ ያንብቡ";
       const moreText = "Read More/ተጨማሪ ያንብቡ";
     
       const readmoreElement = document.getElementById('readmore');
       if (readmoreElement) {
         readmoreElement.classList.toggle('hidden');
       }
     
       const buttonElement = document.getElementById('readmorebutton');
       if (buttonElement) {
         if (buttonText === moreText) {
           buttonText = lessText;
         } else {
           buttonText = moreText;
         }
         buttonElement.textContent = buttonText;
       }
     }
     
     
     const englishContent = document.querySelectorAll('.english-content');
     const amharicContent = document.querySelectorAll('.amharic-content');
     const languageSwitch = document.getElementById('cb2-7');
     
     for (let i = 0; i < amharicContent.length; i++) {
     
     
       amharicContent[i].style.display = 'none';
     
     }
     
     
     
     
     languageSwitch.addEventListener('change', () => {
       if (languageSwitch.checked) {
         //englishContent.style.display = 'none';
         //amharicContent.style.display = 'block';
         for (let i = 0; i < amharicContent.length; i++) {
     
     
     amharicContent[i].style.display = 'block';
     
     }
     
     for (let i = 0; i < englishContent.length; i++) {
     
     
     englishContent[i].style.display = 'none';
     
     }
     
       } else {
         //englishContent.style.display = 'block';
         //amharicContent.style.display = 'none';
         for (let i = 0; i < amharicContent.length; i++) {
     
     
     amharicContent[i].style.display = 'none';
     
     }
     
     for (let i = 0; i < englishContent.length; i++) {
     
     
     englishContent[i].style.display = 'block';
     
     }
       }
     });
         </script>
   


</body>
  
</html>