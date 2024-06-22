<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="x-icon" href="vhageri.png" />
    <link rel="stylesheet" href="vhageri.css" />
    <title>Vhageri</title>
  </head>

  <body>
    <div class="container1" id="Home">
      <div class="Half" id="firstHalf">
        <img
          class="mainImage"
          src="WhatsApp Image 2024-06-10 at 21.23.22_4893d42e.jpg"
          alt="" />

        <!-- clock that shows what time it is -->
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
          <ul>
            <li><button onclick="gotoHome()">Home</button></li>
            <li><button onclick="gotoBlog()">Blog</button></li>
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
          <div class="">
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
    <br />

    <!-- starting of blog code -->
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
    <br /><br />

    <div class="projects"></div>
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
    <div class="foot">
      <form action="includes/formHandler.inc.php" method="post" id="reply" >
        <h3>leave me a messege</h3>
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
        <button id="submit" >Send</button>
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

            <h2>there is no comments yet</h2>
            
            </div>";

          } else {
            foreach ($results as $row) {
            
            echo htmlspecialchars($row["Surname"]);
            echo htmlspecialchars($row["FirstName"]);
            echo htmlspecialchars($row["Comments"]);
            echo htmlspecialchars($row["Created_at"]);
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

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script type="text/javascript" src="vhageri.js"></script>
  </body>
</html>
