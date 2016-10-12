function sort(str) {
    if (str.length == 0) {
       
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("productsdynamic").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "products/sort/" + str, true);
        xmlhttp.send();
    }
}
function addToCart(str) {
    if (str.length == 0) {
       
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("productsCart").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "cart/add_to_cart/" + str, true);
        xmlhttp.send();
    }
}