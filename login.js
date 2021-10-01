function validate(){
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    if(username=="admin" && password=="user"){
        alert("LOGIN SUCCESSFUL");
        return false;
    }
    else
    {
        alert("LOGIN FAILED")
        redirect('/login.html')
    }

}

function newpage(){
    document.body.innerHTML = '<script src="index.html"></script>'
}
function mypage(){
    document.body.innerText = '<script src="manager.php"></script>'
}