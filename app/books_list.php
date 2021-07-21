<ul>
    <?php
        foreach ($books as $index => $book) { ?>
            <li>
                Livre N°<?php echo $index + 1; ?>
                <?php include "book_information.php"; ?>
            </li>
        <?php }
    ?>
</ul>