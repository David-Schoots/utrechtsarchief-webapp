<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PanoramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $panoramas = [
                        [
                'page' => 1,
                'catalog_number' => 135001,
        'title' => 'Titel 1',
        'description' => 'Afbeelding van de titelpagina van het Panorama van Utrecht, op de lithostenen
getekend door J. Bos, gedrukt bij P.W. van de Weijer en in juli 1859 uitgegeven door de Wed.
Herfkens en zoon.',
        'img' => '/img/test/1.png',
        'extra_description' => null,
        'extra_description_1' => ' Het Panorama van Utrecht bestaat uit vier aaneengeplakte, zigzag gevouwen bladen
met een totale lengte van 5,82 meter. Het panorama is een meterslange tekening van een
rondwandeling om het centrum van Utrecht, met steeds wisselend uitzicht vanaf de singels. Het
geeft een heel precies beeld van hoe de stad in 1859 er uitzag en het leuke is dat je ook het
verloop van de seizoenen in de tekening terugziet.
',
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 2,
        'catalog_number' => 135002,
        'title' => 'Titel 2',
        'description' => 'Gezicht over de Wittevrouwenbrug in de Wittevrouwenstraat te Utrecht met het
douanekantoor (de latere politiepost Wittevrouwen) en de Willemskazerne.',
        'img' => '/img/test/2.png',
        'extra_description' => '',
        'extra_description_1' => null,
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 3,
        'catalog_number' => 135003,
        'title' => 'Titel 3',
        'description' => 'Gezicht op de gevangenis aan het Wolvenplein te Utrecht op het vroegere bolwerk
Wolvenburg, met rechts een huis op de afgegraven stadswal bij de Wolvenstraat.',
        'img' => '/img/test/3.png',
        'extra_description' => null,
        'extra_description_1' => null,
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 4,
        'catalog_number' => 135004,
        'title' => 'Titel 4',
        'description' => 'Gezicht op de uitmonding van de Plompetorengracht te Utrecht in de
stadsbuitengracht, in het midden de bomen langs de Noorderkade en rechts een gedeelte van
het Begijnebolwerk. Rechts wordt een overhaalschuitje voortgetrokken.
',
        'img' => '/img/test/4.png',
        'extra_description' => null,
        'extra_description_1' => 'Afbeelding van het overhaalschuitje over de Stadsbuitengracht ter
hoogte van de Lange Smeestraat te Utrecht. Deze veerbootjes, die voetgangers van en naar de
binnenstad vervoerden, werden in de loop van de 19e eeuw vervangen door vaste bruggen.',
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 5,
        'catalog_number' => 135005,
        'title' => 'Titel 5',
        'description' => 'Gezicht op het Begijnebolwerk te Utrecht.',
        'img' => '/img/test/5.png',
        'extra_description' => null,
        'extra_description_1' => null,
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 6,
        'catalog_number' => 135006,
        'title' => 'Titel 6',
        'description' => 'Gezicht op een gedeelte van het Begijnebolwerk (links) en de Van Asch van
Wijckskade te Utrecht.',
        'img' => '/img/test/6.png',
        'extra_description' => null,
        'extra_description_1' => null,
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 7,
        'catalog_number' => 135007,
        'title' => 'Titel 7',
        'description' => 'Gezicht op de Van Asch van Wijckskade te Utrecht, de Weerdbarrière en de
Weerdbrug en rechts de Noorderkade met de stadswaag en stadskraan.',
        'img' => '/img/test/7.png',
        'extra_description' => null,
        'extra_description_1' => 'geen afbeelding, alleen informatietekstje bij de stadskraan (helemaal rechts op afb.): Met
behulp van de stadskraan konden zware goederen, zoals wijntonnen, in en uit schepen geladen
worden. Het water is van oudsher een belangrijke transportroute in Utrecht. ',
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 8,
        'catalog_number' => 135008,
        'title' => 'Titel 8',
        'description' => 'Gezicht op de Noorderkade te Utrecht, de Koninklijke Fabriek van
Landbouwkundige Werktuigen, bierbrouwerij De Krans en het Paardenveld met de molen De Rijn
en Zon',
        'img' => '/img/test/8.png',
        'extra_description' => null,
        'extra_description_1' => 'Gezicht op de stoombierbrouwerij De Krans (Nieuwekade 30) te
Utrecht. Vanaf de middeleeuwen werd er in Utrecht volop bier gebrouwen. Tot ver in de 19e eeuw
werd hier grachtenwater voor gebruikt. In de twintigste eeuw verloren de Utrechtse brouwerijen
de concurrentiestrijd met die uit Amsterdam en verdwenen de brouwerijen in de stad.',
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 9,
        'catalog_number' => 135009,
        'title' => 'Titel 9',
        'description' => 'Gezicht op het Paardenveld te Utrecht met de molen De Meiboom en rechts een
was- en badhuis, de latere Wasch- en Badinrichting van W. de Rijk.',
        'img' => '/img/test/9.png',
        'extra_description' => null,
        'extra_description_1' => 'geen afbeelding, alleen informatietekstje bij het badhuis: Badhuizen werden sinds eind 19e
eeuw gebouwd, toen er een grotere aandacht kwam voor hygiëne, gezondheid en levensstijl. De
vraag naar hygiënische baden nam toe door industrialisatie en verstedelijking, wat leidde tot de
bouw van openbare badhuizen, waar tegen betaling een bad of douche kon worden genomen.
',
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 10,
        'catalog_number' => 135010,
        'title' => 'Titel 10',
        'description' => ' Gezicht over de Catharijnebrug te Utrecht op een groot appartementengebouw, het
douanekantoortje (de Catharijnebarrière), een herenhuis (later Bierhuis De Hoop) en de
gasfabriek van W.H. de Heus op en bij het noordwestelijke bastion van het vroegere kasteel
Vredenburg.',
        'img' => '/img/test/10.png',
        'extra_img_1'=> '/img/test/10-1.png',
        'extra_img_2'=> '/img/test/10-2.png',
        'extra_img_3'=> '/img/test/10-3.png',
        'extra_img_4'=> '/img/test/10-4.png',
        'extra_description_1' => 'Gezicht op de stadsbuitengracht en de Catharijnebrug te Utrecht, uit
het zuidwesten, met op de achtergrond een gebouw waarin meerdere woonhuizen zijn
gecombineerd aan de latere Catharijnekade. Omstreeks 1859.',
'extra_description_2' => 'Gezicht op de Stadsbuitengracht en de Catharijnebrug te Utrecht, uit
het noordwesten, met links het commiezenhuisje, daarachter de schoorsteen van de gasfabriek
van W.H. de Heus op het Vredenburg en in het midden een herenhuis (later bierhuis De Hoop).
Omstreeks 1859.',
'extra_description_3' => 'Gezicht op de gasfabriek van W.H. de Heus op het Vredenburg te
Utrecht, met daarbij de "Nieuwejaars Heil- en Zegenwensch" van de gaslantaarnopstekers bij de
aanvang van het jaar 1857',
'extra_description_4' => 'Gezicht vanaf de Catharijnebrug op de stadsbuitengracht te Utrecht, uit
het noordwesten, met links de gasfabriek van W.H. de Heus aan het Vredenburg. De steenmassa
is het noordwestelijke bastion van het vroegere kasteel Vredenburg. Foto uit omstreeks 1859
',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 11,
        'catalog_number' => 135011,
        'title' => 'Titel 11',
        'description' => 'Gezicht op de koperpletterij van W.H. de Heus met het zuidwestelijke bastion van
het vroegere kasteel Vredenburg en rechts de Rijnkade te Utrecht.',
        'img' => '/img/test/11.png',
        'extra_description' => null,
        'extra_description_1' => 'beschrijving/informatie: Plattegrond van het gebouwencomplex van de koperpletterij en
gasfabriek van W.H. de Heus, gelegen tussen de Stadsbuitengracht en het Vredenburg te
Utrecht; met vermelding van de bestemming van de gebouwen.
Met legenda en een aantal doorhalingen en notities.
',
        'extra_description_2' => 'Gezicht vanaf de Catharijnesingel te Utrecht over de Willemsbrug met
de beide commiezenhuisjes uit het zuidwesten, met links het hoekhuis aan de Rijnkade, rechts
een herenhuis in het Willemsplantsoen en op de achtergrond de Mariaplaats en de Buur- en
Domtoren. Omstreeks 1850.',
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 12,
        'catalog_number' => 135012,
        'title' => 'Titel 12',
        'description' => ' Gezicht over de Willemsbrug op de Rijnkade te Utrecht, het hek met de
douanekantoortjes aan weerszijden van de brug (de Willemsbarrière) en rechts van de brug het
begin van het in Engelse landschapsstijl aangelegde singelplantsoen.
',
        'img' => '/img/test/12.png',
        'extra_description' => null,
        'extra_description_1' => ' Gezicht vanaf de Catharijnesingel over de stadsbuitengracht te Utrecht
met de Willemsbrug en enkele herenhuizen aan de Rijnkade en het Willemsplantsoen, uit het
zuiden. Omstreeks 1850.',
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 13,
        'catalog_number' => 135013,
        'title' => 'Titel 13',
        'description' => ' Gezicht op het in Engelse landschapsstijl aangelegde singelplantsoen te Utrecht
met het theehuis van de oud-rooms-katholieke aartsbisschop en rechts het hospitaal van het
Duitse Huis. Het kruis boven het langgerekte rode dak is van de Dominicuskerk op de
Mariaplaats.',
        'img' => '/img/test/13.png',
        'extra_description' => null,
        'extra_description_1' => 'Gezicht op de Mariaplaats te Utrecht uit het westen, met in het midden
op de achtergrond de Zadelstraat en de Domtoren. Op de foto zie je ook een waterpomp. De
pomp werd in 1844 op de Mariaplaats geplaatst en leverde schoon water, zelfs tijdens de
cholera-uitbraken in de jaren 1870.',
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 14,
        'catalog_number' => 135014,
        'title' => 'Titel 14',
        'description' => 'Gezicht op het in Engelse landschapsstijl aangelegde singelplantsoen te Utrecht
ter hoogte van de Zeven Steegjes. De opzet van het plan Zocher was om de minder
aantrekkelijke delen van de stad te camoufleren. Dat doet hij hier door middel van een
plantsoen.',
        'img' => '/img/test/14.png',
        'extra_description' => null,
        'extra_description_1' => 'Plattegrond van de stad Utrecht met directe omgeving; met weergave
van het stratenplan (deels met straatnamen), wegen en watergangen en aanduiding van de
belangrijke gebouwen. Met weergave van alle groenvoorzieningen, waaronder de plantsoenen,
door Zocher aangelegd op de geslechte wallen en bolwerken, aangeduid als "Nieuwe
wandeling". Met lijst van belangrijke gebouwen en overige objecten. Datering rond 1858.
',
        'extra_description_2' => null,
        'extra_description_3' => null,
        'extra_description_4' => null,
        'extra_img_1' => null,
        'extra_img_2' => null,
        'extra_img_3' => null,
        'extra_img_4' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 15,
        'catalog_number' => 135015,
        'title' => 'Titel 15',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met het Bartholomeusgasthuis',
        'img' => '/img/test/15.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 16,
        'catalog_number' => 135016,
        'title' => 'Titel 16',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met links de Geertekerk en in de
stadsbuitengracht een houtvlot.',
        'img' => '/img/test/16.png',
        'extra_description_1' => 'geen afbeelding, alleen informatietekstje bij het grote houtvlot: De stadsbuitengracht (Singel)
had de taak als doorgaande scheepsroute overgenomen van de Oudegracht. Dit houtvlot
bestaat uit aan elkaar gebonden rijen boomstammen. Zo’n transport was vaak dagenlang
onderweg naar zijn eindbestemming, dikwijls Amsterdam. ',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 17,
        'catalog_number' => 135017,
        'title' => 'Titel 17',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met half achter de bomen het
Diakonessenhuis aan de Springweg en rechts een gedeelte van het vroegere bastion Sterrenburg
met daarachter de molen op de Bijlhouwerstoren en in de stadsbuitengracht een houtvlot.',
        'img' => '/img/test/17.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 18,
        'catalog_number' => 135018,
        'title' => 'Titel 18',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met het dubbele woonhuis boven de
kazematten van het vroegere bastion Sterrenburg en de molen op de Bijlhouwerstoren.',
        'img' => '/img/test/18.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 19,
        'catalog_number' => 135019,
        'title' => 'Titel 19',
        'description' => 'Gezicht over de Tolsteegbrug te Utrecht op de hekpalen van de Tolsteegbarrière bij
het Ledig Erf met daaronder de uitmonding van de Oudegracht in de stadsbuitengracht en rechts
het in het singelplantsoen opgenomen vroegere bastion Manenburg.',
        'img' => '/img/test/19.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 20,
        'catalog_number' => 135020,
        'title' => 'Titel 20',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met de zuidwestelijke toren van de
Nicolaikerk en de cavaleriestallen met daarachter een gebouw van het voormalige St.-
Agnietenklooster. Tegenwoordig ziet hier het Centraal Museum.',
        'img' => '/img/test/20.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 21,
        'catalog_number' => 135021,
        'title' => 'Titel 21',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met het gebouw van de Fundatie van de
Vrijvrouwe van Renswoude en rechts de kameren van Maria van Pallaes aan de Agnietenstraat.',
        'img' => '/img/test/21.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 22,
        'catalog_number' => 135022,
        'title' => 'Titel 22',
        'description' => ' Gezicht op het singelplantsoen te Utrecht met geheel links de regentenkamer van
de kameren van Maria van Pallaes en daarnaast de Nieuwegracht Onder de Linden en de
uitmonding van de Nieuwegracht in de stadsbuitengracht en rechts de rode daken van gebouwen van de voormalige St.-Servaasabdij',
        'img' => '/img/test/22.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 23,
        'catalog_number' => 135023,
        'title' => 'Titel 23',
        'description' => 'Gezicht op het singelplantsoen rond het voormalige bastion Zonnenburg te Utrecht
met links op de achtergrond een van de gebouwen van de voormalige St.-Servaasabdij, in het
midden het Meteorologisch Instituut en rechts de Sterrenwacht.',
        'img' => '/img/test/23.png',
        'extra_description_1' => 'Gezicht over de stadsbuitengracht te Utrecht op het Meteorologisch
Instituut op het voormalige bastion Zonnenburg. Foto omstreeks 1859.
',
        'extra_description_2' => " Gezicht over de stadsbuitengracht te Utrecht op de Sterrenwacht
(Astronomisch Observatorium) op het voormalige bastion Zonnenburg. Foto omstreeks 1859",
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 24,
        'catalog_number' => 135024,
        'title' => 'Titel 24',
        'description' => 'Gezicht op het singelplantsoen bij het Servaasbolwerkte Utrecht met rechts op de
achtergrond een gedeelte van het St.-Magdalenaklooster.',
        'img' => '/img/test/24.png',
        'extra_description_1' => 'Plattegrond van een niet gevoerd ontwerp van Zocher voor een
plantsoen op het bastion Lepelenburg te Utrecht.',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 25,
        'catalog_number' => 135025,
        'title' => 'Titel 25',
        'description' => ' Gezicht op het singelplantsoen bij het Servaasbolwerk te Utrecht met het gebouw
van het voormalige Leeuwenberchgasthuis, destijds in gebruik als chemisch laboratorium, en op
de achtergrond de daken van de bisschoppelijke stallen op het Servaasbolwerk.',
        'img' => '/img/test/25.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 26,
        'catalog_number' => 135026,
        'title' => 'Titel 26',
        'description' => 'Gezicht over de Maliebrug met het dubbele hek en het douanekantoortje (de
Maliebarrière) te Utrecht op het singelplantsoen met geheel links een gedeelte van de
Bruntenhof en rechts een gedeelte van het bolwerk Lepelenburg.',
        'img' => '/img/test/26.png',
        'extra_description_1' => 'Gezicht op de Maliebrug over de Stadsbuitengracht te Utrecht, uit het
noordoosten.',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 27,
        'catalog_number' => 135027,
        'title' => 'Titel 27',
        'description' => 'Gezicht op het voormalige bolwerk Lepelenburg te Utrecht met links het huis
Lievendaal en rechts enkele particuliere tuinhuizen.',
        'img' => '/img/test/27.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 28,
        'catalog_number' => 135028,
        'title' => 'Titel 28',
        'description' => ' Gezicht op het voormalige bolwerk Lepelenburg te Utrecht met een aantal
particuliere tuinen en tuinhuizen.
',
        'img' => '/img/test/28.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 29,
        'catalog_number' => 135029,
        'title' => 'Titel 29',
        'description' => 'Gezicht op het singelplantsoen te Utrecht ten noorden van het voormalige bolwerk
Lepelenburg, waarop het witte huis links staat, met in het midden de huizen aan het begin van
de Herenstraat en rechtsachter enkele van de kameren van Jan van der Meer aan het
Hieronymusplantsoen',
        'img' => '/img/test/29.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 30,
        'catalog_number' => 135030,
        'title' => 'Titel 30',
        'description' => 'Gezicht op het singelplantsoen te Utrecht ter hoogte van de bocht van de Kromme
Nieuwegracht (links op de achtergrond) met de huizen aan het Hieronymusplantsoen en
daarachter de voormalige St.-Hieronymuskapel en rechts twee boogjes, de restanten van de
oude stadsmuur',
        'img' => '/img/test/30.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 31,
        'catalog_number' => 135031,
        'title' => 'Titel 31',
        'description' => ' Gezicht op het singelplantsoen te Utrecht met links de Zonstraat (later gewijzigd in
Nobelstraat) die aansluit op de Lucasbrug, op de voorgrond, met rechts daarvan het
Lucasbolwerk met het Suikerhuis.
',
        'img' => '/img/test/31.png',
        'extra_description_1' => ' De Lucasbrug werd ook wel knuppelbrug genoemd. De brug is
opgebouwd uit schijnbaar willekeurig geplaatste ruwe boomstammetjes. s',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 32,
        'catalog_number' => 135032,
        'title' => 'Titel 32',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met links de noordelijke punt van het
Lucasbolwerk met de directeurswoning van het Suikerhuis. Het Suikerhuis was een
suikerraffinaderij die in 1721 werd begonnen. In 1860 werd deze afgebroken.
',
        'img' => '/img/test/32.png',
        'extra_description_1' => ' Gezicht op het Lucasbolwerk met het Suikerhuis te Utrecht, vóór de
afbraak, uit het noorden.',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'page' => 33,
        'catalog_number' => 135033,
        'title' => 'Titel 33',
        'description' => 'Gezicht op het singelplantsoen te Utrecht ten noorden van het Lucasbolwerk.
Uiterst rechts sluit het plantsoen aan bij de Wittevrouwenbrug waarmee het panorama begint.
Hier eindigt de tekenaar zijn rondje langs de singel.',
        'img' => '/img/test/33.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
        ];

        foreach ($panoramas as $panorama) {
            $panorama['created_at'] = Carbon::now();
            $panorama['updated_at'] = Carbon::now();
            DB::table('panoramas')->insert($panorama);
        }
    }
}