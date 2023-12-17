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
- **Encapsulation**: Bundling data and methods that operate on that data within a single unit.
- **Inheritance**: Creating a new class based on an existing class, inheriting its properties and methods.
- **Polymorphism**: The ability of a class to take on multiple forms.

## Classes and Objects

In PHP, a class is defined using the `class` keyword. Objects are instances of classes, created using the `new` keyword.

```php
class MyClass {
    // Properties and methods go here
}

$obj = new MyClass();