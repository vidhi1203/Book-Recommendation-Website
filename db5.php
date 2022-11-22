<?php
require_once'db2.php';
$dbname='book_recc';
mysqli_select_db ($conn,$dbname);

  //ACION AND ADVENTURE
     $multi = "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Better Off Dead', 'Lee Child', '1124','2009','1000','Action And Adventure','bookimg/1.jpg');";
// THRILLER
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('To Kill a Mockingbird', 'Harper Lee', '3574','1960','800','Thriller','bookimg/2.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Gone Girl', 'Gillian Flyn', '3179','2012','300','Thriller','bookimg/3.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Silent Patient', 'Alex Michaelides', '3532','2019','700','Thriller','bookimg/4.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('A Time To Kill', 'John Grisham', '1112','1989','450','Thriller','bookimg/5.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('And Then There were None', 'Agatha Christie', '3119','1939','840','Thriller','bookimg/6.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Before I Go To Sleep', 'S.J.Watson', '3234','211','812','Thriller','bookimg/7.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Talented Mr Ripley', 'Patricia Highsmith', '3531','1955','500','Thriller','bookimg/8.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Black Echo', 'Michae Conelly', '3231','1992','700','Thriller','bookimg/9.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Tell No One', 'Harlan coben', '0902','2001','870','Thriller','bookimg/10.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('In The Woods', 'Tana French', '5672','2007','830','Thriller','bookimg/11.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Dark Matter', 'Black Crouch', '3449','2016','890','Thriller','bookimg/12.jpg');";

//ROMANCE
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Pride and Prejudice', 'Jane Austin', '3579','1813','800','Classic Romance','bookimg/13.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Jane Eyre', 'Charlotte Brontw', '6789','1847','800','Classic Romance','bookimg/14.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Shaana', 'Kathleen E E woodwiss', '1273','1977','800','Classic Romance','bookimg/15.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Morning Glory', 'Lavyrle Spencer', '1278','1993','560','Classic Romance','bookimg/16.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Lord of Scoundrels', 'Loretta Chase', '3133','1995','1000','Classic Romance','bookimg/17.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Indigo', 'Bevery Jenkins', '1142','1996','890','Classic Romance','bookimg/18.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Viscount who loved me', 'Julia Quinn', '1864','2000','800','Classic Romance','bookimg/19.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Devil In Winter', 'Lisa Kleypas', '1169','2006','980','Classic Romance','bookimg/20.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Wuthering Heights', 'Emily Bronte', '1167','1847','1156','Classic Romance','bookimg/21.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Romeo and Juliet', 'William Shakespeare', '1597','2000','789','Classic Romance','bookimg/22.jpg');";

     //FICTION
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Such a Fun Age', 'Kiley Reid', '3549','2020','800','Fiction','bookimg/23.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Big Summer', 'Jennifer Wiener', '3659','2020','800','Fiction','bookimg/24.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Perfect Tunes', 'Emily Gould', '3449','2020','810','Fiction','bookimg/25.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Long Bright River', 'Liz Moore', '3759','2020','820','Fiction','bookimg/26.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Weather', 'Jenny Offill', '3933','2020','830','Fiction','bookimg/27.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Glass Hotel', 'Emily Mandel', '4479','2020','840','Fiction','bookimg/28.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Its Not All Downhill From Here', 'Terry McMillan', '2229','2020','850','Fiction','bookimg/29.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Writers And Lovers', 'Lily King', '0009','2020','860','Fiction','bookimg/30.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('All Adults Here', 'Emma Straub', '3179','2020','870','Fiction','bookimg/31.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('A Long Petal Of the Sea', 'Jack London', '6669','2020','880','Fiction','bookimg/32.jpg');";
    //YOUNG ADULTS
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Fault in Our Stars', 'John Green', '1111','2010','700','Young Adults','bookimg/33.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Giver ', 'Lois Lowry', '1113','2013','1000','Young Adults','bookimg/34.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Golden Compass', 'Philip Pullman', '1119','2001','780','Young Adults','bookimg/35.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Eleanor and Park', 'Rainbow Rowell', '9111','2011','890','Young Adults','bookimg/36.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('A Wrinkle In Time', 'Madeleine L Engle', '3231','2013','860','Young Adults','bookimg/37.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('A Diary Of A Young Girl', 'Anne Frank', '2222','2012','8890','Young Adults','bookimg/38.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Pretty Little Liars', 'Sara Shephard', '2579','2000','8000','Young Adults','bookimg/39.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Age Of Miracles', 'Karen Thompson Walker', '6660','2019','3400','Young Adults','bookimg/40.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Prep', 'Curtis SittenField', '1179','2020','8780','Young Adults','bookimg/41.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('We Are Okay', 'Nina LaCour', '2288','2000','340','Young Adults','bookimg/42.jpg');";
     # action 
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Life of Pi', 'Yann Martel', '3578','2003','900','Action And Adventure','bookimg/1.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Three Musketeers', 'Alexander Dumas', '3456','2014','300','Action And Adventure','bookimg/2.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('The Call Of The Wild', 'Jack London', '3579','2000','800','Action And Adventure','bookimg/3.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Wings Of Fury', 'Emily R King', '3411','2003','900','Action And Adventure','bookimg/4.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Walk The Wire', 'David Baldacci', '3666','2001','990','Action And Adventure','bookimg/5.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Relentless', 'Mark Greeney', '3444','2013','500','Action And Adventure','bookimg/6.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Fahrenheit 451', 'Ray BradBury', '3978','2019','900','Action And Adventure','bookimg/7.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('Sooley', 'John Grisham', '3774','1998','670','Action And Adventure','bookimg/8.jpg');";
     $multi .= "INSERT INTO Recommendation (bookname, authorname, authorid,yop,price,genre,img)
     VALUES ('A Gambling Man', 'David Baldacci', '3132','2007','340','Action And Adventure','bookimg/9.jpg');";
         
     if ($conn->multi_query($multi) === TRUE) {
      
     } else {
       echo "Error: " . $multi . "<br>" . $conn->error;
     }
     
?>