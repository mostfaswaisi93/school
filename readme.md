# School Management System

A bilingual (Arabic / English) school management system built with **Laravel 8** and **Livewire**. It has separate dashboards for administrators, teachers, students and parents, and covers academics, student affairs, finance, exams and online classes.

![Laravel](https://img.shields.io/badge/Laravel-8-FF2D20?logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-2-4E56A6?logo=livewire&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.3%2B%20%7C%208-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![Zoom](https://img.shields.io/badge/Zoom_API-2D8CFF?logo=zoom&logoColor=white)
![i18n](https://img.shields.io/badge/i18n-AR%20%7C%20EN-2ea44f)

## Features

**Four user types with their own login and dashboard**
- **Admin**: manages the whole school
- **Teacher**: manages their students, quizzes, questions and online classes
- **Student**: takes exams and views their profile
- **Parent**: follows their children

**Academics**
- Grades → classrooms → sections, with teachers assigned to sections
- Subjects
- Quizzes and question banks
- Online classes through the **Zoom API** (direct or manually added meetings)
- Library with downloadable files

**Student affairs**
- Student records with file attachments
- Parents registration through a multi-step **Livewire** form
- Attendance
- Promotions between grades and graduation

**Finance**
- Fees and fee invoices
- Student receipts, payments and fee processing
- Student and fund accounts

**Technical**
- Localized routes and interface (`mcamara/laravel-localization`) with translatable fields
- Multi-guard authentication
- Calendar events and school settings
- Database seeders for lookup data (blood types, nationalities, religions, genders, specializations…)

## Tech Stack

| Layer | Tools |
|---|---|
| Back end | Laravel 8, Livewire 2, PHP, MySQL |
| Front end | Blade, Bootstrap, Laravel Mix |
| Packages | macsidigital/laravel-zoom, mcamara/laravel-localization, spatie/laravel-translatable, codezero/laravel-unique-translation, yoeunes/toastr |

## Getting Started

**Prerequisites:** PHP 7.3+ / 8, Composer, Node.js, MySQL

```bash
git clone https://github.com/mostfaswaisi93/school.git
cd school
composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate
# set DB_* values, and ZOOM_CLIENT_KEY / ZOOM_CLIENT_SECRET for online classes
php artisan migrate --seed
php artisan serve      # http://localhost:8000
```

## Author

**Mustafa T. Al-Swaisi** · [LinkedIn](https://www.linkedin.com/in/mostfaswaisi93/) · [GitHub](https://github.com/mostfaswaisi93)
