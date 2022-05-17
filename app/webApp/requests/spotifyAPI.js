async function getNewReleases(){
    var code = "BQDuyfbal_Ma3Dd5mHFo2Mb3O0NfUkM9AciOgN2h8_XHwPvGqxvssujAzLPWOutr4wbb0dpWXC6Jc7F1v9E6f2VzCBfuJFWc08eLEYotZYndN1j-2avFGk4nIpTAPEeyDHBdYlgA7-f1EBA";
    var myHeaders = new Headers();
    myHeaders.append("Authorization", "Bearer " + code);
    var requestOptions = {
    method: 'GET',
    headers: myHeaders,
    redirect: 'follow'
    };

    fetch("https://api.spotify.com/v1/browse/new-releases?country=US&limit=10&offset=5", requestOptions)
    .then(response => response.text())
    .then(result => {
        const j = JSON.parse(result)
        for(var i = 0; i < j.albums.items.length; i++){
            var sImgLink = j.albums.items[i].images[1].url;
            var sId = j.albums.items[i].id;
            var sArtist = j.albums.items[i].artists[0].name;
            var sTitle = j.albums.items[i].name;
            var sReleaseDate = j.albums.items[i].release_date;
            console.log(sImgLink,sId,sArtist,sTitle,sReleaseDate);
            var s = "<img id="+ sId + " src="+ sImgLink +" class='songImage' name=" + sTitle + ">";//onclick='banner(this.id,this.name)'
            document.getElementById("imgGallery").innerHTML += s; 
        }
    })
    .catch(error => console.log('error', error));
}

function banner(sId,sTitle){
    var m = alert(sId,sTitle);
    document.getElementById("imgGallery").innerHTML += m;
}

function getRefreshToken(){
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

async function getGenres(){
    var myHeaders = new Headers();
    myHeaders.append("Authorization", "Bearer BQDWck0U7erxknfSk9LGyyNagk6K4cNpyzga_mvuhIk8pqrFCtkQsk65LxwsSX4D4lGtLoRorJNVPWFrjXB-k9iKDEvit-MmEVWvuZIxqlEOjfspklCjMty0VWLPvYn5LYvQwIld_N0ePoY");
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
            var genres = r.genres[i]
            }
            console.log(genres);
        })
      .catch(error => console.log('error', error));
}
