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
    app.get('/refresh_token', (req, res) => {
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
        });
}

//onclick= 'imageCick(this.id)' 