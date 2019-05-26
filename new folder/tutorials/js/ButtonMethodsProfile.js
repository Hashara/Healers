window.onload = function(){
    document.getElementById("LogOutButton").addEventListener("click", LogOut,false);
    document.getElementById("ViewProfile").addEventListener("click", view,false);

}
function  LogOut(){
    window.location.assign('log1.html');
}
function  view(){
    window.location.assign('viewProfile.php');
}
