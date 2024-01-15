
function mapLoad(){

    document.getElementById('laod').style.display = "unset";
    let x = document.getElementById('map_iframe').getAttribute("data-src");
    document.getElementById('map_iframe').src = x;
    document.getElementById('data-policy').style.display = "none";

}

function mapLoad2(){

    document.getElementById('laod2').style.display = "unset";
    let x = document.getElementById('map_iframe2').getAttribute("data-src");
    document.getElementById('map_iframe2').src = x;
    document.getElementById('data-policy2').style.display = "none";

}

function mapLoad3(){

    document.getElementById('laod3').style.display = "unset";
    let x = document.getElementById('map_iframe3').getAttribute("data-src");
    document.getElementById('map_iframe3').src = x;
    document.getElementById('data-policy3').style.display = "none";

}
