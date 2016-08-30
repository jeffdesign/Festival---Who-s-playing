//set APi
function searchArtist() {
    gapi.client.setApiKey('you_apiKey_here');
    gapi.client.load('youtube', 'v3', function () {
        makeRequest();
        console.log("search made");
    });
}

//function to specify content
function makeRequest() {
    var q = document.getElementById("api-artist").innerHTML;
    console.log("artist name recieved");
    var request = gapi.client.youtube.search.list({
        q: q,
        part: 'snippet',
        maxResults: '50',
        order: 'viewCount',
        type: 'video'
    });

    // Get JSON-object based on search
    request.execute(function (response) {

        var obj = jQuery.parseJSON(JSON.stringify(response.result));
        console.log(obj);


        //Make iframe with object position
        document.getElementById("video").innerHTML =

            "<iframe width='560' height='349' src='https://www.youtube.com/embed/" + obj.items[0].id.videoId + "'?rel=0&amp;controls=0&amp;showinfo=0 frameborder='0' allowfullscreen></iframe>";
    });
}