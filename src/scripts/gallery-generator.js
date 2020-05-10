var ajax = new XMLHttpRequest();
var htmlCode = "";
var response;

$(document).ready(function()
{
    var send = "scripts/hook.php";
    ajax.open("GET", send, true);

    ajax.send(null);

    ajax.onreadystatechange = function()
    {
        if(ajax.readyState == 4)
        {
            response = ajax.responseText.split("~");

            htmlCode += '<div class="row">';

            // For each image add this HMTL code:
            for(var i=0; i<response.length; i++)
            {
                // TO-DO: Get Model name from database
                
                
                htmlCode += '<div class="col-sm-4">';
                htmlCode += '<div class="gallery-card card">';
                htmlCode += '<div class="content">';

                //#region Image + Overlay

                htmlCode += '<img class="card-img-top" src="assets/images/gallery/' + response[i] + '"/>';
                htmlCode += '<div class="overlay">';
                htmlCode += '<h2>' + '<?php echo data[' + i + ']["modelTitle"] ?>' + '</h2>';
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