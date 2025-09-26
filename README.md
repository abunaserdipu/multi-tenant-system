# Multi-Tenant Flat & Bill Management System

## Overview

This project is a **Multi-Tenant Flat & Bill Management System** built with **Laravel 12** (React starter kit).  
The system is designed to support:

- **Admins (Super Admins)** who manage house owners and tenants.
- **House Owners** who manage their buildings, flats, and bills.
- **Tenants** who are assigned to flats.

The project follows the requirement of **multi-tenant data isolation** so that House Owners can only access their own data.

---

## Current Progress

Due to the given timeframe, I have focused on the **core database design** and **model relations**.

### ✅ Implemented

- **Database migrations** for all entities:
    - Admins
    - House Owners
    - Buildings
    - Flats
    - Tenants
    - Bill Categories
    - Bills (with due tracking)
- **Model relations**:
    - One-to-Many between HouseOwner → Buildings → Flats
    - One-to-Many between Flats → Bills
    - Many-to-One between Tenants → Flats
    - Admin → House Owners / Tenants assignment
- **Basic multi-tenant structure** (column-based `house_owner_id` for isolation)

### ⏳ Pending (Not yet implemented)

- Controllers & CRUD logic for tenants, flats, and bills.
- Multi-tenant middleware for request-level data isolation.
- Email notifications (bill created/paid).
- Seeders for sample data.
- Frontend integration (React/Tailwind).
- Polishing queries and performance optimizations.

---

## Setup Instructions

1. Clone the repository:

    ```bash
    git clone <github-repo-link>
    cd project-folder

    ```

2. Install dependencies:

    ```bash
    composer install
    npm install

    ```

3. Configure .env file:

4. Run migrations:
    ```
    php artisan migrate
    ```
