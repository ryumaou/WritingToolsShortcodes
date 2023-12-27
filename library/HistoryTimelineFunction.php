<?php

// Security recommendation from wp.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function My_HistoricalTimelineFunction(){

srand ((double) microtime() * 1000000);

if (array_key_exists("check_submit", $_POST)) {
	
$eventcnt = $_POST["eventcnt"]; 
$yearcnt = $_POST["yearcnt"]; 
$StartYear = $_POST["StartYear"]; 
$nation = $_POST["nation"];

$event[]="a trade treaty was signed";
$event[]="a trade treaty was broken";
$event[]="a peace treaty was signed";
$event[]="a peace treaty was broken";
$event[]="a settlement treaty was signed";
$event[]="a settlement treaty was broken";
$event[]="the death of a Leader occurred";
$event[]="a terrible flood occurred";
$event[]="an avalanche occurred";
$event[]="a mine cave-in occurred";
$event[]="a terrible famine swept the land";
$event[]="a devastating forest fire scorched the land";
$event[]="a horrible earthquake shook the land";
$event[]="a tidal wave smashed the coast";
$event[]="a member of the Leader's family died";
$event[]="a major Noble died";
$event[]="an important clergy member died";
$event[]="a great Hero died";
$event[]="an Evil Figure died from sickness";
$event[]="an Evil Figure was assassinated";
$event[]="an Evil Figure died from old age and bitterness";
$event[]="an Evil Figure was struck down in battle";
$event[]="an Evil Figure died by mishap ";
$event[]="there was an assassination attempt on a major figure by a Religious Order";
$event[]="there was an assassination attempt on a major figure by a Guild";
$event[]="there was an assassination attempt on a major figure by a Lesser Noble";
$event[]="there was an assassination attempt on a major figure by the military";
$event[]="there was an assassination attempt on a major figure by a personal enemy";
$event[]="there was an assassination attempt on a major figure by a State/Organizational Enemy";
$event[]="a regional peasant uprising occurred";
$event[]="a rebellion of the Nobles occurred";
$event[]="there was religious unrest in the land";
$event[]="banditry became an increasing problem";
$event[]="terrible monsters walked the land";
$event[]="there was an incursion by foreign interests";
$event[]="a major article of faith was lost or stolen";
$event[]="fighting between 'Good' temples occurred";
$event[]="fighting between 'Evil' temples occurred";
$event[]="fighting between 'Neutral' temples occurred";
$event[]="fighting between 'Good' and 'Neutral' temples occurred";
$event[]="fighting between 'Good' and 'Evil' temples occurred";
$event[]="fighting between 'Neutral' and 'Evil' temples occurred";
$event[]="a lost or stolen artifact of the faith was recovered";
$event[]="the Powers of 'Good' made their presence known";
$event[]="the Powers of 'Neutrality' made the presence known";
$event[]="the Powers of 'Evil' made their presence known";
$event[]="a great violation of Temple Law occurred";
$event[]="there was a successful overthrow of the ruling government";
$event[]="a Major Noble House was destroyed";
$event[]="a Religious Order fell into disgrace";
$event[]="there was active spying";
$event[]="there was treacherous sabotage";
$event[]="an assassination occurred";
$event[]="there was an advance in defensive military technology";
$event[]="there was an advance in offensive military technology";
$event[]="there was an advance in engineering technology";
$event[]="there was an advance in medical technology";
$event[]="there was an advance in food production technology";
$event[]="there was an advance in naval technology";
$event[]="there was an epidemic/disease with an infection rate of 1% and a mortality rate of 30% - 39%";
$event[]="there was an epidemic/disease with an infection rate of 2% - 5% and a mortality rate of 30% - 39%";
$event[]="there was an epidemic/disease with an infection rate of 6% - 10% and a mortality rate of 30% - 39%";
$event[]="there was an epidemic/disease with an infection rate of 11% - 20% and a mortality rate of 30% - 39%";
$event[]="there was an epidemic/disease with an infection rate of 21% - 30% and a mortality rate of 30% - 39%";
$event[]="there was an epidemic/disease with an infection rate of 31% - 40% and a mortality rate of 30% - 39%";
$event[]="there was an epidemic/disease with an infection rate of 41% - 50% and a mortality rate of 20% - 29%";
$event[]="there was an epidemic/disease with an infection rate of 51% - 60% and a mortality rate of 30% - 39%";
$event[]="there was an epidemic/disease with an infection rate of 61% - 70% and a mortality rate of 30% - 39%";
$event[]="there was an epidemic/disease with an infection rate of 71% - 80% and a mortality rate of 0% - 5%";
$event[]="there was a military campaign launched to expand borders";
$event[]="there was a military campaign launched for 'punitive reasons'";
$event[]="there was a military campaign launched for monetary gain";
$event[]="there was a military campaign launched to regain lost territory";
$event[]="there was an attack by a group of peasant raiders";
$event[]="there was an attack by a group of poorly organized raiders";
$event[]="there was an attack by a group of highly organized raiders";
$event[]="there was an attack by a group of Enemy State sponsored raiders";
$event[]="there was an attack by a group of Allied State sponsored raiders";
$event[]="there was an attack by a group of internally sponsored raiders";
$event[]="there was an invasion for the expansion of borders";
$event[]="there was an invasion for 'punitive reasons'";
$event[]="there was an invasion to increase the national treasury";
$event[]="there was an invasion to regain lost territory";


$My_HistoricalTimeline = sprintf('<h2>A Historical Timeline of %s </h2>', $nation); 
for($c=1;$c<=$yearcnt;$c++){

	$My_HistoricalTimeline .= sprintf('<h3>In the year %s, it is written that...</h3>',($StartYear-1+$c));
	  for($ec=1;$ec<=$eventcnt;$ec++){
	  	$randomevent = rand(0,count($event)-1);
		  $My_HistoricalTimeline .= sprintf('<p>   ... %s  </p>', $event[$randomevent]);
	  }
	}
	$My_HistoricalTimeline .= '<h3>So it is written!</h3><br>';
  $My_HistoricalTimeline .= '<p>What\'s the matter?  Want to change history?  Then hit the button again! </p><br>';
   
} else {
       $My_HistoricalTimeline = '<p><h2>What\'s the history of your fantasy?</h2><br>';
       $My_HistoricalTimeline .= '<p>Need some background history for your fantasy story?  </p>';
       $My_HistoricalTimeline .= '<p>Just fill in the form and press the button to start!</p>';
}

$My_HistoricalTimeline .= '<form name="myform" action=" " method="POST">';
$My_HistoricalTimeline .= '<input type="hidden" name="check_submit" value="1"/>';
$My_HistoricalTimeline .= '<p>Kingdom Name: <input type="text" name="nation" /></p>';
$My_HistoricalTimeline .= '<p>Starting Year: <input type="text" name="StartYear" /></p>';
$My_HistoricalTimeline .= '<p>Number of Years: <input type="text" name="yearcnt" /></p>';
$My_HistoricalTimeline .= '<p>Events per Year: <input type="text" name="eventcnt" /></p>';
$My_HistoricalTimeline .= '<input type="submit" VALUE="Generate Timeline?"/>';
$My_HistoricalTimeline .= '</form>';
$My_HistoricalTimeline .= '<p><hr></p>';
$My_HistoricalTimeline .= '<p>Please, visit our sponsor, <a href="https://www.jkhoffman.com/use-your-words/">Use Your Words, a blog by JK Hoffman</a>.</p>';
$My_HistoricalTimeline .= '<p><hr></p>';

return $My_HistoricalTimeline;
}
 
?>