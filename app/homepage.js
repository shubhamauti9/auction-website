window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navid").className = "navbarscroll";
    document.getElementsByClassName('anchor')[0].style.color="black";
    document.getElementsByClassName('anchor')[1].style.color="black";
    document.getElementsByClassName('anchor')[2].style.color="black";
    document.getElementsByClassName('anchor3')[0].style.color="black";
    document.getElementsByClassName('anchor3')[1].style.color="black";
    document.getElementsByClassName('anchor3')[2].style.color="black";
    document.getElementsByClassName('anchor2')[0].style.color="black";
  } else {
    document.getElementById("navid").className = "";
    document.getElementsByClassName('anchor')[0].style.color="";
    document.getElementsByClassName('anchor')[1].style.color="";
    document.getElementsByClassName('anchor')[2].style.color="";
    document.getElementsByClassName('anchor3')[0].style.color="";
    document.getElementsByClassName('anchor3')[1].style.color="";
    document.getElementsByClassName('anchor3')[2].style.color="";
    document.getElementsByClassName('anchor2')[0].style.color="";
  }
}

function toggleClass(x){
    if(x.className == "active")
        x.className = "passive";
    else
        x.className = "active";
}

function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}