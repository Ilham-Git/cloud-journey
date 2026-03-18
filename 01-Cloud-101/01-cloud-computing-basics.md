# ☁️ 01. Konsep Dasar Cloud & Service Models

**Date:** 18 Maret 2026
**Topic:** Cloud Fundamentals, Deployment Models, Service Models

## 🎯 Objective
Memahami definisi dasar *Cloud Computing*, keuntungannya dibandingkan arsitektur *On-Premise* tradisional, serta membedakan berbagai model layanan dan *deployment* yang ada di industri.

## 🧠 Core Concepts: Apa itu Cloud Computing?
- **Definisi:** Penyediaan sumber daya IT (*Compute, Storage, Database, Network*) melalui internet dengan sistem pembayaran *Pay-as-you-go*.
- **On-Premise vs Cloud:** [Tuliskan pemahamanmu tentang bedanya punya server fisik sendiri vs sewa di cloud]
## 🌟 6 Manfaat (Advantages) Cloud Computing
1. **Trade CapEx for OpEx:** Capital Expenditure atau pengeluaran modal awal mengacu pada data center, server fisik, dan sumber daya lain yang harus diinvestasikan sebelum menggunakannya. Sedangkan Operating Expenditure atau biaya operational yang dibayar sesuai dengan sumber daya yang digunakan saja. Dengan menggunakan cloud computing yang memberikan opsi OpEx agar perusahaan dapat menerapkan solusi inovatif sekaligus menghemat biaya.
2. **Stop spending money running and maintaining data centers:** Cloud computing dapat meringankan proses ini agar perusahaan dapat berfokus pada aplikasi dan data pelanggan. sehingga tidak harus menghabiskan waktu dan uang dalam mengelola server sendiri.
3. **Stop guessing capacity:** Dengan Cloud Computing, alokasi kapasitas server jadi jauh lebih efisien. Kita bisa menyalakan instance (seperti Amazon EC2) hanya saat dibutuhkan, sehingga kita cuma membayar waktu komputasi yang terpakai. Kapasitasnya bisa dinaikkan atau diturunkan kapan saja secara instan (Elasticity). 
4. **Benefit from massive economies of scale:** Dengan cloud computing perusahaan dapat menggunakan biaya yang lebih rendah untuk komputasi dibandingkan dengan apa yang dapat diperoleh jika melakukanya sendiri
5. **Increase speed and agility:** Ada faktor penting yaitu fleksibilitas yang dapat memudahkan dalam develop dan deploy aplikasi. fleksibilitas ini memberikan lebih banyak waktu untuk bereksperiment dan berinovasi karena dapat menggunakan cloud computing untuk akses sumber daya baru dalam hitungan menit.
6. **Go global in minutes:** Aplikasi yang dideploy menggunakan cloud computing dapat dijangkau oleh pengguna global dalam hitungan menit sekaligus memberikan latensi yang rendah. 
## 🏗️ Cloud Deployment Models
Tiga cara utama sebuah infrastruktur *cloud* diimplementasikan:
- **Public Cloud:** Layanan _cloud_ yang ditawarkan melalui internet publik dan bisa disewa oleh siapa saja. Contoh: AWS, Google Cloud, Azure.
- **Private Cloud (On-Premise):** Infrastruktur yang sepenuhnya dimiliki dan dikelola oleh satu perusahaan secara internal (biasanya menggunakan _data center_ sendiri). Cocok untuk instansi pemerintahan atau bank yang regulasi datanya sangat ketat.
- **Hybrid Cloud:** Gabungan antara Public Cloud dan Private Cloud (On-Premise). Misalnya, perusahaan menyimpan data pelanggan yang sensitif di _server_ On-Premise mereka, tapi men-_deploy_ aplikasi _web_-nya di AWS.

## ⚙️ Cloud Service Models (IaaS, PaaS, SaaS)
- **IaaS (Infrastructure as a Service):** Ibarat menyewa komputer kosong. AWS hanya menyediakan _hardware_ fisik, ruang _server_, dan virtualisasi. Kamu punya kontrol penuh untuk memilih OS, mengatur _networking_, dan mengamankan sistemnya. _Contoh AWS:_ **Amazon EC2** (Menyewa _virtual machine_).
- **PaaS (Platform as a Service):** Ibarat menyewa _environment_ siap pakai. Kamu tidak perlu pusing memikirkan _update_ OS atau _maintenance server_. Kamu cukup bawa _source code_ aplikasi dan langsung _deploy_. _Contoh AWS:_ **AWS Elastic Beanstalk** (Fokus murni pada _coding_, infrastruktur diatur otomatis oleh AWS).
- **SaaS (Software as a Service):** Ibarat menikmati produk akhir. Semuanya diurus oleh _provider_ dari ujung ke ujung. Kamu sebagai pengguna akhir (_end-user_) tinggal _login_ dan menggunakan fiturnya. _Contoh:_ **Gmail, Dropbox, Zoom**.

Tingkat kontrol dan tanggung jawab pengguna berbeda-beda tergantung model layanan yang disewa.

| Service Model | Kepanjangan | Tingkat Kontrol (Control Level) | Contoh Layanan / AWS Service |
| :--- | :--- | :--- | :--- |
| **IaaS** | *Infrastructure as a Service* | Sangat Tinggi (Mengatur OS, *Network*, dll) | Amazon EC2 |
| **PaaS** | *Platform as a Service* | Menengah (Fokus *deploy code*, infrastruktur diurus provider) | AWS Elastic Beanstalk |
| **SaaS** | *Software as a Service* | Sangat Rendah (Tinggal pakai produk akhir) | Gmail, Dropbox |

## 💡 Important Takeaways
- *Cloud Computing* mengubah fokus perusahaan dari mengurus *hardware* fisik menjadi fokus pada pengembangan aplikasi.
- Sebagai seorang *Cloud Engineer*, saya akan paling sering berinteraksi dengan model **IaaS** dan **PaaS** untuk melakukan *provisioning resource*.