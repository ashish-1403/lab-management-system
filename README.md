# lab-management-system



# Lab Management System

Laboratory Management System for managing patients, tests, orders, reports, and PDF generation.

## Tech Stack

- PHP 8.x
- Laravel 8/9
- MySQL
- REST API
- GitHub

---

## Project Setup

### Clone Repository

```bash
git clone https://github.com/your-username/lab-management-system.git
cd backend
```

### Install Dependencies

```bash
composer install
```

### Environment Setup

Copy environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### Database Configuration

Update `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lab_management
DB_USERNAME=root
DB_PASSWORD=
```

### Run Migration

```bash
php artisan migrate
```

### Start Application

```bash
php artisan serve
```

Application URL:

```
http://127.0.0.1:8000
```

---

## API Base URL

```
http://127.0.0.1:8000/api/v1
```

---

## Current Modules

### Patient Management

Create Patient

```
POST /api/v1/patients
```

Request Body

```json
{
    "name":"Ashish Chauhan",
    "gender":"Male",
    "phone":"9876543210",
    "email":"ashish@test.com",
    "address":"Delhi"
}
```

Success Response

```json
{
    "message":"Patient created successfully"
}
```

---

## Project Structure

app/

├── Http/

│ └── Controllers/

│ └── Api/

│ └── V1/

│ ├── Auth/

│ └── Patient/

├── Models/

├── Repositories/

└── Services/

---

## Development Workflow

Pull latest changes

```bash
git pull
```

Install packages

```bash
composer install
```

Run migrations

```bash
php artisan migrate
```

Start server

```bash
php artisan serve
```

---

## Git Workflow

Create feature branch

```bash
git checkout -b feature/patient-module
```

Commit changes

```bash
git add .
git commit -m "Added patient module"
```

Push changes

```bash
git push origin feature/patient-module
```

Create Pull Request

---

## Upcoming Modules

- Authentication
- Test Management
- Order Management
- Report Management
- PDF Generation
- Doctor Management
- Referral Management





## .env
<!-- APP_NAME=LabManagement

APP_ENV=local

APP_DEBUG=true

APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lab_management
DB_USERNAME=root
DB_PASSWORD= -->