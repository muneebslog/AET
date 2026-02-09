Perfect. Smart move.

Below is a **clean structured project summary** you can paste at the start of a new chat so I immediately understand the full architecture and direction.

---

# 🔥 PROJECT SUMMARY – Charity Foundation CMS (Laravel + Livewire)

## 🧠 Tech Stack

* Laravel 11
* Livewire (TALL stack)
* Tailwind CSS
* Breeze (auth)
* Planning to use Filament for admin panel
* Using Cursor as development environment

---

## 🎯 Project Type

A fully dynamic Charity Foundation website (CMS-driven), including:

* Dynamic homepage
* Projects (Appeals)
* News / Updates
* Testimonials
* Impact statistics
* Newsletter collection
* Contact messages
* Bank details donation display (no Stripe/PayPal yet)

No donation tracking system for now.

---

# 🗄 Current Database Structure

## 1️⃣ users

(Default Breeze users table)

---

## 2️⃣ projects (Appeals / Campaigns)

Fields:

* id
* title
* slug
* excerpt
* description
* featured_image
* goal_amount
* raised_amount
* location (nullable)
* is_featured
* is_active
* published_at
* created_at
* updated_at

Used for:

* Urgent Appeals section
* Individual project pages

---

## 3️⃣ posts (News / Field Updates)

Fields:

* id
* title
* slug
* excerpt
* content
* featured_image
* is_published
* published_at
* created_at
* updated_at

Used for:

* Latest from the Field section
* News pages

---

## 4️⃣ testimonials

Fields:

* id
* name
* role
* organization (nullable)
* photo (nullable)
* quote
* is_featured
* is_active
* created_at
* updated_at

Used for:

* Homepage testimonial section

---

## 5️⃣ impact_statistics

Fields:

* id
* label
* value
* numeric_value (nullable)
* suffix (nullable)
* order_column
* is_active
* created_at
* updated_at

Used for:

* Stats section on homepage

---

## 6️⃣ settings (Global dynamic content system)

Fields:

* id
* key
* value
* group
* created_at
* updated_at

Used for:

* Hero title
* Hero subtitle
* Hero image
* Bank details
* Transparency percentages
* Footer info
* Contact info

Everything global and configurable.

---

## 7️⃣ subscribers

Fields:

* id
* email
* created_at
* updated_at

Used for:

* Newsletter collection

---

## 8️⃣ contact_messages

Fields:

* id
* name
* email
* subject
* message
* is_read
* created_at
* updated_at

Used for:

* Contact form submissions

---

# 🏗 Homepage Architecture (Modular)

Homepage is built using Livewire components:

### 1️⃣ Hero Section

* Data pulled from `settings`

### 2️⃣ Appeals Section

Livewire component:
`Home/AppealsSection`

* Fetch active projects
* Limit 3
* Calculate percentage dynamically

---

### 3️⃣ Stats Section

Livewire component:
`Home/StatsSection`

* Fetch impact_statistics
* Ordered by order_column

---

### 4️⃣ Testimonials Section

Livewire component:
`Home/TestimonialsSection`

* Fetch active testimonials
* Limit 2
* Hide if empty

---

### 5️⃣ News Section

(Not yet dynamic, but will use posts table)

---

### 6️⃣ Transparency Section

Uses `settings` table percentages

---

# 💰 Donation System (Current Plan)

No Stripe / PayPal.

Instead:

* Show bank details dynamically from `settings`
* No donation tracking table
* Possibly add manual form later

---

# 🎯 Architectural Philosophy

* Everything dynamic
* No hardcoded content
* Clean CMS separation
* Modular Livewire homepage
* Future-proof for Stripe integration
* Future Filament admin panel

---

# 🚀 Current Status

* Database designed and migrated
* Models ready
* Hero section dynamic
* Appeals section dynamic (Livewire)
* Testimonials dynamic
* Stats table created (ready to integrate)
* Planning to convert all homepage sections into components

---

If you paste that into a new chat, I will immediately understand the entire system and continue at senior-level without re-asking basic questions.

---

When you come back next time, just start with:

> Continue building the charity CMS. Here’s the project summary:

And paste that.

We’ll continue like nothing paused 😎
