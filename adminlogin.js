

//code to get the button clicked when enter key is pressed
document.addEventListener('keypress',(event)=>{
    if(event.key==='Enter'){
        // console.log('hello');
        document.getElementById("login").click();

}})

function validatePassword(event) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

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
