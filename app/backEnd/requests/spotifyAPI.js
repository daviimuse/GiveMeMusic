var code = "BQDVM5sJYpveEgggnAGeWBrdsREBPokNuQImfXX_AdkEErY0NQreF_ojhaW7CSavn4n3-UxWlIyJAwvymrEGBMSyDKuh-6u3OQNmeUDcduOQPcgqBRoobdGvlpeJuBWHjOhLr25qwQsdc7PMLluUcx3d7mNj"; //1 hour 
var client_id = 'bb62291edbda4449bf505d05ea4f1624';
var client_secret = 'fadc3642905b421094f42804149d875d';

async function getAccessToken(){
  var authOptions = {
    url: 'https://accounts.spotify.com/api/token',
    headers: {
      'Authorization': 'Basic ' + ((client_id + ':' + client_secret).toString('base64'))
    },
    form: {
      grant_type: 'client_credentials'
    },
    json: true
  };

  request.post(authOptions, function(error, response, body) {
    if (!error && response.statusCode === 200) {
      var token = body.access_token;
    }
  });
  console.log(token);
}

async function getRefreshToken(){
  var refresh_token = req.query.refresh_token;
  var authOptions = {
      url: 'https://accounts.spotify.com/api/token',
      headers: { 'Authorization': 'Basic ' + (new Buffer(client_id + ':' + client_secret).toString('base64')) },
      form: {
          grant_type: 'refresh_token',
          refresh_token: refresh_token
      },
      json: true
  };
  request.post(authOptions, function (error, response, body) {
      if (!error && response.statusCode === 200) {
          var access_token = body.access_token;
          res.send({
              'access_token': access_token
         });
      }
  });
}

function test(){
  console.log("test!");
}

function polling(){
  getNewReleases();
  setTimeout(polling, 18000000);
  // document.body.innerHTML = "";
}

async function getNewReleases(){
    var myHeaders = new Headers();
    myHeaders.append("Authorization", "Bearer " + code);
    var requestOptions = {
    method: 'GET',
    headers: myHeaders,
    redirect: 'follow'
    };

    fetch("https://api.spotify.com/v1/browse/new-releases?country=IT&limit=35&offset=5", requestOptions)
    .then(response => response.text())
    .then(result => {
        const j = JSON.parse(result)
        for(var i = 0; i < j.albums.items.length; i++){
            var sImgLink = j.albums.items[i].images[1].url;
            var sId = j.albums.items[i].id;
            var sArtist = j.albums.items[i].artists[0].name;
            var sTitle = j.albums.items[i].name;
            var sReleaseDate = j.albums.items[i].release_date;
          
            var s = "<div class='a-box'><div class='img-container'><div class='img-inner'><div class='inner-skew'><img draggable='false' id="+ sId + " src="+ sImgLink +" class='songImage myImg' name=" + sTitle + " ></div></div></div><div class='text-container'><h3>"+ sTitle+ "</h3><div>" + sArtist + "</div></div>"; //"<br/ ><br/ >" + sReleaseDate + 
            document.getElementById("imgGallery").innerHTML += s; 
        }
    })
    .catch(error => console.log('error', error));
}

async function getGenres(){
    var myHeaders = new Headers();
    myHeaders.append("Authorization", "Bearer " + code);
    myHeaders.append("Cookie", "sp_t=f8b577829ffecf0b46dce7d7d89ad096");
    
    var requestOptions = {
      method: 'GET',
      headers: myHeaders,
      redirect: 'follow'
    };
    
    fetch("https://api.spotify.com/v1/recommendations/available-genre-seeds", requestOptions)
      .then(response => response.text())
      .then(result => {
        const r = JSON.parse(result)
        for(var m = 0; m < r.genres.length; m++){
            var genres = r.genres[m];
            }
            console.log(genres);
        })
      .catch(error => console.log('error', error));
}

// const searchBox = document.getElementById('searchBox');

// var searchValue = document.getElementById('searchValue').value;

// input.addEventListener("keypress", function(event) {
//   // If the user presses the "Enter" key on the keyboard
//   if (event.key === "Enter") {
//     // Cancel the default action, if needed
//     event.preventDefault();
//     // Trigger the button element with a click
//     const searchBox = document.getElementById('searchBox').click;
//   }
// }); 

// async function searchItems(){
//   var myHeaders = new Headers();
//   myHeaders.append("Authorization", "Bearer " + code);
//   myHeaders.append("Cookie", "sp_t=f8b577829ffecf0b46dce7d7d89ad096");
  
//   var requestOptions = {
//     method: 'GET',
//     headers: myHeaders,
//     redirect: 'follow'
//   };
  
//   fetch("https://api.spotify.com/v1/search?q=artist: " + searchValue+ "&type=track,artist&market=IT&limit=35&offset=5", requestOptions)
//     .then(response => response.text())
//     .then(result => console.log(result))
//     .catch(error => console.log('error', error));
// }