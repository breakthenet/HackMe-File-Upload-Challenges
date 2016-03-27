<?php

if($_FILES['uploadedfile']['name']) {
    $target_path = $_FILES['uploadedfile']['name'];
    
    // look for extension at end of name
    $extension= strtolower(end(explode(".", $target_path)));
    if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension != "png")
    {
        echo 'Invalid File Extension: '.$extension.'.<br />
        &gt; <a href="preferences_c5_changepic.php?action=picchange">Go Back</a>';
        die();
    }
    
    $local_file_path = basename($_FILES['uploadedfile']['name']);
    
    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $local_file_path))    {
        echo "File uploaded successfully.<br><br>";
    }
    else
    {
        echo 'Valid file upload, but server-side error while attempting to save file.<br />
        &gt; <a href="preferences_c5_changepic.php?action=picchange">Go Back</a>';
        die();
    }
    
    $esc_npic =
            mysql_real_escape_string(
                    htmlentities($local_file_path, ENT_QUOTES, 'ISO-8859-1'), $c);
    mysql_query(
            "UPDATE users SET display_pic='{$esc_npic}' WHERE userid=$userid",
            $c);
    print "Pic changed!";
}
else {
    print 
            '<h3>Pic Change</h3>
<form enctype="multipart/form-data" action="page_loader.php?page=preferences_c5_changepic.php" method="POST">
New Pic: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload Pic" />
</form>';
}
