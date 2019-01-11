<?php
// header link
$HEADER_LINK = "https://i.imgur.com/AURHTat.png"; // header image link
$PLANNING_IMG = "https://japan-impact.ch/wp-content/uploads/2019/01/planning_complet-4.jpg"; // planning plan image link
$LOGO_URL = "https://upload.wikimedia.org/wikipedia/fr/5/52/Japan_Impact_Logo.png"; // logo link

// link to download plannings
$download_sa = custom_get_page_link("Download planning Saturday"); // name of download planning saturday
$download_di = custom_get_page_link("Download planning Dimanche"); // name of download planning sunday


// $download_sa = custom_get_page_link("ddl planning samedi"); // name of download planning saturday
// $download_di = custom_get_page_link("ddl planning dimanche"); // name of download planning sunday



// CATEGORIES SELECTION
if(pll_current_language() == "fr") {
  //$categories_all = "martial-arts,projections,conferences,animations,concerts,ateliers,activites-continues"; // slugs of the categories in the program FR
    $categories_all = "martial-arts,projections,conferences,animations,concerts-fr,ateliers,activites-continues"; // slugs of the categories in the program FR
  $category_slugs = preg_split("/\,/",$categories_all);
  $interdit_category = "interdit"; // forbidden category slug FR
}
else {
  $categories_all = "martial-arts-en,projections-en,conferences-en,animations-en,concerts-en,ateliers-en,continuous-activities"; // slugs of the categories in the program EN
  $category_slugs = preg_split("/\,/",$categories_all);
  $interdit_category = "forbidden"; // forbidden category slug EN
  $interdit_id = "";
}

$interdit_id = get_category_by_slug($interdit_category)->term_id;

$colors = array(
  // categories colors
  // if colors change, need to change it in the css as well
  "martial-arts" => "#00aeef",
  "martial-arts-en" => "#00aeef",
  "projections" => "#8178ca",
  "projections-en" => "#8178ca",
  "conferences" => "#39b54a",
  "conferences-en" => "#39b54a",
  "animations" => "#ffa92e",
  "animations-en" => "#ffa92e",
  "concerts" => "#3953a4",
  "concerts-en" => "#3953a4",
  "ateliers" => "grey",
  "ateliers-en" => "grey",
  "continuous-activities" => "#ec008c",
  "activites-continues" => "#ec008c",
  "interdit" => "grey",
  "forbidden" => "grey"
);

// zone colors
$zone_colors = array(
  "green" => "#0b8140",
  "blue" => "#3953a4",
  "yellow" => "#ffcd21",
  "purple" => "#7c277d",
  "red" => "#ed2024",
  "orange" => "#f08821",
  "pink" => "#f497c0"
);


$rooms = array(
  // zones, rooms
  "green" => array("aki" => array(),"natsu" => array(),"haru" => array(),"uki" => array(),"fuyu" => array()),
  "yellow" => array("matcha" => array(),"mochi" => array()), // yellow
  "pink" => array("myôga" => array(),"momiji" => array(), "ginkgo"=>array(), "sakura"=>array()), // pink
  "orange" => array("meiji" => array(),"edo" => array(), "mad café"=>array(), "edo"=>array(), "sengoku"=>array()), // orange
  "red" => array("tokyo" => array(),"kyoto" => array(), "osaka"=>array(), "nara"=>array(), "nagoya"=>array(), "nagano"=>array(), "sapporo"=>array()), // rouge
  "blue" => array("matsuri" => array()), // blue
  "purple" => array("usagi" => array(),"kistune" => array(), "tanuki"=>array(), "shika"=>array()), // purple

);

$planning = array("sa" => array(), "di"=> array()); // days

foreach ($rooms as $key => $value) { // hours
  $satursday = array(
    "10:00"=>$value, "10:30"=>$value, "11:00"=>$value, "11:30"=>$value,
    "12:00"=>$value, "12:30"=>$value, "13:00"=>$value, "13:30"=>$value,
    "14:00"=>$value, "14:30"=>$value, "15:00"=>$value, "15:30"=>$value,
    "16:00"=>$value, "16:30"=>$value, "17:00"=>$value, "17:30"=>$value,
    "18:00"=>$value, "18:30"=>$value, "19:00"=>$value, "19:30"=>$value
  );
  $sunday = array(
    "10:00"=>$value, "10:30"=>$value, "11:00"=>$value, "11:30"=>$value,
    "12:00"=>$value, "12:30"=>$value, "13:00"=>$value, "13:30"=>$value,
    "14:00"=>$value, "14:30"=>$value, "15:00"=>$value, "15:30"=>$value,
    "16:00"=>$value, "16:30"=>$value, "17:00"=>$value, "17:30"=>$value,
    "18:00"=>$value
  );

  $planning["sa"][$key] = $satursday; // saturday
  $planning["di"][$key] = $sunday; // sunday
}

// example: 'Feb 16, 2019 10:00:00' // WARNING: it is important to keep the quote marks!
$saturday_date = "'Feb 16, 2019 10:00:00'";

// manual translations
$translation = array(
  "sa" => array(
    "fr" => "samedi",
    "en" => "saturday"
  ),
  "di" => array(
    "fr" => "dimanche",
    "en" => "sunday"
  ),
  "more" => array(
    "fr" => "Lire la suite",
    "en" => "Read More"
  ),
  "follow" => array(
    "fr" => "Suivez-nous !",
    "en" => "Follow us!"
  ),
  "partners" => array(
    "fr" => "Partenaires",
    "en" => "Partners"
  ),
  "location" => array(
    "fr" => "Lieu",
    "en" => "Location"
  ),
  "at" => array(
    "fr" => "à",
    "en" => "at"
  ),
  "download" => array(
    "fr" => "Télécharger les horaires",
    "en" => "Download plannings"
  ),
  "dates" => array(
    "fr" => "16 et 17 Février 2019", // DATES
    "en" => "February 16th and 17th 2019"
  ),
  "countdown-d" => array(
    "fr" => "jours",
    "en" => "days"
  ),
  "countdown-h" => array(
    "fr" => "heures",
    "en" => "hours"
  ),
  "countdown-m" => array(
    "fr" => "minutes",
    "en" => "minutes"
  ),
  "countdown-s" => array(
    "fr" => "secondes",
    "en" => "seconds"
  ),
);
