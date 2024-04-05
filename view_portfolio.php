<?php
if (isset($_GET['portfolio'])) {
    $portfolio_file = $_GET['portfolio'];
    
    // Directory where portfolio files are stored
    $portfolio_dir = "portfolio_uploads/";
    
    // Path to the portfolio file
    $file_path = $portfolio_dir . $portfolio_file;
    
    // Check if the file exists
    if (file_exists($file_path)) {
        // Set appropriate headers
        header("Content-Type: application/pdf"); 
        
        // Output the file
        readfile($file_path);
    } else {
        echo "Portfolio file not found.";
    }
} else {
    echo "Portfolio file not specified.";
}
?>
