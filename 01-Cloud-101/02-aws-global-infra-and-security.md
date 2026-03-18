# ☁️ 02. AWS Global Infrastructure & Security

**Date:** 18 Maret 2026
**Topic:** Global Infra, Shared Responsibility, Well-Architected Framework, TCO

## 🌍 AWS Global Infrastructure
Bagaimana AWS meletakkan server fisik mereka di seluruh dunia:
- **Regions:** AWS memiliki konsep region, yang merupakan lokasi fisik yang tersebar diseluruh dunia sebagai tempat cluster pusat data. cluster atau kelompok pusat data tersebut dikenal sebagai availability zone. setiap region terdiri dari beberapa AV yang terpisah secara fisik dan terisolasi di suatu area geografis.
- **Availability Zones (AZs):** AV adalah area yang dikategorikan dalam wilayah yang dapat menyimpan satu atau lebih pusat data (biasanya tiga). AV dipisahkan secara fisik oleh jarak hingga 100km atau 60 mil dari AV lainnya di wilayah tersebut. AV saling tehubung dengan bandwith yang tinggi dan rendah latensi sehingga dapat menjadi failure management, kalau satu AZ mati karena gempa atau masalah yang lainnya, AZ lain tetap hidup dan akan menampung semua dari AZ yang gagal.
- **Edge Locations:** Edge location terhubung ke wilayah AWS melalui jaringan AWS di seluruh dunia. Edge location menyimpan salinan konten pengguna di titik cache (CDN) yang paling dekat dengan pengguna untuk penyajian yang lebih cepat ke pengguna di lokasi mana pun.

## 🛡️ AWS Shared Responsibility Model
Aturan main siapa yang bertanggung jawab atas keamanan.
- **Security OF the Cloud (Tanggung Jawab AWS):** Mengamankan infrastruktur fisik, hardware, jaringan global, dan fasilitas data center. (Ibarat mengamankan gedung apartemennya).
- **Security IN the Cloud (Tanggung Jawab Customer/Kita):** Mengamankan data kita sendiri, mengatur password, OS update, dan firewall (Security Groups). Persyaratan ini mencakup konten yang dipilih untuk disimpan di AWS, layanan AWS yang digunakan, dan siapa saja yang memiliki akses ke konten tersebut.

## 🏛️ AWS Well-Architected Framework
Panduan *best practices* (Pilar) untuk membangun arsitektur sistem yang bagus di AWS:
- Operational Excellence, adalah kemampuan untuk menjalankan dan memantau sistem yang akan memberikan nilai bisnis dan terus meningkatkan proses dan prosedur dukungan.
- Security, berfokus pada kemampuan untuk melindungi informasi, sistem, dan aset sekaligus menyampaikan nilai bisnis melalui risk management dan mitigation strategy.
- Reliability, adalah kemampuan sistem untuk pulih dari gangguan infrastruktur, mendapatkan sumber daya komputasi secara dinamis, dan mengurangi gangguan masalah jaringan atau kesalahan konfigurasi.
- Performance Efficiency, adalah kemampuan menggunakan sumber daya komputasi secara efisien.
- Cost Optimization, adalah kemampuan untuk menjalankan sistem yang optimal pada titik harga terendah.
- Sustainability, berfokus pada meminimalkan dampak environment dan memaksimalkan pemanfaatan untuk menggunakan sumber daya minimal untuk mengurangi dampak hilir.

## 💰 Total Cost of Ownership (TCO) & Billing
- **TCO:** Total biaya kepemilikan adalah metrik keuangan yang digunakan untuk memperkirakan dan membandingkan biaya langsung dan tidak langsung dari suatu produk atau layanan. Ini biasanya mencakup biaya aktual berikut ini: Pengadaan, Manajemen, Pemeliharaan, Menonaktifkan sumber daya hardware.
- **Pricing Model AWS:** Bayar sesuai penggunaan, Hemat saat pemesanan, Bayar lebih sedikit menggunakan lebih banyak.