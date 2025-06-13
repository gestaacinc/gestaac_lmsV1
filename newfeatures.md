Here’s the updated Markdown user‐flow set, with **instructor accounts** fully provisioned by Admin (no public sign-up):

---

## 🏡 0. Landing Page Flow

1. **Visitor Arrives**

   * Hero banner: LMS name, tagline, “Get Started” CTA
   * Featured benefits: TESDA-accredited courses, secure platform, innovative tools
   * Header buttons:

     * **Student Sign Up** (for new student accounts)
     * **Login** (for any existing user: Student, Instructor, Admin)
2. **Explore Features**

   * Scroll sections:

     1. Course catalog preview
     2. How it works (3-step graphic)
     3. Instructor testimonials
     4. Security & compliance call-out
3. **Call to Action**

   * **Student Sign Up** → registration form (students only)
   * **Learn More** → anchors down to Features
4. **Footer**

   * Links: About, Contact, Privacy Policy, Terms of Service

---

## 👩‍🎓 1. Student User Flow

1. **Student Sign-Up**

   1. Click **Student Sign Up**
   2. Fill name, email, password → submit
   3. Validate password strength → send verification email
   4. Click email link → account activated
2. **Login**

   1. Enter email + password → success → **Student Dashboard**
3. **Dashboard (Empty State)**

   1. Prompt: “Join a class with code” + input + “Join” button
   2. **Decision**:

      * **Valid code?** → enroll → toast “You’ve joined \<Course>” → show course card
      * **Invalid code?** → inline error (“Invalid or expired code”)
4. **Dashboard (Enrolled Courses)**

   * Grid of course cards: title, progress bar, next activity
   * “+ Join another class” button
5. **Course Overview**

   1. Click course card → Course Home
   2. Shows announcement, module list (locked/unlocked), “Next Lesson” link
6. **Consume Content**

   1. Open module → watch video / read notes
   2. “Mark as Complete” appears at end → click to unlock next
7. **Take Assessment**

   1. Click quiz → instructions → “Start Quiz”
   2. Submit answers → instant MCQ grading or “Awaiting instructor” for essays
8. **View Grades & Feedback**

   * “Grades” tab: scores, feedback, downloadable certificate
9. **Engage & Communicate**

   * Post in class discussion
   * Receive real-time notifications (announcements, replies)
10. **Account Settings**

    * Edit profile, change password, enable 2FA
    * Logout

---

## 👨‍🏫 2. Instructor User Flow

> **Note:** Instructors **do not** self-register. Accounts are created/managed by the Admin.

1. **Account Provisioning (Admin-Only)**

   1. Admin → User Management → **Create Instructor**
   2. Email sent with temp password & login link
   3. Instructor logs in → prompted to set permanent password
2. **Login**

   * Enter credentials → lands on **Instructor Dashboard**
3. **Dashboard Overview**

   * List of classes taught, student counts, pending grading alerts
   * “+ Create New Course” button
4. **Course & Class Creation**

   1. **Step 1:** Enter course info (title, description, TESDA codes)
   2. **Step 2:** Author modules (videos, readings, resources)
   3. **Step 3:** Create quizzes/assignments per module
   4. **Step 4:** Generate & configure class code (expiry, seat limit) → Publish
5. **Manage Enrollments**

   * View/remove students, resend codes, set enrollment cap
6. **Content Updates**

   * Edit module content, reorder modules, save drafts vs. publish
7. **Assess & Grade**

   1. Open **Submissions** → filter by module/quiz
   2. Grade essays & uploads, add comments → “Publish Grades”
8. **Track Progress**

   * Heatmap of completion %, quiz pass rates
   * Export CSV/PDF class report for accreditation
9. **Announcements & Messaging**

   * Post announcements (site-wide or per-module)
   * Reply to student messages in inbox
10. **Account Settings**

    * Update profile, change password, manage 2FA
    * Logout

---

## 🛠️ 3. Administrator User Flow

1. **Admin Login**

   * Strong-password + mandatory 2FA → lands on **Admin Dashboard**
2. **Admin Dashboard**

   * Site metrics: total users, active courses, system health alerts
   * Quick-links: User Mgmt, Course Catalog, Settings, Audit Logs
3. **User Management**

   * **Students:** search, bulk-import, deactivate/reactivate
   * **Instructors:** create, edit, reset passwords, assign roles
4. **Course Catalog Management**

   * Review & approve instructor-published courses
   * Archive or retire courses
5. **System Settings**

   * Configure password policy, session timeouts, 2FA rules
   * Manage global email/SMS templates
6. **Audit & Compliance**

   * View/export logs: logins, role changes, content edits
   * Provide TESDA-compliant audit exports
7. **Reporting & Analytics**

   * Generate reports: completion rates, pass rates, enrollment trends
   * Schedule automatic report delivery
8. **Backup & Maintenance**

   * Trigger/manual or scheduled backups
   * Monitor SSL certs, storage utilization
9. **Logout**

---

Let me know if you’d like any further tweaks or if you want these translated into API endpoints or wireframe sketches next!
