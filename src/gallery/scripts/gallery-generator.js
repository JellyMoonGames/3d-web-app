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
            htmlCode += '<tr>';

            for(var i=0; i<response.length; i++)
            {
                htmlCode += '<td id="gallery-cell">';

                htmlCode += '<a href="' + 'images/' + response[i] +'">';
                
                htmlCode += '<img src="images/' + response[i] + '" id="image-thumbnail"/>';
                htmlCode += '</a>';
                htmlCode += '</td>';

                if(((i+1)%numberOfColumns) == 0)
                {
                    htmlCode += '</tr><tr>';
                }
            }

            htmlCode += '</tr>';
            document.getElementById('gallery').innerHTML = htmlCode;
        }
    }
});