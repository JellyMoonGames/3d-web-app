// Utilities

// Swap to the requested element block and hide all others
function swap(selected)
{
    document.getElementById("home").style.display = "none";
    document.getElementById("model").style.display = "none";

    document.getElementById(selected).style.display = "block";
}