var code = "BQCGAtn7H7VmT7P6UNk1Qt88sog6XA496onGe4HwVn_RfaBiyVhELw4GT2OUPejiq_4OcCOz_pItQpjbrcy0iu5tdmngw5uZiqqgh8-ffyZ7vDpODmEaT_8d1QkvgTyC2ON6hOvFNeE8YsaSYg2ps6lUSr6Vrz5SUHQ"; //1 hour 
var client_id = 'bb62291edbda4449bf505d05ea4f1624';
var client_secret = 'fadc3642905b421094f42804149d875d';
const PHPSESSID = getCookie("PHPSESSID");

function test(){
  console.log("test!");
}

function polling(){
  document.getElementById("imgGallery").innerHTML = "";
  getNewReleases();
  setTimeout(polling, 18000000);
}

function getNewReleases(){
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
            document.getElementById("imgGallery").innerHTML += s; 
        }
    })
    .catch(error => console.log('error', error));
}

function getGenres(){
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

function searchItems(){
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
          var s = "<div class='a-box'><div class='img-container'><div class='img-inner'><div class='inner-skew'><img draggable='false' id="+ sId + " src="+ sImgLink +" class='songImage myImg' name=" + sTitle + " ></div></div></div><div class='text-container'><h3>"+ sTitle+ "</h3><div>" + sArtist + "</div></div>"; //"<br/ ><br/ >" + sReleaseDate + 
          document.getElementById("imgGallery").innerHTML += s; 
      }
  })
  .catch(error => console.log('error', error));
}

function getLikedGenres(){
    var myHeaders = new Headers();

    myHeaders.append("Cookie", "PHPSESSID=" + PHPSESSID);

    var formdata = new FormData();
    formdata.append("id_user", sessionStorage.getItem('id'));

    var requestOptions = {
    method: 'POST',
    headers: myHeaders,
    body: formdata,
    redirect: 'follow'
    };

    fetch("http://papopep.altervista.org/app/backEnd/API/music.php?id_user=" + sessionStorage.getItem('id'), requestOptions)
    .then(response => response.text())
    .then(result => {
        console.log(result);
        const j = JSON.parse(result);
        if(j.data == null){
            var d = "<div class='text' style='height: 100%; width: 100%; display: flex; position: fixed; align-items: center; justify-content: center;'>Select at least one genre to get recommendations!</div>";
            document.getElementById("imgGallery").innerHTML += d; 
        }
        var genres = j.data;
        getReccomendations(genres);
    })
    .catch(error => console.log('error', error));
}

function getReccomendations(genres){
    var myHeaders = new Headers();
    myHeaders.append("Authorization", "Bearer " + code);
    myHeaders.append("Cookie", "sp_t=f8b577829ffecf0b46dce7d7d89ad096");
    
    var requestOptions = {
      method: 'GET',
      headers: myHeaders,
      redirect: 'follow'
    };
    
    fetch("https://api.spotify.com/v1/recommendations?limit=35&maket=IT&seed_artist=1F5Nly0FV6dIoFNWPYTHMb&seed_genres="+genres+"&seed_track=0c6xlDDPZe81m2q797ordA", requestOptions)
      .then(response => response.text())
      .then(result => {
        const j = JSON.parse(result)
        for(var i = 0; i < j.tracks.length; i++){
            var sImgLink = j.tracks[i].album.images[1].url;
            var sId = j.tracks[i].id;
            var sArtist = j.tracks[i].album.artists[0].name;
            var sTitle = j.tracks[i].album.name;
            var s = "<div class='a-box'><div class='img-container'><div class='img-inner'><div class='inner-skew'><img draggable='false' id="+ sId + " src="+ sImgLink +" class='songImage myImg' name=" + sTitle + " ></div></div></div><div class='text-container'><h3>"+ sTitle+ "</h3><div>" + sArtist + "</div></div>"; //"<br/ ><br/ >" + sReleaseDate + 
            document.getElementById("imgGallery").innerHTML += s; 
        }
    })
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

// 1F5Nly0FV6dIoFNWPYTHMb - Massimo Pericolo
// 1VPmR4DJC1PlOtd0IADAO0 - BLANCO
