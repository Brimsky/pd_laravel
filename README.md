# Pārbaudes darbs

## Kas ir API?
```
API ir programmatūras interfeiss, kas ļauj dažādām programmām un sistēmām komunicēt un sadarboties viena ar otru, nodrošina noteiktu funkciju kopu, protokolus un rīkus, ko izmanto, lai attīstītu lietotāju un programmu interakciju ar datorprogrammām.
``` 

## Kā deklarēt mainīgo PHP valodā?
```
laravel mainīgo /os var deklarēt izmantojot $
```

## Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
```
Laravel izmanto MVC ( Model View Controller ), kurš satur tādus modeļus kā: 
> Modelis (Model){nodrošina daubāzes piekļuvi}, 
> Skats (View){nodrošina kā informācija tiek pasniegta}, 
> Kontrolieris (Controller){apstrādā lietotāja pieprasījumus un koordinē datu plūsmu}
```

## Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
```
ORM -  "Objektu-relāciju atskaitījums" ļauj attēlot datu bāzes tabulas un tos atbilstošos ierakstus kā objektus jeb klases un to atribūtus programmēšanas valodā.

Kapēc?
ORM sistēmas ļauj strādāt ar datu bāzēm, izmantojot objektu orientētu pieeju nevis rakstīt tīrus SQL vaicājumus.


Īsāk sakot to izmanto lai atvieglinātu dzīvi :)))
```

## Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju:
```
$fourthUserRating = User::orderBy('created_at')->pluck('rating')->skip(3)->first();

$usersWithHigherRating = User::where('rating', '>', $fourthUserRating)->get();
```