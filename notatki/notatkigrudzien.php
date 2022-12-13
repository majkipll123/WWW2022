???
funkcje php
krsort()malejaca wg klucza
$ARRAY=[]
sort($array)
array_diff() porownuje funkcje  zwraca roznice
array_intersect() zwraca czesc wspolna
array_keys() zwraca tylko lucze
array_map() wyslij kazda wartosc iterowanie po kazdym elemencie array i wykonywanie funkcji na nim i
sortowanie tablic
sort() rosnaco wg wartosci
ksort()rosnaca wg klucza
rsort()malejaca wg wartosci
krsort()malejaca wg klucza
$ARRAY=[]
sort($array)
array_diff() porownuje funkcje  zwraca roznice
array_intersect() zwraca czesc wspolna
array_keys() zwraca tylko lucze
array_map() wyslij kazda wartosc iterowanie po kazdym elemencie array i wykonywanie funkcji na nim i zwraca w nowej tablicy
count() zwraca ilosc elementow
php json_decode
<?php
$age=peter35 ben37 joe43
echo json_encode($age);
?>
bazy danych relacyjne i nierelacyjne 
relacyjne musisz miec okreslone np wiek studia bo jak chcesz dopisac cos czego nie przewidziales
a w nierelacyjnej mozesz i nie ma lepszej nie ma gorszej tylko trzeba umiec dobrac przypadek do ktorego chcesz go uzycc 
zalety relacyjnychbaz dnych 
prosta i jasnie zdefinowanie modelu danychstosumnowa latwosc uzycia do najprostrzych zadac 
czystosc danych brak duplikatow
spojnosc danych gwarancja spojnosci danych pomiedzy tabelami
normalizacja danych technika uzywana do rozbijania informacji na mniejsze tabele co zmniejsza ogolny rozmiar bazy
bezpieczenstwo mozliwosc zdefiniowania zachowania bazy danych podczas gry jedna informacje chce odczytac/zmienic uzytkownik
wady 
koszt postawienie i utrzymanie relacyjnych baz danych 
wymagania sprzetowe przechowywanie danych oraz relacji wymaga coraz wiekszej ilosci miejsca wraz ze wzrostem ilosci danych
skalownosc w ogronych relacyjnych bazach danych rozciagniectych na wiele serwerow pojawiaja sie problemy wydajnosciowe
zwieksza sie czas trwania zapytan opoznienia w obsludze jednoczesnych zapytan idn_to_ascii


pepsi w puszcze 0.5l w zabce za 4,50zl
wazne pojecia sql rekord (row) wireszw tabeli zawiera informacje o jednym obiekcje 
kolumna(column) zawiera dane jednego zdefiniowanego typu
tabela(table) uporzadkowany zbior danych przechowywany w ujednolicony sposob 

kwerenda. zapytanie (query) umozliwia wyswietlanie konkretnych pol tabeli wg okreslonych kryteriow
klucz podstawowy (primay key) unikatowa nazwa pola definiujaca dany record (np id)
klucz obcy(foreign key) kolumna badz zestaw kolimn odnoszaca sie do kluczy podstawowych innej tabeli
SQL WPROWADZENIE 
2 podgrupy 
1
2
przyklad ddl 
create table company
(
id VARCAHR(n)string o podanej dlugosci lub mniejszej
namespacenumber
adress
city
strnatcasecmppostacdode CHAR(n)zawsze char o dlugosci n
);

























