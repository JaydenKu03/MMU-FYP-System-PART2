SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `fyp_web`
--

-- --------------------------------------------------------
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(40) NOT NULL,
  `user_password` VARCHAR(20) NOT NULL,
  `user_email` VARCHAR(30) NOT NULL,
  `user_phone` VARCHAR(11) NOT NULL,
  `user_role` VARCHAR(10) NOT NULL CHECK (`user_role` IN ('admin', 'supervisor', 'student')),
  PRIMARY KEY (`user_ID`)
);


-- --------------------------------------------------------
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
    `admin_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`admin_ID`),
    FOREIGN KEY (`user_ID`) REFERENCES `user`(`user_ID`) ON DELETE CASCADE
);

ALTER TABLE `admin` AUTO_INCREMENT = 80001;


-- --------------------------------------------------------
-- Table structure for table `student`
--

CREATE TABLE `student` (
    `student_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `specialization` VARCHAR(20) NOT NULL CHECK (`specialization` IN ('Computer Science','Cybersecurity','Game Development','Data Science','Software Engineering','Information System')),
    `user_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`student_ID`),
    FOREIGN KEY (`user_ID`) REFERENCES `user`(`user_ID`) ON DELETE CASCADE
);

ALTER TABLE `student` AUTO_INCREMENT = 10001;


-- --------------------------------------------------------
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
    `supervisor_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`supervisor_ID`),
    FOREIGN KEY (`user_ID`) REFERENCES `user`(`user_ID`) ON DELETE CASCADE
);

ALTER TABLE `supervisor` AUTO_INCREMENT = 50001;


-- --------------------------------------------------------
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
    `proposal_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `student_name` VARCHAR(40) NOT NULL,
    `student_ID` INT(10) UNSIGNED NOT NULL,
    `specialization` VARCHAR(20) NOT NULL CHECK (`specialization` IN ('Computer Science','Cybersecurity','Game Development','Data Science','Software Engineering','Information System')),
    `project_title` VARCHAR(100) NOT NULL,
    `supervisor_name` VARCHAR(40) NOT NULL,
    `supervisor_ID` INT(10) UNSIGNED NOT NULL,
    `co_supervisor_name` VARCHAR(40),
    `proposed_by` VARCHAR(10) NOT NULL CHECK (`proposed_by` IN ('Student', 'Lecture', 'Industry')),
    `project_type` VARCHAR(50) NOT NULL CHECK (`project_type` IN ('Application', 'Research', 'Application and Research')),
    `project_specialization` VARCHAR(20) NOT NULL CHECK (`project_specialization` IN ('Computer Science','Cybersecurity','Game Development','Data Science','Software Engineering','Information System')),
    `project_category` VARCHAR(100) NOT NULL,
    `industry_collaboration` VARCHAR(3) NOT NULL CHECK (`industry_collaboration` IN ('yes', 'no')),
    `file_address` VARCHAR(100) NOT NULL,
    `proposal_status` VARCHAR(10) NOT NULL CHECK (`proposal_status` IN ('approve', 'pending')),
    PRIMARY KEY (`proposal_ID`),
    FOREIGN KEY (`student_ID`) REFERENCES `student`(`student_ID`) ON DELETE CASCADE,
    FOREIGN KEY (`supervisor_ID`) REFERENCES `supervisor`(`supervisor_ID`) ON DELETE CASCADE
);


-- --------------------------------------------------------
-- Table structure for table `meeting_record`
--

CREATE TABLE `meeting_record` (
    `meeting_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `meeting_title` VARCHAR(50) NOT NULL,
    `meeting_date` DATE NOT NULL,
    `meeting_time` TIME NOT NULL,
    `meeting_desc` VARCHAR(100) NOT NULL,
    `student_ID` INT(10) UNSIGNED NOT NULL,
    `supervisor_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`meeting_ID`),
    FOREIGN KEY (`student_ID`) REFERENCES `student`(`student_ID`) ON DELETE CASCADE,
    FOREIGN KEY (`supervisor_ID`) REFERENCES `supervisor`(`supervisor_ID`) ON DELETE CASCADE
);


-- --------------------------------------------------------
-- Table structure for table `meeting_log`
--

CREATE TABLE `meeting_log`(
    `meeting_log_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `file_address` VARCHAR(100) NOT NULL,
    `student_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`meeting_log_ID`),
    FOREIGN KEY (`student_ID`) REFERENCES `student`(`student_ID`) ON DELETE CASCADE
);


-- --------------------------------------------------------
-- Table structure for table `announcement`
--

CREATE TABLE `announcement`(
    `announcement_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_by` VARCHAR(40) NOT NULL,
    `announcement_title` VARCHAR(50) NOT NULL,
    `announcement_content` VARCHAR(350) NOT NULL,
    `admin_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`announcement_ID`),
    FOREIGN KEY (`admin_ID`) REFERENCES `admin`(`admin_ID`) ON DELETE CASCADE
);


-- --------------------------------------------------------
-- Table structure for table `event`
--

CREATE TABLE `event`(
    `event_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_by` VARCHAR(40) NOT NULL,
    `event_date` DATE NOT NULL,
    `event_title` VARCHAR(50) NOT NULL,
    `admin_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`event_ID`),
    FOREIGN KEY (`admin_ID`) REFERENCES `admin`(`admin_ID`) ON DELETE CASCADE
);


-- --------------------------------------------------------
-- Table structure for table `goal_and_progress`
--

CREATE TABLE `goal_and_progress`(
    `goal_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `task_assigned` VARCHAR(50) NOT NULL,
    `current_progress` VARCHAR(50) NOT NULL,
    `next_goal` VARCHAR(50) NOT NULL,
    `comment` VARCHAR(50) NOT NULL,
    `student_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`goal_ID`),
    FOREIGN KEY (`student_ID`) REFERENCES `student`(`student_ID`) ON DELETE CASCADE
);


-- --------------------------------------------------------
-- Table structure for table `assessment`
--

CREATE TABLE `assessment`(
    `assessment_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `assessment_date` DATE NOT NULL,
    `program_name` VARCHAR(40) NOT NULL,
    `file_address` VARCHAR(100) NOT NULL,
    `supervisor_ID` INT(10) UNSIGNED NOT NULL,
    `student_ID` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (`assessment_ID`),
    FOREIGN KEY (`student_ID`) REFERENCES `student`(`student_ID`) ON DELETE CASCADE,
    FOREIGN KEY (`supervisor_ID`) REFERENCES `supervisor`(`supervisor_ID`) ON DELETE CASCADE
);


--
-- ----------------------- DUMPING DATA -------------------------
--

-- user data
INSERT INTO `user` (`user_name`, `user_password`, `user_email`, `user_phone`, `user_role`) VALUES
('Alice', 'admin123', 'alice@gmail.com', '0123456789', 'admin'),
('Bob', 'admin123', 'bob@gmail.com', '01245678912', 'admin'),
('Jayden', 'admin123', 'Jayden@gmail.com', '0122515491', 'admin'),
('Camellya', 'admin123', 'Camellya@gmail.com', '0165487315', 'admin'),

('Charlie', 'student123', 'charlie@gmail.com', '01345678903', 'student'),
('David', 'student123', 'david@gmail.com', '01123456789', 'student'),
('Eva', 'student123', 'eva@gmail.com', '0123678905', 'student'),
('Frank', 'student123', 'frank@gmail.com', '0179872478', 'student'),
('Grace', 'student123', 'grace@gmail.com', '0198792467', 'student'),
('Hank', 'student123', 'hank@gmail.com', '0101254879', 'student'),
('AbuAbi', 'student123', 'AbuAbi@gmail.com', '0165789254', 'student'),
('Dom', 'student123', 'Dom@gmail.com', '0152485987', 'student'),
('Vivian', 'student123', 'vivian@gmail.com', '0114587548', 'student'),
('Kai', 'student123', 'Kai@gmail.com', '016982888', 'student'),

('Ivy', 'supervisor123', 'ivy@gmail.com', '0129783467', 'supervisor'),
('Jack', 'supervisor123', 'jack@gmail.com', '0125786548', 'supervisor'),
('Karen', 'supervisor123', 'karen@gmail.com', '0105485691', 'supervisor'),
('Leo', 'supervisor123', 'leo@gmail.com', '0176543168', 'supervisor'),
('Sherif', 'supervisor123', 'Sherif@gmail.com', '0158792482', 'supervisor'),
('Jhon', 'supervisor123', 'Jhon@gmail.com', '0163658987', 'supervisor');


-- admin data
INSERT INTO `admin` (`user_ID`) VALUES
(1),
(2),
(3),
(4);


-- student data
INSERT INTO `student` (`specialization`, `user_ID`) VALUES
('Computer Science', 5), 
('Cybersecurity', 6), 
('Game Development', 7), 
('Data Science', 8),
('Software Engineering', 9), 
('Information System', 10),
('Data Science', 11),
('Game Development', 12), 
('Software Engineering', 13), 
('Software Engineering', 14);


-- supervisor data
INSERT INTO `supervisor` (`user_ID`) VALUES
(15),
(16),
(17), 
(18),
(19),
(20);


-- proposal data
INSERT INTO `proposal` (
    `student_name`, `student_ID`, `specialization`, `project_title`, 
    `supervisor_name`, `supervisor_ID`, `co_supervisor_name`, `proposed_by`, 
    `project_type`, `project_specialization`, `project_category`, 
    `industry_collaboration`, `file_address`, `proposal_status`
) VALUES
    ('Charlie', 10001, 'Computer Science', 'AI-powered Chatbot for Critical Systems', 
     'Ivy', 50001, 'Jack', 'Student', 
     'Application and Research', 'Computer Science', 'Critical System', 
     'no', 'proposal//AI_chatbot_proposal.pdf', 'approve'),

    ('David', 10002, 'Cybersecurity', 'Advanced Cryptography Methods for Data Security', 
     'Jack', 50002, 'Karen', 'Lecture', 
     'Research', 'Cybersecurity', 'Cryptography and Data Security', 
     'no', 'proposal//cryptography_proposal.pdf', 'approve'),

    ('Eva', 10003, 'Game Development', 'Immersive Game Design for Virtual Reality', 
     'Karen', 50003, 'Leo', 'Student',
     'Application', 'Game Development', 'Game Design Prototyping (GDP)', 
     'no', 'proposal//VR_game_design_proposal.pdf', 'pending'),

    ('Frank', 10004, 'Data Science', 'Data Analytics for Smart Healthcare Systems', 
     'Leo', 50004, 'Ivy', 'Student', 
     'Research', 'Data Science', 'Data Analytics', 
     'no', 'proposal//data_analytics_healthcare_proposal.pdf', 'approve'),

    ('Grace', 10005, 'Software Engineering', 'Service-Oriented System for E-Commerce', 
     'Sherif', 50005, 'Jhon', 'Industry', 
     'Application', 'Software Engineering', 'Service Oriented Computing', 
     'yes', 'proposal/ecommerce_system_proposal.pdf', 'pending'),
    
    ('Hank', 10006, 'Information System', 'IT Infrastructure for Smart Cities', 
     'Sherif', 50005, 'Ivy', 'Lecture', 
     'Application', 'Information System', 'IT Infrastructure', 
     'yes', 'proposal/IT_infrastructure_proposal.pdf', 'approve'),

    ('AbuAbi', 10007, 'Data Science', 'Intelligent Systems for Automated Data Processing', 
     'Karen', 50003, 'Leo', 'Student', 
     'Application and Research', 'Data Science', 'Intelligent Systems', 
     'no', 'proposal/intelligent_systems_proposal.pdf', 'pending'),

    ('Dom', 10008, 'Game Development', 'Game Algorithm Research for AI NPC Behavior', 
     'Leo', 50004, 'Jack', 'Industry', 
     'Research', 'Game Development', 'Game Algorithm Research (GAR)', 
     'no', 'proposal/game_algorithm_research_proposal.pdf', 'pending'),

    ('Vivian', 10009, 'Software Engineering', 'Transaction Processing Systems for Banking', 
     'Ivy', 50001, 'Sherif', 'Student', 
     'Application', 'Software Engineering', 'Transaction Processing Systems', 
     'no', 'proposal/transaction_processing_proposal.pdf', 'approve'),

    ('Kai', 10010, 'Software Engineering', 'Investigation and Analysis of Software Vulnerabilities', 
     'Jhon', 50006, 'Jack', 'Student', 
     'Research', 'Software Engineering', 'Investigation and Analysis', 
     'no', 'proposal/software_vulnerabilities_proposal.pdf', 'pending');

-- meeting_record data
INSERT INTO `meeting_record` (
    `meeting_title`, `meeting_date`, `meeting_time`, `meeting_desc`, `student_ID`, `supervisor_ID`
) VALUES
    ('Project Kickoff', '2025-01-15', '10:00:00', 'Discussed project scope and deliverables', 10001, 50001),
    ('Cryptography Research Update', '2025-01-16', '14:00:00', 'Reviewed initial research findings', 10002, 50002),
    ('Data Analysis Plan', '2025-01-17', '11:00:00', 'Discussed methodology for data analysis', 10004, 50004),
    ('Smart Cities IT Infrastructure', '2025-01-18', '09:00:00', 'Reviewed IT requirements and system design', 10006, 50005),
    ('Banking TPS Review', '2025-01-19', '15:00:00', 'Discussed system integration and security', 10009, 50001);


-- meeting_log data
INSERT INTO `meeting_log` (
    `file_address`, `student_ID`
) VALUES
    ('meeting_log/charlie_meeting_log1.pdf', 10001),
    ('meeting_log/david_meeting_log1.pdf', 10002),
    ('meeting_log/frank_meeting_log1.pdf', 10004),
    ('meeting_log/hank_meeting_log1.pdf', 10006),
    ('meeting_log/vivian_meeting_log1.pdf', 10009);


-- announcement data
INSERT INTO `announcement` (
    `post_by`, `announcement_title`, `announcement_content`, `admin_ID`
) VALUES
    ('Camellya', 'FYP PROPOSAL SUBMISSION', 'Student Must Submit Their Proposal By 3rd December. Any late submission will not be accepted', 80004);

-- event data
INSERT INTO `event` (
   `post_by`, `event_date`, `event_title`, `admin_ID`
) VALUES
    ('Alice', '2024-02-21', 'FYP TIPS SHARING WORKSHOP', 80001);


-- goal_and_progress data
INSERT INTO `goal_and_progress` (
    `task_assigned`, `current_progress`, `next_goal`, `comment`, `student_ID`
) VALUES
    ('Complete project proposal draft', 'Draft approved by supervisor', 'Start project implementation', 'Well-prepared proposal', 10001),
    ('Research cryptography methods', 'Initial research completed', 'Develop encryption prototype', 'Good progress on research', 10002),
    ('Analyze healthcare data sets', 'Data collection completed', 'Perform data analysis', 'Impressive dataset preparation', 10004),
    ('Research smart city IT needs', 'Infrastructure plan drafted', 'Implement network simulation', 'Thorough analysis provided', 10006),
    ('Design banking transaction system', 'System design completed', 'Begin coding transactions', 'Comprehensive design', 10009);
