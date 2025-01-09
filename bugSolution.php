```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $value) {
    if (is_string($value)) {
      $newData[] = strtolower($value);
    } else {
      $newData[] = $value; //Handle non-string values
    }
  }
  return $newData;
}

$myData = ['apple', 'Banana', 'Orange'];
$processedData = processData($myData);
print_r($processedData);
print_r($myData); //Original array remains unchanged
```