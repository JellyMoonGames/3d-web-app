function rednose()
{
    console.log("Toggle Lights");
    if(document.getElementById('Deer__MA_Nose').getAttribute('diffuseColor')!= '1 0 0')
        document.getElementById('Deer__MA_Nose').setAttribute('diffuseColor', '1 0 0');
    else
        document.getElementById('Deer__MA_Nose').setAttribute('diffuseColor', '0 0 0');
}