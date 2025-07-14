var buildingArray = [];
var buildingInfoArray = [];

function initBuilding(building, buildingInfo) {
	//This sets the options for the building, including color and opacity
	if (building.residentHall) {
		building.setOptions({
			strokeColor: "#c4e4f7",
			strokeOpacity: 1,
			strokeWeight: 2,
			fillColor: "#5c8ab9",
			fillOpacity: 1
		});
	}
	else {
		building.setOptions({
			strokeColor: "#002460",
			strokeOpacity: 1,
			strokeWeight: 2,
			fillColor: "#004b8d",
			fillOpacity: 1
		});
	}
	//This pushes the building into an array which allows for enabling/disabling buildings
	buildingArray.push(building);
	//This creates the 'click' event to display the info box when the polygon is clicked
	google.maps.event.addListener(building, 'click', function() {
		showInfo(building);
	});
	//The next two events allow for the highlighting
	/*
	google.maps.event.addListener(building, 'mouseover', function() {
		highlight(building);
	});
	google.maps.event.addListener(building, 'mouseout', function() {
		nohighlight(building);
	});
	*/
	if (building.icon != false) {
		//building.icon.setDraggable(true);
		/*google.maps.event.addListener(building.icon, 'dragend', function () {
			console.log(this.getPosition().toString());
		});*/
		google.maps.event.addListener(building.icon, 'click', function() {
			showInfo(building);
		});
	}
}

function constructBuilding() {
	//Polytechnic United Methodist Church
	//these are the coordinates of PUMC. Google Maps draws a line from point to point, and when the points are closed
	//the maps api fills in the polygon with a specified color
	var pumcCoords = [
		new google.maps.LatLng(32.73152716509354, -97.27867796427915),
		new google.maps.LatLng(32.73152716509354, -97.278651142189),
		new google.maps.LatLng(32.731547471882365, -97.278651142189),
		new google.maps.LatLng(32.731547471882365, -97.27849289185713),
		new google.maps.LatLng(32.73152716509354, -97.27849289185713),
		new google.maps.LatLng(32.73152716509354, -97.27817639119337),
		new google.maps.LatLng(32.73108718353299, -97.27817639119337),
		new google.maps.LatLng(32.73108718353299, -97.27821394211958),
		new google.maps.LatLng(32.73084350050343, -97.27821394211958),
		new google.maps.LatLng(32.73084350050343, -97.27839365012358),
		new google.maps.LatLng(32.73107590192595, -97.27839365012358),
		new google.maps.LatLng(32.73107590192595, -97.27846070534895),
		new google.maps.LatLng(32.731116515704585, -97.27846070534895),
		new google.maps.LatLng(32.731116515704585, -97.27855458266447),
		new google.maps.LatLng(32.730951804154365, -97.27855458266447),
		new google.maps.LatLng(32.730951804154365, -97.27867796427915),
		new google.maps.LatLng(32.73152716509354, -97.27867796427915)
	];

	//This is the actual polygon for PUMC using the coordinates above.
	window.pumc = new google.maps.Polygon({
		paths: pumcCoords,
	});

	//This sets the id of the div that contains the infoBubble content
	//The position is at the center of the building and can be changed depending on aesthetics
	pumc.info = "#pumcInfo";
	pumc.pos = new google.maps.LatLng(32.7316852, -97.2783914);
	pumc.flip = true;
	pumc.center = new google.maps.LatLng(32.73141010496378, -97.27872067097245);
	pumc.zoom = 18;

	//This is for icon to appear in center of the building
	pumc.iconLoc = new google.maps.LatLng(32.7310354, -97.2783887);
	pumc.iconSrc = "/media/style/icon/map/building-name/PMC.png";
	pumc.icon = new google.maps.Marker({
		position: pumc.iconLoc,
		icon: pumc.iconSrc
	});
	pumc.icon.zoom = 18;

	//This function actually initializes and colors the building, adding all it's awesome functions
	initBuilding(pumc);


	//----------------------------------------------------------------------------
	//Armstrong-Maybee Business Building
	var ambCoords = [
		new google.maps.LatLng(32.731231587976964, -97.27930560118864),
		new google.maps.LatLng(32.731231587976964, -97.27925732142637),
		new google.maps.LatLng(32.73131958432026, -97.27925732142637),
		new google.maps.LatLng(32.73131958432026, -97.27920635945509),
		new google.maps.LatLng(32.7314707573226, -97.27920635945509),
		new google.maps.LatLng(32.7314707573226, -97.27916612631986),
		new google.maps.LatLng(32.73151588354227, -97.27916612631986),
		new google.maps.LatLng(32.73151588354227, -97.27908834225843),
		new google.maps.LatLng(32.731509114610766, -97.27908834225843),
		new google.maps.LatLng(32.731509114610766, -97.2790454269142),
		new google.maps.LatLng(32.73147752625701, -97.2790454269142),
		new google.maps.LatLng(32.73147752625701, -97.27897568947981),
		new google.maps.LatLng(32.7310262628381, -97.27897568947981),
		new google.maps.LatLng(32.7310262628381, -97.27920635945509),
		new google.maps.LatLng(32.73106010767378, -97.27920635945509),
		new google.maps.LatLng(32.73106010767378, -97.27925732142637),
		new google.maps.LatLng(32.73114810418635, -97.27925732142637),
		new google.maps.LatLng(32.73114810418635, -97.27930560118864)
	];

	window.amb = new google.maps.Polygon({
		paths: ambCoords
	});

	amb.info = "#ambInfo";
	amb.pos = new google.maps.LatLng(32.7315115, -97.2792470);
	amb.flip = false;
	amb.center = new google.maps.LatLng(32.73134918448952, -97.27975063923417);
	amb.zoom = 18;

	//This is for icon to appear in center of the building
	amb.iconLoc = new google.maps.LatLng(32.731122168936416, -97.27912346057434);
	amb.iconSrc = "/media/style/icon/map/building-name/AMB.png";
	amb.icon = new google.maps.Marker({
		position: amb.iconLoc,
		icon: amb.iconSrc
	});
	amb.icon.zoom = 18;

	initBuilding(amb);

	//----------------------------------------------------------------------------
	//Morton Fitness Center
	var mfcCoords = [
		new google.maps.LatLng(32.73193005656064, -97.27900837890218),
		new google.maps.LatLng(32.73193005656064, -97.27894266478131),
		new google.maps.LatLng(32.73206769075004, -97.27894266478131),
		new google.maps.LatLng(32.73206769075004, -97.27878575555394),
		new google.maps.LatLng(32.7319921047871, -97.27878575555394),
		new google.maps.LatLng(32.7319921047871, -97.27862884632657),
		new google.maps.LatLng(32.73182175409827, -97.27862884632657),
		new google.maps.LatLng(32.73182175409827, -97.2786516451032),
		new google.maps.LatLng(32.73174729607907, -97.2786516451032),
		new google.maps.LatLng(32.73174729607907, -97.2789775334985),
		new google.maps.LatLng(32.7318477015752, -97.2789775334985),
		new google.maps.LatLng(32.7318477015752, -97.27900837890218)
	];

	window.mfc = new google.maps.Polygon({
		paths: mfcCoords
	});

	mfc.info = "#mfcInfo"
	mfc.pos = new google.maps.LatLng(32.7320620, -97.2789949);
	mfc.flip = true;
	mfc.center = new google.maps.LatLng(32.7324411, -97.2793275);
	mfc.zoom = 18;

	//This is for icon to appear in center of the building
	mfc.iconLoc = new google.maps.LatLng(32.73179802271138, -97.278816);
	mfc.iconSrc = "/media/style/icon/map/building-name/MFC.png";
	mfc.icon = new google.maps.Marker({
		position: mfc.iconLoc,
		icon: mfc.iconSrc
	});
	mfc.icon.zoom = 18;

	initBuilding(mfc);

	//----------------------------------------------------------------------------
	//EJW Library
	var ejwCoords = [
		new google.maps.LatLng(32.733006164111664, -97.27992116815756),
		new google.maps.LatLng(32.733006164111664, -97.27990641600798),
		new google.maps.LatLng(32.73306933972459, -97.27990641600798),
		new google.maps.LatLng(32.73306933972459, -97.27974011904905),
		new google.maps.LatLng(32.73305693023273, -97.27974011904905),
		new google.maps.LatLng(32.73305693023273, -97.27970927364538),
		new google.maps.LatLng(32.73308174921471, -97.27970927364538),
		new google.maps.LatLng(32.73308174921471, -97.27939411408613),
		new google.maps.LatLng(32.733054673961284, -97.27939411408613),
		new google.maps.LatLng(32.733054673961284, -97.27936460978697),
		new google.maps.LatLng(32.7330659553179, -97.27936460978697),
		new google.maps.LatLng(32.7330659553179, -97.27920099503706),
		new google.maps.LatLng(32.73306821158904, -97.27920099503706),
		new google.maps.LatLng(32.73306821158904, -97.27915942079733),
		new google.maps.LatLng(32.73280197119937, -97.27915942079733),
		new google.maps.LatLng(32.73280197119937, -97.27919965393255),
		new google.maps.LatLng(32.732795202365544, -97.27919965393255),
		new google.maps.LatLng(32.732795202365544, -97.27936595089147),
		new google.maps.LatLng(32.73280986817154, -97.27936595089147),
		new google.maps.LatLng(32.73280986817154, -97.27939411408613),
		new google.maps.LatLng(32.73278392097468, -97.27939411408613),
		new google.maps.LatLng(32.73278392097468, -97.27971061474989),
		new google.maps.LatLng(32.73281099631037, -97.27971061474989),
		new google.maps.LatLng(32.73281099631037, -97.27974011904905),
		new google.maps.LatLng(32.73279745864356, -97.27974011904905),
		new google.maps.LatLng(32.73279745864356, -97.27990641600798),
		new google.maps.LatLng(32.73286401881889, -97.27990641600798),
		new google.maps.LatLng(32.73286401881889, -97.2799211681575)
	];

	window.ejw = new google.maps.Polygon({
		paths: ejwCoords
	});

	ejw.info = "#ejwInfo"
	ejw.pos = new google.maps.LatLng(32.7331089, -97.2795635);
	ejw.flip = false;
	ejw.center = new google.maps.LatLng(32.7335692, -97.2796655);
	ejw.zoom = 18;

	//This is for icon to appear in center of the building
	ejw.iconLoc = new google.maps.LatLng(32.732817865955624, -97.279534832016);
	ejw.iconSrc = "/media/style/icon/map/building-name/EJW.png";
	ejw.icon = new google.maps.Marker({
		position: ejw.iconLoc,
		icon: ejw.iconSrc
	});
	ejw.icon.zoom = 18;

	initBuilding(ejw);

	//----------------------------------------------------------------------------
	//MCF building w/ science lecture theater
	var mcfCoords = [
		new google.maps.LatLng(32.731581739578445, -97.28038946508775),
		new google.maps.LatLng(32.731581739578445, -97.28023255586038),
		new google.maps.LatLng(32.7314249259827, -97.28023255586038),
		new google.maps.LatLng(32.7314249259827, -97.28018964051614),
		new google.maps.LatLng(32.73149712796032, -97.28018964051614),
		new google.maps.LatLng(32.73149712796032, -97.28009039878259),
		new google.maps.LatLng(32.73153210077221, -97.28009039878259),
		new google.maps.LatLng(32.73153210077221, -97.28002870797525),
		new google.maps.LatLng(32.73149712796032, -97.28002870797525),
		new google.maps.LatLng(32.73149712796032, -97.27992812513719),
		new google.maps.LatLng(32.7314125162619, -97.27992812513719),
		new google.maps.LatLng(32.7314125162619, -97.27990264415155),
		new google.maps.LatLng(32.73136400551859, -97.27990264415155),
		new google.maps.LatLng(32.73136400551859, -97.27992812513719),
		new google.maps.LatLng(32.73105376176841, -97.27992812513719),
		new google.maps.LatLng(32.73105376176841, -97.2799844515265),
		new google.maps.LatLng(32.73103232670577, -97.2799844515265),
		new google.maps.LatLng(32.73103232670577, -97.28014136075387),
		new google.maps.LatLng(32.73105376176841, -97.28014136075387),
		new google.maps.LatLng(32.73105376176841, -97.28018964051614),
		new google.maps.LatLng(32.73114739908677, -97.28018964051614),
		new google.maps.LatLng(32.73114739908677, -97.2802178037108),
		new google.maps.LatLng(32.73119252547013, -97.2802178037108),
		new google.maps.LatLng(32.73119252547013, -97.28018964051614),
		new google.maps.LatLng(32.73135610841833, -97.28018964051614),
		new google.maps.LatLng(32.73135610841833, -97.28023255586038),
		new google.maps.LatLng(32.73130195685492, -97.28023255586038),
		new google.maps.LatLng(32.73130195685492, -97.28038946508775),
		new google.maps.LatLng(32.731581739578445, -97.28038946508775)
	];

	window.mcf = new google.maps.Polygon({
		paths: mcfCoords
	});

	mcf.info = "#mcfInfo"
	mcf.pos = new google.maps.LatLng(32.731539, -97.2799042);
	mcf.flip = false;
	mcf.center = new google.maps.LatLng(32.73137612012746, -97.27992292009891);
	mcf.zoom = 18;

	//This is for icon to appear in center of the building
	mcf.iconLoc = new google.maps.LatLng(32.7311925, -97.2800595);
	mcf.iconSrc = "/media/style/icon/map/building-name/MCF.png";
	mcf.icon = new google.maps.Marker({
		position: mcf.iconLoc,
		icon: mcf.iconSrc
	});
	mcf.icon.zoom = 18;

	initBuilding(mcf);

	//----------------------------------------------------------------------------
	//STC Technology Center
	var stcCoords = [
		new google.maps.LatLng(32.73208447195281, -97.28035032159994),
		new google.maps.LatLng(32.73208447195281, -97.28017061359594),
		new google.maps.LatLng(32.73201565489764, -97.28017061359594),
		new google.maps.LatLng(32.73201565489764, -97.28020414120863),
		new google.maps.LatLng(32.73196037558533, -97.28020414120863),
		new google.maps.LatLng(32.73196037558533, -97.28017061359594),
		new google.maps.LatLng(32.731893814735216, -97.28017061359594),
		new google.maps.LatLng(32.731893814735216, -97.28020414120863),
		new google.maps.LatLng(32.731840791649574, -97.28020414120863),
		new google.maps.LatLng(32.731840791649574, -97.28017061359594),
		new google.maps.LatLng(32.73165915913836, -97.28017061359594),
		new google.maps.LatLng(32.73165915913836, -97.28034093386839),
		new google.maps.LatLng(32.73178889668414, -97.28034093386839),
		new google.maps.LatLng(32.73178889668414, -97.28035032159994),
		new google.maps.LatLng(32.731840791649574, -97.28035032159994),
		new google.maps.LatLng(32.731840791649574, -97.28031947619627),
		new google.maps.LatLng(32.731893814735216, -97.28031947619627),
		new google.maps.LatLng(32.731893814735216, -97.28035032159994),
		new google.maps.LatLng(32.73196037558533, -97.28035032159994),
		new google.maps.LatLng(32.73196037558533, -97.28031947619627),
		new google.maps.LatLng(32.73201565489764, -97.28031947619627),
		new google.maps.LatLng(32.73201565489764, -97.28035032159994),
		new google.maps.LatLng(32.73208447195281, -97.28035032159994)
	];

	window.stc = new google.maps.Polygon({
		paths: stcCoords
	});

	stc.info = "#stcInfo"
	stc.pos = new google.maps.LatLng(32.7321252, -97.2801483);
	stc.flip = false;
	stc.center = new google.maps.LatLng(32.732016936090865, -97.28021797063907);
	stc.zoom = 18;

	//This is for icon to appear in center of the building
	stc.iconLoc = new google.maps.LatLng(32.73171679575663, -97.28025366403199);
	stc.iconSrc = "/media/style/icon/map/building-name/STC.png";
	stc.icon = new google.maps.Marker({
		position: stc.iconLoc,
		icon: stc.iconSrc
	});
	stc.icon.zoom = 18;

	initBuilding(stc);

	//----------------------------------------------------------------------------
	// QUESTION: DO WE NEED SEPERATE COORDS TO REPRESENT NICHOLAS MARTIN HALL
	//FA Ann Wagner Fine Arts Building
	var faCoords = [
		new google.maps.LatLng(32.73139855532356, -97.28067889220426),
		new google.maps.LatLng(32.73139855532356, -97.28053941733549),
		new google.maps.LatLng(32.7313647106164, -97.28053941733549),
		new google.maps.LatLng(32.7313647106164, -97.28051259524534),
		new google.maps.LatLng(32.73116277026329, -97.28051259524534),
		new google.maps.LatLng(32.73116277026329, -97.28044688112448),
		new google.maps.LatLng(32.73113795074697, -97.28044688112448),
		new google.maps.LatLng(32.73113795074697, -97.28039323694418),
		new google.maps.LatLng(32.73097662372251, -97.28039323694418),
		new google.maps.LatLng(32.73097662372251, -97.28044688112448),
		new google.maps.LatLng(32.73095406047904, -97.28044688112448),
		new google.maps.LatLng(32.73095406047904, -97.2808116615505),
		new google.maps.LatLng(32.73116277026329, -97.2808116615505),
		new google.maps.LatLng(32.73116277026329, -97.2807043731899),
		new google.maps.LatLng(32.7313647106164, -97.2807043731899),
		new google.maps.LatLng(32.7313647106164, -97.28067889220426),
		new google.maps.LatLng(32.73139855532356, -97.28067889220426)
	];

	window.fa = new google.maps.Polygon({
		paths: faCoords
	});

	fa.info = "#faInfo"
	fa.pos = new google.maps.LatLng(32.7314038, -97.2805269);
	fa.flip = false;
	fa.center = new google.maps.LatLng(32.73140319589074, -97.28048081957401);
	fa.zoom = 18;

	//This is for icon to appear in center of the building
	fa.iconLoc = new google.maps.LatLng(32.73104441423334, -97.28060235120392);
	fa.iconSrc = "/media/style/icon/map/building-name/FA.png";
	fa.icon = new google.maps.Marker({
		position: fa.iconLoc,
		icon: fa.iconSrc
	});
	fa.icon.zoom = 18;

	initBuilding(fa);

	//----------------------------------------------------------------------------
	//OSH Oneal-Sells Administration Building
	var oshCoords = [
		new google.maps.LatLng(32.73257859941196, -97.28030472404669),
		new google.maps.LatLng(32.73257859941196, -97.28016793138693),
		new google.maps.LatLng(32.73259664967823, -97.28016793138693),
		new google.maps.LatLng(32.73259664967823, -97.2800901473255),
		new google.maps.LatLng(32.732579727553706, -97.2800901473255),
		new google.maps.LatLng(32.732579727553706, -97.27995335466574),
		new google.maps.LatLng(32.732483835454055, -97.27995335466574),
		new google.maps.LatLng(32.732483835454055, -97.27999224669645),
		new google.maps.LatLng(32.73245901630556, -97.27999224669645),
		new google.maps.LatLng(32.73245901630556, -97.28000565774153),
		new google.maps.LatLng(32.73235409891975, -97.28000565774153),
		new google.maps.LatLng(32.73235409891975, -97.27999224669645),
		new google.maps.LatLng(32.732330407880056, -97.27999224669645),
		new google.maps.LatLng(32.732330407880056, -97.27995335466574),
		new google.maps.LatLng(32.732236771804374, -97.27995335466574),
		new google.maps.LatLng(32.732236771804374, -97.28008344180296),
		new google.maps.LatLng(32.73220631185496, -97.28008344180296),
		new google.maps.LatLng(32.73220631185496, -97.28015988475988),
		new google.maps.LatLng(32.7322345155122, -97.28015988475988),
		new google.maps.LatLng(32.7322345155122, -97.28030472404669)
	];

	window.osh = new google.maps.Polygon({
		paths: oshCoords
	});

	osh.info = "#oshInfo"
	osh.pos = new google.maps.LatLng(32.7325855, -97.2799498);
	osh.flip = false;
	osh.center = new google.maps.LatLng(32.732820083527656, -97.28012682831115);
	osh.zoom = 18;

	//This is for icon to appear in center of the building
	osh.iconLoc = new google.maps.LatLng(32.732294472960575, -97.28012494232792);
	osh.iconSrc = "/media/style/icon/map/building-name/OSH.png";
	osh.icon = new google.maps.Marker({
		position: osh.iconLoc,
		icon: osh.iconSrc
	});
	osh.icon.zoom = 18;

	initBuilding(osh);

	//----------------------------------------------------------------------------
	//SWR - Power Plant
	var swrCoords = [
		new google.maps.LatLng(32.73224103760658, -97.27898995966996),
		new google.maps.LatLng(32.73259527475563, -97.27898995966996),
		new google.maps.LatLng(32.73259527475563, -97.27902214617814),
		new google.maps.LatLng(32.73273967675645, -97.27902214617814),
		new google.maps.LatLng(32.73273967675645, -97.27898995966996),
		new google.maps.LatLng(32.733084886841525, -97.27898995966996),
		new google.maps.LatLng(32.733084886841525, -97.27881561608399),
		new google.maps.LatLng(32.73312301428283, -97.27881561608399),
		new google.maps.LatLng(32.73312301428283, -97.278455896232),
		new google.maps.LatLng(32.733253877831196, -97.278455896232),
		new google.maps.LatLng(32.733253877831196, -97.27844114408242),
		new google.maps.LatLng(32.73335202536637, -97.27844114408242),
		new google.maps.LatLng(32.73335202536637, -97.27824668392884),
		new google.maps.LatLng(32.73294138438438, -97.27824668392884),
		new google.maps.LatLng(32.73294138438438, -97.27826143607842),
		new google.maps.LatLng(32.73252735708341, -97.27826143607842),
		new google.maps.LatLng(32.73252735708341, -97.27835665449845),
		new google.maps.LatLng(32.732249833619804, -97.27835665449845),
		new google.maps.LatLng(32.732249833619804, -97.27844919070947),
		new google.maps.LatLng(32.73223178328331, -97.27844919070947),
		new google.maps.LatLng(32.73223178328331, -97.27883006438958),
		new google.maps.LatLng(32.73224103760658, -97.27883006438958),
		new google.maps.LatLng(32.73224103760658, -97.27898995966996)
	];

	window.swr = new google.maps.Polygon({
		paths: swrCoords
	});

	swr.info = "#swrInfo"
	swr.pos = new google.maps.LatLng(32.7331218, -97.2789896);
	swr.flip = true;
	swr.center = new google.maps.LatLng(32.732914847128086, -97.27868916427917);
	swr.zoom = 18;

	//This is for icon to appear in center of the building
	swr.iconLoc = new google.maps.LatLng(32.73258278495268, -97.2786391932541);
	swr.iconSrc = "/media/style/icon/map/building-name/SWR.png";
	swr.icon = new google.maps.Marker({
		position: swr.iconLoc,
		icon: swr.iconSrc
	});
	swr.icon.zoom = 18;

	initBuilding(swr);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Otho C. Armstrong Hall
	var ochCoords = [
		new google.maps.LatLng(32.73377780603133, -97.27914735085676),
		new google.maps.LatLng(32.73377780603133, -97.27892204529951),
		new google.maps.LatLng(32.73382857171289, -97.27892204529951),
		new google.maps.LatLng(32.73382857171289, -97.27885633117864),
		new google.maps.LatLng(32.73377780603133, -97.27885633117864),
		new google.maps.LatLng(32.73377780603133, -97.27867125875662),
		new google.maps.LatLng(32.73382857171289, -97.27867125875662),
		new google.maps.LatLng(32.73382857171289, -97.27860554463575),
		new google.maps.LatLng(32.73377780603133, -97.27860554463575),
		new google.maps.LatLng(32.73377780603133, -97.27838426239202),
		new google.maps.LatLng(32.73363679009749, -97.27838426239202),
		new google.maps.LatLng(32.73363679009749, -97.27914735085676)
	];


	window.och = new google.maps.Polygon({
		paths: ochCoords
	});

	och.info = "#ochInfo"
	och.pos = new google.maps.LatLng(32.7338066, -97.2792151);
	och.flip = true;
	och.center = new google.maps.LatLng(32.733853452586565, -97.27912368213958);
	och.zoom = 18;

	//This is for icon to appear in center of the building
	och.iconLoc = new google.maps.LatLng(32.73364579982132, -97.27874927116397);
	och.iconSrc = "/media/style/icon/map/building-name/OCH.png";
	och.icon = new google.maps.Marker({
		position: och.iconLoc,
		icon: och.iconSrc
	});
	och.icon.zoom = 18;

	och.residentHall = true;

	initBuilding(och);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Elizabeth Means Armstrong Hall
	var eahCoords = [
		new google.maps.LatLng(32.7337868310436, -97.28071644313047),
		new google.maps.LatLng(32.7337868310436, -97.28049247867773),
		new google.maps.LatLng(32.7338364685942, -97.28049247867773),
		new google.maps.LatLng(32.7338364685942, -97.28042274124334),
		new google.maps.LatLng(32.7337868310436, -97.28042274124334),
		new google.maps.LatLng(32.7337868310436, -97.28023900992582),
		new google.maps.LatLng(32.7338364685942, -97.28023900992582),
		new google.maps.LatLng(32.7338364685942, -97.28017463690946),
		new google.maps.LatLng(32.7337868310436, -97.28017463690946),
		new google.maps.LatLng(32.7337868310436, -97.2799479902477),
		new google.maps.LatLng(32.73364243073924, -97.2799479902477),
		new google.maps.LatLng(32.73364243073924, -97.28071644313047)
	];


	window.eah = new google.maps.Polygon({
		paths: eahCoords
	});

	eah.info = "#eahInfo"
	eah.pos = new google.maps.LatLng(32.7338012, -97.2799229);
	eah.flip = false;
	eah.center = new google.maps.LatLng(32.73377674001133, -97.27967621719665);
	eah.zoom = 18;

	//This is for icon to appear in center of the building
	eah.iconLoc = new google.maps.LatLng(32.73365479982861, -97.28033173558197);
	eah.iconSrc = "/media/style/icon/map/building-name/EAH.png";
	eah.icon = new google.maps.Marker({
		position: eah.iconLoc,
		icon: eah.iconSrc
	});
	eah.icon.zoom = 18;

	eah.residentHall = true;

	initBuilding(eah);


	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Dora Roberts Dining Hall
	var dorarobertsdininghallCoords = [
		new google.maps.LatLng(32.733879337365885, -97.27975353009413),
		new google.maps.LatLng(32.733879337365885, -97.279639536211),
		new google.maps.LatLng(32.73402486540991, -97.279639536211),
		new google.maps.LatLng(32.73402486540991, -97.27945714599798),
		new google.maps.LatLng(32.733879337365885, -97.27945714599798),
		new google.maps.LatLng(32.733879337365885, -97.27934315211485),
		new google.maps.LatLng(32.733731552829965, -97.27934315211485),
		new google.maps.LatLng(32.733731552829965, -97.27938070304106),
		new google.maps.LatLng(32.7336988371362, -97.27938070304106),
		new google.maps.LatLng(32.7336988371362, -97.27942093617628),
		new google.maps.LatLng(32.73371914343029, -97.27942093617628),
		new google.maps.LatLng(32.73371914343029, -97.27967306382368),
		new google.maps.LatLng(32.7336988371362, -97.27967306382368),
		new google.maps.LatLng(32.7336988371362, -97.27971597916792),
		new google.maps.LatLng(32.733731552829965, -97.27971597916792),
		new google.maps.LatLng(32.733731552829965, -97.27975353009413)
	];

	window.dorarobertsdininghall = new google.maps.Polygon({
		paths: dorarobertsdininghallCoords
	});

	dorarobertsdininghall.info = "#dorarobertsdininghallInfo"
	dorarobertsdininghall.pos = new google.maps.LatLng(32.7340404, -97.2795645);
	dorarobertsdininghall.flip = false;
	dorarobertsdininghall.center = new google.maps.LatLng(32.734065539950926, -97.27956892883606);
	dorarobertsdininghall.zoom = 18;

	//This is for icon to appear in center of the building
	dorarobertsdininghall.iconLoc = new google.maps.LatLng(32.733756112389976, -97.27953510674593);
	dorarobertsdininghall.iconSrc = "/media/style/icon/map/building-name/Dora.png";
	dorarobertsdininghall.icon = new google.maps.Marker({
		position: dorarobertsdininghall.iconLoc,
		icon: dorarobertsdininghall.iconSrc
	});
	dorarobertsdininghall.icon.zoom = 18;

	initBuilding(dorarobertsdininghall);

	//----------------------------------------------------------------------------
	//
	//----------------------------------------------------------------------------
	//Stella Russell Hall
	var srhCoords = [
		new google.maps.LatLng(32.73460246274773, -97.28045626885603),
		new google.maps.LatLng(32.73460246274773, -97.2804160357208),
		new google.maps.LatLng(32.73461600014041, -97.2804160357208),
		new google.maps.LatLng(32.73461600014041, -97.28011562831114),
		new google.maps.LatLng(32.73486869775928, -97.28011562831114),
		new google.maps.LatLng(32.73486869775928, -97.28010221726606),
		new google.maps.LatLng(32.73490141302364, -97.28010221726606),
		new google.maps.LatLng(32.73490141302364, -97.28000968105505),
		new google.maps.LatLng(32.73486756964651, -97.28000968105505),
		new google.maps.LatLng(32.73486756964651, -97.27996006018827),
		new google.maps.LatLng(32.734576516072735, -97.27996006018827),
		new google.maps.LatLng(32.734576516072735, -97.27990775711248),
		new google.maps.LatLng(32.73453928822149, -97.27990775711248),
		new google.maps.LatLng(32.73453928822149, -97.27988093502233),
		new google.maps.LatLng(32.73448852294472, -97.27988093502233),
		new google.maps.LatLng(32.73448852294472, -97.27984606630514),
		new google.maps.LatLng(32.734352020612675, -97.27984606630514),
		new google.maps.LatLng(32.734352020612675, -97.28007539517591),
		new google.maps.LatLng(32.734480626121275, -97.28007539517591),
		new google.maps.LatLng(32.734480626121275, -97.2804187179298),
		new google.maps.LatLng(32.734523494582916, -97.2804187179298),
		new google.maps.LatLng(32.734523494582916, -97.28045626885603)
	];

	window.srh = new google.maps.Polygon({
		paths: srhCoords
	});

	srh.info = "#srhInfo"
	srh.pos = new google.maps.LatLng(32.7349407, -97.2799520);
	srh.flip = false;
	srh.center = new google.maps.LatLng(32.73479204816107, -97.27952064907379);
	srh.zoom = 18;

	//This is for icon to appear in center of the building
	srh.iconLoc = new google.maps.LatLng(32.73449895064962, -97.28005750674589);
	srh.iconSrc = "/media/style/icon/map/building-name/SRH.png";
	srh.icon = new google.maps.Marker({
		position: srh.iconLoc,
		icon: srh.iconSrc
	});
	srh.icon.zoom = 18;

	srh.residentHall = true;

	initBuilding(srh);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	/*Security Office
	var securityCoords = [
		new google.maps.LatLng(32.7349391,-97.2787757),
		new google.maps.LatLng(32.7346734,-97.2787757),
		new google.maps.LatLng(32.7346734,-97.2784701),
		new google.maps.LatLng(32.7348025,-97.2784701),
		new google.maps.LatLng(32.7348025,-97.2786619),
		new google.maps.LatLng(32.7349391,-97.2786619),
		new google.maps.LatLng(32.7349391,-97.2787757)
	];

	window.security = new google.maps.Polygon({
		paths: securityCoords
	});

	security.info = "#securityInfo"
	security.pos = new google.maps.LatLng(32.7349613, -97.2788451);
	security.flip = true;
	security.center = new google.maps.LatLng(32.734928257546834, -97.27842522938805);
	security.zoom = 18;

	security.iconLoc = new google.maps.LatLng(32.7347117255961, -97.27861361349181);
	security.iconSrc = "/media/style/icon/map/building-name/Security.png";
	security.icon = new google.maps.Marker({
		position: security.iconLoc,
		icon: security.iconSrc
	});
	security.icon.zoom = 18;

	initBuilding(security);
	*/
	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Facilities Center
	var facilitiescenterCoords = [
		new google.maps.LatLng(32.73495330617438, -97.27839633233259),
		new google.maps.LatLng(32.73495330617438, -97.27830647833059),
		new google.maps.LatLng(32.73482131700777, -97.27830647833059),
		new google.maps.LatLng(32.73482131700777, -97.27822198874662),
		new google.maps.LatLng(32.73495330617438, -97.27822198874662),
		new google.maps.LatLng(32.73495330617438, -97.27813079364012),
		new google.maps.LatLng(32.73469948068049, -97.27813079364012),
		new google.maps.LatLng(32.73469948068049, -97.27816700346182),
		new google.maps.LatLng(32.73465999664978, -97.27816700346182),
		new google.maps.LatLng(32.73465999664978, -97.27826758629988),
		new google.maps.LatLng(32.73469948068049, -97.27826758629988),
		new google.maps.LatLng(32.73469948068049, -97.27839633233259)
	];

	window.facilitiescenter = new google.maps.Polygon({
		paths: facilitiescenterCoords
	});

	facilitiescenter.info = "#facilitiescenterInfo"
	facilitiescenter.pos = new google.maps.LatLng(32.73473576334279, -97.2782596067459);
	facilitiescenter.flip = true;
	facilitiescenter.center = new google.maps.LatLng(32.73482268095949, -97.27831478958775);
	facilitiescenter.zoom = 18;

	//This is for icon to appear in center of the building
	facilitiescenter.iconLoc = new google.maps.LatLng(32.7347222259683, -97.2782596067459);
	facilitiescenter.iconSrc = "/media/style/icon/map/building-name/Facilities_center.png";
	facilitiescenter.icon = new google.maps.Marker({
		position: facilitiescenter.iconLoc,
		icon: facilitiescenter.iconSrc
	});
	facilitiescenter.icon.zoom = 18;

	initBuilding(facilitiescenter);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Storage
	var facilitiesstorageCoords = [
		new google.maps.LatLng(32.73493864072112, -97.27784647948454),
		new google.maps.LatLng(32.73493864072112, -97.2775152266712),
		new google.maps.LatLng(32.73483147002755, -97.2775152266712),
		new google.maps.LatLng(32.73483147002755, -97.27784647948454)
	];

	window.facilitiesstorage = new google.maps.Polygon({
		paths: facilitiesstorageCoords
	});
	facilitiesstorage
	facilitiesstorage.info = "#facilitiesstorageInfo"
	facilitiesstorage.pos = new google.maps.LatLng(32.7349657, -97.2778895);
	facilitiesstorage.flip = true;
	facilitiesstorage.center = new google.maps.LatLng(32.73493702657576, -97.27768831773544);
	facilitiesstorage.zoom = 18;

	//This is for icon to appear in center of the building
	facilitiesstorage.iconSrc = "/media/style/icon/map/building-name/Facilities_storage.png";
	facilitiesstorage.iconLoc = new google.maps.LatLng(32.73483903813582, -97.27766807116393);
	facilitiesstorage.icon = new google.maps.Marker({
		position: facilitiesstorage.iconLoc,
		icon: facilitiesstorage.iconSrc
	});
	facilitiesstorage.icon.zoom = 18;

	initBuilding(facilitiesstorage);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Baker Building
	var bakerbuildingCoords = [
		new google.maps.LatLng(32.731123919256575, -97.28131843141625),
		new google.maps.LatLng(32.731123919256575, -97.28117090992043),
		new google.maps.LatLng(32.73081593099896, -97.28117090992043),
		new google.maps.LatLng(32.73081593099896, -97.28133720687936),
		new google.maps.LatLng(32.73103930720391, -97.28133720687936),
		new google.maps.LatLng(32.73103930720391, -97.28131843141625)
	];

	window.bakerbuilding = new google.maps.Polygon({
		paths: bakerbuildingCoords
	});

	bakerbuilding.info = "#bakerbuildingInfo"
	bakerbuilding.pos = new google.maps.LatLng(32.7311455, -97.2811645);
	bakerbuilding.flip = true;
	bakerbuilding.center = new google.maps.LatLng(32.73112166981322, -97.28133391037684);
	bakerbuilding.zoom = 18;

	//This is for icon to appear in center of the building
	bakerbuilding.iconLoc = new google.maps.LatLng(32.730911549396154, -97.28124744232787);
	bakerbuilding.iconSrc = "/media/style/icon/map/building-name/Baker-Building.png";
	bakerbuilding.icon = new google.maps.Marker({
		position: bakerbuilding.iconLoc,
		icon: bakerbuilding.iconSrc
	});
	bakerbuilding.icon.zoom = 18;

	initBuilding(bakerbuilding);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//The Language Company A
	var lcaCoords = [
		new google.maps.LatLng(32.73130257381632, -97.28130774448971),
		new google.maps.LatLng(32.73130257381632, -97.2812152082787),
		new google.maps.LatLng(32.73119539875084, -97.2812152082787),
		new google.maps.LatLng(32.73119539875084, -97.28130774448971)
	];


	window.lca = new google.maps.Polygon({
		paths: lcaCoords
	});

	lca.info = "#thelanguagecompanyInfo"
	lca.pos = new google.maps.LatLng(32.7313398,-97.2811487);
	lca.flip = false;
	lca.center = new google.maps.LatLng(32.731616177220026, -97.2813651448669);
	lca.zoom = 18;

	//This is for icon to appear in center of the building
	lca.iconLoc = new google.maps.LatLng(32.73130652318246, -97.28131898280333);
	lca.iconSrc = "/media/style/icon/map/building-name/The-language-company.png";
	lca.icon = new google.maps.Marker({
		position: lca.iconLoc,
		icon: lca.iconSrc
	});
	lca.icon.zoom = 18;

	initBuilding(lca);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//The Language Company B
	var lcbCoords = [
		new google.maps.LatLng(32.731441425267484, -97.2814781904907),
		new google.maps.LatLng(32.731441425267484, -97.28143929845999),
		new google.maps.LatLng(32.731465116543475, -97.28143929845999),
		new google.maps.LatLng(32.731465116543475, -97.28137224323461),
		new google.maps.LatLng(32.73137824850078, -97.28137224323461),
		new google.maps.LatLng(32.73137824850078, -97.28135749108503),
		new google.maps.LatLng(32.73133199405391, -97.28135749108503),
		new google.maps.LatLng(32.73133199405391, -97.28137224323461),
		new google.maps.LatLng(32.73125076667449, -97.28137224323461),
		new google.maps.LatLng(32.73125076667449, -97.2814781904907)
	];

	window.lcb = new google.maps.Polygon({
		paths: lcbCoords
	});

	lcb.info = "#thelanguagecompanyInfo"
	lcb.pos = new google.maps.LatLng(32.7315564,-97.2813659);
	lcb.flip = false;
	lcb.center = new google.maps.LatLng(32.73116040186434, -97.2812782749293);
	lcb.zoom = 18;

	//This is for icon to appear in center of the building
	lcb.icon = false;

	initBuilding(lcb);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//The Language Company C (#23)
	var lccCoords = [
		new google.maps.LatLng(32.73144819420426, -97.28133201009939),
		new google.maps.LatLng(32.73144819420426, -97.28128641254614),
		new google.maps.LatLng(32.731510242766134, -97.28128641254614),
		new google.maps.LatLng(32.731510242766134, -97.28117510087202),
		new google.maps.LatLng(32.73137035140193, -97.28117510087202),
		new google.maps.LatLng(32.73137035140193, -97.28133201009939)
	];

	window.lcc = new google.maps.Polygon({
		paths: lccCoords
	});

	lcc.info = "#thelanguagecompanyInfo"
	lcc.pos = new google.maps.LatLng(32.7315605, -97.2811694);
	lcc.flip = false;
	lcc.center = new google.maps.LatLng(32.73138194193419, -97.28134813643894);
	lcc.zoom = 18;

	//This is for icon to appear in center of the building
	lcc.icon = false;

	initBuilding(lcc);
	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//S-FA - Law Sone Fine Arts Center/Thad Smotherman Theatre
	var sfaCoords = [
		new google.maps.LatLng(32.731924486319656, -97.2821222559304),
		new google.maps.LatLng(32.731924486319656, -97.28208872831772),
		new google.maps.LatLng(32.731976381206145, -97.28208872831772),
		new google.maps.LatLng(32.731976381206145, -97.28199350989769),
		new google.maps.LatLng(32.73193802411904, -97.28199350989769),
		new google.maps.LatLng(32.73193802411904, -97.28176552213142),
		new google.maps.LatLng(32.731984278251446, -97.28176552213142),
		new google.maps.LatLng(32.731984278251446, -97.28167432702492),
		new google.maps.LatLng(32.7317146501662, -97.28167432702492),
		new google.maps.LatLng(32.7317146501662, -97.28176552213142),
		new google.maps.LatLng(32.73175639180596, -97.28176552213142),
		new google.maps.LatLng(32.73175639180596, -97.28199350989769),
		new google.maps.LatLng(32.731715778318865, -97.28199350989769),
		new google.maps.LatLng(32.731715778318865, -97.28208872831772),
		new google.maps.LatLng(32.7317609044145, -97.28208872831772),
		new google.maps.LatLng(32.7317609044145, -97.2821222559304)
	];

	window.sfa = new google.maps.Polygon({
		paths: sfaCoords
	});

	sfa.info = "#sfaInfo";
	sfa.pos = new google.maps.LatLng(32.7320031,-97.2816779);
	sfa.flip = false;
	sfa.center = new google.maps.LatLng(32.73200292876019, -97.28162339298233);
	sfa.zoom = 18;

	//This is for icon to appear in center of the building
	sfa.iconLoc = new google.maps.LatLng(32.731782198311755, -97.28188304907383);
	sfa.iconSrc = "/media/style/icon/map/building-name/SFA.png";
	sfa.icon = new google.maps.Marker({
		position: sfa.iconLoc,
		icon: sfa.iconSrc
	});
	sfa.icon.zoom = 18;

	initBuilding(sfa);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//DWA - Dan Waggoner Hall Annex
	var dwaCoords = [
		new google.maps.LatLng(32.73225595028563, -97.28178530342291),
		new google.maps.LatLng(32.73225595028563, -97.28175848133276),
		new google.maps.LatLng(32.73241050613168, -97.28175848133276),
		new google.maps.LatLng(32.73241050613168, -97.28165923959921),
		new google.maps.LatLng(32.732015654897864, -97.28165923959921),
		new google.maps.LatLng(32.732015654897864, -97.28178530342291)
	];

	window.dwa = new google.maps.Polygon({
		paths: dwaCoords
	});

	dwa.info = "#dwaInfo";
	dwa.pos = new google.maps.LatLng(32.7324315, -97.2816613);
	dwa.flip = false;
	dwa.center = new google.maps.LatLng(32.73233457069906, -97.28158067926128);
	dwa.zoom = 18;

	//This is for icon to appear in center of the building
	dwa.iconLoc = new google.maps.LatLng(32.73211619789538, -97.28171947116391);
	dwa.iconSrc = "/media/style/icon/map/building-name/DWA.png";
	dwa.icon = new google.maps.Marker({
		position: dwa.iconLoc,
		icon: dwa.iconSrc
	});
	dwa.icon.zoom = 19;

	initBuilding(dwa);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//NBC - Nenetta Burton Carter Building
	var nbcCoords = [
		new google.maps.LatLng(32.732390199539104, -97.28214069611738),
		new google.maps.LatLng(32.732390199539104, -97.2819636703224),
		new google.maps.LatLng(32.73236425222008, -97.2819636703224),
		new google.maps.LatLng(32.73236425222008, -97.28186711079786),
		new google.maps.LatLng(32.73224354068016, -97.28186711079786),
		new google.maps.LatLng(32.73224354068016, -97.28193684823225),
		new google.maps.LatLng(32.732056268247966, -97.28193684823225),
		new google.maps.LatLng(32.732056268247966, -97.28211521513174),
		new google.maps.LatLng(32.73231912642991, -97.28211521513174),
		new google.maps.LatLng(32.73231912642991, -97.28214069611738)
	];

	window.nbc = new google.maps.Polygon({
		paths: nbcCoords
	});

	nbc.info = "#nbcInfo"
	nbc.pos = new google.maps.LatLng(32.7323875, -97.2818732);
	nbc.flip = false;
	nbc.center = new google.maps.LatLng(32.73230604237388, -97.2816977535828);
	nbc.zoom = 18;

	//This is for icon to appear in center of the building
	nbc.iconLoc = new google.maps.LatLng(32.73212972308081, -97.2820279);
	nbc.iconSrc = "/media/style/icon/map/building-name/NBC.png";
	nbc.icon = new google.maps.Marker({
		position: nbc.iconLoc,
		icon: nbc.iconSrc
	});
	nbc.icon.zoom = 18;

	initBuilding(nbc);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//DWH - Dan Waggoner Hall
	var dwhCoords = [
		new google.maps.LatLng(32.73228189763605, -97.28155731565664),
		new google.maps.LatLng(32.73228189763605, -97.28153317577551),
		new google.maps.LatLng(32.73234394561756, -97.28153317577551),
		new google.maps.LatLng(32.73234394561756, -97.28134139783094),
		new google.maps.LatLng(32.732253693993805, -97.28134139783094),
		new google.maps.LatLng(32.732253693993805, -97.28138028986166),
		new google.maps.LatLng(32.732187133362714, -97.28138028986166),
		new google.maps.LatLng(32.732187133362714, -97.28134139783094),
		new google.maps.LatLng(32.73209913787583, -97.28134139783094),
		new google.maps.LatLng(32.73209913787583, -97.28153317577551),
		new google.maps.LatLng(32.73216005783754, -97.28153317577551),
		new google.maps.LatLng(32.73216005783754, -97.28155731565664)
	];

	window.dwh = new google.maps.Polygon({
		paths: dwhCoords
	});

	dwh.info = "#dwhInfo";
	dwh.pos = new google.maps.LatLng(32.7323813, -97.2813137);
	dwh.flip = false;
	dwh.center = new google.maps.LatLng(32.73230081409896, -97.28157618070594);
	dwh.zoom = 18;

	//This is for icon to appear in center of the building
	dwh.iconLoc = new google.maps.LatLng(32.732145460851136, -97.28144583558196);
	dwh.iconSrc = "/media/style/icon/map/building-name/DWH.png";
	dwh.icon = new google.maps.Marker({
		position: dwh.iconLoc,
		icon: dwh.iconSrc
	});
	dwh.icon.zoom = 18;

	initBuilding(dwh);

	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Glick House Community Counseling Center
	var glickhouseCoords = [
		new google.maps.LatLng(32.7327751845064, -97.28212190362854),
		new google.maps.LatLng(32.7327751845064, -97.28200522753639),
		new google.maps.LatLng(32.73264093583239, -97.28200522753639),
		new google.maps.LatLng(32.73264093583239, -97.28212190362854)
	];

	window.glickhouse = new google.maps.Polygon({
		paths: glickhouseCoords
	});

	glickhouse.info = "#glickhouseInfo";
	glickhouse.pos = new google.maps.LatLng(32.7327971, -97.2819872);
	glickhouse.flip = false;
	glickhouse.center = new google.maps.LatLng(32.73269545388782, -97.28194332529141);
	glickhouse.zoom = 18;

	//This is for icon to appear in center of the building
	glickhouse.iconLoc = new google.maps.LatLng(32.7327167, -97.2820722);
	glickhouse.iconSrc = "/media/style/icon/map/building-name/Glick_house.png";
	glickhouse.icon = new google.maps.Marker({
		position: glickhouse.iconLoc,
		icon: glickhouse.iconSrc
	});
	glickhouse.icon.zoom = 18;

	initBuilding(glickhouse);
	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Lou's Place
	var lousplaceCoords = [
		new google.maps.LatLng(32.73284484046839, -97.2814406395645),
		new google.maps.LatLng(32.732986985791754, -97.2814406395645),
		new google.maps.LatLng(32.732986985791754, -97.28121935732077),
		new google.maps.LatLng(32.73284484046839, -97.28121935732077),
		new google.maps.LatLng(32.73284484046839, -97.28130116469572),
		new google.maps.LatLng(32.732825662113754, -97.28130116469572),
		new google.maps.LatLng(32.732825662113754, -97.28136017329405),
		new google.maps.LatLng(32.73284484046839, -97.28136017329405)
	];

	window.lousplace = new google.maps.Polygon({
		paths: lousplaceCoords
	});

	lousplace.info = "#lousplaceInfo";
	lousplace.pos = new google.maps.LatLng(32.7330300, -97.2811863);
	lousplace.flip = false;
	lousplace.center = new google.maps.LatLng(32.73286078509108, -97.28102365070984);
	lousplace.zoom = 18;

	//This is for icon to appear in center of the building
	lousplace.iconLoc = new google.maps.LatLng(32.73287941821875, -97.28132357116397);
	lousplace.iconSrc = "/media/style/icon/map/building-name/Lous_place.png";
	lousplace.icon = new google.maps.Marker({
		position: lousplace.iconLoc,
		icon: lousplace.iconSrc
	});
	lousplace.icon.zoom = 18;

	initBuilding(lousplace);


	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Baker-Martin House
	var bakermartinhouseCoords = [
		new google.maps.LatLng(32.73275458935182, -97.28145539171408),
		new google.maps.LatLng(32.73275458935182, -97.28140979416082),
		new google.maps.LatLng(32.73278504911389, -97.28140979416082),
		new google.maps.LatLng(32.73278504911389, -97.28134676224897),
		new google.maps.LatLng(32.73275458935182, -97.28134676224897),
		new google.maps.LatLng(32.73275458935182, -97.28127166039656),
		new google.maps.LatLng(32.73277263958244, -97.28127166039656),
		new google.maps.LatLng(32.73277263958244, -97.28121801621626),
		new google.maps.LatLng(32.73269254165613, -97.28121801621626),
		new google.maps.LatLng(32.73269254165613, -97.28125824935148),
		new google.maps.LatLng(32.73266208186246, -97.28125824935148),
		new google.maps.LatLng(32.73266208186246, -97.28141381747434),
		new google.maps.LatLng(32.73269254165613, -97.28141381747434),
		new google.maps.LatLng(32.73269254165613, -97.28145539171408)
	];

	window.bakermartinhouse = new google.maps.Polygon({
		paths: bakermartinhouseCoords
	});

	bakermartinhouse.info = "#bakermartinhouseInfo";
	bakermartinhouse.pos = new google.maps.LatLng(32.7327833, -97.2812111);
	bakermartinhouse.flip = false;
	bakermartinhouse.center = new google.maps.LatLng(32.73271154692503, -97.28122474034454);
	bakermartinhouse.zoom = 18;

	//This is for icon to appear in center of the building
	bakermartinhouse.iconLoc = new google.maps.LatLng(32.732665005544625, -97.28133703558194);
	bakermartinhouse.iconSrc = "/media/style/icon/map/building-name/Baker-Martin.png";
	bakermartinhouse.icon = new google.maps.Marker({
		position: bakermartinhouse.iconLoc,
		icon: bakermartinhouse.iconSrc
	});
	bakermartinhouse.icon.zoom = 18;

	initBuilding(bakermartinhouse);


	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Claudia Stepp Scene Shop
	var claudiasteppsceneshopCoords = [
		new google.maps.LatLng(32.73325612308067, -97.28249439540548),
		new google.maps.LatLng(32.73325612308067, -97.28232943955106),
		new google.maps.LatLng(32.7330192147978, -97.28232943955106),
		new google.maps.LatLng(32.7330192147978, -97.28249439540548)
	];

	window.claudiasteppsceneshop = new google.maps.Polygon({
		paths: claudiasteppsceneshopCoords
	});

	claudiasteppsceneshop.info = "#claudiasteppsceneshopInfo"
	claudiasteppsceneshop.pos = new google.maps.LatLng(32.7332968, -97.2823094);
	claudiasteppsceneshop.flip = false;
	claudiasteppsceneshop.center = new google.maps.LatLng(32.733140080392715, -97.28221207671997);
	claudiasteppsceneshop.zoom = 18;

	//This is for icon to appear in center of the building
	claudiasteppsceneshop.iconLoc = new google.maps.LatLng(32.7331652, -97.2824224);
	claudiasteppsceneshop.iconSrc = "/media/style/icon/map/building-name/Claudia_stepp.png";
	claudiasteppsceneshop.icon = new google.maps.Marker({
		position: claudiasteppsceneshop.iconLoc,
		icon: claudiasteppsceneshop.iconSrc
	});
	claudiasteppsceneshop.icon.zoom = 18;

	initBuilding(claudiasteppsceneshop);


	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//Health Science/Nurse Anesthesia
	var nurseanesthesiaCoords = [
		new google.maps.LatLng(32.73401245605071, -97.28179469115446),
		new google.maps.LatLng(32.73401245605071, -97.28161230094145),
		new google.maps.LatLng(32.7340835278097, -97.28161230094145),
		new google.maps.LatLng(32.7340835278097, -97.28149830705831),
		new google.maps.LatLng(32.734088040300406, -97.28149830705831),
		new google.maps.LatLng(32.734088040300406, -97.28120326406668),
		new google.maps.LatLng(32.733972971715666, -97.28120326406668),
		new google.maps.LatLng(32.733972971715666, -97.28121131069372),
		new google.maps.LatLng(32.73392220611634, -97.28121131069372),
		new google.maps.LatLng(32.73392220611634, -97.28119655854414),
		new google.maps.LatLng(32.73386579986097, -97.28119655854414),
		new google.maps.LatLng(32.73386579986097, -97.2815868199558),
		new google.maps.LatLng(32.73383646859408, -97.2815868199558),
		new google.maps.LatLng(32.73383646859408, -97.28179469115446)
	];

	window.nurseanesthesia = new google.maps.Polygon({
		paths: nurseanesthesiaCoords
	});

	nurseanesthesia.info = "#nurseanesthesiaInfo";
	nurseanesthesia.pos = new google.maps.LatLng(32.7341128, -97.2811837);
	nurseanesthesia.flip = false;
	nurseanesthesia.center = new google.maps.LatLng(32.73403395250312, -97.28127213156051);
	nurseanesthesia.zoom = 18;

	//This is for icon to appear in center of the building
	nurseanesthesia.iconLoc = new google.maps.LatLng(32.7339865,-97.2814760);
	nurseanesthesia.iconSrc = "/media/style/icon/map/building-name/GPNA.png";
	nurseanesthesia.icon = new google.maps.Marker({
		position: nurseanesthesia.iconLoc,
		icon: nurseanesthesia.iconSrc
	});
	nurseanesthesia.icon.zoom = 18;

	initBuilding(nurseanesthesia);


	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	/* NO LONGER EXISTS, commented out
	//Wade Hall
	var wadeCoords = [
		new google.maps.LatLng(32.730574997134966, -97.2783091605396),
		new google.maps.LatLng(32.730574997134966, -97.27825149304579),
		new google.maps.LatLng(32.730581766137384, -97.27825149304579),
		new google.maps.LatLng(32.730581766137384, -97.27820723659704),
		new google.maps.LatLng(32.730574997134966, -97.27820723659704),
		new google.maps.LatLng(32.730574997134966, -97.2781455457897),
		new google.maps.LatLng(32.730426078951524, -97.2781455457897),
		new google.maps.LatLng(32.730426078951524, -97.2783091605396)
	];

	window.wade = new google.maps.Polygon({
		paths: wadeCoords
	});

	wade.info = "#wadeInfo"
	wade.pos = new google.maps.LatLng(32.7325855, -97.2799498);
	wade.flip = flash;
	wade.center = new google.maps.LatLng(32.7332217, -97.2795582);
	wade.zoom = 18;

	//This is for icon to appear in center of the building
	wade.icon = new google.maps.LatLng()

	initBuilding(wade);

	*/
	//----------------------------------------------------------------------------
	//

	//----------------------------------------------------------------------------
	//West Village Student Apartments
	var westvillagestudentapartmentsCoords = [
		new google.maps.LatLng(32.73554636377377, -97.28064670902631),
		new google.maps.LatLng(32.73555313239868, -97.28064670902631),
		new google.maps.LatLng(32.73555313239868, -97.2806453679218),
		new google.maps.LatLng(32.73555313239868, -97.28065447336292),
		new google.maps.LatLng(32.735588534355024, -97.28065447336292), //Outside North Building
		new google.maps.LatLng(32.735588534355024, -97.28060351139163),
		new google.maps.LatLng(32.73560207159791, -97.28060351139163),
		new google.maps.LatLng(32.73560207159791, -97.28056998377895),
		new google.maps.LatLng(32.735618993148634, -97.28056998377895),
		new google.maps.LatLng(32.735618993148634, -97.28051097518062),
		new google.maps.LatLng(32.735589662458665, -97.28051097518062),
		new google.maps.LatLng(32.735589662458665, -97.2804707420454),
		new google.maps.LatLng(32.735624633664806, -97.2804707420454),
		new google.maps.LatLng(32.735624633664806, -97.28042782670116),
		new google.maps.LatLng(32.735615608838735, -97.28042782670116),
		new google.maps.LatLng(32.735615608838735, -97.28040100461101),
		new google.maps.LatLng(32.73562237745837, -97.28040100461101),
		new google.maps.LatLng(32.73562237745837, -97.28036077147578),
		new google.maps.LatLng(32.735588534355024, -97.28036077147578),
		new google.maps.LatLng(32.735588534355024, -97.28033663159465),
		new google.maps.LatLng(32.735624633664806, -97.28033663159465),
		new google.maps.LatLng(32.735624633664806, -97.28029371625041),
		new google.maps.LatLng(32.73561673694204, -97.28029371625041),
		new google.maps.LatLng(32.73561673694204, -97.28026689416026),
		new google.maps.LatLng(32.73562237745837, -97.28026689416026),
		new google.maps.LatLng(32.73562237745837, -97.28022666102504),
		new google.maps.LatLng(32.73558740625136, -97.28022666102504),
		new google.maps.LatLng(32.73558740625136, -97.28018776899432),
		new google.maps.LatLng(32.735618993148634, -97.28018776899432),
		new google.maps.LatLng(32.735618993148634, -97.28012473708247),
		new google.maps.LatLng(32.73560207159791, -97.28012473708247),
		new google.maps.LatLng(32.73560207159791, -97.28009120946979),
		new google.maps.LatLng(32.73558627814767, -97.28009120946979),
		new google.maps.LatLng(32.73558627814767, -97.28004292970752),
		new google.maps.LatLng(32.73555243503059, -97.28004292970752),
		new google.maps.LatLng(32.73555243503059, -97.28005231743907),
		new google.maps.LatLng(32.73554185135686, -97.28005231743907),
		new google.maps.LatLng(32.73554185135686, -97.27996140462301), //Outside East Building
		new google.maps.LatLng(32.73554185135686, -97.27994531136892),
		new google.maps.LatLng(32.73554974808629, -97.27994531136892),
		new google.maps.LatLng(32.73554974808629, -97.2799050782337),
		new google.maps.LatLng(32.73553959514834, -97.2799050782337),
		new google.maps.LatLng(32.73553959514834, -97.27987825614355),
		new google.maps.LatLng(32.735547491877945, -97.27987825614355),
		new google.maps.LatLng(32.735547491877945, -97.27983936411283),
		new google.maps.LatLng(32.73553959514834, -97.27983936411283),
		new google.maps.LatLng(32.73553959514834, -97.27982058864973),
		new google.maps.LatLng(32.73547078076076, -97.27982058864973),
		new google.maps.LatLng(32.73547078076076, -97.27983802300832),
		new google.maps.LatLng(32.735435809494234, -97.27983802300832),
		new google.maps.LatLng(32.735435809494234, -97.27979913097761),
		new google.maps.LatLng(32.735401966320026, -97.27979913097761),
		new google.maps.LatLng(32.735401966320026, -97.27980851870916),
		new google.maps.LatLng(32.73537940419677, -97.27980851870916),
		new google.maps.LatLng(32.73537940419677, -97.2797977898731),
		new google.maps.LatLng(32.73534217668086, -97.2797977898731),
		new google.maps.LatLng(32.73534217668086, -97.27983936411283),
		new google.maps.LatLng(32.73531171779265, -97.27983936411283),
		new google.maps.LatLng(32.73531171779265, -97.27982461196325),
		new google.maps.LatLng(32.73524290322912, -97.27982461196325),
		new google.maps.LatLng(32.73524290322912, -97.27984338742635),
		new google.maps.LatLng(32.735233878364404, -97.27984338742635),
		new google.maps.LatLng(32.735233878364404, -97.27988093835256),
		new google.maps.LatLng(32.73524064701302, -97.27988093835256),
		new google.maps.LatLng(32.73524064701302, -97.27990910154722),
		new google.maps.LatLng(32.735233878364404, -97.27990910154722),
		new google.maps.LatLng(32.735233878364404, -97.27995067578695),
		new google.maps.LatLng(32.73525192809296, -97.27995067578695),
		new google.maps.LatLng(32.73525192809296, -97.28005259972952),
		new google.maps.LatLng(32.73523162214807, -97.28005259972952), //Outside South Building
		new google.maps.LatLng(32.73523162214807, -97.2800432119979),
		new google.maps.LatLng(32.73519665078771, -97.2800432119979),
		new google.maps.LatLng(32.73519665078771, -97.28009551507375),
		new google.maps.LatLng(32.735183113483245, -97.28009551507375),
		new google.maps.LatLng(32.735183113483245, -97.28012904268644),
		new google.maps.LatLng(32.73516619184978, -97.28012904268644),
		new google.maps.LatLng(32.73516619184978, -97.28018671018026),
		new google.maps.LatLng(32.73519665078771, -97.28018671018026),
		new google.maps.LatLng(32.73519665078771, -97.28022828441999),
		new google.maps.LatLng(32.735160551304574, -97.28022828441999),
		new google.maps.LatLng(32.735160551304574, -97.28026315313718),
		new google.maps.LatLng(32.735167319958784, -97.28026315313718),
		new google.maps.LatLng(32.735167319958784, -97.28029533964536),
		new google.maps.LatLng(32.735160551304574, -97.28029533964536),
		new google.maps.LatLng(32.735160551304574, -97.2803382549896),
		new google.maps.LatLng(32.73519665078771, -97.2803382549896),
		new google.maps.LatLng(32.73519665078771, -97.28036373597524),
		new google.maps.LatLng(32.73516167941365, -97.28036373597524),
		new google.maps.LatLng(32.73516167941365, -97.28040262800596),
		new google.maps.LatLng(32.735167319958784, -97.28040262800596),
		new google.maps.LatLng(32.735167319958784, -97.28042945009611),
		new google.maps.LatLng(32.73515942319549, -97.28042945009611),
		new google.maps.LatLng(32.73515942319549, -97.28047236544035),
		new google.maps.LatLng(32.73519665078771, -97.28047236544035),
		new google.maps.LatLng(32.73519665078771, -97.28051259857557),
		new google.maps.LatLng(32.735167319958784, -97.28051259857557),
		new google.maps.LatLng(32.735167319958784, -97.2805729482784),
		new google.maps.LatLng(32.735183113483245, -97.2805729482784),
		new google.maps.LatLng(32.735183113483245, -97.28060513478658),
		new google.maps.LatLng(32.73519777889633, -97.28060513478658),
		new google.maps.LatLng(32.73519777889633, -97.28065743786237),
		new google.maps.LatLng(32.73523275025624, -97.28065743786237),
		new google.maps.LatLng(32.73523275025624, -97.28064670902631),
		new google.maps.LatLng(32.73525079998502, -97.28064670902631),
		new google.maps.LatLng(32.73525079998502, -97.28073119861028), //Outside West Building
		new google.maps.LatLng(32.73525079998502, -97.2807513151779),
		new google.maps.LatLng(32.73523726268878, -97.2807513151779),
		new google.maps.LatLng(32.73523726268878, -97.28079020720861),
		new google.maps.LatLng(32.73524403133716, -97.28079020720861),
		new google.maps.LatLng(32.73524403133716, -97.28081837040327),
		new google.maps.LatLng(32.73523726268878, -97.28081837040327),
		new google.maps.LatLng(32.73523726268878, -97.28085726243398),
		new google.maps.LatLng(32.735281258894034, -97.28085726243398),
		new google.maps.LatLng(32.735281258894034, -97.28087335568807),
		new google.maps.LatLng(32.735316230221194, -97.28087335568807),
		new google.maps.LatLng(32.735316230221194, -97.28085860353849),
		new google.maps.LatLng(32.73535120153464, -97.28085860353849),
		new google.maps.LatLng(32.73535120153464, -97.28089883667371),
		new google.maps.LatLng(32.73538391662188, -97.28089883667371),
		new google.maps.LatLng(32.73538391662188, -97.28088944894216),
		new google.maps.LatLng(32.73540535063803, -97.28088944894216),
		new google.maps.LatLng(32.73540535063803, -97.28089883667371),
		new google.maps.LatLng(32.73544145002204, -97.28089883667371),
		new google.maps.LatLng(32.73544145002204, -97.28085726243398),
		new google.maps.LatLng(32.73547416507615, -97.28085726243398),
		new google.maps.LatLng(32.73547416507615, -97.28087335568807),
		new google.maps.LatLng(32.73550800822293, -97.28087335568807),
		new google.maps.LatLng(32.73550800822293, -97.28085458022497),
		new google.maps.LatLng(32.735552004294554, -97.28085458022497),
		new google.maps.LatLng(32.735552004294554, -97.28081434708974),
		new google.maps.LatLng(32.73554410756535, -97.28081434708974),
		new google.maps.LatLng(32.73554410756535, -97.28078484279058),
		new google.maps.LatLng(32.735552004294554, -97.28078484279058),
		new google.maps.LatLng(32.735552004294554, -97.28074729186437),
		new google.maps.LatLng(32.73554636377377, -97.28074729186437),
		new google.maps.LatLng(32.73554636377377, -97.28064670902631),
		new google.maps.LatLng(32.73553395462677, -97.28064670902631), //Inside North Building
		new google.maps.LatLng(32.73553395462677, -97.28065341454885),
		new google.maps.LatLng(32.735497855280244, -97.28065341454885),
		new google.maps.LatLng(32.735497855280244, -97.28060111147306),
		new google.maps.LatLng(32.73548544612649, -97.28060111147306),
		new google.maps.LatLng(32.73548544612649, -97.28056892496488),
		new google.maps.LatLng(32.73546626834005, -97.28056892496488),
		new google.maps.LatLng(32.73546626834005, -97.28051259857557),
		new google.maps.LatLng(32.73549672717543, -97.28051259857557),
		new google.maps.LatLng(32.73549672717543, -97.28046968323133),
		new google.maps.LatLng(32.735459499708554, -97.28046968323133),
		new google.maps.LatLng(32.735459499708554, -97.2804281089916),
		new google.maps.LatLng(32.73546739644524, -97.2804281089916),
		new google.maps.LatLng(32.73546739644524, -97.28039994579694),
		new google.maps.LatLng(32.73545837160324, -97.28039994579694),
		new google.maps.LatLng(32.73545837160324, -97.28036105376623),
		new google.maps.LatLng(32.73549447096577, -97.28036105376623),
		new google.maps.LatLng(32.73549447096577, -97.28033423167608),
		new google.maps.LatLng(32.73546062781382, -97.28033423167608),
		new google.maps.LatLng(32.73546062781382, -97.28029399854086),
		new google.maps.LatLng(32.73546626834005, -97.28029399854086),
		new google.maps.LatLng(32.73546626834005, -97.2802658353462),
		new google.maps.LatLng(32.73545837160324, -97.2802658353462),
		new google.maps.LatLng(32.73545837160324, -97.28022694331548),
		new google.maps.LatLng(32.73549447096577, -97.28022694331548),
		new google.maps.LatLng(32.73549447096577, -97.28018536907575),
		new google.maps.LatLng(32.7354640121296, -97.28018536907575),
		new google.maps.LatLng(32.7354640121296, -97.28012367826841),
		new google.maps.LatLng(32.73548093370652, -97.28012367826841),
		new google.maps.LatLng(32.73548093370652, -97.28004187089346),
		new google.maps.LatLng(32.73552718600041, -97.28004187089346),
		new google.maps.LatLng(32.73552718600041, -97.28005231743907),
		new google.maps.LatLng(32.73554185135686, -97.28005231743907),
		new google.maps.LatLng(32.73554185135686, -97.27996140462301),
		new google.maps.LatLng(32.7354719088659, -97.27996140462301), //Inside East Building
		new google.maps.LatLng(32.7354719088659, -97.27994665247343),
		new google.maps.LatLng(32.73543693759983, -97.27994665247343),
		new google.maps.LatLng(32.73543693759983, -97.27999053863141),
		new google.maps.LatLng(32.73541816664228, -97.27999053863141),
		new google.maps.LatLng(32.73541816664228, -97.2800066318855),
		new google.maps.LatLng(32.73537191429183, -97.2800066318855),
		new google.maps.LatLng(32.73537191429183, -97.27999187973592),
		new google.maps.LatLng(32.73534822405425, -97.27999187973592),
		new google.maps.LatLng(32.73534822405425, -97.27994896439168),
		new google.maps.LatLng(32.735312124632486, -97.27994896439168),
		new google.maps.LatLng(32.735312124632486, -97.27995067578695),
		new google.maps.LatLng(32.73525192809296, -97.27995067578695),
		new google.maps.LatLng(32.73525192809296, -97.28004418281171),
		new google.maps.LatLng(32.735286178164074, -97.28004418281171), //Inside South Building
		new google.maps.LatLng(32.735286178164074, -97.2800964858875),
		new google.maps.LatLng(32.73529971545289, -97.2800964858875),
		new google.maps.LatLng(32.73529971545289, -97.28012867239568),
		new google.maps.LatLng(32.73532002138225, -97.28012867239568),
		new google.maps.LatLng(32.73532002138225, -97.28018902209851),
		new google.maps.LatLng(32.73528956248646, -97.28018902209851),
		new google.maps.LatLng(32.73528956248646, -97.28023059633824),
		new google.maps.LatLng(32.73532453381036, -97.28023059633824),
		new google.maps.LatLng(32.73532453381036, -97.28026814726445),
		new google.maps.LatLng(32.73531438084679, -97.28026814726445),
		new google.maps.LatLng(32.73531438084679, -97.28029631045911),
		new google.maps.LatLng(32.73532453381036, -97.28029631045911),
		new google.maps.LatLng(32.73532453381036, -97.28033654359433),
		new google.maps.LatLng(32.73528956248646, -97.28033654359433),
		new google.maps.LatLng(32.73528956248646, -97.280361050436),
		new google.maps.LatLng(32.73532453381036, -97.280361050436), //
		new google.maps.LatLng(32.73532453381036, -97.28040262467573),
		new google.maps.LatLng(32.735319941722615, -97.28040262467573),
		new google.maps.LatLng(32.735319941722615, -97.2804321289749),
		new google.maps.LatLng(32.73532671036472, -97.2804321289749),
		new google.maps.LatLng(32.73532671036472, -97.2804696799011),
		new google.maps.LatLng(32.73529061093425, -97.2804696799011),
		new google.maps.LatLng(32.73529061093425, -97.28051259524534),
		new google.maps.LatLng(32.73532106982969, -97.28051259524534),
		new google.maps.LatLng(32.73532106982969, -97.28057294494818),
		new google.maps.LatLng(32.735305276329655, -97.28057294494818),
		new google.maps.LatLng(32.735305276329655, -97.28060513145635),
		new google.maps.LatLng(32.73528948282682, -97.28060513145635),
		new google.maps.LatLng(32.73528948282682, -97.28065609342764),
		new google.maps.LatLng(32.735256767704904, -97.28065609342764),
		new google.maps.LatLng(32.735256767704904, -97.28064536459158),
		new google.maps.LatLng(32.73525079998502, -97.28064536459158),
		new google.maps.LatLng(32.73525079998502, -97.28073119861028), //Inside West Building
		new google.maps.LatLng(32.73531325273964, -97.28073119861028),
		new google.maps.LatLng(32.73531325273964, -97.28074960378262),
		new google.maps.LatLng(32.73534596784082, -97.28074960378262),
		new google.maps.LatLng(32.73534596784082, -97.28070668843839),
		new google.maps.LatLng(32.73538093914259, -97.28070668843839),
		new google.maps.LatLng(32.73538093914259, -97.28071607616994),
		new google.maps.LatLng(32.73540462937146, -97.28071607616994),
		new google.maps.LatLng(32.73540462937146, -97.28070668843839),
		new google.maps.LatLng(32.735439600650196, -97.28070668843839),
		new google.maps.LatLng(32.735439600650196, -97.28074960378262),
		new google.maps.LatLng(32.73547570002034, -97.28074960378262),
		new google.maps.LatLng(32.73547570002034, -97.28072985417555),
		new google.maps.LatLng(32.73554636377377, -97.28072985417555)
	];

	window.westvillagestudentapartments = new google.maps.Polygon({
		paths: westvillagestudentapartmentsCoords
	});

	westvillagestudentapartments.info = "#westvillagestudentapartmentsInfo";
	westvillagestudentapartments.pos = new google.maps.LatLng(32.7356400, -97.2799922);
	westvillagestudentapartments.flip = false;
	westvillagestudentapartments.center = new google.maps.LatLng(32.735485570326084, -97.28011251598957);
	westvillagestudentapartments.zoom = 18;

	//This is for icon to appear in center of the building
	westvillagestudentapartments.iconLoc = new google.maps.LatLng(32.73529520827544, -97.28035207116397);
	westvillagestudentapartments.iconSrc = "/media/style/icon/map/building-name/West_village.png";
	westvillagestudentapartments.icon = new google.maps.Marker({
		position: westvillagestudentapartments.iconLoc,
		icon: westvillagestudentapartments.iconSrc
	});
	westvillagestudentapartments.icon.zoom = 18;

	westvillagestudentapartments.residentHall = true;

	initBuilding(westvillagestudentapartments);


	//----------------------------------------------------------------------------
	//Nick & Lou Martin University Center
	/*
	var constructionCoords = [
		new google.maps.LatLng(32.7324862, -97.2799230),
		new google.maps.LatLng(32.7324839, -97.2791183),
		new google.maps.LatLng(32.7321884, -97.2791183),
		new google.maps.LatLng(32.7321816, -97.2785872),
		new google.maps.LatLng(32.7320846, -97.2785872),
		new google.maps.LatLng(32.7320891, -97.2790995),
		new google.maps.LatLng(32.7318770, -97.2790754),
		new google.maps.LatLng(32.7315386, -97.2790700),
		new google.maps.LatLng(32.7315386, -97.2793248),
		new google.maps.LatLng(32.7312182, -97.2793329),
		new google.maps.LatLng(32.7312204, -97.2798318),
		new google.maps.LatLng(32.7316288, -97.2798264),
		new google.maps.LatLng(32.7316311, -97.2801241),
		new google.maps.LatLng(32.7320891, -97.2801295),
		new google.maps.LatLng(32.7320891, -97.2800007),
		new google.maps.LatLng(32.7321004, -97.2799605),
		new google.maps.LatLng(32.7321184, -97.2799364),
		new google.maps.LatLng(32.7321455, -97.2799203),
		new google.maps.LatLng(32.7321748, -97.2799122),
		new google.maps.LatLng(32.7324862, -97.2799230)
	];

	window.construction = new google.maps.Polygon({
		paths: constructionCoords
	});

	construction.info = "#nickandloumartinuniversitycenterInfo"
	construction.pos = new google.maps.LatLng(32.7325232, -97.2795274);
	construction.flip = false;
	construction.center = new google.maps.LatLng(32.73225149980948, -97.27946164047546);
	construction.zoom = 18;

	//This is for icon to appear in center of the building
	construction.icon = new google.maps.LatLng(32.7319304,-97.2795537);

	initBuilding(construction);
	*/
	//---------------------------------------------

	// Martin University Center (Not sure is it related to the construction site coords

	var nickandloumartinuniversitycenterCoords = [
		new google.maps.LatLng(32.7321432, -97.2791746),
		new google.maps.LatLng(32.7318589, -97.2791746),
		new google.maps.LatLng(32.7318589, -97.2797889),
		new google.maps.LatLng(32.7321432, -97.2797889),
		new google.maps.LatLng(32.7321432, -97.2791746)
	];

	window.nickandloumartinuniversitycenter = new google.maps.Polygon({
		paths: nickandloumartinuniversitycenterCoords
	});

	nickandloumartinuniversitycenter.info = "#nickandloumartinuniversitycenterInfo";
	nickandloumartinuniversitycenter.pos = new google.maps.LatLng(32.7320432, -97.2798889);
	nickandloumartinuniversitycenter.flip = true;
	nickandloumartinuniversitycenter.center = new google.maps.LatLng(32.7332217, -97.2795582);
	nickandloumartinuniversitycenter.zoom = 18;

	//This is for icon to appear in center of the building
	nickandloumartinuniversitycenter.iconLoc = new google.maps.LatLng(32.73191911849971, -97.27947591593858);
	nickandloumartinuniversitycenter.iconSrc = "/media/style/icon/map/building-name/University-center.png";
	nickandloumartinuniversitycenter.icon = new google.maps.Marker({
		position: nickandloumartinuniversitycenter.iconLoc,
		icon: nickandloumartinuniversitycenter.iconSrc
	});
	nickandloumartinuniversitycenter.icon.zoom = 18;

	initBuilding(nickandloumartinuniversitycenter);

	//---------------------------------------------

	//--------------------------------------------------------
	// Canafax Clock Tower

	var canafaxclocktowerCoords = [
		new google.maps.LatLng(32.7311578, -97.2796581),
		new google.maps.LatLng(32.7310320, -97.2796581),
		new google.maps.LatLng(32.7310320, -97.2794864),
		new google.maps.LatLng(32.7311578, -97.2794864),
		new google.maps.LatLng(32.7311578, -97.2796581)
	];

	window.canafaxclocktower = new google.maps.Polygon({
		paths: canafaxclocktowerCoords
	});

	canafaxclocktower.info = "#canafaxclocktowerInfo";
	canafaxclocktower.pos = new google.maps.LatLng(32.7311844, -97.2795210);
	canafaxclocktower.flip = false;
	canafaxclocktower.center = new google.maps.LatLng(32.73111426861266, -97.27961452638931);
	canafaxclocktower.zoom = 18;

	//This is for icon to appear in center of the building
	canafaxclocktower.iconLoc = new google.maps.LatLng(32.731044000000004, -97.279571017791);
	canafaxclocktower.iconSrc = "/media/style/icon/map/building-name/Clock-tower.png";
	canafaxclocktower.icon = new google.maps.Marker({
		position: canafaxclocktower.iconLoc,
		icon: canafaxclocktower.iconSrc
	});
	canafaxclocktower.icon.zoom = 18;


	initBuilding(canafaxclocktower);

	//--------------------------------------------------------

	// UMC Conference Center

	var unitedmethodistconferencecenterCoords = [
		new google.maps.LatLng(32.7303610, -97.2794768),
		new google.maps.LatLng(32.7303610, -97.2791674),
		new google.maps.LatLng(32.7305655, -97.2791674),
		new google.maps.LatLng(32.7305655, -97.2792068),
		new google.maps.LatLng(32.7305785, -97.2792068),
		new google.maps.LatLng(32.7305785, -97.2792926),
		new google.maps.LatLng(32.7305853, -97.2792926),
		new google.maps.LatLng(32.7305853, -97.2793020),
		new google.maps.LatLng(32.7305920, -97.2793020),
		new google.maps.LatLng(32.7305920, -97.2793349),
		new google.maps.LatLng(32.7305858, -97.2793349),
		new google.maps.LatLng(32.7305858, -97.2793449),
		new google.maps.LatLng(32.7305785, -97.2793449),
		new google.maps.LatLng(32.7305785, -97.2794321),
		new google.maps.LatLng(32.7305678, -97.2794321),
		new google.maps.LatLng(32.7305678, -97.2794724),
		new google.maps.LatLng(32.7303610, -97.2794768)
	];
	window.unitedmethodistconferencecenter = new google.maps.Polygon({
		paths: unitedmethodistconferencecenterCoords
	});

	unitedmethodistconferencecenter.info = "#unitedmethodistconferencecenterInfo"
	unitedmethodistconferencecenter.pos = new google.maps.LatLng(32.7306399, -97.2791671);
	unitedmethodistconferencecenter.flip = false;
	unitedmethodistconferencecenter.center = new google.maps.LatLng(32.73062426468846, -97.27918112661656);
	unitedmethodistconferencecenter.zoom = 18;

	//This is for icon to appear in center of the building
	unitedmethodistconferencecenter.iconLoc = new google.maps.LatLng(32.730409304231415, -97.279314082209);
	unitedmethodistconferencecenter.iconSrc = "/media/style/icon/map/building-name/United-methodist-conference-center.png";
	unitedmethodistconferencecenter.icon = new google.maps.Marker({
		position: unitedmethodistconferencecenter.iconLoc,
		icon: unitedmethodistconferencecenter.iconSrc
	});
	unitedmethodistconferencecenter.icon.zoom = 18;


	initBuilding(unitedmethodistconferencecenter);
	//-------------------------------------------------
	// Bernice Coulter Templeton Art Studio

	var bernicecoultertempletonartstudioCoords = [
		new google.maps.LatLng(32.7302814, -97.2794961),
		new google.maps.LatLng(32.7302814, -97.2793657),
		new google.maps.LatLng(32.7303610, -97.2793664),
		new google.maps.LatLng(32.7303610, -97.2794961),
		new google.maps.LatLng(32.7302814, -97.2794961)
	];

	window.bernicecoultertempletonartstudio = new google.maps.Polygon({
		paths: bernicecoultertempletonartstudioCoords
	});

	bernicecoultertempletonartstudio.info = "#bernicecoultertempletonartstudioInfo"
	bernicecoultertempletonartstudio.pos = new google.maps.LatLng(32.7303528, -97.2795295);
	bernicecoultertempletonartstudio.flip = true;
	bernicecoultertempletonartstudio.center = new google.maps.LatLng(32.73062426468846, -97.27918112661656);
	bernicecoultertempletonartstudio.zoom = 19;

	//This is for icon to appear in center of the building
	bernicecoultertempletonartstudio.iconLoc = new google.maps.LatLng(32.73027807317658, -97.27942075337296);
	bernicecoultertempletonartstudio.iconSrc = "/media/style/icon/map/building-name/Bernice-coulter-templeton.png";
	bernicecoultertempletonartstudio.icon = new google.maps.Marker({
		position: bernicecoultertempletonartstudio.iconLoc,
		icon: bernicecoultertempletonartstudio.iconSrc
	});
	bernicecoultertempletonartstudio.icon.zoom = 19;

	initBuilding(bernicecoultertempletonartstudio);
	//--------------------------------------------------
	// Jack Morton Business Accelerator

	var jackmortonbusinessacceleratorCoords = [
		new google.maps.LatLng(32.7306276, -97.2805033),
		new google.maps.LatLng(32.7304075, -97.2805033),
		new google.maps.LatLng(32.7304075, -97.2803392),
		new google.maps.LatLng(32.7306263, -97.2803392),
		new google.maps.LatLng(32.7306276, -97.2805033)
	];

	window.jackmortonbusinessaccelerator = new google.maps.Polygon({
		paths: jackmortonbusinessacceleratorCoords
	});

	jackmortonbusinessaccelerator.info = "#jackmortonbusinessacceleratorInfo";
	jackmortonbusinessaccelerator.pos = new google.maps.LatLng(32.7306531, -97.2802899);
	jackmortonbusinessaccelerator.flip = true;
	jackmortonbusinessaccelerator.center = new google.maps.LatLng(32.73055934055779, -97.28034407824788);
	jackmortonbusinessaccelerator.zoom = 19;

	//This is for icon to appear in center of the building
	jackmortonbusinessaccelerator.iconLoc = new google.maps.LatLng(32.7304352718775, -97.28041553558194);
	jackmortonbusinessaccelerator.iconSrc = "/media/style/icon/map/building-name/Jack-Morton-business.png";
	jackmortonbusinessaccelerator.icon = new google.maps.Marker({
		position: jackmortonbusinessaccelerator.iconLoc,
		icon: jackmortonbusinessaccelerator.iconSrc
	});
	jackmortonbusinessaccelerator.icon.zoom = 19;

	initBuilding(jackmortonbusinessaccelerator);

	//----------------------------------------------------------------------------
	// Community Counseling Center
	var communitycounselingcenterCoords = [
		new google.maps.LatLng(32.7306276, -97.2807935),
		new google.maps.LatLng(32.7304617, -97.2807935),
		new google.maps.LatLng(32.7304617, -97.2806607),
		new google.maps.LatLng(32.7304180, -97.2806603),
		new google.maps.LatLng(32.7304180, -97.2805033),
		new google.maps.LatLng(32.7306276, -97.2805033),
		new google.maps.LatLng(32.7306276, -97.2807935)
	];

	window.communitycounselingcenter = new google.maps.Polygon({
		paths: communitycounselingcenterCoords
	});

	communitycounselingcenter.info = "#communitycounselingcenterInfo";
	communitycounselingcenter.pos = new google.maps.LatLng(32.7306550, -97.2805343);
	communitycounselingcenter.flip = false;
	communitycounselingcenter.center = new google.maps.LatLng(32.73042154109755, -97.28066075438682);
	communitycounselingcenter.zoom = 18;

	//This is for icon to appear in center of the building
	communitycounselingcenter.iconLoc = new google.maps.LatLng(32.7305006859593, -97.28064898220902);
	communitycounselingcenter.iconSrc = "/media/style/icon/map/building-name/community-counseling.png";
	communitycounselingcenter.icon = new google.maps.Marker({
		position: communitycounselingcenter.iconLoc,
		icon: communitycounselingcenter.iconSrc
	});
	communitycounselingcenter.icon.zoom = 18;

	initBuilding(communitycounselingcenter);
	//----------------------------------------------------------------------------
	/*
	Ben's Tripple B - comment me out
	var BBBCoords = [
		new google.maps.LatLng(32.7306274,-97.2813448),
		new google.maps.LatLng(32.7304181, -97.2813448),
		new google.maps.LatLng(32.7304181, -97.2812683),
		new google.maps.LatLng(32.7304387, -97.2812678),
		new google.maps.LatLng(32.7304390, -97.2811866),
		new google.maps.LatLng(32.7306274, -97.2811866),
		new google.maps.LatLng(32.7306274, -97.2813448)
	];

	window.BBB = new google.maps.Polygon({
		paths: BBBCoords
	});

	BBB.info = "#BBBInfo";
	BBB.pos = new google.maps.LatLng(32.7306675,-97.2811872);
	BBB.flip = true;
	BBB.center = new google.maps.LatLng(32.7305825,-97.2812610);
	BBB.zoom = 18;

	BBB.iconLoc = new google.maps.LatLng(32.7304953,-97.2812611);
	BBB.iconSrc = "/media/style/icon/map/building-name/triple-B.png";
	BBB.icon = new google.maps.Marker({
		position: BBB.iconLoc,
		icon: BBB.iconSrc
	});
	BBB.icon.zoom = 18;

	initBuilding(BBB);
	*/
	//----------------------------------------------------------------------------

	//Subway Sandwiches
	var subwaysandwichesCoords = [
		new google.maps.LatLng(32.7305822,-97.2816730),
		new google.maps.LatLng(32.7303628,-97.2816730),
		new google.maps.LatLng(32.7303628,-97.2815121),
		new google.maps.LatLng(32.7305836,-97.2815121),
		new google.maps.LatLng(32.7305836,-97.2816730)
	];

	window.subwaysandwiches = new google.maps.Polygon({
		paths: subwaysandwichesCoords
	});

	subwaysandwiches.info = "#subwaysandwichesInfo";
	subwaysandwiches.pos = new google.maps.LatLng(32.7305119,-97.2816282 );
	subwaysandwiches.flip = true;
	subwaysandwiches.center = new google.maps.LatLng(32.7304826, -97.2815953);
	subwaysandwiches.zoom = 18;

	//This is for icon to appear in center of the building
	subwaysandwiches.iconLoc = new google.maps.LatLng(32.7304119, -97.2815910);
	subwaysandwiches.iconSrc = "/media/style/icon/map/building-name/Subway.png";
	subwaysandwiches.icon = new google.maps.Marker({
		position: subwaysandwiches.iconLoc,
		icon: subwaysandwiches.iconSrc
	});
	subwaysandwiches.icon.zoom = 18;

	initBuilding(subwaysandwiches);
}






















