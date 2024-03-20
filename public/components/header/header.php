<?php
    $sql = "SELECT * FROM nav_menu ORDER BY link_order ASC";
    $query = mysqli_query($conn, $sql);
?>

<div class="header flex">
    <div class="logo-container">
        <a href="/">Prayosha Institute</a>
    </div>
    <div class="menu-container flex">
        <?php
            while($row = mysqli_fetch_assoc($query)){
                echo "
                <li class='menu-item'>
                    <a href='". $row['item_link'] ."' class='item-link'>". $row['item_name'] ."</a>
                </li>
                ";
            }
        ?>
        
    </div>
</div>