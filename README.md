# 🎓 RateGuruku.id

**Platform Review Guru Anonim** - Suara siswa untuk pendidikan yang lebih baik.

## 📖 Deskripsi

RateGuruku.id adalah platform web yang memungkinkan siswa memberikan review dan rating terhadap guru-guru mereka secara **anonim**. Platform ini bertujuan untuk memberikan feedback konstruktif yang dapat membantu meningkatkan kualitas pendidikan di Indonesia.

## ✨ Fitur Utama

- 🔒 **Review Anonim** - Identitas pengguna dijaga kerahasiaannya
- ⭐ **Rating Multi-Aspek** - Penilaian berdasarkan 5 aspek: cara mengajar, kejelasan materi, kesabaran, keasikan, dan keadilan nilai
- 🏷️ **Tag System** - Tag lucu dan deskriptif untuk menggambarkan karakteristik guru
- 👍 **Voting System** - Upvote/downvote untuk review yang membantu
- 🏫 **Multi-School Support** - Mendukung berbagai sekolah di seluruh Indonesia
- 👤 **User Authentication** - Sistem login dengan role siswa dan admin
- 🎨 **Modern UI** - Antarmuka yang clean dan responsive dengan Tailwind CSS

## 🛠️ Tech Stack

- **Backend**: Laravel 11 (PHP 8.3+)
- **Frontend**: Blade Templates + Tailwind CSS 3
- **Build Tool**: Vite
- **Authentication**: Laravel Breeze
- **Database**: SQLite (default), support MySQL/PostgreSQL

## 📋 Database Schema

### Tables:
- `users` - User data dengan role (siswa/admin)
- `schools` - Data sekolah
- `teachers` - Data guru per sekolah
- `tags` - Tag karakteristik guru
- `reviews` - Review dan rating guru
- `review_tag` - Pivot table untuk many-to-many relationship
- `review_votes` - Upvote/downvote dari user

## 🚀 Instalasi

### Prerequisites
- PHP 8.3 atau lebih tinggi
- Composer
- Node.js & npm
- SQLite (atau MySQL/PostgreSQL)

### Langkah Instalasi

1. **Clone repository**
```bash
git clone https://github.com/Trianandaph/rateguruku.git
cd rateguruku
```

2. **Install dependencies**
```bash
composer install
npm install
```

3. **Setup environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Setup database**

Edit file `.env` sesuai kebutuhan:
```env
APP_NAME=RateGuruku.id
APP_TIMEZONE=Asia/Jakarta

DB_CONNECTION=sqlite
# Atau gunakan MySQL:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=rateguruku
# DB_USERNAME=root
# DB_PASSWORD=
```

5. **Jalankan migrations dan seeders**
```bash
php artisan migrate --seed
```

Seeder akan mengisi:
- 10 tag karakteristik guru (Jokes Receh, Killer, Baik Hati, dll)
- 5 contoh sekolah dari berbagai kota

6. **Build assets**
```bash
npm run build
# Atau untuk development:
npm run dev
```

7. **Jalankan server**
```bash
php artisan serve
```

8. **Akses aplikasi**

Buka browser dan akses: `http://localhost:8000`

## 👥 User Roles

### Siswa
- Register dengan email dan sekolah
- Membuat review untuk guru
- Memberikan vote pada review
- Melihat review dari siswa lain

### Admin
- Moderasi review
- Manage data sekolah dan guru
- Statistik dan analytics

## 🎨 Screenshots

_Screenshots akan ditambahkan setelah UI selesai diimplementasi_

### Homepage
![Homepage](docs/screenshots/homepage.png)

### Dashboard
![Dashboard](docs/screenshots/dashboard.png)

### Review Form
![Review Form](docs/screenshots/review-form.png)

## 📝 Development Roadmap

### Phase 1: Foundation (Current) ✅
- [x] Setup Laravel 11
- [x] Install Tailwind CSS
- [x] Database migrations
- [x] Models & relationships
- [x] Seeders
- [x] Authentication (Laravel Breeze)
- [x] Basic layouts

### Phase 2: Core Features (Next)
- [ ] Teacher listing & detail page
- [ ] Review form & submission
- [ ] Review display with ratings
- [ ] Tag system implementation
- [ ] Voting functionality

### Phase 3: Advanced Features
- [ ] Search & filter teachers
- [ ] Statistics & analytics
- [ ] Admin dashboard
- [ ] Review moderation
- [ ] User profile

### Phase 4: Enhancement
- [ ] Email notifications
- [ ] Image upload for teachers
- [ ] Report system
- [ ] Mobile responsive optimization

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

### Development Guidelines
- Gunakan Bahasa Indonesia untuk komentar kode
- Variable names menggunakan English
- Follow PSR-12 coding standards
- Write meaningful commit messages
- Test your code before submitting PR

## 📄 License

This project is open-sourced under the [MIT license](LICENSE).

## 👨‍💻 Kontributor

- **Trianandaph** - Initial work & maintainer

## 📞 Kontak

Untuk pertanyaan atau saran, silakan buat issue di repository ini.

---

**RateGuruku.id** - Bersama membangun pendidikan Indonesia yang lebih baik! 🇮🇩
