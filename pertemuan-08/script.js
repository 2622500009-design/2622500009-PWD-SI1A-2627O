document.addEventListener("DOMContentLoaded", function() {

    let navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function() {
        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.add("navbar-scroll");
            } else {
                navbar.classList.remove("navbar-scroll");
            }
        }
    });

    let produk = document.querySelectorAll(".produk-container .card");

    produk.forEach(function(card) {
        let tombol = card.querySelector("button");

        if (tombol) {
            tombol.addEventListener("click", function() {
                let nama = card.querySelector("h3").innerText;
                let harga = card.querySelector("h4").innerText;

                let nomor = "6281238974234";

                let pesan = "Halo, saya ingin memesan " + nama +
                            " dengan harga " + harga +
                            ". Apakah produknya masih tersedia?";

                let url = "https://wa.me/" + nomor +
                          "?text=" + encodeURIComponent(pesan);

                window.open(url, "_blank");
            });
        }
    });

    let form = document.querySelector("#bukutamu form");

    if (form) {
        form.addEventListener("submit", function(event) {
            let nama = form.querySelector('[name="nama"]');
            let email = form.querySelector('[name="email"]');
            let nohp = form.querySelector('[name="nohp"]');
            let pesan = form.querySelector('[name="pesan"]');

            if (!nama.value.trim() || !email.value.trim() ||
                !nohp.value.trim() || !pesan.value.trim()) {

                event.preventDefault();
                alert("Silakan isi semua data terlebih dahulu!");

            } else {
                alert("Terima kasih sudah mengisi buku tamu Dhifa Flatshoes!");
            }
        });
    }

    let tombolAtas = document.querySelector("#tombolAtas");

    if (tombolAtas) {
        tombolAtas.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

});
