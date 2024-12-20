<?php
require_once 'init.php';
// Rozszerzenia:
// Dodanie klasy Router oraz Route, które realizują idee przedstawione poprzednio, ale na wyższym poziomie i obiektowo.
// Po pierwsze rezygnujemy ze struktury 'switch' w kontrolerze głównym i zastępujemy ją tablicą ścieżek przechowywaną
// wewnątrz obiektu routera. Router powstaje w skrypcie init.php i jak inne ważne obekty jest dostępny przez getRouter().

// Odpowiednio nazwane metody routera realizują wszystkie zadania iplementowane uprzednio w funkcji control oraz strukturze 'switch'.

// Oczywiście tym samym znika funkcja 'control' - jest ona prywatną metodą routera.

getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow',    'CalcKredytCtrl',  ['user','admin']);
getRouter()->addRoute('chroniona',    'CalcKredytChronionaCtrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcKredytCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'CalcKredytLoginCtrl');
getRouter()->addRoute('logout',      'CalcKredytLoginCtrl', ['user','admin']);

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';