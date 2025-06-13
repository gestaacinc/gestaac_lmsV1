# User Flows for SkillMaster LMS

## 1. Landing Page (Unauthenticated User)

1. **Arrival**  
   - User navigates to `http://skillmaster.test/`  
   - Sees hero banner, features overview, and “Get Started” / “See Courses” CTAs.

2. **Browse Courses Preview**  
   - Clicks **See Courses** → scrolls to features or course-catalog teaser section.

3. **Register**  
   - Clicks **Get Started** or **Register** in nav → lands on custom register form  
   - Enters **Email**, **Password**, **Confirm Password** → submits  
   - Sees “Check your email for verification” message.

4. **Email Verification**  
   - Clicks link in verification email → lands on “Your email has been verified” confirmation  
   - Redirected to **Login**.

5. **Login**  
   - Clicks **Login** in nav → enters **Email** / **Password** → submits  
   - Redirected to dashboard based on role (Student / Trainer / Admin).

---

## 2. Student Flow

### 2.1 Dashboard & Profile

1. **Dashboard** (`/dashboard`)  
   - Sees enrolled courses, progress bars, upcoming deadlines  
   - Quick links: “Continue Course,” “My Profile,” “Available Courses”

2. **Profile** (`/profile`)  
   - Update name, avatar, password  
   - View enrollment history and earned certificates

### 2.2 Course Enrollment

1. **Browse Catalog** (`/courses`)  
   - Search, filter by category or level  
   - View course details (description, modules, prerequisites)

2. **Enroll**  
   - Click **Enroll** → if prerequisites met, course added to Dashboard  
   - If not, sees “Locked until you complete [X]”

### 2.3 Learning Path & Content

1. **Enter Course** (`/courses/{slug}`)  
   - View course outline: Modules → Lessons → Assessments

2. **Access Lesson** (`/lessons/{id}`)  
   - Watch embedded video or read PDF  
   - Mark lesson “Complete” to unlock next

3. **Resource Library**  
   - Download supplemental files & external links per module

### 2.4 Assessments

1. **Take Quiz** (`/courses/{slug}/quiz/{id}`)  
   - Answer MCQ / T-F / Short-Answer questions  
   - Submit → see score & feedback

2. **Submit Practical Assignment** (`/courses/{slug}/assignment/{id}`)  
   - Upload screenshot or project file  
   - Wait for Trainer grading

### 2.5 Competency & Certification

1. **Progress Tracking** (`/progress`)  
   - Visual competency status: Pass / Fail per module  
   - Notifications for retakes if needed

2. **Download Certificate** (`/certificate/{id}`)  
   - After passing all competencies, click “Download Certificate (PDF)”

### 2.6 Collaboration & Support

1. **Discussion Forum** (`/courses/{slug}/forum`)  
   - Post questions, reply to peers or Trainer  
   - Receive email/in-app notifications on replies

2. **Notifications**  
   - Alerts for deadlines, new content, grades posted

3. **Logout**  
   - Click “Logout” → redirected to Landing Page

---

## 3. Trainer Flow

### 3.1 Onboarding & Profile

1. **Account Creation**  
   - Admin creates Trainer account or Trainer self-registers & is approved  
   - Trainer verifies email, logs in

2. **Trainer Dashboard** (`/trainer/dashboard`)  
   - Overview of managed courses, pending submissions, upcoming sessions

3. **Profile Management** (`/profile`)  
   - Update personal info, avatar, password

### 3.2 Course & Content Management

1. **Create Course** (`/trainer/courses/create`)  
   - Enter title, description, TESDA competency codes, prerequisites

2. **Build Modules & Lessons**  
   - Add Modules → within each, add Lessons (video URL, PDF upload, external link)  
   - Rearrange via drag-and-drop

3. **Resource Library**  
   - Upload & tag shared files for search across courses

### 3.3 Assessment Creation

1. **Create Quiz** (`/trainer/courses/{slug}/quiz/create`)  
   - Add questions (MCQ, T-F, short answer), set time limits, randomization

2. **Define Practical Assignments** (`/trainer/courses/{slug}/assignment/create`)  
   - Describe task, set due date, attach rubric

### 3.4 Student Evaluation

1. **Grade Submissions** (`/trainer/submissions`)  
   - View uploads → assign score & feedback  
   - Reopen assignment for retake if needed

2. **Review Quiz Results**  
   - See aggregated quiz scores; reset attempts if required

### 3.5 Communication & Monitoring

1. **Announcements** (`/trainer/courses/{slug}/announcements`)  
   - Post course-wide notices (new modules, deadlines)

2. **Forum Moderation**  
   - Delete inappropriate posts, highlight FAQs

3. **Progress Reports**  
   - View cohort dashboards: average scores, completion rates  
   - Export CSV of student performance

4. **Logout**  
   - Ends session, returns to Landing Page

---

## 4. Admin Flow

### 4.1 Admin Dashboard

1. **Login** (`/login`)  
   - Enter credentials → land on Admin Dashboard (`/admin/dashboard`)

2. **High-Level Metrics**  
   - View total enrollments, completion %, active courses, pending approvals

### 4.2 User & Role Management

1. **Manage Users** (`/admin/users`)  
   - List all Admins, Trainers, Students  
   - Create / Edit / Delete accounts, reset passwords

2. **Assign Roles & Permissions**  
   - Toggle abilities: course creation, grading, report access, settings

### 4.3 Course Oversight

1. **Approve Trainer Courses**  
   - Review new drafts → Approve / Request Changes / Reject

2. **Seed TESDA Course**  
   - Bulk-upload a template of TESDA standard modules

### 4.4 System Configuration

1. **Settings** (`/admin/settings`)  
   - Update site name, logo, color palette, email templates

2. **Certificate Designer**  
   - Upload background, position text fields, save template

3. **Notification Schedules**  
   - Configure daily/weekly digests, set SMTP sender

### 4.5 Reporting & Compliance

1. **Run Reports** (`/admin/reports`)  
   - Generate TESDA compliance reports, export PDF/XLSX

2. **Schedule Automated Reports**  
   - Create recurring jobs to email stakeholders

### 4.6 Maintenance & Logs

1. **Audit Logs** (`/admin/logs`)  
   - View user actions (login, edits, grading changes)

2. **System Health**  
   - Monitor queues, failed jobs, disk usage

3. **Logout**  
   - End session, back to Landing Page
