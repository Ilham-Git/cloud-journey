# 🛡️ Day 0: Cloud Security & Cost Foundation

**Date:** 4 April 2026
**Objective:** Mengamankan akun utama (*God Mode*) dan mengatur proteksi anggaran sebelum melakukan *provisioning* infrastruktur AWS.

## 1. Identity & Access Management (IAM) & Security
- [x] Mengamankan *Root Account* menggunakan Multi-Factor Authentication (MFA) via Authenticator App.
- [x] Membuat IAM User khusus operasional (`ilham-ops`) dengan *policy* `AdministratorAccess`. 
- **Rationale:** Menerapkan *best practice* keamanan AWS untuk tidak pernah menggunakan *Root Account* pada rutinitas *deployment* sehari-hari guna meminimalisir risiko kebocoran akses.

## 2. Cost Control & Monitoring
- [x] Mengonfigurasi **AWS Budgets** (*Cost budget*).
- [x] Menetapkan *hard limit* anggaran bulanan sebesar $1.00.
- [x] Mengonfigurasi *alert* otomatis via email jika pemakaian *resource* menyentuh *threshold* 80%.
- **Rationale:** Mencegah terjadinya *overbilling* atau tagihan tak terduga (*cloud shock*) akibat *human error* selama masa *provisioning* infrastruktur.