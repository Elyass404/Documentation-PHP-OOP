# PHP-OOP-Documentation

## I. The Goal of Object-Oriented Programming (OOP)

### Definition

    Object-Oriented Programming (OOP) is a programming paradigm centered around the concept of "objects." Objects are instances of classes, which are blueprints defining the properties (attributes) and behaviors (methods) that the objects will have. The core idea of OOP is to model real-world entities and their interactions using these objects. This approach allows programmers to create modular, reusable, and easily maintainable code.

### Benefits

 1. Reusability:

 **Definition**: Reusability refers to the ability to use existing code for new purposes. In OOP, classes and objects can be reused across different parts of a program or in entirely different programs without modification.

**Example**: Imagine a Car class that defines properties like make, model, and methods like drive(). This class can be reused to create multiple car objects with different attributes (e.g., Toyota, Ford) without rewriting the code.

2. Scalability:

**Definition**: Scalability refers to the ability of a system to handle growth, whether in terms of the amount of data, the number of users, or the complexity of tasks it performs. OOP promotes scalability by organizing code into modular units (classes and objects) that can be extended and modified independently.

**Example**: In an e-commerce application, you can start with a Product class and later extend it to create specialized classes like Electronics and Clothing, each with its own additional properties and methods. This makes it easier to scale the application as the business grows.

3. Maintainability:

**Definition**: Maintainability refers to the ease with which software can be maintained, including correcting defects, improving performance, or adapting to a changed environment. OOP enhances maintainability by promoting a clear and modular code structure.

**Example**: If you need to fix a bug in the Payment processing part of your application, you can focus on the Payment class without worrying about unrelated parts of the code. This localized approach makes debugging and updates much simpler.

3. Maintainability:

**Definition**: Maintainability refers to the ease with which software can be maintained, including correcting defects, improving performance, or adapting to a changed environment. OOP enhances maintainability by promoting a clear and modular code structure.

**Example**: If you need to fix a bug in the Payment processing part of your application, you can focus on the Payment class without worrying about unrelated parts of the code. This localized approach makes debugging and updates much simpler.

### Example in PHP
Here's a simple example to illustrate these concepts in PHP:

    <?php
    // Define a class called Car
    class Car {
    // Properties
        public $make;
        public $model;

    // Constructor method to initialize properties
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Method to simulate driving the car
    public function drive() {
        echo "The $this->make $this->model is driving.\n";
    }
    }

    // Creating objects (instances) of the Car class
    $car1 = new Car("Toyota", "Corolla");
    $car2 = new Car("Ford", "Mustang");

    // Using the objects
    $car1->drive(); // Output: The Toyota Corolla is driving.
    $car2->drive(); // Output: The Ford Mustang is driving.
    ?>


## II. Core OOP Concepts

1. Encapsulation
Definition: Encapsulation is the concept of wrapping data (variables) and methods (functions) together as a single unit, often a class. It restricts direct access to some of the object's components, which can prevent accidental interference and misuse of the data. Encapsulation is often achieved using access modifiers like private, protected, and public.

**Example**:

    <?php
    class Person {
    private $name;  // Private property

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Public method to get the name
    public function getName() {
        return $this->name;
    }

    // Public method to set the name
    public function setName($name) {
        $this->name = $name;
    }
    }

    $person = new Person("John");
    echo $person->getName(); // Output: John
    $person->setName("Jane");
    echo $person->getName(); // Output: Jane
    ?>

In this example, the $name property is private and can only be accessed or modified using the public methods getName() and setName().

2. Abstraction
Definition: Abstraction is the concept of hiding the complex implementation details and showing only the essential features of the object. It allows the user to interact with the object through a simplified interface without needing to understand the underlying complexities.

**Example**:

    <?php
    abstract class Animal {
    // Abstract method (must be implemented by subclasses)
    abstract protected function makeSound();

    // Common method
    public function sleep() {
        echo "Sleeping...\n";
        }
    }

    class Dog extends Animal {
    // Implementing the abstract method
    protected function makeSound() {
        echo "Woof! Woof!\n";
        }
    }

    $dog = new Dog();
    $dog->makeSound(); // Output: Woof! Woof!
    $dog->sleep();     // Output: Sleeping...
    ?>

In this example, Animal is an abstract class with an abstract method makeSound() that must be implemented by any subclass. The Dog class extends Animal and provides the specific implementation of makeSound().

3. Inheritance
Definition: Inheritance is the mechanism by which one class (child class) inherits the properties and methods of another class (parent class). It promotes code reusability and establishes a relationship between the parent and child classes.

**Example**:

    <?php
    class Vehicle {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function drive() {
        echo "Driving a $this->brand vehicle.\n";
        }
    }

    class Car extends Vehicle {
        private $model;

        public function __construct($brand, $model) {
        parent::__construct($brand);
        $this->model = $model;
    }

    public function drive() {
        echo "Driving a $this->brand $this->model.\n";
        }
    }

    $car = new Car("Toyota", "Corolla");
    $car->drive(); // Output: Driving a Toyota Corolla.
    ?>

In this example, Car inherits from Vehicle and overrides the drive() method to provide a more specific implementation.

4. Polymorphism

Definition: Polymorphism is the ability of different classes to be treated as instances of the same class through inheritance. It allows objects to be interacted with through a common interface, enabling code flexibility and reuse.

**Example**:

    <?php
    class Shape {
        // Method to calculate area (to be overridden by subclasses)
        public function calculateArea() {
            return 0;
        }
    }

    class Circle extends Shape {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function calculateArea() {
            return pi() * pow($this->radius, 2);
        }
    }

    class Rectangle extends Shape {
        private $width;
        private $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function calculateArea() {
            return $this->width * $this->height;
        }
    }

    $circle = new Circle(5);
    $rectangle = new Rectangle(4, 6);

    echo "Circle Area: " . $circle->calculateArea() . "\n"; // Output: Circle Area: 78.539816339745
    echo "Rectangle Area: " . $rectangle->calculateArea() . "\n"; // Output: Rectangle Area: 24
    ?>

In this example, Shape is the base class, and Circle and Rectangle are subclasses that override the calculateArea() method. Polymorphism allows us to treat Circle and Rectangle objects as instances of the Shape class.

## III. Classes and Objects

### Defining a Class and Creating an Object

In Object-Oriented Programming (OOP), a class is a blueprint for creating objects. It defines a set of properties and methods that the created objects will have. An object is an instance of a class, containing actual values and data.

#### Defining a Class
To define a class in PHP, you use the class keyword followed by the class name and a pair of curly braces {}. Inside the braces, you can define properties and methods.

**Syntax**

    <?php
    class Car {
        // Properties
        public $make;
        public $model;

        // Method
        public function drive() {
            echo "The car is driving.\n";
        }
    }
    ?>

#### Creating an Object 

To create an object of a class, you use the new keyword followed by the class name.

**Syntax**

    <?php
    // Create an object of the Car class
    $myCar = new Car();

    // Accessing and setting properties
    $myCar->make = "Toyota";
    $myCar->model = "Corolla";

    // Calling a method
    $myCar->drive(); // Output: The car is driving.

    echo "Make: " . $myCar->make . "\n"; // Output: Make: Toyota
    echo "Model: " . $myCar->model . "\n"; // Output: Model: Corolla
    ?>

- 3.1. Properties and Methods:

Understanding Class Attributes (Properties) and Functions (Methods):

Properties are variables that belong to a class. They define the attributes or data that objects created from the class will hold. Methods are functions that belong to a class. They define the behavior or actions that objects created from the class can perform.

*Examples of How Methods Interact with Properties*:

    <?php
    class Car {
        // Properties
        public $make;
        public $model;
        private $year;

        // Constructor to initialize properties
        public function __construct($make, $model, $year) {
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
        }

        // Method to display car details
        public function displayDetails() {
            echo "Car: $this->year $this->make $this->model\n";
        }

        // Getter method for the private property 'year'
        public function getYear() {
            return $this->year;
        }

        // Setter method for the private property 'year'
        public function setYear($year) {
            if ($year > 1885) { // First car was invented around 1885
                $this->year = $year;
            } else {
                echo "Invalid year.\n";
            }
        }
    }

    // Create an object of the Car class
    $myCar = new Car("Toyota", "Corolla", 2023);

    // Using methods to interact with properties
    $myCar->displayDetails(); // Output: Car: 2023 Toyota Corolla

    // Accessing a private property through a getter method
    echo "Year: " . $myCar->getYear() . "\n"; // Output: Year: 2023

    // Modifying a private property through a setter method
    $myCar->setYear(2025);
    echo "Updated Year: " . $myCar->getYear() . "\n"; // Output: Updated Year: 2025

    // Trying to set an invalid year
    $myCar->setYear(1800); // Output: Invalid year.
    ?>

- 3.2. Constructors and Destructors

**Automatic Initialization of Objects Using __construct()**

*Constructors*:

The __construct() method is a special function called a constructor. It is automatically called when an object is created and is used to initialize the object's properties.

**Example of Constructor**:

    <?php
    class Person {
        // Properties
        public $name;
        public $age;

        // Constructor method
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Method to display person's details
        public function displayDetails() {
            echo "Name: $this->name, Age: $this->age\n";
        }
    }

    // Create an object of the Person class
    $person = new Person("Alice", 30);
    $person->displayDetails(); // Output: Name: Alice, Age: 30
    ?>

**Cleaning Up Resources with __destruct()**

*Destructor*

The __destruct() method is a special function called a destructor. It is automatically called when an object is destroyed or goes out of scope. It is typically used to clean up resources.


**Example of Destructor**:

    <?php
    class UserSession {
        // Properties
        private $username;

        // Constructor to initialize the username
        public function __construct($username) {
            $this->username = $username;
            echo "Session started for user: $this->username\n";
        }

        // Destructor to end the session
        public function __destruct() {
            echo "Session ended for user: $this->username\n";
        }

        // Method to simulate some user activity
        public function doSomething() {
            echo "$this->username is doing something.\n";
        }
    }

    // Create an object of the UserSession class
    $session = new UserSession("john_doe");

    // Simulate user activity
    $session->doSomething(); // Output: john_doe is doing something.

    // Destructor is called automatically when the script ends or object goes out of scope
    ?>

- 3.3. Access Modifiers

Access modifiers define the visibility and accessibility of properties and methods.

*public*: Accessible from anywhere, both inside and outside the class.

*private*: Accessible only within the class itself.

*protected*: Accessible within the class and by classes derived from that class (subclasses).

**Example** of Encapsulation Using Getters and Setters

    <?php
    class BankAccount {
        // Properties
        private $accountNumber;
        private $balance;

        // Constructor to initialize properties
        public function __construct($accountNumber, $balance) {
            $this->accountNumber = $accountNumber;
            $this->balance = $balance;
        }

        // Getter for account number
        public function getAccountNumber() {
            return $this->accountNumber;
        }

        // Getter for balance
        public function getBalance() {
            return $this->balance;
        }

        // Setter for balance
        public function setBalance($amount) {
            if ($amount >= 0) {
                $this->balance = $amount;
            } else {
                echo "Invalid amount.\n";
            }
        }

        // Method to display account details
        public function displayDetails() {
            echo "Account Number: $this->accountNumber, Balance: $this->balance\n";
        }
    }

    // Create an object of the BankAccount class
    $account = new BankAccount("12345678", 1000.00);
    $account->displayDetails(); // Output: Account Number: 12345678, Balance: 1000

    // Accessing and modifying private properties through getters and setters
    echo "Balance: " . $account->getBalance() . "\n"; // Output: Balance: 1000
    $account->setBalance(1500.00);
    echo "Updated Balance: " . $account->getBalance() . "\n"; // Output: Updated Balance: 1500
    $account->setBalance(-500); // Output: Invalid amount.
    ?>

## IV. Inheritance

- Parent and Child Classes

Inheritance is a fundamental concept in OOP that allows a class (called the child class or subclass) to inherit properties and methods from another class (called the parent class or superclass). This promotes code reusability and establishes a hierarchical relationship between classes.

**NOTE**: *To create a child class that inherits from a parent class, use the extends keyword.*

**Example**:
    <?php
    // Define the parent class
    class Vehicle {
        // Properties
        public $brand;
        public $model;

        // Constructor method
        public function __construct($brand, $model) {
            $this->brand = $brand;
            $this->model = $model;
        }

        // Method to display vehicle details
        public function displayDetails() {
            echo "Vehicle: $this->brand $this->model\n";
        }

        // Method to simulate driving the vehicle
        public function drive() {
            echo "The vehicle is driving.\n";
        }
    }

    // Define the child class that inherits from Vehicle
    class Car extends Vehicle {
        // Additional property specific to Car
        public $doors;

        // Constructor method
        public function __construct($brand, $model, $doors) {
            parent::__construct($brand, $model); // Call the parent constructor
            $this->doors = $doors;
        }

        // Method to display car details (overrides parent method)
        public function displayDetails() {
            echo "Car: $this->brand $this->model with $this->doors doors\n";
        }
    }

    // Create an object of the Car class
    $myCar = new Car("Toyota", "Corolla", 4);

    // Using methods inherited from the parent class
    $myCar->drive(); // Output: The vehicle is driving.

    // Using methods defined in the child class
    $myCar->displayDetails(); // Output: Car: Toyota Corolla with 4 doors
    ?>

*Explanation*
Parent Class (Vehicle):

The Vehicle class defines properties $brand and $model, and methods __construct, displayDetails, and drive.

Child Class (Car):

The Car class extends the Vehicle class using the extends keyword.

It adds an additional property $doors.

It calls the parent class's constructor using parent::__construct to initialize inherited properties.

It overrides the displayDetails method to provide more specific information.

Creating and Using an Object:

An object of the Car class is created, and its methods are used. The drive method is inherited from the Vehicle class, and the displayDetails method is overridden in the Car class.

- Overriding Methods

Method overriding allows a child class to provide a specific implementation of a method that is already defined in its parent class. The overridden method in the child class should have the same name and parameters as the method in the parent class.

**Example**:

    <?php
    // Define the parent class
    class Animal {
        // Method to make a sound
        public function makeSound() {
            echo "The animal makes a sound.\n";
        }
    }

    // Define the child class that inherits from Animal
    class Dog extends Animal {
        // Overriding the makeSound method
        public function makeSound() {
            echo "The dog barks: Woof! Woof!\n";
        }
    }

    // Define another child class that inherits from Animal
    class Cat extends Animal {
        // Overriding the makeSound method
        public function makeSound() {
            echo "The cat meows: Meow! Meow!\n";
        }
    }

    // Create objects of the child classes
    $dog = new Dog();
    $cat = new Cat();

    // Using the overridden methods
    $dog->makeSound(); // Output: The dog barks: Woof! Woof!
    $cat->makeSound(); // Output: The cat meows: Meow! Meow!
    ?>

*Explanation*

Parent Class (Animal):

The Animal class defines a method makeSound.

Child Classes (Dog and Cat):

The Dog and Cat classes inherit from the Animal class.

Each child class overrides the makeSound method to provide a specific implementation for a dog and a cat.

Creating and Using Objects:

Objects of the Dog and Cat classes are created, and their overridden makeSound methods are called, producing different outputs.

By using inheritance and method overriding, you can create a hierarchy of classes that share common functionality while allowing for specific implementations in child classes.

## V. Abstract Classes

1. Creating Templates for Other Classes

An **abstract class** in PHP is a class that cannot be instantiated on its own and is meant to be extended by other classes. Abstract classes are used to provide a common template for derived classes. They may contain abstract methods, which are methods without a body that must be implemented by the subclasses.

**Syntax**: To define an abstract class, use the abstract keyword before the class keyword.*

    <?php
    abstract class Animal {
        // Abstract method (must be implemented by subclasses)
        abstract protected function makeSound();

        // Non-abstract method
        public function sleep() {
            echo "Sleeping...\n";
        }
    }
    ?>

**Abstract Methods and Their Implementation**

1. Define an Abstract Class with an Abstract Method:

    <?php
    abstract class Animal {
        // Abstract method (must be implemented by subclasses)
        abstract protected function makeSound();

        // Non-abstract method
        public function sleep() {
            echo "Sleeping...\n";
        }
    }
    ?>

2. Implement the Abstract Method in Subclasses:

    <?php
    class Dog extends Animal {
        // Implementing the abstract method
        protected function makeSound() {
            echo "Woof! Woof!\n";
        }
    }

    class Cat extends Animal {
        // Implementing the abstract method
        protected function makeSound() {
            echo "Meow! Meow!\n";
        }
    }

    // Create objects of the subclasses
    $dog = new Dog();
    $cat = new Cat();

    // Using the implemented methods
    $dog->makeSound(); // Output: Woof! Woof!
    $cat->makeSound(); // Output: Meow! Meow!

    // Using the non-abstract method from the abstract class
    $dog->sleep(); // Output: Sleeping...
    $cat->sleep(); // Output: Sleeping...
    ?>


**Explanation**

#### Abstract Class (Animal):

The Animal class is defined as an abstract class with an abstract method makeSound() and a non-abstract method sleep().

#### Abstract Method (makeSound):

The makeSound() method is declared as an abstract method without an implementation. Subclasses must implement this method.

####Subclasses (Dog and Cat):

The Dog and Cat classes extend the Animal class and provide the implementation for the makeSound() method.

Both subclasses inherit the non-abstract method sleep() from the Animal class.

#### Creating Objects and Using Methods:

Objects of the Dog and Cat classes are created, and their makeSound() methods are called, producing different sounds.

The sleep() method from the Animal class is used by both objects, demonstrating that subclasses can use non-abstract methods from their parent class.

## VI. Interfaces

### Defining a Contract for Classes

An interface in PHP is a blueprint for classes. It defines a set of methods that any class implementing the interface must provide. Interfaces are used to ensure that certain methods are implemented in a class, thus defining a contract that classes must adhere to. Interfaces themselves do not contain any method implementations, only method signatures.

**Syntax**: *To define an interface, use the interface keyword.*

**Example**:

    <?php
    interface Drawable {
        // Method signatures without implementations
        public function draw();
    }

    class Circle implements Drawable {
        // Implementing the interface method
        public function draw() {
            echo "Drawing a circle.\n";
        }
    }

    class Square implements Drawable {
        // Implementing the interface method
        public function draw() {
            echo "Drawing a square.\n";
        }
    }

    // Create objects of the classes that implement the interface
    $circle = new Circle();
    $square = new Square();

    // Using the interface method
    $circle->draw(); // Output: Drawing a circle.
    $square->draw(); // Output: Drawing a square.
    ?>

Explanation:

1. Interface (Drawable):

The Drawable interface defines a method draw() without providing its implementation.

2. Implementing the Interface:

The Circle and Square classes implement the Drawable interface using the implements keyword.

Each class provides its specific implementation of the draw() method.

3. Creating Objects and Using Methods:

Objects of the Circle and Square classes are created, and their draw() methods are called, producing different outputs.

### Implementing Multiple Interfaces

A class in PHP can implement multiple interfaces, allowing it to adhere to multiple contracts. This is useful for creating flexible and reusable code.

**Example**:

    <?php
    interface Movable {
        public function move();
    }

    interface Storable {
        public function store();
    }

    class Robot implements Movable, Storable {
        // Implementing the Movable interface method
        public function move() {
            echo "Robot is moving.\n";
        }

        // Implementing the Storable interface method
        public function store() {
            echo "Robot is storing data.\n";
        }
    }

    // Create an object of the Robot class
    $robot = new Robot();

    // Using the interface methods
    $robot->move();   // Output: Robot is moving.
    $robot->store();  // Output: Robot is storing data.
    ?>

**Explanation**

1. Interfaces (Movable and Storable):

The Movable interface defines a method move() without providing its implementation.

The Storable interface defines a method store() without providing its implementation.

2. Implementing Multiple Interfaces:

The Robot class implements both the Movable and Storable interfaces using the implements keyword.

The class provides specific implementations for both the move() and store() methods.

3. Creating Objects and Using Methods:

An object of the Robot class is created, and its move() and store() methods are called, demonstrating the implementation of multiple interfaces.

*Conclusion:*

By using interfaces, you can create classes that adhere to specific contracts, ensuring a consistent and predictable behavior. Implementing multiple interfaces allows classes to fulfill multiple roles and responsibilities, making the code more modular and maintainable.

## VII. Static Methods and Properties

### Shared Properties and Utility Methods

Static properties and static methods belong to the class itself rather than to any particular instance of the class. This means they can be accessed without creating an object of the class. Static properties are shared among all instances of a class, and static methods are often used for utility functions that don't require any data from an instance of the class.

**Syntax**: *To define static properties and methods, use the static keyword.*

**Example**:

1. Defining Static Properties and Methods:

    <?php
    class Calculator {
        // Static property
        public static $pi = 3.14159;

        // Static method
        public static function add($a, $b) {
            return $a + $b;
        }

        // Static method using a static property
        public static function calculateCircleArea($radius) {
            return self::$pi * $radius * $radius;
        }
    }
    ?>

2. Accessing Static Properties and Methods: Static properties and methods can be accessed using the scope resolution operator :: .

    <?php
    // Accessing static property
    echo "Value of Pi: " . Calculator::$pi . "\n"; // Output: Value of Pi: 3.14159

    // Using static methods
    echo "Sum: " . Calculator::add(5, 3) . "\n"; // Output: Sum: 8
    echo "Circle Area: " . Calculator::calculateCircleArea(5) . "\n"; // Output: Circle Area: 78.53975
    ?>

**Explanation**

1. Static Property ($pi):

The static property $pi belongs to the Calculator class itself and can be accessed using Calculator::$pi.

2. Static Methods (add and calculateCircleArea):

The static method add takes two parameters, adds them, and returns the result. It is called using Calculator::add(5, 3).

The static method calculateCircleArea uses the static property $pi to calculate the area of a circle given its radius. It is called using Calculator::calculateCircleArea(5).

3. Accessing Static Properties and Methods:

Static properties and methods are accessed using the class name followed by the scope resolution operator :: and the property or method name.

For example, Calculator::$pi and Calculator::add(5, 3).

### Benefits of Static Methods and Properties

1. Shared Data:

Static properties are shared among all instances of a class, making them useful for storing data that should be consistent across all instances.

Example: Storing the value of Pi ($pi) in the Calculator class.

2. Utility Functions:

Static methods are often used for utility functions that perform common tasks and don't require any instance-specific data.

Example: Adding two numbers (add) or calculating the area of a circle (calculateCircleArea).

3. Access Without Instantiation:

Static properties and methods can be accessed without creating an object of the class, making them convenient for tasks that don't need instance-specific data.

By using static properties and methods, you can create shared data and utility functions that are easily accessible and consistent across your application.

## VIII. Namespaces

### Organizing Code with Namespaces

Namespaces in PHP are a way to encapsulate and organize code into logical groups, preventing name collisions between classes, functions, and constants. They allow you to use the same class name in different parts of your application without conflict. This is especially useful in large projects or when using third-party libraries.

**Syntax**: *To define a namespace, use the namespace keyword at the top of your PHP file.*

**Example**:

1. Defining a Namespace:

    <?php
    namespace MyApp\Models;

    class User {
        public function __construct() {
            echo "User model from MyApp\Models namespace.\n";
        }
    }
    ?>

2. Using a Namespace: To use a class from a namespace, you need to import it using the use keyword or reference it with its fully qualified name.

    <?php
    namespace MyApp\Controllers;

    // Import the User class from the MyApp\Models namespace
    use MyApp\Models\User;

    class UserController {
        public function createUser() {
            $user = new User();
            echo "User created in UserController.\n";
        }
    }

    // Create an object of the UserController class
    $controller = new UserController();
    $controller->createUser(); // Output: User model from MyApp\Models namespace. User created in UserController.
    ?>

3. Fully Qualified Name: You can also refer to the class with its fully qualified name without using the use keyword.

    <?php
    namespace MyApp\Controllers;

    class UserController {
        public function createUser() {
            $user = new \MyApp\Models\User();
            echo "User created in UserController.\n";
        }
    }

    // Create an object of the UserController class
    $controller = new UserController();
    $controller->createUser(); // Output: User model from MyApp\Models namespace. User created in UserController.
    ?>

#### created BY: *Ilyass Mar*








