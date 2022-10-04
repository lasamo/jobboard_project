CREATE TABLE jobs(
  jobID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  job_title varchar(255) NOT NULL,
  job_location varchar(255) NOT NULL,
  job_description varchar(1000) NOT NULL,
  job_salary float NOT NULL,
  date datetime
);
CREATE TABLE companies(
  companyID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  company_name varchar(255) NOT NULL,
  company_email varchar(255) NOT NULL,
  company_city varchar(255) NOT NULL,
  company_phone varchar(255) NOT NULL
);
CREATE TABLE people(
  peopleID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  people_fname varchar(255) NOT NULL,
  people_lname varchar(255) NOT NULL,
  people_email varchar(255) NOT NULL,
  people_city varchar(255) NOT NULL,
  people_phone varchar(255) NOT NULL,
  people_status bit
);
CREATE TABLE info(
  infoID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  info_user varchar(255) NOT NULL,
  info_numemails int NOT NULL,
  info_jobID int NOT NULL
)
