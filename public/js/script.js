const { js } = require("laravel-mix");

function numThousand(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

let tambahProduk = document.querySelector("#tambahProduk");

$(document).on("click", "#dashboard", function (e) {
    e.preventDefault();
    setTimeout(() => {
        window.location = "/dashboard";
    }, 100);
});

$(document).on("click", "#product", function (e) {
    e.preventDefault();
    setTimeout(() => {
        window.location = "/product";
    }, 100);
});
$(document).on("click", "#category", function (e) {
    e.preventDefault();
    setTimeout(() => {
        window.location = "/category";
    }, 100);
});
$(document).on("click", "#promo", function (e) {
    e.preventDefault();
    setTimeout(() => {
        window.location = "/promo";
    }, 100);
});
$(document).on("click", "#discount", function (e) {
    e.preventDefault();
    setTimeout(() => {
        window.location = "/discount";
    }, 100);
});
