function edit_user(event){
    event.preventDefault();
    let old_name = document.getElementById("old_name").value;
    let name = document.getElementById("new_username1").value;
    let password = document.getElementById("new_password1").value;

    let xhttp = new XMLHttpRequest();
    xhttp.open("post", "../controller/edit_user_check.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("old_name=" + old_name + "&new_username=" + name + "&new_password=" + password );
    
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("display").innerText = this.response;
        }
    };
}

