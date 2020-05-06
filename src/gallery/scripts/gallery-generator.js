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

            // For each image add this HMTL code:
            for(var i=0; i<response.length; i++)
            {
                htmlCode += '<div class="container>'

                //#region Image

                // Image Link
                htmlCode += '<a href="assets/images/' + response[i] +' ">';
                
                // Image
                htmlCode += '<img class="card-img-top img-thumbnail" src="assets/images/' + response[i] + '"/>';

                //Overlay
                htmlCode += '<div class="overlay">'
                htmlCode += '<div class="text">Hello World</div>';
                htmlCode += '</div>'

                htmlCode += '</a>';

                //#endregion

                htmlCode += '</div>';
            }

            document.getElementById('gallery').innerHTML = htmlCode;
        }
    }
});