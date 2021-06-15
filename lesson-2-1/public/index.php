<?php
//Task-1
class Invoice {
    public int $number;
    public string $date;
    public string $seller;
    public string $customer;
    public int $amount;
    public function __construct($number = 0, $date = '01.01.2021', $seller = 'Продавец', $customer = 'Покупатель', $amount = 0){
        $this->number = $number;
        $this->date = $date;
        $this->seller = $seller;
        $this->customer = $customer;
        $this->amount = $amount;
    }

}

class InvoiceToOrder extends  Invoice {
    public function getOrderTable() {
        echo 'Таблица из заказова';
    }
}

class InvoiceToInvoice extends  Invoice {
    public function getInvoiceTable() {
        echo 'Таблица из счета';
    }
}

$invoice = new Invoice();
var_dump($invoice);

$invoice = new InvoiceToOrder();
var_dump($invoice);
echo $invoice->getOrderTable();

$invoice = new InvoiceToInvoice();
var_dump($invoice);
echo $invoice->getInvoiceTable();

// Task 3 - 4
//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//$a1 = new A(); // Создаст объект a1 с классом A();
//$a2 = new A(); // Создаст объект a2 с классом A();
//$a1->foo(); // Выполнить метод foo для объекта a1 вернет 1
//$a2->foo(); // Выполнить метод foo для объекта a2 вернет 2 потому что $x статитк и пренадлежит классу.
//$a1->foo(); // Выполнить метод foo для объекта a1 вернет 3
//$a2->foo(); // Выполнить метод foo для объекта a2 вернет 4

//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//class B extends A {
//}
//$a1 = new A(); // Создаст объект a1 с классом A();
//$b1 = new B(); // Создаст объект b1 с классом B();
//$a1->foo(); // Выполнить метод foo для объекта a1 вернет 1
//$b1->foo(); // Выполнить метод foo для объекта b1 вернет 1 потому что класс B потомок класса A
//$a1->foo(); // Выполнить метод foo для объекта a1 вернет 2
//$b1->foo(); // Выполнить метод foo для объекта a1 вернет 2

//Task - 5
// Выполнение аналогично 3 заданию разница в виде объявления класса со скобками и без. Скобки можно опустить
// так так конструктор отсутствует.
//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//class B extends A {
//}
//$a1 = new A;
//$b1 = new B;
//$a1->foo();
//$b1->foo();
//$a1->foo();
//$b1->foo();
