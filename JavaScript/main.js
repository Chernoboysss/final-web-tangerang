
function hello1() {
    alert(" Nama : Muhamad Fadillah \n Nim : 12221037 ") ;
}
function hello2() {
    alert(" Nama : Andika Hafidz Maulana\n Nim : 12220820") ;
}
function hello3() {
    alert(" Nama : Raineflow Masjuri \n Nim : 12220772 ") ;
}
function hello4() {
    alert(" Nama : Fadiyan ahmad ghifari \n Nim : 1221024 ") ;
}
function hello5() {
    alert(" Nama : Bagus Nurafidin \n Nim : 12221045 ") ;
}


window.onscroll = function(){scroolfunction()} ;
function scroolfunction(){
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ) {
        document.getElementById("navbar").style.top = '0' ;
    }else {
        document.getElementById("navbar").style.top = "-50px";
    }
}