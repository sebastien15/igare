-- Create the database
CREATE DATABASE IF NOT EXISTS BikeDatabase;
USE BikeDatabase;

-- Create the table
CREATE TABLE IF NOT EXISTS Bikes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    number VARCHAR(50),
    name VARCHAR(255),
    bike_id INT,
    status VARCHAR(50),
    owner VARCHAR(255),
    agent_username VARCHAR(255),
    agent_nid VARCHAR(50),
    approved_motif VARCHAR(255),
    use_type VARCHAR(255),
    actions TEXT
);

-- Insert dummy data
INSERT INTO Bikes (number, name, bike_id, status, owner, agent_username, agent_nid, approved_motif, use_type, actions)
VALUES
    ('001', 'Mountain Bike', 101, 'Available', 'John Doe', 'agent1', '123456789', 'Approved for sports', 'Personal', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('002', 'City Cruiser', 102, 'Rented', 'Jane Smith', 'agent2', '987654321', 'Approved for commuting', 'Rental', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('003', 'Road Bike', 103, 'Unavailable', 'Bob Johnson', 'agent3', '111223344', 'Approved for racing', 'Sports', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('004', 'Cruiser', 104, 'Available', 'Eva Miller', 'agent4', '555111222', 'Approved for leisure', 'Personal', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('005', 'Electric Bike', 105, 'Rented', 'Alex Turner', 'agent5', '987654123', 'Approved for commuting', 'Rental', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('006', 'Mountain E-Bike', 106, 'Unavailable', 'Sara White', 'agent6', '654321987', 'Approved for sports', 'Personal', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('007', 'Touring Bike', 107, 'Available', 'Daniel Brown', 'agent7', '789654321', 'Approved for long trips', 'Travel', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('008', 'Folding Bike', 108, 'Rented', 'Emma Davis', 'agent8', '456789123', 'Approved for commuting', 'Rental', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('009', 'BMX Bike', 109, 'Unavailable', 'Michael Johnson', 'agent9', '321987654', 'Approved for stunts', 'Sports', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('010', 'Gravel Bike', 110, 'Available', 'Olivia Taylor', 'agent10', '159357852', 'Approved for rough terrains', 'Adventure', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('011', 'Hybrid Bike', 111, 'Rented', 'William Clark', 'agent11', '258369147', 'Approved for commuting', 'Rental', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('012', 'Kids Bike', 112, 'Available', 'Sophia Moore', 'agent12', '456123789', 'Approved for children', 'Kids', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('013', 'Fixed Gear Bike', 113, 'Rented', 'Ethan Wilson', 'agent13', '789123456', 'Approved for urban cycling', 'Rental', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('014', 'Tandem Bike', 114, 'Unavailable', 'Isabella Davis', 'agent14', '321456987', 'Approved for couples', 'Couples', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('015', 'Recumbent Bike', 115, 'Available', 'Lucas Smith', 'agent15', '987321456', 'Approved for comfort', 'Personal', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('016', 'Cyclocross Bike', 116, 'Rented', 'Mia Johnson', 'agent16', '456987321', 'Approved for racing', 'Sports', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('017', 'Fat Bike', 117, 'Unavailable', 'Liam Turner', 'agent17', '321654789', 'Approved for snow', 'Adventure', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('018', 'Unicycle', 118, 'Available', 'Ava Brown', 'agent18', '789654123', 'Approved for skills', 'Sports', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('019', 'Cargo Bike', 119, 'Rented', 'Noah Davis', 'agent19', '123789654', 'Approved for transporting goods', 'Cargo', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}'),
    ('020', 'Hybrid Bike', 120, 'Available', 'Alice Green', 'agent20', '555666777', 'Approved for commuting', 'Rental', '{"print_bike": true, "bike_receipt": true, "mutate": true, "view_owner": true, "manage_bike": true, "delete_bike": true}');
