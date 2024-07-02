document.addEventListener('keypress',(event)=>{
    if(event.key==='Enter'){
        document.getElementById("sign-up").click();
        

}})


function validatePassword(event) {
    var username = document.getElementById("newUsername").value;
    var password = document.getElementById("newPassword").value;

    if (username === "" || password === "") {
        alert("Username and password cannot be empty");
        event.preventDefault(); // Prevent form submission
        return false;
    }

    if(password.length < 8)
    {
        alert("password must be atleast 8 character long");
        event.preventDefault(); // Prevent form submission
        return false;
    }


    return true; 
}