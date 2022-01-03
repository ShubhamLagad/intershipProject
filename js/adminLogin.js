
function adminLogin() {
    let userId = document.getElementById("userId").value;
    let password = document.getElementById("password").value;
    console.log(userId);
    console.log(password);


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "database/adminLogin.php", true);
    xmlhttp.onload = function () {
        if (xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            if (xmlhttp.responseText == "true") {
                alert("Login successfull");
                window.location.href = "./myUsers.php";
            } else {
                alert("Login Failed! Please enter correct userId and password");
            }
        } else {
            console.log("problem occure");
        }
    };
    const mydata = { userId: userId, password: password };
    const data = JSON.stringify(mydata);
    xmlhttp.send(data);

}