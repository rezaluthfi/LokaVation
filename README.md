# LokaVation - Transformasi Digital Pariwisata Lokal Indonesia

<div align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-red.svg" alt="Laravel">
  <img src="https://img.shields.io/badge/TailwindCSS-4.0-blue.svg" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/PHP-8.2+-purple.svg" alt="PHP">
  <img src="https://img.shields.io/badge/Node.js-18+-green.svg" alt="Node.js">
  <img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="License">
</div>

## 📖 Tentang Proyek

**LokaVation** adalah platform digital yang membantu destinasi wisata lokal Indonesia untuk bertransformasi digital dan menjadi lebih profesional. Kami menyediakan solusi terintegrasi mulai dari pengembangan website, branding, hingga pelatihan digital marketing untuk memberdayakan komunitas lokal.

### 🎯 Misi
Memberdayakan destinasi wisata lokal melalui solusi digital yang inovatif, mudah diakses, dan berkelanjutan, serta meningkatkan kapabilitas sumber daya manusia lokal untuk bersaing secara global.

### 🔍 Visi  
Menjadi mitra teknologi terdepan dalam akselerasi ekonomi kreatif dan pariwisata berbasis komunitas di Indonesia.

## ✨ Fitur Utama

### 🌐 Website Features
- **Responsive Design** - Optimal di semua perangkat (mobile, tablet, desktop)
- **Modern UI/UX** - Desain yang clean dan user-friendly
- **Fast Loading** - Optimasi performa dengan Vite dan Tailwind CSS
- **SEO Optimized** - Meta tags dan struktur yang SEO-friendly

### 📱 Interactive Elements
- **Smooth Animations** - Scroll animations dan parallax effects
- **Mobile Navigation** - Hamburger menu untuk mobile devices
- **Form Validation** - Real-time validation dengan feedback
- **Contact Forms** - Multiple contact forms di setiap halaman

### 🎨 Design System
- **Custom Color Palette** - Brand colors yang konsisten
- **Typography** - Instrument Sans font untuk readability
- **Icons** - Tabler icons untuk konsistensi visual
- **Components** - Reusable Blade components

## 🏗️ Teknologi yang Digunakan

### Backend
- **Laravel 11.x** - PHP Framework
- **PHP 8.2+** - Server-side programming
- **Blade Templates** - Template engine

### Frontend  
- **Tailwind CSS 4.0** - Utility-first CSS framework
- **Vanilla JavaScript** - Modern ES6+ JavaScript
- **Vite** - Build tool dan asset bundling

### Development Tools
- **Composer** - PHP dependency management
- **NPM** - Node.js package manager
- **Git** - Version control

## 📦 Instalasi

### Prerequisites
Pastikan sistem Anda memiliki:
- PHP 8.2 atau lebih tinggi
- Composer
- Node.js 18 atau lebih tinggi
- NPM atau Yarn

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/your-username/lokavation.git
   cd lokavation
   ```

2. **Install Dependencies PHP**
   ```bash
   composer install
   ```

3. **Install Dependencies Node.js**
   ```bash
   npm install
   ```

4. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi Database**
   Edit file `.env` dan sesuaikan pengaturan database:
   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=/absolute/path/to/database/database.sqlite
   ```

6. **Jalankan Migrasi Database**
   ```bash
   php artisan migrate
   ```

7. **Build Assets**
   ```bash
   npm run build
   ```

8. **Jalankan Development Server**
   ```bash
   # Terminal 1 - Laravel Server
   php artisan serve
   
   # Terminal 2 - Asset Watcher (optional)
   npm run dev
   ```

9. **Akses Website**
   Buka browser dan kunjungi `http://localhost:8000`

## 🚀 Struktur Proyek

```
lokavation/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── HomeController.php
│   │       ├── ServiceController.php
│   │       ├── AboutController.php
│   │       └── ContactController.php
│   └── Models/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── home.blade.php
│   │   ├── services.blade.php
│   │   └── about.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── routes/
│   └── web.php
├── public/
├── database/
├── config/
└── storage/
```

## 📄 Halaman Website

### 🏠 Landing Page (/)
- Hero section dengan call-to-action
- Problem statement
- Services overview
- Testimonial
- Contact form

### 🔧 Services (/services)
- Detail layanan lengkap:
  - Website & Sistem Digital
  - Branding & Identitas Visual
  - Pelatihan Promosi Digital
- Proses kerja
- Keunggulan LokaVation

### 👥 About (/about)
- Cerita perusahaan
- Visi & Misi
- Tim profile
- Nilai-nilai perusahaan
- Statistik dan penghargaan

## 🎨 Design System

### Color Palette
```css
/* Primary Colors */
--color-primary: #2A9D8F;      /* Teal Green */
--color-secondary: #E9C46A;    /* Warm Yellow */
--color-accent: #F4A261;       /* Orange */
--color-text: #264653;         /* Dark Green */
--color-background: #FFFFFF;   /* White */
--color-light-background: #F8F9FA; /* Light Gray */
```

### Typography
- **Font Family**: Instrument Sans
- **Weights**: 400, 500, 600, 700

## 🔧 Konfigurasi

### Environment Variables
```env
APP_NAME=LokaVation
APP_ENV=local
APP_KEY=base64:your-app-key
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database.sqlite

# Mail (optional)
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
```

### Tailwind CSS Custom Configuration
Project menggunakan Tailwind CSS v4 dengan konfigurasi custom di `resources/css/app.css`:
- Custom color variables
- Extended color palette
- Responsive design utilities

## 📱 Fitur Responsiveness

Website ini dirancang mobile-first dan responsif di semua perangkat:

- **Mobile (320px - 768px)**: Stack layout, mobile navigation
- **Tablet (768px - 1024px)**: Grid layout dengan adjustments
- **Desktop (1024px+)**: Full grid layout, hover effects

## 🎯 SEO Optimization

- Meta tags yang proper
- Open Graph tags
- Structured data (JSON-LD)
- Semantic HTML
- Fast loading times
- Mobile-friendly design

## 🚀 Deployment

### Production Build
```bash
# Build assets untuk production
npm run build

# Optimize Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Server Requirements
- PHP 8.2+
- Web server (Apache/Nginx)
- Database (MySQL/PostgreSQL/SQLite)
- Node.js (untuk build process)

## 🤝 Kontribusi

Kami menerima kontribusi dari komunitas! Berikut cara berkontribusi:

1. Fork repository ini
2. Buat branch feature (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

### Coding Standards
- Ikuti PSR-12 untuk PHP
- Gunakan Prettier untuk JavaScript
- Ikuti konvensi penamaan Laravel
- Tulis komentar yang jelas

## 🐛 Bug Reports & Feature Requests

Gunakan [Issues](https://github.com/your-username/lokavation/issues) untuk:
- Melaporkan bugs
- Request fitur baru
- Diskusi improvement

## 📝 Changelog

### v1.0.0 (2024-09-22)
- ✅ Initial release
- ✅ Landing page dengan hero section
- ✅ Services page dengan detail layanan
- ✅ About page dengan team profile
- ✅ Contact forms dengan validation
- ✅ Responsive design
- ✅ Scroll animations
- ✅ Mobile navigation

## 👥 Tim Pengembang

- **Dwi Anggara Najwan Sugama** - Project Manager
- **Nino Auliya Nahara** - Lead Developer
- **Reza Luthfi Akbar** - UI/UX Designer
- **Tegar Adi Nugroho** - Digital Marketing Strategist

## 📞 Kontak

- **Email**: info@lokavation.id
- **Website**: [https://lokavation.id](https://lokavation.id)
- **LinkedIn**: [LokaVation Indonesia](https://linkedin.com/company/lokavation)

## 📄 Lisensi

Proyek ini dilisensikan under [MIT License](LICENSE).

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - PHP Framework
- [Tailwind CSS](https://tailwindcss.com) - CSS Framework
- [Tabler Icons](https://tabler-icons.io) - Icon set
- [Unsplash](https://unsplash.com) - Stock photos
- Komunitas open source Indonesia

---

<div align="center">
  <p>Dibuat dengan ❤️ untuk memajukan pariwisata Indonesia</p>
  <p><strong>LokaVation</strong> - Transformasi Digital Pariwisata Lokal</p>
</div>
