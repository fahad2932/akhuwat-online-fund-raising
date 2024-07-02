function fundraising()
{

    let name = document.getElementById('prog-name').value;
    let country = document.getElementById('country').value;
    let city = document.getElementById('city').value;
    let amount = document.getElementById('reqAmount').value;
    let description = document.getElementById('description').value;
    let account_name = document.getElementById('accNum').value;
    let account_number = document.getElementById('accName').value;

    $.ajax
    ({
        url: 'fundraisi.php',
        type: "POST",
        data: { 'functionname': 'buyer_signup', 'arguments': [Fname, Lname, Phone, DOB, City, Address, Gender, Username, Password, CNIC] },
        success: function (d) {
            document.getElementById('msg').innerText = d;
        }
    })
    
};