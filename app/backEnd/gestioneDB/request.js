var but = document.getElementById('reg');

but.onclick = function connect() {
  var mail = document.getElementsByName("rMail");
  var psw = document.getElementsByName("rPsw");
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
}
  