<!DOCTYPE html>
<html>
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $this->Html->charset(); ?>
        <title>
            Farook College PG Admission | <?php echo $title_for_layout; ?>
        </title>
        <script type="text/javascript">
            var BASEURL = "<?php echo $this->base; ?>";
            
        </script>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('bootstrap.min','style','alert/alert.min','alert/theme.min','bootstrap-datepicker.min'));
        $all_scripts = array('jquery.min','bootstrap.min','alert.min','combodate','moment','bootstrap-datepicker.min','jspdf.min');

        echo $this->Html->script($all_scripts);
        echo $this->fetch('script');
        ?> 
    </head>
<body>
<h3>please check your download folder</h3>
 <?php echo $All_result[0]['Choice']['application_no']; ?>
<script>
var imgData ='data:image/jpeg;base64,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'
var doc = new jsPDF();
doc.addImage(imgData, 'JPEG', 20, 7, 30, 32);
doc.setFont("times");
doc.setFontType("bold");
doc.setFontSize(22);
doc.text(70, 15, 'FAROOK COLLGE');
doc.setFontSize(15);
doc.text(60, 20, 'Farook College P.O (KOZHIKKODE)');
doc.setFontType("normal");
doc.setFontSize(12);
doc.text(62, 25, 'Tel:0495 2440660 / 2440661 Fax:0495 2440464');

doc.setFont("helvetica");
doc.setFontSize(8);
doc.text(60, 28, 'e-mail : mail@farookcollege.ac.in     website : www.farookcollege.ac.in');

doc.setFontType("bold");
doc.setFontSize(11);
doc.text(38, 42, 'Application for M.A M.Sc M.Com. M.L.I.Sc B.L.I.Sc Degree Course');
doc.text(90, 47, '(2015 - 2017)');
doc.setFont("times");
doc.setFontType("normal");

doc.rect(170, 8, 25, 28); 
doc.setFontSize(8);
doc.text(178, 17, 'Affix');
doc.text(175, 20, 'Photograph');
doc.setFontSize(7);
doc.text(171, 29, '(size 35 mm X 45 mm)');

doc.setFontType("bold");
doc.setFontSize(12);

// doc.text(10, 53, 'M.A.');
// doc.rect(20, 49, 15, 5);

// doc.text(45, 53, 'M.Sc.');
// doc.rect(56, 49, 15, 5);

doc.text(90, 53, '<?php echo $All_result[0]['Cours']['frkCourseName']; ?>');
// doc.text(90, 60, 'Programme/Main');
// doc.rect(100, 49, 15, 5);

// doc.text(125, 53, 'M.L.I.Sc.');
// doc.rect(143, 49, 15, 5);

// doc.text(163, 53, 'B.L.I.Sc.');
// doc.rect(180, 49, 15, 5);

doc.setFontType("normal");
doc.setFontSize(10);


doc.text(10, 60, 'Application No :   <?php echo $All_result[0]['Choice']['application_no']; ?>');
doc.rect(35, 56, 30, 6);

doc.text(143, 60, 'Admission No :');
doc.rect(170, 56, 30, 6);


// doc.rect(150, 56, 45, 6);

doc.rect(10, 64, 190, 225);
doc.line(18, 64, 18, 289); // vertical line

doc.text(13, 69, '1');
doc.text(20, 69, 'Name :');
doc.line(68, 80, 68, 64); // vertical line
doc.text(70, 69, '<?php echo $All_result[0]['User']['frkUserName'];  ?>');
doc.line(10, 72, 200, 72); // horizontal line

doc.text(13, 77, '2');
doc.text(20, 77, 'Gender :');
doc.line(10, 80, 200, 80); // horizontal line
doc.text(70, 77, '<?php echo $All_result[0]['User']['frkUserGender'];  ?>');

doc.text(13, 84, '3');
doc.text(20, 84, 'Nationality : <?php echo $All_result[0]['Countrie']['country_name'];  ?>');
doc.text(20, 90, 'Taluk :  <?php echo $All_result[0]['User']['frkUserTaluk'];  ?>');

doc.text(70, 84, 'State :  <?php echo $All_result[0]['State']['name']; ?>');
doc.text(70, 90, 'District : <?php echo $All_result[0]['District']['name']; ?>');

doc.text(130, 84, 'Village : <?php echo $All_result[0]['District']['name']; ?>');
doc.text(130, 90, 'Blood Group : <?php echo $All_result[0]['User']['frkUserBloodGroup']; ?>');

doc.line(10, 92, 200, 92); // horizontal line
doc.text(20, 96, 'Address : Permanent');
doc.line(110, 92, 110, 120); // vertical line
doc.text(13, 112, '4');
doc.text(20, 102, '<?php echo $All_result[0]['User']['frkUserAddressline1']; ?>');
doc.text(20, 107, '<?php echo $All_result[0]['User']['frkUserAddressline2']; ?>');
doc.text(20, 112, 'P.O : <?php echo $All_result[0]['User']['frkUserTaluk']; ?>');
doc.text(20, 117, 'Dist : <?php echo $All_result[0]['District']['name']; ?>');
doc.text(65, 117, 'Pin code : <?php echo $All_result[0]['User']['frkUserPincode']; ?>');
doc.text(112, 96, 'Address for Communicatin');
doc.line(10, 98, 200, 98); // horizontal line
doc.text(112, 102, '<?php echo $All_result[0]['User']['frkUserCommAddressline1']; ?>');
doc.text(112, 107, '<?php echo $All_result[0]['User']['frkUserCommAddressline2']; ?>');
doc.text(112, 112, 'P.O : <?php echo $All_result[0]['User']['frkUserCommPincode']; ?>');
doc.text(112, 117, 'Dist : <?php echo $All_result[0]['DistrictComm']['name']; ?>');
doc.text(157, 117, 'Pin Code : <?php echo $All_result[0]['User']['frkUserCommPincode']; ?>');
doc.line(10, 120, 200,120); // horizontal line

doc.text(13, 125, '5');
doc.text(20, 125, 'Phone : STD Code : ');
doc.text(50, 125, '<?php echo $All_result[0]['User']['frkPhoneStd']; ?>');
doc.text(60, 125, 'No : <?php echo $All_result[0]['User']['frkPhoneNumber']; ?>');
doc.text(120, 125, 'Mobile : <?php echo $All_result[0]['User']['frkOtherMobile']; ?>');
doc.line(10, 128, 200,128); // horizontal line

doc.text(13, 133, '6');
doc.text(20, 132, 'Date of Birth ');
doc.setFontType("italic");
doc.setFontSize(8);
doc.text(20, 135, '(as in SSLC book)');
doc.line(50, 128, 50, 136); // vertical line
doc.setFontType("normal");
doc.text(52, 133, '<?php echo $All_result[0]['User']['frkUserDOB']; ?> ');

doc.setFontSize(10);
doc.line(100, 128, 100, 136); // vertical line
doc.text(103, 133, 'Age ');
doc.line(115, 128, 115, 136); // vertical line
doc.text(118, 133, '<?php echo $All_result['age']; ?> ');
doc.line(126, 128, 126, 136); // vertical line
doc.text(129, 133, 'Place of Birth');
doc.line(151, 128, 151, 136); // vertical line
doc.text(155, 133, '<?php echo $All_result[0]['User']['frkUserPOB']; ?> ');
doc.line(10, 136, 200,136); // horizontal line

doc.text(13, 140, '7');
doc.text(20, 140, 'Religion :');
doc.text(20, 145, 'Community/Cast/Tribe : ');
doc.line(100, 136, 100, 147); // vertical line
doc.text(110, 140, '<?php echo $All_result[0]['Religion']['name']; ?> ');
doc.text(110, 145, '<?php echo $All_result[0]['Final_communitie']['name']; ?> /<?php echo $All_result[0]['Caste']['name']; ?>  ');
doc.line(10, 147, 200,147); // horizontal line

doc.text(13, 151, '8');
doc.text(20, 151, 'Name and address of Parent/Guardian guardian, if any ');
doc.text(20, 156, '<?php echo $All_result[0]['User']['frkUserAddressline1']; ?> ,<?php echo $All_result[0]['User']['frkUserAddressline2']; ?> ,<?php echo $All_result[0]['User']['frkUserTaluk']; ?> ');
doc.text(20, 161, 'Phone : STD Code : ');
doc.text(50, 161, '<?php echo $All_result[0]['User']['frkPhoneStd']; ?> ');
doc.text(60, 161, 'No : <?php echo $All_result[0]['User']['frkPhoneNumber']; ?> ');
doc.text(120, 161, 'Mobile : <?php echo $All_result[0]['User']['frkOtherMobile']; ?> ');
doc.line(18, 163, 200,163); // horizontal line

doc.text(20, 168, 'a. Relationship to applicant');
doc.line(60, 163, 60, 171); // vertical line
doc.text(63, 168, '<?php echo $All_result[0]['User']['frkRelationwithApplicant']; ?> ');
doc.line(110, 163, 110, 171); // vertical line
doc.text(113, 166, 'Occupation and');
doc.text(113, 170, 'annual income');
doc.line(146, 163, 146, 171); // vertical line
doc.text(150, 168, '<?php echo $All_result[0]['Occupation']['name']; ?>/<?php echo $All_result[0]['User']['frkParentIncome']; ?>');
doc.line(10, 171, 200,171); // horizontal line

doc.text(13, 175, '9');
doc.text(20, 175, 'Name and address of local guardian, if any ');
// doc.text(20, 180, '<?php echo $All_result[0]['District']['name']; ?>, <?php echo $All_result[0]['District']['name']; ?>, <?php echo $All_result[0]['District']['name']; ?>');
doc.text(20, 185, 'Phone : STD Code : ');
// doc.text(50, 185, '<?php echo $All_result[0]['District']['name']; ?>');
doc.text(60, 185, 'No : ');
doc.text(120, 185, 'Mobile : ');
doc.line(10, 187, 200,187); // horizontal line

doc.text(13, 190, '10');
doc.text(20, 190, 'Institution(s) attended for Qualifying');
doc.text(20, 194, 'Examination with years of study');
doc.line(75, 187, 75, 196); // vertical line
doc.text(78, 192, '');
doc.line(10, 196, 200,196); // horizontal line

doc.text(10, 200, '10(a)');
doc.text(20, 200, 'wether the above Instituation/College is');
doc.text(20, 204, 'affliated to University of Calicut');
doc.line(80, 196, 80, 205); // vertical line
doc.text(85, 200, '<?php echo $All_result[0]['Reservation']['Illiteracy']; ?>');
doc.line(10, 205, 200,205); // horizontal line

doc.text(13, 209, '11');
doc.text(20, 209, 'Instituation(s) and course(s) attended after the qualifying examination, if any');
doc.text(20, 213, '<?php echo $All_result[0]['Reservation']['frkExtra_course']; ?>');
doc.line(10, 216, 200,216); // horizontal line

doc.text(13, 220, '12');
doc.text(20, 220, 'Have you been eligible for fee concession');
doc.line(85, 216, 85, 223); // vertical line
doc.text(90, 220, '<?php echo $All_result[0]['Reservation']['frkFeeConcession']; ?>');
doc.line(10, 223, 200,223); // horizontal line

doc.text(13, 227, '13');
doc.text(20, 226, 'Are youe eligible for physically handicaped');
doc.setFontType("italic");
doc.setFontSize(8);
doc.text(20, 229, '(Attach copies of certificate)');
doc.setFontType("normal");
doc.setFontSize(10);
doc.line(85, 223, 85, 231); // vertical line
doc.text(90, 227, '<?php echo $All_result[0]['Reservation']['frkHandiCapped']; ?>');
doc.line(10, 231, 200,231); // horizontal line

doc.text(13, 235, '14');
doc.text(20, 234, 'Are youe eligible for grace marks for admission');
doc.setFontType("italic");
doc.setFontSize(8);
doc.text(20, 238, '(Please Attach the copy of certificate)');
doc.setFontType("normal");
doc.setFontSize(10);
doc.line(90, 231, 90, 239); // vertical line
// doc.text(95, 236, '<?php echo $All_result[0]['District']['name']; ?>');
doc.line(10, 239, 200,239); // horizontal line

doc.text(13, 247, '15');
doc.text(20, 247, 'Representation in sports/games');
doc.setFontType("italic");
doc.setFontSize(8);
doc.text(20, 251, '(Please Attach the copy of certificate)');
doc.setFontType("normal");
doc.setFontSize(10);
doc.line(75, 239, 75, 256); // vertical line
doc.text(80, 245, '<?php echo $All_result[0]['Reservation']['sportDis1']; ?>');
doc.text(165, 245, '<?php echo $All_result[0]['Reservation']['sportlevel1']; ?>');
doc.line(160, 239, 160, 256); // vertical line
doc.line(75, 248, 200,248); // horizontal line
doc.text(80, 253, '<?php echo $All_result[0]['Reservation']['sportDis2']; ?>');
doc.text(165, 253, '<?php echo $All_result[0]['Reservation']['sportlevel2']; ?>');
doc.line(10, 256, 200,256); // horizontal line

doc.text(13, 263, '16');
doc.text(20, 263, 'Representation in arts activities');
doc.setFontType("italic");
doc.setFontSize(8);
doc.text(20, 267, '(Please Attach the copy of certificate)');
doc.setFontType("normal");
doc.setFontSize(10);
doc.line(75, 256, 75, 279); // vertical line
doc.text(80, 260, '<?php echo $All_result[0]['Reservation']['Arts1']; ?>');
doc.text(165, 260, '<?php echo $All_result[0]['Reservation']['ArtsLevel1']; ?>');
doc.line(160, 256, 160, 279); // vertical line
doc.line(75, 263, 200,263); // horizontal line
doc.text(80, 268, '<?php echo $All_result[0]['Reservation']['Arts2']; ?>');
doc.text(165, 268, '<?php echo $All_result[0]['Reservation']['ArtsLevel2']; ?>'); 
doc.line(75, 271, 200,271); // horizontal line
doc.text(80, 276, '<?php echo $All_result[0]['Reservation']['Arts3']; ?>');
doc.text(165, 276, '<?php echo $All_result[0]['Reservation']['ArtsLevel3']; ?>'); 
doc.line(10, 279, 200,279); // horizontal line

doc.text(13, 285, '17');
doc.text(20, 285, 'Additional Information , if any'); 

doc.addPage();

doc.rect(10, 10, 190, 280);
doc.setFontType("bold");
doc.setFontSize(11);
doc.text(13, 15, '18'); 
doc.text(85, 15, 'Details of academic Qualification'); 
doc.setFontType("normal");
doc.setFontSize(10);
doc.line(10, 18, 200,18); // horizontal line
doc.line(18, 18, 18, 74); // vertical line

doc.text(13, 30, '1'); 
doc.text(23, 30, 'SSLC'); 
doc.line(40, 18, 40, 62); // vertical line
doc.text(45, 23, ''); 
doc.line(40, 26, 200,26); // horizontal line

doc.line(100, 26, 100, 40); // vertical line
doc.text(60, 30, 'School'); 
doc.line(130, 26, 130, 40); // vertical line
doc.text(110, 30, 'Reg.No'); 
doc.line(157, 26, 157, 40); // vertical line
doc.text(135, 30, 'Year of Pass'); 
// doc.line(150, 26, 150, 40); // vertical line
doc.text(169, 30, 'Percentage(%)'); 
// doc.line(170, 26, 170, 40); // vertical line
// doc.text(152, 30, 'Max Marks'); 
// doc.text(172, 30, 'Class/Grade'); 
doc.line(40, 32, 200,32); // horizontal line

doc.text(41, 37, '<?php echo $All_result[0]['Applicant']['frkTenthSchool']; ?>'); 
doc.text(107, 37, '<?php echo $All_result[0]['Applicant']['frkTenthRegno']; ?>'); 
doc.text(136, 37, '<?php echo $All_result[0]['Applicant']['frlTenthYOP']; ?>'); 
doc.text(175, 37, '<?php echo $All_result[0]['Applicant']['tenthParcentage']; ?>'); 
// doc.text(158, 37, '600'); 
// doc.text(172, 37, 'Class/Grade'); 
doc.line(10, 40, 200,40); // horizontal line

doc.text(13, 48, '2'); 
doc.text(20, 48, 'Pre Degree/'); 
doc.text(20, 52, 'Plus Two'); 
// doc.line(60, 18, 60, 40); // vertical line
doc.text(45, 45, '<?php echo $All_result[0]['Board']['name']; ?>'); 
doc.line(40, 48, 200,48); // horizontal line

doc.line(90, 48, 90, 62); // vertical line
doc.text(60, 52, 'School'); 
doc.line(120, 48, 120, 62); // vertical line
doc.text(100, 52, 'Reg.No'); 
doc.line(137, 48, 137, 62); // vertical line
doc.text(125, 52, 'Year'); 
doc.line(160, 48, 160, 62); // vertical line
doc.text(139, 52, 'Percentage(%)'); 
// doc.line(190, 48, 190, 62); // vertical line
doc.text(172, 52, 'Stream'); 
// doc.text(172, 52, 'Class/Grade'); 
doc.line(40, 54, 200  ,54); // horizontal line

doc.text(41, 59, '<?php echo $All_result[0]['Applicant']['plusTwoSchool']; ?>'); 
doc.text(97, 59, '<?php echo $All_result[0]['Applicant']['plusTwoRegno']; ?>'); 
doc.text(125, 59, '<?php echo $All_result[0]['Applicant']['plusTwoYOP']; ?>'); 
doc.text(145, 59, '<?php echo $All_result[0]['Applicant']['plusTwoPercentage']; ?>'); 
doc.text(172, 59, '<?php echo $All_result[0]['Stream']['name']; ?>'); 
// doc.text(172, 59, 'Class/Grade'); 
doc.line(10, 62, 200,62); // horizontal line

doc.text(13, 68, '3'); 
doc.text(20, 68, 'University :- <?php echo $All_result[0]['Universitie']['name']; ?>'); 
// doc.text(20, 71, 'Relevant Grade Card/Mark list'); 
doc.line(110, 62, 110, 74); // vertical line
doc.setFontType("bold");
doc.text(113, 68, 'Degree :- <?php echo $All_result[0]['Degree']['name']; ?>'); 
// doc.text(113, 71, 'Programme/Main Subject..................'); 
doc.line(10, 74, 200,74); // horizontal line


doc.line(10, 80, 200,80); // horizontal line
doc.line(18, 80, 18, 160); // vertical line




doc.line(10, 88, 200,88); // horizontal line

var MorG='<?php echo $All_result[0]['Mark']['mark_grade']; ?>';
var main= '<?php echo $All_result[0]['Mark']['main']; ?>';
var degree_id = '<?php echo $All_result[0]['Mark']['degree_id']; ?>';

if(MorG=="G")
    {
        doc.text(20, 78, 'Grade Stream'); 
        doc.text(20, 85, 'Course'); 
        doc.text(124, 85, 'Credit'); 
        doc.text(168, 85, 'CGPA'); 
        doc.setFontType("normal");
        doc.line(120, 80, 120, 152); // vertical line
        doc.line(165, 80, 165, 152); // vertical line
            for(i=0;i<8;i++)
            {
                doc.line(18, 88+(i*8), 200,88+(i*8)); // horizontal line
            }
            
            if(main==1 && (degree_id == 1 ||  degree_id == 2 ||  degree_id == 3))
            {
                //subject name
                doc.text(20, 92, 'common_sub :- <?php echo $All_result[0]['Mark']['common_sub']; ?>');
                doc.text(20, 100, 'com_other_sub :- <?php echo $All_result[0]['Mark']['com_other_sub']; ?>');
                doc.text(20, 108, 'Open Course: :- <?php echo $All_result[0]['Mark']['open_sub']; ?>');
                doc.text(20, 116, 'main1_sub :-<?php echo $All_result[0]['Mark']['main1_sub']; ?>');
                doc.text(20, 124, 'Complementary Course-I :- <?php echo $All_result[0]['Mark']['comp1_sub']; ?>');
                doc.text(20, 132, 'comp2_sub :- <?php echo $All_result[0]['Mark']['comp2_sub']; ?>');    

                //subject marks
                doc.text(130, 92, '<?php echo $All_result[0]['Mark']['common_credit']; ?>');
                doc.text(130, 100, '<?php echo $All_result[0]['Mark']['com_other_credit']; ?>');
                doc.text(130, 108, '<?php echo $All_result[0]['Mark']['open_credit']; ?>');
                doc.text(130, 116, '<?php echo $All_result[0]['Mark']['main1_credit']; ?>');
                doc.text(130, 124, '<?php echo $All_result[0]['Mark']['comp1_credit']; ?>');
                doc.text(130, 132, '<?php echo $All_result[0]['Mark']['comp2_credit']; ?>');     

                //subject cgpa
                doc.text(170, 92, '<?php echo $All_result[0]['Mark']['common_cgpa']; ?>');
                doc.text(170, 100, '<?php echo $All_result[0]['Mark']['com_other_cgpa']; ?>');
                doc.text(170, 108, '<?php echo $All_result[0]['Mark']['open_cgpa']; ?>');
                doc.text(170, 116, '<?php echo $All_result[0]['Mark']['main1_cgpa']; ?>');
                doc.text(170, 124, '<?php echo $All_result[0]['Mark']['comp1_cgpa']; ?>');
                doc.text(170, 132, '<?php echo $All_result[0]['Mark']['comp2_cgpa']; ?>');     
            }
            if(main==2 && (degree_id == 1 ||  degree_id == 2 ||  degree_id == 3))
            {   
                //subject name
                doc.text(20, 92, 'common_sub :- <?php echo $All_result[0]['Mark']['common_sub']; ?>');
                doc.text(20, 100, 'com_other_sub :- <?php echo $All_result[0]['Mark']['com_other_sub']; ?>');
                doc.text(20, 108, 'Open Course: :-<?php echo $All_result[0]['Mark']['open_sub']; ?>');
                doc.text(20, 116, 'main1_sub:-<?php echo $All_result[0]['Mark']['main1_sub']; ?>');
                doc.text(20, 124, 'main2_sub :-<?php echo $All_result[0]['Mark']['main2_sub']; ?>');
                doc.text(20, 132, 'Complementary Course-I :-<?php echo $All_result[0]['Mark']['comp1_sub']; ?>');     
                //subject credit
                 doc.text(130, 92, '<?php echo $All_result[0]['Mark']['common_credit']; ?>');
                doc.text(130, 100, '<?php echo $All_result[0]['Mark']['com_other_credit']; ?>');
                doc.text(130, 108, '<?php echo $All_result[0]['Mark']['open_credit']; ?>');
                doc.text(130, 116, '<?php echo $All_result[0]['Mark']['main1_credit']; ?>');
                doc.text(130, 124, '<?php echo $All_result[0]['Mark']['main2_credit']; ?>');
                doc.text(130, 132, '<?php echo $All_result[0]['Mark']['comp1_credit']; ?>');   
                //subject cgpa
                 doc.text(170, 92, '<?php echo $All_result[0]['Mark']['common_cgpa']; ?>');
                doc.text(170, 100, '<?php echo $All_result[0]['Mark']['com_other_cgpa']; ?>');
                doc.text(170, 108, '<?php echo $All_result[0]['Mark']['open_cgpa']; ?>');
                doc.text(170, 116, '<?php echo $All_result[0]['Mark']['main1_cgpa']; ?>');
                doc.text(170, 124, '<?php echo $All_result[0]['Mark']['main2_cgpa']; ?>');
                doc.text(170, 132, '<?php echo $All_result[0]['Mark']['comp1_cgpa']; ?>');   
            }
            if(main==3 && (degree_id == 1 ||  degree_id == 2 ||  degree_id == 3))
            {   
                //subject nameabduravoof@gmail.com
                doc.text(20, 92, 'common_sub :- <?php echo $All_result[0]['Mark']['common_sub']; ?>');
                doc.text(20, 100, 'com_other_sub :-<?php echo $All_result[0]['Mark']['com_other_sub']; ?>');
                doc.text(20, 108, 'Open Course: :-<?php echo $All_result[0]['Mark']['open_sub']; ?>');
                doc.text(20, 116, 'main1_sub :-<?php echo $All_result[0]['Mark']['main1_sub']; ?>');
                doc.text(20, 124, 'main2_sub :-<?php echo $All_result[0]['Mark']['main2_sub']; ?>');
                doc.text(20, 132, 'main3_sub :-<?php echo $All_result[0]['Mark']['main3_sub']; ?>');     
                //subject credit
                doc.text(130, 92, '<?php echo $All_result[0]['Mark']['common_credit']; ?>');
                doc.text(130, 100, '<?php echo $All_result[0]['Mark']['com_other_credit']; ?>');
                doc.text(130, 108, '<?php echo $All_result[0]['Mark']['open_credit']; ?>');
                doc.text(130, 116, '<?php echo $All_result[0]['Mark']['main1_credit']; ?>');
                doc.text(130, 124, '<?php echo $All_result[0]['Mark']['main2_credit']; ?>');
                doc.text(130, 132, '<?php echo $All_result[0]['Mark']['main3_credit']; ?>'); 
                //subject cgpa
                doc.text(170, 92, '<?php echo $All_result[0]['Mark']['common_cgpa']; ?>');
                doc.text(170, 100, '<?php echo $All_result[0]['Mark']['com_other_cgpa']; ?>');
                doc.text(170, 108, '<?php echo $All_result[0]['Mark']['open_cgpa']; ?>');
                doc.text(170, 116, '<?php echo $All_result[0]['Mark']['main1_cgpa']; ?>');
                doc.text(170, 124, '<?php echo $All_result[0]['Mark']['main2_cgpa']; ?>');
                doc.text(170, 132, '<?php echo $All_result[0]['Mark']['main3_cgpa']; ?>'); 
            }
        doc.text(20, 140, 'Overall Credit & CGPA of the Programme'); 
        doc.text(20, 148, 'Maximum CGPA'); 
        doc.text(130, 140, '<?php echo $All_result[0]['Mark']['overall_credit']; ?>'); 
        doc.text(170, 140, '<?php echo $All_result[0]['Mark']['overall_cgpa']; ?>'); 
        doc.text(130, 148, '4'); 
    }
if(MorG=="M")
    {   doc.text(20, 78, 'Marks'); 
        doc.text(20, 85, 'Subject'); 
        doc.text(124, 85, 'Marks Awarded'); 
        doc.text(168, 85, 'Max.Marks'); 
        doc.setFontType("normal");
        doc.line(120, 80, 120, 136); // vertical line
        doc.line(165, 80, 165, 136); // vertical line
            for(i=0;i<7;i++)
                {
                    doc.line(18, 88+(i*8), 200,88+(i*8)); // horizontal line   
                }

            if(main==1 && (degree_id == 1 ||  degree_id == 2 ||  degree_id == 3))
            {
                 //subject name
                doc.text(20, 92, 'part1_sub :-<?php echo $All_result[0]['Mark']['part1_sub']; ?>');
                doc.text(20, 100, 'part2_sub :-<?php echo $All_result[0]['Mark']['part2_sub']; ?>');
                doc.text(20, 108, 'main1_sub :-<?php echo $All_result[0]['Mark']['main1_sub']; ?>');
                doc.text(20, 116, 'Complementary Course-I :-<?php echo $All_result[0]['Mark']['comp1_sub']; ?>');
                doc.text(20, 124, 'comp2_sub :-<?php echo $All_result[0]['Mark']['comp2_sub']; ?>'); 
                
                //subject marks
                doc.text(130, 92, '<?php echo $All_result[0]['Mark']['part1_mark']; ?>');
                doc.text(130, 100, '<?php echo $All_result[0]['Mark']['part2_mark']; ?>');
                doc.text(130, 108, '<?php echo $All_result[0]['Mark']['main1_mark']; ?>');
                doc.text(130, 116, '<?php echo $All_result[0]['Mark']['comp1_mark']; ?>');
                doc.text(130, 124, '<?php echo $All_result[0]['Mark']['comp2_mark']; ?>'); 

                //subject max marks
                doc.text(170, 92, '<?php echo $All_result[0]['Mark']['part1_mark']; ?>');
                doc.text(170, 100, '<?php echo $All_result[0]['Mark']['part2_mark']; ?>');
                doc.text(170, 108, '<?php echo $All_result[0]['Mark']['main1_max']; ?>');
                doc.text(170, 116, '<?php echo $All_result[0]['Mark']['comp1_max']; ?>');
                doc.text(170, 124, '<?php echo $All_result[0]['Mark']['comp2_max']; ?>'); 
            }
             if(main==2 && (degree_id == 1 ||  degree_id == 2 ||  degree_id == 3))
            {
                 //subject name
                doc.text(20, 92, 'part1_sub :-<?php echo $All_result[0]['Mark']['part1_sub']; ?>');
                doc.text(20, 100, 'part2_sub :-<?php echo $All_result[0]['Mark']['part2_sub']; ?>');
                doc.text(20, 108, 'main1_sub :-<?php echo $All_result[0]['Mark']['main1_sub']; ?>');
                doc.text(20, 116, 'main2_sub :-<?php echo $All_result[0]['Mark']['main2_sub']; ?>');
                doc.text(20, 124, 'Complementary Course-I :-<?php echo $All_result[0]['Mark']['comp1_sub']; ?>'); 
                
                //subject marks
                doc.text(130, 92, '<?php echo $All_result[0]['Mark']['part1_mark']; ?>');
                doc.text(130, 100, '<?php echo $All_result[0]['Mark']['part2_mark']; ?>');
                doc.text(130, 108, '<?php echo $All_result[0]['Mark']['main1_mark']; ?>');
                doc.text(130, 116, '<?php echo $All_result[0]['Mark']['main2_mark']; ?>');
                doc.text(130, 124, '<?php echo $All_result[0]['Mark']['comp1_mark']; ?>'); 

                //subject max marks
                doc.text(170, 92, '<?php echo $All_result[0]['Mark']['part1_mark']; ?>');
                doc.text(170, 100, '<?php echo $All_result[0]['Mark']['part2_mark']; ?>');
                doc.text(170, 108, '<?php echo $All_result[0]['Mark']['main1_max']; ?>');
                doc.text(170, 116, '<?php echo $All_result[0]['Mark']['main2_max']; ?>');
                doc.text(170, 124, '<?php echo $All_result[0]['Mark']['comp1_max']; ?>'); 
            }
             if(main==3 && (degree_id == 1 ||  degree_id == 2 ||  degree_id == 3))
            {
                 //subject name
                doc.text(20, 92, 'part1_sub :-<?php echo $All_result[0]['Mark']['part1_sub']; ?>');
                doc.text(20, 100, 'part2_sub :-<?php echo $All_result[0]['Mark']['part2_sub']; ?>');
                doc.text(20, 108, 'main1_sub :-<?php echo $All_result[0]['Mark']['main1_sub']; ?>');
                doc.text(20, 116, 'main2_sub :-<?php echo $All_result[0]['Mark']['main2_sub']; ?>');
                doc.text(20, 124, 'main3_sub :-<?php echo $All_result[0]['Mark']['main3_sub']; ?>'); 
                
                //subject marks
                doc.text(130, 92, '<?php echo $All_result[0]['Mark']['part1_mark']; ?>');
                doc.text(130, 100, '<?php echo $All_result[0]['Mark']['part2_mark']; ?>');
                doc.text(130, 108, '<?php echo $All_result[0]['Mark']['main1_mark']; ?>');
                doc.text(130, 116, '<?php echo $All_result[0]['Mark']['main2_mark']; ?>');
                doc.text(130, 124, '<?php echo $All_result[0]['Mark']['main3_mark']; ?>'); 

                //subject max marks
                doc.text(170, 92, '<?php echo $All_result[0]['Mark']['part1_mark']; ?>');
                doc.text(170, 100, '<?php echo $All_result[0]['Mark']['part2_mark']; ?>');
                doc.text(170, 108, '<?php echo $All_result[0]['Mark']['main1_max']; ?>');
                doc.text(170, 116, '<?php echo $All_result[0]['Mark']['main2_max']; ?>');
                doc.text(170, 124, '<?php echo $All_result[0]['Mark']['main3_max']; ?>'); 

            }

    }

doc.line(18, 152, 200,152); // horizontal line

doc.text(20, 156, 'Index Mark'); 
doc.text(125, 156, '<?php echo $All_result[0]['Index']['index']; ?>'); 
doc.line(10, 160, 200,160); // horizontal line
doc.setFontType("normal");


doc.text(13, 164, 'Documents in original to be produced at the time of admission:'); 
doc.setFontSize(8);
// doc.rect(24,168,5,4);
doc.text(30, 170, '1. Degree Mark/Grade sheet'); 
// doc.rect(24,175,5,4);
doc.text(30, 174, '2. T.C & Conduct Certificate'); 
// doc.rect(24,181,5,4);
doc.text(30, 178, '3. Nativity, Community(for SC/CT) and Income'); 
doc.text(30, 182, '   Certificate(If eligible for the fee concession)');
doc.text(30, 186, '4. Equivalency Certificate (For students from');
doc.text(30, 190, '   outside Kerala)');
// doc.rect(114,168,5,4);
doc.text(30, 194, '5. NCC/NSS Certificate'); 
// doc.rect(114,175,5,4);
doc.text(120, 170, '6. Medical Board Certificate(For Physically)');
doc.text(120, 174, '   Handicapped Students)'); 
// doc.rect(114,181,5,4);
doc.text(120, 178, '7. Sports & Games Certificates (For Admission under '); 
    doc.text(120, 182, '   sports quota)');
    doc.text(120, 186, '8. SSLC Certificate or its equivalent(Attested Copy)');
    doc.text(120, 190, '9. Three Copies of recent Passport size Photograph');
doc.line(10, 198, 200,198); // horizontal line
doc.setFontSize(10);
doc.setFontType("bold");
doc.setFont("courier");
doc.text(95, 201, 'Declaration'); 
doc.setFontType("normal");
doc.setFont("times");
doc.setFontSize(9);
doc.text(15, 206, 'I declare that the particulars given above are correct to the best of my knowledge. I hereby undertake, if admitted, to abide by the rules of the');
doc.text(15, 210, 'college, to obey the orders and the instructions of the Teachers and Principal of the College.');
doc.text(15, 217, 'Place:');
doc.text(15, 221, 'Date:');
doc.text(150, 215, 'Signature of Applicant');
doc.text(15, 226, 'I/We do hereby guarantee the good conduct of my/our ward and the payment of all his/her dues to the college and hostel during the programme');
doc.text(15, 230, 'of study');
doc.text(15, 236, 'Signature of the Local Guardian, if any');
doc.text(150, 236, 'Signature of the Parent/Guardian');
doc.line(10, 239, 200,239); // horizontal line

////////// Office use only ///////////////

doc.setFontType("bold");
doc.text(95, 242, 'FOR OFFICE USE:');
// doc.line(10, 237, 200,237); // horizontal line
doc.setFontType("normal");
doc.text(13, 246, 'Tabulation :  ');
// doc.line(10, 257, 200,257); // horizontal line
doc.text(13, 260, 'Admitted to I Semester class in_____________________________________ on payment of fees under');
doc.text(20, 267, '1. Merit Quota:');
doc.text(47, 267, 'GM');
doc.rect(55, 264, 6, 4);
doc.text(67, 267, 'MM');
doc.rect(75, 264, 6, 4);
doc.text(87, 267, 'SC');
doc.rect(95, 264, 6, 4);
doc.text(107, 267, 'ST');
doc.rect(115, 264, 6, 4);
doc.text(127, 267, 'PH');
doc.rect(135, 264, 6, 4);
doc.text(20, 272, '2. Management Quota :');
doc.text(20, 277, '3. Sports Quota :');
doc.text(20, 283, '4. No. & Date of T C.');
doc.text(170, 283, 'PRINCIPAL');
doc.setFontSize(9);
doc.text(20, 288, 'Receipt No:_______________dated_________________Ad.No___________');
doc.setFontSize(8);
doc.text(140, 288, 'Office Assistant');
doc.save('Test.pdf');


</script>

</body>
</html>