function delete_user(event, name){
    event.preventDefault();

    let xhttp = new XMLHttpRequest();
    xhttp.open("post", "../controller/delete_user.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + name);
    
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            document.getElementById("display").innerText = this.response;
        }
    };
}


    function search_user1(){
        search = document.getElementById("search").value;
        let xhttp = new XMLHttpRequest();
        xhttp.open("post", "../controller/search_user.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("search=" + search);
        
        xhttp.onreadystatechange = function(){
    
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("table").innerHTML = this.responseText;
            }
        };

}