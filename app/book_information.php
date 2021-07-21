<ul>
    <li><a href="filter.php?filterType=title&filterValue=<?php echo $book->getTitle() . '">' . $book->getTitle() ?></a></li>
    <li><a href="filter.php?filterType=author&filterValue=<?php echo $book->getAuthor() . '">' . $book->getAuthor() ?></a></li>
    <li><a href="filter.php?filterType=releaseYear&filterValue=<?php echo $book->getReleaseYear() . '">' . $book->getReleaseYear() ?></a></li>
    <li><a href="filter.php?filterType=type&filterValue=<?php echo $book->getType() . '">' . $book->getType() ?></a></li>
</ul>