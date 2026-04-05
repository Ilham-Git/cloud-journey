# 🔥 Project 3: Disaster Recovery & System Resilience

**Skenario Bisnis:** Perusahaan mengalami insiden siber kritis (simulasi serangan *ransomware* atau *human error* fatal) yang melumpuhkan *server* operasional utama.
**Objective:** Mengimplementasikan strategi *Backup* dan *Disaster Recovery* (DR) untuk memastikan kelangsungan bisnis dengan *Recovery Point Objective* (RPO) zero-data-loss dan *Recovery Time Objective* (RTO) seminimal mungkin.

---

## Phase 1: Data Preparation & Backup Strategy (Pre-Incident)
### 📸 Evidence of Backup Capability
![Status AMI Backup Tersedia](assets/ami-backup-available.png)
- [x] Mensimulasikan keberadaan data operasional tingkat tinggi yang bersifat sangat krusial bagi kelangsungan bisnis perusahaan di dalam *web server* (`/var/www/html/database-operasional.txt`).
- [x] Mengeksekusi pencadangan sistem secara komprehensif dengan membuat **Amazon Machine Image (AMI)** dari instans yang sedang berjalan.
- [x] Memvalidasi pembuatan *EBS Snapshot* di belakang layar untuk memastikan seluruh konfigurasi OS, aplikasi, dan data statis tersimpan dengan aman sebelum insiden terjadi.
- **Kesimpulan bisnis:** Memiliki *Image* atau *Snapshot* sistem yang rutin diperbarui adalah garis pertahanan terakhir (*last line of defense*) perusahaan dari ancaman kehilangan data permanen.

---

## Phase 2: The Disaster (Incident Execution)
- [x] Menyimulasikan insiden siber fatal (Ransomware / Human Error) dengan membumihanguskan (*Terminate*) instans `Server-Portal-Utama` secara permanen.
- [x] Memvalidasi bahwa *server* terhapus dari infrastruktur dan aplikasi web mengalami *downtime* total.

### 📸 Evidence of System Failure
![Server Terminated Status](assets/server-terminated.png)

![ipv4 web error](assets/web-error.png)
---

## Phase 3: System Restoration (Disaster Recovery)
- [x] Melakukan *provisioning* instans pemulihan (`Server-Portal-Recovery`) langsung dari AMI yang telah dicadangkan.
- [x] Mengarahkan kembali konfigurasi jaringan ke *VPC* dan *Security Group* yang tepat untuk memulihkan akses publik dan keamanan yang terisolasi.
- [x] **Validasi Sukses:** Aplikasi web kembali mengudara dalam hitungan menit (RTO rendah) dan inspeksi *file* membuktikan tidak ada data kritis yang hilang (RPO nol kerugian).
- **Kesimpulan Bisnis:** Perusahaan terhindar dari kerugian finansial akibat *downtime* panjang, membuktikan arsitektur *cloud* yang diimplementasikan memiliki tingkat *resilience* tinggi.

### 📸 Evidence of Successful Data Recovery
![Pemulihan Data Sukses](assets/data-recovered.png)

![Pemulihan Web Sukses](assets/web-recovered.png)