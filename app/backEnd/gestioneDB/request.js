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
        .then(result =>{
            arr = JSON.parse(result);
                if (arr.response == "ok") {
                console.log(arr.response);
                window.location.replace("index.php");
            }else{
                alert("Utente non registrato!");
                document.getElementById('rMail').value = '';
                document.getElementById('rPsw').value = '';
            }
        })  
        .catch(error => console.log('error', error));
}

function userLogin(){
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
        redirect: 'follow',
        credentials:"include"
        };

        fetch("http://papopep.altervista.org/GiveMeMusic/API/user.php", requestOptions)
        .then(response => response.text())
        .then(result => 
            {
                console.log(result);
                arr = JSON.parse(result);
                if (arr.response == "ok") {
                    console.log(arr.response);
                    window.location.replace("user.php");
                }else{
                    alert("Credenziali errate!");
                    document.getElementById('lMail').value = '';
                    document.getElementById('lPsw').value = '';
                }
            })
        .catch(error => console.log('error', error));
        console.log(mail,psw);
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
    
    if(newpsw == confnewpsw){
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
    }else{
        alert("Le password sono diverse!");
        document.getElementById("nPsw").value = '';
        document.getElementById("cnPsw").value = '';
    }
}

function sendMail(){
    var string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    let OTP = '';
      
    var len = string.length;
    for (let i = 0; i < 6; i++ ) {
        OTP += string[Math.floor(Math.random() * len)];
    }
    console.log(OTP);

    Email.send({
    Host: "smtp.gmail.com",
    Username: sender,
    Password:password,
    To: receiver,
    From: sender,
    Subject: "Check Email Sending",
    Body: content,
    }).then(function (message) {
        alert("Email sent successfully")
        });
}

function getGenresFromDB(){
    var myHeaders = new Headers();
    myHeaders.append("Cookie", "PHPSESSID=ef7a8ece01cd748d745abdaefc854ba8");
    
    var requestOptions = {
      method: 'GET',
      headers: myHeaders,
      redirect: 'follow'
    };
    
    fetch("http://papopep.altervista.org/GiveMeMusic/API/music.php", requestOptions)
      .then(response => response.text())
      .then(result =>{
        const j = JSON.parse(result)
        for(var i = 0; i < j.length; i++){console.log(result)}
    }).catch(error => console.log('error', error));
}


// const j = JSON.parse(result)
//         for(var i = 0; i < j.albums.items.length; i++){
//             var sImgLink = j.albums.items[i].images[1].url;
//             var sId = j.albums.items[i].id;
//             var sArtist = j.albums.items[i].artists[0].name;
//             var sTitle = j.albums.items[i].name;
//             var sReleaseDate = j.albums.items[i].release_date;