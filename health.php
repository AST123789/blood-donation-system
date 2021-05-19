<!DOCTYPE html>  
<html lang="en">  
<head>  
  <title>Bootstrap Example</title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<style>
body{
	background-image:url("blood9.png");

}
p
{
text-decoration:underline;
font-size:40px;
color:blue;
margin-top:30px;
margin-bottom:20px;
}
h2
{
text-decoration:underline;
margin-left:30px;
font-size:30px;
}
h2 a
{
color:red;
}
.s1
{
width:50%;
float:left;
font-size:20px;
margin-left:150px;
margin-top:70px;
}
*
{
padding:0px;
margin:0px;
}
.hd
{
width:100%;
height:75px;
background-image:url("blood6.jpg");
position:fixed;
z-index:999;
}
.headbar
{
width:50%;
height:75px;
float:left;
}
.headbar h1
{
line-height:40px;
text-align:center;
text-decoration:underline;
color:yellow;
}
.head1
{
height:75px;
}
.head1 ul
{
margin-top:100px;
margin-left:90px;
list-style:none;
display:inline-block;
}
.head1 ul li
{
float:left;
width:90px;
font-size:20px;
margin-left:20px;
font-weight:bold;
}
.head1 ul li a
{
text-decoration:none;
color:white;
display:block;
}
.head1 ul li a:hover
{
color:blue;
}
.s
{
width:25%;
float:left;
height:75px;
}
.h
{
list-style:none;
text-decoration:none;
position:fixed;
z-index:999;
top:75px;
background-color:blue;
border:2px solid black;
width:100%;
}
.h ul
{
list-style:none;
}
.h ul li
{
width:20%;
background-color:blue;
line-height:35px;
text-align:center;
float:left;
position:relative;
height:35px;
}
.h ul li a
{
text-decoration:none;
color:white;
display:block;
}
.h ul li a:hover
{
background-color:green;
}
.h ul ul
{
position:absolute;
display:none;
}
.h ul ul li
{
background-color:blue;
width:100%;
}
.h ul li:hover > ul
{
display:block;
}
.p1
{
width:100%;
float:left;
margin-top:120px;
position:relative;
}
.p1 h3
{
margin-left:60px;
}


.container ul 
{
margin-bottom:30px;
margin-left:30px;
margin-top:30px;
}

 element.style
 {
	 display:block;
 }
 .popover
{ 
border:3px solid black;
margin:0px;
}
.arrow
{ border-right-color: black !important;
  margin:0px;
  float:left;
  padding:0px;
}

.popover
{
max-width:800px;
}
.container
{	
padding-left:0px;
margin-left:20px;
width:50%;
float:left;
height:2000px;


}
.container
{   
	width:100%;
	margin-left:20px
	
}
.popover
{
	width:900px;
}
.popover-title
{

	font-size:30px;
	text-align:center;
	font-weight:bold;
}
a
{
	font-size:20px;
	color:black;
}
a:focus
{
	color:red;
}
h4
{ 
  width:100%;
  font-family:italic;
  font-size:50px;
  color:red;
  margin:30px;
}
.abhi
{
	width:200px;
	
}
.popover-content
{
	font-family:italic;
}
.reg
{
	height:100px;
	width:35%;
	float:right;
	margin-right:20px;
	margin-top:100px;
	background-image:url("registration.jpg");
    background-repeat:no-repeat;
}
.reg h4
{
	font-size:40px;
	color:green;
}
.reg ul
{   
margin-left:35px;
margin-top:45px;
height:150px;
width:100%;
float:top;
height:10px;
list-style:none;
display:inline-block;

}
.reg ul li
{

width:300px;
font-size:20px;
margin-left:20px;
font-weight:bold;
}
.reg ul li a
{   
	text-decoration:none;
   text-align:center;
   font-size:20px;
   color:black;
    float:left;
	display:block;
	margin-left:20px;
	margin-top:25px;
    border:2px FFFDD0;
	width:60px;
	background-color:D0D2D1;
}
.reg ul li a:hover
{
	color:white;
}
#image
{
 margin-top:200px;
}

</style>
</head>
<body>
<div class="hd">
<div class="s">
<img src="logo6.png"/>
</div>
<div class="headbar">
<h1>BLOOD DONATION CAMP </h1>
</div>
<br>
<div class="h">
<ul>
<li><a href="bloo.php">home</a></li>
<li><a href="demand.php">Demand of blood</a>
<ul>
<li><a href="whygiveblood.php">Why give blood</a></li>
<li><a href="demand.php">Demand for different blood types</a></li>
<li><a href="bloodtypes.php">Blood types</a></li>
<li><a href="howbloodused.php">How blood used</a></li>
</ul></li>
<li><a href="terms.php">Terms of Donation</a>
<ul>
<li><a href="whogiveblood.php">Who can give blood</a></li>
<li><a href="health.php">Health and Eligibility</a></li>
<li><a href="appointment.php">Getting an appoinment</a></li>
<li><a href="occupation.php">Occupation consideraton</a></li>
</ul></li>
<li><a href="donationprocess.php">Donation Process</a>
<ul>
<li><a href="whathappensonday.php">What happens on day</a></li>
<li><a href="afteryourdonation.php">After your donation</a></li>
</ul></li>
<li><a href="contactus.php">Contact</a></li>
</ul>
</div>
</div>
<div class="p1">
<h2><a href="bloo.php">Home</a>/<a href="donationprocess.php">terms of donation</a>/Health and Eligibilty</h2>	
 <div class="s1">
 
  <h4>Health Eligibility</h4><br> 
<div class="container">
<ul>
 <li><a href="#" data-toggle="popover" title="A-V Block"data-placement="right" data-trigger="focus"  data-content="Some heart irregularities and symptoms may be made worse by giving blood.

You must not donate if you experience palpitations or any symptoms associated with your abnormal heartbeat/rhythm or heart condition such as dizziness, extreme tiredness, shortness of breath, weakness.

You must not donate if you require medication to control your abnormal heartbeats/rhythm.

If the above does not apply, please call to check with our helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues">A-V Block</a></li> <br> 
 <li> <a  href="#" data-toggle="popover" title="Abdominoplasty : Surgery" data-trigger="focus" data-content="If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving, etc.).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.


* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.


** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.


">Abdominoplasty : Surgery</a> </li> <br>
 <li> <a name="A" href="#" data-toggle="popover" title="A-V Tachycardia" data-trigger="focus" data-content="Some heart irregularities and symptoms may be made worse by giving blood.

You must not donate if you experience palpitations or any symptoms associated with your abnormal heartbeat/rhythm or heart condition such as dizziness, extreme tiredness, shortness of breath, weakness.

You must not donate if you require medication to control your abnormal heartbeats/rhythm.

If the above does not apply, please call to check with our helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.
">A-V Tachycardia</a> </li> <br>
<li>  <a  name="A" href="#" data-toggle="popover" title="Ablation" data-trigger="focus"data-content="Sorry, but we need to have more information for us to answer your enquiry.  To give you an answer we will need to speak to you.  Please call our Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.

">Ablation</a> </li> <br>
 <li> <a name="A" href="#" data-toggle="popover" title="Abnormal cell: Routine Smear Test" data-trigger="focus" data-content="You must wait until you have finished all treatment including colposcopy and have had a follow up smear test result which was clear.

">Abnormal cell: Routine Smear Test</a></li>  <br>
 <li> <a name="A" href="#" data-toggle="popover" title="Abortion : Pregnancy" data-trigger="focus" data-content="Sorry, but we need to have more information for us to answer your enquiry.  To give you an answer we will need to speak to you.  Please call our Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.">Abortion : Pregnancy</a></li><br> 
  <li><a href="#" data-toggle="popover" title="B12 Vitamin Injections : Vitamin B12 Injections" data-trigger="focus" data-content="You may donate provided you are not under investiation for this at present, you have completed your initial set of injections to treat your condition (usually 6 injections given every 2-4 days after initial diagnosis) and you are no longer anaemic, you only require Vitamin B12 injections every 3 months or less often than that (e.g. every 4 months is acceptable) to keep your condition under control to prevent recurrence. 
 
If you require the injections more than every 3 months (e.g. every 8 or 10 weeks), please call to check with our helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.
 
If you are still under investigation, please wait until these have been completed and call us with any results/diagnosis. ">B12 Vitamin Injections : Vitamin B12 Injections</a></li>  <br>
<li>  <a href="#" data-toggle="popover" title="Babesiosis : Tropical Infection" data-trigger="focus" data-content="We are very sorry but sadly you are not able to donate blood.

This is either for the safety of yourself in giving blood or for the safety of patients that receive your blood.

If you require any more information please call the Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm, where we can transfer you to your local Referral Team who can deal with more complex issues.">Babesiosis : Tropical Infection</a> </li> <br>
 <li> <a href="#" data-toggle="popover" title="Baby - had a baby : Pregnancy" data-trigger="focus" data-content="Please wait until it has been 6 full months from the birth of your baby.

If you had a blood transfusion (if the date of the transfusion was after 01 january 1980) during your pregnancy or birth sadly you cannot give blood.

If this was a surrogacy, donated eggs or embryos were required or there were any serious medical complications associated with the birth please call our Donor Helpline on 0300 123 23 23 , Monday to Friday, 9am to 7pm where we can transfer you to our Referral Team who can deal with more complex issues.
">Baby - had a baby : Pregnancy</a> </li> <br>
 <li> <a href="#" data-toggle="popover" title="Baby by Caesarean : Pregnancy" data-trigger="focus" data-content="Please wait until it has been 6 full months from the birth of your baby.

If you had a blood transfusion (if the date of the transfusion was after 01 january 1980) during your pregnancy or birth sadly you cannot give blood.

If this was a surrogacy, donated eggs or embryos were required or there were any serious medical complications associated with the birth please call our Donor Helpline on 0300 123 23 23 , Monday to Friday, 9am to 7pm where we can transfer you to our Referral Team who can deal with more complex issues.


">Baby by Caesarean : Pregnancy</a></li>  <br>
 <li> <a href="#" data-toggle="popover" title="Back Pain" data-trigger="focus" data-content="You may give blood if your back pain is not under investigation by your doctor or a hospital and the back pain is not caused by any underlying condition that would prevent you from giving blood (please look up any associated conditions in this database).

If you are taking mild pain killers for your back pain, as long as you can get on and off of the donation chair easily,  you will be able to give blood.  Remember,  to tell the staff at the session that you have taken some mild pain killers. 

You cannot give blood if you are in pain.">Back Pain</a></li>  <br>
 <li> <a href="#" data-toggle="popover" title="C-Section : Pregnancy" data-trigger="focus" data-content="Please wait until it has been 6 full months from the birth of your baby.

If you had a blood transfusion (if the date of the transfusion was after 01 january 1980) during your pregnancy or birth sadly you cannot give blood.

If this was a surrogacy, donated eggs or embryos were required or there were any serious medical complications associated with the birth please call our Donor Helpline on 0300 123 23 23 , Monday to Friday, 9am to 7pm where we can transfer you to our Referral Team who can deal with more complex issues.
">C-Section : Pregnancy</a> </li> <br>
 <li> <a href="#" data-toggle="popover" title="C.Diff : Clostridium Difficile" data-trigger="focus" data-content="Sorry, but we need to have more information for us to answer your enquiry.  To give you an answer we will need to speak to you.  Please call our Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.

">C.Diff : Clostridium Difficile</a> </li> <br>
 <li> <a href="#" data-toggle="popover" title="Caesarean Birth : Pregnancy" data-trigger="focus" data-content="Please wait until it has been 6 full months from the birth of your baby.

If you had a blood transfusion (if the date of the transfusion was after 01 january 1980) during your pregnancy or birth sadly you cannot give blood.

If this was a surrogacy, donated eggs or embryos were required or there were any serious medical complications associated with the birth please call our Donor Helpline on 0300 123 23 23 , Monday to Friday, 9am to 7pm where we can transfer you to our Referral Team who can deal with more complex issues.
">Caesarean Birth : Pregnancy</a></li>  <br>
  <li> <a href="#" data-toggle="popover" title="Cancer : Malignancy" data-trigger="focus" data-content="We are very sorry but sadly you are not able to donate blood.

This is either for the safety of yourself in giving blood or for the safety of patients that receive your blood.

If you require any more information please call the Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm, where we can transfer you to your local Referral Team who can deal with more complex issues.

">Cancer : Malignancy</a></li>  <br>
<li> <a href="#" data-toggle="popover" title="Candida : Thrush" data-trigger="focus" data-content="Please look up relevant topic either Thrush - Oral or Thrush - Genital.">Candida : Thrush</a></li>  <br>
 <li><a href="#" data-toggle="popover" title="D&C other than following pregnancy : Surgery" data-trigger="focus" data-content="If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving, etc.).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.


* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.


** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.


">D&C other than following pregnancy : Surgery</a></li>  <br>
 <li><a href="#" data-toggle="popover" title="D&V : Diarrhoea" data-trigger="focus" data-content="f you have diarrhoea because you have one of the following conditions please see below

Irritable Bowel Syndrome - Please go to topic

Inflammatory Bowel Disease (e.g Crohns Disease or Ulcerative Colitis) - Please go to topic

Any other condition Please call our Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm where we can transfer you to your local Referral Team who can deal with more complex issues.

If only a one off episode
You must wait for 14 days after recovery to be sure you are fully recovered.  If you have been taking antibiotics you must also wait for 7 days after the last one and feel well when you give blood.">D&V : Diarrhoea</a> </li> <br>
<li> <a href="#" data-toggle="popover" title="D&V contact with : Diarrhoea" data-trigger="focus" data-content="If you are sure you are well and do not have the same symptoms, you may donate.

Please let us know if anything develops within 2 weeks of your donation.">D&V contact with : Diarrhoea</a> </li> <br>
 <li><a href="#" data-toggle="popover" title="Damaged nerve : Neuralgia" data-trigger="focus" data-content="Provided you have been fully investigated, no further investigations are needed, you do not require surgery and the cause of the neuralgia was one of the following:

1.  Simple nerve pain 
2.  Pressure on the nerve
3.  Damaged nerve
4.  Trapped nerve


You may donate as long as you are able to get on and off the donation chair unaided, you do not require any further investigations or surgery or follow up from your condition even if you are taking ANY prescribed medication.  Also the following will not preclude donation:

1.  Over the counter painkillers such as aspirin or ibuprofen
2.  Topical pain relief creams
3.  Or it is more than 24 hours from anaesthetic injection or nerve block


Unfortunately you cannot donate if the cause of the neuralgia is Multiple Sclerosis or Malignancy/Cancer.

If the cause of the neuralgia was due to any other condition, please call to check with our helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.">Damaged nerve : Neuralgia</a> </li> <br>
 <li><a href="#" data-toggle="popover" title="Danazol (Medication)" data-trigger="focus" data-content="Sorry, but we need to have more information for us to answer your enquiry.  To give you an answer we will need to speak to you.  Please call our Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.

">Danazol (Medication)</a> </li> <br>
 <li><a href="#" data-toggle="popover" title="Ear Ache : Infection" data-content="You must be completely healed/recovered from any infection for at least 14 days before you give blood.

If you are taking antibiotics you must wait for 7 days after your last tablet.

If you have hospital or GP appointments pending then you must also wait until these have finished.">Ear Ache : Infection</a></li>  <br>
 <li><a href="#" data-toggle="popover" title="Ear Piercing : Body Piercing" data-content="You have to wait for 4 months from the date of your body piercing or tattoo (including semi-permanent make-up and microdermabrasion) before you give blood. 

">Ear Piercing : Body Piercing</a></li>  <br>
 <li><a href="#" data-toggle="popover" title="Egg (human) recipient : Infertility" data-content="You are unable to donate if you have received donated eggs or embryos since 1st January 1980 or if you were treated with a drug called Metrodin before 2004 (this drug was given by injection).
 
You must wait 12 weeks from completion of treatment with any of the following drugs: Clomiphene, Clomid or Tamoxifen.
 
If you received any treatment other than donated human sperm and none of the above apply to you, please call our helpline on 0300 123 2323, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.
 
If you are under investigation for infertility, please wait until these have been completed and call us with any results/diagnosis. 
 
If you have received no other treatment you may donate as long as you know you are not pregnant. 
 
Having received donated human sperm will not prevent donation.">Egg (human) recipient : Infertility</a></li>  <br>
 <li><a href="#" data-toggle="popover" title="Eye Drops Following Surgery" data-content="You may donate provided:

you have completed a course of any eye drops following surgery for a benign condition not requiring ocular tissue transplant there is no active infection or inflammationyou are fully healed / recoveredyou are discharged from all follow up appointments
">Eye Drops Following Surgery</a></li>  <br>
 <li> <a href="#" data-toggle="popover" title="Face lift : Surgery" data-content="If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving, etc.).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.


* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.


** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.">Face lift : Surgery</a> </li> <br>
<li> <a href="#" data-toggle="popover" title="Febrile Episodes : Pyrexia" data-content="If the fever was due to travelling or you do not know what the cause of the fever is, please call to check with our helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.
 
If you know what the cause of the fever is, please look up the guidelines for that specific condition.">Febrile Episodes : Pyrexia</a> </li> <br>
 <li><a href="#" data-toggle="popover" title="Fluid on the Lung" data-content="Sorry, but we need to have more information for us to answer your enquiry.  To give you an answer we will need to speak to you.  Please call our Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.">Fluid on the Lung</a></li>  <br>
 <li><a href="#" data-toggle="popover" title="Gall Stone SURGERY : Gall Bladder Disease
" data-content="You must not donate if:
 
1.  You have ever had Haemolytic Anaemia, e.g. Spherocytosis
2.  You still have symptoms relating to this condition (this also includes Jaundice)
 
If you have had surgery on your Gall Bladder or for Gall stones, please check the surgery guidelines below.
 
You may donate as long as you are fully recovered from any symptoms relating to this condition, not jaundiced, no cancer is present and you have no infection, even if you still have gall stones which are not causing symptoms.
 
If you have had surgery on your Gall Bladder or for Gall stones, please check the surgery guidelines below:
 
If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving etc).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.
 
* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.
 
** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.
">Gall Stone SURGERY : Gall Bladder Disease
</a></li>  <br>
<li> <a href="#" data-toggle="popover" title="Gall Stones : Gall Bladder Disease" data-content="You must not donate if:
 
1.  You have ever had Haemolytic Anaemia, e.g. Spherocytosis
2.  You still have symptoms relating to this condition (this also includes Jaundice)
 
If you have had surgery on your Gall Bladder or for Gall stones, please check the surgery guidelines below.
 
You may donate as long as you are fully recovered from any symptoms relating to this condition, not jaundiced, no cancer is present and you have no infection, even if you still have gall stones which are not causing symptoms.
 
If you have had surgery on your Gall Bladder or for Gall stones, please check the surgery guidelines below:
 
If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving etc).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.
 
* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.
 
** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.
">Gall Stones : Gall Bladder Disease</a> </li> <br>
<li> <a href="#" data-toggle="popover" title="Gastrectomy" data-content="If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving, etc.).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.


* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.


** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.">Gastrectomy</a> </li> <br>
<li> <a href="#" data-toggle="popover" title="Grand Mal : Epilepsy" data-content="Sadly, it is not possible for anyone to give blood safely if they suffer from Epilepsy.

This is because giving blood could trigger a seizure, and for this reason is considered unsafe.

If you suffer from or have suffered from Epilepsy, or have a history of seizures, you must be free from fits for a minimum period of three years, and free from all related medications for the same period, before we can consider you as a donor.

Please call the Donor Helpline on 0300 123 23 23 between 9am and 7pm if you would like to discuss this further.">Grand Mal : Epilepsy</a> </li> <br>
 <li><a href="#" data-toggle="popover" title="Haematological Disease" data-content="We are very sorry but sadly you are not able to donate blood.

This is either for the safety of yourself in giving blood or for the safety of patients that receive your blood.

If you require any more information please call the Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm, where we can transfer you to your local Referral Team who can deal with more complex issues.">Haematological Disease</a> </li> <br>
 <li><a href="#" data-toggle="popover" title="Hair loss treatments : Alopecia" data-content="You must not donate if:

1.  You have required a hair transplant
2.  It is related to malignancy or treatment for malignancy such as radiotherapy or chemotherapy
3.  You have required Dutasteride (Avodart) medication within the last 6 months
4.  You have required Finasteride (Proscar or Propecia) medication within the last 4 weeks
5.  You have required oral steroid tablets within the last 12 months

You may donate as long as you are well, you have required no other oral medication (other than Hydroxychloroquine), it has been a clear 7 days since your last antifungal treatment and at least 14 days following recovery whichever is the longer even if you are using shampoos or lotions.

If you have required a hair transplant, please call to check with our helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues. ">Hair loss treatments : Alopecia</a> </li> <br>
 <li><a href="#" data-toggle="popover" title="Health Care Worker" data-trigger="hover" data-content="Health Care workers/Hospital Staff may donate as long as all criteria below are met.

Normal day to day patient care will not prevent donation.

If you are nursing a person with MRSA and following hospital guidelines then you may give blood.

Providing:

1. There has been NO needlestick injury or similar
2. You have NOT been advised to have a test

If you have had a needlestick injury or blood splash, please look up the guidelines for that specific issue.">Health Care Worker</a></li>  <br>
<li> <a href="#" data-toggle="popover" title="IBS : Irritable Bowel" data-content="You may give blood provided you feel fit and well on the day.

If you have had any investigations through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

If you are awaiting test results or have further hospital appointments (you are still under investigation), please wait until these have been completed and call us again with any results/diagnosis. 
">IBS : Irritable Bowel</a></li>  <br>
 <li><a href="#" data-toggle="popover" title="Immunosuppression" data-content="Sorry, but we need to have more information for us to answer your enquiry.  To give you an answer we will need to speak to you.  Please call our Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.">Immunosuppression</a> </li> <br>
 <li><a href="#" data-toggle="popover" title="Influenza Contact with : Infection" data-content="If you are sure you are well and do not have the same symptoms, you may donate.

Please let us know if anything develops within 2 weeks of your donation.">Influenza Contact with : Infection</a></li>  <br>
<li> <a href="#" data-toggle="popover" title="Inhalers for asthma or bronchitis : Asthma" data-content="Please only attend if you are fit and well, you have not required steroid tablets/injections for at least 7 days and you do not have symptoms of asthma or bronchitis on the day of donation. Please take your inhalers with you. 

Taking/using regular preventative medication/inhalers (not oral steroid tablets, e.g. prednisolone) will not prevent donations if above advice is followed.

If you have had a chest infection, please wait 14 days from full recovery and 7 days from antibiotic treatment before donating.

In the last 6 months, if you have required steroid tablets, injections or enemas for a period of more than 3 weeks (this includes 6 weekly slow release steroid injections), you need to wait 6 months from finishing this treatment and please call us again when recovered so we can assess your health at that time.

In the last 12 months, if you have required a course of oral or injected steroids lasting for 6 months or more, you need to wait 12 months from finishing this treatment and please call us again when recovered so we can assess your health at that time.
">Inhalers for asthma or bronchitis : Asthma</a></li>  <br> 
 <li><a href="#" data-toggle="popover" title="Jabs : Immunisations" data-trigger="focus" data-content="You need to look up the immunisation by name this in this database to find out whether you can or can't give blood.

">Jabs : Immunisations</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Japanese Encephalitis Immunisation : Immunisations
" data-trigger="focus" data-content="As long as you are feeling well, you may give blood after this immunisation.

If immunisation was due to travel then please also check the country you visited.">Japanese Encephalitis Immunisation : Immunisations
</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Jaundice : Gall Bladder Disease" data-trigger="focus" data-content="You must not donate if:
 
1.  You have ever had Haemolytic Anaemia, e.g. Spherocytosis
2.  You still have symptoms relating to this condition (this also includes Jaundice)
 
If you have had surgery on your Gall Bladder or for Gall stones, please check the surgery guidelines below.
 
You may donate as long as you are fully recovered from any symptoms relating to this condition, not jaundiced, no cancer is present and you have no infection, even if you still have gall stones which are not causing symptoms.
 
If you have had surgery on your Gall Bladder or for Gall stones, please check the surgery guidelines below:
 
If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving etc).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.
 
* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.
 
** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.
">Jaundice : Gall Bladder Disease</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Jaundice : Gilbert's Syndrome" data-trigger="focus" data-content="You may give blood providing you are not jaundiced at the time of donation.">Jaundice : Gilbert's Syndrome</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Jaundice : Hepatitis" data-trigger="focus" data-content="If you know which Hepatitis you have had [A, B, C or E], please look up the specific guidelines for that condition.  If this is unknown, please call to check with our helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm as we may need to transfer you to the Referral Team who can deal with more complex issues.
">Jaundice : Hepatitis</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Kidney Disease" data-trigger="focus" data-content="Please look up relevant diagnosis of the kidney problem.">Kidney Disease</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Kidney Donor : Surgery" data-trigger="focus" data-content="If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving, etc.).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.


* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.


** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.
">Kidney Donor : Surgery</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Kidney infection : Infection" data-trigger="focus" data-trigger="focus" data-content="You may give blood if you have completely recovered and have been well for 14 days.

If you are taking Antibiotics you must have finished the course and wait a further full 7 days before donating.

If you have hospital or GP appointments pending then you must also wait until these have finished.">Kidney infection : Infection"</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Klinefelter's Syndrome" data-trigger="focus" data-content="You may give blood providing you feel fit and well on the day.">Klinefelter's Syndrome</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Laser Treatment" data-trigger="focus" data-content="If the laser treatment was for tattoo removal, you may give blood when the skin has healed.

If the laser treatment was for cosmetic reasons, you may give blood when the skin has healed.

If the laser treatment was for varicose veins/thread veins, you may give blood when the skin has healed.

If the laser treatment was for treatment to the eye, you may give blood when healed.

If the laser treatment was for Basal Cell Carcinoma, you may donate once treatment has been completed, you are fully recovered and the skin has healed.

If the treatment was for a malignancy then you must not give blood.  Please look up the entry for malignancy.

If the laser treatment was for Cervical Carcinoma in Situ, please look up the entry for this condition.

If the laser treatment was for periods/heavy periods, please look up the entry for this condition.">Laser Treatment</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Leptospirosis : Infection" data-trigger="focus" data-content="You must be completely healed/recovered from any infection for at least 14 days before you give blood.

If you are taking antibiotics you must wait for 7 days after your last tablet.

If you have hospital or GP appointments pending then you must also wait until these have finished.">Leptospirosis : Infection</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Lumpectomy : Surgery" data-trigger="focus" data-content="If you had any infection you cannot give blood until you have been completely recovered for at least 14 days. *

All wounds are fully healed.

Sadly, if the surgery was for cancer you cannot give blood.

If your surgery or procedure was performed through a natural orifice you cannot give blood for 4 months from date of procedure.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

You cannot give blood whilst you are awaiting hospital appointments or are still under medical care.

If you have had or think you had a Blood Transfusion or any Blood Products since 1st January 1980 you cannot give blood. **

You must have returned to normal activities of daily living (for example routine housework, back to employment, driving, etc.).

You must be fully recovered and its been at least 7 days from your surgery if the other criteria does not apply.


* An unhealed wound or sore is a risk for bacteria entering the blood.  Bacteria in the blood can be a serious threat to anybody receiving blood.


** Although it cannot be certain that transfusions caused the problems with the recipients of blood developing vCJD it has been thought prudent to exclude blood donors transfused or possibly transfused since 1980.  Previously, this was within the UK but now is anywhere in the world.
">Lumpectomy : Surgery</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="LGV Driver : Hazardous Activity" data-trigger="focus" data-content="You must not give blood if you are going to undertake any hazardous activity or occupation on the same working day.  This is because of the risks of delayed faints after donating blood.

">LGV Driver : Hazardous Activity</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Magic eye : Endoscopy" data-trigger="focus" data-content="If you had an endoscopy investigation through a natural orifice, you cannot give blood for 4 months from date of procedure and please inform us of the diagnosis.
***NOTE - A natural orifice is any external opening in the body (belly button is NOT a natural orifice).***

If you are awaiting test results, a hospital appointment or undergoing any medical investigations, please wait until your treatment is finished before we can assess if you can give blood.

When you know your results or diagnosis please call our Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm where we can transfer you to the Referral Team who can deal with more complex issues.

">Magic eye : Endoscopy</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Malignant Hypertension" data-trigger="focus" data-content="We are very sorry but sadly you are not able to donate blood.

This is either for the safety of yourself in giving blood or for the safety of patients that receive your blood.

If you require any more information please call the Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm, where we can transfer you to your local Referral Team who can deal with more complex issues.
">Malignant Hypertension</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Mastectomy for Cancer : Surgery" data-trigger="focus" data-content="We are very sorry but sadly you are not able to donate blood.

This is either for the safety of yourself in giving blood or for the safety of patients that receive your blood.

If you require any more information please call the Donor Helpline on 0300 123 23 23, Monday to Friday, 9am to 7pm, where we can transfer you to your local Referral Team who can deal with more complex issues.

">Mastectomy for Cancer : Surgery</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Memorial Tattoo : Body Piercing" data-trigger="focus" data-content="You have to wait for 4 months from the date of your body piercing or tattoo (including semi-permanent make-up and microdermabrasion) before you give blood. 
">Memorial Tattoo : Body Piercing</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Nail Infection (Fungal) : Infection" data-trigger="focus" data-content="You must wait at least seven days after completing any antifungal or antibiotic treatment before giving blood.

If only using lotion or cream then you may donate as long as you are not taking any oral medication to treat your fungal infection.

If you have hospital or GP appointments pending then you must also wait until these have finished

">Nail Infection (Fungal) : Infection</a> </li> <br> 
 <li><a href="#" data-toggle="popover" title="Nerves (Anxiety) : Mental Health" data-trigger="focus" data-content="Taking medication will not prevent donation as long as you pass our Haemoglobin test.  As with all conditions an assessment will be made to your wellbeing each time you attend our donation session, which includes being able to fully understand and consent to the donation process and to the testing of the blood. 

">Nerves (Anxiety) : Mental Health</a> </li> <br> 
</ul>
</div>  
</div>
<div class="reg">
<h4></h4>
<ul>
<li><a href="login.php">login</a></li>
<li><a href="reg.php">signup</a></li>
</ul>
<img id="image" src="health2.jpg"/>
</div>
</div>  
<script>  
$(document).ready(function(){  
    $('[data-toggle="popover"]').popover();     
});  
</script>  
  
</body>  
</html>  
