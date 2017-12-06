<?php class Vehicle{} class Car extends Vehicle{} class Tesla extends Car {} var_dump(get_parent_class("Tesla")); ?>

<?php
/**
 * This is our main function. In PHP, there isn't really a need for this to be
 * a function, but to keep consistant, I've placed it there anyway, and called
 * it from the script. In keeping with good programming practices, this script
 * exits with a status 0. Any other status would indicate an error condition.
 */

function main(){

  printf("How many numbers of the sequence would you like?\n");

  /*
   * To read from stdin in php, you open it as a file handle, and use
   * the standard file reading functions
   */

  $fr=fopen("php://stdin","r");
  $n = rtrim(fgets($fr,128));
  fclose ($fr);

  /* Then we call the fibonacci function */
  fibonacci($n);
  exit(0);
}

/**
 * The fibonacci function should look familiar.
 */

function fibonacci($n){
  /*
   * Notice that in PHP, we do not have to declare our variables, nor must we
   * declare their types. Also see how variables in PHP are prefaced with the
   * dollar sign. Other than that, this is identical to the C version of this function.
   */
  $a = 0;
  $b = 1;
  for ($i = 0; $i < $n; $i++){
    printf("%d\n",$a);
    $sum = $a+$b;
    $a = $b;
    $b = $sum;
  }
}

/**
 * In PHP, program execution starts here. It isn't neccessary to place functions
 * ahead of the program, but it's a good practice. In a larger application, these
 * functions would be in seperate files. Again, since PHP is a procedural language,
 * I could have simply included the contents of the main function here, rather than
 * defining a function and calling it.
 */

main();

?>
