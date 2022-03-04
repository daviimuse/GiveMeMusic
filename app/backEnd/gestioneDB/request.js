function connect(){
    var mail = document.getElementById("rMail").value;
    var psw = document.getElementById("rPsw").value;

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
  
    var raw = JSON.stringify({
        "mail": mail,
        "psw": psw
    });
  
    var requestOptions = {
        method: 'PUT',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };
  
    fetch("http://papopep.altervista.org/GiveMeMusic/API/user.php", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));

    console.log("User added to database");    
}
  