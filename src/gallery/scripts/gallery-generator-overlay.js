var xmlHTTP = new XMLHttpRequest();
var numberOfColumns = 4;
var htmlCode = "";
var response;

$(document).ready(function()
{
    var send = "scripts/hook.php";
    xmlHTTP.open("GET", send, true);

    xmlHTTP.send(null);

    xmlHTTP.onreadystatechange = function()
    {
        if(xmlHTTP.readyState == 4)
        {
            response = xmlHTTP.responseText.split("~");

            htmlCode += '<div class="row">';

            // For each image add this HMTL code:
            for(var i=0; i<response.length; i++)
            {
                htmlCode += '<div class="col-sm-4">';
                htmlCode += '<div class="card">';
                htmlCode += '<div class="content">';

                //#region Image + OVerlay

                htmlCode += '<img class="card-img-top" src="assets/images/' + response[i] + '"/>';
                htmlCode += '<div class="overlay">';
                htmlCode += '<h2>3D Model Name</h2>';
                htmlCode += '<a class="info" data-toggle="modal" id="view-button" href="#main-modal">View Model</a>';
                htmlCode += '</div>';

                //#endregion

                htmlCode += '</div>';
                htmlCode += '</div>';
                htmlCode += '</div>';
            }

            htmlCode += '</div>';

            document.getElementById('gallery').innerHTML = htmlCode;
        }
    }
});