<?php
    echo '<h3>handling files</h3>';
    echo '<br>';

    // fopen(): Its a better way to open files as compared to readfile() method.
    // Two arguments should be passed in this method. First is file name and the second is the mode in which the file to be opened. Modes: r, w, r+, w+, a, a+ and etc.
    $myFile = fopen('file.txt', 'r');
    
    // fopen('file_name', 'w'): This function is also used to create a file if the file doesn't exist. 

    // $anotherFile = fopen('game.txt', 'w');

    // fread(): It is used to read the content from an opened file.
    // Two arguments should be passed in this method. First is the fopen('file_name'); function and the second is the size filesize('file_name') in bytes of that file.

    // echo fread($myFile, filesize('file.txt'));

    // fgets(): This function is used to read a single line from a file.
    // we can also loop through this function to iterate all the lines.
    
    // while($a = fgets($myFile)){
    //     echo $a;
    // }

    // fgetc(): This function is used to read a single character from a file.
    // we can also loop through this function to iterate all the characters.

    // while($b = fgetc($myFile)){
    //   echo $b;
    //   if($b == '.'){
    //     break;
    //   }
    // }

    // feof(): The feof() function checks if the "end-of-file" (EOF) has been reached. The feof() function is useful for looping through data of unknown length.

    // echo feof($myFile);

    // while(!feof($myFile)){
    //     echo fgets($myFile);
    // }


    // fwrite(): This function is used to write a file. The first argument contains the name of the file and second contains the string to be written.
    $gameFile = fopen('game.txt', 'w');
    fwrite($gameFile, 'This is Cricket07 Game.');
    fwrite($gameFile, 'A classical cricket game.'); 

    


    // fclose(): It is used to close an opened file. It requires only one argument which is the file name. It returns 1 for true if the file is closed and 0 for false if the file isn't. Its a good programming practice to close and opened file because we should avoid the file processing in background on server if the file is no longer in use.

    if(fclose($myFile)){
        echo '<br> File closed successfully!';
    }
    else{
        echo 'file could not be closed';
    }
   

?>