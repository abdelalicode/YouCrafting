# PHP OOP 


## Table of Contents

- [Introduction](#introduction)
- [Key Concepts](#key-concepts)
- [Classes and Objects](#classes-and-objects)
- [Properties and Methods](#properties-and-methods)
- [Encapsulation](#encapsulation)
- [Inheritance](#inheritance)
- [Polymorphism](#polymorphism)

## Introduction

PHP supports Object-Oriented Programming (OOP), a programming paradigm that uses objects – instances of classes – for structuring code. This paradigm enhances code organization, reusability, and maintainability.



## Key Concepts

- **Class**: A blueprint for creating objects.
- **Object**: An instance of a class.
- **Properties**: Variables within a class that store data.
- **Methods**: Functions within a class that perform actions.
- **Encapsulation**: Encapsulation promotes data hiding, preventing direct manipulation of object properties from outside the class. By encapsulating data and methods.
- **Inheritance**: Creating a new class based on an existing class, inheriting its properties and methods.
- **Polymorphism**: Polymorphism means "many forms", and it occurs when we have many classes that are related to each other by inheritance. Like we specified in the previous chapter; Inheritance lets us inherit fields and methods from another class. Polymorphism uses those methods to perform different tasks.
- **Abstraction**: Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

## Classes and Objects

In PHP, a class is defined using the `class` keyword. Objects are instances of classes, created using the `new` keyword.

```php
class MyClass {
    // Properties and methods go here
}

$obj = new MyClass();