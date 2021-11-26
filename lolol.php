<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WELCOME !</title>
        <img src="vol.jpeg"style="width:20%" class = "center" style="height: 20%">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/prototype.js"></script>
        <script src="js/timekeep-proto.js"></script>
        <script src="//www.google.com/jsapi"></script>
        <script src="js/chartkick.js"></script>

        <!--[if IE]><script language="javascript" src="/js/bluff/excanvas.js" type="text/javascript"></script><![endif]-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                
                    <div class="nav-collapse collapse">

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="info well well-large">
            <h1>WELCOME !</h1>
            <p>Fiwewewll iweweqn thweweqwewqee tawewewqewqeble oweweewewen thweeweqeeqwee lewwqewqeweft wiwqewewdqwdth thwdwqdqwdwqdwqde stdqwdwqdqwdwdart adqwdqwdqwdwdnd ewdwqdwqddwdwdnd tigsergsrgfrgmes fgdfgdfgdf fgffdgdfg tasffgdfdgfdfk, anffdgdfggdfd tfgfdgdfgdfgfghe tadsfsdgththsk beihtrtgrtgerng complegergergerggerted. Thrregergergen gergergergergerg, wregrergergrghich wrgergersgergll srgergegrggrum thgergergerge hourgergergergrs anhgrthrthrtd plagergewrrgehhce thgrthrththhem irthhhrthth thhnyhrthrthe prochtrhrhrtheeding tabhtrgrthhhle.Tbwdbahjdhf afuhdhfsduf sdhfsufhsiufhwfv vijdvjsd vsivsdivsdvjsn soijvsivjasdv advuasjasjcisjv ass vjsivj svijsvio.Thdhsdbsahd baschasjchascasj ckasjchakjscnjksnchjchs dcudhc shcudhchs CHUashcu aCHauhcuashch scuhasch suhca scuahschuasHC AschashcuhasHCaushchashucuashc aschs csuhcasc. Hhhfhwehf fiuhsdufhsdu asdvhjasduvhashv asddvhas viushvuiashv asvhasvuhasduvhaiushvshdv asvhasdvh asvhasdvhasiuvhas vhasv asvuhasv asuvhusavhsauvasudv asvhsv saduhvchvhdhvsd.Tghwhkdhgjdn feuhgaeg egndhgghja dsvhusdfviusad vhsaiohjviosad vsdhvus dvdhuvdfhv sadvh sadhv siudhviso dvishdvsadhvshvjhasdvjsdhvsdhv sdvnsdvjsa vnsdv shjdvisdvjsdijvsidjvsidvjsdvjsdjvsv dijvijsd. Jdjfnefjk fjcdic jdc dcisdcv dijvsd vcijsdv sdjvs dvjdsivjsdijvdsivjj sdiv sdjvsd visd vsdjv sdijvisdjvjv dvjsdiv sdjsjvsdjv sdvmsd vsdjvsd vsivjsidjvsdjvdvk vosd vsidvjidjvd.</p>
            <h1> Available Shifts </h1>
            <tr>
                <td><input class="start" type="text" placeholder="Search"></td>
            </tr>

        </div>


        <div id="centerContainer">
        <div class="container-fluid">
            <!-- Example row of columns -->
            <div class="row">
                <div class="block-left ">
                    <form id="timeTable">
                        <table class="span3 table table-striped">
                            
                            <thead>
                                <tr>
                                    <th>[ID]</th>
                                    <th>[Event Name]</th>
                                    <th>[Start Time]</th>
                                    <th>[End Time]</th>
                                    <th>[Open Slot]</th>
                                    <th>[Organization]</th>
                                    <th>[Location]</th>
                                    <th>[Register]</th>



                                </tr>
                            </thead>
                            <tbody id="hoursBody">
                                <tr>
                                    <td class="start" type="text" placeholder="HH:MM">VC001</td>
                                    <td class="end" type="text" placeholder="HH:MM">Event 1</td>
                                    <td class="taskTD" class="taskInput" type="text" placeholder="Enter Task...">11:20 AM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">12:20 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">2</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">AbcOrg</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">address 1, line1, line2</td>
                                    <td onclick="location.href='Reg1.php'"><button type="button" class="btn btn-success">Register +</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td class="start" type="text" placeholder="HH:MM">VC002</td>
                                    <td class="end" type="text" placeholder="HH:MM">Event 2</td>
                                    <td class="taskTD" class="taskInput" type="text" placeholder="Enter Task...">10:30 AM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">1:30 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">3</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">XyzOrg</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">address 2, line1, line2</td>
                                    <td onclick="location.href='Reg2.php'"><button type="button" class="btn btn-success">Register +</button>
                                    </td>
                                


                                </tr>
                                <tr>
                                    <td class="start" type="text" placeholder="HH:MM">VC003</td>
                                    <td class="end" type="text" placeholder="HH:MM">Event 3</td>
                                    <td class="taskTD" class="taskInput" type="text" placeholder="Enter Task...">12:00 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">2:00 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">5</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">AbcOrg</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">address 3, line1, line2</td>
                                    <td onclick="location.href='Reg3.php'"><button type="button" class="btn btn-success">Register +</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="start" type="text" placeholder="HH:MM">VC004</td>
                                    <td class="end" type="text" placeholder="HH:MM">Event 4</td>
                                    <td class="taskTD" class="taskInput" type="text" placeholder="Enter Task...">8:30 AM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">12:30 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">8</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">XyzOrg</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">address 4, line1, line2</td>
                                    <td onclick="location.href='Reg4.php'"><button type="button" class="btn btn-success">Register +</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="start" type="text" placeholder="HH:MM">VC005</td>
                                    <td class="end" type="text" placeholder="HH:MM">Event 5</td>
                                    <td class="taskTD" class="taskInput" type="text" placeholder="Enter Task...">8:30 AM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">12:30 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">12</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">AbcOrg</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">address 5, line1, line2</td>
                                    <td onclick="location.href='Reg5.php'"><button type="button" class="btn btn-success">Register +</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="start" type="text" placeholder="HH:MM">VC006</td>
                                    <td class="end" type="text" placeholder="HH:MM">Event 6</td>
                                    <td class="taskTD" class="taskInput" type="text" placeholder="Enter Task...">10:30 AM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">1:30 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">4</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">XyzOrg</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">address 1, line1, line2</td>
                                    <td onclick="location.href='Reg6.php'"><button type="button" class="btn btn-success">Register +</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="start" type="text" placeholder="HH:MM">VC007</td>
                                    <td class="end" type="text" placeholder="HH:MM">Event 7</td>
                                    <td class="taskTD" class="taskInput" type="text" placeholder="Enter Task...">12:30 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">2:00 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">6</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">AbcOrg</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">address 2, line1, line2</td>
                                    <td onclick="location.href='Reg7.php'"><button type="button" class="btn btn-success">Register +</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="start" type="text" placeholder="HH:MM">VC008</td>
                                    <td class="end" type="text" placeholder="HH:MM">Event 8</td>
                                    <td class="taskTD" class="taskInput" type="text" placeholder="Enter Task...">8:30 AM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">12:30 PM</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">10</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">XyzOrg</td>
                                    <td class="notesTD" class="notesInput" type="text" placeholder="Enter Notes...">address 3, line1, line2</td>
                                    <td onclick="location.href='Reg8.php'"><button type="button" class="btn btn-success">Register +</button>
                                    </td>
                                </tr>



                          
                            </tbody>
                        </table>
                        <br />
                    </form>
                    
                        
            


        
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>