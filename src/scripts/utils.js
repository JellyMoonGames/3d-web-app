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

        // Assign the model data to the modal pop-up
        $('#modalHeader').html(data[0]['modelTitle']);
        $('#modalDescription').html(data[0]['modelDescription']);
        
        
        // TO-DO: Get images for each model and display them by getting the path from the database
        var imagePaths = ["1.jpg", "2.jpg", "3.jpg"];
        var imageHTML = "";

        imagePaths.forEach(function(element)
        {
            imageHTML += "<div class='col-sm-4'>"
            imageHTML += "<img class='img-fluid' src='assets/images/gallery/" + element.toString() + "' alt='Image 1'></img>";
            imageHTML += "</div>"
        });
        
        $('#row-image-gallery').html(imageHTML);

        // TO-DO: Change the X3D model and integrate the interaction buttons

    }
}