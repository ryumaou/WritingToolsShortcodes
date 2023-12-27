<?php

// Security recommendation from wp.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function My_StarSystemFunction(){
$PlanetNum = 0;
$PHab="blank";

// Use the day of the year to get a daily changing
// quote changing (z = 0 till 365)
$DayOfTheYear = date('i'); 
 
// You could also use:
//  --> date('m'); // Quote changes every month
//  --> date('z'); // Quote changes every day
//  --> date('h'); // Quote changes every hour
//  --> date('i'); // Quote changes every minute

srand ((double) microtime() * 1000000);
// srand (time());

// array of star types, leaning toward habitable
$startype[]="Class O - Blue - Star";
$startype[]="Class B - Blue-White - Star";
$startype[]="Class A - White - Star";
$startype[]="Class F - Yellow-White - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";
$startype[]="Class M - Red - Star";
$startype[]="Black Hole";
$startype[]="Neutron Star";
$startype[]="White Dwarf";
$startype[]="Black Dwarf";
$startype[]="Brown Dwarf";
$startype[]="Red Supergiant Star";
$startype[]="Class O - Blue - Star";
$startype[]="Class B - Blue-White - Star";
$startype[]="Class A - White - Star";
$startype[]="Class F - Yellow-White - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";
$startype[]="Class M - Red - Star";
$startype[]="Red Supergiant Star";
$startype[]="Class O - Blue - Star";
$startype[]="Class B - Blue-White - Star";
$startype[]="Class A - White - Star";
$startype[]="Class F - Yellow-White - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";
$startype[]="Class M - Red - Star";
$startype[]="Class F - Yellow-White - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";
$startype[]="Binary Star";
$startype[]="Trinary Star";
$startype[]="Binary Star";
$startype[]="Neutron Star";
$startype[]="Pulsar";
$startype[]="Red Giant Star";
$startype[]="Red Dwarf Star";
$startype[]="Class F - Yellow-White - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";
$startype[]="Class F - Yellow-White - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";
$startype[]="Class G - Yellow - Star";
$startype[]="Class K - Orange - Star";


// an array of better star names
$MyStarName[]="Geedi";
$MyStarName[]="Cenopus";
$MyStarName[]="Delta  Pavnnis";
$MyStarName[]="Gahma Waipyng";
$MyStarName[]="Al-Lat";
$MyStarName[]="Dsibban";
$MyStarName[]="Ninshe";
$MyStarName[]="Alzafi";
$MyStarName[]="Thalim";
$MyStarName[]="Acamare";
$MyStarName[]="Rukbat";
$MyStarName[]="Oryon";
$MyStarName[]="Kaapella";
$MyStarName[]="Diadym";
$MyStarName[]="Luytan";
$MyStarName[]="Gliyse";
$MyStarName[]="Lacertai";
$MyStarName[]="Xeta";


// array of NON-habitable, but interesting planets
$PlanetNOHAB[]="a gas giant with ammonia clouds ranging in color from pale brown to ochre to pale red";
$PlanetNOHAB[]="an ice giant";
$PlanetNOHAB[]="a gas giant with water-vapor clouds ranging in color from white to pale blue";
$PlanetNOHAB[]="a reddish gas giant with rings";
$PlanetNOHAB[]="an icy dwarf";
$PlanetNOHAB[]="a gas giant with a grey-blue color";
$PlanetNOHAB[]="a lifeless rock with a methane ocean";
$PlanetNOHAB[]="a lifeless ball of rock and metal with rings";
$PlanetNOHAB[]="a bluish gas giant with rings";
$PlanetNOHAB[]="a rocky dwarf";
$PlanetNOHAB[]="a gas giant with dark, metallic ultramarine clouds";
$PlanetNOHAB[]="an ice giant";
$PlanetNOHAB[]="a gas giant reddish-brown clouds that have a faint glow";
$PlanetNOHAB[]="a yellow-brownish gas giant with rings";
$PlanetNOHAB[]="an icy dwarf";
$PlanetNOHAB[]="a gaseous dwarf";
$PlanetNOHAB[]="a lifeless rock with a methane ocean";
$PlanetNOHAB[]="a lifeless ball of rock and metal with rings";
$PlanetNOHAB[]="a gas giant with rings";
$PlanetNOHAB[]="a rocky dwarf";
$PlanetNOHAB[]="a gas giant";
$PlanetNOHAB[]="an ice giant";
$PlanetNOHAB[]="a small gas giant";
$PlanetNOHAB[]="a small gas giant with rings";
$PlanetNOHAB[]="an icy dwarf";
$PlanetNOHAB[]="a gas giant";
$PlanetNOHAB[]="a lifeless rock with a methane ocean";
$PlanetNOHAB[]="a lifeless ball of rock and metal with rings";
$PlanetNOHAB[]="a lifeless ball of rock and metal";
$PlanetNOHAB[]="a gas giant with rings";
$PlanetNOHAB[]="a rocky dwarf";
$PlanetNOHAB[]="a gas giant";
$PlanetNOHAB[]="an ice giant";
$PlanetNOHAB[]="a gas giant";
$PlanetNOHAB[]="an ice giant with rings";
$PlanetNOHAB[]="an icy dwarf";
$PlanetNOHAB[]="a gas giant";
$PlanetNOHAB[]="a lifeless rock with a methane ocean";
$PlanetNOHAB[]="a lifeless ball of rock and metal with rings";
$PlanetNOHAB[]="a gas giant with rings";
$PlanetNOHAB[]="a rocky dwarf";
$PlanetNOHAB[]="a spacestation the size of a small world";
$PlanetNOHAB[]="a lifeless ball of rock and metal";
$PlanetNOHAB[]="asteroid belt";
$PlanetNOHAB[]="a gas giant so hot it rains gold";
$PlanetNOHAB[]="a gas giant so hot it rains diamonds";
$PlanetNOHAB[]="a gas giant with rings that is so hot it rains gold";
$PlanetNOHAB[]="a gas giant with rings that is so hot it rains diamonds";


// another array of NON-habitable, but interesting planets
$PlanetNOHABInner[]="an ice giant";
$PlanetNOHABInner[]="an icy dwarf";
$PlanetNOHABInner[]="a lifeless rock with a methane ocean";
$PlanetNOHABInner[]="a lifeless ball of rock and metal with rings";
$PlanetNOHABInner[]="a rocky dwarf";
$PlanetNOHABInner[]="an ice giant";
$PlanetNOHABInner[]="an icy dwarf";
$PlanetNOHABInner[]="a gaseous dwarf";
$PlanetNOHABInner[]="a lifeless rock with a methane ocean";
$PlanetNOHABInner[]="a lifeless ball of rock and metal with rings";
$PlanetNOHABInner[]="a rocky dwarf";
$PlanetNOHABInner[]="an ice giant";
$PlanetNOHABInner[]="an icy dwarf";
$PlanetNOHABInner[]="a lifeless rock with a methane ocean";
$PlanetNOHABInner[]="a lifeless ball of rock and metal with rings";
$PlanetNOHABInner[]="a lifeless ball of rock and metal";
$PlanetNOHABInner[]="a rocky dwarf";
$PlanetNOHABInner[]="an ice giant";
$PlanetNOHABInner[]="an ice giant with rings";
$PlanetNOHABInner[]="an icy dwarf";
$PlanetNOHABInner[]="a lifeless rock with a methane ocean";
$PlanetNOHABInner[]="a lifeless ball of rock and metal with rings";
$PlanetNOHABInner[]="a rocky dwarf";
$PlanetNOHABInner[]="a spacestation the size of a small world";
$PlanetNOHABInner[]="a lifeless ball of rock and metal";
$PlanetNOHABInner[]="asteroid belt";
$PlanetNOHABInner[]="a tidally locked and lifeless rock with a hot side facing the star and a cold side facing away";
$PlanetNOHABInner[]="a rocky world rich with heavy metals";
$PlanetNOHABInner[]="a lifeless rock rich with many precious minerals";


// array of rather boring, but very habitable planets
$PlanetHAB[]="a terrestrial planet, mostly covered in water";
$PlanetHAB[]="a terrestrial planet, mostly covered in land";
$PlanetHAB[]="a terrestrial planet";
$PlanetHAB[]="a terrestrial planet with an iron-nickel core covered in about ".mt_rand(50,95)."% ocean";
$PlanetHAB[]="a terrestrial planet with an ocean that covers roughly ".mt_rand(10,45)."% of the surface";
$PlanetHAB[]="a terrestrial planet dotted with fresh and salt water lakes, but mostly arid";
$PlanetHAB[]="a terrestrial planet very much like Earth";
$PlanetHAB[]="a terrestrial planet without large oceans but covered with fresh water lakes and jungle";
$PlanetHAB[]="an arid terrestrial planet with subterranean water but covered in a desert";
$PlanetHAB[]="a terrestrial planet covered by  ".mt_rand(80,95)."%  ocean dotted with volcanic islands";
$PlanetHAB[]="a terrestrial planet covered by thick jungle and numerous, large fresh-water lakes";
$PlanetHAB[]="a terrestrial planet that's roughly ".mt_rand(10,45)."% ocean";
$PlanetHAB[]="a terrestrial planet that's roughly ".mt_rand(50,75)."% ocean";
$PlanetHAB[]="a terrestrial planet, that's a tropical paradise known for its rainforests, oceans, and beaches";



// a name array for non-habitable worlds - boring but vaguely science sounding
$GreekName[]="alpha";  
$GreekName[]="beta";  
$GreekName[]="gamma";  
$GreekName[]="delta";  
$GreekName[]="epsilon";  
$GreekName[]="zeta";  
$GreekName[]="eta";  
$GreekName[]="theta";  
$GreekName[]="iota";  
$GreekName[]="kappa";  
$GreekName[]="lambda";  
$GreekName[]="mu";  
$GreekName[]="nu";  
$GreekName[]="xi";  
$GreekName[]="omicron";  
$GreekName[]="pi";  
$GreekName[]="rho";  
$GreekName[]="sigma";  
$GreekName[]="tau";  
$GreekName[]="upsilon";  
$GreekName[]="phi";  
$GreekName[]="chi";  
$GreekName[]="psi";  
$GreekName[]="omega";  

// special planetary resources
$SpecialResources[]=" ";
$SpecialResources[]="This planet is famous for a unique land prawn which makes a delicious bisque.";
$SpecialResources[]="This planet has a refinery that makes essential components for FTL drives from minerals found elsewhere in the system. ";
$SpecialResources[]="A tree grows on this planet and its bark is an essential component in the most popular longevity drug.";
$SpecialResources[]="This planet is mostly known for their food prodction and delicious processed foods.";
$SpecialResources[]="This planet and its satellites are known for the high quality ore of all kinds mined here.";
$SpecialResources[]="This planet's major export is radioactive material for use in power plants of all sizes and type.";
$SpecialResources[]="This planet is known for the high quality crystals that are easily mined here.";
$SpecialResources[]="This planet is known for the high quality computer systems of all kinds that it manufactures and exports.";
$SpecialResources[]="This planet is famous for the volume and quality of weapons it manufactures and exports.";
$SpecialResources[]="Home to many artist colonies, this planet is famous for the artforms of all kinds it exports.";
$SpecialResources[]="This planet is well known for the custom software it produces and the consultants it sends out to install and manage that software.";
$SpecialResources[]="The univervsities on this world are famous throughout known space and the destination for many scholars.";
$SpecialResources[]="Ths shipyards on this planet are well known for producing safe, reliable star ships at reasonable prices.";
$SpecialResources[]="This planet is a source of the compounds needed to make extneded hypersleep safe for sentient beings.";
$SpecialResources[]="This planet is known for a particular mollusc used in the production of dye used on the outside of star ships.";
$SpecialResources[]="The major export from this planet is its carnivorous and motile plant life.";
$SpecialResources[]="This planet is famous for the ruins of an ancient civilization that originated on another planet of unknown origin.";
$SpecialResources[]="This planet is well known for the quality and sanity of artificial intelligences that it produces and exports.";
$SpecialResources[]="Scientists on this planet have developed a process to create miniturized versions of massive terrestrial lifeforms for use in gardens, portable vivariums, and art exhibits.";
$SpecialResources[]="Scientists on this planet have developed a process to create miniturized versions of large aquatic lifeforms for use in portable aquariums.";
$SpecialResources[]="Residents of this planet have developed a highly effective and efficient martial art form that they are more than willing to teach to anyone dedicated enough to learn.";
$SpecialResources[]="This planet is known for its bioluminescent lifeforms that are quite beautiful during mating season.";
$SpecialResources[]="This planet is known for how it caters to travelers of all kinds and is a popular tourist destination.";
$SpecialResources[]="This planet is known for its brightly colored fish and amphibians which are popular with aquarium enthusiasts.";
$SpecialResources[]="This planet is famous for its strangely colored fogs and there exists hidden in the blue fogs of The Great Valley, the only reminder of a mystery: a tall, crimson cylinder, smooth to the touch and untarnished by weather. ";
$SpecialResources[]="The majority of native life on this planet lives in large underground reservoirs of water. These have been a source of a fantastic variety of fish and crustaceans as well as hardy aquatic plants, resulting in a booming export of self-contained, self-regulating and low maintenance aquariums. ";
$SpecialResources[]="This planet's main export is a synthetic narcotic enjoyed by most sentient mammals. ";
$SpecialResources[]=" ";
$SpecialResources[]=" ";


// Building blocks for the aliens
// alien racial names

$AlienName[]="Yaziriahn";
$AlienName[]="Vrosk";
$AlienName[]="Dralasyte";
$AlienName[]="Zolomaniti";

// some very random names
if (mt_rand(1,100)>90){
  $myRandomAlienname = generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1);
}elseif (mt_rand(1,100)>75){
	$myRandomAlienname = generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1)."ians";
}elseif (mt_rand(1,100)>35){
	$myRandomAlienname = generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1)."ites";
}elseif (mt_rand(1,100)>15){
	$myRandomAlienname = generateRandomVowel(1).generateRandomConsonant(2).generateRandomVowel(2).generateRandomConsonant(1);
}else{
	  $randomAlienName = rand(0,count($AlienName)-1); 
		$myRandomAlienname = $AlienName[$randomAlienName];
}

// alien body plans
$AlienBody[]=" anthropoids similar to various terrestrial apes. They are muzzled, lightly furred, and have patagia stretching between their arms and legs which they can use to glide over short distances in low gravity (their home worlds are all low-gravity). They are descended from a nocturnal species, and prefer to wear tinted goggles to protect their eyesight during the day. "; 
$AlienBody[]=" an insectoid race with eight walking legs and two five-clawed manipulating arms. Their ant-like heads included two antennae and two mandibles. They are omnivorous and oviparous. ";
$AlienBody[]=" short, gray amoeboid-like creatures (they are actually multi-cellular unlike true amoebas) capable of changing their form to a limited extent by extending and retracting pseudopods. Lacking a digestive system, they consume their food by surrounding and absorbing it. A network of nerves and veins intersects at their two eye spots. They cannot see colors, but have a well-developed sense of smell. ";
$AlienBody[]=" basically Earth-standard humanoids but with silvery hair and golden eyes. ";
$AlienBody[]=" basically Earth-standard humanoids that stand roughly 2 meters tall. ";
$AlienBody[]=" bipedal, reptilian humanoids.  Like their lesser cousins, they tend to be slow and sluggish when cold, but very quick when warm.  They have small, vestigial tails. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" giant humanoids, standing 2.5 to 3 meters tall with completely hairless, grey skin.  They have broad, coarse features and a single, large, multifaceted eye. ";
$AlienBody[]=" furry humanoids standing roughly 0.5 meters tall and look like nothing so much as anthropomorphic hamsters.  They are incredibly dexterous and often work on very fine machinery. As they are furred, they tend not to wear much clothing besides the very practical for carrying tools and personal belongings. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" what appear to be nothing more than sea slugs stretching roughly a meter long with four stalked eyes.  They are, in fact, amphibious and return to water to reproduce.  They are brightly colored in unique patters and can extrude pseudopods which they use as remarkably fine manipulators. They are oviparous.";
$AlienBody[]=" what appear to be basically Earth-standard humanoids, but with elongated skulls with slit-like openings for ears, nose and mouth.  They have vertical pupils and light-gathering eyes, making them very effective in low light, but also sensitive to bright lights.  Their skin tends to be shades of grey, blue or pale red. ";
$AlienBody[]=" what appear to be nothing so much as bipedal spiders, walking on two strong limbs, with six more weaker limbs they use as manipulators.  The two topmost arms are the weakest but also have the finest claws allowing for very fine manipulation.  They have multiple, compound eyes and a hard, chitinous mouth and mandibles.  They are oviparous.";
$AlienBody[]=" basically Earth-standard humanoids.";
$AlienBody[]=" a race that most closely resemble the Terran octopi, but with both lungs and gills and six eyes equally distributed around their head.  They generally do not grow beyond roughly 25kg in size. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" a slight race of humanoids with large, luminous eyes, slightly pointed ears and very small, flat noses. They naturally grow tall, elaborate crests of hair on their head and have golden skin. Although they rarely grow taller than 1.25 meters, they are stronger than their slight build and delicate features would indicate. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" basically Earth-standard humanoids who are almost completely hairless. They are eusocial and predominantly made up of sterile females with each colony presided over by a queen who is serviced by an inner court of less than a dozen males.  When a queen dies, she chooses her successor who extracts a gland from the deceased queen and eats it activating her own change into a reproductive queen. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" a furred, bipedal race that evolved from a feline ancestor.  They stand just under 2 meters on average and their fur is generally golden to brown and the males have a larger, darker mane.  Both sexes have eyes that range from golden to hazel to green with a vertical pupil giving them excellent night vision.  Although their fine manipulators are clawed, they have no problem handling fine instruments. ";
$AlienBody[]=" a furred, bipedal race that evolved from a feline ancestor.  They stand just under 2 meters on average, wtih males being slightly larger, and their fur is generally light grey fading to white on their chest and abdomen for both males and females.  Both sexes have eyes that are shades of blue with a vertical pupil giving them excellent night vision.  Although their fine manipulators are clawed, they have no problem handling fine instruments. ";
$AlienBody[]=" a furred, bipedal race that evolved from a feline ancestor.  They stand just under 2 meters on average, with males usuall being slightly larger, and their fur is generally golden orange with stripes unique to each individual and similar within a breeding lineage for both males and females. Both sexes have eyes that range from golden to hazel to green with a vertical pupil giving them excellent night vision.  Although their fine manipulators are clawed, they have no problem handling fine instruments. ";
$AlienBody[]=" basically Earth-standard humanoids. ";
$AlienBody[]=" an insectoid race resembling a roughly meter long armored beetle. They mostly walk on their back four legs and use their front two as manipulators.  They have compound eyes set in protective ridges on thir mandibled head.  The males of the species have ornate horns which they can use as weapons in close combat.  Their shells have patterns distinctive of their lineage. ";
$AlienBody[]=" basically Earth-standard humanoids but with coppery hair and eyes that are shades of purple. ";
$AlienBody[]=" basically Earth-standard humanoids but with shiny, black hair and eyes that are red with irises in shades of blue. ";


// alien temperaments and tendencies
$AlienSocial[]="mostly progressive and embracing of change";
$AlienSocial[]="mostly conservative and embracing of traditional ways";
$AlienSocial[]="fairly enterprising and creative problem solvers";
$AlienSocial[]="curious and mostly seek to advance knowledge of all kinds";
$AlienSocial[]="socially stagnant and find little of interest outside their own culture";
$AlienSocial[]="largely indifferent to the challenges and interests outside their own culture";
$AlienSocial[]="aggressive and expansionist, seeking to grow their territory beyond their current limits";
$AlienSocial[]="competitive with other cultures and groups as well as within their own culture";
$AlienSocial[]="passive and easily controlled or led by other cultures";
$AlienSocial[]="unaggressive, but not interested in following the ways of other cultures either";
$AlienSocial[]="violent and militant in nature, with strong martial traditions";
$AlienSocial[]="balanced in their approach to conflict of all kinds, responding in measured, proportionate ways";
$AlienSocial[]="pacifistic and go out of their way to avoid conflict";
$AlienSocial[]="largely xenophobic, shunning contact with outside cultures";
$AlienSocial[]="more or less aloof in response to contact with outside cultures";
$AlienSocial[]="quite friendly and welcoming of outsiders";
$AlienSocial[]="said to be rather violent and pushy, and have a custom to choose a \"life-enemy\", which could be anything; a company, person, or a concept ";
$AlienSocial[]="noted for their logical minds and their society is structured as commercial ventures. Many give their company name before their given name ";
$AlienSocial[]="said to have a sense of humor that other sentient beings often find strange or quirky, and a love of bad puns ";


// alien customs
$AlienCustom[]="They have no differentiation between sexes in their mode of dress.";
$AlienCustom[]="All the male members of this culture wear some article of red clothing, no matter how small.";
$AlienCustom[]="All the female members of this culture wear some article of green clothing, no matter how small. ";
$AlienCustom[]="They all cut or shave any head or facial hair or hair-like cilia. ";
$AlienCustom[]="They never cut or shave any hair or hair-like cilia. ";
$AlienCustom[]="The noble classes all dye parts of their face or hair colors to match their mood. ";
$AlienCustom[]="The least prestigious social class is required to dye themselves dark green.  ";
$AlienCustom[]="The least prestigious social caste is required to regularly bleach themselves entirely white.  ";
$AlienCustom[]="At certain annual holidays, all members of society will wear garish makeup on their head or face and nails or claws or equivalents.  ";
$AlienCustom[]="All members of this culture wear jewelry meant to signify relative wealth and prosperity.";
$AlienCustom[]="Visible tattooing and ritual scarification is a common choice in this culture.  ";
$AlienCustom[]="Hidden tattooing and ritual scarification denoting private group membership is common to this society. ";
$AlienCustom[]="The majority of the population are vegetarians.  ";
$AlienCustom[]="The caste of workers who prepare food are revered similarly to an order of priesthood and may be of any sex. ";
$AlienCustom[]="As a society, they eat only one, large meal once a day, but may drink high-protein concoctions throughout the working day. ";
$AlienCustom[]="They all engage in a ritual cleansing before and after eating. ";
$AlienCustom[]="They exist in large, extended family units, generally housed together if possible. ";
$AlienCustom[]="They generally build their dwellings hear water and will create artificial water features if required near housing. ";
$AlienCustom[]="They have separate and rarely visited quarters for the differing sexes, with even beings within a marriage living separately. ";
$AlienCustom[]="They generally mate for life, rarely taking another after the death of the first.";
$AlienCustom[]="Biology aside, they are an almost universally polygamous society. ";
$AlienCustom[]="Biology aside, they are an almost universally polyandrous society. ";
$AlienCustom[]="They usually engage in group marriage, regardless of reproductive biology. ";
$AlienCustom[]="As a society, generally marry once to a single partner, though divorce is not without precedent, regardless of reproductive biology. ";
$AlienCustom[]="They generally avoid the use of mind-altering substances including alcohol. ";
$AlienCustom[]="At least part of this society embraces the use of mind-altering substances, including alcohol. ";
$AlienCustom[]="A large percentage of the population keep mammalian quadrupeds as pets. ";
$AlienCustom[]="A large percentage of the population keep reptilian quadrupeds as pets.";
$AlienCustom[]="A large percentage of the population keep large beetles as pets. ";
$AlienCustom[]="A large percentage of the population keep large arthropods as pets. ";
$AlienCustom[]="They ride varieties of flightless birds for sport and recreation. ";
$AlienCustom[]="They ride varieties of bipedal and quadrupedal reptiles for sport and recreation. ";
$AlienCustom[]="They enjoy watching combat sports similar to boxing and martial arts. ";
$AlienCustom[]="A large percentage of the population keep avians as pets. ";
$AlienCustom[]="They consider marriage a legal contract completely separate from mating and reproduction. ";
$AlienCustom[]="They hunt predators with relatively primative weapons for sport. ";
$AlienCustom[]="They love games of chance and may make major decisions based on those games of chance. ";
$AlienCustom[]="They will only eat food that has not been cooked over heat. ";
$AlienCustom[]="They find uncooked food inedible and will refuse to eat anything they feel is even slightly undercooked.";
$AlienCustom[]="They have mandatory schooling through the age of maturity. ";
$AlienCustom[]="They do not believe in mandatory schooling, though education is freely available to any who wish it. ";
$AlienCustom[]="As a race, they are generally obsessed with cleanliness and order. ";
$AlienCustom[]="The majority of thier technology is biologcial in nature and grown in vats or harvested like crops. ";


// alien government plans
$AlienGov[]= "system-wide corporate governance";
$AlienGov[]= "participatory democracy";
$AlienGov[]= "self-perpetuating oligarchy";
$AlienGov[]= "feudal technocracy";
$AlienGov[]= "representative democracy";
$AlienGov[]= "civil service bureaucracy";
$AlienGov[]= "totally impersonal bureaucracy";
$AlienGov[]= "charismatic dictator";
$AlienGov[]= "non-charismatic dictator";
$AlienGov[]= "charismatic oligarchy";
$AlienGov[]= "religious dictatorship";
$AlienGov[]= "religious autocracy";
$AlienGov[]= "totalitarian oligarchy";
$AlienGov[]= "system-wide corporate governance made up of a single corporate board as their";
$AlienGov[]= "participatory democracy divided into Executive, Legislative, and Judicial branches with local extensions in every major city as their";
$AlienGov[]= "self-perpetuating oligarchy led by a handful of elite political families as their";
$AlienGov[]= "feudal technocracy led by a royal family but advised by AI councilors as their";
$AlienGov[]= "representative democracy divided into Executive, Legislative, and Judicial branches of equal power as their";
$AlienGov[]= "civil service bureaucracy run by a series of competing and interconnected committees as their";
$AlienGov[]= "totally impersonal bureaucracy run by a series of competing and interconnected agencies as their";
$AlienGov[]= "charismatic, but ultimately quite cruel, dictator as their";
$AlienGov[]= "non-charismatic, but actually quite benevolent, dictator as their";
$AlienGov[]= "charismatic oligarchy governed by a ruling council made of wealthy, resource-owning families as their";
$AlienGov[]= "totalitarian oligarchy led by the single, largest political party as their";
$AlienGov[]= "system-wide corporate governance";
$AlienGov[]= "participatory democracy";
$AlienGov[]= "self-perpetuating oligarchy";
$AlienGov[]= "feudal technocracy";
$AlienGov[]= "representative democracy";
$AlienGov[]= "civil service bureaucracy";
$AlienGov[]= "totally impersonal bureaucracy";
$AlienGov[]= "charismatic dictator";
$AlienGov[]= "non-charismatic dictator";
$AlienGov[]= "charismatic oligarchy";
$AlienGov[]= "totalitarian oligarchy";
$AlienGov[]= "system-wide corporate governance by a multicorporation consortium as their";
$AlienGov[]= "participatory democracy divided into Executive, Legislative, and Judicial branches with local extensions in every major city as their";
$AlienGov[]= "self-perpetuating oligarchy led by a handful of elite political families as their";
$AlienGov[]= "feudal technocracy led by a royal family but advised by AI councilors as their";
$AlienGov[]= "representative democracy divided into Executive, Legislative, and Judicial branches of equal power as their";
$AlienGov[]= "civil service bureaucracy run by a series of competing and interconnected committees as their";
$AlienGov[]= "totally impersonal bureaucracy run by a series of competing and interconnected agencies as their";
$AlienGov[]= "charismatic, but ultimately quite cruel, dictator as their";
$AlienGov[]= "non-charismatic, but actually quite benevolent, dictator as their";
$AlienGov[]= "charismatic oligarchy governed by a ruling council made of wealthy, resource-owning families as their";
$AlienGov[]= "totalitarian oligarchy led by the single, largest political party as their";
$AlienGov[]= "libertarian republic";
$AlienGov[]= "system-wide corporate governance by a multicorporation cartel as their";


$GodView[]="animism; or the belief that all natural phenomena and objects are inhabited by spirits or spiritual forces";
$GodView[]="polytheistic animism; or the belief that certain natural phenomena are associated with specific spiritual beings, arranged in a hierachical order";
$GodView[]="polytheism; or the belief in an array of divine or spiritual beings of roughly the same importance";
$GodView[]="rational polytheism; or the belief that there are multiple spiritual aspects of a few truely divine beings";
$GodView[]="dualism; or the belief that there are two mutually antagonistic principles or beings in constant conflict";
$GodView[]="interactive monotheism; or the belief that there is a supreme being who is interested in the daily actions of sapient beings";
$GodView[]="influential monotheism; or the belief that a supreme being only interacts with sapient beings aat key moments in life";
$GodView[]="crisis monotheism; or the belief that a supreme being interacts in mortal affairs at key moments in history";
$GodView[]="remote monotheism; or the belief that the supreme being is normally uninvolved in sapient affairs with few, occasional, exceptions";
$GodView[]="deism; or the belief that a supreme being created the universe, set it in motion, but is thereafter removed from the affairs of sapeient beings";
$GodView[]="pantheism; or the belief that God, as such, is not separate but part of every aspect of the universe";
$GodView[]="agnosticism; or the belief that it is impossible to know for sure whether or not a supreme being exists";
$GodView[]="rational atheism; or the rejection of the existence of a supreme being based on science, logic, and reasoning";
$GodView[]="atheism; or the total rejection of the existence of a supreme being and the lack of religious beliefs as such";
$GodView[]="philisophical atheism; or the complete failure to understand the concept of a supreme being";
$GodView[]="rational polytheism; or the belief that there are multiple spiritual aspects of a few truely divine beings";
$GodView[]="dualism; or the belief that there are two mutually antagonistic principles or beings in constant conflict";
$GodView[]="interactive monotheism; or the belief that there is a supreme being who is interested in the daily actions of sapient beings";
$GodView[]="influential monotheism; or the belief that a supreme being only interacts with sapient beings aat key moments in life";
$GodView[]="crisis monotheism; or the belief that a supreme being interacts in mortal affairs at key moments in history";
$GodView[]="remote monotheism; or the belief that the supreme being is normally uninvolved in sapient affairs with few, occasional, exceptions";
$GodView[]="deism; or the belief that a supreme being created the universe, set it in motion, but is thereafter removed from the affairs of sapeient beings";
$GodView[]="pantheism; or the belief that God, as such, is not separate but part of every aspect of the universe";
$GodView[]="agnosticism; or the belief that it is impossible to know for sure whether or not a supreme being exists";
$GodView[]="stellarism; or the belief that every star is a divine being and should be worshiped by those who dwell withing their influence";
$GodView[]="sapientism; or the belief that saapient beings are neither good nor evil, but capable of being ethical and moral without belief in supernatural beings";
$GodView[]="animism; or the belief that all natural phenomena and objects are inhabited by spirits or spiritual forces";
$GodView[]="polytheistic animism; or the belief that certain natural phenomena are associated with specific spiritual beings, arranged in a hierachical order";
$GodView[]="polytheism; or the belief in an array of divine or spiritual beings of roughly the same importance";
$GodView[]="rational polytheism; or the belief that there are multiple spiritual aspects of a few truely divine beings";
$GodView[]="dualism; or the belief that there are two mutually antagonistic principles or beings in constant conflict";
$GodView[]="interactive monotheism; or the belief that there is a supreme being who is interested in the daily actions of sapient beings";
$GodView[]="influential monotheism; or the belief that a supreme being only interacts with sapient beings aat key moments in life";
$GodView[]="crisis monotheism; or the belief that a supreme being interacts in mortal affairs at key moments in history";
$GodView[]="remote monotheism; or the belief that the supreme being is normally uninvolved in sapient affairs with few, occasional, exceptions";
$GodView[]="deism; or the belief that a supreme being created the universe, set it in motion, but is thereafter removed from the affairs of sapeient beings";
$GodView[]="pantheism; or the belief that God, as such, is not separate but part of every aspect of the universe";
$GodView[]="agnosticism; or the belief that it is impossible to know for sure whether or not a supreme being exists";
$GodView[]="stellarism; or the belief that every star is a divine being and should be worshiped by those who dwell within the star's influence";
$GodView[]="sapientism; or the belief that sapient beings are neither good nor evil, but capable of being ethical and moral without belief in supernatural beings";

$SpiritualAim[]="that followers are the chosen people who deserve to dominate other sapients";
$SpiritualAim[]="that adherents will be rewarded in this life for faithful observance";
$SpiritualAim[]="that adherents will be spared from some upcoming disaster";
$SpiritualAim[]="in reincarnation and the effects of karma";
$SpiritualAim[]="in reincarnation driven by the choices of the faithful and their strength of character";
$SpiritualAim[]="in reincarnation and that each life is an opportnity to gain merit toward a later, distant afterlife";
$SpiritualAim[]="that adherents will be recieved into an afterlife after death";
$SpiritualAim[]="that adherents will avoid condemnation in a place of eternal punishment";
$SpiritualAim[]="that ethical and moral standards are their own reward";
$SpiritualAim[]="that performing charitable acts to build a better society is the ultimate goal of life";
$SpiritualAim[]="that promoting peace, harmony, and order to improve life for all sapients is the ultimate goal of life";
$SpiritualAim[]="that seeking to expand the frontiers of knowledge is the ultimate goal of life";
$SpiritualAim[]="that preserving the knowledge and wisdom of the past is the goal of living";
$SpiritualAim[]="that seeking to improve their own lives via self-discipline and training is the goal that all sapients should strive for";
$SpiritualAim[]="that chasing worldly pleasure is the only goal worth seeking";
$SpiritualAim[]="that there is no particular purpose to life";
$SpiritualAim[]="in reincarnation and the effects of karma";
$SpiritualAim[]="in reincarnation driven by the choices of the faithful and their strength of character";
$SpiritualAim[]="in reincarnation and that each life is an opportnity to gain merit toward a later, distant afterlife";
$SpiritualAim[]="that adherents will be recieved into an afterlife after death";
$SpiritualAim[]="that adherents will avoid condemnation in a place of eternal punishment";
$SpiritualAim[]="that ethical and moral standards are their own reward";
$SpiritualAim[]="that performing charitable acts to build a better society is the ultimate goal of life";
$SpiritualAim[]="that promoting peace, harmony, and order to improve life for all sapients is the ultimate goal of life";
$SpiritualAim[]="that seeking to expand the frontiers of knowledge is the ultimate goal of life";
$SpiritualAim[]="that preserving the knowledge and wisdom of the past is the goal of living";
$SpiritualAim[]="that seeking to improve their own lives via self-discipline and training is the goal that all sapients should strive for";

$HolyStructure[]="a religous organization fully integrated into the functions of government";
$HolyStructure[]="a rigid hierachy that answers to a central authority which makes virtually all decisions";
$HolyStructure[]="a rigid	 hierachy with most decisions made at a regional level";
$HolyStructure[]="a rigid hierachy with most decisions made at the planetary level";
$HolyStructure[]="a rigid hierachy with most decisions made at the local level";
$HolyStructure[]="a loose hierachy that answers to a central authority which makes most significant decisions";
$HolyStructure[]="a loose hierachy with most decisions made at the regional level";
$HolyStructure[]="a loose hierachy with most decisions made at the planetary level";
$HolyStructure[]="a loose hierachy with most decisions made at the local level";
$HolyStructure[]="a loose hierachy with most decisions made by individual adherents";
$HolyStructure[]="no real organization above the regional level";
$HolyStructure[]="no real organization above the planetary level";
$HolyStructure[]="no real organization above the local level";
$HolyStructure[]="local organizations without any significant regulations";
$HolyStructure[]="a loose, highly informal organization";
$HolyStructure[]="virtually no formal organization of any kind";
$HolyStructure[]="a rigid hierachy that answers to a central authority which makes virtually all decisions";
$HolyStructure[]="a rigid	 hierachy with most decisions made at a regional level";
$HolyStructure[]="a rigid hierachy with most decisions made at the planetary level";
$HolyStructure[]="a rigid hierachy with most decisions made at the local level";
$HolyStructure[]="a loose hierachy that answers to a central authority which makes most significant decisions";
$HolyStructure[]="a loose hierachy with most decisions made at the regional level";
$HolyStructure[]="a loose hierachy with most decisions made at the planetary level";
$HolyStructure[]="a loose hierachy with most decisions made at the local level";
$HolyStructure[]="a loose hierachy with most decisions made by individual adherents";
$HolyStructure[]="no real organization above the regional level";
$HolyStructure[]="no real organization above the planetary level";
$HolyStructure[]="no real organization above the local level";
$HolyStructure[]="local organizations without any significant regulations";
$HolyStructure[]="a loose, highly informal organization";
$HolyStructure[]="virtually no formal organization of any kind";

$HolyScripture[]="are considered to be the directly transmitted holy words";
$HolyScripture[]="are considered so holy that only the most highly initiated few are allowed to read them";
$HolyScripture[]="are restricted to just the higher levels of religious authority";
$HolyScripture[]="are never translated from their original sacred language that few actual adherents understand";
$HolyScripture[]="are never translated from their original sacred language and services are conducted by rote";
$HolyScripture[]="are rarely taught beyond regular services which are strictly formal rituals";
$HolyScripture[]="are taught in limited ways and used in formal religous rituals";
$HolyScripture[]="are regularly used in rituals and taught to a significant degree for those adherents that are interested";
$HolyScripture[]="are taught regularly and learning is encouraged as is active participation in regular religous rituals";
$HolyScripture[]="are taught regularly in communal settings and used in a limited way in community rituals";
$HolyScripture[]="are studied in formal groups who discuss and interpret the religous teachings";
$HolyScripture[]="are studied in formal groups who discuss and interpret the religous teachings and philisophical questions that extend beyond them";
$HolyScripture[]="are studied in informal groups who are limited by agreed upon topics and references";
$HolyScripture[]="are the starting point for much study though certianly not the limit of any religous studies";
$HolyScripture[]="are considered the starting point of adherent's spirital learning, but the open exchange of concepts and ideas is encouraged";
$HolyScripture[]="are meant for private individual study as each adherent follows their own specific path";
$HolyScripture[]="are never translated from their original sacred language and services are conducted by rote";
$HolyScripture[]="are rarely taught beyond regular services which are strictly formal rituals";
$HolyScripture[]="are taught in limited ways and used in formal religous rituals";
$HolyScripture[]="are regularly used in rituals and taught to a significant degree for those adherents that are interested";
$HolyScripture[]="are taught regularly and learning is encouraged as is active participation in regular religous rituals";
$HolyScripture[]="are taught regularly in communal settings and used in a limited way in community rituals";
$HolyScripture[]="are studied in formal groups who discuss and interpret the religous teachings";
$HolyScripture[]="are studied in formal groups who discuss and interpret the religous teachings and philisophical questions that extend beyond them";
$HolyScripture[]="are studied in informal groups who are limited by agreed upon topics and references";
$HolyScripture[]="are the starting point for much study though certianly not the limit of any religous studies";
$HolyScripture[]="are considered the starting point of adherent's spirital learning, but the open exchange of concepts and ideas is encouraged";
$HolyScripture[]="are meant for private individual study as each adherent follows their own specific path";

// some randomizers
$randomstartype = rand(0,count($startype)-1); 
$mystar =  $startype[$randomstartype];
$randomMyStarName = rand(0,count($MyStarName)-1);
$randomPlanetNOHAB = rand(0,count($PlanetNOHAB)-1); 
$randomPlanetNOHABInner = rand(0,count($PlanetNOHABInner)-1); 
$randomPlanetHAB = rand(0,count($PlanetHAB)-1);
$randomSpecialResources = rand(0,count($SpecialResources)-1); 

// alien randomizers and builders 
$randomAlienBody = rand(0,count($AlienBody)-1); 
$randomAlienSocial = rand(0,count($AlienSocial)-1); 
$randomAlienGov = rand(0,count($AlienGov)-1); 
$randomAlienCustom = rand(0,count($AlienCustom)-1); 
$randomGodView = rand(0,count($GodView)-1);
$randomHolyStructure = rand(0,count($HolyStructure)-1);
$randomSpiritualAim = rand(0,count($SpiritualAim)-1);
$randomHolyScripture = rand(0,count($HolyScripture)-1);

$alien = "the <b><i>".ucfirst($myRandomAlienname)."</i></b> who are ".$AlienBody[$randomAlienBody]." They are ".$AlienSocial[$randomAlienSocial].". ".$AlienCustom[$randomAlienCustom]."  They use a ".$AlienGov[$randomAlienGov]." style of government.<br> They believe in ".$GodView[$randomGodView].".  Their spiritual practices have ".$HolyStructure[$randomHolyStructure].".  They believe ".$SpiritualAim[$randomSpiritualAim]." and their sacred texts ".$HolyScripture[$randomHolyScripture].", though there are some groups who add nuance to those beliefs.";


// How many planets are around those stars
switch($mystar){
	case "Class O - Blue - Star":
	 $PlanetNum = mt_rand(2,14);
	 $PHab = "none";
	 break;
	case "Class B - Blue-White - Star":
	$PlanetNum = mt_rand(2,6);
	$PHab = "none";
	break;
	case "Class A - White - Star":
	$PlanetNum = mt_rand(3,8);
	$PHab = "none";
	break;
	case "Class F - Yellow-White - Star":
	$PlanetNum = mt_rand(4,10);
	$PHab = "habitable";
	break;
	case "Class G - Yellow - Star":
	$PlanetNum = mt_rand(5,11);
	$PHab = "habitable";
	break;
  case "Class K - Orange - Star":
	$PlanetNum = mt_rand(6,12);
	$PHab = "habitable";
	break;
  case "Class M - Red - Star":
	$PlanetNum = mt_rand(2,10);
	 $PHab = "none";
	 break;
  case "Black Hole":
	$PlanetNum = "no";
	$PHab = "none";
	break;
  case "White Dwarf":
	$PlanetNum = mt_rand(2,5);
	$PHab = "none";
	break;
  case "Black Dwarf":
	$PlanetNum = mt_rand(3,6);
	$PHab = "none";
	break;
  case "Brown Dwarf":
	$PlanetNum = mt_rand(2,5);
	$PHab = "none";
	break;
  default:
	$PlanetNum = mt_rand(0,3);
	if($PlanetNum == 0){$PlanetNum = "no";}
	$PHab = "none";
  } 

if ($PHab != "habitable"){$HabNum = "0";} else {$HabNum = mt_rand(1,4);}
$Spread = range(3,$PlanetNum);
shuffle ($Spread);
$HabArray = array_slice($Spread, 0, $HabNum);
sort ($HabArray);
// print_r ($HabArray);

// $CNT=0;
// foreach($HabArray as $key){
//	$Rando[$CNT] = mt_rand(0,4).$CNT;
//	echo "This loop is ".$CNT."<br> And the variable is ".$Rando[$CNT]." <br>";
//	$CNT++;
// }
// print_r ($Rando);

// some very random star names
if (mt_rand(1,100)>85){
  $myRandomStarname = generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1);
}elseif (mt_rand(1,100)>75){
	$myRandomStarname = generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1);
}elseif (mt_rand(1,100)>65){
	$myRandomStarname = generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1);
}elseif (mt_rand(1,100)>55){
	$myRandomStarname = generateRandomConsonant(1).generateRandomVowel(2).generateRandomConsonant(1).generateRandomVowel(1);
}elseif (mt_rand(1,100)>35){
	$myRandomStarname = generateRandomVowel(1).generateRandomConsonant(2).generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1);
}elseif (mt_rand(1,100)>10){
		$myRandomStarname = generateRandomConsonant(2).generateRandomVowel(2).generateRandomConsonant(2).generateRandomVowel(2).generateRandomConsonant(2);
}else{
	  $myRandomStarname = $MyStarName[$randomMyStarName];
}

// some very random habitable planet names
if (mt_rand(1,100)>85){
	for ($c = 0; $c <= 4; $c++){
	$HabName[$c] = generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1);
}
}elseif (mt_rand(1,100)>65){
	for ($c = 0; $c <= 4; $c++){
	$HabName[$c] = generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1);
}
}elseif (mt_rand(1,100)>55){
	for ($c = 0; $c <= 4; $c++){
	$HabName[$c] = generateRandomConsonant(1).generateRandomVowel(2).generateRandomConsonant(1).generateRandomVowel(1).generateRandomConsonant(1);
}
}elseif (mt_rand(1,100)>35){
	for ($c = 0; $c <= 4; $c++){
	$HabName[$c] = generateRandomVowel(1).generateRandomConsonant(2).generateRandomVowel(1).generateRandomConsonant(1).generateRandomVowel(1);
}
}else{
	for ($c = 0; $c <= 4; $c++){
	$HabName[$c] = generateRandomVowel(2).generateRandomConsonant(2).generateRandomVowel(2).generateRandomConsonant(2);
}
}

// print_r ($HabName);
$i = 1;
if ($PlanetNum != "1"){$p = " planets";} else {$p = " planet";}
if ($PlanetNum == "no"){$color = 'black';} else {
    if ($PHab == "none"){$color = 'gray';}	else {$color = 'green';}
}

$hr_title_style = sprintf('height:20px; border:0; box-shadow: 0 10px 10px -10px #333; background-color:%s;', $color);
// sprintf('height: 20px width: 80% border-width: 0 color: blue background-color: %s;', $color);
$hr_style = 'height:2px;width:95%;border-width:0;color:blue;background-color:black';
// Here is were we print stuff out on the screen
$My_StarSystem = sprintf('<h2><b> The %s Star System</b></h2><br> ', ucfirst(strtolower($myRandomStarname)));
$My_StarSystem .= sprintf('<p><b> %s </b> is a %s that has %s%s in orbit. <br><hr style="%s"></p>', ucfirst(strtolower($myRandomStarname)), $mystar, $PlanetNum, $p, $hr_title_style);
If ($PlanetNum == "no"){
		$My_StarSystem .= sprintf('<p> This system has %s%s in orbit.</p>', $PlanetNum, $p);
			} elseif ($PHab == "none") {
		$My_StarSystem .= '<p> This system has no naturally habitable planets in orbit.</p>';
		do { shuffle($PlanetNOHAB); 
			   shuffle($PlanetNOHABInner);
			  if ($PlanetNum > "4" && $i < 4){
			   if ($PlanetNOHABInner[$randomPlanetNOHABInner] ==  "asteroid belt"){$My_StarSystem .= sprintf('<p>The %s Asteroid Belt exists in this orbit where a planet used to be.</p>', ucfirst($GreekName[$i-1]));} else {$My_StarSystem .= sprintf('<p>Planet %s is % .', ucfirst($GreekName[$i-1]), $PlanetNOHABInner[$randomPlanetNOHABInner]);}
				 if ($PlanetNOHABInner[$randomPlanetNOHABInner] ==  "asteroid belt"){$My_StarSystem .= ' ';} elseif (strpos($PlanetNOHABInner[$randomPlanetNOHABInner], "giant") >= 1){$My_StarSystem .= sprintf('and has %s moons.</p>', mt_rand(5,24));}else { $moons = mt_rand(0,4); if($moons >= 2){$My_StarSystem .= sprintf(' and has %s moons.</p>', $moons);}elseif($moons >= 1){$My_StarSystem .= 'and has one moon.</p>';}else{ $My_StarSystem .= '.</p>';}}
		    }else{
			   if ($PlanetNOHAB[$randomPlanetNOHAB] ==  "asteroid belt"){$My_StarSystem .= sprintf('<p>The %s Asteroid Belt exists in this orbit where a planet used to be.</p>', ucfirst($GreekName[$i-1]));} else {$My_StarSystem .= sprintf('<p>Planet %s is %s ', ucfirst($GreekName[$i-1]), $PlanetNOHAB[$randomPlanetNOHAB]);}
				 if ($PlanetNOHAB[$randomPlanetNOHAB] ==  "asteroid belt"){$My_StarSystem .= ' ';} elseif (strpos($PlanetNOHAB[$randomPlanetNOHAB], "giant") >= 1){$My_StarSystem .= sprintf('and has %s moons.</p>', mt_rand(5,24));}else { $moons = mt_rand(0,4); if($moons >= 2){$My_StarSystem .= sprintf(' and has %s moons.</p>', $moons);}elseif($moons >= 1){$My_StarSystem .= 'and has one moon.</p>';}else{ $My_StarSystem .= '.</p>';}}
				}
			$i++;}while ($i <= $PlanetNum);
	} else {
			if ($PlanetNum >= "4" && $HabNum == "4"){$My_StarSystem .= '<p>This system has 4 habitable planets</p>';} elseif ($PlanetNum >= "3" && $HabNum == "3"){$My_StarSystem .= '<p>This system has 3 habitable planets</p>';} elseif ($PlanetNum >= "2" && $HabNum == "2"){$My_StarSystem .= '<p>This system has 2 habitable planets</p>';} elseif ($HabNum =="1") {$My_StarSystem .= '<p>This system has 1 habitable planet</p>';} else {$My_StarSystem .= '<p>This system has no habitable planets.</p>';}
			do { 
				  switch($i){
				   case "1":
				   shuffle($PlanetNOHABInner); 
           if ($PlanetNOHABInner[$randomPlanetNOHABInner] ==  "asteroid belt"){$My_StarSystem .= sprintf('<p>The %s Asteroid Belt exists in this orbit where a planet used to be.</p>', ucfirst($GreekName[$i-1]));} else {$My_StarSystem .= sprintf('<p>Planet %s is %s ', ucfirst($GreekName[$i-1]), $PlanetNOHABInner[$randomPlanetNOHABInner]);}
				   if ($PlanetNOHABInner[$randomPlanetNOHABInner] ==  "asteroid belt"){$My_StarSystem .= ' ';} elseif (strpos($PlanetNOHABInner[$randomPlanetNOHABInner], "giant") >= 1){ $My_StarSystem .= sprintf('and has %s moons. </p>', mt_rand(5,20));} else { $moons = mt_rand(0,4); if($moons >= 2){$My_StarSystem .= sprintf(' and has %s moons.</p>', $moons);}elseif($moons >= 1){$My_StarSystem .= 'and has one moon.</p>';}else{ $My_StarSystem .= '.</p>';}}
					 break; 
					 case "2":
					 shuffle($PlanetNOHABInner); 
           if ($PlanetNOHABInner[$randomPlanetNOHABInner] ==  "asteroid belt"){$My_StarSystem .= sprintf('<p>The %s Asteroid Belt exists between these two planets.</p>', ucfirst($GreekName[$i-1]));} else {$My_StarSystem .= sprintf('<p>Planet %s is %s ', ucfirst($GreekName[$i-1]), $PlanetNOHABInner[$randomPlanetNOHABInner]);}
				   if ($PlanetNOHABInner[$randomPlanetNOHABInner] ==  "asteroid belt"){$My_StarSystem .= ' ';} elseif (strpos($PlanetNOHABInner[$randomPlanetNOHABInner], "giant") >= 1){ $My_StarSystem .= sprintf('and has %s moons.</p>',  mt_rand(5,20));} else  { $moons = mt_rand(0,4); if($moons >= 2){$My_StarSystem .= sprintf(' and has %s moons.</p>', $moons);}elseif($moons >= 1){$My_StarSystem .= 'and has one moon.</p>';}else{ $My_StarSystem .= '.</p>';}}
					 break; 
           default:
					 shuffle($PlanetHAB); 
					 shuffle($PlanetNOHAB);
					 shuffle($PlanetNOHABInner);
					 shuffle($SpecialResources);
					 $EnOh = mt_rand(65,80);
					 $OhTwo = (98-$EnOh);
					 $HiTemp = (mt_rand(2,12)*10);
					 $LowTemp = ($HiTemp - 20);
					 $moons = mt_rand(1,4);
				   if (in_array($i,$HabArray) && $moons >= 2){$My_StarSystem .= sprintf('<hr style="%s"><p>Planet <b>%s</b> is %s and has %s moons.<br> This habitable planet has a mass %s that of Earth and a radius which is %s that of Earth and an atmosphere that is %s percent oxygen, %s percent nitrogen, %s percent carbon dioxide, and trace amounts of helium, neon, argon, hydrogen, and trace amounts of other elements. The average temperature is between %s &#176; F and %s &#176; F on average.  %s </p>', $hr_style, ucfirst(current($HabName)), $PlanetHAB[$randomPlanetHAB], $moons, (mt_rand(1,50)/10), (mt_rand(5,17)/10), $OhTwo, $EnOh, (mt_rand(3,7)/100), $LowTemp, $HiTemp, $SpecialResources[$randomSpecialResources]); next($HabName);if ($i != $HabArray[0]){$My_StarSystem .= sprintf('<p>This world is a colony of <i>%s</i> <br><hr style="%s">', ucfirst($HabName[0]), $hr_style);} else {	$My_StarSystem .= sprintf('<p>This world is mainly populated by %s <br><hr style="%s">', $alien, $hr_style);} } elseif (in_array($i,$HabArray) && $moons >= 1){	$My_StarSystem .= sprintf('<hr style="%s"><p>Planet <b>%s</b> is %s and has %s moon. <br> This habitable planet has a mass %s that of Earth and a radius which is %s that of Earth and an atmosphere that is %s percent oxygen, %s percent nitrogen, %s percent carbon dioxide, and trace amounts of helium, neon, argon, hydrogen, and trace amounts of other elements. The average temperature is between %s &#176; F and %s &#176; F on average.  %s </p>', $hr_style, ucfirst(current($HabName)), $PlanetHAB[$randomPlanetHAB], $moons, (mt_rand(1,50)/10), (mt_rand(5,17)/10), $OhTwo, $EnOh, (mt_rand(3,7)/100), $LowTemp, $HiTemp, $SpecialResources[$randomSpecialResources]); next($HabName);if ($i != $HabArray[0]){$My_StarSystem .= sprintf('<p>This world is a colony of <i>%s</i> <br><hr style="%s">', ucfirst($HabName[0]), $hr_style); } else { $My_StarSystem .= sprintf('<p>This world is mainly populated by %s <br><hr style="%s">', $alien, $hr_style);} } if (!in_array($i,$HabArray) && $i>=3){if ($PlanetNOHABInner[$randomPlanetNOHABInner] ==  "asteroid belt"){$My_StarSystem .= sprintf('<p>The %s Asteroid Belt exists in the orbit where a planet used to be. </p>', ucfirst($GreekName[$i-1]));} elseif ($PlanetNOHABInner[$randomPlanetNOHABInner] ==  "asteroid belt"){	$My_StarSystem .= ' ';} elseif (strpos($PlanetNOHABInner[$randomPlanetNOHABInner], "giant") >= 1){ $My_StarSystem .= sprintf('<p>Planet %s is %s and has %s moons. </p>', (ucfirst($GreekName[$i-1])), $PlanetNOHABInner[$randomPlanetNOHABInner], mt_rand(5,24));} else { $My_StarSystem .= sprintf('<p>Planet %s is %s and has %s moons. </p>', (ucfirst($GreekName[$i-1])), $PlanetNOHABInner[$randomPlanetNOHABInner], mt_rand(2,5));}}elseif ($PlanetNOHAB[$randomPlanetNOHAB] ==  "asteroid belt"){ $My_StarSystem .= sprintf('<p>The %s Asteroid Belt exists in the orbit where a planet used to be. </p>', ucfirst($GreekName[$i-1]));} elseif ($PlanetNOHAB[$randomPlanetNOHAB] ==  "asteroid belt"){ $My_StarSystem .= ' ';} elseif (strpos($PlanetNOHAB[$randomPlanetNOHAB], "giant") >= 1){ $My_StarSystem .= sprintf('<p>Planet %s is %s  and has %s moons.</p>', ucfirst($GreekName[$i-1]), $PlanetNOHAB[$randomPlanetNOHAB], mt_rand(5,24));} else { $My_StarSystem .= sprintf('<p>Planet %s is %s  and has %s moons.</p>', ucfirst($GreekName[$i-1]), $PlanetNOHAB[$randomPlanetNOHAB], mt_rand(2,5));}
				   break;
				   }
          
				 
			  $i++;}while ($i <= $PlanetNum);
			 }
	

$My_StarSystem .= '<form name="myform" action=" " method="POST">';
$My_StarSystem .= '<input type="hidden" name="check_submit" value="1"/>';
$My_StarSystem .= '<label> </label><br><br>';
$My_StarSystem .= '<input style="background-color:lightgrey; border-color:black; color:black;" type="submit" VALUE="Hit the button for a fresh star system!"/>';
$My_StarSystem .= '</form>';
$My_StarSystem .= '<p><hr></p>';
$My_StarSystem .= '<p>Inspired by all the random generators on the internet and every space opera novel ever published and every science fiction role-playing game ever created.</p>';
$My_StarSystem .= '<p>Please, support the createor and visit, <a href="https://www.jkhoffman.com/use-your-words/">Use Your Words, a blog by JK Hoffman</a>.</p>';
$My_StarSystem .= '<p><hr></p>';
 
return $My_StarSystem;
}

// these are the random string functions for the random names
function generateRandomString($length = 25) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $charactersLength = strlen($vcharacters);
    $randomString = '';
    for ($iRS = 0; $iRS < $length; $iRS++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateRandomVowel($vlength = 25) {
    $vcharacters = 'aeiouy';
    $vcharactersLength = strlen($vcharacters);
    $randomVowel = '';
    for ($iRV = 0; $iRV < $vlength; $iRV++) {
        $randomVowel .= $vcharacters[rand(0, $vcharactersLength - 1)];
    }
    return $randomVowel;
}

function generateRandomConsonant($clength = 25) {
    $ccharacters = 'bcdfghjklmnpqrstvwxz';
    $ccharactersLength = strlen($ccharacters);
    $randomConsonant = '';
    for ($iRC = 0; $iRC < $clength; $iRC++) {
        $randomConsonant .= $ccharacters[rand(0, $ccharactersLength - 1)];
    }
    return $randomConsonant;
}

?>