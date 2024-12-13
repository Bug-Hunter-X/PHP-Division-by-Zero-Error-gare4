function foo(a, b) {
  if ($b === 0) {
    return "Division by zero error"; // Or throw an exception
  } 
  return a / b;
}

$result = foo(10, 0);
print_r($result); // Outputs "Division by zero error"

$result = foo(10, 2);
print_r($result); // Outputs 5