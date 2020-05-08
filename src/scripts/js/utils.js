// Utilities

// Swap to the requested element block and hide all others
function changePage(page)
{
    $('#home').hide();
    $('#model').hide();

    $('#' + page).show();
}