## Apply


This project is designed to connect job seekers with potential employers, providing a seamless experience for both parties. Built using Laravel, Blade, CSS, and HTML, this platform offers a robust set of features to facilitate job searching and recruitment.

# Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)

# Features

**For Employers:**
- **Account Management:** Employers can create an account and manage their profile, including their company name and logo.
- **Job Posting:** Employers can post job listings, specifying details such as schedule, salary, and tags.
- **Profile Page:** Employers have a dedicated profile page to view all their job postings.
- **Job Management:** Employers can delete their own job posts.

**For Job Seekers:**
You Don't have to create an account and you can view the following:
- **Job Listings:** Access to featured jobs, recent job postings, and jobs filtered by tags.
- **Job Details:** Clicking on a job takes the user to a detailed announcement page.
- **Tag Filtering:** Users can click on tags to view all jobs associated with that tag.

# Installation

To set up the project locally, follow these steps:

1. **Clone the Repository:**
   ```
   git clone https://github.com/your-username/job-search-platform.git
   cd job-search-platform
   ```

2. **Install Dependencies:**
   Ensure you have Composer installed, then run:
   ```
   composer install
   ```

3. **Environment Setup:**
   Copy the `.env.example` to `.env` and configure your database settings.

4. **Database Migration:**
   Run the following command to migrate the database:
   ```
   php artisan migrate
   ```

5. **Serve the Application:**
   Start the Laravel development server:
   ```
   php artisan serve
   ```

# Usage

- **Home Page:** View featured jobs, recent job postings, and explore jobs by tags.
- **Employer Dashboard:** Employers can manage their job postings and view their profile.
- **Job Search:** Users can browse and apply for jobs, filtering by tags and other criteria.


Thank you for checking out the Job Search Platform! We hope this tool helps you find the perfect job or candidate. If you have any questions or feedback, feel free to reach out.
