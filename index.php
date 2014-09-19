<?php

// A test

require("common.php");
$db = db_connect();

if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 1) {	$admin = 1;} else {	$admin = 0;	}
if (strpos(curPageURL(), "localhost") !== false) 		{	$local = 1;} else {	$local = 0;	}

require("update_counter.php");

// The properties are sorted alphabetically once the array is created.

$p = array();

// A blank one for additions
if (0) {
$p[''] = array(
"directory"	=> "",
"sal_auc"	=> "",
"title"		=> "",
"pdf"		=> "",
"text"		=> "
");
}



$p['AAAHammondsBlock'] = array(
"image1"	=> "commercial/HammondsBlock/land1-500.jpg",
"image2"	=> "commercial/HammondsBlock/land2-500.jpg",
"directory"	=> "commercial",
"sal_auc"	=> "AUCTION: ",
"title"		=> "Hammond's Block",
"pdf"		=> "HammondsBlock/HammondsBlock.pdf",
"text"		=> "88 Main St, Koondrook, Victoria

Saturday, 6th September 2014
ON SITE 11am

Murrabit, Victoria
");

// DIVINE
$p['Divine'] = array(
"image1"	=> "residential/Divine/house-500.jpg",
"directory"	=> "residential",
"sal_auc"	=> "For Sale:",
"title"		=> "Divine",
"pdf"		=> "Divine/Divine.pdf",
"text"		=> "This attractive weatherboard home has been expertly renovated by the owner.
Situated on a spacious corner block close to the Murray River, the 150 square metre home has plenty of character. It features three bedrooms plus study/office, lounge, bathroom  and laundry.
There is a split system air conditioning as well as ceiling fans in each of the bedrooms.
A spacious verandah suitable for entertaining and a carport are surrounded by a relaxing garden setting and the 1125 square metre  is well fenced.
In the back yard is a self-contained two bedroom bungalow with bathroom-spa and split system air conditioning, and a large shed complete with roller door.
The property has three phase power.
");

// BOOKIT ISLAND
$p['Bookit Island'] = array(
"image1"	=> "rural/BookitIsland/House-500.jpg",
"image2"	=> "rural/BookitIsland/River-500.jpg",
"image3"	=> "rural/BookitIsland/ShearingShed-500.jpg",
"directory"	=> "rural",
"sal_auc"	=> "For Sale:",
"title"		=> "Bookit Island",
"pdf"		=> "BookitIsland/BookitIsland.pdf",
"text"		=> "Barham NSW.

Private Treaty 'Bookit Island' Riverina Property. Situated 15 Kilometres Barham on main Deniliquin road. Land area: 2026 ha (5006 acres).
Unrestricted Freehold. Double frontages to Wakool River and Bookit Creek.
Frontage to Merribit Creek. Situated 15 Kilometres East from Barham on main Deniliquin road.
The land is of quality grey loam self mulching soils, river silt, red loam to sandy loam and sand hill country.
Ideal for rice and cereal crops and very suitable for lucerne grown on the lighter well drained soils.

About 1,200 acres of the property is well laid out for irrigation to laser and contour systems. Superb water supply from the river and creeks which have about 19 kilometres frontage.
Licensed to pump 446 units of general security water plus supplementary water when available by two electric and three diesel pumps.
Also supplied by Murray Irrigation Ltd there are 535 megalitres of general security water plus 675 delivery entitlements.
The buildings comprise of a fully renovated brick veneer homestead, situated in a sheltered position on the north bank of the Wakool River with lawn, garden and tree surrounds.
Auto sprinkler system. Double garage, tennis court.

Outbuildings and yards: Shearing shed five stands. Ample holding space. Sheep yards and loading ramp. Steel cattle yards with crush and loading ramp.
Three machinery sheds, barn, hay shed, silos. The fencing is in good order and sub-divided into twenty-six paddocks.

'Bookit Island' has been farmed and well managed by the owners and has produced high yielding crops and is renowned for its breeding and fattening capabilities.
Murray pine and natives on the sand hills, scattered box timber clumps and red gum along the river and creeks provide great sheltered areas
together with the abundance of water creates a wonderful environment for livestock.
Handy to Barham (on the Murray River) with all facilities, professional, shopping and education. School bus goes past the front entrance.
It is served by mail thrice weekly and is connected to three phase power and telephone.

Estimated carrying capacity. Sheep: 2500 Ewes or Cattle: 350 Breeders.
Mixed farming enterprise: Grazing-Cropping-Lucerne.

'Bookit Island' will stand up to any inspection because of its versatility and aesthetic appeal.
Inspections by appointment only through the selling agents.
");

// PEACEFUL WATERS
$p['Peaceful Waters'] = array(
"image1"	=> "rural/PeacefulWaters/house-500.jpg",
"image2"	=> "rural/PeacefulWaters/river-500.jpg",
"image3"	=> "rural/PeacefulWaters/grass-500.jpg",
"directory"	=> "rural",
"sal_auc"	=> "For Sale:",
"title"		=> "Peaceful Waters",
"pdf"		=> "PeacefulWaters/PeacefulWaters.pdf",
"text"		=> "Barham NSW.
Frontage to Thule creek.
Situated 25 kilometres from Barham by main bitumen road.
Land area: 378.38 ha 935 acres.
Water:290 megalitres MIL.120 megalitres Pumped ex Thule creek.
420 Delivery entitlements.2 x Pumps (12&quot; &amp; 6&quot;).
Approximately 800 acres laid out.50 acres Lasered.
Gypsum deposits.
Brick Veneer Home four bedrooms.
Old shearing shed Sheep &amp; cattle yards.
For genuine sale as vendor retiring.
");

// WENEEDA
$p['Weneeda'] = array(
"image1"	=> "rural/Weneeda/house-500.jpg",
"image2"	=> "rural/Weneeda/milking-500.jpg",
"image3"	=> "rural/Weneeda/irrigation-500.jpg",
"directory"	=> "rural",
"sal_auc"	=> "For Sale:",
"title"		=> "Weneeda",
"pdf"		=> "Weneeda/Weneeda.pdf",
"text"		=> "This 667 acre dairy located 11km from the renowned grazing area of Kalangadoo in the south east of South Australia is a rare parcel that offers some of the most reliable grazing in the country.
The property features a 60 stand rotary dairy including auto draft, milk monitors, cup removers, production feeding, two residences and ample shedding.
The farm features the security of irrigation with over 256 ac of irrigation on the property. With the irrigation comes two water licences 52.60 haIE from the unconfined aquifer and 47.8 haIE from the confined aquifer, which is a rare commodity.
Currently the property is running approximately 400 cows with room for expansion and will impress all inspectors.
. 750mm rainfall, 270.07 Hectares or 667.34 Acres of heavy loam red gum studded country.
. 60 stand rotary Dairy
. 1x 16000 Litre vat
. 1x 9000 Litre Vat

256.6 Acres of irrigation including:
. 123 Acre pivot zimattic
. 21 Acre pivot zimattic
. 21 Acre pivot not equipped
. 92 Acres of sprinklers, ran by an electric pump
. 100.4 ha/IE Water allocation including 47.8 ha/IE confined aquifer allocation
. 1000 kl Industrial license
. Two Residences

. Three Bedroom Mount Gambier Stone Residence
. Two Lounges
. Two Bedroom, Timber Home, Double Garage
. Bus to local school
. Workshop including 1/3rd concrete workshop
. Woolshed &amp; Yards
. Cattle Yards
");

// LANNIX CASTLE
$p['AALannix Castle'] = array(
"image1"	=> "lifestyle/LannixCastle/house-500.jpg",
"image2"	=> "lifestyle/LannixCastle/shed-500.jpg",
"image3"	=> "lifestyle/LannixCastle/paddock-500.jpg",
"directory"	=> "lifestyle",
"sal_auc"	=> "AUCTION:",
"title"		=> "Lannix Castle",
"pdf"		=> "LannixCastle/LannixCastle.pdf",
"text"		=> "KOONDROOK, VICTORIA<br>
<u>Saturday, September 13, 2014 on site 11am.</u>
Address: 2265 Kerang - Koondrook Road, Koondrook.<br>
Land Area: 6.767 hectares (16.72 acres); Subdivision potential.
High Reliability Water: 26.5 ml.
Weatherboard home. Renovated. Three bedrooms.
3 phase power; split system air conditioning.
Stable 3 bay under cover yards.
3 paddocks, water troughs.
Hay shed. Lock up shed. Well fenced.
Ideal spelling, agistment, horses, cattle.
Main bitumen road 21.5 km from Kerang; 1 km Koondrook central.
");

// COCKRAN PARK
$p['AAACockran Park'] = array(
"image1"	=> "rural/CockranPark/house2-500.jpg",
"image2"	=> "rural/CockranPark/shed-500.jpg",
"image3"	=> "rural/CockranPark/trees-500.jpg",
"directory"	=> "rural",
"sal_auc"	=> "AUCTION:",
"title"		=> "Cockran Park",
"pdf"		=> "CockranPark/CockranPark.pdf",
"text"		=> "<u>Friday 12th September 2014 at 11.00am.</u>
Venue: Community Centre,15 Murray Street,Barham NSW

Wakool, NSW.
GRAZING, CROPPING, RICE, LUCERNE.
Bernard M Ryan & Co has been favoured with instructions from I C Brown to offer his Wakool grazing property by Public Auction on the above date.
“Cockran Park” is situated 5 kilometres at 5720 Deniliquin Road, Wakool, NSW.
Land Area:  320.1 hectares (790 acres).
820 Delivery Entitlements. Holding Reference: W268.
450 megalitres Bore. 4 Bore pumps and motors. 5 megalitres MIL Water.
Four bedroom home. Two bedroom cottage. Bungalow.
Two carports. Garden surrounds. Wakool filtered water.
Machinery shed. Water troughs - 2 x 5000 litre.
Cattle yards, crush, loading ramp.
Dairy 30 aside, swing over (not in use).
Sand Hill country.
Rice growing area. Suitable Grazing, Cropping and Lucerne.
Remarks: The property has double frontage to the Cockran Creek, has excellent shade and shelter and is renowned for its fattening and grazing capabilities.
For genuine sale. Inspections invited and recommended. Enquiries through the selling agents.
");

// THE HALL BLOCK
$p['The Hall Block'] = array(
"image1"	=> "rural/TheHallBlock/front-500.jpg",
"image2"	=> "rural/TheHallBlock/trees-500.jpg",
"image3"	=> "rural/TheHallBlock/creek-500.jpg",
"directory"	=> "rural",
"sal_auc"	=> "For Sale:",
"title"		=> "The Hall Block",
"pdf"		=> "TheHallBlock/TheHallBlock.pdf",
"text"		=> "NIEMUR VIA MOULAMEIN, NSW.

305.4 hectares (754.6 acres).
Double frontage Murrain Yarrein Creek.
Water: 179 megalitres Murray Irrigation Ltd (Reference Holding Number: W126A).
100 acres laid out.
Red Gum, Box, Red and Grey Soils.
Grazing and Cropping.

Enquiries and appointments through the selling agents.
");

// BARHAM APARTMENTS
$p['Barham Apartments'] = array(
"image1"	=> "residential/BarhamApartments/Apt1-500.jpg",
"image2"	=> "residential/BarhamApartments/kitchen-500.jpg",
"image3"	=> "residential/BarhamApartments/Dining-500.jpg",
"directory"	=> "residential",
"sal_auc"	=> "For Sale:",
"title"		=> "Barham Apartments",
"pdf"		=> "BarhamApartments/BarhamApartments.pdf",
"text"		=> "Twin two storey apartments.
Each one 188 square metres under roof.
Downstairs: Kitchen-dining-living room, study area, WC, laundry.
Upstairs: Three bedrooms, bathroom, balcony.
Fully furnished incl. dishwasher, electric stove.
Each apartment with separate carport.
Short walk to shopping centre and Club.
Land Area: 253 square metres x2.
");

// CHRISTINA
$p['Christina'] = array(
"image1"	=> "residential/Christina/front-500.jpg",
"image2"	=> "residential/Christina/kitchen-500.jpg",
"image3"	=> "residential/Christina/living-500.jpg",
"directory"	=> "residential",
"sal_auc"	=> "For Sale:",
"title"		=> "Christina",
"pdf"		=> "Christina/Christina.pdf",
"text"		=> "Three bedroom home with loft.
235 square metres under roof.
Master bedroom with ensuite.
Open kitchen, living, dining.
Murray pine polished floor boards.
Bathroom, Laundry and separate WC.
Security lights, pop-up sprinklers, lawn, car space.
Short walk to shopping centre and Club.
Land Area: 507 square metres.
");

// WOOLAWAY
$p['Woolaway'] = array(
"image1"	=> "lifestyle/Woolaway/driveway-500.jpg",
"image2"	=> "lifestyle/Woolaway/kitchen-500.jpg",
"image3"	=> "lifestyle/Woolaway/lake2-500.jpg",
"directory"	=> "lifestyle",
"sal_auc"	=> "For Sale:",
"title"		=> "Wool - A Way",
"pdf"		=> "Woolaway/Woolaway.pdf",
"text"		=> "Land Area: 34.7 hectares (85.74 acres).
Water: 108 megalitres
20.2 ha (50 ac) lasered country piped irrigation 4 bays.
10.1 ha (25 ac) forest;
Modern homestead. Cathedral ceilings. 4 bedrooms. Verandah.
Open plan kitchen/dining/ Living room.
Gas stove, rangehood, pantry.
Vinyl floor planking.
Reverse cycle air conditioning. Fans.
Coonara heater, Nobo electric heater.
Bathroom; laundry; outdoor entertaining area.
Bungalow, 2 bedrooms, bathroom, fans, Coonara combustion wood heater.
3 Rain tanks, 3 dams, lift pump.
2 Garden sheds.
Shed, workshop, cattle yards.
Remarks: Property suitable for running cattle and sheep; oats and hay.
Enquiries and appointments through the selling agents.
");

// GOLDEN RIVERS WALNUTS
$p['Golden Rivers Walnuts'] = array(
"image1"	=> "rural/GoldenRiversWalnuts/Garden-500.jpg",
"image2"	=> "rural/GoldenRiversWalnuts/BackVerandah-500.jpg",
"image3"	=> "rural/GoldenRiversWalnuts/WalnutPicking-500.jpg",
"directory"	=> "rural",
"sal_auc"	=> "For Sale:",
"title"		=> "Golden Rivers Walnuts",
"pdf"		=> "GoldenRiversWalnuts/GoldenRiversWalnuts.pdf",
"text"		=> "Land Area:  113 ha (approx. 280 ac)

Goulburn Murray Water: 206.4 megalitres High Reliability 117.1 megalitres Low Reliability
Handy Murray River town.
The farm comprises of 7500 producing walnut trees, nine to 13 years old. Potential to expand.
All equipment to run orchard included.
Water filtration system with automatic fertigation application.
Current owners also accommodate beef cattle and grow seasonal crops onion seed and vegetables pumpkin and zucchini.
Stock yards, dairy converted to undercover race and storage, large machinery sheds x 2, solar panels main shed, large dam, rain water tanks.
Unit with split system air conditioning.

HOMESTEAD

Well-appointed featuring five bedroom homestead, built-in-robes, large office, split system air conditioning, built in desk and cupboards.
Main bedroom, walk-in robes, ensuite, bathroom, separate shower, solar hot water service.
Ducted A/C, wood fire, gas heater, TV room, large lounge/dining room, large kitchen/dining.
Well maintained lawns and garden, spacious entertaining deck, outdoor kitchen, BBQs x2, ceiling fans, overlooking orchard.
Homestead has three water supplies.
Established walnut farm offered on a walk-in-walk-out basis.

Enquiries and appointments through the selling agents.
");

// MERRAN VALE
$p['Merran Vale'] = array(
"image1"	=> "rural/MerranVale/House-500.jpg",
"image2"	=> "rural/MerranVale/shed-500.jpg",
"image3"	=> "rural/MerranVale/river-500.jpg",
"directory"	=> "rural",
"sal_auc"	=> "For Sale:",
"title"		=> "Merran Vale",
"pdf"		=> "MerranVale/MerranVale.pdf",
"text"		=> "Double frontage to Merran Creek.
Land Area: 1346.4 hectares (3327 ac).
Perpetual lease: 99.15 ha (245ac).
Total Land Area: 1445.56 ha (3572 ac).
Plus 1619 ha (4000 ac) lease.
Water: 21 megalitres Domestic &amp; Stock.
111 megalitres Low Security Water.
900 acres lasered (1290 acres waterable).
Pumps: Kelly and Lewis - 1 x 15&rdquo; diesel Little Murray River; 1 x 15&rdquo; electric Merran Creek;
1 x 10&rdquo; electric Little Murray River; 1 x 9&rdquo; re-use diesel pump.
Homestead: Solid concrete, iron roof, 3 bedrooms, fully insulated.
House: Weather board, iron roof.
New septic system.
Air conditioning, wood fire (as new).
Three phase power.
Shearing Shed 3 stands to down tubes no hand pieces.
2 x sets sheep and cattle yards.
Barn, bulk shed, hay shed 86&rsquo; x 68&rsquo;, tobacco shed, workshop, machinery shed 60&rsquo; x 30&rsquo;, tractor shed, bull shed x 5.
6 Silos.
30,000 gallon rain water tanks.
Water 1068 megalitres General Security (negotiable).
Vendors retiring.
");

// WOMPINNI
$p['Wompinni'] = array(
"image1"	=> "lifestyle/Wompinni/house-500.jpg",
"image2"	=> "lifestyle/Wompinni/river3-500.jpg",
"image3"	=> "lifestyle/Wompinni/shed_inside-500.jpg",
"directory"	=> "lifestyle",
"sal_auc"	=> "For Sale:",
"title"		=> "Wompinni",
"pdf"		=> "Wompinni/Wompinni.pdf",
"text"		=> "(Place in the shade) Cal Lal NSW.
Murray River Frontage.
Land Area: 61.92 hectares (153 acres).
Situated 118km down stream from Mildura.
83km from Wentworth. 100km from Renmark.
Federation Homestead. Pergola BBQ SPA.
Five cabins. Shearing shed, Machine shed, General shed.
Remarks: Camping, fishing, bush walks, magnificent views of the
Murray River cliffs & hills. Bird life supreme, Wild life.
Great position for hide away secluded resort.
Enquiries and inspection through the selling agent.
");

// OVERDENE
$p['Overdene'] = array(
"image1"	=> "rural/Overdene/shed-500.jpg",
"image2"	=> "rural/Overdene/shearingshed-500.jpg",
"image3"	=> "rural/Overdene/cattle-500.jpg",
"directory"	=> "rural",
"sal_auc"	=> "For Sale:",
"title"		=> "Overdene",
"pdf"		=> "Overdene/Overdene.pdf",
"text"		=> "MOULAMEIN NSW
&bull; Situated 6 km north of Moulamein.
&bull; Approximately 618.4 hectares (1528 acres).
&bull; Water: 51 megalitres Domestic &amp; Stock.
&bull; Shearing shed: 2 stand, 3 shoots, not equipped.
&bull; Sand: 250 acres.
&bull; Steel cattle yards.
&bull; 55 acres laser contour.
&bull; 4 paddocks. Power not connected (transformer required).
&bull; 5 dams pumped ex Billabong Creek. 8&rdquo; pump.
Remarks: Excellent, sound grazing property.
Enquiries and appointments through the selling agents.
");

// BIG BEND
$p['Big Bend'] = array(
"image1"	=> "lifestyle/BigBend/BigBend-500.jpg",
"image2"	=> "lifestyle/BigBend/House-500.jpg",
"image3"	=> "lifestyle/BigBend/Woods-500.jpg",
"directory"	=> "lifestyle",
"sal_auc"	=> "For Sale:",
"title"		=> "Big Bend",
"pdf"		=> "BigBend/BigBend.pdf",
"text"		=> "Land area: Approximately 15.82 hectares (40 acres). Two titles.

Water: 76 Megalitres General security allocation. Pumped from the Murray River,
0.9556 Hectares (4 Acre) Red Gum Bush.
187 Square metre Colorbond Bungalow, three bedrooms, kitchen, dining, living,
TV Antenna, Rain tank, Power connected, Septic tank.
&quot;Big Bend&quot;: Situated on a lovely bend of the river, seven kilometres by bitumen
road, East, upstream from Barham, on the Little Forest Lane.
Well sheltered with frontage to the Murray River, this lifestyle property offers a host
of pursuits as well as Boating, Skiing, Fishing, Ponies, Livestock.
Inspection invited. Enquiries through the selling agents.
");

// BANYULA
$p['Banyula'] = array(
"image1"	=> "lifestyle/Banyula/house-500.jpg",
"image2"	=> "lifestyle/Banyula/shed-500.jpg",
"image3"	=> "lifestyle/Banyula/grassland-500.jpg",
"directory"	=> "lifestyle",
"sal_auc"	=> "For Sale:",
"title"		=> "Banyula",
"pdf"		=> "Banyula/Banyula.pdf",
"text"		=> "35 McGrath Road, Teal Point.
Located 6 km from Koondrook on Koondrook - Kerang Road.
Land Area: 7.28 hectares (18 acres). Lasered.
18 Megalitres High Reliability Water Right.
Two Megalitres Domestic &amp; Stock.
Brick Veneer Home (23 Squares Living Area).
Three Bedroom all with built in wardrobes, main B/R with large WIR, ensuite and corner spa.
Study; Large Double Garage with Roller Doors and separate storage room.
Blackwood Kitchen; St George Wall Oven; Electric 900mm Hotplates; Range Hood, Miele Dishwasher; 2 x large pantry cupboards.
Heat Charm Wood Heater and Floor Heating throughout. Ducted Evaporative Air Conditioning.
Quality fittings throughout.
Verandah all round.
Large Machinery Shed with 6m lockup bay and roller door.
Shed with three open bays and a lockup section.
Fenced off Vegetable Garden with permanent sprinklers.
Large variety of fruit trees.
2 x 45,000 litre concrete underground Rain Water Tanks.
2 x Computerised Watering Systems.
6&rdquo; Irrigation Pump.
Compost Business Negotiable.
");

// KINGSGROVE ESTATE
$p['Kingsgrove Estate'] = array(
"image1"	=> "lifestyle/KingsgroveEstate/FrontDriveKingsgrove1-500.jpg",
"image2"	=> "lifestyle/KingsgroveEstate/LakeAndFountain-500.jpg",
"image3"	=> "lifestyle/KingsgroveEstate/3Rooms-500.jpg",
"directory"	=> "lifestyle",
"sal_auc"	=> "For Sale:",
"title"		=> "Kingsgrove Estate",
"pdf"		=> "KingsgroveEstate/KingsgroveEstate.pdf",
"text"		=> "Lifestyle - Water Views
6.8 km from Barham on the East Barham Road.
Land area: 6.607 ha (16 ac.), Water: 14 ML ex Murray River. Magnificent four bedroom Brick home.
420 square metres under Roof. Designer kitchen with granite bench tops.
Butler's pantry, Unique combination gas &amp; electric infra red cook top. Fisher &amp; Paykel Oven and dishwasher.
Separate formal dining room and large lounge, plush carpet &amp; drapes (German curtain rail easy track)
extends from the front entrance which features six columns. Three generous bedrooms, large study or fourth bedroom.
Present utility area under roof – prospective 5th bedroom or study. Master bedroom, ensuite &amp; dressing room.
Second &amp; third bedrooms. Walk in robe &amp; built in wardrobe, lavish family bathroom &amp; powder room.
Living entertaining&nbsp; area connects to the back verandah, large back terrace &amp; garage.
5 Zoned In-floor heating,&nbsp; also Reverse cycle refrigerated air conditioning zoned.
Zoned central vacuum cleaning. TV Antenna. Two car garage. Four space machinery shed.
Land scaped garden, wisteria &amp; rose arches, roses &amp; ornamental tree surrounds. BBQ area.

Supply of water from the Murray River via the Bonnie Doon Syndicate fills the natural lake
(which includes a fountain) and the creek. Underground watering system throughout. Rain tanks.
'Kingsgrove Estate' provides a lifestyle environment with water views from every angle, the natural beauty
and bird life enhance the area as a nice place to live. Room for Tennis court, Vineyard, Native plants, Vegetables.
Suitable Trail riding, ponies, fishing, boating &amp; many pursuits. School bus at gate.

Inspection invited through the selling agent by appointment.
");

// BOX PARK
$p['Box Park'] = array(
"image1"	=> "rural/box%20park/BoxPark1.jpg",
"image2"	=> "rural/box%20park/box2.jpg",
"image3"	=> "rural/box%20park/box5.jpg",
"directory"	=> "rural",
"sal_auc"	=> "For Sale:",
"title"		=> "Box Park",
"pdf"		=> "box park/boxpark.pdf",
"text"		=> "378.8 ha (960 ac). Water: 763 share water entitlement, 235 ha lasered, recycle system, 200 acres oats and barley,
Approved rice area 60 x 90 shearing shed, 36 x 32 header shed, 40 x 32 hay shed.
Subdivided into 14 paddocks
");


function insert_image($db, $property_id, $location, $image) {
	$Q = "insert into images (property_id, location, image) values (
			 ".$property_id.",
			'".$location."',
			'".$image."'
			)
			on duplicate key update
			property_id	=  ".$property_id.",
			location	= '".$location."',
			image		= '".$image."'";
	execute($db, $Q, "index.insert_image.1");
}


// Put the contents of the array into the database
if (0) {
	foreach ($p as $property) {
		// Insert the entry
		// Insert the entry
		$Q = "insert into properties (title, pdf, sal_auc, front_page, text, directory, status) values (
				\"".$property['title']."\",
				\"".$property['pdf']."\",
				\"".strtoupper($property['sal_auc'])."\",
				 'Yes',
				\"".addslashes($property['text'])."\",
				 '".$property['directory']."',
				 'Not Sold'
				)
				on duplicate key update
				pdf 		= \"".$property['pdf']."\",
				sal_auc 	= \"".strtoupper($property['sal_auc'])."\",
				front_page 	=  'Yes',
				text 		= \"".addslashes($property['text'])."\",
				status 		=  'Not Sold'";
		execute($db, $Q, "index.1");

		$property_id = mysql_insert_id();

		// Insert the images
		for ($i = 1; $i < 5; $i++) {
			$im = "image".$i;
			if (isset($property[$im]) && strlen($property[$im]) > 0) { insert_image($db, $property_id, 'front_page', $property[$im]); }
		}
	}

	// Sort the array alphabetically according to the keys
	ksort($p);

//Get the data out of the database
} else {
	$Q = "select 	*
			from 	properties
			where 	front_page 	= 'Yes'
			and		visible 	= 'Yes'
			order	by sal_auc, title asc";
	if (!($res = mysql_query($Q, $db))) {
		report_error($db, "display_properties.1".$Q, $Q);
	} else if (mysql_num_rows($res) > 0) {
		$p = array();
		$i = 0;
		while($row = mysql_fetch_array($res)) {
			// Insert this entry into the array
			$p[$i] = array( 	"property_id"	=> $row['property_id'],
								"pdf" 			=> $row['pdf'],
								"sal_auc" 		=> $row['sal_auc'],
								"title" 		=> $row['title'],
								"text" 			=> $row['text'],
								"directory"		=> $row['directory'],
								"details" 		=> strlen($row['details']),
								"status" 		=> $row['status']
								);

			// Get and insert the images
			$Q = "select 	*
					from 	images
					where 	property_id = ".$row['property_id']."
					and		front_page	= 1
					order	by iorder";
			if (!($ires = mysql_query($Q, $db))) {
				report_error($db, "index.2".$Q, $Q);
			} else if (mysql_num_rows($ires) > 0) {
				$j = 1;
				while($irow = mysql_fetch_array($ires)) {
					// Update the order
					//$Q = "update images set iorder = ".$j." where image_id = ".$irow['image_id'];
					//execute($db, $Q, "index.3");

					$image = "image".$j++;
					$p[$i][$image] = $irow['location']."/".$irow['image'];
				}
			}

			$i++;
		}
	}
}


if (isset($_GET['manual'])) {
	$manual = $_GET['manual'];
} else {
	$manual = 0;
	update_counter($db, "Home");
}

if (isset($_POST['key_num'])) {
	$key_num = $_POST['key_num'];
} else if (isset($_GET['key_num'])) {
	$key_num = $_GET['key_num'];
} else {
	$key_num = -1;
}

// Increment or reset the $key_num value
$key_num++;
if ($key_num == count($p)) {
	$key_num = 0;
}

print("
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Barham Real Estate</title>
<link href='css/oneColElsCtrHdr.css' rel='stylesheet' type='text/css' />
<script src='SpryAssets/SpryMenuBar.js' type='text/javascript'></script>
<link href='SpryAssets/SpryMenuBarHorizontal.css' rel='stylesheet' type='text/css' />
<link href='SpryAssets/SpryMenuBarVertical.css' rel='stylesheet' type='text/css' />
<style type='text/css'>
<!--
.sale {	color: #F00;
}
.green {	color: #060;
	font-weight: 100;
}
.large {
	font-size: 14pt;
}
.red {
	color: #F03;
}
.style3 {color: #060}
.style11 {font-size: 16pt}
.style17 {font-size: 14px}
.style18 {color: #F03; font-size: 14px; }
-->
</style>

<script language='JavaScript' type='text/JavaScript'>
<!--

function start() {
	//alert('key_num=".$key_num."');
");

if ($manual == 0) {
	print("setTimeout('reload()', 7000);");
	$title = "Click anywhere to stop the screen rotating.";
} else {
	$title = "Click anywhere to view the next property.";
}

print("
}

function reload() {
	document.order.submit();
}

function body_func() {
	if (document.order.brochure.value == 0) {
	");

	if ($manual == 0) {
		// We want to stop the page on the current property when they go into manual mode
		print("window.location = 'index.php?manual=1&key_num=".($key_num-1)."';");
	} else {
		print("window.location = 'index.php?manual=1&key_num=".$key_num."';");
	}

	print("

	// Reset the value of brochure so the clicking keeps rotating properties
	} else {
		document.order.brochure.value = 0;
	}
}


function update_counter(title) {
	// Set brochure to 1 to tell the window not to reload with the next item
	document.order.brochure.value = 1;

	// Check if the title has quotes around it
	title = title.replace(/\"/g, '');

	var xmlhttp;
	// code for IE7+, Firefox, Chrome, Opera, Safari
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	// code for IE6, IE5
	} else {
		xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
	}

	// Receiving function
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			eval(xmlhttp.responseText);
		}
	}

	// Sending section
	if (0) {
		window.open('update_counter_ajax.php?title='+title, 'UpdateCounter', 'scrollbars=yes,width=600,height=300,left=0,top=0');
	} else {
		xmlhttp.open('GET', 'update_counter_ajax.php?title='+title, true);
		xmlhttp.send();
	}
}

//-->
</script>

</head>

<body class='oneColElsCtrHdr' onLoad='start();' title='".$title."' onClick='body_func()'>
<form name='order' method='post' action=''>
<div id='container' align='center'>
<div id='header'>
<table border='0' cellspacing='0' cellpadding='0' align='center'>
<tr><td rowspan='2'>
		<img src='images/ABQA-213x150.jpg' border='0' align='left' />
		</td>
	<td><h1><span class='papyrus'>Specialising in Murray River Frontage</span><br />
			Bernard M Ryan &amp; Co</h1>
		</td>
	<td rowspan='2'><img src='images/windwheat.gif' width='183' height='158' border='0' align='right' />
		</td>
</tr>
<tr><td align='center' valign='top' class='green_small'><p>Auctioneers, Stock &amp; Station Agents, Business Agents, Water Brokers, Real Estate Agents.<br />
		Est. 1963. ABN: 23 582 547 597<br />
		NSW &amp; Victoria.
		</td>
</tr>
</table>

</div>
<div id='mainContent'>
");

$dir = "";
include("menu.php");

print("
<br /><h1>Featured Listings</h1>
");

$key_array	= array_keys($p);
$key 		= $key_array[$key_num];

// Sort out the images
$is = "";
$i	= 0;
while($i++ < 100 && isset($p[$key]["image".$i]) && strlen($p[$key]["image".$i]) > 0) {
	$is .= "<img src='".$p[$key]["image".$i]."' width='500'><br><br>";
}

//if (isset($p[$key]["image1"]) && strlen($p[$key]["image1"]) > 0) { $is .= "<img src='".$p[$key]["image1"]."' width='500'><br><br>"; }
//if (isset($p[$key]["image2"]) && strlen($p[$key]["image2"]) > 0) { $is .= "<img src='".$p[$key]["image2"]."' width='500'><br><br>"; }
//if (isset($p[$key]["image3"]) && strlen($p[$key]["image3"]) > 0) { $is .= "<img src='".$p[$key]["image3"]."' width='500'>"; }

// Output the current property
print("
<table border='0' align='center' cellpadding='2' cellspacing='2'>
<tr><td rowspan='3' valign='top'>
	".$is."
	</td>
	<td colspan='2' align='left' valign='top' height='50px'>
		<h1 class='red'>".$p[$key]["sal_auc"]." <span class='style3'>&quot;".$p[$key]["title"]."&quot;</span></h1>
	</td>
</tr>
<tr><td colspan='2' align='left' valign='top' height='50px'>
");

// Brochure
if (strlen($p[$key]["pdf"]) > 0) {
	print("
	<a 	href	= '".$p[$key]["directory"]."/".$p[$key]["pdf"]."'
		target	= '_blank'
		class	= 'large style11'
		onClick	= \"update_counter('".$p[$key]["title"]."')\"
		>Brochure
	</a>
	");

} else if (strlen($p[$key]["details"]) > 0) {
	print("
	<a 	href	= 'display_details.php?property_id=".$p[$key]["property_id"]."'
		target	= '_blank'
		class	= 'large style11'
		onClick	= \"update_counter('".$p[$key]["title"]."')\"
		>Brochure
	</a>
	");
}

	print("
	</td>
</tr>
<tr><td colspan='2' align='left' valign='top'>
		<p class='bold style17'>
		".nl2br($p[$key]["text"])."
		</p>
	</td>
</tr>
</table>
");

print("
<input type='hidden' name='key_num' value=".$key_num.">
<input type='hidden' name='brochure' value=0>
");

include("footer.php");


// 35 ON FOREST
//$properties['ThirtyFiveOnForest'] = "
//    <table border='0' align='center' cellpadding='2' cellspacing='2'>
//    <tr>
//      <td rowspan='3' valign='top'>        <p><img src='residential/35_on_forest/FrontYard-500.jpg' width='500' height='374'><br />
//        <br />
//        <img src='residential/35_on_forest/Kitchen-500.jpg' width='500' height='374'><br />
//        <br>
//        <img src='residential/35_on_forest/Living-500.jpg' width='500' height='374'>          <br />
//              </td>
//      <td colspan='2' align='left' valign='top' height='50px'><h1 class='red'>For Sale: <span class='style3'>&quot;Thirty Five on Forest&quot;</span></span><br />
//        </h1>          </td>
//    </tr>
//    <tr>
//      <td colspan='2' align='left' valign='top' height='50px'>          <a href='residential/35_on_forest/35OnForest.pdf' class='large style11' target='_blank'>Brochure</a></td>
//    </tr>
//    <tr>
//      <td colspan='2' align='left' valign='top'>
//        Family home, 3 B/R; BIR, master ensuite; Granny flat; kitchen, pantry; electric hot plates and oven, exhaust fan, ceiling fans; 2 x air conditioners –
//        master split system reverse cycle and refrigerated in lounge; separate dining; lounge; open fire place; bathroom; laundry; breezeway; alfresco patio -
//        wired in, electric HWS; carpeted floor coverings; rain water tank; filtered/raw water; paths; lawn; ornamental tree surrounds; garage-carport tool shed all in one;
//        side lane access; Land Area 1012 m2. Close to RSL Club, shops and all amenities. </br></br>
//        The property is for genuine sale.         </td>
//    </tr>
//  </table>
//";

// DHURAGOON
//$properties['Dhuragoon'] = "
//<table border='0' align='center' cellpadding='2' cellspacing='2'>
//  <tr><td rowspan='3' valign='top'>
//		<img src='rural/Dhuragoon/front-500.jpg' /><br><br>
//		<img src='rural/Dhuragoon/kitchen-500.jpg' /><br><br>
//		<img src='rural/Dhuragoon/supplies-500.jpg' /><br />
//	</td>
//	<td colspan='2' align='left' valign='top' height='50px'>
//		<h1 class='red'>For Sale: <span class='style3'>&quot;Dhuragoon&quot;</span><br />
//	  </h1>
//	</td>
//</tr>
//<tr>
//	<td colspan='2' align='left' valign='top' height='50px'><a href='rural/Dhuragoon/Dhuragoon.pdf' class='large style11' target='_blank'>Brochure</a></td>
//</tr>
//<tr>
//	<td colspan='2' align='left' valign='top'>
//
//      	Land Area: 407.5 hectares (1007 acres) plus 16ha (40ac) lease.<br>
//      	Water: 79 megalitres General Security, 824 Delivery Entitlements. <br>
//      	164 ha (405ac) contour; 53.4 ha (132ac) border check.<br>
//      	All lasered recycle facility &ndash; 2 permanent diesel recycle pumps.<br>
//      	3 water wheels on main Mallan canal.<br>
//      	8 water troughs. <br>
//      	2 air strips. <br>
//      	20 hectares salt bush plantings established and fenced; numerous tree plantings; established orchard.<br>
//      	Weatherboard House approx. 30 square incl. verandahs; 3 bedroom, ducted evaporative air conditioning; reverse cycle split system refrigerated A/C; combustion wood heater.<br>
//      	New kitchen; established native garden; pressure water system from large house dam.<br>
//      	Diesel overhead tanks x 2.<br>
//      	Silos x 5.<br>
//      	3 stand shearing shed; 2 overhead electric stands to down tubes no hand pieces; electric hydraulic wool press.<br>
//      	Steel cyclone sheep yards. <br>
//      	Skillion machinery shed; powered work shop &ndash; grease pit &ndash; wash down bay, all concrete.<br>
//      	Gable all steel storage shed.<br>
//      	2-car garage, cement floor, powered tilt-a-door.<br>
//      	2-car garage (as new) with lock-up storage bay.<br>
//      	Skillion car port.<br>
//      	Jayco kitchen, toilet, shower, reverse cycle spilt system A/C, telephone connected 2 lines.<br>
//      	Chemical shed (approved) with wash down shower.<br>
//      	Remarks: Great Lucerne country. Sheep and cattle grazing. Rice and cereals.<br>
//      	Enquiries and appointments through the selling agents.<br>
//			  </td>
//</tr>
//</table>
//";

// ASCOT
//$properties['Ascot'] = "
//<table border='0' align='center' cellpadding='2' cellspacing='2'>
//  <tr><td rowspan='3' valign='top'>
//		<img src='rural/Ascot/river-500.jpg' /><br><br>
//		<img src='rural/Ascot/house-500.jpg' /><br><br>
//		<img src='rural/Ascot/wheat-500.jpg' /><br />
//	</td>
//	<td colspan='2' align='left' valign='top' height='50px'>
//		<h1 class='red'>For Sale: <span class='style3'>&quot;Ascot&quot;</span><br /></h1>
//	</td>
//</tr>
//<tr>
//	<td colspan='2' align='left' valign='top' height='50px'><a href='rural/Ascot/Ascot.pdf' class='large style11' target='_blank'>Brochure</a></td>
//</tr>
//<tr>
//	<td colspan='2' align='left' valign='top'>
//
//      	&quot;Ascot&quot; Moulamein, NSW 2733.<br>
//      	<br>
//      	Murrain, Yarrein & Byjantic Creek Frontage.<br>
//      	<br>
//		1781.9 hectares (4403 acres). 10 km South of Moulamein.<br>
//		10 ML, 10 Delivery entitlements.<br>
//		Approx: 1044 Acres laid out. Farm plan.<br>
//		<br>
//		Western red cedar home of 180 square metres.<br>
//		2x Steel shed - 80 x 40. 4x Silos<br>
//		350 Acre lake. 250 Acres Sandy loam.<br>
//		Stock troughs. 13 km new fencing.<br>
//		Excellent property suitable Rice  Cereal  Lucerne  Grazing.<br>
//		80ha  Wheat. 101ha Barley given in.<br>
//		<br>
//		Lot 1 \"Ascot\"  1184.9 Hectares. Shed, Silos, Crop given in.<br>
//		Lot 2 \"Byjantic\" 597 Hectares. Byjantic Creek Frontage. House & Shed.<br>
//		<br>
//		To be offered as a whole or in two lots.
//
//	</td>
//</tr>
//</table>
//";

?>
