<?php
/**
 * Internationalisation file for extension Duplicator.
 *
 * @file
 * @ingroup Extensions
 * @author Rob Church <robchur@gmail.com>
 */

$messages = array();

$messages['en'] = array(
	'duplicator'                       => 'Duplicate a page',
	'duplicator-desc'                  => 'Create independent [[Special:Duplicate|copies of pages]] with full edit histories',
	'duplicator-toolbox'               => 'Duplicate this page',
	'duplicator-header'                => 'This page allows the complete duplication of a page, creating independent copies of all histories.
This is useful for page forking, etc.',
	'duplicator-options'               => 'Options',
	'duplicator-source'                => 'Source:',
	'duplicator-dest'                  => 'Destination:',
	'duplicator-dotalk'                => 'Duplicate discussion page (if applicable)',
	'duplicator-dosubpages'            => 'Duplicate subpages (if any)',
	'duplicator-dohistory'             => 'Duplicate full page history',
	'duplicator-submit'                => 'Duplicate',
	'duplicator-summary'               => 'Copied from [[$1]], revision [[$2]]',
	'duplicator-success'               => "[[$1]] was copied to [[$2]].",
	'duplicator-success-revisions'     => '$1 {{PLURAL:$1|revision was|revisions were}} copied.',
	'duplicator-success-talknotcopied' => 'The talk page could not be copied.',
	'duplicator-failed'                => 'The page could not be duplicated.
An unknown error occurred.',
	'duplicator-failed-toolong'        => '[[$1]] was not duplicated. The destination title is too long.',
	'duplicator-failed-dest-exists'    => '[[$1]] was not duplicated. The destination [[$2]] already exists.',
	'duplicator-source-invalid'        => 'Please provide a valid source title.',
	'duplicator-source-notexist'       => '[[$1]] does not exist. Please provide the title of a page that exists.',
	'duplicator-dest-invalid'          => 'Please provide a valid destination title.',
	'duplicator-dest-exists'           => '[[$1]] already exists. Please provide a destination title which does not exist.',
	'right-duplicate' => 'Duplicate pages',
);

/** Message documentation (Message documentation)
 * @author Jon Harald Søby
 * @author McDutchie
 * @author Purodha
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'duplicator' => '{{doc-special|Duplicator|unlisted=1}}',
	'duplicator-desc' => 'Extension description displayed on [[Special:Version]].',
	'duplicator-toolbox' => 'Used as text for the link which is in the toolbox.',
	'duplicator-header' => 'Used as header text in [[Special:Duplicator]].

Followed by the form.',
	'duplicator-options' => 'Used as fieldset label.

Followed by the source and destination inputboxes, and checkboxes.
{{Identical|Options}}',
	'duplicator-source' => 'Used as label for the "Source page title" inputbox.
{{Identical|Source}}',
	'duplicator-dest' => 'Used as label for the "Destination page title" inputbox.
{{Identical|Destination}}',
	'duplicator-dotalk' => 'Used as checkbox label.',
	'duplicator-dosubpages' => 'Used as checkbox label.',
	'duplicator-dohistory' => 'Used as checkbox label.',
	'duplicator-submit' => 'Used as label for the Submit button.
{{Identical|Duplicate}}',
	'duplicator-summary' => 'Used as a revision summary. Parameters:
* $1 - source page title
* $2 - revision ID',
	'duplicator-success' => 'Used as success message.

Followed by the message {{msg-mw|Duplicator-success-revisions}}.

Parameters:
* $1 - source page title
* $2 - destination page title',
	'duplicator-success-revisions' => 'Used as success message.

Preceded by the message {{msg-mw|Duplicator-success}}.

Parameters:
* $1 - number of revisions',
	'duplicator-success-talknotcopied' => 'Used as failure message when duplicating the talk page.',
	'duplicator-failed' => 'Used as fatal error message.',
	'duplicator-failed-toolong' => 'Used as failure message. Parameters:
* $1 - source page title
See also:
* {{msg-mw|Duplicator-failed-dest-exists}}',
	'duplicator-failed-dest-exists' => 'Used as failure message. Parameters:
* $1 - source page title
* $2 - destination page title
See also:
* {{msg-mw|Duplicator-failed-toolong}}',
	'duplicator-source-invalid' => 'Used as error message.

See also:
* {{msg-mw|Duplicator-dest-invalid}}',
	'duplicator-source-notexist' => 'Used as error message. Parameters:
* $1 - source page title
See also:
* {{msg-mw|Duplicator-dest-exists}}',
	'duplicator-dest-invalid' => 'Used as error message.

See also:
* {{msg-mw|Duplicator-source-invalid}}',
	'duplicator-dest-exists' => 'Used as error message. Parameters:
* $1 - destination page title
See also:
* {{msg-mw|Duplicator-source-notexist}}',
	'right-duplicate' => '{{doc-right|duplicate}}
"Duplicate" is a verb here, not an adjective.',
);

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 * @author Naudefj
 */
$messages['af'] = array(
	'duplicator' => "Dupliseer 'n bladsy",
	'duplicator-desc' => 'Skep onafhanklike [[Special:Duplicate|kopieë van bladsye]] met volle geskiedenis van wysigings',
	'duplicator-toolbox' => 'Dupliseer hierdie bladsy',
	'duplicator-header' => 'Hierdie bladsy maak dit moontlik om \'n bladsy volledig te kopieer, waardeur onafhanklike kopieë met volledige geskiedenis ontstaan.
Dit is handig vir "forks", ensovoorts.',
	'duplicator-options' => 'Opsies',
	'duplicator-source' => 'Bron:',
	'duplicator-dest' => 'Bestemming:',
	'duplicator-dotalk' => 'Dupliseer besprekingsblad (indien van toepassing)',
	'duplicator-submit' => 'Dupliseer',
	'duplicator-summary' => 'Gekopieer vanaf [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] is na [[$2]] gekopieer.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|weergawe|weergawes}} is gekopieer.',
	'duplicator-success-talknotcopied' => 'Die besprekingsblad kon nie gekopieer word nie.',
	'duplicator-failed' => "Die bladsy kon nie gekopieer word nie.
'n Onbekende fout het voorgekom.",
	'duplicator-source-invalid' => "Verskaf asseblief 'n geldige bronbladsy.",
	'duplicator-source-notexist' => "[[$1]] bestaan nie.
Verskaf asseblief 'n bladsy wat bestaan.",
	'duplicator-dest-invalid' => "Verskaf asseblief 'n geldige bestemmingsbladsy.",
	'duplicator-dest-exists' => "[[$1]] bestaan reeds.
Verskaf asseblief 'n bestemmingbladsy wat nie bestaan nie.",
	'right-duplicate' => 'Dupliseer bladsye',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'duplicator-options' => 'ምርጫዎች',
);

/** Arabic (العربية)
 * @author Gharbeia
 * @author Meno25
 */
$messages['ar'] = array(
	'duplicator' => 'استنساخ صفحة',
	'duplicator-desc' => 'ينشئ [[Special:Duplicate|نسخا مستقلة من الصفحات]] بتاريخ التعديلات الكامل',
	'duplicator-toolbox' => 'استنسخ هذه الصفحة',
	'duplicator-header' => 'هذه الصفحة تسمح بالاستنساخ الكامل لصفحة، وإنشاء نسخ مستقلة لكل التواريخ.
هذا مفيد في استنساخ صفحة، إلى آخره.',
	'duplicator-options' => 'خيارات',
	'duplicator-source' => 'المصدر:',
	'duplicator-dest' => 'الوجهة:',
	'duplicator-dotalk' => 'استنسخ صفحة النقاش (إن أمكن)',
	'duplicator-submit' => 'استنساخ',
	'duplicator-summary' => 'منسوخ من [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] تم نسخها إلى [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|مراجعة|مراجعة}} تم نسخها.',
	'duplicator-success-talknotcopied' => 'لم يمكن نسخ صفحة النقاش.',
	'duplicator-failed' => 'لم يمكن استساخ الصفحة.
حدث خطأ غير معروف.',
	'duplicator-source-invalid' => 'من فضلك اكتب عنوان مصدر صحيح.',
	'duplicator-source-notexist' => '[[$1]] غير موجودة. من فضلك اكتب عنوان صفحة موجودة.',
	'duplicator-dest-invalid' => 'من فضلك اكتب عنوان وجهة صحيح.',
	'duplicator-dest-exists' => '[[$1]] موجودة بالفعل. من فضلك اكتب عنوان هدف غير موجود.',
	'right-duplicate' => 'استنساخ الصفحات',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 * @author Michaelovic
 */
$messages['arc'] = array(
	'duplicator-options' => 'ܓܒܝܬ̈ܐ',
	'duplicator-source' => 'ܡܒܘܥܐ:',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'duplicator' => 'استنساخ صفحة',
	'duplicator-desc' => 'ينشئ [[Special:Duplicate|نسخا مستقلة من الصفحات]] بتاريخ التعديلات الكامل',
	'duplicator-toolbox' => 'استنسخ هذه الصفحة',
	'duplicator-header' => 'هذه الصفحة تسمح بالاستنساخ الكامل لصفحة، وإنشاء نسخ مستقلة لكل التواريخ.
هذا مفيد فى استنساخ صفحة، إلى آخره.',
	'duplicator-options' => 'خيارات',
	'duplicator-source' => 'المصدر:',
	'duplicator-dest' => 'الوجهة:',
	'duplicator-dotalk' => 'استنسخ صفحة النقاش (إن أمكن)',
	'duplicator-submit' => 'استنساخ',
	'duplicator-summary' => 'منسوخ من [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] تم نسخها إلى [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|مراجعة|مراجعة}} تم نسخها.',
	'duplicator-success-talknotcopied' => 'لم يمكن نسخ صفحة النقاش.',
	'duplicator-failed' => 'لم يمكن استساخ الصفحة.
حدث خطأ غير معروف.',
	'duplicator-source-invalid' => 'من فضلك اكتب عنوان مصدر صحيح.',
	'duplicator-source-notexist' => '[[$1]] غير موجودة. من فضلك اكتب عنوان صفحة موجودة.',
	'duplicator-dest-invalid' => 'من فضلك اكتب عنوان وجهة صحيح.',
	'duplicator-dest-exists' => '[[$1]] موجودة بالفعل. من فضلك اكتب عنوان هدف غير موجود.',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'duplicator' => 'Duplicar una páxina',
	'duplicator-desc' => "Crear [[Special:Duplicate|copies independientes de les páxines]] colos historiales d'edición completos",
	'duplicator-toolbox' => 'Duplicar esta páxina',
	'duplicator-header' => "Esta páxina permite la duplicación completa d'una páxina creando copies independientes de tolos historiales. Ye afayadizo pa subdividir páxines, etc.",
	'duplicator-options' => 'Opciones',
	'duplicator-source' => 'Fonte:',
	'duplicator-dest' => 'Destín:',
	'duplicator-dotalk' => "Duplicar la páxina d'alderique (si ye aplicable)",
	'duplicator-dosubpages' => 'Duplicar sub-páxines (si hai)',
	'duplicator-dohistory' => "Duplicar l'historial completu de la páxina",
	'duplicator-submit' => 'Duplicar',
	'duplicator-summary' => 'Copiao de [[$1]], revisión [[$2]]',
	'duplicator-success' => "<big>'''[[$1]] copióse a [[$2]].'''</big>",
	'duplicator-success-revisions' => 'Se {{PLURAL:$1|copió|copiaron}} $1 {{PLURAL:$1|revisión|revisiones}}.',
	'duplicator-success-talknotcopied' => "Nun pudo copiase la páxina d'alderique.",
	'duplicator-failed' => 'Nun pudo duplicase la páxina. Asocedió un error desconocíu.',
	'duplicator-failed-toolong' => '[[$1]] nun se duplicó. El títulu de destín ye demasiao llargu.',
	'duplicator-failed-dest-exists' => '[[$1]] nun se duplicó. El destín [[$2]] yá esiste.',
	'duplicator-source-invalid' => "Por favor proporcione un títulu d'orixe válidu.",
	'duplicator-source-notexist' => "[[$1]] nun esiste. Proporcione un títulu de páxina qu'esista.",
	'duplicator-dest-invalid' => 'Proporcione un títulu de destín válidu.',
	'duplicator-dest-exists' => '[[$1]] yá esiste. Proporcione un títulu de destín que nun esista.',
	'right-duplicate' => 'Duplicar páxines',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author Vago
 */
$messages['az'] = array(
	'duplicator-options' => 'Nizamlamalar:',
	'duplicator-source' => 'Mənbə:',
	'duplicator-submit' => 'Surəti',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'duplicator-options' => 'Mga pilian',
	'duplicator-source' => 'Ginikanan:',
	'duplicator-dest' => 'Destinasyon:',
	'duplicator-summary' => 'Kinopya sa [[$1]]', # Fuzzy
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'duplicator' => 'Капіяваць старонку',
	'duplicator-desc' => 'Стварае незалежныя [[Special:Duplicate|копіі старонак]] з поўнай гісторыяй зьменаў',
	'duplicator-toolbox' => 'Капіяваць гэтую старонку',
	'duplicator-header' => 'Гэтая старонка дазваляе скончыць капіяваньне старонкі і стварыць незалежную копію ўсёй гісторыі.
Гэта карысна для разгалінаваньня старонкі, і г.д.',
	'duplicator-options' => 'Налады',
	'duplicator-source' => 'Крыніца:',
	'duplicator-dest' => 'Мэтавая старонка:',
	'duplicator-dotalk' => 'Капіяваць старонку абмеркаваньня (калі магчыма)',
	'duplicator-submit' => 'Капіяваць',
	'duplicator-summary' => 'Копія [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] была скапіяваная ў [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|рэдагаваньне было скапіяванае|рэдагаваньні былі скапіяваныя|рэдагаваньняў былі скапіяваныя}}.',
	'duplicator-success-talknotcopied' => 'Старонка абмеркаваньня не магла быць скапіяваная.',
	'duplicator-failed' => 'Старонка ня можа быць скапіяваная.
Невядомая памылка.',
	'duplicator-source-invalid' => 'Калі ласка, увядзіце слушную назву крыніцы.',
	'duplicator-source-notexist' => 'Старонка [[$1]] не існуе. Калі ласка, увядзіце назву старонкі, якая існуе.',
	'duplicator-dest-invalid' => 'Калі ласка, увядзіце слушную назву мэтавай старонкі.',
	'duplicator-dest-exists' => '[[$1]] ужо існуе. Калі ласка, увядзіце назву старонкі, якой яшчэ няма.',
	'right-duplicate' => 'капіяваньне старонак',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Spiritia
 */
$messages['bg'] = array(
	'duplicator-desc' => 'Създава независими [[Special:Duplicate|копия на страниците]] с пълните им редакционни истории',
	'duplicator-options' => 'Настройки',
	'duplicator-source' => 'Източник:',
	'duplicator-dest' => 'Цел:',
	'duplicator-summary' => 'Копирано от [[$1]]', # Fuzzy
	'duplicator-success' => 'Страницата [[$1]] беше копирана като [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|редакция беше копирана|редакции бяха копирани}}.',
	'duplicator-success-talknotcopied' => 'Дискусионната страница не можа да бъде копирана.',
	'duplicator-source-invalid' => 'Необходимо е да се посочи валидно изходно заглавие.',
	'duplicator-source-notexist' => 'Не съществува страница [[$1]]. Необходимо е да се посочи заглавие, което съществува.',
	'duplicator-dest-invalid' => 'Необходимо е валидно целево заглавие.',
	'duplicator-dest-exists' => 'Вече съществува страница [[$1]]. Необходимо е да се посочи целево заглавие, което не съществува.',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'duplicator' => 'একটি পাতার প্রতিলিপি',
	'duplicator-toolbox' => 'এই পাতার প্রতিলিপি',
	'duplicator-options' => 'অপশন',
	'duplicator-source' => 'উৎস:',
	'duplicator-dest' => 'লক্ষ্য:',
	'duplicator-dotalk' => 'প্রতিলিপিকৃত আলোচনা পাতা (যদি প্রযোজ্য হয়)',
	'duplicator-submit' => 'প্রতিলিপি',
	'duplicator-summary' => '[[$1]] থেকে অনুলিপিকৃত', # Fuzzy
	'duplicator-success-talknotcopied' => 'এই আলাপ পাতাটি অনুলেপন করা যাবে না।',
	'right-duplicate' => 'প্রতিলিপিকৃত পাতাসমূহ',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'duplicator' => 'Eilañ ur pajenn',
	'duplicator-desc' => "Krouiñ [[Special:Duplicate|eiladoù a-ziforc'h eus pajennoù]] gant istor klok ar c'hemmoù.",
	'duplicator-toolbox' => 'Eilañ ar bajenn-mañ',
	'duplicator-header' => "Dre ar bajenn-mañ e c'haller eilañ ur bajenn penn-da-benn ha sevel stummoù a-ziforc'h evit pep kemm degaset. Talvoudus eo evit diforc'hañ pennadoù, da skouer.",
	'duplicator-options' => 'Dibarzhioù',
	'duplicator-source' => 'Mammenn :',
	'duplicator-dest' => "Lec'h-kas :",
	'duplicator-dotalk' => 'Eilañ ar bajenn gaozeal (mar galler)',
	'duplicator-submit' => 'Eilañ',
	'duplicator-summary' => 'Eilet eus [[$1]]', # Fuzzy
	'duplicator-success' => 'Eilet eo bet [[$1]] war [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|kemm|kemm}} zo bet eilet.',
	'duplicator-success-talknotcopied' => "N'eus ket bet gallet eilañ ar bajenn gaozeal.",
	'duplicator-failed' => "N'eus ket bet gallet eilañ ar bajenn-mañ. C'hoarvezet ez eus ur fazi digomprenus.",
	'duplicator-source-invalid' => "Mar plij, lakait anv ur pennad zo anezhañ c'hoazh.",
	'duplicator-source-notexist' => "N'eus ket eus [[$1]]. Lakait titl ur pennad zo anezhañ mar plij",
	'duplicator-dest-invalid' => "Merkit un titl reizh evel lec'h-kas, mar plij",
	'duplicator-dest-exists' => "Bez' ez eus eus [[$1]] c'hoazh. Merkit titl ul lec'h-kas n'eo ket bet krouet c'hoazh.",
	'right-duplicate' => 'Eilañ pajennoù',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'duplicator' => 'Dupliciraj stranicu',
	'duplicator-desc' => 'Pravi nezavisne [[Special:Duplicate|kopije stranica]] sa potpunim historijama uređivanja',
	'duplicator-toolbox' => 'Dupliciraj ovu stranicu',
	'duplicator-header' => 'Ova stranica omogućava da se dovrši duplikacija stranice, stvarajući nezavisne kopije svih historija.
Ovo je korisno za dijeljenje stranice itd.',
	'duplicator-options' => 'Opcije',
	'duplicator-source' => 'Izvor:',
	'duplicator-dest' => 'Odredište:',
	'duplicator-dotalk' => 'Dupliciraj stranicu za razgovor (ako je moguće)',
	'duplicator-submit' => 'Dupliciraj',
	'duplicator-summary' => 'Kopirano sa [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] je kopirano na [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revizija je kopirana|revizije su kopirane|revizija je kopirano}}.',
	'duplicator-success-talknotcopied' => 'Stranica za razgovor se nije mogla kopirati.',
	'duplicator-failed' => 'Stranica nije mogla biti duplicirana.
Desila se nepoznata greška.',
	'duplicator-source-invalid' => 'Molimo navedite valjan izvorni naslov.',
	'duplicator-source-notexist' => '[[$1]] ne postoji. Molimo navedite naslov stranice koji postoji.',
	'duplicator-dest-invalid' => 'Molimo navedite valjan naslov odredišta.',
	'duplicator-dest-exists' => '[[$1]] već postoji. Molimo navedite odredišni naslov koji još ne postoji.',
	'right-duplicate' => 'Dupliciranje stranica',
);

/** Catalan (català)
 * @author Alvaro Vidal-Abarca
 * @author Fitoschido
 * @author McDutchie
 * @author SMP
 * @author Solde
 * @author Toniher
 */
$messages['ca'] = array(
	'duplicator' => 'Duplica una pàgina',
	'duplicator-desc' => "Crea [[Special:Duplicate|còpies de pàgines]] mantenint l'historial d'edicions",
	'duplicator-toolbox' => 'Duplica aquesta pàgina',
	'duplicator-header' => "Aquesta pàgina permet la duplicació completa d'una pàgina, creant còpies independents de tots els historials. Això és útil per a l'edició de nous articles a partir d'altres, etc.",
	'duplicator-options' => 'Opcions',
	'duplicator-source' => 'Origen:',
	'duplicator-dest' => 'Destinació',
	'duplicator-dotalk' => 'Duplica la pàgina de discussió (quan així es pugui)',
	'duplicator-submit' => 'Duplica',
	'duplicator-summary' => 'Copiat des de [[$1]], revisió [[$2]]',
	'duplicator-success' => "[[$1]] s'ha copiat a [[$2]].",
	'duplicator-success-revisions' => "{{PLURAL:$1|S'ha copiat una revisió|S'han copiat $1 revisions}}.",
	'duplicator-success-talknotcopied' => "La pàgina de discussió no s'ha pogut copiar.",
	'duplicator-failed' => "La pàgina no s'ha pogut duplicar. S'ha produït un error desconegut.",
	'duplicator-source-invalid' => 'Proporcioneu un títol de pàgina original vàlid.',
	'duplicator-source-notexist' => "[[$1]] no existeix. Proporcioneu un títol d'una pàgina que existeixi.",
	'duplicator-dest-invalid' => 'Proporcioneu un títol de destinació vàlid.',
	'duplicator-dest-exists' => '[[$1]] ja existeix. Proporcioneu un títol de destinació que no existeixi.',
	'right-duplicate' => 'Duplicar pàgines',
);

/** Czech (čeština)
 * @author Jkjk
 * @author Michaelbrabec
 * @author Mormegil
 */
$messages['cs'] = array(
	'duplicator' => 'Duplikovat stránku',
	'duplicator-desc' => 'Vytvořit [[Special:Duplicate|kopie stránek]] s plnou historií úprav',
	'duplicator-toolbox' => 'Duplikovat tuto stránku',
	'duplicator-header' => 'Tato stránka umožňuje vytvořit kompletní kopii stránky, včetně celé historie. 
To je užitečné např. při větvení projektů.',
	'duplicator-options' => 'Nastavení',
	'duplicator-source' => 'Zdroj:',
	'duplicator-dest' => 'Cíl:',
	'duplicator-dotalk' => 'Duplikovat i diskusní stránku (pokud existuje)',
	'duplicator-dohistory' => 'Duplikovat celou historii stránky',
	'duplicator-submit' => 'Duplikovat',
	'duplicator-summary' => 'Zkopírováno z [[$1]], revize [[$2]]',
	'duplicator-success' => '[[$1]] bylo zkopírováno do [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revize byla zkopírována|revize byly zkopírovány|revizí bylo zkopírováno}}.',
	'duplicator-success-talknotcopied' => 'Nebylo možné zkopírovat diskuzní stránku',
	'duplicator-failed' => 'Tuto stránku nebylo možné zkopírovat.
Došlo k neznámé chybě.',
	'duplicator-source-invalid' => 'Zadejte platný titulek zdroje.',
	'duplicator-source-notexist' => '[[$1]] neexistuje. Zadejte název stránky, která existuje.',
	'right-duplicate' => 'Duplikování stránek',
);

/** Danish (dansk)
 * @author Jon Harald Søby
 */
$messages['da'] = array(
	'duplicator-source' => 'Kilde:',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Leon Weber
 * @author Metalhead64
 * @author Purodha
 * @author Revolus
 * @author Umherirrender
 */
$messages['de'] = array(
	'duplicator' => 'Seite duplizieren',
	'duplicator-desc' => 'Legt unabhängige [[Special:Duplicate|Kopien von Seiten]] an mit ihrer Versionsgeschichte',
	'duplicator-toolbox' => 'Diese Seite duplizieren',
	'duplicator-header' => 'Mit dieser Spezialseite können Seiten komplett dupliziert werden. Dabei wird die gesamte Versionsgeschichte übernommen. Dies kann beispielsweise nützlich sein, um eine Seite in Unterseiten aufzuteilen.',
	'duplicator-options' => 'Optionen',
	'duplicator-source' => 'Quelle:',
	'duplicator-dest' => 'Ziel:',
	'duplicator-dotalk' => 'Diskussionsseite mitkopieren (wenn möglich)',
	'duplicator-dosubpages' => 'Unterseiten duplizieren (falls verfügbar)',
	'duplicator-dohistory' => 'Vollständige Versionsgeschichte duplizieren',
	'duplicator-submit' => 'Seite duplizieren',
	'duplicator-summary' => 'Kopiert von [[$1]], Version [[$2]]',
	'duplicator-success' => '[[$1]] wurde nach [[$2]] kopiert.',
	'duplicator-success-revisions' => '{{PLURAL:$1|1 Version wurde|$1 Versionen wurden}} dupliziert.',
	'duplicator-success-talknotcopied' => 'Die Diskussionsseite konnte nicht dupliziert werden.',
	'duplicator-failed' => 'Die Seite konnte nicht dupliziert werden, da ein unbekannter Fehler auftrat.',
	'duplicator-failed-toolong' => '[[$1]] wurde nicht dupliziert. Der Zieltitel ist zu lang.',
	'duplicator-failed-dest-exists' => '[[$1]] wurde nicht dupliziert. Das Ziel „[[$2]]“ ist bereits vorhanden.',
	'duplicator-source-invalid' => 'Bitte gib eine gültige Quell-Seite an.',
	'duplicator-source-notexist' => 'Die Seite [[$1]] ist nicht vorhanden. Bitte gib eine vorhandene Seite an.',
	'duplicator-dest-invalid' => 'Bitte gib eine gültige Ziel-Seite an.',
	'duplicator-dest-exists' => 'Die Seite [[$1]] ist bereits vorhanden. Bitte gib eine Zielseite an, die nicht vorhanden ist.',
	'right-duplicate' => 'Seiten duplizieren',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Imre
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'duplicator-source-invalid' => 'Bitte geben Sie eine gültige Quell-Seite an.',
	'duplicator-source-notexist' => 'Die Seite [[$1]] ist nicht vorhanden. Bitte geben Sie eine vorhandene Seite an.',
	'duplicator-dest-invalid' => 'Bitte geben Sie eine gültige Ziel-Seite an.',
	'duplicator-dest-exists' => 'Die Seite [[$1]] ist bereits vorhanden. Bitte geben Sie eine Zielseite an, die nicht vorhanden ist.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Marmase
 * @author Mirzali
 */
$messages['diq'] = array(
	'duplicator' => 'Yew pela kopya ke',
	'duplicator-options' => 'Weçinegi',
	'duplicator-source' => 'Çıme:',
	'duplicator-dest' => 'Hedef:',
	'duplicator-submit' => 'Kopya',
	'duplicator-summary' => '[[$1]] ra [[$2]] kopya ke',
	'right-duplicate' => 'Pela keno kopya',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'duplicator' => 'Bok duplicěrowaś',
	'duplicator-desc' => 'Njewótwisne [[Special:Duplicate|kopije bokow]] z jich dopołnymi stawiznami napóraś',
	'duplicator-toolbox' => 'Toś ten bik duplicěrowaś',
	'duplicator-header' => 'Toś ten bok zmóžnja kompletnu duplikaciju boka. Mimo togo napóraju se njewótwisne kopije wersijowych stawiznow. To móžo wužytne byś, aby rozrědował boki atd.',
	'duplicator-options' => 'Opcije',
	'duplicator-source' => 'Žrědło:',
	'duplicator-dest' => 'Cel:',
	'duplicator-dotalk' => 'Diskusijny bok duplicěrowaś (jolic móžno)',
	'duplicator-submit' => 'Duplicěrowaś',
	'duplicator-summary' => 'Z [[$1]] kopěrowany, wersija [[$2]]',
	'duplicator-success' => '[[$1]] jo se kopěrował do [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|wersija jo se kopěrowała|wersiji stej kopěrowałej|wersije su kopěrowali|wersijow jo kopěrowało}}.',
	'duplicator-success-talknotcopied' => 'Diskusijny bok njejo se dał kopěrowaś.',
	'duplicator-failed' => 'Bok njejo se dał duplicěrowaś.
Njeznata zmólka jo nastała.',
	'duplicator-source-invalid' => 'Pšosym pódaj płaśiwy žrědłowy titel.',
	'duplicator-source-notexist' => '[[$1]] njeeksistěrujo. Pšosym pódaj titel boka, kótaryž eksistěrujo.',
	'duplicator-dest-invalid' => 'Pšosym pódaj płaśiwy celowy titel.',
	'duplicator-dest-exists' => '[[$1]] južo eksistěrujo. Pšosym pódaj celowy titel, kótaryž hyšći njeeksistěrujo.',
	'right-duplicate' => 'Dwójne boki',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Omnipaedista
 */
$messages['el'] = array(
	'duplicator' => 'Παραγωγή διπλότυπου σελίδας',
	'duplicator-toolbox' => 'Δημιουργία διπλοτύπου αυτής της σελίδας',
	'duplicator-options' => 'Επιλογές',
	'duplicator-source' => 'Πηγή:',
	'duplicator-dest' => 'Προορισμός:',
	'duplicator-submit' => 'Διπλότυπο',
	'duplicator-summary' => 'Αντιγράφηκε από το [[$1]]', # Fuzzy
	'duplicator-dest-invalid' => 'Παρακαλώ παρέχετε έναν έγκυρο τίτλο προορισμού.',
	'right-duplicate' => 'Διπλότυπες σελίδες',
);

/** Esperanto (Esperanto)
 * @author Tlustulimu
 * @author Yekrats
 */
$messages['eo'] = array(
	'duplicator' => 'Duplikatu paĝon',
	'duplicator-desc' => 'Krei sendependajn [[Special:Duplicate|kopiojn de paĝoj]] kun plenaj redakto-historioj',
	'duplicator-toolbox' => 'Duplikatu ĉi paĝon',
	'duplicator-header' => 'Ĉi tiu paĝo permesas la tutan dupklikatadon de paĝo, kreante sendependajn kopiojn de ĉiuj historioj. 
Estus utila por disigo de artikoloj, ktp.',
	'duplicator-options' => 'Preferoj',
	'duplicator-source' => 'Fonto:',
	'duplicator-dest' => 'Destino:',
	'duplicator-dotalk' => 'Duobligi diskutan paĝon (se estas aplikebla)',
	'duplicator-submit' => 'Duobligi',
	'duplicator-summary' => 'Kopiita de [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] estas kopiita al [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revizio|revizioj}} estas {{PLURAL:$1|kopiita|kopiitaj}}.',
	'duplicator-success-talknotcopied' => 'La diskuta paĝo ne povis esti kopiita.',
	'duplicator-failed' => 'La paĝo ne povis esti duobligita. Nekonata eraro okazis.',
	'duplicator-source-invalid' => 'Bonvolu provizi validan fontan titolon.',
	'duplicator-source-notexist' => '[[$1]] ne ekzistas. Bonvolu provizi la titolon de paĝo kiu ekzistas.',
	'duplicator-dest-invalid' => 'Bonvolu provizi validan destinan titolon.',
	'duplicator-dest-exists' => '[[$1]] jam ekzistas. Bonvolu provizi destinan titolon kiu ne ekzistas.',
	'right-duplicate' => 'Duplikataj paĝoj',
);

/** Spanish (español)
 * @author Benfutbol10
 * @author Crazymadlover
 * @author Fitoschido
 * @author Imre
 * @author Sanbec
 */
$messages['es'] = array(
	'duplicator' => 'Duplicar una página',
	'duplicator-desc' => 'Crear [[Special:Duplicate|copias independientes de página]] con historiales completos de ediciones',
	'duplicator-toolbox' => 'Duplicar esta página',
	'duplicator-header' => 'Esta página permite el duplicado completo de una página, creando copias independientes de todos los historiales. Esto es útil para bifurcación de páginas, etc.',
	'duplicator-options' => 'Opciones',
	'duplicator-source' => 'Origen:',
	'duplicator-dest' => 'Destino:',
	'duplicator-dotalk' => 'Duplicar página de discusión (si es aplicable)',
	'duplicator-dosubpages' => 'Subpáginas duplicadas (si las hay)',
	'duplicator-dohistory' => 'Duplicar historial de página completo',
	'duplicator-submit' => 'Duplicado',
	'duplicator-summary' => 'Copiado de [[$1]], revisión [[$2]]',
	'duplicator-success' => '[[$1]] fue copiado a [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revisión fue|revisiones fueron}} copiadas.',
	'duplicator-success-talknotcopied' => 'La página de discusión no pudo ser copiada.',
	'duplicator-failed' => 'La página no pudo ser duplicad.
Ocurrió un error desconocido.',
	'duplicator-failed-toolong' => '[[$1]] no fue duplicado. El título de destino es demasiado largo.',
	'duplicator-failed-dest-exists' => '[[$1]] no fue duplicado. El destino [[$2]] ya existe.',
	'duplicator-source-invalid' => 'Proporciona un título de origen válido.',
	'duplicator-source-notexist' => '[[$1]] no existe. Proporciona el título de una página que exista.',
	'duplicator-dest-invalid' => 'Proporciona un título de destino válido.',
	'duplicator-dest-exists' => '[[$1]] ya existe. Proporciona un título de destino que no exista.',
	'right-duplicate' => 'Duplicar páginas',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'duplicator' => 'Dubleeri lehekülg',
	'duplicator-toolbox' => 'Dubleeri see lehekülg',
	'right-duplicate' => 'Dubleerida lehekülgi',
);

/** Basque (euskara)
 * @author An13sa
 * @author Kobazulo
 */
$messages['eu'] = array(
	'duplicator' => 'Orrialde bat bikoiztu',
	'duplicator-toolbox' => 'Orrialde hau bikoiztu',
	'duplicator-options' => 'Aukerak',
	'duplicator-source' => 'Jatorria:',
	'duplicator-dest' => 'Helburua:',
	'duplicator-dotalk' => 'Eztabaida orrialdea bikoiztu (egokia bada)',
	'duplicator-submit' => 'Bikoiztu',
	'duplicator-summary' => '[[$1]] orrialdetik kopiatua', # Fuzzy
	'duplicator-success' => '[[$1]] [[$2]] orrialdean kopiatu da.',
	'duplicator-success-revisions' => '{{PLURAL:$1|Berrikuspen bat kopiatu da|$1 berrikuspen kopiatu dira}}.',
	'duplicator-success-talknotcopied' => 'Eztabaida orrialdea ezin izan da kopiatu.',
	'duplicator-failed' => 'Ezin izan da orrialdea bikoiztu.
Errore ezezagun bat jazo da.',
	'duplicator-source-invalid' => 'Mesedez, iturburuaren baliozko izenburu bat eman.',
	'duplicator-source-notexist' => '[[$1]] ez da existitzen. Mesedez, existitzen den iturburu baten izenburua eman.',
	'duplicator-dest-invalid' => 'Mesedez, helburuaren baliozko izenburu bat eman.',
	'duplicator-dest-exists' => '[[$1]] jada existitzen da. Mesedez, existitzen ez den helburu bat eman.',
);

/** Extremaduran (estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'duplicator-options' => 'Ocionis',
);

/** Persian (فارسی)
 * @author Alireza
 * @author Armin1392
 */
$messages['fa'] = array(
	'duplicator' => 'تکثیر یک صفحه',
	'duplicator-desc' => 'ایجاد [[Special:Duplicate|copies of pages]] مستقل با سابقهٔ ویرایش کامل',
	'duplicator-toolbox' => 'تکثیر این صفحه',
	'duplicator-header' => 'این صفحه به تکثیر کامل یک صفحه، ایجاد نسخه‌های مستقل از همهٔ سوابق، اجازه می‌دهد.
این برای چند شاخه شدن و غیره مفید است.',
	'duplicator-options' => 'تنظیمات',
	'duplicator-source' => 'منبع:',
	'duplicator-dest' => 'مقصد:',
	'duplicator-dotalk' => 'تکثیر صفحهٔ بحث (اگر عملی باشد)',
	'duplicator-dosubpages' => 'تکثیر صفحات زیرین ( اگر هر)',
	'duplicator-dohistory' => 'تکثیر سوابق کامل صفحه',
	'duplicator-submit' => 'تکراری',
	'duplicator-summary' => 'کپی شده از [[$1]]، تجدید نظر [[$2]]',
	'duplicator-success' => "<big>'''[[$1]] کپی شده در [[$2]].'''</big>",
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revision was|revisions were}} کپی شده.',
	'duplicator-success-talknotcopied' => 'صفحهٔ گفتگو نتوانست کپی شود.',
	'duplicator-failed' => 'صفحه نتوانست تکثیر شود.
یک خطای ناشناخته رخ داده‌است.',
	'duplicator-failed-toolong' => '[[$1]] تکثیر نبود. عنوان مقصد خیلی طولانی است.',
	'duplicator-failed-dest-exists' => '[[$1]] تکثیر نبود. مقصد [[$2]] در حال حاضر وجود دارد.',
	'duplicator-source-invalid' => 'لطفاً یک عنوان منبع معتبر ارائه دهید.',
	'duplicator-source-notexist' => '[[$1]] وجود ندارد. لطفاً عنوان یک صفحهٔ موجود را ارائه دهید.',
	'duplicator-dest-invalid' => 'لطفاً یک عنوان مقصد معتبر ارائه دهید.',
	'duplicator-dest-exists' => '[[$1]] در حال حاضر وجود دارد. لطفاً عنوان مقصدی را ارائه دهید،که موجود نیست.',
	'right-duplicate' => 'صفحات تکراری',
);

/** Finnish (suomi)
 * @author Mobe
 * @author Niklas Laxström
 * @author Str4nd
 */
$messages['fi'] = array(
	'duplicator' => 'Monista sivu',
	'duplicator-desc' => 'Luo itsenäisiä [[Special:Duplicate|kopioita sivuista]] säilyttäen muutoshistorian.',
	'duplicator-toolbox' => 'Monista tämä sivu',
	'duplicator-header' => 'Tällä sivulla voit luoda artikkelista täydellisen kopion historioineen.',
	'duplicator-options' => 'Asetukset',
	'duplicator-source' => 'Lähdesivu:',
	'duplicator-dest' => 'Kohdesivu:',
	'duplicator-dotalk' => 'Monista myös keskustelusivu, jos mahdollista',
	'duplicator-submit' => 'Monista',
	'duplicator-summary' => 'Täydellinen kopio sivusta [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] monistettiin sivulle [[$2]].',
	'duplicator-success-revisions' => '{{PLURAL:$1|yksi muutos|$1 muutosta}} kopioitiin.',
	'duplicator-success-talknotcopied' => 'Keskustelusivua ei monistettu.',
	'duplicator-failed' => 'Sivun monistaminen ei onnistunut.',
	'duplicator-source-invalid' => 'Lähdesivun nimi ei kelpaa.',
	'duplicator-source-notexist' => 'Sivua [[$1]] ei ole olemassa.',
	'duplicator-dest-invalid' => 'Kohdesivun nimi ei kelpaa.',
	'duplicator-dest-exists' => '[[$1]] on jo olemassa. Anna nimi, joka ei ole vielä käytössä.',
	'right-duplicate' => 'Kahdentaa sivuja',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Grondin
 * @author IAlex
 */
$messages['fr'] = array(
	'duplicator' => 'Dupliquer une page',
	'duplicator-desc' => 'Créer des [[Special:Duplicate|copies distinctes de pages]] avec l’historique complet des modifications.',
	'duplicator-toolbox' => 'Dupliquer cette page',
	'duplicator-header' => 'Cette page permet la duplication complète d’une page, en créant deux versions indépendantes de l’historique complet. Il sert par exemple à séparer une page en deux.',
	'duplicator-options' => 'Options',
	'duplicator-source' => 'Source :',
	'duplicator-dest' => 'Destination :',
	'duplicator-dotalk' => 'Dupliquer la page de discussion (si elle existe)',
	'duplicator-dosubpages' => 'Dupliquer les sous-pages (s’il y en a)',
	'duplicator-dohistory' => 'Dupliquer l’historique de toute la page',
	'duplicator-submit' => 'Dupliquer',
	'duplicator-summary' => 'Copié depuis [[$1]], révision [[$2]]',
	'duplicator-success' => '[[$1]] a été copié vers [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|révision a été copiée|révisions ont été copiées}}.',
	'duplicator-success-talknotcopied' => 'La page de discussion n’a pas pu être copiée.',
	'duplicator-failed' => 'La page n’a pas pu être dupliquée. Une erreur inconnue s’est produite.',
	'duplicator-failed-toolong' => '[[$1]] n’a pas été dupliqué. Le titre de destination est trop long.',
	'duplicator-failed-dest-exists' => '[[$1]] n’a pas été dupliqué. La destination [[$2]] existe déjà.',
	'duplicator-source-invalid' => 'Veuillez donner un nom valide pour la page.',
	'duplicator-source-notexist' => '[[$1]] n’existe pas. Veuillez donner le nom d’une page existante.',
	'duplicator-dest-invalid' => 'Veuillez donner un nom valide pour la destination.',
	'duplicator-dest-exists' => '[[$1]] existe déjà. Veuillez donner le nom d’une page qui n’existe pas encore.',
	'right-duplicate' => 'dupliquer des pages',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'duplicator' => 'Duplicar una pâge',
	'duplicator-toolbox' => 'Duplicar ceta pâge',
	'duplicator-options' => 'Chouèx',
	'duplicator-source' => 'Sôrsa :',
	'duplicator-dest' => 'Dèstinacion :',
	'duplicator-dotalk' => 'Duplicar la pâge de discussion (s’ègziste)',
	'duplicator-submit' => 'Duplicar',
	'duplicator-summary' => 'Copiyê dês [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] at étâ copiyê vers [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|vèrsion at étâ copiyê|vèrsions ont étâ copiyês}}.',
	'right-duplicate' => 'Duplicar des pâges',
);

/** Western Frisian (Frysk)
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'duplicator-source' => 'Boarne:',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'duplicator-options' => 'Roghanna',
	'duplicator-source' => 'Foinse:',
);

/** Galician (galego)
 * @author Alma
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'duplicator' => 'Duplicar unha páxina',
	'duplicator-desc' => 'Crear [[Special:Duplicate|copias independentes das páxinas]] cos historiais de edición completos',
	'duplicator-toolbox' => 'Duplicar esta páxina',
	'duplicator-header' => 'Esta páxina permite a duplicación completa dunha páxina e crea copias independentes de todos os historiais.
Resulta útil cando se subdivide unha páxina, por exemplo.',
	'duplicator-options' => 'Opcións',
	'duplicator-source' => 'Orixe:',
	'duplicator-dest' => 'Destino:',
	'duplicator-dotalk' => 'Duplicar a páxina de conversa (se procede)',
	'duplicator-dosubpages' => 'Duplicar as subpáxinas (se hai algunha)',
	'duplicator-dohistory' => 'Duplicar o historial da páxina ao completo',
	'duplicator-submit' => 'Duplicar',
	'duplicator-summary' => 'Copiado desde "[[$1]]", revisión [[$2]]',
	'duplicator-success' => '"[[$1]]" copiouse en "[[$2]]".',
	'duplicator-success-revisions' => '{{PLURAL:$1|Copiouse|Copiáronse}} $1 {{PLURAL:$1|revisión|revisións}}.',
	'duplicator-success-talknotcopied' => 'Non se puido copiar a páxina de conversa.',
	'duplicator-failed' => 'Non se puido copiar a páxina.
Produciuse un erro descoñecido.',
	'duplicator-failed-toolong' => '"[[$1]]" non se duplicou. O título de destino é longo de máis.',
	'duplicator-failed-dest-exists' => '"[[$1]]" non se duplicou. O destino "[[$2]]" xa existe.',
	'duplicator-source-invalid' => 'Achegue un título de orixe válido.',
	'duplicator-source-notexist' => '"[[$1]]" non existe. Achegue o título dunha páxina que exista.',
	'duplicator-dest-invalid' => 'Achegue un título de destino válido.',
	'duplicator-dest-exists' => '"[[$1]]" xa existe. Achegue un título de destino que non exista.',
	'right-duplicate' => 'Duplicar páxinas',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'duplicator' => 'Παραγωγὴ διπλοτύπου δέλτου',
	'duplicator-options' => 'Ἐπιλογαί',
	'duplicator-source' => 'Πηγή:',
	'duplicator-dest' => 'Προορισμός:',
	'duplicator-submit' => 'Διπλότυπον',
	'right-duplicate' => 'Διπλότυποι δέλτοι',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'duplicator' => 'E Syte dupliziere',
	'duplicator-desc' => 'Leit uuabhängigi [[Special:Duplicate|Kopie vu Syten]] aa mit ihre Versionsgschicht',
	'duplicator-toolbox' => 'Die Syte dupliziere',
	'duplicator-header' => 'Mit däre Spezialsyte chenne Syte komplett dupliziert wäre. Dodebyy wird di gsamt Versionsgschicht ibernuu. Des cha z. B. nitzlig syy go ne Syte in Untersyten ufzteile.',
	'duplicator-options' => 'Optione',
	'duplicator-source' => 'Quälle:',
	'duplicator-dest' => 'Ziil:',
	'duplicator-dotalk' => 'Diskussionssyte mitkopiere (wänn s goht)',
	'duplicator-submit' => 'Syte dupliziere',
	'duplicator-summary' => 'Vu [[$1]] kopiert', # Fuzzy
	'duplicator-success' => '[[$1]] isch no [[$2]] kopiert wore.',
	'duplicator-success-revisions' => '{{PLURAL:$1|1 Version isch|$1 Versione sin}} kopiert wore.',
	'duplicator-success-talknotcopied' => 'D Diskussionssyte het nit chenne dupliziert wäre.',
	'duplicator-failed' => 'D Syte het nit chenne dupliziert wäre, wel e nit bekannte Fähler ufträtten isch.',
	'duplicator-source-invalid' => 'Bitte gib e giltigi Quäll-Syten aa.',
	'duplicator-source-notexist' => 'D Syte [[$1]] git s nit. Bitte gib e Syten aa, wu s git.',
	'duplicator-dest-invalid' => 'Bitte gib e giltigi Ziil-Syten aa.',
	'duplicator-dest-exists' => 'D Syte [[$1]] git s scho. Bitte gib e Ziilsyten aa, wu nonig git.',
	'right-duplicate' => 'Syte dupliziere',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'duplicator-options' => 'Reihyn',
	'duplicator-source' => 'Bun:',
);

/** Hakka (客家語/Hak-kâ-ngî)
 * @author Hakka
 */
$messages['hak'] = array(
	'duplicator-source' => 'Lòi-ngièn:',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'duplicator' => 'שכפול דף',
	'duplicator-desc' => 'יצירת [[Special:Duplicate|עותקים]] בלתי תלויים של הדף שכוללים את היסטוריית הגרסאות המלאה',
	'duplicator-toolbox' => 'שכפול דף זה',
	'duplicator-header' => 'דף זה מאפשר לכם לשכפל דף באופן מלא, תוך יצירת עותקים בלתי תלויים של כל הגרסאות הקודמות.
שימושי לפיצול דפים וכדומה.',
	'duplicator-options' => 'אפשרויות',
	'duplicator-source' => 'מקור:',
	'duplicator-dest' => 'יעד:',
	'duplicator-dotalk' => 'שכפול של דף השיחה (אם קיים)',
	'duplicator-submit' => 'שכפול',
	'duplicator-summary' => 'הועתק מ[[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] הועתק ל[[$2]].',
	'duplicator-success-revisions' => '{{PLURAL:$1|הועתקה גרסה אחת|הועתקו $1 גרסאות}}.',
	'duplicator-success-talknotcopied' => 'לא ניתן היה להעתיק את דף השיחה.',
	'duplicator-failed' => 'לא ניתן היה לשכפל את הדף.
אירעה שגיאה בלתי ידועה.',
	'duplicator-source-invalid' => 'אנא ספקו כותרת מקור תקינה.',
	'duplicator-source-notexist' => '[[$1]] אינו קיים. אנא ספקו כותרת של דף קיים.',
	'duplicator-dest-invalid' => 'אנא ספקו כותרת יעד תקינה.',
	'duplicator-dest-exists' => '[[$1]] כבר קיים. אנא ספקו כותרת יעד תקינה שאינה קיימת.',
	'right-duplicate' => 'שכפול דפים',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'duplicator' => 'पन्ने की कापी बनायें',
	'duplicator-desc' => 'पूरे अवतरण इतिहास के साथ अलग अलग कापीयाँ बनायें', # Fuzzy
	'duplicator-toolbox' => 'इस पन्ने को कापी करें',
	'duplicator-options' => 'विकल्प',
	'duplicator-source' => 'स्रोत:',
	'duplicator-dest' => 'लक्ष्य:',
	'duplicator-dotalk' => 'वार्ता पॄष्ठ की कापी करें (अगर जरूरी हैं तो)',
	'duplicator-submit' => 'कापी',
	'duplicator-summary' => '[[$1]] से कापी किया', # Fuzzy
	'duplicator-success' => '[[$1]] की [[$2]] यह कापी बना दी गई हैं।',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|अवतरणकी|अवतरणोंकी}} कापी बनाई।',
	'duplicator-success-talknotcopied' => 'वार्ता पृष्ठ की कापी नहीं बना सकें।',
	'duplicator-failed' => 'इस पन्नेकी कापी नहीं कर पाये हैं।
अज्ञात गलती पाई गई हैं।',
	'duplicator-source-invalid' => 'कृपया स्रोत के लिये एक वैध शीर्षक दें।',
	'duplicator-source-notexist' => '[[$1]] अस्तित्वमें नहीं हैं। कृपया अस्तित्वमें होनेवाले पन्नेका शीर्षक दें।',
	'duplicator-dest-invalid' => 'कृपया वैध लक्ष्य शीर्षक दें।',
	'duplicator-dest-exists' => '[[$1]] पहलेसे अस्तित्वमें हैं। कृपया अस्तित्वमें ना होनेवाला शीर्षक दें।',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'duplicator' => 'Nastawk duplicěrować',
	'duplicator-desc' => 'Njewotwisne [[Special:Duplicate|kopije stronow]] z dospołnymi wersijowymi stawiznami wutworić',
	'duplicator-toolbox' => 'Tutón nastawk duplicěrować',
	'duplicator-header' => 'Z tutej specialnej stronu móžeš strony dospołnje duplicěrować. Při tym přewozmu so cyle stawizny strony. To móže z wužitkom być, hdyž ma so na pr. strona do wjacorych nastawkow rozdźělić.',
	'duplicator-options' => 'Opcije',
	'duplicator-source' => 'Žórło:',
	'duplicator-dest' => 'Cil:',
	'duplicator-dotalk' => 'Diskusijnu stronu sobu kopěrować (jeli móžno)',
	'duplicator-dosubpages' => 'Podstrony duplicěrować (jeli tajke su)',
	'duplicator-dohistory' => 'Dospołnu historiju strony duplicěrować',
	'duplicator-submit' => 'Duplicěrować',
	'duplicator-summary' => 'Z [[$1]], wersije [[$2]] kopěrowany.',
	'duplicator-success' => '[[$1]] bu do [[$2]] kopěrowany.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|wersija bu kopěrowana|wersijow bu kopěrowane|wersiji buštej kopěrowanej|wersije buchu kopěrowane}}.',
	'duplicator-success-talknotcopied' => 'Diskusijna strona njeda so kopěrować.',
	'duplicator-failed' => 'Strona njeda so duplicěrować. Njeznaty zmylk je wustupił.',
	'duplicator-failed-toolong' => '[[$1]] njeje so duplicěrował. Cilowy titul je předołhi.',
	'duplicator-failed-dest-exists' => '[[$1]] njeje so duplicěrował. Cil [[$2]] hižo eksistuje.',
	'duplicator-source-invalid' => 'Prošu podaj płaćiwu žórłowu stronu.',
	'duplicator-source-notexist' => 'Strona [[$1]] njeeksistuje. Prošu zapodaj eksistowacu stronu.',
	'duplicator-dest-invalid' => 'Prošu podaj płaćiwu cilowu stronu.',
	'duplicator-dest-exists' => 'Strona [[$1]] hižo eksistuje. Prošu zapodaj cilowy titl kotryž hišće njeeksistuje.',
	'right-duplicate' => 'Dwójne strony',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'duplicator' => 'Oldal másolása',
	'duplicator-desc' => '[[Special:Duplicate|Másolatok]] készítése a lapokról teljes laptörténettel',
	'duplicator-toolbox' => 'Oldal másolása',
	'duplicator-header' => 'Ez az oldal lehetővé teszi egy teljes oldal lemásolását, a laptörténettel együttvéve. A funkció hasznos lehet pl. oldalak két ágra bontásánál.',
	'duplicator-options' => 'Beállítások',
	'duplicator-source' => 'Forrás:',
	'duplicator-dest' => 'Cél:',
	'duplicator-dotalk' => 'Vitalap másolása (ha lehetséges)',
	'duplicator-submit' => 'Másolás',
	'duplicator-summary' => '[[$1]] másolata', # Fuzzy
	'duplicator-success' => '[[$1]] átmásolva [[$2]] névre.',
	'duplicator-success-revisions' => '$1 változat lett átmásolva.',
	'duplicator-success-talknotcopied' => 'A vitalap másolása nem sikerült.',
	'duplicator-failed' => 'Az oldalt nem sikerült lemásolni. Ismeretlen hiba történt.',
	'duplicator-source-invalid' => 'Adj meg egy érvényes forráscímet.',
	'duplicator-source-notexist' => '[[$1]] nem létezik. Add meg egy olyan lapnak a címét, amely létezik.',
	'duplicator-dest-invalid' => 'Adj meg egy érvényes címet.',
	'duplicator-dest-exists' => '[[$1]] már létezik. Add meg egy olyan oldal címet, amely még nem létezik.',
	'right-duplicate' => 'lapok megkettőzése',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'duplicator' => 'Duplicar un pagina',
	'duplicator-desc' => 'Crear [[Special:Duplicate|copias independente de paginas]] con historias complete de modificationes',
	'duplicator-toolbox' => 'Duplicar iste pagina',
	'duplicator-header' => 'Iste pagina permitte le duplication complete de un pagina, creante copias independente de tote le historias.
Isto es utile pro le bifurcation de paginas, etc.',
	'duplicator-options' => 'Optiones',
	'duplicator-source' => 'Origine:',
	'duplicator-dest' => 'Destination:',
	'duplicator-dotalk' => 'Duplicar etiam le pagina de discussion (si existe)',
	'duplicator-dosubpages' => 'Duplicar subpaginas (si existe)',
	'duplicator-dohistory' => 'Duplicar le historia complete del pagina',
	'duplicator-submit' => 'Duplicar',
	'duplicator-summary' => 'Copiate ab [[$1]], version [[$2]]',
	'duplicator-success' => '[[$1]] ha essite copiate verso [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|version|versiones}} ha essite copiate.',
	'duplicator-success-talknotcopied' => 'Le pagina de discussion non poteva esser copiate.',
	'duplicator-failed' => 'Le pagina non poteva esser duplicate.
Un error incognite occurreva.',
	'duplicator-failed-toolong' => '[[$1]] non ha essite duplicate. Le titulo de destination es troppo longe.',
	'duplicator-failed-dest-exists' => '[[$1]] non ha essite duplicate. Le titulo de destination [[$2]] jam existe.',
	'duplicator-source-invalid' => 'Per favor entra un titulo de origine valide.',
	'duplicator-source-notexist' => '[[$1]] non existe. Per favor entra le titulo de un pagina existente.',
	'duplicator-dest-invalid' => 'Per favor entra un titulo de destination valide.',
	'duplicator-dest-exists' => '[[$1]] existe ja. Per favor entra un titulo de destination non ancora existente.',
	'right-duplicate' => 'Duplicar paginas',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Irwangatot
 * @author Ivan Lanin
 * @author Rex
 */
$messages['id'] = array(
	'duplicator' => 'Salin suatu halaman',
	'duplicator-desc' => 'Buat [[Special:Duplicate|salinan halaman]] yang berdiri sendiri dengan sejarah suntingan yang lengkap',
	'duplicator-toolbox' => 'Salin halaman ini',
	'duplicator-header' => 'Halaman ini menyediakan fasilitas untuk membuat duplikat lengkap suatu artikel, membuat salinan independen dari semua sejarah suntingan. Hal ini berguna untuk mencabangkan artikel, dll.',
	'duplicator-options' => 'Pilihan',
	'duplicator-source' => 'Sumber:',
	'duplicator-dest' => 'Tujuan:',
	'duplicator-dotalk' => 'Salin halaman pembicaraan (jika tersedia)',
	'duplicator-submit' => 'Salin',
	'duplicator-summary' => 'Disalin dari [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] telah disalin ke [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revisi|revisi}} telah disalin.',
	'duplicator-success-talknotcopied' => 'Halaman pembicaraan tidak dapat disalin.',
	'duplicator-failed' => 'Halaman tidak dapat disalin. 
Telah terjadi suatu kesalahan yang tak dikenal.',
	'duplicator-source-invalid' => 'Harap masukkan judul sumber yang sah.',
	'duplicator-source-notexist' => '[[$1]] tidak ditemukan. Harap berikan judul sumber yang halamannya sudah ada.',
	'duplicator-dest-invalid' => 'Harap masukkan judul tujuan yang sah.',
	'duplicator-dest-exists' => '[[$1]] telah ada. Harap berikan judul tujuan yang halamannya belum ada.',
	'right-duplicate' => 'Salinan halaman',
);

/** Italian (italiano)
 * @author Beta16
 * @author Broken Arrow
 * @author Darth Kule
 * @author Gianfranco
 */
$messages['it'] = array(
	'duplicator' => 'Duplica una pagina',
	'duplicator-desc' => 'Crea [[Special:Duplicate|copie indipendenti di pagine]] con le cronologie complete delle modifiche',
	'duplicator-toolbox' => 'Duplica questa pagina',
	'duplicator-header' => "Questa pagina speciale consente la duplicazione completa di una pagina, dando origine a due copie distinte della relativa cronologia. Tale operazione può essere utile per scindere due pagine (''forking''), ecc.",
	'duplicator-options' => 'Opzioni',
	'duplicator-source' => 'Pagina di partenza:',
	'duplicator-dest' => 'Pagina di arrivo:',
	'duplicator-dotalk' => 'Duplica anche la pagina di discussione, se esiste',
	'duplicator-dosubpages' => 'Duplica le sottopagine (se ce ne sono)',
	'duplicator-dohistory' => 'Duplica tutta la cronologia della pagina',
	'duplicator-submit' => 'Duplica',
	'duplicator-summary' => 'Copiata da [[$1]], versione [[$2]]',
	'duplicator-success' => 'La pagina [[$1]] è stata copiata in [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revisione copiata|revisioni copiate}}.',
	'duplicator-success-talknotcopied' => 'Impossibile copiare la pagina di discussione.',
	'duplicator-failed' => 'Impossibile duplicare la pagina. Errore sconosciuto.',
	'duplicator-failed-toolong' => 'Non è stato possibile duplicare [[$1]]. Il titolo di destinazione è troppo lungo.',
	'duplicator-failed-dest-exists' => 'Non è stato possibile duplicare [[$1]]. La destinazione [[$2]] esiste già.',
	'duplicator-source-invalid' => 'Indicare un titolo di partenza valido.',
	'duplicator-source-notexist' => 'La pagina [[$1]] non esiste. Indicare il titolo di una pagina esistente.',
	'duplicator-dest-invalid' => 'Indicare un titolo di arrivo valido.',
	'duplicator-dest-exists' => 'La pagina [[$1]] esiste già. Indicare un titolo di arrivo non ancora esistente.',
	'right-duplicate' => 'Duplica pagine',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fievarsty
 * @author Fryed-peach
 * @author JtFuruhata
 * @author Shirayuki
 */
$messages['ja'] = array(
	'duplicator' => 'ページの複製',
	'duplicator-desc' => '全編集履歴を持つ[[Special:Duplicate|ページの複製]]を作成する',
	'duplicator-toolbox' => 'このページを複製',
	'duplicator-header' => 'ここでは、ページの完全な複製を作成できます。この複製はすべての履歴を含みます。
記事の分割などに役立ちます。',
	'duplicator-options' => '設定',
	'duplicator-source' => '複製元:',
	'duplicator-dest' => '複製先:',
	'duplicator-dotalk' => '可能なら{{int:talk}}ページも複製する',
	'duplicator-dosubpages' => '下位ページを複製 (存在する場合)',
	'duplicator-dohistory' => 'ページの履歴全体を複製',
	'duplicator-submit' => '複製',
	'duplicator-summary' => '[[$1]] の版 [[$2]] を複製',
	'duplicator-success' => '[[$1]] を [[$2]] へ複製しました。',
	'duplicator-success-revisions' => '$1 個の{{PLURAL:$1|版}}を複製しました。',
	'duplicator-success-talknotcopied' => '{{int:talk}}ページは複製できませんでした。',
	'duplicator-failed' => '不明なエラーです。このページの複製に失敗しました。',
	'duplicator-failed-toolong' => '[[$1]] は複製されませんでした。複製先のページ名が長すぎます。',
	'duplicator-failed-dest-exists' => '[[$1]] は複製されませんでした。複製先 [[$2]] が既に存在します。',
	'duplicator-source-invalid' => '複製元に有効なタイトルを指定してください。',
	'duplicator-source-notexist' => '[[$1]] は存在しません。複製元には存在するページを指定してください。',
	'duplicator-dest-invalid' => '複製先に有効なタイトルを指定してください。',
	'duplicator-dest-exists' => '[[$1]] は既に存在します。複製先には存在しないページを指定してください。',
	'right-duplicate' => 'ページを複製',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'duplicator-options' => 'Opsi',
	'duplicator-source' => 'Sumber:',
	'duplicator-dest' => 'Tujuan:',
	'duplicator-submit' => 'Duplikasi',
	'duplicator-summary' => 'Ditulad saka [[$1]]', # Fuzzy
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'duplicator-options' => 'პარამეტრები',
	'duplicator-source' => 'წყარო:',
	'duplicator-dest' => 'დანიშნულება:',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'duplicator' => 'ច្បាប់ចម្លង​ទំព័រ​មួយ',
	'duplicator-options' => 'ជម្រើសនានា',
	'duplicator-source' => 'ប្រភព៖',
	'duplicator-dest' => 'គោលដៅ៖',
	'duplicator-submit' => 'ច្បាប់ចម្លង',
	'duplicator-summary' => 'បានចម្លងពី [[$1]] កំណែ [[$2]]',
	'duplicator-success' => '[[$1]] បាន​ត្រូវ​ចម្លង​ទៅ [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|ការពិនិត្យឡើងវិញ​ត្រូវ​បាន|ការពិនិត្យឡើងវិញ​ត្រូវ​បាន}} ចម្លង​។',
	'duplicator-success-talknotcopied' => 'ទំព័រ​ពិភាក្សា​មិន​អាច​ត្រូវ​បាន​ចម្លង​ទេ​។',
	'duplicator-source-invalid' => 'សូមផ្ដល់មកនូវចំណងជើងប្រភពត្រឹមត្រូវ។',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'duplicator' => '문서 복제',
	'duplicator-desc' => '전체 편집 역사로 독립적인 [[Special:Duplicate|문서 복사본]]을 만듭니다',
	'duplicator-toolbox' => '이 문서 복제',
	'duplicator-header' => '이 문서는 모든 역사의 독립적인 복사본을 만들어 문서 전체를 복제할 수 있습니다.
문서 나누기 등에 유용합니다.',
	'duplicator-options' => '설정',
	'duplicator-source' => '출처:',
	'duplicator-dest' => '대상:',
	'duplicator-dotalk' => '(가능한 경우) 토론 문서 복제',
	'duplicator-dosubpages' => '(있으면) 하위 문서 복제',
	'duplicator-dohistory' => '전체 문서 역사 복제',
	'duplicator-submit' => '복제',
	'duplicator-summary' => '[[$1]] 문서의 [[$2]] 판에서 복사함',
	'duplicator-success' => '[[$1]] 문서를 [[$2]] 문서로 복사했습니다.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|판}}을 복사했습니다.',
	'duplicator-success-talknotcopied' => '토론 문서를 복사할 수 없습니다.',
	'duplicator-failed' => '문서를 복제할 수 없습니다.
알 수 없는 오류가 발생했습니다.',
	'duplicator-failed-toolong' => '[[$1]] 문서가 복제되지 않았습니다. 대상 제목이 너무 깁니다.',
	'duplicator-failed-dest-exists' => '[[$1]] 문서가 복제되지 않았습니다. 대상 [[$2]] 문서가 이미 존재합니다.',
	'duplicator-source-invalid' => '올바른 원본 제목을 제공하세요.',
	'duplicator-source-notexist' => '[[$1]] 문서가 존재하지 않습니다. 존재하는 문서 제목을 제공하세요.',
	'duplicator-dest-invalid' => '올바른 대상 제목을 제공하세요.',
	'duplicator-dest-exists' => '[[$1]] 문서가 이미 존재합니다. 존재하지 않는 대상 문서를 제공하세요.',
	'right-duplicate' => '문서 복제',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'duplicator' => 'En Sigg verdubbelle',
	'duplicator-desc' => 'Määt extra [[Special:Duplicate|Kopije fun Sigge]] met all ier ahle Versione.',
	'duplicator-toolbox' => 'Die Sigg hee verdubbelle',
	'duplicator-header' => 'Hee di Extra Sigg määd ed möjjelesch, en Sigg ze verdubbelle,
un dobei fun all ier Väsjohne bes jätz en eijen Kopie aanzelääje.
Dat es nötzlesch, wam_mer di zwei en ungerscheidlische Reeschtonge
wigger beärbeide, allsu opdeile, well.',
	'duplicator-options' => 'Enstellunge',
	'duplicator-source' => 'Tittel fun de Quell-Sigg:',
	'duplicator-dest' => 'De Ziel-Sigg iere Tittel:',
	'duplicator-dotalk' => 'Donn de Klaafsigg met koppeere, wann möjjelesch',
	'duplicator-submit' => 'Kopeere!',
	'duplicator-summary' => 'Kopeet fun „[[$1]]“', # Fuzzy
	'duplicator-success' => '„[[$1]]“ es op „[[$2]]“ kopeet wode.',
	'duplicator-success-revisions' => '{{PLURAL:$1|Eijn Version es|$1 Versione sin|Kein Versione sin}} kopeet wode.',
	'duplicator-success-talknotcopied' => 'De Klaafsigg kunnt nit kopeet wäde.',
	'duplicator-failed' => 'Hee di Sigg kunnte mer leider nit verdubbelle.
Ene unklohre Fähler es opjetrodde.',
	'duplicator-source-invalid' => 'Beß esu joot, un jif ene jode Tittel för de Quell fum Kopeere aan.',
	'duplicator-source-notexist' => 'En Sigg „[[$1]]“ ham_mer nit. Jiff ene Tittel aan fun en Sigg, di och doh es.',
	'duplicator-dest-invalid' => 'Beß esu joot, un jif ene jode Tittel för et Ziel fum Kopeere aan.',
	'duplicator-dest-exists' => 'De Sigg „[[$1]]“ es ald doh. Jiff ene Tittel aan fun en Sigg, di et noch nit jitt.',
	'right-duplicate' => 'Sigge verdubbelle',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'duplicator-options' => 'Vebijêrk',
	'duplicator-source' => 'Çavkanî:',
	'duplicator-summary' => 'Ji [[$1]] hate kopîkirin', # Fuzzy
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'duplicator' => 'En Doublon vun enger Säit maachen',
	'duplicator-desc' => 'Onofhängeg [[Special:Duplicate|Kopie vu Säite]] maachen, mat dem kompletten Historique vun den Ännerungen',
	'duplicator-toolbox' => 'Een Doublon vun dëser Säit maachen',
	'duplicator-header' => 'Dës Säit erlaabt et e komplett Duplikat vun enger Säit ze maachen, dobäi gëtt eng onofhängeg Kopie mat dem ganzen Historique ugeluecht. Dat ass nëtzlech wann eng Säit opdeelt gëtt, asw.',
	'duplicator-options' => 'Optiounen',
	'duplicator-source' => 'Quell:',
	'duplicator-dest' => 'Zil:',
	'duplicator-dotalk' => 'Een Doublon vun der Diskussiounssäit maachen (wann se existéiert)',
	'duplicator-dosubpages' => 'Ënnersäiten duplizéieren (wann et der gëtt)',
	'duplicator-submit' => 'Säit duplizéieren',
	'duplicator-summary' => 'Vun [[$1]] kopéiert, Versioun [[$2]]',
	'duplicator-success' => '[[$1]] gouf op [[$2]] kopéiert.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|Versioun gouf|Versioune goufe}} kopéiert.',
	'duplicator-success-talknotcopied' => "D'Diskussiounssäit konnt net kopéiert ginn.",
	'duplicator-failed' => 'Wéint engem onbekannte Feeler konnt keen Doublon vun der Säit gemaach ginn.',
	'duplicator-source-invalid' => 'Gitt w.e.g. e gëltege Quell-Titel un.',
	'duplicator-source-notexist' => '[[$1]] gëtt et net. Gitt w.e.g. den Titel vun enger Säit un déi et gëtt.',
	'duplicator-dest-invalid' => 'Gitt w.e.g. eng valabel Zilsäit unn.',
	'duplicator-dest-exists' => '[[$1]] gëtt et schonn. Gitt w.e.g. eng Zilsäit unn déi et nach net gëtt.',
	'right-duplicate' => 'Säite verduebelen',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'duplicator-options' => 'Parinktys',
	'duplicator-source' => 'Šaltinis:',
	'duplicator-success-talknotcopied' => 'Aptarimų puslapis negali būti nukopijuotas.',
	'duplicator-failed' => 'Puslapis negali būti dubliuojamas.
Įvyko nežinoma klaida.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'duplicator' => 'Дуплирање на страница',
	'duplicator-desc' => 'Создајте независни [[Special:Duplicate|копии на страници]] со полна историја на уредување',
	'duplicator-toolbox' => 'Дуплирај ја страницата',
	'duplicator-header' => 'Оваа страница овозможува целосно дуплирање на страница, создавање на независни копии на сите истории.
Ова е корисно за разделување на страница во две посебни и сл.',
	'duplicator-options' => 'Нагодувања',
	'duplicator-source' => 'Извор:',
	'duplicator-dest' => 'Одредница:',
	'duplicator-dotalk' => 'Дуплирај ја страницата за разговор (ако е можно)',
	'duplicator-dosubpages' => 'Дуплирај потстраници (ако ги има)',
	'duplicator-dohistory' => 'Дуплирај ја целата историја',
	'duplicator-submit' => 'Дуплирај',
	'duplicator-summary' => 'Копирано од [[$1]], ревизија [[$2]]',
	'duplicator-success' => 'Страницата [[$1]] е ископирана во [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|ревизија беше ископирана|ревизии беа ископирани}}.',
	'duplicator-success-talknotcopied' => 'Страницата за разговор не можеше да се ископира.',
	'duplicator-failed' => 'Страницата не можеше да се дуплира.
Се појави непозната грешка.',
	'duplicator-failed-toolong' => 'Не можев да ја дуплирам [[$1]]. Целниот наслов е предолг.',
	'duplicator-failed-dest-exists' => 'Не можев да ја дуплирам [[$1]]. Целта [[$2]] веќе постои.',
	'duplicator-source-invalid' => 'Наведете важечки изворен наслов.',
	'duplicator-source-notexist' => '[[$1]] не постои. Наведете наслов на страница која постои.',
	'duplicator-dest-invalid' => 'Наведете важечки целен наслов',
	'duplicator-dest-exists' => '[[$1]] веќе постои. Наведете целен наслов кој не постои.',
	'right-duplicate' => 'Дуплирање страници',
);

/** Malayalam (മലയാളം)
 * @author Junaidpv
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'duplicator' => 'താളിന്റെ പകർപ്പ് ഉണ്ടാക്കുക',
	'duplicator-desc' => 'നാൾവഴി പൂർണ്ണമായി ഉൾപ്പെടുത്തിയ, [[Special:Duplicate|താളിന്റെ സ്വതന്ത്ര പകർപ്പുകൾ]] സൃഷ്ടിക്കുന്നു',
	'duplicator-toolbox' => 'ഈ താളിന്റെ പകർപ്പ് ഉണ്ടാക്കുക',
	'duplicator-options' => 'ഐച്ഛികങ്ങൾ',
	'duplicator-source' => 'സ്രോതസ്സ്:',
	'duplicator-dest' => 'ലക്ഷ്യം:',
	'duplicator-dotalk' => 'രണ്ടാമതൊരു സം‌വാദം താൾ (ആവശ്യമുണ്ടെങ്കിൽ)‌',
	'duplicator-submit' => 'പകർപ്പെടുക്കുക',
	'duplicator-summary' => '[[$1]]ൽ നിന്നു പകർത്തിയത്', # Fuzzy
	'duplicator-success' => '[[$1]] എന്ന താൾ [[$2]]ലേക്കു പകർത്തി.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|പതിപ്പ്|പതിപ്പുകൾ}} പകർത്തി.',
	'duplicator-success-talknotcopied' => 'സം‌വാദത്താൾ പകർത്തുവാൻ കഴിഞ്ഞില്ല',
	'duplicator-failed' => 'താളിന്റെ പകർപ്പെടുക്കാൻ സാധിച്ചില്ല. അജ്ഞാതമായ കാരണം മൂലം എന്തോ പിഴവ് സംഭവിച്ചു.',
	'duplicator-source-invalid' => 'സാധുവായൊരു സ്രോതസ്സ് തലക്കെട്ട് കൊടുക്കുക.',
	'duplicator-source-notexist' => '[[$1]] നിലവിലില്ല. ദയവായി നിലവിലുള്ള ഒരു താളിന്റെ ശീർഷകം ചേർക്കുക.',
	'duplicator-dest-invalid' => 'ദയവായി സാധുവായ ഒരു ലക്ഷ്യ ശീർഷകം ചേർക്കുക.',
	'duplicator-dest-exists' => '[[$1]] നിലവിലുണ്ട്. ദയവായി നിലവിലില്ലാത്ത ഒരു ലക്ഷ്യതാളിന്റെ ശീർഷകം ചേർക്കുക.',
);

/** Mongolian (монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'duplicator-source' => 'Эх үүсвэр:',
);

/** Marathi (मराठी)
 * @author Kaustubh
 * @author Mahitgar
 */
$messages['mr'] = array(
	'duplicator' => 'पानाची प्रत बनवा',
	'duplicator-desc' => 'सर्व संपादन इतिहास असणार्‍या दोन स्वतंत्र प्रती बनवा', # Fuzzy
	'duplicator-toolbox' => 'या पानाची प्रत बनवा',
	'duplicator-header' => 'हे पान एखाद्या पानाची प्रत काढायला मदत करते, यामध्ये प्रत्येक इतिहासाची स्वतंत्र प्रत तयार होते. हे पानाचे फोर्किंग वगैरे करण्यासाठी उपयुक्त आहे.',
	'duplicator-options' => 'पर्याय',
	'duplicator-source' => 'स्रोत:',
	'duplicator-dest' => 'लक्ष्य:',
	'duplicator-dotalk' => 'चर्चा पानाची प्रत करा (जर गरज असेल तर)',
	'duplicator-submit' => 'हुबहू',
	'duplicator-summary' => '[[$1]]कडून नक्कल केली', # Fuzzy
	'duplicator-success' => '[[$1]] ची [[$2]] ही प्रत तयार केलेली आहे.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|आवृत्तीची|आवृत्त्यांची}} प्रत केली.',
	'duplicator-success-talknotcopied' => 'चर्चापान नकलवले जाऊ शकले नाही.',
	'duplicator-failed' => 'या पानाची प्रत काढता आलेली नाही. अनोळखी त्रुटी आलेली आहे.',
	'duplicator-source-invalid' => 'कृपया स्रोताचे योग्य शीर्षक द्या.',
	'duplicator-source-notexist' => '[[$1]] अस्तित्वात नाही. कृपया अस्तित्वात असणार्‍या पानाचे शीर्षक द्या.',
	'duplicator-dest-invalid' => 'कृपया योग्य नवीन शीर्षक द्या.',
	'duplicator-dest-exists' => '[[$1]] अगोदरच अस्तित्वात आहे. कृपया नवीन शीर्षक अस्तित्वात नसलेले द्या.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Tedbundyjr
 */
$messages['ms'] = array(
	'duplicator' => 'Salin laman',
	'duplicator-desc' => 'Cipta [[Special:Duplicate|salinan laman]] tersendiri bersama sejarah pengeditan penuh.',
	'duplicator-toolbox' => 'Salin laman ini',
	'duplicator-header' => 'Halaman ini menyediakan kemudahan untuk membuat salinan lengkap suatu artikel, membuat salinan tersendiri bersama semua sejarah suntingan. Hal ini berguna untuk mencabangkan artikel, dll.',
	'duplicator-options' => 'Pilihan',
	'duplicator-source' => 'Sumber:',
	'duplicator-dest' => 'Destinasi',
	'duplicator-dotalk' => 'Salin halaman pembicaraan (jika tersedia)',
	'duplicator-submit' => 'Salin',
	'duplicator-summary' => 'Disalin dari [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] disalin kepada [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|kemaskinian|kemaskinian}} telah disalin.',
	'duplicator-success-talknotcopied' => 'Laman perbincangan tidak dapat disalin.',
	'duplicator-failed' => 'Halaman tidak dapat disalin. 
Telah terjadi suatu kesalahan yang tidak dikenalpasti.',
	'duplicator-source-invalid' => 'Sila masukkan judul sumber yang sah.',
	'duplicator-source-notexist' => '[[$1]] tidak dijumpai. Sila berikan judul sumber yang lamannya sedia wujud.',
	'duplicator-dest-invalid' => 'Harap masukkan judul destinasi yang sah.',
	'duplicator-dest-exists' => '[[$1]] telah wujud. Harap berikan judul destinasi yang lamannya belum wujud.',
	'right-duplicate' => 'Salinan laman',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'duplicator-source' => 'Лисьмапрязо:',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'duplicator-source' => 'Īhuīcpa:',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'duplicator' => 'Kopier en side',
	'duplicator-desc' => 'Opprett uavhengige [[Special:Duplicate|kopier av sider]] med full redigeringshistorikk',
	'duplicator-toolbox' => 'Kopier denne siden',
	'duplicator-header' => 'Denne siden muliggjør fullstendig kopiering av en side, med uavhengige kopier av all historikk. Dette er nyttig for oppdeling av sider, etc.',
	'duplicator-options' => 'Alternativer',
	'duplicator-source' => 'Kilde:',
	'duplicator-dest' => 'Mål:',
	'duplicator-dotalk' => 'Kopier diskusjonsside (om mulig)',
	'duplicator-submit' => 'Kopier',
	'duplicator-summary' => 'Kopiert fra [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] ble kopiert til [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revisjon|revisjoner}} ble kopiert.',
	'duplicator-success-talknotcopied' => 'Diskusjonssiden kunne ikke kopieres.',
	'duplicator-failed' => 'Siden kunne ikke kopieres. En ukjent feil forekom.',
	'duplicator-source-invalid' => 'Vennligst angi en gyldig kildetittel.',
	'duplicator-source-notexist' => '[[$1]] finnes ikike. Angi tittelen til en eksisterende side.',
	'duplicator-dest-invalid' => 'Angi en gyldig måltittel.',
	'duplicator-dest-exists' => '[[$1]] finnes allerede. Angi en måltittel som ikke eksisterer.',
	'right-duplicate' => 'Kopier sidene',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'duplicator-options' => 'Opschonen',
	'duplicator-source' => 'Born:',
	'duplicator-summary' => 'Kopeert vun [[$1]]', # Fuzzy
);

/** Dutch (Nederlands)
 * @author Effeietsanders
 * @author Siebrand
 */
$messages['nl'] = array(
	'duplicator' => 'Kopieer een pagina',
	'duplicator-desc' => "Onafhankelijke [[Special:Duplicate|kopieën van pagina's]] maken met een volledige bewerkingsgeschiedenis",
	'duplicator-toolbox' => 'Kopieer deze pagina',
	'duplicator-header' => 'Deze pagina maakt het mogelijk een pagina volledig te kopiëren, waardoor er onafhankelijke
kopieën ontstaan met een volledige geschiedenis. Dit is handig voor forks, enzovoort.',
	'duplicator-options' => 'Opties',
	'duplicator-source' => 'Bron:',
	'duplicator-dest' => 'Doel:',
	'duplicator-dotalk' => 'Kopieer overlegpagina (als van toepassing)',
	'duplicator-dosubpages' => "Subpagina's dupliceren (indien aanwezig)",
	'duplicator-dohistory' => 'Volledige paginageschiedenis dupliceren',
	'duplicator-submit' => 'Kopiëren',
	'duplicator-summary' => 'Gekopieerd van [[$1]], versie [[$2]]',
	'duplicator-success' => '[[$1]] is gekopieerd naar [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|versie|versies}} gekopieerd.',
	'duplicator-success-talknotcopied' => 'De overlegpagina kon niet gekopieerd worden.',
	'duplicator-failed' => 'De pagina kon niet gekopieerd worden. Er is een onbekende fout opgetreden.',
	'duplicator-failed-toolong' => '[[$1]] is niet gedupliceerd. De titel van de bestemmingspagina is te lang.',
	'duplicator-failed-dest-exists' => '[[$1]] is niet gedupliceerd. De bestemming [[$2]] bestaat al.',
	'duplicator-source-invalid' => 'Geef een geldige bronpagina op.',
	'duplicator-source-notexist' => '[[$1]] bestaat niet.
Geef een pagina op die bestaat.',
	'duplicator-dest-invalid' => 'Geef een geldige doelpagina op.',
	'duplicator-dest-exists' => '[[$1]] bestaat al.
Geeft een doelpagina op die niet bestaat.',
	'right-duplicate' => "Pagina's kopiëren",
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Gunnernett
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'duplicator' => 'Kopier ei side',
	'duplicator-desc' => 'Opprett sjølvstendige [[Special:Duplicate|kopiar av sider]] med full endringshistorikk',
	'duplicator-toolbox' => 'Kopier denne sida',
	'duplicator-header' => 'Denne sida mogleggjer fullstendig kopiering av ei sida, med sjølvstendige kopiar av all historikk. 
Dette er nyttig for oppdeling av sider, etc.',
	'duplicator-options' => 'Val',
	'duplicator-source' => 'Kjelde:',
	'duplicator-dest' => 'Mål:',
	'duplicator-dotalk' => 'Kopier diskusjonssida (om mogleg)',
	'duplicator-submit' => 'Kopier',
	'duplicator-summary' => 'Kopiert frå [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] blei kopiert til [[$2]].',
	'duplicator-success-revisions' => '{{PLURAL:$1|Éin versjon blei kopiert|$1 versjonar blei kopierte}}.',
	'duplicator-success-talknotcopied' => 'Diskusjonssida kunne ikkje bli kopiert.',
	'duplicator-failed' => 'Sida kunne ikkje bli kopiert då ein ukjend feil oppstod.',
	'duplicator-source-invalid' => 'Oppgje ein gyldig kjeldetittel.',
	'duplicator-source-notexist' => '[[$1]] finst ikkje. Oppgje tittelen til ei eksisterande sida.',
	'duplicator-dest-invalid' => 'Oppgje ein gyldig måltittel.',
	'duplicator-dest-exists' => '[[$1]] finst allereie. Oppgje ein måltittel som ikkje finst.',
	'right-duplicate' => 'Ta kopi av sidene',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'duplicator' => 'Pedifatša letlakala',
	'duplicator-toolbox' => 'Pedifatša letlakala le',
	'duplicator-source' => 'Mothapo:',
	'duplicator-submit' => 'Pedifatša',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'duplicator' => 'Duplicar un article',
	'duplicator-desc' => 'Crear de [[Special:Duplicate|còpias distinctas d’articles]] amb l’istoric complet de las modificacions.',
	'duplicator-toolbox' => 'Duplicar aqueste article',
	'duplicator-header' => 'Aquesta pagina permet la duplicacion completa d’un article, en creant doas versions independentas de l’istoric complet. Servís per exemple a separar un article en dos.',
	'duplicator-options' => 'Opcions',
	'duplicator-source' => 'Font :',
	'duplicator-dest' => 'Destinacion:',
	'duplicator-dotalk' => 'Duplicar la pagina de discussion (se existís)',
	'duplicator-submit' => 'Duplicar',
	'duplicator-summary' => 'Copiat dempuèi [[$1]], revision [[$2]]',
	'duplicator-success' => '[[$1]] es estat copiat cap a [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revision es estada copiada|revisions son estadas copiadas}}.',
	'duplicator-success-talknotcopied' => 'La pagina de discussion es pas pogut èsser copiada.',
	'duplicator-failed' => 'La pagina es pas pogut èsser duplicada. Una error desconeguda s’es producha.',
	'duplicator-source-invalid' => 'Donatz un nom valid per l’article.',
	'duplicator-source-notexist' => '[[$1]] existís pas. Donatz lo nom d’un article existent.',
	'duplicator-dest-invalid' => 'Donatz un nom valid per la destinacion.',
	'duplicator-dest-exists' => '[[$1]] existís ja. Donatz lo nom d’un article qu’existís pas encara.',
	'right-duplicate' => 'duplicar de paginas',
);

/** Polish (polski)
 * @author Chrumps
 * @author Derbeth
 * @author Maikking
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'duplicator' => 'Duplikowanie strony',
	'duplicator-desc' => 'Tworzy niezależne [[Special:Duplicate|kopie stron]] z pełną historią edycji',
	'duplicator-toolbox' => 'Duplikuj tę stronę',
	'duplicator-header' => 'Ta strona pozwala na stworzenie kompletnego duplikatu artykułu, tworząc niezależne kopie aktualnej treści wraz z pełną historią zmian. Jest to przydatne przy rozwidlaniu (klonowaniu) artykułów itp.',
	'duplicator-options' => 'Opcje',
	'duplicator-source' => 'Źródło:',
	'duplicator-dest' => 'Cel:',
	'duplicator-dotalk' => 'Zduplikuj stronę dyskusji (jeśli istnieje)',
	'duplicator-submit' => 'Duplikuj',
	'duplicator-summary' => 'Skopiowano z [[$1]], wersja [[$2]]',
	'duplicator-success' => 'Artykuł [[$1]] został skopiowany do [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|edycja została skopiowana|edycje zostały skopiowane|edycji zostało skopiowanych}}.',
	'duplicator-success-talknotcopied' => 'Strona dyskusji nie mogła być skopiowana.',
	'duplicator-failed' => 'Strona nie może zostać zduplikowana. Wystąpił nieznany błąd.',
	'duplicator-source-invalid' => 'Podaj poprawny tytuł źródła.',
	'duplicator-source-notexist' => 'Artykuł [[$1]] nie istnieje. Podaj tytuł strony, która istnieje.',
	'duplicator-dest-invalid' => 'Podaj poprawny tytuł celu.',
	'duplicator-dest-exists' => 'Artykuł [[$1]] już istnieje. Wybierz tytuł celu, który nie jest używany przez istniejącą stronę.',
	'right-duplicate' => 'Duplikowanie stron',
);

/** Piedmontese (Piemontèis)
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 */
$messages['pms'] = array(
	'duplicator' => 'Dupliché na pàgina',
	'duplicator-desc' => 'Crea [[Special:Duplicate|còpie andipendente ëd na pàgina]] con stòria completa dle modìfiche',
	'duplicator-toolbox' => 'Dùplica sta pàgina-sì',
	'duplicator-header' => "Sta pàgina-sì a përmëtt la duplicassion completa ëd n'artìcol, ën fasend-ne ëdcò la còpia dla stòria. 
A ven motobin a taj për sdobié na pàgina, e via fòrt.",
	'duplicator-options' => 'Opsion',
	'duplicator-source' => 'Sorgiss:',
	'duplicator-dest' => 'Destinassion:',
	'duplicator-dotalk' => "Dupliché ëdcò la pàgina ëd discussion (s'a-i é)",
	'duplicator-submit' => 'Dùplica',
	'duplicator-summary' => 'Copià da [[$1]]', # Fuzzy
	'duplicator-success' => "La pàgina [[$1]] a l'é staita sdobià con la còpia neuva an [[$2]].",
	'duplicator-success-revisions' => "$1 revision {{PLURAL:$1|a l'é staita|a son ëstaite}} copià.",
	'duplicator-success-talknotcopied' => "La pàgina ëd discussion a l'é pa podusse sdobié.",
	'duplicator-failed' => "Sta pàgina a l'é pa podusse dupliché. A l'é riva-ie n'eror nen identificà.",
	'duplicator-source-invalid' => "Për piasì ch'a-i buta un tìtol bon ant la sorgiss",
	'duplicator-source-notexist' => "[[$1]] a-i é pa. Për piasì, ch'a buta ël tìtol ëd na pàgina ch'a-i sia.",
	'duplicator-dest-invalid' => "Për piasì, ch'a-i buta un tìtol bon ant la destinassion",
	'duplicator-dest-exists' => "[[$1]] a-i é già. Për piasì, ch'a buta un tìtol ch'a-i sia anco' nen.",
	'right-duplicate' => 'Sdobia pàgine',
);

/** Pontic (Ποντιακά)
 * @author Omnipaedista
 */
$messages['pnt'] = array(
	'duplicator-submit' => 'Διπλότυπον',
	'right-duplicate' => 'Διπλογραμμένας σελίδας',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'duplicator-options' => 'خوښنې',
	'duplicator-source' => 'سرچينه:',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Lijealso
 * @author Luckas
 * @author Malafaya
 * @author 555
 */
$messages['pt'] = array(
	'duplicator' => 'Duplicar uma página',
	'duplicator-desc' => 'Criar [[Special:Duplicate|cópias independentes de páginas]] com histórico completo de edições',
	'duplicator-toolbox' => 'Duplicar esta página',
	'duplicator-header' => 'Esta página permite a duplicação completa de uma página de conteúdo, criando cópias independentes de todo o seu histórico. Isto é útil para separar versões de páginas, etc.',
	'duplicator-options' => 'Opções',
	'duplicator-source' => 'Origem:',
	'duplicator-dest' => 'Destino:',
	'duplicator-dotalk' => 'Duplicar página de discussão (se aplicável)',
	'duplicator-submit' => 'Duplicar',
	'duplicator-summary' => 'Copiado de [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] foi copiada para [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revisão foi copiada|revisões foram copiadas}}.',
	'duplicator-success-talknotcopied' => 'Não foi possível copiar a página de discussão.',
	'duplicator-failed' => 'Não foi possível duplicar a página.
Ocorreu um erro desconhecido.',
	'duplicator-source-invalid' => 'Forneça um título válido para a origem, por favor.',
	'duplicator-source-notexist' => '[[$1]] não existe. Forneça o título de uma página que exista, por favor.',
	'duplicator-dest-invalid' => 'Forneça um título válido para o destino, por favor.',
	'duplicator-dest-exists' => '[[$1]] já existe. Forneça um título de destino que ainda não exista, por favor.',
	'right-duplicate' => 'Duplicar páginas',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'duplicator' => 'Duplicar uma página',
	'duplicator-desc' => 'Criar [[Special:Duplicate|cópias independentes de páginas]] com histórico completo de edições',
	'duplicator-toolbox' => 'Duplicar esta página',
	'duplicator-header' => 'Esta página permite a duplicação completa de uma página de conteúdo, criando cópias independentes de todo o seu histórico. Isto é útil para separar versões de páginas, etc.',
	'duplicator-options' => 'Opções',
	'duplicator-source' => 'Fonte:',
	'duplicator-dest' => 'Destino:',
	'duplicator-dotalk' => 'Duplicar página de discussão (se aplicável)',
	'duplicator-dosubpages' => 'Duplicar subpáginas (se existentes)',
	'duplicator-dohistory' => 'Duplicar todo o histórico da página',
	'duplicator-submit' => 'Duplicar',
	'duplicator-summary' => 'Copiado de [[$1]], revisão [[$2]]',
	'duplicator-success' => '[[$1]] foi copiada para [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revisão foi copiada|revisões foram copiadas}}.',
	'duplicator-success-talknotcopied' => 'A página de discussão não pôde ser copiada.',
	'duplicator-failed' => 'A página não pôde ser duplicada. Ocorreu um erro desconhecido.',
	'duplicator-failed-toolong' => '[[$1]] não foi duplicado. O título do destino é demasiadamente longo.',
	'duplicator-failed-dest-exists' => '[[$1]] não foi duplicado. O destino [[$2]] já existe.',
	'duplicator-source-invalid' => 'Por favor, forneça um título fonte válido.',
	'duplicator-source-notexist' => '[[$1]] não existe. Por favor, forneça o título de uma página que exista.',
	'duplicator-dest-invalid' => 'Por favor, forneça um título de destino válido.',
	'duplicator-dest-exists' => '[[$1]] já existe. Por favor, forneça um título de destino que ainda não exista.',
	'right-duplicate' => 'Duplicar páginas',
);

/** Romanian (română)
 * @author KlaudiuMihaila
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'duplicator' => 'Duplică o pagină',
	'duplicator-toolbox' => 'Duplică această pagină',
	'duplicator-options' => 'Opțiuni',
	'duplicator-source' => 'Sursă:',
	'duplicator-dest' => 'Destinație:',
	'duplicator-dotalk' => 'Duplică pagina de discuții (dacă este cazul)',
	'duplicator-submit' => 'Duplică',
	'duplicator-summary' => 'Copiat de la [[$1]]', # Fuzzy
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|versiune a fost|versiuni au fost}} copiate.',
	'duplicator-success-talknotcopied' => 'Pagina de discuții nu a putut fi copiată.',
	'duplicator-failed' => 'Pagina nu a putut fi duplicată.
A apărut o eroare necunoscută.',
	'right-duplicate' => 'Duplică pagini',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'duplicator' => "Dupliche 'na pàgene",
	'duplicator-desc' => "Ccreje 'na [[Special:Duplicate|copie de le pàggene]] indipendende cu tutte 'u cunde de le cangiaminde",
	'duplicator-toolbox' => 'Dupleche sta pàgene',
	'duplicator-header' => "Sta pàgene permette 'a duplicazione comblete d'a pàgene, ccrejanne copie indipendende de tutte le cunde.
Quiste jè utile pa separazione de le pàggene, ecc.",
	'duplicator-options' => 'Opziune',
	'duplicator-source' => 'Sorgende:',
	'duplicator-dest' => 'Destinazione:',
	'duplicator-dotalk' => "Dupliche 'a pàgene de le 'ngazzaminde (ce applicabbile)",
	'duplicator-dosubpages' => 'Dupliche le sottopàggene (ce stonne)',
	'duplicator-dohistory' => "Dupliche 'u cunde comblete d'a pàgene",
	'duplicator-submit' => 'Dupliche',
	'duplicator-summary' => 'Copiate da [[$1]], revisione [[$2]]',
	'duplicator-success' => "<big>'''[[$1]] ha state copiate sus a [[$2]].'''</big>",
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revisione ha state|revisiune onne state}} copiate.',
	'duplicator-success-talknotcopied' => "'A pàgene de le 'ngazzaminde non g'ha state copiate.",
	'duplicator-failed' => "'A pàgene non ge pò essere duplicate.
'N'errore scanusciute ha assute.",
	'duplicator-failed-toolong' => "[[$1]] non g'ha state duplicate. 'U titole de destinazione jè troppe luènghe.",
	'duplicator-failed-dest-exists' => "[[$1]] non g'ha state duplicate. 'A destinazione [[$2]] già esiste.",
	'duplicator-source-invalid' => "Pe piacere dèje 'nu titole de origgene valide.",
	'duplicator-source-notexist' => "[[$1]] non g'esiste. Pe piacere dà 'u titole de 'na pàgene ca esiste.",
	'duplicator-dest-invalid' => "Pe piacere dà 'nu titole de destinazione valide.",
	'duplicator-dest-exists' => "[[$1]] ggià esiste. Pe piacere dà 'nu titole de destinazione ca non g'esiste.",
	'right-duplicate' => 'Dupliche le pàggene',
);

/** Russian (русский)
 * @author Ferrer
 * @author Kaganer
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'duplicator' => 'Клонировать статью',
	'duplicator-desc' => 'Создаёт независимые [[Special:Duplicate|копии страниц]] с полной историей изменений',
	'duplicator-toolbox' => 'Клонировать статью',
	'duplicator-header' => 'Эта страница позволяет полностью клонировать статью, создать независимую копию истории её изменений. Данная функция полезна при разделении статьи на две отдельные.',
	'duplicator-options' => 'Настройки',
	'duplicator-source' => 'Откуда:',
	'duplicator-dest' => 'Куда:',
	'duplicator-dotalk' => 'Клонировать страницу обсуждения (если возможно)',
	'duplicator-dosubpages' => 'Клонировать подстраницы (если есть)',
	'duplicator-dohistory' => 'Клонировать историю изменений',
	'duplicator-submit' => 'Клонировать',
	'duplicator-summary' => 'Копия ревизии [[$2]] статьи [[$1]]',
	'duplicator-success' => '[[$1]] клонирована в [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|изменение было|изменения было|изменений было}} скопировано.',
	'duplicator-success-talknotcopied' => 'Страница обсуждения не была скопирована.',
	'duplicator-failed' => 'Страница не может быть клонирована. Неизвестная ошибка.',
	'duplicator-failed-toolong' => '[[$1]] не клонирована. Новое название слишком длинное.',
	'duplicator-failed-dest-exists' => '[[$1]] не клонирована. Статья-назначение [[$2]] уже существует.',
	'duplicator-source-invalid' => 'Пожалуйста, введите корректное название статьи-источника.',
	'duplicator-source-notexist' => 'Страница «[[$1]]» не существует. Пожалуйста, введите название страницы, которая существует.',
	'duplicator-dest-invalid' => 'Пожалуйста введите корректное название страницы-назначения.',
	'duplicator-dest-exists' => 'Страница «[[$1]]» уже существует. Пожалуйста, введите название несуществующей страницы-назначения.',
	'right-duplicate' => 'копирование страниц',
);

/** Sicilian (sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'duplicator-options' => 'Oppizioni',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'duplicator' => 'පිටුවක් පිටපත් කරන්න',
	'duplicator-toolbox' => 'මෙම පිටුව පිටපත් කරන්න',
	'duplicator-options' => 'විකල්ප',
	'duplicator-source' => 'මූලාශ්‍රය:',
	'duplicator-dest' => 'ගමනාන්තය:',
	'duplicator-submit' => 'පිටපත් කරන්න',
	'right-duplicate' => 'පිටු පිටපත් කරන්න',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'duplicator' => 'Duplikovať stránku',
	'duplicator-desc' => 'Vytvorí nezávislé [[Special:Duplicate|kópie stránok]] s úplnou históriou úprav',
	'duplicator-toolbox' => 'Duplikovať túto stránku',
	'duplicator-header' => 'Táto stránka umožňuje kompletnú duplikáciu stránky, čím sa vytvorí nazávislá kópia všetkých histórií. Je to užitočné napríklad pri vetvení a pod.',
	'duplicator-options' => 'Možnosti',
	'duplicator-source' => 'Zdroj:',
	'duplicator-dest' => 'Cieľ:',
	'duplicator-dotalk' => 'Duplikovať aj diskusnú stránku (ak existuje)',
	'duplicator-submit' => 'Duplikovať',
	'duplicator-summary' => 'Skopírované z [[$1]]', # Fuzzy
	'duplicator-success' => 'Vytvorená kópia [[$1]] na [[$2]].',
	'duplicator-success-revisions' => '{{PLURAL:$1|Skopírovaná $1 revízia|Skopírované $1 revízie|Skopírovaných $1 revízií}}.',
	'duplicator-success-talknotcopied' => 'Nebolo možné skopírovať diskusné stránky.',
	'duplicator-failed' => 'Túto stránku nebolo možné duplikovať. Vyskytla sa neznáma chyba.',
	'duplicator-source-invalid' => 'Poskytnite platný názov zdrojovej stránky.',
	'duplicator-source-notexist' => '[[$1]] neexistuje. Poskytnite názov zdrojovej stránky, ktorá už existuje.',
	'duplicator-dest-invalid' => 'Prosím, zadajte platný názov cieľovej stránky.',
	'duplicator-dest-exists' => '[[$1]] už existuje. Prosím zadajte cieľ, ktorý ešte neexistuje.',
	'right-duplicate' => 'Duplicitné stránky',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'duplicator' => 'Дуплира чланак',
	'duplicator-desc' => 'Прави независне [[Special:Duplicate|копије чланака]] са потпуним историјама измена',
	'duplicator-toolbox' => 'Дуплирај овај чланак',
	'duplicator-header' => 'Ова страна омогућава комплетно дуплирање неког чланка, прављењем независних копија свих историја.
Ово је корисно за форковање чланака и сл.',
	'duplicator-options' => 'Поставке',
	'duplicator-source' => 'Извор:',
	'duplicator-dest' => 'Циљ:',
	'duplicator-dotalk' => 'Дуплирај страну за разговор (ако је могуће)',
	'duplicator-submit' => 'Дуплирај',
	'duplicator-summary' => 'Ископирано од [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] је ископиран у [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|ревизија је ископирана|равизија је ископирано}}.',
	'duplicator-success-talknotcopied' => 'Страна за разговор није могла бити ископирана.',
	'duplicator-failed' => 'Чланак није могао бити дуплиран.
Дошло је до непозанте грешке.',
	'duplicator-source-invalid' => 'Молимо Вас да наведете исправан наслов изворног чланка.',
	'duplicator-source-notexist' => '[[$1]] не постоји. Молимо Вас да наведете наслов постојећег чланка.',
	'duplicator-dest-invalid' => 'Моломо Вас да наведете исправан назив циљаног наслова.',
	'duplicator-dest-exists' => '[[$1]] већ постоји. Молимо Вас да наведете незаузет циљани наслов.',
	'right-duplicate' => 'Дуплиране стране',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Michaello
 */
$messages['sr-el'] = array(
	'duplicator' => 'Duplira članak',
	'duplicator-desc' => 'Pravi nezavisne [[Special:Duplicate|kopije članaka]] sa potpunim istorijama izmena',
	'duplicator-toolbox' => 'Dupliraj ovaj članak',
	'duplicator-header' => 'Ova strana omogućava kompletno dupliranje nekog članka, pravljenjem nezavisnih kopija svih istorija.
Ovo je korisno za forkovanje članaka i sl.',
	'duplicator-options' => 'Opcije',
	'duplicator-source' => 'Izvor:',
	'duplicator-dest' => 'Cilj:',
	'duplicator-dotalk' => 'Dupliraj stranu za razgovor (ako je moguće)',
	'duplicator-submit' => 'Dupliraj',
	'duplicator-summary' => 'Iskopirano od [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] je iskopiran u [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|revizija je iskopirana|ravizija je iskopirano}}.',
	'duplicator-success-talknotcopied' => 'Strana za razgovor nije mogla biti iskopirana.',
	'duplicator-failed' => 'Članak nije mogao biti dupliran.
Došlo je do nepozante greške.',
	'duplicator-source-invalid' => 'Molimo Vas da navedete ispravan naslov izvornog članka.',
	'duplicator-source-notexist' => '[[$1]] ne postoji. Molimo Vas da navedete naslov postojećeg članka.',
	'duplicator-dest-invalid' => 'Molomo Vas da navedete ispravan naziv ciljanog naslova.',
	'duplicator-dest-exists' => '[[$1]] već postoji. Molimo Vas da navedete nezauzet ciljani naslov.',
	'right-duplicate' => 'Duplirane strane',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'duplicator' => 'Ne Siede duplizierje',
	'duplicator-toolbox' => 'Duplizierje disse Siede',
	'duplicator-header' => 'Mäd disse Spezialsiede konnen Sieden komplett duplizierd wäide. Deerbie wäd ju ganse Versionsgeskichte uurnuumen. Dit kon biespilswiese nutselk weese, uum ne Siede in Unnersieden aptoudeelen.',
	'duplicator-options' => 'Optione',
	'duplicator-source' => 'Wälle:',
	'duplicator-dest' => 'Siel:',
	'duplicator-dotalk' => 'Diskussionssiede mee kopierje (wan muugelk)',
	'duplicator-submit' => 'Siede duplizierje',
	'duplicator-summary' => '[[$1]] wuude duplizierd', # Fuzzy
	'duplicator-success' => '[[$1]] wuude ätter [[$2]] kopierd.',
	'duplicator-success-revisions' => '{{PLURAL:$1|1 Version wuude|$1 Versione wuuden}} duplizierd.',
	'duplicator-success-talknotcopied' => 'Ju Diskussionssiede kuude nit duplizierd wäide.',
	'duplicator-failed' => 'Ju Siede kuude nit duplizierd wäide, deer n uunbekoanden Failer aptried.',
	'duplicator-source-invalid' => 'Reek ne gultige Wälle-Siede an.',
	'duplicator-source-notexist' => 'Ju Siede [[$1]] bestoant nit. Reek ne bestoundende Siede an.',
	'duplicator-dest-invalid' => 'Reek ne gultige Siel-Siede an.',
	'duplicator-dest-exists' => 'Ju Siede [[$1]] bestoant al. Reek ne nit bestoundende Siede an.',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Lejonel
 * @author M.M.S.
 * @author Najami
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'duplicator' => 'Duplicera en sida',
	'duplicator-desc' => 'Skapa självständiga [[Special:Duplicate|kopior av sidor]] med hela redigeringshistoriker',
	'duplicator-toolbox' => 'Duplicera denna sida',
	'duplicator-header' => 'Med den här specialsidan är det möjligt att duplicera en sida, och på så sätt skapa två oberoende versioner av hela dess historik. Det kan vara användbart t.ex. om en sida ska delas upp på flera sidor.',
	'duplicator-options' => 'Alternativ',
	'duplicator-source' => 'Källsida:',
	'duplicator-dest' => 'Målsida:',
	'duplicator-dotalk' => 'Duplicera (om möjligt) även diskussionssidan',
	'duplicator-dosubpages' => 'Dubblera undersidor (om någon)',
	'duplicator-dohistory' => 'Duplicera hela sidans historia',
	'duplicator-submit' => 'Duplicera',
	'duplicator-summary' => 'Kopierad från [[$1]], sidversion [[$2]]',
	'duplicator-success' => '[[$1]] kopierades till [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|sidversion|sidversioner}} kopierades.',
	'duplicator-success-talknotcopied' => 'Diskussionssidan kunde inte dupliceras.',
	'duplicator-failed' => 'Sidan kunde inte dupliceras. Ett okänt fel inträffade.',
	'duplicator-failed-toolong' => '[[$1]] var inte duplicerat. Destinationstiteln var för lång.',
	'duplicator-failed-dest-exists' => '[[$1]] var inte duplicerat. Destinationstiteln [[$2]] finns redan.',
	'duplicator-source-invalid' => 'Du har inte angivit någon giltig källsida.',
	'duplicator-source-notexist' => '[[$1]] finns inte. Du måste ange en källsida som existerar.',
	'duplicator-dest-invalid' => 'Du har inte angivit någon giltig målsida.',
	'duplicator-dest-exists' => '[[$1]] finns redan. Du måste ange en målsida som inte finns.',
	'right-duplicate' => 'Kopiera sidorna',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author TRYPPN
 */
$messages['ta'] = array(
	'duplicator-options' => 'விருப்பத்தேர்வுகள்',
	'duplicator-source' => 'மூலம்:',
	'duplicator-dest' => 'சேருமிடம்:',
	'duplicator-submit' => 'ஒரே மாதிரியுள்ள (நகல் எடு)',
	'duplicator-success-talknotcopied' => 'பேச்சுப் பக்கத்தை நகலெடுக்க முடியவில்லை.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'duplicator-options' => 'ఎంపికలు',
	'duplicator-source' => 'మూలం:',
	'duplicator-dest' => 'గమ్యస్థానం:',
	'duplicator-summary' => '[[$1]] నుండి కాపీ చేసారు', # Fuzzy
	'duplicator-success' => '[[$1]]ని [[$2]]కి కాపీ చేసాం.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|కూర్పు కాపీ అయ్యింది|కూర్పులు కాపీ అయ్యియి}}.',
	'duplicator-success-talknotcopied' => 'చర్చా పేజీని కాపీ చేయ్యలేకపోయాం.',
	'duplicator-source-invalid' => 'సరైన మూలపు శీర్షికని ఇవ్వండి.',
	'duplicator-source-notexist' => '[[$1]] అన్నది లేదు. ఏదైనా ఉన్న పేజీ యొక్క శీర్షిక ఇవ్వండి.',
	'duplicator-dest-invalid' => 'సరైన గమ్యస్థానపు శీర్షికని ఇవ్వండి.',
	'duplicator-dest-exists' => '[[$1]] అనేది ఇప్పటికే ఉంది. దయచేసి ఉనికిలోనేని గమ్యస్థానపు శీర్షికను ఇవ్వండి.',
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'duplicator' => 'Саҳифаеро такрорӣ кунед',
	'duplicator-desc' => 'Эҷод кардани нусхаҳои саҳифаҳои мустақил бо таърихҳои пурраи вироиш', # Fuzzy
	'duplicator-toolbox' => 'Ин саҳифаро такрорӣ кунед',
	'duplicator-header' => 'Ин саҳифа имкони комилан такрор кардани саҳифаеро пешниҳод мекунад, бо эҷоди нусхаҳои мустақили тамоми таърихҳо.
Ин барои эҷоди шохаҳои саҳифаҳо ва ғайраҳо судманд аст.',
	'duplicator-options' => 'Ихтиёрот',
	'duplicator-source' => 'Манбаъ:',
	'duplicator-dest' => 'Мақсад:',
	'duplicator-dotalk' => 'Такрорӣ кардани саҳифаи баҳс (агар муносиб бошад)',
	'duplicator-submit' => 'Такрорӣ кардан',
	'duplicator-summary' => 'Аз [[$1]] нусхабардорӣ шудааст', # Fuzzy
	'duplicator-success' => '[[$1]] ба [[$2]] нусхабардорӣ шуд.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|нусха|нусхаҳо}} нусхабардорӣ {{PLURAL:|шуд|шуданд}}.',
	'duplicator-success-talknotcopied' => 'Саҳифаи баҳс наметавонад нусхабардорӣ шавад.',
	'duplicator-failed' => 'Саҳифа қобили такрорӣ шудан нест.
Хатои ношинос рух дод.',
	'duplicator-source-invalid' => 'Лутфан унвони мӯътабари манбаъро пешкаш кунед.',
	'duplicator-source-notexist' => '[[$1]] вуҷуд надорад. Лутфан унвони саҳифаи вуҷуддоштаро пешкаш кунед.',
	'duplicator-dest-invalid' => 'Лутфан унвони мақсади мӯътабареро пешкаш кунед.',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'duplicator' => 'Sahifaero takrorī kuned',
	'duplicator-toolbox' => 'In sahifaro takrorī kuned',
	'duplicator-header' => "In sahifa imkoni komilan takror kardani sahifaero peşnihod mekunad, bo eçodi nusxahoi mustaqili tamomi ta'rixho.
In baroi eçodi şoxahoi sahifaho va ƣajraho sudmand ast.",
	'duplicator-options' => 'Ixtijorot',
	'duplicator-source' => "Manba':",
	'duplicator-dest' => 'Maqsad:',
	'duplicator-dotalk' => 'Takrorī kardani sahifai bahs (agar munosib boşad)',
	'duplicator-submit' => 'Takrorī kardan',
	'duplicator-summary' => 'Az [[$1]] nusxabardorī şudaast', # Fuzzy
	'duplicator-success' => '[[$1]] ba [[$2]] nusxabardorī şud.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|nusxa|nusxaho}} nusxabardorī {{PLURAL:|şud|şudand}}.',
	'duplicator-success-talknotcopied' => 'Sahifai bahs nametavonad nusxabardorī şavad.',
	'duplicator-failed' => 'Sahifa qobili takrorī şudan nest.
Xatoi noşinos rux dod.',
	'duplicator-source-invalid' => "Lutfan unvoni mū'tabari manba'ro peşkaş kuned.",
	'duplicator-source-notexist' => '[[$1]] vuçud nadorad. Lutfan unvoni sahifai vuçuddoştaro peşkaş kuned.',
	'duplicator-dest-invalid' => "Lutfan unvoni maqsadi mū'tabarero peşkaş kuned.",
);

/** Thai (ไทย)
 * @author Octahedron80
 */
$messages['th'] = array(
	'duplicator-source' => 'แหล่งที่มา:',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'duplicator' => 'Gayahin ang isang pahina',
	'duplicator-desc' => 'Lumikha ng nagsasariling [[Special:Duplicate|mga sipi ng mga pahina]] na mayroong buong mga kasaysayan ng mga pagbabago',
	'duplicator-toolbox' => 'Gayahin ang pahinang ito',
	'duplicator-header' => 'Nagpapahintulot ang pahinang ito ng buong paggaya ng isang pahina, na lumilikha ng nagsasariling mga sipi ng lahat ng mga kasaysayan. Magagamit ito para sa pagsasanga ng pahina, atbp.',
	'duplicator-options' => 'Mga pagpipilian',
	'duplicator-source' => 'Pinagmulan:',
	'duplicator-dest' => 'Kapupuntahan:',
	'duplicator-dotalk' => 'Kagayang pahina ng usapan (kung naaangkop)',
	'duplicator-submit' => 'Gayahin',
	'duplicator-summary' => 'Sinipi mula sa [[$1]]', # Fuzzy
	'duplicator-success' => 'Sinipi ang [[$1]] patungong [[$2]].',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|pagbabago|mga pagbabago}} ang nasipi na.',
	'duplicator-success-talknotcopied' => 'Hindi masipi ang pahina ng usapan.',
	'duplicator-failed' => 'Hindi magagaya ang pahina.
Naganap ang isang hindi mapag-alamang kamalian.',
	'duplicator-source-invalid' => 'Pakibigay ang isang tanggap na pamagat ng pagmumulan.',
	'duplicator-source-notexist' => 'Hindi umiiral ang [[$1]]. Pakibigay ang isang umiiral na pamagat ng isang pahina.',
	'duplicator-dest-invalid' => 'Pakibigay ang isang tanggap na pamagat ng kapupuntahan.',
	'duplicator-dest-exists' => 'Umiiral na ang [[$1]]. Pakibigay ang isang hindi pa umiiral na kapupuntahang pamagat.',
	'right-duplicate' => 'Gayahin ang mga pahina',
);

/** толышә зывон (толышә зывон)
 * @author Erdemaslancan
 */
$messages['tly'] = array(
	'duplicator-options' => 'Кукон',
);

/** Turkish (Türkçe)
 * @author Karduelis
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'duplicator' => 'Bir sayfayı kopyala',
	'duplicator-desc' => 'Değişiklik geçmişlerinin tümü ile [[Special:Duplicate|sayfaların bağımsız kopyalarını]] oluştur',
	'duplicator-toolbox' => 'Bu sayfayı kopyala',
	'duplicator-header' => 'Bu sayfa, tüm geçmişlerin bağımsız kopyalarını oluşturarak bir sayfanın tam kopyalamasını mümkün kılmaktadır.
Sayfa alımı gibi durumlarda kullanışlıdır.',
	'duplicator-options' => 'Seçenekler',
	'duplicator-source' => 'Kaynak:',
	'duplicator-dest' => 'Hedef:',
	'duplicator-dotalk' => 'Tartışma sayfasını (varsa) kopyala',
	'duplicator-submit' => 'Kopya',
	'duplicator-summary' => '[[$1]] kaynağından kopyalandı', # Fuzzy
	'duplicator-success' => '[[$1]], [[$2]] hedefine kopyalandı.',
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|sürüm|sürüm}} kopyalandı.',
	'duplicator-success-talknotcopied' => 'Tartışma sayfası kopyalanamadı.',
	'duplicator-failed' => 'Sayfa kopyalanamadı.
Bilinmeyen bir hata oluştu.',
	'duplicator-source-invalid' => 'Lütfen geçerli bir kaynak başlığı girin.',
	'duplicator-source-notexist' => '[[$1]] mevcut değil. Lütfen mevcut olan bir sayfa başlığı girin.',
	'duplicator-dest-invalid' => 'Lütfen geçerli bir hedef başlık girin.',
	'duplicator-dest-exists' => '[[$1]] zaten mevcut. Lütfen mevcut olmayan bir hedef başlık girin.',
	'right-duplicate' => 'Sayfaları kopyalar',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Prima klasy4na
 * @author Ата
 */
$messages['uk'] = array(
	'duplicator' => 'Дублювати сторінку',
	'duplicator-desc' => 'Створює незалежні [[Special:Duplicate|копії сторінок]] з повними історіями редагувань',
	'duplicator-toolbox' => 'Дублювати цю сторінку',
	'duplicator-header' => 'Ця сторінка дозволяє повністю дублювати сторінку зі створенням незалежних копій усіх історій.
Це корисно при розділенні статей тощо.',
	'duplicator-options' => 'Параметри',
	'duplicator-source' => 'Джерело:',
	'duplicator-dest' => 'Куди:',
	'duplicator-dotalk' => 'Дублювати сторінку обговорення (за можливості)',
	'duplicator-dosubpages' => 'Дублювати підсторінки (якщо є)',
	'duplicator-dohistory' => 'Дублювати всю сторінку історії',
	'duplicator-submit' => 'Дублювати',
	'duplicator-summary' => 'Скопійовано з [[$1]], перевірка [[$2]]',
	'duplicator-success' => "<big>'''[[$1]] було скопійовано до [[$2]].'''</big>",
	'duplicator-success-revisions' => '$1 {{PLURAL:$1|версія|версії|версій}} скопійовано.',
	'duplicator-success-talknotcopied' => 'Сторінку обговорення не було скопійовано.',
	'duplicator-failed' => 'Сторінку не можна дублювати.
Сталася невідома помилка.',
	'duplicator-failed-toolong' => '[[$1]] не дубльоване. Новий заголовок задовгий.',
	'duplicator-failed-dest-exists' => '[[$1]] не дубльоване. Ціль [[$2]] вже існує.',
	'duplicator-source-invalid' => 'Будь ласка, вкажіть дійсну назву джерела.',
	'duplicator-source-notexist' => '«[[$1]]» не існує. Будь ласка, вкажіть назву сторінки, що існує.',
	'duplicator-dest-invalid' => 'Будь ласка, вкажіть дійсну назву сторінки-призначення.',
	'duplicator-dest-exists' => '«[[$1]]» уже існує. Будь ласка, вкажіть назву сторінки-призначення, яка не існує.',
	'right-duplicate' => 'Дублювання сторінок',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'duplicator-options' => 'اختیارات',
	'duplicator-source' => 'ماخذ:',
	'duplicator-dest' => 'منزل مقصود:',
	'duplicator-submit' => 'ڈپلیکیٹ',
	'right-duplicate' => 'نقلی صفحات',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'duplicator-source' => 'Purde:',
	'duplicator-dest' => 'Met (kuna):',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'duplicator' => 'Nhân bản một trang',
	'duplicator-desc' => 'Tạo ra [[Special:Duplicate|bản sao]] độc lập của trang với đầy đủ lịch sử sửa đổi',
	'duplicator-toolbox' => 'Nhân bản trang này',
	'duplicator-header' => 'Trang này cho phép nhân bản hoàn toàn một trang, tạo ra những bản sao độc lập tất cả các lịch sử.
Việc này hữu dụng cho việc phân phối trang, v.v.',
	'duplicator-options' => 'Tùy chọn',
	'duplicator-source' => 'Nguồn:',
	'duplicator-dest' => 'Đích:',
	'duplicator-dotalk' => 'Nhân bản trang thảo luận (nếu có thể)',
	'duplicator-dosubpages' => 'Nhân bản các trang con (nếu có)',
	'duplicator-dohistory' => 'Nhân bản lịch sử trang đầy đủ',
	'duplicator-submit' => 'Nhân bản',
	'duplicator-summary' => 'Được chép từ [[$1]], phiên bản [[$2]]',
	'duplicator-success' => '[[$1]] đã được chép sang [[$2]].',
	'duplicator-success-revisions' => 'Đã chép $1 {{PLURAL:$1|phiên bản|phiên bản}}.',
	'duplicator-success-talknotcopied' => 'Không thể chép trang thảo luận.',
	'duplicator-failed' => 'Không thể nhân bản trang.
Có lỗi lạ xảy ra.',
	'duplicator-failed-toolong' => '[[$1]] không được nhân bản. Tiêu đề đích quá dài.',
	'duplicator-failed-dest-exists' => '[[$1]] không được nhân bản. Trang đích [[$2]] đã tồn tại.',
	'duplicator-source-invalid' => 'Xin hãy cung cấp tựa đề nguồn hợp lệ.',
	'duplicator-source-notexist' => '[[$1]] không tồn tại. Xin hãy cung cấp tựa đề của một trang tồn tại.',
	'duplicator-dest-invalid' => 'Xin hãy cung cấp tựa đề đích hợp lệ.',
	'duplicator-dest-exists' => '[[$1]] đã tồn tại. Xin hãy cung cấp một tựa đề đích chưa tồn tại.',
	'right-duplicate' => 'Sao chép trang',
);

/** Volapük (Volapük)
 * @author Smeira
 */
$messages['vo'] = array(
	'duplicator' => 'Telükön padi',
	'duplicator-desc' => 'Jafön [[Special:Duplicate|padakopiedis nesekidik]] labü redakamajenotems lölöfik',
	'duplicator-toolbox' => 'Telükön padi at',
	'duplicator-source' => 'Fonät:',
	'duplicator-dest' => 'Zeil:',
	'duplicator-dotalk' => 'Telükön bespikapadi (if dabinon)',
	'duplicator-submit' => 'Telükön',
	'duplicator-summary' => 'Pekopiedon se [[$1]]', # Fuzzy
	'duplicator-success' => '[[$1]] pekopiedon lü [[$2]].',
	'duplicator-success-revisions' => '{{PLURAL:$1|Revid bal pekopiedon|Revids $1 pekopiedons}}.',
	'duplicator-success-talknotcopied' => 'No eplöpos ad kopiedön bespikapadi.',
	'duplicator-failed' => 'No eplöpos ad telükön padi.
Pöl nesevädik ejenon.',
	'duplicator-source-invalid' => 'Penolös fonätatiädi lonöföl.',
	'duplicator-source-notexist' => 'Pad: [[$1]] no dabinon. Penolös tiädi pada dabinöl.',
	'duplicator-dest-invalid' => 'Penolös zeilatiädi lonöföl.',
	'duplicator-dest-exists' => 'Pad: [[$1]] ya dabinon. Penolös zeilatiädi no dabinöli.',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'duplicator-options' => 'ברירות',
	'duplicator-source' => 'מקור:',
);

/** Cantonese (粵語)
 * @author Shinjiman
 */
$messages['yue'] = array(
	'duplicator' => '複製一篇文章',
	'duplicator-toolbox' => '複製呢篇文章',
	'duplicator-header' => '呢一版可以完全複製一篇文章，建立一個完整嘅修訂歷史。呢個係對於文章分叉等嘅動作係好有用嘅。',
	'duplicator-options' => '選項',
	'duplicator-source' => '來源:',
	'duplicator-dest' => '目標:',
	'duplicator-dotalk' => '複製討論頁 (如可用嘅話)',
	'duplicator-submit' => '複製',
	'duplicator-summary' => '由[[$1]]複製過來', # Fuzzy
	'duplicator-success' => '[[$1]]已經複製到[[$2]]。',
	'duplicator-success-revisions' => '$1個修訂已經複製。',
	'duplicator-success-talknotcopied' => '個討論頁唔能夠複製。',
	'duplicator-failed' => '呢一版唔能夠複製落來。未知嘅錯誤發生咗。',
	'duplicator-source-invalid' => '請提供一個正確嘅來源標題。',
	'duplicator-source-notexist' => '[[$1]]並唔存在。請提供一個已經存在嘅版面標題。',
	'duplicator-dest-invalid' => '請提供一個正確嘅目標標題。',
	'duplicator-dest-exists' => '[[$1]]已經存在。請提供一個未存在嘅目標標題。',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Gzdavidwong
 * @author Shinjiman
 * @author TianyinLee
 * @author Vina
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'duplicator' => '复制一篇文章',
	'duplicator-desc' => '新建含所有编辑历史记录的独立[[Special:Duplicate|页面副本]]',
	'duplicator-toolbox' => '复制这篇文章',
	'duplicator-header' => '这一版可以完全复制一篇文章，建立一个完整的修订历史。这对于文章分叉等的动作是很有用的。',
	'duplicator-options' => '选项',
	'duplicator-source' => '来源：',
	'duplicator-dest' => '目标:',
	'duplicator-dotalk' => '复制讨论页 （如可用的话）',
	'duplicator-dosubpages' => '重复的子页面 （如果存在）',
	'duplicator-dohistory' => '复制完整页面历史',
	'duplicator-submit' => '复制',
	'duplicator-summary' => '复制自[[$1]]的版本[[$2]]',
	'duplicator-success' => '[[$1]]已经复制到[[$2]]。',
	'duplicator-success-revisions' => '$1个修订已经复制。',
	'duplicator-success-talknotcopied' => '讨论页不能够复制。',
	'duplicator-failed' => '这一页唔能够复制落来。发生了未知的错误。',
	'duplicator-failed-toolong' => '[[$1]]不是重复的，此目的地名称过长。',
	'duplicator-failed-dest-exists' => '[[$1]]不是重复的，目的地[[$2]]已存在。',
	'duplicator-source-invalid' => '请提供一个正确的来源标题。',
	'duplicator-source-notexist' => '[[$1]]并不存在。请提供一个已经存在的页面标题。',
	'duplicator-dest-invalid' => '请提供一个正确的目标标题。',
	'duplicator-dest-exists' => '[[$1]]已经存在。请提供一个未存在的目标标题。',
	'right-duplicate' => '复制文章',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Mark85296341
 * @author Shinjiman
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'duplicator' => '複製一篇文章',
	'duplicator-desc' => '建立含所有編輯歷程記錄的獨立[[Special:Duplicate|頁面副本]]',
	'duplicator-toolbox' => '複製這篇文章',
	'duplicator-header' => '這一版可以完全複製一篇文章，建立一個完整的修訂歷史。這對於文章分叉等的動作是很有用的。',
	'duplicator-options' => '選項',
	'duplicator-source' => '來源：',
	'duplicator-dest' => '目的地：',
	'duplicator-dotalk' => '複製討論頁 （如可用的話）',
	'duplicator-submit' => '複製',
	'duplicator-summary' => '由[[$1]]複製過來', # Fuzzy
	'duplicator-success' => '[[$1]]已經複製到[[$2]]。',
	'duplicator-success-revisions' => '$1個修訂已經複製。',
	'duplicator-success-talknotcopied' => '討論頁不能夠複製。',
	'duplicator-failed' => '這一頁不能夠複製過來。發生了未知的錯誤。',
	'duplicator-source-invalid' => '請提供一個正確的來源標題。',
	'duplicator-source-notexist' => '[[$1]]並不存在。請提供一個已經存在的頁面標題。',
	'duplicator-dest-invalid' => '請提供一個正確的目標標題。',
	'duplicator-dest-exists' => '[[$1]]已經存在。請提供一個未存在的目標標題。',
	'right-duplicate' => '複製文章',
);
