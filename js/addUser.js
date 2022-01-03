
function addUser() {
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let password = document.getElementById("password").value;
    let subscription = document.getElementById("subscription").value;
    let remark = document.getElementById("remark").value;
    console.log(phone);
    console.log(remark);

    if(name.length==0 || phone.length==0 || password.length==0 || subscription.length==0 || remark.length==0){
        alert("Please fill all details");
    }else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "database/addUser.php", true);
        xmlhttp.onload = function () {
            if (xmlhttp.status == 200) {
                console.log(xmlhttp.responseText);
                if (xmlhttp.responseText == "true") {
                    alert("User added successfully");
                    window.location.href = "./myUsers.php";
                } else {
                    alert("Failed! Please enter correct userId and password");
                }
            } else {
                console.log("problem occure");
            }
        };
        const mydata = { name: name, phone: phone, password: password, subscription: subscription, remark: remark };
        const data = JSON.stringify(mydata);
        xmlhttp.send(data);
    }
   

}