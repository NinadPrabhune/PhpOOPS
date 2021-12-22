<?php
// PHP - The final Keyword
// The final keyword can be used to prevent "class inheritance" or to prevent "method overriding".




final class Fruit {
  // some code
}

// // will result in error
// class Strawberry extends Fruit {
//   // some code
// }





class Fruit1 {
  final public function intro() {
    // some code
  }
}

// class Strawberry1 extends Fruit1 {
//   // will result in error
//   public function intro() {
//     // some code
//   }
// }
?>