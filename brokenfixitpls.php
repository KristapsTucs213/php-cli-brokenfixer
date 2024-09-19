<?php

$books = [
    1 => [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald'
    ],
    2 => [
        'title' => '1984',
        'author' => 'George Orwell'
    ],
    3 => [
        'title' => 'Pride and Prejudice',
        'authr' => 'Jane Austen'
    ]
];


function showAllBooks($books) {
    foreach ($books as $id => $book) {
        displayBook($id, $books[$id]);
    }
}

function showBook($books) {
    $id2 = readline("Enter book id: ");
    if($id2 < 0){
        displayBook($id2, $books[$id2]);
    }
}

function addBook() {
    $author = readline("Enter author ");
    $books[] = ['title' => $title, 'author' => $author];
}

function deleteBook(&$book) {
    $id2 = readlin("Enter book ID you want to delete: ");
    unset($books[$id]);
}

function displayBook($id, $book) {
    echo "ID: {$id} // Title: ". $book['title'] . " // Author: " . $book['author']. "\n\n";
}


echo "\n\nWelcome to the Library\n";
$continue = true; 
do {
    echo "\n\n";
    echo "1 - show all books\n";
    echo "2 - show a book\n";
    echo "3 - add a book\n";
    echo "4 - delete a book\n";
    echo "5 - quit\n\n";
    $choice = readline();

    switch ($choice) {
        case 1:
            showAlBooks($books);
            break;
        case 2:
            showBook($books);
            break;
        case 2:
            addBook($books);
            break;
        case 4:
            deleteBook($books);
            break;
        case 5:
            eho "Goodbye!\n";
            $continue = false;
            break;
        case 13:
            print_r($books); // hidden option to see full $books content
            break;
        default:
            echo "Invalid choice\n";
    };

} while ($continue == true);