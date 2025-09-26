# Multi-Tenant Flat & Bill Management System

## Project Summary

This is a **multi-tenant flat & bill management system** built on **Laravel 12** with (React starter kit). The goal is to allow multiple house owners (tenants in SaaS sense) to manage their buildings, flats, bills, and tenants, while ensuring isolation between each owner's data.

The core idea: each **House Owner** acts as a “tenant” in the system; data belonging to one House Owner should not leak into another’s scope.

---

## What’s Implemented (as of now)

Here’s a breakdown of what you’ll find in the current codebase and what functionality is ready:

### ✅ Database & Schema Layer

- **Migrations** for all tables required, including (but not limited to):
    - `users` / `admins`
    - `house_owners`
    - `buildings`
    - `flats`
    - `tenants`
    - `bill_categories`
    - `bills` (with fields for status, due amount, etc.)
- **Foreign keys / relationships** and constraints are set up.
- Appropriate **tenant ownership columns** (e.g. `house_owner_id`) are included in tables to support data partitioning / isolation per owner.

### ✅ Eloquent Models & Relationships

- Model classes exist for each major entity (User, Building, Flat, Tenant, BillCategory, Bill, etc.).
- Relationships defined, e.g.:
    - One HouseOwner → Many Buildings
    - Building → Many Flats
    - Flat → Many Bills
    - Tenant → belongs to a Flat
    - Bill belongs to a BillCategory, etc.
- In models, use of `belongsTo`, `hasMany`, etc., to reflect the domain.

### ✅ Basic Multi-Tenant Structure

- The schema embeds `house_owner_id` in tables to enforce soft isolation (i.e. filtering queries by owner).
- Wherever relevant, the model definitions include `house_owner_id` (or equivalent) to tie each record to a specific HouseOwner.

### 🔄 Partial / Incomplete / Pending Work

These are the parts that are either missing or not fully functional yet (based on the code):

- **Controller logic / CRUD endpoints** for all entities (buildings, flats, bills, tenants)
- **Middleware or global query filters** to enforce that users only see data belonging to their house_owner context
- **Email notification logic** (e.g. send email when a bill is created or paid)
- **Seeding / sample data** to bootstrap a demo environment
- **Front-end / React integration** (views, components, UI)
- **Authentication + Authorization flows** (role-based access, etc.) if not fully wired
- **Validation, error handling, edge cases**
- **Performance optimizations, indexes, query efficiencies**

---

## Setup / How to Run

Below instructions assume the parts implemented so far (schema + models) are stable.

1. Clone the repository:

    ```bash
    git clone https://github.com/abunaserdipu/multi-tenant-system.git
    cd multi-tenant-system

    ```

2. Install dependencies:

    ```bash
    composer install
    npm install

    ```

3. Copy .env.example to .env and configure:

    Database connection (DB_HOST, DB_NAME, DB_USER, DB_PASSWORD)

4. Generate app key:
    ```bash
    php artisan key:generate

5. Run migrations:
    ```bash
    php artisan migrate

6. Serve the application:
    ```bash
    composer run dev
