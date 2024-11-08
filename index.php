<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="x-icon" href="vhageri.png" />
    <link rel="stylesheet" href="vhageri.css" />
    <link rel="stylesheet" href="phoneScreen.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ADLaM+Display&family=DM+Serif+Display:ital@0;1&family=Leckerli+One&display=swap"
     rel="stylesheet">



    
    <title>Vhageri.com</title>
  </head>

  <body>

<!-- intro section -->
    <div class="container1" id="Home">
      <div class="Half" id="firstHalf">
        <img
          class="mainImage"
          src="WhatsApp Image 2024-06-10 at 21.23.22_4893d42e.jpg"
          alt="" />

 <!-- clock section -->
        <div class="clock">
          <div class="clock-center"></div>
          <p>mt</p>
          <div class="hours-container" id="hours-hand">
            <div class="hours"></div>
          </div>
          <div class="minutes-container" id="minutes-hand">
            <div class="minutes"></div>
          </div>
          <div class="seconds-container" id="seconds-hand">
            <div class="seconds"></div>
          </div>
        </div>
      </div>

      <div class="Half" id="secondHalf">
        <div class="manuBar" id="manu">
          <button class="closeButton" onclick= "openManu()">
            <img width="24" height="24" src="https://img.icons8.com/material-sharp/24/FFFFFF/delete-sign.png" alt="delete-sign"/>
          </button>
          <ul>
            <li><button onclick="gotoHome()">Home</button></li>
            <li><button onclick="gotoBlog()">Blog</button></li>
            <li><button onclick="gotoProjects()">projects</button></li>
            <li><button onclick="gotoSkills()">Skills</button></li>
            <li><button onclick="gotoReply()">FeedBlack</button></li>
          </ul>
        </div>
        <div class="ppcontainer">
          <div class="ptrofile" id="ptrofile">
            <img
              src="whatsapp image 2023-11-23 at 17.57.34.jpeg"
              alt="profilepic" />
          </div>
          <div class="name">
            <h1>
              Mugeri Thuso
              <p>software developer</p>
            </h1>
            <br />
            <div class="social">
              <a href="https://www.linkedin.com/in/thuso-collen-mugeritc/">
                <img
                  src="317725_linkedin_social_icon.svg"
                  alt="linkdin"
                  class="in" />
              </a>
              <a href="mailto:mugerithuso@gmail.com">
                <img
                  src="4202011_email_gmail_mail_logo_social_icon.svg"
                  alt="gmal"
                  class="mail" />
              </a>

              <div class="cvButton">
                <a
                  class="download-link"
                  href="professional modern CV resume.pdf"
                  download
                  >Download CV</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

<!-- blog section -->
    <div class="blog" id="Blog">
      <div class="box">
        <div class="ptrofile">
          <img src="photo1700719769.jpeg" alt="profile" />
        </div>
        <div class="blogText">
          <p>
            In today's fast-paced digital world, having the right skills and
            expertise can be the key to success.
            <strong>I'm Thuso Collen Mugeri</strong> , a tech-savvy professional
            who excels in the realms of web development, mobile app development,
            and Linux. My comprehensive knowledge and proficiency in these areas
            make me the ideal partner for businesses and individuals seeking
            cutting-edge solutions. In this blog, I'll take you through these
            three core skills that set me apart in the digital landscape.
            <br /><br />

            In the dynamic digital landscape, I stand out as a tech professional
            with a unique skill set encompassing web development, mobile app
            development, and Linux expertise. My dedication to staying current
            with industry trends and best practices ensures that I deliver
            solutions that meet the demands of the ever-evolving tech world.
            When you partner with me, you're not just hiring a skilled developer
            and system administrator; you're gaining a trusted ally who is
            committed to helping you succeed in the digital realm. Explore my
            services today and unlock the full potential of your digital
            projects.
          </p>
        </div>
      </div>
    </div>
    <br />
<!-- project section -->
    <div  class="projects" id="projects">

        <h3>Some of my rojects</h3>
        

        <div class="project-box" id="project-box">
          <div class="one">
            <h4> Web Apps</h4>
            <div><img width="68" height="68" src="https://img.icons8.com/isometric/50/web-design.png" alt="web-design"/></div>
            <button onclick="VewOthers()">View</button>
          </div>
          <div class="two">
            <h4>mobile Apps</h4>
            <div><img width="68" height="68" 
              src="https://img.icons8.com/external-smashingstocks-isometric-smashing-stocks/55/external-mobile-app-internet-of-things-smashingstocks-isometric-smashing-stocks.png" 
              alt="external-mobile-app-internet-of-things-smashingstocks-isometric-smashing-stocks"/>
            </div>
            <button onclick="VewOthers()">View</button>
          </div>
          <div class="three">
            <h4>Games</h4>
            <div><img width="68" height="68"
               src="https://img.icons8.com/color/48/controller.png"
                alt="controller"/>
              </div>
              <button onclick="VewOthers()">View</button>
          </div>
          <div class="four">
            <h4>Other</h4>
            <div><img width="78" height="78" src="https://img.icons8.com/3d-fluency/94/pencil-cup.png" alt="pencil-cup"/></div>
            <button onclick="VewOthers()">View</button>
          </div>
        </div>
        <div class="display" id="display">
          <button class="prjCosse" onclick="projectProV()">
            <img width="48" height="48" src="https://img.icons8.com/material-rounded/48/4D4D4D/close-window.png" alt="close-window"/>
          </button>
          <img  height="50" width="50" src="icons8-load.gif" alt="load projects">
          <p>projects will be uploded soon</p>
        </div>

    </div>
    <br>
<!-- skills section  -->
    <div class="skilss" id="Skills">
      <div class="card">
        <div class="head">
          <div class="skillPic">
            <img
              width="50"
              height="50"
              src="https://img.icons8.com/ios-filled/50/google-code.png"
              alt="google-code" />
          </div>
          <h3>web development</h3>
        </div>
        <div class="skilText">
          <p>
            As a web developer, I possess the skill set to transform your
            digital vision into reality. Whether you're launching a personal
            blog, a corporate website, or an e-commerce platform, I'm
            well-versed in a variety of programming languages, frameworks, and
            design principles. My expertise in front-end and back-end
            development ensures that your website not only looks stunning but
            also functions seamlessly. With my acute eye for detail, I can
            create responsive and user-friendly websites that leave a lasting
            impression.
          </p>
        </div>
      </div>
      <div class="card">
        <div class="head">
          <div class="skillPic">
            <img
              width="50"
              height="50"
              src="https://img.icons8.com/ios-filled/50/apple-app-store--v1.png"
              alt="apple-app-store--v1" />
          </div>
          <h3>mobile app development</h3>
        </div>
        <div class="skilText">
          <p>
            In a mobile-centric world, the demand for innovative and
            user-friendly mobile apps is higher than ever. My proficiency as a
            mobile app developer is your gateway to a world of possibilities.
            Whether you have a unique app idea or need to improve an existing
            one, I can design and build apps that cater to your specific needs.
            With a strong grasp of both Android and iOS app development, I
            ensure that your app is not only visually appealing but also
            high-performing and secure.
          </p>
        </div>
      </div>
      <div class="card">
        <div class="head">
          <div class="skillPic">
            <img
              width="50"
              height="50"
              src="https://img.icons8.com/external-those-icons-flat-those-icons/50/000000/external-Linux-logos-and-brands-those-icons-flat-those-icons.png"
              alt="external-Linux-logos-and-brands-those-icons-flat-those-icons" />
          </div>
          <h3>Linux</h3>
        </div>

        <div class="skilText">
          <p>
            Linux, known for its robustness and versatility, is a powerful
            operating system widely used for servers, cloud computing, and more.
            My expertise in Linux extends to system administration, security,
            and maintenance. Whether you're looking to set up a secure server,
            optimize your Linux-based infrastructure, or troubleshoot technical
            issues, I can provide the guidance and support you need. My in-depth
            understanding of Linux makes me the ideal choice for businesses
            seeking reliable and efficient IT solutions.
          </p>
        </div>
      </div>
    </div>
<!-- comment section  -->
    <div class ="foot">
     
        <form action="includes/formHandler.inc.php" method="post" id="reply" >
        <h3>LEAVE A COMMENT</h3>
        <p>FirstName:</p>
        <input
          type="text"
          name="firstName"
          placeholder="firstName"
          class="formInput"
          id="firstName" />
        <p>Surname:</p>
        <input
          type="text"
          name="Surname"
          placeholder="Surname"
          class="formInput"
          id="Surname" />
        <p>Phone Number:</p>
        <input
          type="cell"
          name="phoneNumber"
          placeholder="Phone Number"
          class="formInput"
          maxlength="10"
          id="phoneNumber" />
        <p>Email:</p>
        <input
          type="Email"
          name="Email"
          placeholder="Email"
          class="formInput"
          id="Email" />
        <p>Messege:</p>
        <textarea
          class="formInput"
          id="messege"
          placeholder="messege"
          placeholder="messege"
          name="comment"
          id="messege"></textarea>
        <button id="submit" >post</button>
        <div class="alert" id="alert">
          <p>
            your messge is submited succesfully.<br />
            I will get back to you if needs be.... <br /><br />
            <strong>Thank you for our feedback....!</strong>
          </p>
         
        </div>

        <p class="missingValueAlert" id="missing">
          Fill in missing all missing vallues...!!!
        </p>
       </form>
      
      

      <div class="commentsBox">
        <h1>latest comments</h1>

        <section class= "comment-card">
        
          <?php

            $num = 5;

            include_once("post.php");

            if (empty($results)) {
              echo "<div>
              <h2 >there is no comments yet</h2>
              </div>";

            } else {
              foreach ($results as $row) {
              
              $surname = htmlspecialchars($row["Surname"]);
              $firstName = htmlspecialchars($row["FirstName"]);
              $messege = htmlspecialchars($row["Comments"]);
              $time = htmlspecialchars($row["Created_at"]);

              echo"
              <div>
              <h3>$surname $firstName</h3>
              <hr>
              <p>$messege</p>
              <h6>$time</h6>
              </div>
              ";
              
              }
              
            }

          ?>    
        </section>
      </div>

      <button class="manuIcon" id="manubtn" onclick="openManu()">
        <img
          width="30"
          height="30"
          src="https://img.icons8.com/doodle/30/000000/menu.png"
          alt="menu" />
      </button>

      <div class="links">
        
        <a href="https://www.facebook.com/roitwani.mudau" target="facebook">
          <img width="40" height="40" src="icons8-facebook.gif" />
        </a>

        <a
          href="https://www.tiktok.com/@mugeritc?is_from_webapp=1&sender_device=pc"
          target="tiktok">
          <img width="40" height="40" src="icons8-tiktok.gif" />
        </a>

        <a href="https://twitter.com/mugerithuso" target="twitter">
          <img width="40" height="40" src="icons8-twitter.gif" />
        </a>

        <a href="https://wa.me/qr/DP5NREXGBTZCJ1" target="whatsApp">
          <img width="40" height="40" src="icons8-whatsapp.gif" />
        </a>
        
          
        </div>
      
    </div>

    
    <script type="text/javascript" src="vhageri.js"></script>
  </body>
</html>
