# Client

1. game genre survival
2. ada 4 character 2 cewe dan 2 cowo. bisa
   milih main characternya, dimana masing-masing character punya skill dan
   ability yang berbeda-beda
3. gamenya tentang cara bertahan hidup di
   dunia yang udah hancur karna wabah zombie. dan berchapter-chapter, di
   tiap chapter bisa dapet achievement berbeda-beda. sama total chapternya
   ada 8, nah deket ke chapter terakhir harus ngelawan rajanya zombie
4. alurnya : berawal dari naik pesawat yang dimana didalemnya ternyata ada
   orang yang kena wabah itu terus pesawatnya jatuh, terus si main
   character pertama-tama harus mencari weapon buat berjaga-jaga
5. gamenya bisa multiplayer (max 4)
6. referensi gamenya resident evil, world war z

# Developer

### 1. Analisa Kebutuhan Pembangunan Game

- **Gameplay Inti**: Pemain bertahan hidup di dunia penuh zombie dan bisa memilih karakter, masing-masing dengan skill unik. Game berlangsung dalam 8 chapter dan setiap chapter memiliki achievement dan rintangan yang berbeda, dengan misi akhir melawan boss zombie.
- **Karakter dan Kemampuan**: 4 karakter (2 pria dan 2 wanita), masing-masing memiliki skill dan ability spesifik. Contohnya, satu karakter mungkin memiliki keahlian dalam menggunakan senjata api, sementara karakter lain lebih tangguh dalam bertahan.
- **Mode Multiplayer**: Maksimal 4 pemain online dalam satu permainan, memungkinkan kolaborasi dalam bertahan hidup dan berbagi tugas sesuai kemampuan tiap karakter.
- **Progression System**: Chapter-based progression, di mana setiap chapter memiliki tantangan, achievement, dan resources berbeda.
- **Referensi Tema**: Game di-setting di dunia post-apocalyptic dengan tema zombie yang intens, mengadaptasi atmosfer dari game seperti *Resident Evil* dan *World War Z*.

### 2. Kebutuhan Software dan Hardware

- **Software Development**:

  - **Game Engine**: *Unity* atau *Unreal Engine* (rekomendasi: Unreal untuk efek visual dan atmosfer yang lebih hidup).
  - **Programming Language**: *C#* (untuk Unity) atau *C++* (untuk Unreal).
  - **Version Control**: *Git* untuk kolaborasi tim.
  - **Asset Design Tools**: *Blender* atau *Maya* untuk modeling karakter dan lingkungan, *Photoshop* atau *Substance Painter* untuk tekstur dan assets 2D.
  - **Sound Design**: *FMOD* atau *Wwise* untuk desain suara yang mendukung suasana menyeramkan.
- **Hardware Development**:

  - **PC Minimum Requirement**:
    - Processor: Intel i5 atau Ryzen 5.
    - GPU: NVIDIA GTX 1050 atau setara.
    - RAM: 8 GB.
    - Storage: SSD dengan kapasitas minimal 100 GB untuk menyimpan assets dan program.
  - **PC Recommended Requirement**:
    - Processor: Intel i7 atau Ryzen 7.
    - GPU: NVIDIA GTX 1660 atau lebih tinggi.
    - RAM: 16 GB atau lebih.
    - Storage: SSD 256 GB atau lebih untuk performa optimal saat rendering.

### 3. Rancangan Alur Game

   **Alur utama**:

- **Chapter 1**: **“Escape”**Pemain memulai di reruntuhan pesawat yang jatuh. Mereka harus menghindari zombie yang pertama kali muncul dan mencari senjata serta persediaan awal.
- **Chapter 2-7**: **"Survival and Progression"**Setiap chapter menambah tantangan baru, seperti melintasi zona dengan zombie lebih kuat, bertemu dengan kelompok survivor lain, hingga memasuki kota terinfeksi. Masing-masing chapter juga berfokus pada survival dan menyelesaikan misi-misi sampingan untuk meningkatkan persediaan dan upgrade skill karakter.
- **Chapter 8**: **"The Final Battle"**
  Pemain mencapai wilayah di mana “boss zombie” tinggal. Mereka harus menyelesaikan berbagai puzzle atau menonaktifkan sumber energi boss sebelum akhirnya melawan boss besar.

   **Desain Level**:

- **Level Design**: Tiap chapter memiliki lokasi unik seperti kota hancur, hutan, dan rumah sakit tua. Desain ini memperkaya lingkungan dan meningkatkan tantangan bagi pemain.
- **Achievement System**: Pemain memperoleh achievement dan bonus point jika berhasil menyelesaikan misi tambahan atau menghindari serangan tertentu di chapter.

### 4. Jenis Game yang Akan Dibangun

   Berdasarkan analisa kebutuhan, game ini tergolong dalam **genre Survival-Horror Multiplayer dengan elemen Adventure RPG**.
