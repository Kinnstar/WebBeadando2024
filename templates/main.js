window.onload = function()
{
    var kuld = document.getElementById("kuld");
    if (kuld) {kuld.disabled = true;}
};
function ellenoriz() 
{
var rendben = true;
var szoveg = document.getElementById("szoveg");
if (szoveg) { 
    if (szoveg.value.length==0) { // ha üresen hagytuk az üzenetet
        rendben = false;
        
        
        } else {
        
        }
        }
var email = document.getElementById("email");
if(email){
    var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (!checkPattern.test(email.value)) {
        rendben = false;
} else {
}
}
var nev = document.getElementById("nev");
if (nev) {
    if (nev.value.length<5) { 
    rendben = false;
} else {
}
}
var telefon = document.getElementById("phone");
if (telefon) {
    if (telefon.value.length<11 ||telefon.value.length>11) { 
    rendben = false;
} else {
}
}
var kuld = document.getElementById("kuld");
if (kuld) {
kuld.disabled = !rendben;
}
return rendben;
}