# Pertemuan 4 - CSS3 Layout dan Responsive Web Design

## Pengembangan
- Perubahan yang dilakukan:
    - Pisahkan CSS dari `index.html` ke `style.css` dan hubungkan dengan `<link rel="stylesheet" href="style.css">`
    - Terapkan `* { box-sizing: border-box; }`
    - Box Model pada `#home`, `header`, `section`, `#about`, `#contact`, `footer` (padding, border, margin)
    - Flexbox untuk navigasi Beranda, Tentang, Kontak
    - Grid untuk `main`: `display: grid; grid-template-columns: 1fr; gap: 16px;`
    - `#contact { grid-column: 1 / -1; }` biar full width
    - Responsive mobile-first: `@media (min-width: 768px) { main { grid-template-columns: 1fr 1fr; } }`

- Commit dan push GitHub:
    - `Pisahkan CSS dari HTML pada P4`
    - `Terapkan Box Model pada P4`
    - `Terapkan Flexbox dan Grid untuk layout P4`
    - `Terapkan desain web responsif P4`
    - Semua sudah di-push dan diverifikasi di GitHub

## Pengujian
- Perangkat bergerak (375px - 767px): Navigasi vertikal, main 1 kolom, semua konten tampil normal, tidak ada overflow.
- Desktop (≥768px): Navigasi horizontal, Home & Tentang Saya 2 kolom, Contact membentang penuh (1 / -1), gap 16px konsisten.
- Galat dan perbaikan : Tidak ada
- Validasi CSS: W3C CSS Validator - Valid, 0 error untuk `style.css`

## Repositori
URL GitHub: [https://github.com/2622500009-design/2622500009-PWD-SI1A-2627O/tree/main/pertemuan-04]
