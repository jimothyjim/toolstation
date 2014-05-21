<?php
/* @var $this CvController */

$this->breadcrumbs=array(
	'Cv',
);
?>
<h1> Simon Freeman </h1>
<p> Contact Details Redacted for Online C.V </p>
<p>
	An enthusiastic Internet Computing graduate from the University of Glamorgan, willing to relocate for a career in development. 
	Combining a talent for problem solving with an ability to communicate effectively, programming within a team is a natural fit.
	Online portfolio available at DOMAIN HERE
</p>
<?php 
$education='';
$software='';
$web='';
$computing='';
$work='';
$interests='';
$education1 = '';
foreach($cvData as $skill)
{
	//echo $skill->category . '<br />';
	switch($skill->category){
		case'Education':
			if($skill->cv_priority == 1)
			{
				$education1 .= $skill->cv_text;
			}
			else
			{
				$education .= '<li>' . $skill->cv_text . '</li> ';
			}
			break;
		case'Software Sevelopment':
			
			$software .= $skill->cv_text . ' ';
			break;
		case'Web Development':
			
			$web .= $skill->cv_text . ' ';
			break;
		case'General Development':
			
			$computing .= $skill->cv_text . ' ';
			break;
		case'Work Experience':
			
			$work .= $skill->cv_text . ' ';
			break;
		case'Additional Skills and Interests':
			
			$interests .= $skill->cv_text . ' ';
			break;
	}
}

//All u
if($education!='')
{
	echo "<h2>Education</h2>
		<h3>2008 - 2011   University of Glamorgan</h3>
		<h4>2:1 BSc Internet Computing</h4>
		<ul>";
	echo $education;
	echo "</ul>";
	echo $education1;
	}	

if($software !='')
{
	echo "<h2>Software Development Skills </h2>";
	echo $software;
}

if($web!='')
{
	echo "<h2>Web Development Skills </h2>";
	echo $web;
}

if($computing!='')
{
	echo "<h2>General Computing Skills</h2>";
	echo $computing;
}

if($work!='')
{
	echo "<h2>Relevant Work Experience</h2>";
	echo $work;
}

if($interests!='')
{
	echo "<h2>Additional Skills and Interests</h2>";
	echo $interests;
}
