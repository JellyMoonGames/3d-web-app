// Utilities

// Swap to the requested element block and hide all others
function changePage(page)
{
    $('#home').hide();
    $('#model').hide();

    $('#' + page).show();
}

function updateModal(id)
{
    console.log(id);

    var request = new XMLHttpRequest();
    request.open("GET", 'scripts/get-model-info.php?id=' + id, true);
    request.send(null);

    request.onreadystatechange = function()
    {
        var data = JSON.parse(request.responseText);

        if(request.readyState == 4)
        {
            console.log(data);
        }

        // Modal Header + Description
        $('#modalHeader').html(data[0]['modelTitle']);
        $('#modalDescription').html(data[0]['modelDescription']);
        
        
        // Model Image Gallery
        var imagePaths = ["1.jpg", "2.jpg", "3.jpg"];
        var imageHTML = "";

        imagePaths.forEach(function(element)
        {
            imageHTML += "<div class='col-sm-4'>"
            imageHTML += "<img class='img-fluid' src='assets/images/gallery/" + element.toString() + "' alt='Image 1'></img>";
            imageHTML += "</div>"
        });
        
        $('#row-image-gallery').html(imageHTML);

        // Model Loading
        $("x3d > scene > inline").attr("url", "assets/x3d/" + data[0]['x3dModelTitle']);
        $("x3d > scene > inline").attr("mapDEFToID", true);
        $("x3d > scene > inline").attr("nameSpaceName", "model");

        var modelHTML = "";

        modelHTML += "<x3d>";
        modelHTML += "<scene>";
        modelHTML += "<inline " + "nameSpaceName='model' mapDEFToID='true' url='assets/x3d/" + data[0]['x3dModelTitle'] + "'></inline>";
        modelHTML += "</scene>";
        modelHTML += "</x3d>";
        
        $("#model3D").empty();
        $("#model3D").html(modelHTML);
        x3dom.reload();
    }
}

// Toggles the intensity of all the lights in the scene
function toggleLights()
{
    var value;

    if($("#model__LA_Light").attr('intensity') == 0) value = 1;
    else value = 0;

    for(i = 0; i < 6; i++)
    {
        if(i == 0) $("#model__LA_Light").attr('intensity', value);
        else $("#model__LA_Light_00" + i).attr('intensity', value);
    }
}

// Transitions the viewpoint depending on the parameter passed in
function switchCamera(camera)
{
    if(camera == "front")       $("#model__CA_Camera").attr('set_bind', true);
    else if(camera == "left")   $("#model__CA_Camera_001").attr('set_bind', true);
    else if(camera == "back")   $("#model__CA_Camera_002").attr('set_bind', true);
    else if(camera == "right")  $("#model__CA_Camera_003").attr('set_bind', true);
}