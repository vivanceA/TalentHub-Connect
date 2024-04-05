# TalentHub Connect

TalentHub Connect is a web application designed to help users find jobs and connect with potential employers. This project aims to provide a platform where job seekers can showcase their talents, and employers can discover and connect with suitable candidates.

## Features

- **Job Search:** Users can explore job listings and search for opportunities based on various criteria such as location, industry, and job type.
- **Talent Showcasing:** Job seekers can create profiles, upload resumes, portfolios, and cover letters to showcase their skills and experience.
- **Employer Connection:** Employers can create accounts, browse talent profiles, and connect with potential candidates for job opportunities.

## Setup

Follow these steps to set up the project locally:

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL or any other supported database system

### 1. Clone the Repository

```bash
git clone https://github.com/vivanceA/TalentHub-Connect.git
```

### 2. Install Dependencies

Navigate to the project directory and install PHP dependencies using Composer:

```bash
cd TalentHub-Connect
composer install
```

### 3. Configure Environment Variables

1. Duplicate the `.env.example` file and rename it to `.env`.
2. Update the database connection details and other configuration variables in the `.env` file.

### 4. Database Migration

Run the database migrations to create necessary tables:

```bash
php artisan migrate
```

### 5. Serve the Application

Start the development server:

```bash
php artisan serve
```

### 6. Access the Application

Open your web browser and go to [http://localhost:8000](http://localhost:8000) to access the application.

## Code Availability

The project code is available on GitHub:

[Link to GitHub Repository](https://github.com/vivanceA/TalentHub-Connect)
