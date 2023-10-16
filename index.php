<?php

    require_once './book.php';
    require_once './customer.php';


    $book1 = new Book("1234", "Hello Bangladesh", "ASHRAFUL", 160);
    $customer1 = new Customer(124, "ashraful", "islam", "ashrafulcse.ru@gmail.com");

    echo $book1->__toString();
    echo $customer1->__toString();

    
    echo "</br>".$book1->getCopy();

?>