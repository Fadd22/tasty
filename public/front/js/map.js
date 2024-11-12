// Fungsi untuk mendapatkan koordinat dari alamat menggunakan OpenStreetMap Nominatim API
function getCoordinates(alamat) {
    var url = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(
        alamat
    )}`;
    fetch(url)
        .then((response) => response.json())
        .then((data) => {
            if (data.length > 0) {
                var lat = data[0].lat;
                var lon = data[0].lon;

                // Inisialisasi peta berdasarkan koordinat yang didapat
                var map = L.map("map").setView([lat, lon], 13);

                // Tambahkan tile layer dari OpenStreetMap
                L.tileLayer(
                    "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",

                    {
                        maxZoom: 19,
                        attribution:
                            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                    }
                ).addTo(map);

                // Tambahkan marker di lokasi hasil geocoding
                var marker = L.marker([lat, lon])
                    .addTo(map)
                    .bindPopup("<b>Lokasi Kantor Kami</b><br />" + alamat)
                    .openPopup();
            } else {
                console.error("Koordinat tidak ditemukan untuk alamat ini.");
            }
        })
        .catch((error) => console.error("Error fetching coordinates:", error));
}

// Panggil fungsi untuk mendapatkan koordinat berdasarkan alamat dari database
getCoordinates(alamat);
