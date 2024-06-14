 // Your web app's Firebase configuration
 const firebaseConfig = {
    apiKey: "AIzaSyAEJ1q0qyp2AlG1hSnCZSqFUFNJh_u90Pg",
    authDomain: "my-web-8c1de.firebaseapp.com",
    databaseURL: "https://my-web-8c1de-default-rtdb.firebaseio.com",
    projectId: "my-web-8c1de",
    storageBucket: "my-web-8c1de.appspot.com",
    messagingSenderId: "693317968305",
    appId: "1:693317968305:web:9645e9e77e0f710272dd90"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  //reference database
  const visitoresMG = firebase.database().ref('visitores');

  document.getElementById('reply').addEventListener("submit", submitForm);


  function submitForm(e) {
   e.preventDefault();
   
   //getting variables from the form
   var firstName = document.getElementById('firstName').value;
   var Surname = document.getElementById('Surname').value;
   var Email = document.getElementById('Email').value;
   var Messege = document.getElementById('messege').value; 
   var phone = document.getElementById('phoneNumber').value;

   
   if(firstName !="" && Surname !="" && Email !="" && Messege !="" && phone !="" ){
      //saving data to the database
      seveData(firstName,Surname,Email,Messege,phone);

      //enebling success alert messege
      document.getElementById("alert").style.display = "block";
   //desable alert messege
   setTimeout(() => {
         document.getElementById("alert").style.display = "none";
      }, 3000)
   
   
   //reset the  form
   document.getElementById('reply').reset()
   }
   else {

      //eneble missing values alert messege
      document.getElementById("missing").style.display = "block";

      //desable alert messege
      setTimeout(() => {
         document.getElementById("missing").style.display = "none";
      }, 2000)
   }
}
  


  const seveData = ( firstName,Surname,Email, Messege,   phone) => {
   var newvisitoresMG = visitoresMG.push();

   newvisitoresMG.set({
       firstName: firstName,
      Surname: Surname,
      Email: Email,
      Messege: Messege,
      phoneNumber: phone, 

   })
  }

 
