<?php

namespace App;

class Library
{
    CONST LIBRARY_FILE_PATH = __DIR__ . '/public/data/bibliotheque.csv';

    private $books;

    public function __construct()
    {
        $this->books = [];
        $this->injectBooks();
    }

    public function injectBooks()
    {
        if (!$libraryFile = fopen(self::LIBRARY_FILE_PATH, 'r')) {
            return $this;
        }

        $i = 0;

        while (($bookInformations = fgetcsv($libraryFile, 1000, ";")) !== FALSE) {

            $i++;

            if ($i === 1) {
                continue;
            }

            $book = new Book();

            $book->setTitle($bookInformations[0]);
            $book->setAuthor($bookInformations[1]);
            $book->setReleaseYear($bookInformations[2]);
            $book->setType($bookInformations[3]);

            $this->addBook($book);
        }

    }

    public function getBooksByFilter($filterType, $filterValue)
    {
        $filteredBooks = [];

        foreach ($this->books as $book) {

            if (!$book instanceof Book) {
                continue;
            }

            $getter = 'get' . ucfirst($filterType);

            if ($book->$getter() === $filterValue) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;

    }

    /**
     * @return mixed
     */
    public function getBooks()
    {
        return $this->books;
    }

    public function addBook(Book  $book)
    {
        $this->books[] = $book;

        return $this;
    }


}