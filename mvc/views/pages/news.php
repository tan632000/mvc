<?php

echo $data['Number'].'</br>';
?>
<?php
    while($row = mysqli_fetch_array($data['SV'])){
        echo $row['hoten'].'</br>';
    }
?>