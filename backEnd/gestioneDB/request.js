var url = "http://papopep.altervista.org/app/backEnd/API/user.php";
const PHPSESSID = getCookie("PHPSESSID");

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
  
    fetch(url, requestOptions)
        .then(response => response.text())
        .then(result =>{
            // console.log(result);
            arr = JSON.parse(result);
            sessionStorage.setItem('id',arr.data.id);
                if (arr.response == "ok") {
                console.log(arr.response);
                window.location.replace("user.php");
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

        fetch(url, requestOptions)
        .then(response => response.text())
        .then(result => 
            {
                arr = JSON.parse(result);
                sessionStorage.setItem('id',arr.data.id);
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
          
          fetch(url, requestOptions)
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

function getGenresFromDB(){
    var myHeaders = new Headers();
    myHeaders.append("Cookie", "PHPSESSID=" + PHPSESSID);

    var requestOptions = {
    method: 'GET',
    headers: myHeaders,
    redirect: 'follow'
    };

    fetch("http://papopep.altervista.org/app/backEnd/API/like.php?id_user=" + sessionStorage.getItem('id'), requestOptions)
    .then(response => response.text())
    .then(result => {
        console.log(result);
        const k = JSON.parse(result);
        var myHeaders = new Headers();
        myHeaders.append("Cookie", "PHPSESSID=" + PHPSESSID);
        
        var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };
        
        fetch("http://papopep.altervista.org/app/backEnd/API/music.php", requestOptions)
        .then(response => response.text())
        .then(result =>{
            // console.log(result);
            const j = JSON.parse(result);
            for(var i = 0; i < j.data.length; i++){
                var id = j.data[i].id;
                var genreSeed = j.data[i].name;
                if(k.data == null){
                    var g = "<div class='text-container' id='seed"+id+"' onclick='like(this.id)' style='color: black'>"+genreSeed+"<br/><i id='likeButton' class='bx bxs-like bx-md' style='color: black'></i></div>";
                }else if(k.data[`${id}`] == undefined){
                var g = "<div class='text-container' id='seed"+id+"' onclick='like(this.id)' style='color: black'>"+genreSeed+"<br/><i id='likeButton' class='bx bxs-like bx-md' style='color: black'></i></div>";
                }else{
                    var g = "<div class='text-container' id='seed"+id+"' onclick='like(this.id)' style='color: green'>"+genreSeed+"<br/><i id='likeButton' class='bx bxs-like bx-md' style='color: black'></i></div>";
                }
                document.getElementById("imgGallery").innerHTML += g; 
            }
        }).catch(error => console.log('error', error));
    })
    .catch(error => console.log('error', error));
}

function like(id){
    if(document.getElementById(id).classList.contains("fill")){
        removeLike(id);
        document.getElementById(id).classList.remove("fill");
        document.getElementById(id).style.color = "black";
    }else{
        addike(id);
        document.getElementById(id).classList.add("fill");
        document.getElementById(id).style.color = "green";
    }
}

function addike(id){
    id_genre = id.split("seed");
    console.log(id_genre);
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
    myHeaders.append("Cookie", "PHPSESSID=" + PHPSESSID);
    
    var urlencoded = new URLSearchParams();
    urlencoded.append("id_user", sessionStorage.getItem('id'));
    urlencoded.append("id_genre", id_genre[1]);
    
    var requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: urlencoded,
      redirect: 'follow'
    };
    
    fetch("http://papopep.altervista.org/app/backEnd/API/like.php", requestOptions)
      .then(response => response.text())
      .then(result => console.log(result))
      .catch(error => console.log('error', error));
}

function removeLike(id){
    id_genre = id.split("seed");
    console.log(id_genre);
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
    myHeaders.append("Cookie", "PHPSESSID=" + PHPSESSID);
    
    var urlencoded = new URLSearchParams();
    urlencoded.append("id_user", sessionStorage.getItem('id'));
    urlencoded.append("id_genre", id_genre[1]);
    urlencoded.append("del", "true");
    
    var requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: urlencoded,
      redirect: 'follow'
    };
    
    fetch("http://papopep.altervista.org/app/backEnd/API/like.php", requestOptions)
      .then(response => response.text())
      .then(result => console.log(result))
      .catch(error => console.log('error', error));
}

function getLikes(){
    var myHeaders = new Headers();
    myHeaders.append("Cookie", "PHPSESSID=" + PHPSESSID);

    var formdata = new FormData();
    formdata.append("id_user", sessionStorage.getItem('id'));
    formdata.append("obtLikes", "true");

    var requestOptions = {
    method: 'GET',
    headers: myHeaders,
    body: formdata,
    redirect: 'follow'
    };

    fetch("http://papopep.altervista.org/app/backEnd/API/like.php?id_user=" + sessionStorage.getItem('id'), requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));
}

function getCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded .split('; ');
    let res;
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) res = val.substring(name.length);
    })
    return res;
}