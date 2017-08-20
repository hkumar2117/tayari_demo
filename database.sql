//DB Design

CREATE DATABASE tayari

USE tayari 
// Will contain list of job
CREATE TABLE job_list (
`id` INT NOT NULL AUTO_INCREMENT,
job_category varchar(50) not null,
job_details text not null,
job_experince varchar(30) not null,
job_location varchar(30) not null,
job_country varchar(255) null,
job_status varchar(15) null,
created_by int default null,
updated_by int default null,   
created_at timestamp NOT null DEFAULT CURRENT_TIMESTAMP,
updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00', 
primary key (id)
);

// Will contain user saved jobs
CREATE TABLE user_savedjob (
`id` INT NOT NULL AUTO_INCREMENT,
user_id int not null,
job_id int not null,
active boolean not null,
primary key (id)
);

// Will contain user not ADMIN/USER details 
CREATE TABLE user_details (
`id` INT NOT NULL AUTO_INCREMENT,
name varchar(50) not null,
phone int default null,
email varchar(50) default null,
active boolean not null,
user_type varchar(1) not null,
others varchar(255) default null,
primary key (id)
);


