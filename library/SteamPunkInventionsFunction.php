<?php

// Security recommendation from wp.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

srand ((double) microtime() * 1000000);
function My_SteampunkInventionFunction(){
if (array_key_exists("check_submit", $_POST)) {
	
$count = $_POST["count"]; 

$prefix[]="incini";
$prefix[]="nova";
$prefix[]="auto";
$prefix[]="micro";
$prefix[]="neo";
$prefix[]="aero";
$prefix[]="cryo";
$prefix[]="nega";
$prefix[]="multi";
$prefix[]="electro";
$prefix[]="hydro";
$prefix[]="infini";
$prefix[]="magneto";
$prefix[]="omni";
$prefix[]="porta";
$prefix[]="mega";
$prefix[]="uni";
$prefix[]="hyper";
$prefix[]="nano";
$prefix[]="anti";

$catalyst1[]="Guassian";
$catalyst1[]="zortillium";
$catalyst1[]="mu-Particle";
$catalyst1[]="microwave";
$catalyst1[]="infrared";
$catalyst1[]="ultraviolet";
$catalyst1[]="full-Spectrum";
$catalyst1[]="polarity";
$catalyst1[]="dark-Matter";
$catalyst1[]="positron";
$catalyst1[]="gamma-Ray";
$catalyst1[]="neutron";
$catalyst1[]="electron";
$catalyst1[]="atomic";
$catalyst1[]="Kirilian";
$catalyst1[]="jet";
$catalyst1[]="martellium";
$catalyst1[]="space";
$catalyst1[]="inertial";
$catalyst1[]="quantum";

$catalyst2[]="wave";
$catalyst2[]="particle";
$catalyst2[]="beam";
$catalyst2[]="field";
$catalyst2[]="alloy";
$catalyst2[]="vestor";
$catalyst2[]="plasma";
$catalyst2[]="pulse";
$catalyst2[]="radiation";
$catalyst2[]="flux";
$catalyst2[]="reaction";
$catalyst2[]="vapor";
$catalyst2[]="element";
$catalyst2[]="molecule";
$catalyst2[]="atom";
$catalyst2[]="spectrum";
$catalyst2[]="phase";
$catalyst2[]="laser";
$catalyst2[]="ray";
$catalyst2[]="force";

$function1[]="converter";
$function1[]="transformer";
$function1[]="launcher";
$function1[]="spectralyzer";
$function1[]="capacitor";
$function1[]="reflector";
$function1[]="focus";
$function1[]="enhancer";
$function1[]="charger";
$function1[]="targeter";
$function1[]="emitter";
$function1[]="transmitter";
$function1[]="transporter";
$function1[]="energy";
$function1[]="matter";
$function1[]="prismator";
$function1[]="reactor";
$function1[]="reverser";
$function1[]="negator";
$function1[]="neutralizer";

$function2[]="gun";
$function2[]="sphere";
$function2[]="unit";
$function2[]="machine";
$function2[]="array";
$function2[]="rocket";
$function2[]="compound";
$function2[]="antenna";
$function2[]="engine";
$function2[]="drive";
$function2[]="network";
$function2[]="weapon";
$function2[]="probe";
$function2[]="robot";
$function2[]="craft";
$function2[]="bomb";
$function2[]="suit";
$function2[]="armor";
$function2[]="shield";
$function2[]="construct";

$formula[]='$catalyst1[$randomcat1] $function1[$randomfunc1]';
$formula[]='$catalyst1[$randomcat1] $catalyst2[$randomcat2] $function1[$randomfunc1]';
$formula[]='$catalyst1[$randomcat1] $prefix[$randompre] $function1[$randomfunc1]';
$formula[]='$prefix[$randompre]$catalyst2[$randomcat2] $function2[$randomfunc2]';
$formula[]='$catalyst1[$randomcat1] $prefix[$randompre]$function1[$randomfunc1] $function2[$randomfunc2]';
$formula[]='$catalyst1[$randomcat1] $catalyst2[$randomcat2] $function1[$randomfunc1] $prefix[$randompre]$function2[$randomfunc2]';
$formula[]='$catalyst1[$randomcat1] $catalyst2[$randomcat2] $function1[$randomfunc1] $function2[$randomfunc2]';
$formula[]='$catalyst1[$randomcat1] $prefix[$randompre]$catalyst2[$randomcat2] $function1[$randomfunc1] $function2[$randomfunc2]';

$My_SteampunkInvention = '<h2>Here are your strange science inventions:</h2><br><p>'; 
for($c=1;$c<=$count;$c++){
	$randompre = rand(0,count($prefix)-1);
  $randomcat1 = rand(0,count($catalyst1)-1);
  $randomcat2 = rand(0,count($catalyst2)-1);
  $randomfunc1 = rand(0,count($function1)-1);
  $randomfunc2 = rand(0,count($function2)-1);
  $randomform = rand(0,count($formula)-1);


	//echo "<h4>Behold!  Your Steampunk Inventions! </h4>";
	$output = $formula[$randomform];
	eval("\$output = \"$output\";");
	$My_SteampunkInvention .= sprintf('<b> %s </b><br>', ucwords($output));
	
	}
$My_SteampunkInvention .= '</p><br><br><p>What\'s the matter?  Don\'t like those?  Then hit the button again! </p>';
   
} else {
       $My_SteampunkInvention = '<p><h2>Looking for a Strange Science Invention?</h2></p><br>';
       $My_SteampunkInvention .= '<p>Just select a number and press the button to start!</p>';
}

$My_SteampunkInvention .= '<form name="myform" action=" " method="POST">';
$My_SteampunkInvention .= '<input type="hidden" name="check_submit" value="1"/>';
      $My_SteampunkInvention .= '<label>How many inventions would you like to create?</label><br>';
     $My_SteampunkInvention .= '<select name="count" sice="5">';
     $My_SteampunkInvention .= '<option value="5">5</option>';
     $My_SteampunkInvention .= '<option value="4">4</option>';
     $My_SteampunkInvention .= '<option value="3">3</option>';
     $My_SteampunkInvention .= '<option value="2">2</option>';
     $My_SteampunkInvention .= '<option value="1">1</option>';
     $My_SteampunkInvention .= '<input type="submit" VALUE="What\'s in the lab?"/>';
  $My_SteampunkInvention .= '</form>';
$My_SteampunkInvention .= '<p><hr></p>';
$My_SteampunkInvention .= '<p align="center">Taken from the <a target="_blank" href="http://www.amazon.com/exec/obidos/redirect?tag=fantasistnet%26link_code=xm2%26camp=2025%26creative=165953%26path=http://www.amazon.com/gp/redirect.html%253fASIN=0786936568%2526location=/o/ASIN/0786936568%25253FSubscriptionId=0EMV44A9A5YT1RVDGZ82" title="View product details at Amazon">d20 Past supplement</a> for the <a target="_blank"href="http://www.amazon.com/exec/obidos/redirect?tag=fantasistnet%26link_code=xm2%26camp=2025%26creative=165953%26path=http://www.amazon.com/gp/redirect.html%253fASIN=0786928360%2526location=/o/ASIN/0786928360%25253FSubscriptionId=0EMV44A9A5YT1RVDGZ82" title="View product details at Amazon">d20 Modern Roleplaying Game</a>.  <br>Just press the button to get more inventions.  It\'s just that simple.';
$My_SteampunkInvention .= '<br>Please, visit our sponsor, <a href="https://www.jkhoffman.com/use-your-words/">Use Your Words, a blog by JK Hoffman</a>.</p>';
$My_SteampunkInvention .= '<hr>';

return $My_SteampunkInvention;
}
?>