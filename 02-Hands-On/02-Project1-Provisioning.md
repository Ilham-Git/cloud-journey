# 🏢 Project 1: Secure Corporate Portal Provisioning

**Date:** 4 April 2026
**Skenario Bisnis:** Perusahaan membutuhkan portal internal yang aman dan terisolasi untuk kebutuhan operasional, dengan akses administratif yang dikunci ketat untuk mencegah kebocoran data.
**Objective:** Melakukan *provisioning* infrastruktur komputasi dan jaringan dengan menerapkan prinsip *Least Privilege* pada keamanan jaringan (IT Security).

## 1. Network & Architecture (VPC)
- [x] Membuat Virtual Private Cloud (VPC) kustom bernama `Portal-WEB-vpc` di Region Jakarta (`ap-southeast-3`).
- [x] Merancang topologi *Single Availability Zone* (1 AZ) dengan 1 *Public Subnet* untuk efisiensi biaya (*Cost Optimization*).
- [x] Menghindari penggunaan komponen jaringan *default* demi memastikan kontrol penuh atas tabel *routing* dan *Internet Gateway*.

## 2. Compute & Security (EC2 & Security Group)
- [x] Melakukan *provisioning* instans `t3.micro` (Amazon Linux 2023) bernama `Server-Portal-Utama`. (Transisi dari `t2.micro` ke `t3.micro` disesuaikan dengan ketersediaan infrastruktur Region Jakarta).
- [x] Membuat Security Group kustom (`Portal-SG`) dengan konfigurasi spesifik:
  - **Inbound HTTP (Port 80):** `0.0.0.0/0` untuk akses *web* publik.
  - **Inbound SSH (Port 22):** Dikunci secara eksklusif hanya untuk IP Address publik milik administrator (My IP) untuk mencegah eksploitasi *remote access*.
- [x] Membuat dan mengamankan *Key Pair* `.pem` (`kunci-portal`) secara lokal.

## 3. Deployment Automation (User Data)
- [x] Menulis *bash script* pada *User Data* untuk mengotomatisasi instalasi Apache Web Server, PHP, dan Git.
- [x] Mengotomatisasi proses `git clone` untuk menarik kode *website* PHP dari *repository* secara *real-time* saat instans pertama kali dihidupkan (otomatisasi *deployment*).

**Hasil:** *Server* berhasil *running* dan aplikasi *web* dapat diakses publik sambil menampilkan IP *Server* internal secara dinamis.
![[Web-Deploy-Portal.png]]