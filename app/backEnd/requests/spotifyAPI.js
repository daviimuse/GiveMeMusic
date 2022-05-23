var code = "BQDo-lkC-4mEL9Hs2LfktWnJPDEzi4mRoxER8O6vqrY0O_IgVGri33eG_H04vGUDdMmV0mHRphrVBH5_eYmlAZJrKxVlIUCbdU6ESADCnoiDAiXVItaK0b6RWQpkIneDzbMLNnreDgyt1hFgxywhNlmZC83p"; //1 hour 
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
  document.getElementById("imgGallery").innerHTML = "";
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
            
            var s = "<div class='a-box'><div class='img-container'><div class='img-inner'><div class='inner-skew'><img draggable='false' id="+ sId + " src="+ sImgLink +" class='songImage myImg' name=" + sTitle + " ></div></div></div><div class='text-container'><h3>"+ sTitle+ "</h3><div>" + sArtist + "</div></div>";
            //var s = "<a href='#m2-o'><div class='a-box'><div class='img-container'><div class='img-inner'><div class='inner-skew'><img draggable='false' id="+ sId + " src="+ sImgLink +" class='songImage myImg' name=" + sTitle + " ></div></div></div><div class='text-container'><h3>"+ sTitle+ "</h3><div>" + sArtist + "</div></div></a><div class='modal-container' id='m2-o' style='--m-background: hsla(0, 0%, 0%, .2);'><div class='modal'><h1 class='modal__title'>"+sTitle+"</h1><p class='modal__text'><img draggable='false' id="+ sId + " src="+ sImgLink +" class='songImage myImg' name=" + sTitle + " ><br/>"+sArtist+"</p><br><p class='modal__text'>"+sReleaseDate+"</p><a href='#m2-c' class='link-2'></a></div></div>";
            //<a href="#m2-o"><div class='a-box'><div class='img-container'><div class='img-inner'><div class='inner-skew'><img draggable='false' id="+ sId + " src="+ sImgLink +" class='songImage myImg' name=" + sTitle + " ></div></div></div><div class='text-container'><h3>"+ sTitle+ "</h3><div>" + sArtist + "</div></div></a><div class="modal-container" id="m2-o" style="--m-background: hsla(0, 0%, 0%, .2);"><div class="modal"><h1 class="modal__title">sTitle</h1><p class="modal__text">sArtist</p><br><p class="modal__text">sReleaseDate</p><a href="#m2-c" class="link-2"></a></div></div>
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

async function searchItems(){
  var searchValue = document.getElementById("searchText").value;
  var myHeaders = new Headers();
  myHeaders.append("Authorization", "Bearer " + code);
  myHeaders.append("Cookie", "sp_t=f8b577829ffecf0b46dce7d7d89ad096");
  
  var requestOptions = {
    method: 'GET',
    headers: myHeaders,
    redirect: 'follow'
  };

  document.getElementById("imgGallery").innerHTML = "";

  fetch("https://api.spotify.com/v1/search?q=artist: " + searchValue + "&type=track,artist&market=IT&limit=35&offset=5", requestOptions)
    .then(response => response.text())
    .then(result => {
      const j = JSON.parse(result)
      for(var i = 0; i < j.tracks.items.length; i++){
          var sImgLink = j.tracks.items[i].album.images[1].url;
          var sId = j.tracks.items[i].id;
          var sArtist = j.tracks.items[i].album.artists[0].name;
          var sTitle = j.tracks.items[i].album.name;
          // var sReleaseDate = j.albums.items[i].release_date;
        
          var s = "<div class='a-box'><div class='img-container'><div class='img-inner'><div class='inner-skew'><img draggable='false' id="+ sId + " src="+ sImgLink +" class='songImage myImg' name=" + sTitle + " ></div></div></div><div class='text-container'><h3>"+ sTitle+ "</h3><div>" + sArtist + "</div></div>"; //"<br/ ><br/ >" + sReleaseDate + 
          document.getElementById("imgGallery").innerHTML += s; 
      }
  })
  .catch(error => console.log('error', error));
}