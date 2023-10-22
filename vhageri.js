function openManu() {
     document.getElementById("drower").style.width = "150px"


}

function closeManu() {
     document.getElementById("drower").style.width="0"
    
}
function scrool(name){
    const element = document.getElementById(name);
    element.scrollIntoView();
    
}
function sendEmail() {
     Email.send({
         Host : "smtp.mailslurp.com",
         Username : "<mailslurp username>",
         Password : "<mailslurp password>",
         To : 'recipient@example.com',
         From : "sender@example.com",
         Subject : "Test email",
         Body : "<html><h2>Header</h2><strong>Bold text</strong><br></br><em>Italic</em></html>"
     }).then(message => alert(message)
     );
     }