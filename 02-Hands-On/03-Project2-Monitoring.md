# 📈 Project 2: Proactive Monitoring & Incident Response

**Skenario Bisnis:** Persiapan peluncuran portal pendaftaran rekrutmen yang diproyeksikan akan menerima lonjakan trafik ekstrim secara tiba-tiba.
**Objective:** Mengimplementasikan dan memvalidasi sistem peringatan dini (*monitoring*) otomatis untuk mencegah kelumpuhan *server* akibat *CPU Overload*.

---

## Phase 1: CloudWatch Radar Implementation (Setup)
- [x] Mengintegrasikan metrik **Amazon CloudWatch** ke instans EC2 `Server-Portal-Utama`.
- [x] Menetapkan *threshold* alarm komputasi kritis pada `CPUUtilization >= 70%`.
- [x] Membangun jalur eskalasi insiden menggunakan **Simple Notification Service (SNS)** untuk mengirimkan peringatan otomatis via email kepada Tim Cloud Ops.

*(Catatan: Pembuktian Fase 1 digabungkan dengan hasil eksekusi Fase 2 di bawah).*

---

## Phase 2: Stress Test & Incident Simulation (Execution)
- [x] Menyimulasikan lonjakan *traffic* pengunjung dengan menyuntikkan proses beban berat buatan (`yes > /dev/null &`) via SSH.
- [x] Memantau telemetri sistem: Metrik CPU terkonfirmasi melonjak hingga 100%.
- [x] Memvalidasi fungsi alarm: CloudWatch sukses mendeteksi anomali dan beralih ke status **In alarm** (merah).
- [x] Memvalidasi fungsi notifikasi: Pesan peringatan krisis berhasil diterima di email operasional secara *real-time*.

### 📸 Evidence of Incident Response

![Grafik CPU Kritis CloudWatch](assets/cloudwatch-kritis.png)
<br>
![Email Peringatan SNS](assets/sns-email.png)

---

## Phase 3: Mitigation & Stabilization (Recovery)
- [x] Mengeksekusi penanganan insiden kilat dengan menghentikan proses anomali yang memakan *resource* CPU (`killall yes`).
- [x] Memonitor fase pemulihan (*cool-down*) hingga grafik metrik kembali ke batas wajar dan status alarm tersetel ulang menjadi **OK** (hijau).
- **Kesimpulan Bisnis:** Arsitektur pengawasan (*monitoring*) telah tervalidasi 100%. Tim infrastruktur kini memiliki visibilitas dan waktu respons yang cukup untuk mencegah sistem *down* saat pendaftaran dibuka.