````markdown
# Sprint Roadmap for TESDA-Accredited LMS in CodeIgniter 4

---

## 🏁 Sprint 0 – Environment & Project Setup (1 week)

1. **Clone & Bootstrap**  
   ```bash
   git clone https://github.com/gestaacinc/gestaac_lmsV1.git
   cd gestaac_lmsV1
   composer install
   cp env .env
   # In .env: set CI_ENVIRONMENT = development
````

2. **CodeIgniter 4 Installation**

   * Verify CI4 directories: `app/`, `system/`, `writable/`
   * Configure `app/Config/App.php` → `baseURL`
3. **Local DB Config**

   * In `.env`, set MySQL connection (Laragon defaults)
   * Create database:

     ```sql
     CREATE DATABASE gestaac_lms;
     ```
4. **Initial Commit & Push**

   ```bash
   git add .
   git commit -m "chore: initial CI4 scaffold"
   git push origin main
   ```

**Deliverable:**
A working “Hello World” CI4 install on your repo, connected to a blank database.

---

## 🚀 Sprint 1 – Core Architecture & Auth (2 weeks)

1. **Database Schema Design**

   * Models & Migrations for:

     * `users` (with `role_id` FK)
     * `roles` (`student`, `instructor`, `admin`)
     * `courses`, `modules`, `classes` (`class_code`)
     * `enrollments`, `grades`
2. **RBAC Setup**

   * Seeder for default roles
3. **Authentication**

   * Custom Auth library (email/password only)
   * Student registration + email verification
   * Login, logout, password reset flows
   * 2-factor stub
4. **Middleware / Filters**

   * Route protection by role:

     * `/student/*`
     * `/instructor/*`
     * `/admin/*`
5. **Unit Tests**

   * PHPUnit tests for: registration, login, RBAC enforcement

**Deliverable:**
Students can sign up, verify, log in; instructors/admin seeded; protected routes enforced.

---

## 📚 Sprint 2 – Course & Enrollment Flows (2 weeks)

1. **Landing Page & Public Routes**

   * Public controller/view for Landing Page
   * “Student Sign Up” form embedded
2. **Student Dashboard**

   * “Join class” by `class_code` → `enrollments` logic
   * Display enrolled courses (placeholders for progress)
3. **Instructor Provisioning**

   * Admin UI → Create Instructor (email invite + temp password)
4. **Course CRUD**

   * Instructor can create/edit/delete Courses
   * Generate/configure `class_code`
5. **Enrollments Management**

   * Instructor view: list students, revoke, resend code
6. **Basic UI Skeleton**

   * Use CI4 View parser + Tailwind or Bootstrap

**Deliverable:**
Students can join courses; instructors create/manage courses; landing page live.

---

## 🖥️ Sprint 3 – Content Delivery & Assessments (2 weeks)

1. **Module Management**

   * CRUD modules (type: video, PDF, text)
   * File upload in `writable/uploads`
2. **Lesson View**

   * Students view resources + “Mark as Complete”
   * Unlock next module on completion
3. **Quiz Engine**

   * MCQ quiz CRUD
   * Student attempt + instant grading
4. **Essay/File-Upload Assignments**

   * Student submit files; instructor grading workflow
5. **Grades & Feedback**

   * Student “Grades” page with scores & comments
6. **Tests**

   * Feature tests for content/assessment flows

**Deliverable:**
Full content pipeline and basic assessment functionality.

---

## 🔔 Sprint 4 – Communication, Progress & Reporting (2 weeks)

1. **Announcements & Discussions**

   * Instructor posts announcements per class/module
   * Threaded discussion under each module
2. **Notifications System**

   * Email stubs for new modules & grade publication
3. **Progress Tracking**

   * Calculate & display completion % on Dashboard
4. **Reporting**

   * CSV exports: enrollments, completion rates, grades
   * Admin dashboard stats (users, courses)
5. **Audit Logging**

   * Log events: logins, content edits, grade changes

**Deliverable:**
Live communication channels, progress bars, and exportable reports.

---

## 🔒 Sprint 5 – Security, Hardening & Deployment (2 weeks)

1. **Security Review**

   * Enforce HTTPS (Laragon/local certs)
   * Throttle auth & join-class routes
   * Sanitize inputs, XSS & CSRF protection
2. **2-Factor Authentication**

   * Integrate TOTP (Google Authenticator)
   * Enforce for admin, optional for others
3. **Performance & Caching**

   * CI4 caching on read-heavy pages
4. **Backup & Deployment**

   * CI4 CLI: migrations & seeders
   * Deployment docs for staging/production
5. **Final Testing & QA**

   * End-to-end tests (Codeception/PHPUnit + Selenium)
   * UI/UX polish & bug fixes

**Deliverable:**
Production-ready LMS with security hardening, docs, and deployment scripts.

```
```
