<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
  
// creating the tables

//    $sql =<<<EOF
//       CREATE TABLE EMPLOYEE1
//       (ID INT AUTO PRIMARY KEY NOT NULL,
//       NAME TEXT  NOT NULL);

//       CREATE TABLE DESIGNATION1
//       (ID INT AUTO PRIMARY KEY NOT NULL,
//       DESIGNATION TEXT  NOT NULL);
// EOF;

//    $ret = $db->exec($sql);
//    if(!$ret){
//       echo $db->lastErrorMsg();
//    } else {
//       echo "Employee and Designation Tables created successfully\n";
//    }
//    $db->close();



// adding records to employee db

$sql =<<<EOF
      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (1, 'Nabimanya Nelson John Paul');

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (2, 'Kenneth Ojakol' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME )
      VALUES (3, 'Thomas Kyamagero' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (4, 'Paul Nabimanya' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (5, 'Kyamagero Paul' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (6, 'SSali Peter' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (7, 'Zizinga Pius' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (8, 'Jalia Nabukalu Esthe' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (9, 'John Zizinga' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (10, 'Sharon Opoka' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (11, 'Nabimanya Paul' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (12, 'Ojakol Kenneth' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (13, 'Opoka Jane Sharon' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (14, 'Kikoyo Paul' );

      INSERT or REPLACE INTO EMPLOYEE1 (ID,NAME)
      VALUES (15, 'Esther Nabukalu' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (1, 'Manager' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (2, 'Backend Developer' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (3, ' Accountant' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (4, 'Director of Operations' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (5, 'Network Engineer' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (6, 'I.T Team Lead' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (7, 'Finance Manager' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (8, 'Systems Admin Intern' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (9, 'Backend Developer' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (10, 'Communications Manager' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (11, 'Assistant Director of Operations' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (12, 'Backend Developer' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (13, 'General Caretake' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (14, 'Front End Developer' );

      INSERT or REPLACE INTO DESIGNATION1 (ID,DESIGNATION)
      VALUES (15, 'Graphics Designer' );

EOF;
   $ret = $db->exec($sql);
if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully \n";
   }
   $db->close();


//    $sql =<<<EOF
//    SELECT * from EMPLOYEE1;
// EOF;

// $ret = $db->query($sql);
// while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
//    echo "ID = ". $row['ID'] . "\n";
//    echo "NAME = ". $row['NAME'] ."\n";
   
// }
// echo "Operation done successfully\n";
// $db->close();



?>