function userRegister(){
    var mail = document.getElementById("rMail").value;
    var psw = document.getElementById("rPsw").value;
    var usrn = document.getElementById("rUsrn").value;

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
  
    var raw = JSON.stringify({
        "usrn": usrn,
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

function userLogin() 
{
    var mail = document.getElementById("lMail").value;
    var psw = document.getElementById("lPsw").value;

        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

        var urlencoded = new URLSearchParams();
        urlencoded.append("lMail", mail);
        urlencoded.append("lPsw", psw);

        var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: urlencoded,
        redirect: 'follow'
        };

        fetch("http://papopep.altervista.org/GiveMeMusic/API/user.php", requestOptions)
        .then(response => response.text())
        .then(result => 
            {
                if(result != ""){
                    console.log(result);
                    arr = JSON.parse(result);
                    if (arr.response = "ok") {
                        console.log(arr.response);
                        window.location.replace("webApp/main.php");
                    }
                }else{
                    alert("User not registered!");
                    document.getElementById('lMail').value = '';
                    document.getElementById('lPsw').value = '';
                }
            })
        .catch(error => console.log('error', error));
}

function resetPsw(){
    var mail = document.getElementById("rMail").value;
    var newpsw = document.getElementById("nPsw").value;
    var confnewpsw = document.getElementById("cnPsw").value;

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    
    var raw = JSON.stringify({
      "mail": mail,
      "newpsw": newpsw
    });
    
    var requestOptions = {
      method: 'PATCH',
      headers: myHeaders,
      body: raw,
      redirect: 'follow'
    };
    
    fetch("http://papopep.altervista.org/GiveMeMusic/API/user.php", requestOptions)
      .then(response => response.text())
      .then(result => 
        {
                console.log(result);
                arr = JSON.parse(result);
                if (arr.response = "ok") {
                    console.log(arr.response);
                    window.location.replace("index.php");
                }
        })
      .catch(error => console.log('error', error));
}

