# ☁️ 03. Pengenalan AWS Core Services

**Date:** 18 Maret 2026
**Topic:** Compute, Storage, Database, & Networking Services

## 🛠️ AWS Core Services (Buku Menu AWS)
Berikut adalah layanan-layanan utama yang menjadi tulang punggung arsitektur *cloud* di AWS:


![[Screenshot 2026-03-18 181350.png]]
### 1. Compute (Komputasi/Otak Server)
| Nama Layanan   | Penjelasan Singkat                                                                                                                                                                                                                           |
| :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Amazon EC2** | Amazon Elastic Compute Cloud adalah layanan web yang menyediakan kapasitas komputasi yang aman dengan ukuran yang dapat diubah di cloud. Contoh: Sewa virtual machine/komputer kosong. Kita bisa milih OS dan spek RAM/CPU sesuai kebutuhan. |
| **AWS Lambda** | Konsep komputasi serverless yang dapat digunakan untuk menjalankan kode fungsi tanpa menyediakan atau mengelola server. maks 15 menit proses runtime.                                                                                        |

### 2. Storage (Penyimpanan Data)
| Nama Layanan   | Penjelasan Singkat                                                                                                                                                                                                                                                                                                                                       |
| :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Amazon S3**  | Simple storage service. Object storage, ibarat Google Drive-nya AWS buat nyimpen file gambar, video, atau backup tanpa batas sejumlah apa pun dan darimana pun. Amazon S3 itu elsatis dan terskala otomatis untuk memenuhi persyaratan penyimpanan dan file yang diunggah ke Amazon S3 akan otomatis direplikasi dibeberapa availability zone di region. |
| **Amazon EBS** | Amazon Elastic Block Store, ini ibarat hardisk/SSD eksternal yang dicolok langsung ke instance EC2.                                                                                                                                                                                                                                                      |

### 3. Database (Basis Data)
| Nama Layanan        | Penjelasan Singkat                                                                                                                                                                                                                          |
| :------------------ | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Amazon RDS**      | Amazon Relational Database Service adalah relational database yang udah di-manage AWS (MySQL, PostgreSQL, dll). Amazon RDS berbasis cloud dan didesain untuk menyederhanakan konfigurasi, pengoprasian, dan penskalaan relational database. |
| **Amazon DynamoDB** | serverless NoSQL database yang super cepat dan fleksibel. DynamoDB mengenkripsi semua data secara default dan memberikan identitas dan kontrol akses sangat detail disemua table.                                                           |

### 4. Networking & Security (Jaringan & Keamanan)
| Nama Layanan   | Penjelasan Singkat                                                                                                                                                                                                                                     |
| :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Amazon VPC** | Virtual Private Cloud. Ibarat bikin pagar jaringan pribadi di dalam AWS biar server kita aman dari internet lua                                                                                                                                        |
| **AWS IAM**   Identity and Access Management. Satpamnya AWS yang disertakan dalam setiap akun untuk mengontrol akeses identitas ke AWS, buat ngatur siapa user yang boleh login dan akses apa saja. Identitas di IAM ada 4 yaitu User, Group, Roles, dam Policies.  p,  |

### 5. Management & Messaging (Pemantauan & Komunikasi)
| Nama Layanan          | Penjelasan Singkat (Gaya Bahasa Sendiri)                                                                                     |
| :-------------------- | :--------------------------------------------------------------------------------------------------------------------------- |
| **Amazon CloudWatch** | CCTV-nya AWS. Mengawasi metrik performa server (seperti penggunaan CPU) dan menyalakan alarm kalau ada yang tidak beres.     |
| **Amazon SNS**        | Simple Notification Service. Tukang pos AWS, tugasnya mengirim notifikasi peringatan dari cloud via SMS atau Email ke admin. |
## 🎛️ Spectrum of Management (Siapa yang ngurus infrastruktur?)
Di AWS, layanan dibagi berdasarkan seberapa banyak beban operasional yang diurus oleh penyedia cloud vs kita sebagai pengguna.

- **Self-Managed / Unmanaged:** Kita sewa infrastruktur mentah. AWS cuma nyediain hardware, sisanya (OS, update, security) kita yang repot ngurusin. Contoh: Amazon EC2
- **Managed Service:** Adalah layanan yang mengelola berbagai tugas manajemen infrastruktur AWS yang membantu tugas-tugas berat kayak backup, patching OS, dan setup awal. Tapi kita tetap harus milih ukuran servernya. Contoh: Amazon RDS
- **Fully Managed Service:** Kita bener-bener lepas tangan urusan server. High availability dan backup udah otomatis diurus 100% sama AWS. Tapi tanggung jawab atas scaling dan high avalibility Contoh: Amazon DynamoDB
- **Serverless Service:** Level tertinggi dari cloud. Kita sama sekali gak ngelihat servernya. Kapasitas bisa otomatis naik/turun (auto-scaling dari nol), dan kita BENAR-BENAR cuma bayar saat kodenya jalan. Contoh: AWS Lambda