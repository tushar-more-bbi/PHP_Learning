<?php

//READ FILE()
// In PHP, the readfile() function is used to output the contents of a file. It reads a file and writes its contents to the output buffer, making it useful for streaming files to the browser, such as images, PDFs, or text files.
// $a = readfile("file.html");
// echo $a;//Returns the number of characters that are in file.txt file


//fopen() - In PHP, fopen() is a function used to open files or URLs for reading, writing, or appending. It returns a file pointer resource on success, or false on failure.
$fptr = fopen("file.txt","r");
// echo $fptr;



//fread() - fread() is used to read from an open file pointer (resource) created using fopen().
// $content = fread($fptr,filesize("file.txt"));
// echo $content;



//fclose() - fclose() is used to close an open file pointer (resource) that was created using fopen().
// fclose($fptr);


//fgets() - In PHP, fgets() is a function used to read a line from an open file. 
// echo fgets($fptr);
// echo fgets($fptr);

// while($a = fgets($fptr)){
//     echo $a . '<br>';
// };

// echo "End of the file has been reached" . "<br>";

//fgetc() - In PHP, fgetc() is a function used to read a single character from an open file
// $a = fgetc($fptr);

// while($a = fgetc($fptr)){
//     if($a == "."){
//       break;
//     }
//     else{
//      echo $a;
//     }
// };

// fclose($fptr);

//WRITING & APPENDING TO FILES

// fwrite() In PHP, fwrite() is a function used to write to an open file
/*
$fptr = fopen("file2.txt","w");
fwrite($fptr,"This is the sentence which has been wrote through php program file handling function to file2.txt\n");
fwrite($fptr,"This is the second sentence. \n");
fwrite($fptr,"This is the third sentence. \n");
*/

//If we want to append into existing file then open file using fopen() and change the mode to append
$fptr1=fopen("file.txt","a");
fwrite($fptr1,"This is the fourth sentence.");




?>