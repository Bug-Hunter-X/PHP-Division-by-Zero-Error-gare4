function foo(a, b) {
  if (a === 0 || b === 0) {
    return 0; 
  }
  return a / b;
}

$result = foo(10, 0); // This will cause a division by zero error
print_r($result);