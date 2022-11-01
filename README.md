Basics Of OOPs in PHP

Object oriented programming is a technique to design your application. In object oriented programming, everything will be around the objects and class. By using OOP in php you can create modular web application. By using OOP in php we can perform any activity in the object model structure. There are many benefit of using oop over the parallel or procedural programming. Further in this part we will cover some basic of object and class and its implementation in php.
PHP Class and Objects

In object oriented programming a class can be an abstract data type, blue print or template. You could consider the name of a class as noun like name of a person, place or thing.  For example Fruit is a class, where apple, orange are the object of this class.
Object is the instantiate of a class. A class consists of a member variable and methods. In PHP we need to declare the access specifiers (public, private, or protected) separately.
Objects has two things properties and behaviors. For example car has properties color,brand name, model and behaviors it can forwar or backward.
Exaple for class and Object(How to add two numbers)
class addnumbers
{
var $num1;
var $num2;
function addtwono()
{
return ($this->num1*$this->num2);
}
}

In the above code we can create a class by using class keyword. Here class addnumbers is a class. All the variable start with var keyword is the propert of class. In other word these are variables of the class. we can design own class and function.
Now we can create the object of the class by using new keyowrd.
Example of creation of object of the class addnumbers
$add = new addnumbers();

$add variable is the object of addnumber class. Now we can set the properties of variables and perform addition of two numbers.
$add = new addnumbers();
$add->num1=5;
$add->num2=6;
echo $add->addtwono();
