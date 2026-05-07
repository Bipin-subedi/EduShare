<?php
include 'db.php';

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    city VARCHAR(100),
    bio TEXT,
    credits INT DEFAULT 10,
    image VARCHAR(255),
    rating FLOAT DEFAULT 5.0
)";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    skill_name VARCHAR(100),
    type VARCHAR(20)
)";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS sessions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teacher_id INT,
    learner_id INT,
    skill_name VARCHAR(100),
    hours INT,
    status VARCHAR(20) DEFAULT 'pending'
)";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    review_user_id INT,
    rating INT,
    text TEXT
)";
mysqli_query($conn, $sql);

// Check if data exists
$check = mysqli_query($conn, "SELECT * FROM users");
if (mysqli_num_rows($check) == 0) {
    // Insert Users
    mysqli_query($conn, "INSERT INTO users (name, city, bio, credits, image, rating) VALUES 
    ('Alex Johnson', 'New York', 'Hi! I\'m Alex. I love teaching Javascript and Web Development and I\'m looking to learn Guitar. Been coding since high school and want to pick up a creative hobby.', 15, 'https://i.pravatar.cc/150?u=alex', 4.8),
    ('Sarah Miller', 'London', 'Hi! I\'m Sarah. I love teaching Photography and I\'m looking to learn UI Design. Professional photographer for 5 years, excited to expand into design.', 8, 'https://i.pravatar.cc/150?u=sarah', 4.9),
    ('Mike Ross', 'Toronto', 'Hi! I\'m Mike. I love teaching Guitar and I\'m looking to learn Photoshop. Play guitar in a local band and need help making our posters look good.', 12, 'https://i.pravatar.cc/150?u=mike', 4.7),
    ('Emma Watson', 'Los Angeles', 'Hi! I\'m Emma. I love teaching UI Design and I\'m looking to learn Photography. UX/UI Designer at a startup, want to get into street photography.', 10, 'https://i.pravatar.cc/150?u=emma', 5.0),
    ('James Chen', 'San Francisco', 'Hi! I\'m James. I love teaching Python and I\'m looking to learn Cooking. Software engineer by day, aspiring chef by night.', 20, 'https://i.pravatar.cc/150?u=james', 4.3),
    ('Priya Sharma', 'Mumbai', 'Hi! I\'m Priya. I love teaching Data Science and I\'m looking to learn Piano. Working on my Masters and want to pick up music as a stress reliever.', 6, 'https://i.pravatar.cc/150?u=priya', 4.6),
    ('Tom Baker', 'Chicago', 'Hi! I\'m Tom. I love teaching Cooking and I\'m looking to learn Python. Culinary school grad who wants to build a recipe app.', 14, 'https://i.pravatar.cc/150?u=tom', 4.2),
    ('Lisa Park', 'Seattle', 'Hi! I\'m Lisa. I love teaching Piano and I\'m looking to learn Data Science. Music teacher for 3 years, curious about working with data.', 9, 'https://i.pravatar.cc/150?u=lisa', 4.5),
    ('David Okafor', 'Austin', 'Hi! I\'m David. I love teaching Video Editing and I\'m looking to learn Guitar. YouTuber with 5K subscribers looking to add music to my content.', 11, 'https://i.pravatar.cc/150?u=david', 4.7)
    ");

    // Insert Skills
    mysqli_query($conn, "INSERT INTO skills (user_id, skill_name, type) VALUES 
    (1, 'Javascript', 'teach'), (1, 'Web Development', 'teach'), (1, 'Guitar', 'learn'),
    (2, 'Photography', 'teach'), (2, 'UI Design', 'learn'),
    (3, 'Guitar', 'teach'), (3, 'Photoshop', 'learn'),
    (4, 'UI Design', 'teach'), (4, 'Photography', 'learn'),
    (5, 'Python', 'teach'), (5, 'Cooking', 'learn'),
    (6, 'Data Science', 'teach'), (6, 'Piano', 'learn'),
    (7, 'Cooking', 'teach'), (7, 'Python', 'learn'),
    (8, 'Piano', 'teach'), (8, 'Data Science', 'learn'),
    (9, 'Video Editing', 'teach'), (9, 'Guitar', 'learn')
    ");

    // Insert Sessions
    mysqli_query($conn, "INSERT INTO sessions (teacher_id, learner_id, skill_name, hours, status) VALUES 
    (2, 1, 'Photography', 2, 'completed'),
    (3, 1, 'Guitar', 1, 'pending'),
    (5, 7, 'Python', 3, 'accepted'),
    (8, 6, 'Piano', 2, 'completed'),
    (4, 2, 'UI Design', 1, 'pending')
    ");

    // Insert Reviews
    mysqli_query($conn, "INSERT INTO reviews (user_id, review_user_id, rating, text) VALUES 
    (1, 2, 5, 'Great photography lesson! Very helpful and patient.'),
    (2, 4, 5, 'Emma is amazing at explaining design principles.'),
    (6, 8, 4, 'Good piano basics, would recommend.'),
    (7, 5, 5, 'James explains Python so clearly. Best teacher!'),
    (8, 6, 4, 'Priya knows her stuff in data science.')
    ");
}

echo "Database setup successfully!";
?>
