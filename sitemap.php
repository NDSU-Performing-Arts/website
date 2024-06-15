<?php

function listPHPFiles($dirPath) {
    if ($handle = opendir($dirPath)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $fullPath = realpath($dirPath . DIRECTORY_SEPARATOR . $entry);
                if (is_dir($fullPath)) {
                    // Recursive call to navigate subdirectories
                    listPHPFiles($fullPath);
                } else {
                    // Check if the file is a PHP file
                    $fileParts = pathinfo($fullPath);
                    if (isset($fileParts['extension']) && strtolower($fileParts['extension']) == 'php') {
                        echo $fullPath . "<br>";
                    }
                }
            }
        }
        closedir($handle);
    }
}

// Call the function starting from the current directory
echo "<pre>";
listPHPFiles(".");
echo "</pre>";

?>
