
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
  </head>
  <body>
    <form method="POST">
      <p>Calculator</p>
      <label for="num1">Enter first number</label>
      <input type="number" id="num1" name="num1" /><br />
      <label for="num2">Enter second number</label>
      <input type="number" id="num2" name="num2" /><br />
      <label for="op">Choose an operation:</label>
      <select id="op" name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option></select
      ><br />
      <button type="submit" name="submit">Calculate</button>
    </form>
  </body>
</html>

<?php
//Define class Calc
class Calc {
  //store the operators in private property
  private $num1;
  private $num2;
  private $op;
//constructor method to initialize object property
  public function __construct($num1, $num2, $op) { 
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->op = $op;
  }


//Switch statement to determine operation based on operator
  public function calculate() {
    switch ($this->op) {
      case '+': 
        $ans = $this->num1 + $this->num2;
        return $ans;
        break;
      case '-':
        $ans = $this->num1 - $this->num2;
        return $ans;
        break;
      case '*':
        $ans = $this->num1 * $this->num2;
        return $ans;
        break;
      case '/':
        if ($this->num2 != 0) {
          $ans = $this->num1 / $this->num2;
          return $ans;
        } else {
          return "Division by zero error!";
        }
        break;
      default:
        return "Invalid operator";
        break;
    }
  }
}

//check if form has been submitted using the post method.
if ($_SERVER["REQUEST_METHOD"] = "POST") {
   //Get values from the post array. 
  $num1 = $_POST['num1'];
  $op = $_POST['op'];
  $num2 = $_POST['num2'];

  $data = new Calc($num1, $num2, $op);
  
//echo the results.
  echo $data->calculate();
}

?>
