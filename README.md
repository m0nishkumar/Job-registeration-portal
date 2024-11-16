
# Job Searching Portal Using Indeed API

A web-based job searching portal built with **PHP** that integrates with the **Indeed API** to help users find relevant job opportunities based on keywords, location, and job type. It enables job seekers to search, filter, and view job listings directly from the **Indeed** platform.

## Features

- **Job Search**: Users can search for jobs using keywords, location, and job type.
- **Real-time Results**: Fetches job listings directly from the Indeed API.
- **Job Details**: Users can view detailed information about each job, including job description, company name, location, and more.
- **Responsive Design**: Optimized for desktop and mobile devices.
- **Simple and User-Friendly Interface**: Easy-to-navigate layout with intuitive controls for job search and filters.

## Tech Stack

- **Frontend**: HTML, CSS (to create responsive and visually appealing job search forms and results page)
- **Backend**: PHP (for server-side logic)
- **API Integration**: Indeed API (to retrieve job listings)

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/job-searching-portal.git
   cd job-searching-portal
   ```

2. **Set up the environment**:
   - **Get your Indeed API key**:
     - Go to the Indeed API documentation (https://developer.indeed.com/) and get your API key.
     - Set the `INDEED_API_KEY` constant in the `config.php` file:
       ```php
       define('INDEED_API_KEY', 'your_indeed_api_key');
       ```

3. **Run the application**:
   - Open your terminal and navigate to the project directory.
   - Run the following command to start the server:
     ```bash
     php -S localhost:8000
     ```
   - Now, open your web browser and visit `http://localhost:8000` to access the job searching portal.

## Usage

- **Search Jobs**:
  - Users can enter a job title, location, and select a job type (e.g., full-time, part-time, internship).
  - Click the "Search" button to retrieve results from Indeed.
  - The results page will display a list of job postings with details like company name, location, job title, etc.
- **View Job Details**:
  - Click on a job listing to view detailed information about the job, including job description, responsibilities, qualifications, and company information.
- **Filter Results**:
  - Use filters (e.g., full-time, part-time, internship) to narrow down the results based on user preferences.
- **Save Search History**:
  - Users can save their search queries and view their history in their profile dashboard.

## Roadmap

- [ ] Implement user authentication and user profiles.
- [ ] Enable users to save their favorite jobs.
- [ ] Add notifications for new job listings based on user preferences.
- [ ] Integrate user feedback and reviews for job listings.
- [ ] Improve search performance and accuracy using advanced search algorithms.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add new feature'`).
5. Push your branch (`git push origin feature-branch`).
6. Create a pull request.
