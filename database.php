<?php
$connection = mysqli_connect("localhost", "root", "","homwork");
if($connection){
    echo "Connected";
}
else{
    echo "Not connected";
    echo mysqli_connect_error();
}

$table = "CREATE TABLE example_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name  VARCHAR(50),
    class  VARCHAR(50),
    email VARCHAR(50),
   addresses  VARCHAR(50),
    subjects VARCHAR(50)
)";
if (mysqli_query($connection, $table)) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($connection);
}

$insert_values = "INSERT INTO example_table (name, class, email, addresses, subjects) VALUES
    ('Rohan', '12', 'hgas@gmail.com', 'rainagar', 'maths'),
    ('Sohan', '12', 'tsdf@gmail.com', 'salikpur', 'physics'),
    ('Mohan', '12', 'redf@gmail.com,', 'kolkata', 'chemistry'),
    ('Dhanu', '12', 'ewxc@gmail.com', 'delhi', 'biology'),
    ('Ravi', '12', 'wqcx@gmail.com', 'mumbai', 'english')";
if (mysqli_query($connection, $insert_values)) {
    echo "Values inserted successfully<br>";
} else {
    echo "Error inserting values: " . mysqli_error($connection);
}

?>