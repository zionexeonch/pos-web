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
