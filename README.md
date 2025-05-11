SYSTEM DO OBSŁUGI SIECI PRZYCHODNI LEKARSKICH 

Autorzy: 
Dorota Bober
Anna Nielepiec
Mateusz Ziarkiewicz

Informatyka, niestacjonarne, 3 rok
Grupa 2


1. Cel projektu 
Przedmiotem projektu jest system przeznaczony do obsługi sieci przychodni lekarskich. Wdrożenie oprogramowania ma na celu usprawnienie funkcjonowania rejestracji i gabinetu lekarskiego w przychodniach. Aplikacja umożliwi pacjentom na samodzielny zapis do lekarza poprzez kalendarz dostępny online. Dodatkowo będzie dostępna dokumentacja medyczna, e-zwolnienia i e-recepty.
Lekarze będą mieli ułatwienie w tworzeniu dokumentacji medycznej. Szybki dostęp do informacji na temat przebytych chorób pacjentów, przyjmowanych leków. 
Projekt przyspieszy obsługę pacjentów czekających w kolejce i umożliwi przyjęcie większej ilości osób.

2. Szczegółowy opis wymagań 
a) Wymagania funkcjonalne: 
    • system umożliwia rejestrację i logowanie użytkowników, 
    • system wymaga podania roli każdego użytkownika, determinującej jego uprawnienia, 
    • system umożliwia personelowi dodanie pacjenta do Rejestru pacjentów poprzez ręczne wpisanie jego danych,
    • pacjent może uzyskać dostęp do systemu w celu umawiania wizyt poprzez uzyskanie danych do logowania od personelu,
      Terminarz 
    • na początku każdego miesiąca lekarze/personel tworzą terminarze, gdzie podawany jest id lekarza, jego dostępność i numer gabinetu,
    • na podstawie terminarzy personel tworzy listę terminów możliwych do rezerwacji,
    • pacjent samodzielnie (jeśli ma utworzone konto w systemie) lub w rejestracji może planować wizyty z puli dostępnych terminów udostępnionych online,
    • system wysyła powiadomienia SMS do zaplanowanych pacjentów dzień przez zaplanowaną wizytą, 
    • w systemie dostępny jest podgląd terminarza dla lekarzy z możliwością anulowania zaplanowanych wizyt oraz zmianą ich terminu i wysłaniem powiadomienia SMS do pacjenta, 
    • system obsługuje dodanie do terminarza godzin otwarcia gabinetu w poszczególne dni przez użytkownika o roli lekarz, 
    • system umożliwia anulowanie zaplanowanego terminu przez pacjenta (z podaniem powodu),
      Realizacja wizyty 
    • system umożliwia lekarzowi przyjęcie zaplanowanego pacjenta z terminarza, 
    • system umożliwia wprowadzenie godzin rozpoczęcia i zakończenia wizyty, 
    • w systemie dostępne jest wybranie rozpoznania ze słownika rozpoznań - słownik może być uzupełniany ręcznie lub poprzez pobranie go ze strony NFZ, 
    • w systemie jest możliwość uzupełnienia ręcznie opisu wizyty, 
    • w systemie jest możliwość wybrania opisu wizyty z dostępnych szablonów - szablony dodają lekarze i są one widoczne oraz edytowalne dla wszystkich użytkowników o roli lekarz, 
    • w systemie jest możliwość skopiowania opisu i rozpoznania z poprzedniej wizyty pacjenta
      Recepta 
    • w systemie jest możliwość wystawienia e-recepty (zgodnie z wytycznymi NFZ) oraz recepty papierowej przez użytkownika o roli lekarz, 
    • w oknie dodawania recepty możliwe jest dodawanie leków z oficjalnego słownika leków wczytywanego z pliku, 
    • na recepcie jest możliwość wyboru poziomu refundacji leku, 
    • w systemie użytkownik o roli lekarz ma dostęp do podglądu dotychczas wypisywanych pacjentowi leków, które może wybrać do skopiowania na nową receptę, 
    • w systemie użytkownik ma możliwość wydruku recepty w wymaganych przez NFZ formatach na dostępnej drukarce, 
    • w systemie lekarz ma dostęp do zapisanych leków recepturowych i system umożliwia mu dodanie do recepty leku ze słownika zapisanych leków recepturowych, 
    • użytkownik o roli lekarz ma możliwość dopisania własnego leku recepturowego do słownika poprzez użycie odpowiedniego przycisku w oknie dodawania recepty 
      Zwolnienie 
    • w systemie użytkownik o roli lekarz ma możliwość wystawiania e-zwolnień i wysyłania bezpośrednio do pracodawcy na postawie wytycznych NFZ 
    • system umożliwia lekarzowi wystawianie papierowych zwolnień 
    • w systemie lekarz ma możliwość wydruku zwolnienia zgodnie z wymaganym szablonem 
      Skierowanie 
    • system udostępnia lekarzowi wystawianie skierowania do szpitala, pracowni, gabinetu oraz wydruk tego skierowania na dostępnej drukarce, 
      Rozliczenia 
    • system udostępnia użytkownikowi z odpowiednimi uprawnieniami informacje o ubezpieczeniu pacjenta poprzez odpowiednie oznaczenie go na liście Rejestru pacjentów,
    • w systemie jest możliwość dodania rozliczenia pacjenta na podstawie dostępnych umów przez użytkownika o odpowiednich uprawnieniach, 
    • system obsługuje wysłanie rozliczeń do NFZ.

b) Wymagania niefunkcjonalne: 
    • hasło powinno zawierać co najmniej 8 znaków, w tym minimum 1 cyfrę, znak specjalny, wielką literę,
    • działanie na różnych urządzeniach (responsywność),
    • spełnienie zasady WCAG 2.1 (dotępność strony dla osób z niepełnosprawnościami),
    • średnic czas otrzymania odpowiedzi do 1 sekundy,
    • możliwość jednoczesnego przeglądu terminarza przez minimum 20 użytkowników,
    • brak możliwości wybrania tego samego terminu przez więcej niż 1 użytkownika,
    • słownik rozpoznań ICD-9 jest pobierany z oficjalnej strony NFZ,
    • lekarz musi posiadać pulę numerów recept żeby wystawić receptę,
    • podgląd wydruków w PDF - obsługa Adobe Reader.

3. Ograniczenia
    • kompatybilność ze starszymi wersjami przeglądarek internetowych,
    • dokumenty i raporty w formacie dostosowanym do OpenOffice,
    • ograniczenia wynikające z szyfrowania danych wrażliwych,
    • czas realizacji projektu – 10 miesięcy.

4. Użytkownicy systemu
    • administrator systemu – prace konserwacyjne
    • pracownicy recepcji – rejestracja pacjentów w systemie; umawianie na wizyty; przygotowywanie terminarza,
    • lekarze – uzupełnianie dokumentacji medycznej; wystawianie recept, skierowań i zwolnień lekarskich
    • pacjenci – umawianie się na wizyty, przeglądanie własnej dokumentacji medycznej

Przy określaniu wymagań kluczowym użytkownikiem jest lekarz kierujący placówką, w drugiej kolejności osoba odpowiedzialna za kierowanie recepcją, pacjenci mają najniższy priorytet.


5. Diagram przypadków użycia

![przypadki_użycia](https://github.com/user-attachments/assets/dad09d06-97af-41a2-8384-37b19a3c460c)









6. Scenariusze do wszystkich przypadków użycia

Nazwa przypadku użycia 
Zaplanowanie wizyty 
Cel w kontekście systemu 
Zaplanowanie wizyty w terminarzu przez recepcjonistę. 
Warunki wstępne 
Recepcjonista jest zalogowany i ma odpowiednie uprawnienie do przeglądu terminarza. 
Warunek pomyślnego zakończenia 
Wizyta zaplanowana w terminarzu w wybranym terminie. 
Stan końcowy - niepowodzenie 
Brak dostępu do terminarza. 
Główni Aktorzy 
Recepcjonista. 
Aktorzy współuczestniczący 
Lekarz. 
Wywołanie (incjacja) przypadku użycia 
Wczytanie terminarza z bazy danych. 
Przypadki użycia - include 
Przypadki użycia - extend 
Główny przepływ 
Krok 
Akcja 
1 
Recepcjonista wybiera opcję Terminarz. 
2 
Wybiera datę, lekarza i gabinet w kryteriach filtrowania. 
5 
Dane zgodne z kryteriami wyszukiwania zostają wyświetlone. 
6 
Recepcjonista wybiera wolny termin i pacjenta 
7 
Termin zostaje zaplanowany 
Rozgałęzienie przepływu głównego 
Krok 
Rozgałęzienie Akcji 
3.1 
Użytkownik nie ma uprawnień do przeglądu terminarza. 
3.2 
Brak danych na temat terminów odpowiadających kryteriom filtrowania. 
















Nazwa przypadku użycia 
Utworzenie terminarza 
Cel w kontekście systemu 
Utworzenie terminarza na dany okres czasu dla danego lekarza przez recepcjonistę. 
Warunki wstępne 
Recepcjonista jest zalogowany i ma odpowiednie uprawnienie do tworzenia terminarza. 
Warunek pomyślnego zakończenia 
Terminarz jest poprawnie dodany i można planować na nim wizyty. 
Stan końcowy - niepowodzenie 
Brak możliwości dodania terminarza. 
Główni Aktorzy 
Recepcjonista. 
Aktorzy współuczestniczący 
Lekarz. 
Wywołanie (incjacja) przypadku użycia 
Dodanie terminarza do bazy danych. 
Przypadki użycia - include 
Przypadki użycia - extend 
Główny przepływ 
Krok 
Akcja 
1 
Recepcjonista wybiera opcję Dodaj terminarz. 
2 
Wybiera gabinet, daty i lekarza w kryteriach. 
3 
Dodaje dni tygodnia i godziny. 
4 
Wygenerowane zostają terminy. 
Rozgałęzienie przepływu głównego 
Krok 
Rozgałęzienie Akcji 
3.1 
Użytkownik nie ma uprawnień do przeglądu terminarza. 
3.2 
Istnieje terminarz dla zadanych kryteriów. 


















Nazwa przypadku użycia 
Rejestracja pacjenta 
Cel w kontekście systemu 
Zarejestrowanie pacjenta do gabinetu przez recepcjonistę. 
Warunki wstępne 
Recepcjonista jest zalogowany i ma odpowiednie uprawnienie do dodania rejestracji. 
Warunek pomyślnego zakończenia 
Pacjent jest zarejestrowany do odpowiedniego lekarza. 
Stan końcowy - niepowodzenie 
Pacjent nie jest zarejestrowany. 
Główni Aktorzy 
Recepcjonista. 
Aktorzy współuczestniczący 
Lekarz. 
Wywołanie (incjacja) przypadku użycia 
Pobranie dostępnych w danym terminie gabinetów i dodanie rejestracji do bazy danych. 
Przypadki użycia - include 
Przypadki użycia - extend 
Główny przepływ 
Krok 
Akcja 
1 
Recepcjonista wybiera opcję Rejestruj. 
2 
Wybiera pacjenta z rejestru. 
3 
Wprowadza datę, gabinet i lekarza. 
4 
Rejestracja zostaje prawidłowo zapisana. 
5 
Lekarz dostaje informację o rejestracji pacjenta. 
Rozgałęzienie przepływu głównego 
Krok 
Rozgałęzienie Akcji 
3.1 
Użytkownik nie ma uprawnień do dodania rejestracji. 
3.2 
Brak dostępności danego gabinetu (lekarza) w wybranym terminie. 

















Nazwa przypadku użycia 
Logowanie do systemu 
Cel w kontekście systemu 
Użytkownik zostaje zalogowany. 
Warunki wstępne 
Użytkownik ma możliwość otwarcia systemu i wpisania danych logowania. 
Warunek pomyślnego zakończenia 
Użytkownik zostaje zalogowany z przypisanymi mu uprawnieniami. 
Stan końcowy - niepowodzenie 
Użytkownik nie ma możliwości zalogowania. 
Główni Aktorzy 
Recepcjonista, lekarz. 
Aktorzy współuczestniczący 
Wywołanie (incjacja) przypadku użycia 
Sprawdzenie danych logowania w bazie danych. 
Przypadki użycia - include 
Przypadki użycia - extend 
Główny przepływ 
Krok 
Akcja 
1 
Użytkownik otwiera system. 
2 
Wpisuje swoje dane logowania. 
3 
System sprawdza poprawność danych logowania. 
4 
Użytkownik zostaje zalogowany do systemu. 
Rozgałęzienie przepływu głównego 
Krok 
Rozgałęzienie Akcji 
3.1 
Użytkownik nie ma konta w systemie. 
3.2 
Użytkownik wpisuje błędne dane. 





















Nazwa przypadku użycia 
Przegląd danych pacjenta 
Cel w kontekście systemu 
Lekarz ma dostęp do danych pacjenta. 
Warunki wstępne 
Lekarz jest zalogowany i ma odpowiednie uprawnienie do przeglądu danych pacjenta. 
Warunek pomyślnego zakończenia 
Możliwość przeglądu danych pacjenta w systemie. 
Stan końcowy - niepowodzenie 
Lekarz nie ma dostępu do danych. 
Główni Aktorzy 
Lekarz. 
Aktorzy współuczestniczący 
Recepcjonista. 
Wywołanie (incjacja) przypadku użycia 
Wczytanie danych pacjenta z bazy danych. 
Przypadki użycia - include 
Przypadki użycia - extend 
Główny przepływ 
Krok 
Akcja 
1 
Lekarz otwiera rejestr pacjentów. 
2 
Wybiera pacjenta i otwiera przegląd danych. 
3 
System sprawdza uprawnienia lekarza. 
4 
Dane pacjenta zostają wyświetlone. 
Rozgałęzienie przepływu głównego 
Krok 
Rozgałęzienie Akcji 
3.1 
Użytkownik nie ma uprawnień do przeglądu rejestru pacjentów. 
3.2 
Użytkownik nie ma uprawnień do przeglądu danych pacjenta. 
3.3 
Pacjenta nie ma w rejestrze pacjenów. 



















Nazwa przypadku użycia 
Uzupełnienie danych wizyty 
Cel w kontekście systemu 
Lekarz uzupełnia i zapisuje dane wizyty. 
Warunki wstępne 
Lekarz jest zalogowany i ma odpowiednie uprawnienie do dodania danych wizyty. 
Warunek pomyślnego zakończenia 
Dane wizyty zostają zapisane w systemie. 
Stan końcowy - niepowodzenie 
Dane wizyty nie zostają uzupełnione lub nie zostają zapisane. 
Główni Aktorzy 
Lekarz. 
Aktorzy współuczestniczący 
Wywołanie (incjacja) przypadku użycia 
Zapis danych wizyty do bazy danych. 
Przypadki użycia - include 
Przypadki użycia - extend 
Główny przepływ 
Krok 
Akcja 
1 
Lekarz otwiera dane wizyty zarejestrowanego pacjenta. 
2 
Uzupełnia wymagane dane i zapisuje. 
3 
System sprawdza uprawnienia lekarza. 
4 
Dane wizyty zostają zapisane w systemie. 
Rozgałęzienie przepływu głównego 
Krok 
Rozgałęzienie Akcji 
3.1 
Użytkownik nie ma uprawnień do przeglądu danych wizyty. 
3.2 
Użytkownik nie ma uprawnień do edycji danych wizyty. 
3.3 
Pacjenta nie jest zarejestrowany. 


















Nazwa przypadku użycia 
Wystawienie e-recepty 
Cel w kontekście systemu 
Lekarz wystawia pacjentowi e-receptę. 
Warunki wstępne 
Lekarz jest zalogowany i ma uprawnienia do wystawienia e-recepty. 
Warunek pomyślnego zakończenia 
E-recepta zostaje poprawnie wystawiona i wysłana do apteki przez system nfz. 
Stan końcowy - niepowodzenie 
Brak dostępu do e-recept lub do systemu nfz. 
Główni Aktorzy 
Lekarz. 
Aktorzy współuczestniczący 
System nfz. 
Wywołanie (incjacja) przypadku użycia 
Wczytanie terminarza z bazy danych. 
Przypadki użycia - include 
Przypadki użycia - extend 
Główny przepływ 
Krok 
Akcja 
1 
Lekarz otwiera dane pacjenta. 
2 
Lekarz dodaje, uzupełnia i wysyła e-receptę. 
3 
System sprawdza uprawnienia lekarza. 
4 
Recepta zostaje zapisana i wysłana do systemu nfz. 
Rozgałęzienie przepływu głównego 
Krok 
Rozgałęzienie Akcji 
3.1 
Użytkownik nie ma uprawnień do dodania e-recepty. 
3.2 
Nie ma połączenia z systemem nfz. 
3.3 
Lekarz nie ma puli recept z wolnymi numerami. 

















Nazwa przypadku użycia 
Wystawienie skierowania 
Cel w kontekście systemu 
Lekarz wystawia pacjentowi skierowanie. 
Warunki wstępne 
Lekarz jest zalogowany i ma uprawnienia do wystawienia skierowania. 
Warunek pomyślnego zakończenia 
Skierowanie zostaje poprawnie wystawione i może zostać wydrukowane. 
Stan końcowy - niepowodzenie 
Brak dostępu do wystawiania skierowań. 
Główni Aktorzy 
Lekarz. 
Aktorzy współuczestniczący 
Wywołanie (incjacja) przypadku użycia 
Zapisanie skierowania do bazy danych. 
Przypadki użycia - include 
Przypadki użycia - extend 
Główny przepływ 
Krok 
Akcja 
1 
Lekarz otwiera dane pacjenta. 
2 
Lekarz dodaje, uzupełnia i zapisuje skierowanie. 
3 
System sprawdza uprawnienia lekarza. 
4 
Skierowanie zostaje zapisane i gotowe do druku. 
Rozgałęzienie przepływu głównego 
Krok 
Rozgałęzienie Akcji 
3.1 
Użytkownik nie ma uprawnień do dodania skierowania 













7. Diagramy czynności

Zaplanowanie wizyty


















Utworzenie terminarza



















Rejestracja pacjenta
Logowanie do systemu



Przegląd danych pacjenta






















Utworzenie recepty
















Utworzenie skierowania





















8. Diagram ERD




















9. Diagram klas























10. Diagramy sekwencji

Zaplanowanie wizyty






















Przegląd danych pacjenta



Wystawienie e-recepty




11. Diagramy stanów

Dla obiektu recepta















Dla obiektu wizyta





12. Diagram wdrożenia


13. Plan procesu testowania
Cel testowania: Celem procesu testowania jest zapewnienie, że system do obsługi sieci przychodni lekarskich działa zgodnie z wymaganiami funkcjonalnymi i niefunkcjonalnymi oraz spełnia oczekiwania wszystkich grup użytkowników.
Zakres testów:
    1. Testy jednostkowe (Unit Tests):
        ◦ Testowanie poszczególnych modułów aplikacji, takich jak rejestracja pacjentów, terminarz, wystawianie recept, itp. 
        ◦ Weryfikacja poprawności logiki biznesowej (np. sprawdzanie, czy pacjenci mogą umawiać się na wolne terminy). 
    2. Testy integracyjne (Integration Tests):
        ◦ Sprawdzenie komunikacji między modułami, np. rejestr pacjentów zintegrowany z terminarzem. 
        ◦ Testy poprawności przesyłania danych między aplikacją a zewnętrznymi systemami (np. NFZ). 
    3. Testy systemowe (System Tests):
        ◦ Testowanie aplikacji jako całości na różnych urządzeniach i przeglądarkach (zgodnie z wymaganiem responsywności). 
        ◦ Weryfikacja zgodności z zasadami WCAG 2.1. 
    4. Testy wydajnościowe (Performance Tests):
        ◦ Testowanie szybkości działania systemu przy 20 jednoczesnych użytkownikach. 
        ◦ Analiza czasu odpowiedzi na zapytania. 
    5. Testy użyteczności (Usability Tests):
        ◦ Testowanie interfejsu użytkownika z perspektywy lekarzy, recepcjonistów i pacjentów. 
        ◦ Ocena intuicyjności nawigacji. 
    6. Testy regresji (Regression Tests):
        ◦ Weryfikacja, że nowe zmiany w systemie nie wpływają negatywnie na istniejące funkcjonalności. 
    7. Testy akceptacyjne (Acceptance Tests):
        ◦ Testowanie aplikacji przez rzeczywistych użytkowników, aby potwierdzić jej gotowość do wdrożenia. 
Harmonogram testowania:
    1. Testy jednostkowe: 2 tygodnie. 
    2. Testy integracyjne: 1 tydzień. 
    3. Testy systemowe: 2 tygodnie. 
    4. Testy wydajnościowe i użyteczności: 1 tydzień. 
    5. Testy regresji: 1 tydzień. 
    6. Testy akceptacyjne: 1 tydzień. 
Oczekiwane wyniki:
    • Wszystkie kluczowe funkcje działają poprawnie. 
    • żadne krytyczne błędy nie występują w systemie. 

14. Raport z analizy rynku
Cel analizy: Celem analizy rynku jest zidentyfikowanie konkurencyjnych rozwiązań i określenie potrzeb użytkowników w zakresie systemów obsługi przychodni lekarskich.
1. Identyfikacja konkurencji: Na rynku dostępne są liczne systemy do zarządzania przychodniami, takie jak:
    • Medchart: System zintegrowany z e-receptami i dokumentacją medyczną, nastawiony na ułatwienie pracy lekarzy. 
    • mMedica: Popularny system oferujący rozliczenia z NFZ oraz zarządzanie dokumentacją pacjentów. 
    • KAMSOFT: Rozwiązanie obsługujące duże sieci przychodni, umożliwiające kompleksowe zarządzanie placówką. 



