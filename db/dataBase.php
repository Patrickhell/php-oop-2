<?php
include_once __DIR__ . '/../classes/category.php';
include_once __DIR__ . '/../classes/medecines.php';
include_once __DIR__ . '/../classes/accessories.php';
include_once __DIR__ . '/../classes/snacks.php';
include_once __DIR__ . '/../classes/product.php';

$textSnackDescription = 'I Biscrok sono biscotti per cani croccanti in 3 deliziose varietà, 
cotti alla perfezione. Renderai felice il tuo cane ogni giorno. Con Omega 3 per 
contribuiscono a rimanere in forma, Vitamine per aiutarlo a mantenere le sue difese naturali, 
Minerali compreso il calcio per aiutarlo ad avere ossa forti e privo di coloranti e aromi artificiali.';

$textAccessories = 'Il guinzaglio da addestramento per cane Pet Around You Comfort, di colore nero, 
ti consentirà di allungarlo e accorciarlo in base alle esigenze del momento, grazie al sistema di 
anelli e doppi moschettoni. In nylon robusto, si presta a durare nel tempo, capace di resistere
 bene alle sollecitazioni e agli strattoni da parte dei cani. L\'impugnatura ergonomica imbottita 
 è stata appositamente pensata per rendere la presa più confortevole.';

$textMedecines = 'Dog Care è un collare protettivo per cane pensato per contribuire a migliorare
 la gestione delle fasi in cui sia necessario proteggere l\'animale. Ideale nel caso di ferite, 
 eruzioni cutanee o come protezione post-operatoria. La visuale del tuo cane non sarà limitata. 
 Dog Care resiste a morsi, graffi e presenta un rivestimento sfoderabile e lavabile';

$BedDescription = ' La cuccetta Luna&Teo è prodotta da artigiani 
 italiani utilizzando materiali di ottima qualità. Realizzata in policotone, con stampe che seguono 
 la tendenza di moda di interior design. Facile da lavare';

$bowlDescription = 'Ciotola in melamina e piatto in acciaio inox STAR WARS. Diametro 17,5 cm. 
 Capacità 410ml. Design esclusivo e resistente. La sua base è antiscivolo, ideale per l\'animale per non 
 rovesciare il suo contenuto. Il suo piatto metallico è estraibile, in modo tale da avere 2 ciotole in 1.
  Questo prodotto è adatto per la lavastoviglie.';



$accessoriesItems = new Category('ACCESSORIES', '');
$medecinesItems = new Category('MEDECINES', '');
$snacksItems = new Category('FOODS', '');


$bedDogProduct = new Accessories($accessoriesItems, 'Bed Dogs', $BedDescription, 'https://i5.walmartimages.com/asr/664bc6a9-ea04-4248-bdca-49e86f99aa68.7e65d8b17d5cfaeb7494617d2f25c735.jpeg', 49.99, 'Accessory for dogs', 4, 2);
$bowlPoduct = new Accessories($accessoriesItems, 'Bowl', $bowlDescription, 'https://www.shardanagadget.it/4320-thickbox_default/ciotola-per-cane.jpg', 20.90, 'Accessory for dogs', 4, 6);
$leashPoduct = new Accessories($accessoriesItems, 'Leash', $textAccessories, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSh-mRtI3dRCdaFpcV0fy7OkKOnZWc5BALgK6nc7YcYwce9h93J4XqYejby80-5zuMBQ6g&usqp=CAU', 39.99, 'Accessory for Dogs', 06, 06);
$biscuitAppleProduct = new Snacks($snacksItems, 'In The Nature Dog Apple Biscuits', $textSnackDescription, 'https://arcaplanet.vtexassets.com/arquivos/ids/249785-200-200/in-the-nature-bio-cane-biscotti-biscotti-meka.jpg?v=1775828747', 3.99, 'Biscuits', 4, 1);
$biscuitCoccoProduct = new Snacks($snacksItems, 'In The Nature Dog Cocco Biscuits', $textSnackDescription, 'https://arcaplanet.vtexassets.com/arquivos/ids/226869-200-200/in-the-nature-bio-cane-biscotti-biscotti-cocco.jpg?v=1775828746', 3.99, 'Biscuits', 6, 3);
$biscuitMilkProduct = new Snacks($snacksItems, ' In The Nature Dog Milk Biscuits', $textSnackDescription, 'https://arcaplanet.vtexassets.com/arquivos/ids/271658-200-200/in-the-nature-biscotti-latte.jpg?v=1775818592', 3.99, 'Biscuits', 10, 11);
$medecineProduct = new Medecines($medecinesItems, 'Canine Probiotic', $textMedecines, 'https://arcaplanet.vtexassets.com/arquivos/ids/281303-200-200/purina-pro-plan-fortiflora-canine-probiotics.jpg?v=1775826504', 19.99, 'Antibiotics', 7, 8);
$integratorProduct = new Medecines($medecinesItems, 'Redonyl Ultra Integrator', $textMedecines, 'https://arcaplanet.vtexassets.com/arquivos/ids/266584-200-200/10070609-redonyl-ultra-60-capsule-150-mg.jpg?v=1775780040', 19.99, 'Integrator', 3, 9);
$collarProduct = new Medecines($medecinesItems, 'Collar for dogs', $textMedecines, 'https://arcaplanet.vtexassets.com/arquivos/ids/265902-200-200/camon-collare-protettivo-gonfiabile-dog-care.jpg?v=1775434333', 19.99, 'Pesticides', 5, 6);




$bedCatProduct = new Accessories($accessoriesItems, 'Bed Cat ', $BedDescription, 'https://m.media-amazon.com/images/I/81Kq9lRbqML.jpg', 19.99, 'Accessory cats', 9, 12);
$foodDispenserPoduct = new Accessories($accessoriesItems, 'Food Dispenser', $bowlDescription, 'https://img.joomcdn.net/a11c87c685bc83501c06e726ee06e6f1305e0df4_original.jpeg', 21.99, 'Accessory for dogs', 8, 8);
$waterDispenserPoduct = new Accessories($accessoriesItems, 'Water Dispenser', $bowlDescription, 'https://m.media-amazon.com/images/I/719nUZAm0oL.jpg', 21.99, 'Accessory for dogs', 1, 1);
$foodGourmetPoduct  = new Snacks($snacksItems, 'Gourmet Perle Filettini in Salsa', $textSnackDescription, 'https://arcaplanet.vtexassets.com/arquivos/ids/274367-200-200/MAIN.PNG.jpg?v=1775815434', 23.99, 'Proteins', 1, 02);
$meatFoodProduct = new Snacks($snacksItems, 'Gourmet Gold Mix Tortini', $textSnackDescription, 'https://arcaplanet.vtexassets.com/arquivos/ids/274180-200-200/MAIN.jpg?v=1775828406', 24.90, 'Proteins', 07, 07);
$kitckenProduct = new Snacks($snacksItems, 'Natural Filetti Pollo e Prosciutto ', $textSnackDescription, 'https://arcaplanet.vtexassets.com/arquivos/ids/208051-200-200/Next-Gatto-Multipack-Filetti-di-Pollo-e-Prosciutto-di-pollo-jelly-6x50.jpg?v=1775830710', 24.90, 'Proteins', 9, 8);
$collarCatProduct = new Medecines($medecinesItems, 'Collar for Cats', $textMedecines, 'https://arcaplanet.vtexassets.com/arquivos/ids/283839-200-200/beaphar-diazitec-collare-antiparassitario-per-gatto-rosso.jpg?v=1775521534', 30.99, 'Pesticides', 9, 4);
$medecineCatProduct = new Medecines($medecinesItems, 'Feline Probiotic', $textMedecines, 'https://arcaplanet.vtexassets.com/arquivos/ids/281292-200-200/purina-pro-plan-fortiflora-feline-probiotics.jpg?v=1775797294', 30.99, 'Integrator', 8, 4);
$medecineCleanProduct = new Medecines($medecinesItems, 'Detergente Auricolare ', $textMedecines, 'https://arcaplanet.vtexassets.com/arquivos/ids/259535-200-200/epiotic.jpg?v=1775829557', 30.99, 'Ear Care', 3, 02);


$dogsProducts = [
    $bedDogProduct,
    $bowlPoduct,
    $leashPoduct,
    $biscuitAppleProduct,
    $biscuitCoccoProduct,
    $biscuitMilkProduct,
    $medecineProduct,
    $integratorProduct,
    $collarProduct

];

$catsProducts = [
    $bedCatProduct,
    $foodDispenserPoduct,
    $waterDispenserPoduct,
    $foodGourmetPoduct,
    $meatFoodProduct,
    $kitckenProduct,
    $collarCatProduct,
    $medecineCatProduct,
    $medecineCleanProduct,
];
