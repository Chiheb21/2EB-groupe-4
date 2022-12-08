function verifiertext()
{
    nom=document.getElementById("name").value;
    if(/[A-Za-z]/.test(nom)==false)
    {
        alert("name should be letters only");
    }
}
function verifiercom()
{
    nom=document.getElementById("com").value;
    if(/[A-Za-z]/.test(nom)==false)
    {
        alert("comment should be letters only");
    }
}