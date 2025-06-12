## Sprint Roadmap

| Sprint | Focus Area                           | Key Deliverables                                                                                        |
|--------|--------------------------------------|---------------------------------------------------------------------------------------------------------|
| 1      | Project Kick-off & Environment       | Laragon & Laravel scaffold; Git repo & CI pipeline; Landing-page wireframe & mockup                      |
| 2      | User Authentication & Landing Page   | Responsive landing page; Registration & login (email/password); Email verification                       |
| 3      | RBAC & User Profiles                 | Role definitions & middleware; Access control; Profile CRUD UI                                           |
| 4      | Course Management – Backend Core     | Courses/modules/lessons schema & models; Admin CRUD; Seed sample TESDA-aligned course                    |
| 5      | Course Management – Front-end & UX   | Course catalog view; Enrollment workflows; Prerequisite checks                                           |
| 6      | Content Delivery & Resource Library  | Lesson viewers (video, PDF); Resource upload & tagging; Search                                           |
| 7      | Assessment Engine                    | Quiz engine (MCQ/T-F/short-answer); Assignment submissions; Grading UI                                   |
| 8      | Competency Tracking & Certificates   | Progress dashboard; Competency pass/fail logic; PDF certificate generation                               |
| 9      | Notifications & Communication        | In-app & email notifications; Discussion forums; Digest scheduler                                        |
| 10     | Reporting & Analytics                | Enrollment/completion dashboards; CSV/XLSX exports; TESDA compliance reports                             |
| 11     | Integration, Security & Performance  | Production storage (S3) setup; Redis caching & queues; 2FA & audit logs                                  |
| 12     | Testing, QA & Polish                 | Unit & feature tests (≥80% coverage); UX polish & responsive fixes; Accessibility audit                  |
| 13     | Deployment & Documentation           | Hostinger deployment scripts; User & admin docs; UAT & go-live checklist                                |
| 14     | Post-Launch Support & Iteration      | Bug-fix sprint; Performance monitoring; Backlog grooming                                                  |

## User Stories

### Admin
- As an **Admin**, I want to create and manage user accounts so that I can control access levels.  
- As an **Admin**, I want to assign roles and permissions so that I can enforce proper access control.  
- As an **Admin**, I want to define and organize courses, modules, and lessons so that TESDA-aligned curricula are accurately represented.  
- As an **Admin**, I want to view reports on enrollments, completions, and assessments so that I can measure performance.  
- As an **Admin**, I want to configure system settings (email templates, certificates) so that the LMS reflects our branding.  
- As an **Admin**, I want to schedule automated reports so that stakeholders receive timely updates.

### Trainer
- As a **Trainer**, I want to build and edit course content (videos, PDFs, SCORM) so that learners have all necessary resources.  
- As a **Trainer**, I want to create quizzes and assignments so that I can assess competencies.  
- As a **Trainer**, I want to grade submissions and provide feedback so that students know how to improve.  
- As a **Trainer**, I want to post announcements and send notifications so that learners stay informed.  
- As a **Trainer**, I want to moderate discussion forums so that learners can collaborate safely.  
- As a **Trainer**, I want to track individual and cohort progress dashboards so that I can intervene when needed.

### Student
- As a **Student**, I want to browse and search courses so that I can find programs that match my goals.  
- As a **Student**, I want to register and enroll in courses so that I can start learning immediately.  
- As a **Student**, I want to access lessons (video, PDF, links) in a mobile-responsive interface so that I can learn anywhere.  
- As a **Student**, I want to take quizzes and submit assignments so that I can demonstrate mastery.  
- As a **Student**, I want to view my progress dashboard and download certificates so that I can track my achievements.  
- As a **Student**, I want to participate in discussions and message trainers so that I can get help.  
- As a **Student**, I want to receive notifications for deadlines so that I never miss an important update.  
