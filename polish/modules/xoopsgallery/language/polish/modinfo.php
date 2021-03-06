<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:55:21 dap997 Exp $ dap997
// Module Info
define("_MI_XGALLERY_NAME",                  "Galeria obrazków");
define("_MI_XGALLERY_DESCRIPTION",           "XoopsGallery bazująca na module Gallery 1.3.3 Posiada komentarze oraz smarty templates z Xoopsa");
define("_MI_XGALLERY_CREDITS",               "Przerobiony na moduł Xoops i ulepszony przez K.Ono (http://www.xoops.org/) - The XOOPS Project.  Administrowany przez Glena Starretta i innych (zobacz README_XOOPS aby dowiedzieć się więcej");
define("_MI_XGALLERY_TEMPLATE1_DESCRIPTION", "Indeks XoopsGallery ");
define("_MI_XGALLERY_TEMPLATE2_DESCRIPTION", "Pokaż jeden obrazek ");
define("_MI_XGALLERY_TEMPLATE3_DESCRIPTION", "Pokaż album");
define("_MI_XGALLERY_TEMPLATE4_DESCRIPTION", "Przegląd obrazków z XoopsGallery ");

// Names of admin menu items
define("_MI_ADMIN_CHECKNETPBM",     "Sprawdź NetPBM");
define("_MI_ADMIN_CHECKIMAGICK",    "Sprawdź ImageMagick");
define("_MI_ADMIN_CHECKORPHANS",    "Sprawdź spójność XoopsGallery");
define("_MI_ADMIN_CHECKMISSING",    "Sprawdź brakujące rekordy");
define("_MI_ADMIN_CHECKPERMS",      "Sprawdź prawa dostępu");

define('_MI_GALLERY_BNAME1',        "Nowe obrazki");
define("_MI_GALLERY_BDESC1",        "Pokazuj najnowsze obrazki");
define('_MI_GALLERY_BNAME2',        "Losowe obrazki");
define("_MI_GALLERY_BDESC2",        "Pokazuj losowe obrazki");
define("_MI_GALLERY_BNAME3",        "Najnowsze dodane obrazki");
define("_MI_GALLERY_BDESC3",        "Pokaż losowe obrazki z tych, które zostały ostatnio dodane");
define('_MI_GALLERY_PNMDIR',        "Ścieżka do NetPBM");
define('_MI_GALLERY_PNMDIRDSC',     "Ścieżka do folderu zawierającego program NetPBM. Jeżeli ściągnąłeś NetPBM ze stron XoopsGallery, nie zapomnij dodać im atrybutu wykonywalności. Uruchom <b>check_netpbm.php</b> aby sprawdzić poprawność tego ustawienia.");
define('_MI_GALLERY_IMPATH',        "Ścieżka do ImageMagick");
define('_MI_GALLERY_IMPATHDSC',     "Ścieżka do folderu zawierającego program ImageMagick. Uruchom <b>check_imagemagick.php</b> aby sprawdzić poprawność tego ustawienia.");
define('_MI_GALLERY_GRPHCS',        "Wybór pakietu graficznego");
define('_MI_GALLERY_GRPHCSDSC',     "To ustawienie określa, jakie narzędzia graficzne zostaną użyte. Musisz mieć zainstalowany NetPBM lub ImageMagick. Patrz wyżej.");
define('_MI_GALLERY_SHOWTREE',      "Pokazuj drzewko podalbumów");
define('_MI_GALLERY_SHOWTREEDSC',   "Po włączeniu opcji użytkownik będzie widział listę podalbumów już z głównego poziomu XoopsGallery. Ułatwi to nawigowanie po podalbumach (choć może nieco zburzyć estetykę głównej strony XoopsGallery). Domyślnie wyłączone");
define('_MI_GALLERY_COLS',          "Liczba kolumn");
define('_MI_GALLERY_COLSDSC',       "Domyślna liczba kolumn w albumie");
define('_MI_GALLERY_ROWS',          "Liczba wierszy");
define('_MI_GALLERY_ROWSDSC',       "Domyślna liczba wierszy w albumie");
define('_MI_GALLERY_HLSIZE',        "Rozmiar miniaturki albumu");
define('_MI_GALLERY_HLSIZEDSC',     "Domyślny rozmiar miniaturek albumów (w pikselach).");
define('_MI_GALLERY_THMBSIZE',      "Rozmiar miniaturki obrazka");
define('_MI_GALLERY_THMBSIZEDSC',   "Domyślny rozmiar miniaturek obrazków (w pikselach).");
define('_MI_GALLERY_RESIZE',        "Standardowy rozmiar obrazka");
define('_MI_GALLERY_RESIZEDSC',     "Kiedy do albumu dodawane będą duże obrazki, zostanie automatycznie wygenerowana jego pośrednia (pomiędzy oryginałem a miniaturką) wersja, w tym właśnie rozmiarze.");
define('_MI_GALLERY_FITWIN',        "Dopasuj rozmiar obrazka do okna");
define('_MI_GALLERY_FITWINDSC',     "Przy oglądaniu obrazków, które nie mają wersji pośrednich XoopsGallery potrafi automatycznie dostosować rozmiar obrazka do okna przeglądarki (przez JavaScript). Dopasowanie nie zawsze funkcjonuje w sposób poprawny.");
define('_MI_GALLERY_FULL',          "Wybór rozmiaru obrazka przez oglądających");
define('_MI_GALLERY_FULLDSC',       "Tu możesz zaproponować oglądającym wybór pomiędzy oglądaniem pełnych wersji obrazków, bądź też oglądaniem ustandaryzowanych wersji pośrednich. Ustawienie obowiązuje tylko w obrębie pojedynczej sesji użytkownika");
define('_MI_GALLERY_PRINT',         "Usługa drukowania");
define("_XM_PRINT00",               "Żadna");
define("_XM_PRINT01",               "Shutterfly");
define("_XM_PRINT02",               "Shutterfly bez dotacji dla XoopsGallery");
define('_MI_GALLERY_PRINTDSC',      "Pozwól oglądającym na druk obrazków bezpośrednio z poziomu albumu. Po wybraniu shutterfly, XoopsGallery doda do ceny każdego obrazka 2 centy (normalnie fotografia 4x6 kosztuje 49 centów USD), z tego 1.8 centa wróci do autora projektu XoopsGallery. W ten sposób można wspomóc rozwój tego bezpłatnego modułu.");
define('_MI_GALLERY_RETURN',        "Link do głównej galerii");
define('_MI_GALLERY_RETURNDSC',     "Wyświetlaj link do głównej galerii w albumach. Po wyłączeniu użytkownik nie będzie w stanie powrócić z albumu na wyższy poziom. Użyteczne tylko, gdy chcesz osadzić album na konkretnej stronie a nie chcesz aby użytkownik łatwo przeszedł do innych albumów XoopsGallery");
define('_MI_GALLERY_OWNER',         "Pokaż właściciela");
define('_MI_GALLERY_OWNERDSC',      "Pokazać właścicieli albumów na głównym poziomie XoopsGallery?");
define('_MI_GALLERY_PERPAGE',       "Ile albumów na stronie");
define('_MI_GALLERY_PERPAGEDSC',    "Ile albumów powinno być wyświetlanych na jednej stronie XoopsGallery?");
define('_MI_GALLERY_SEARCH',        "Wyszukiwarka");
define('_MI_GALLERY_SEARCHDSC',     "Czy wyświetlić wyszukiwarkę?");
define('_MI_GALLERY_FILENAME',      "Zachowaj nazwy");
define('_MI_GALLERY_FILENAMEDSC',   "Czy w trakcie dodawania obrazków do XoopsGallery zachowywać poprzednie nazwy? Wyłączenie spowoduje, że XoopsGallery przypisze nowe nazwy do dodanych obrazków.");
define('_MI_GALLERY_CLICKS',        "Czy pokazywać liczniki odsłon obrazków w albumach");
define('_MI_GALLERY_CLICKSDSC',     "Wyświetlać liczniki odsłon obrazków w albumach?");
define('_MI_GALLERY_QUALITY',       "Jakość JPEG");
define('_MI_GALLERY_QUALITYDSC',    "Z jaką jakością mają być wykonywane JPEGi w trakcie obracania obrazków, wykonywania wersji pośrednich i obracania?");
define('_MI_GALLERY_TIME',          "Limit czasu");
define('_MI_GALLERY_TIMEDSC',       "Ile sekund powinna trwać maksymalnie pojedyncza operacja?");
define('_MI_GALLERY_DEBUG',         "Tryb debugowania");
define('_MI_GALLERY_DEBUGDSC',      "Włącz tryb debugowania aby diagnozować problemy");
define('_MI_GALLERY_FLOCK',         "Czy używać flock()?");
define('_MI_GALLERY_FLOCKDSC',      "Galeria używa systemu blokad flock() aby zabezpieczyć się przed uszkodzeniem danych. Nie wszystkie systemy operacyjne to wspierają. Wyłącz, jeżeli wystąpią błędy w rodzaju Could not acquire lock");
define('_MI_GALLERY_CLICK',         "Czy pokazywać liczniki odsłon obrazków");
define('_MI_GALLERY_CLICKDSC',      "Wyświetlać liczniki odsłon obrazków wewnątrz albumów?");
define("_MI_GALLERY_BLOCK_MODE",    "Blokowy sposób wyboru obrazków");
define("_XM_ALLAL01",               "Wszystkie albumy");
define("_XM_ALLAL02",               "Wybrane albumy");
define("_XM_ALLAL03",               "Pozostałe (nie wybrane) albumy ");
define("_MI_GALLERY_BLOCK_MODEDSC", "Jeśli wybierasz obrazki, które mają być wyświetlone w bloku, rozważ użycie opcji \"Wszystkie albumy\", \"Wybrane albumy\", \"Wszystkie nie wybrane albumy\". Jest to kolejne ograniczenie praw dostępu (dostęp można też ograniczyć na poziomie użytkowników).");
define("_MI_GALLERY_BLOCK_LIST",    "Lista blokowego wyboru obrazków");
define("_MI_GALLERY_BLOCK_LISTDSC", "Lista albumów, które mogą zostać użyte z blokiem w poprzez wybór blokowy (ignorowane gdy wybrano tryb \"Wszystkie albumy\").  Użyj średników do oddzielenia nazw albumów.  Użyj symbolu % dla określenia dowolnej ilości znaków i _ dla dowolnego jednego znaku.");
define("_MI_GALLERY_FULLPOPUP",     "Otwórz obrazek w nowym oknie zachowując jego oryginalną wielkość");
define("_MI_GALLERY_FULLPOPUPDSC",  "Pokazać obrazek w oryginalnej wielkości bez użycia formatowania XOOPS? To może być użyteczne dla cyfrowych obrazków zrobionych w wysokich rozdzielczościach, które są za duże aby pasowały do okna przeglądarki.");
define("_MI_GALLERY_SHOWEXIF",      "Czy chcesz pokazywać dane EXIF (Exchangeable Image File Format) razem z obrazkami?");
define("_MI_GALLERY_SHOWEXIFDSC",   "Jeśli masz program JHEAD, to możesz pokazać dodatkowe informacje EXIF z początku obrazka na \"pokaż obrazki\" stronie.");
define("_MI_GALLERY_EXIFPATH",      "Pełna ścieżka do programu JHEAD (opcja)");
define("_MI_GALLERY_EXIFPATHDSC",   "Ścieżka do programu JHEAD, narzędzia odczytującego dane EXIF z początku obrazka zapisywane przez wiekszość aparatów cyfrowych. (np. /usr/bin/jhead)");
define("_MI_GALLERY_EXIFCACHE",     "Cachować dane EXIF?");
define("_MI_GALLERY_EXIFCACHEDSC",  "Czy XoopsGallery powinna cachować dane EXIF? Ich sprawdzanie na bieżąco może chwilę potrwać, z drugiej strony ich gromadzenie w cache może powiekszyć wielkość albumu, a to znowu co spowoduje dłuższy czas wczytywania się dużych albumów.");
define("_MI_GALLERY_ZIPINFODIR",    "Pełna ścieżka do programu zipinfo (opcja)");
define("_MI_GALLERY_ZIPINFODIRDSC", "Ścieżka do programu zipinfo (np. /usr/bin/zipinfo). Jeśli masz dostęp do serwera poprzez shell (telnet, SSH) użyj komendy <b>which zipinfo</b> aby poznać lokację programu. Ten program można też ściągnąć ze strony http://www.info-zip.org/pub/infozip/.");
define("_MI_GALLERY_UNZIPDIR",      "Pełna ścieżka do programu unzip (opcja)");
define("_MI_GALLERY_UNZIPDIRDSC",   "Ścieżka do programu unzip (np. /usr/bin/unzip. Ten program pozwoli wczytać na serwer pliki .zip zawierające obrazki albo filmy.  Jeśli masz dostęp poprzez shell (telnet, SSH) użyj komendy <b>which unzip</b> aby poznać lokację programu");
define("_MI_GALLERY_FFMPEGDIR",     "Pełna ścieżka do programu ffmpeg (opcja)");
define("_MI_GALLERY_FFMPEGDIRDSC",  "Pełna ścieżka do programu ffmpeg (opcja) (np. /usr/local/bin/ffmpeg). Program ffmpeg zrobi miniaturke dla filmu przesłanego na serwer.  Wiekszość dystrybucji standardowo nie zwiera tego narzędzia. Zobacz adres http://ffmpeg.sourceforge.net/ aby ściągnąć źródła (polacemy wersje z CVS). Uważaj: Jeśli przejście (fade) ( będzie trwało dlużej niż 2 sekundy otrzymasz pustą miniaturkę.");
define("_MI_GALLERY_USEFFMPEG",     "Użyć programu ffmpeg?");
define("_MI_GALLERY_USEFFMPEGDSC",  "Jeśli ffmpeg jest zainstalowany zaznacz \"Tak\". W innym wypadku film otrzyma standardową miniaturkę. Wymaga podania ścieżki do ffmpegś.");
define("_MI_GALLERY_SKIP_PERM",     "Pomiń sprawdzanie praw użytkowników w blokach");
define("_MI_GALLERY_SKIP_PERM_DSC", "Pomiń sprawdzanie praw użytkowników podczas wyboru obrazków do pokazania ich w blokach. Ustawiając tę opcję na \"Tak\" pozwoli dowolnej osobie zobaczyć miniaturke, ale nie będzie mogła ona zobaczyć właściwego obrazka. Jeśli chcesz pozwolić wszystkim użytkownikom na oglądanie wszystkich obrazkóww albumach opcja \"Tak\" może być szybsza.");
?>