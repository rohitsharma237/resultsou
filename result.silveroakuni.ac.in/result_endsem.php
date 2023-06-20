<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOU | Result Management</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/main.css" media="screen">

     <style type="text/css">
      @media only screen and (max-width: 600px) {
        /*body {
          background-color: #FFF;
        }*/
        .mob-width {
          padding-left: 0px !important;
        }
        #exampl_table {
          font-size: 10px;
        }
        .panel-downlog {
          margin-top: 20px;
          padding: 10px;
        }
        .semester-sec {
          padding: 10px 0 !important;
        }
        .semester-btn a {
          margin-top: 10px;
          margin-left:10px;
        }
      }
    </style>
  </head>
  <body style="width:100%;">
    <div class="main-wrapper">
      <div class="content-wrapper">
        <div class="content-container">
          <!-- /.left-sidebar -->
          <div class="main-page">
            <section class="section semester-sec" id="button_section">
              <div class="col-md-8">
                <div class="semester-btn">
                                    <a href="?semid=c2VtMQ==" class="btn btn-sm btn-primary">Semester 1</a>
                  <a href="?semid=c2VtMg==" class="btn btn-sm btn-info" style="margin-left:10px;">Semester 2</a>
                  <a href="?semid=c2VtMw==" class="btn btn-sm btn-warning" style="margin-left:10px;">Semester 3</a>
                  <a href="?semid=c2VtNA==" class="btn btn-sm btn-danger" style="margin-left:10px;">Semester 4</a>
                  <a href="?semid=c2VtNQ==" class="btn btn-sm btn-success" style="margin-left:10px;">Semester 5</a>

                                  </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-downlog" style="border:0px solid;">
                  <div class="col-sm-12" align="right">
                      
                      <form name="frm_download" id="frm_download" target="_blank" method="POST" action="" style="display:inline;">
                        <button class="btn btn-sm btn-success" name="btn_download" id="btn_download">Download</button>
                      </form>
                                        <a href="logout.php?std=1" class="btn btn-sm btn-primary">LOGOUT</a>
                  </div>
                </div>
              </div>
            </section>

            <section class="section" id="exampl">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel">
                      <div class="panel-heading">
                        <div class="panel-title">
                          <h3 align="center"><img src="images/logo.png" /></h3>
                          <hr />
                                                      <h4 align="center"> End Semester Examination</h4>
                            <h5 align="center">Provisional Result</h5>
                            <hr />
                          
                                                        <!-- <i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer;" OnClick="CallPrint()"></i> -->
                              
                              <div class="panel-body" style="overflow-x:auto;">
                                <table class="table table-hover table-bordered" id="exampl_table" border="1" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <th>Session - Year</th>
                                    <td colspan="3">Winter - 2021</td>
                                    <th>Institute Name</th>
                                    <td colspan="3">ASOIT</td>
                                  </tr>

                                  <tr>
                                    <th>Course</th>
                                    <td colspan="3">BTECH</td>
                                    <th>Semester</th>
                                    <td colspan="3">1</td>
                                  </tr>

                                  <tr>
                                    <th>Student Enrollment No</th>
                                    <td colspan="3" id="enroll">2102030400331</td>
                                    <th>Student Name</th>
                                    <td colspan="3">SHAIKH ANAS MAHAMMED AARIF</td>
                                  </tr>

                                  <tr>
                                    <th rowspan="2">Subject Name</th>
                                    <th colspan="3">Theory Grade</th>
                                    <th colspan="3">Practical Grade</th>
                                    <th rowspan="2">Subject Grade<br>(100/150)</th>
                                  </tr>

                                  <tr>
                                    <th>Internal Grade(IG)(40)</th>
                                    <th>External Grade(ESE)(60)</th>
                                    <th>Total(100)</th>
                                    <th>Internal Grade(IG)(20)</th>
                                    <th>External Grade(ESE)(30)</th>
                                    <th>Total(50)</th>
                                  </tr>

                                                                      <tr>
                                      <td>MATHEMATICS-1
</th>
                                      <td style="">B</td>
                                      <td style="">B</td>
                                      <td style="">B</td>
                                      <td style="">-</td>
                                      <td style="">-</td>
                                      <td style="">-</td>
                                      <td style="">B</td>
                                    </tr>
                                                                      <tr>
                                      <td>BASIC ELECTRONICS</th>
                                      <td style="">A+</td>
                                      <td style="">A+</td>
                                      <td style="">A+</td>
                                      <td style="">O</td>
                                      <td style="">O</td>
                                      <td style="">O</td>
                                      <td style="">A+</td>
                                    </tr>
                                                                      <tr>
                                      <td>BASIC MECHANICAL ENGINEERING</th>
                                      <td style="">O</td>
                                      <td style="">O</td>
                                      <td style="">O</td>
                                      <td style="">A+</td>
                                      <td style="">A+</td>
                                      <td style="">A+</td>
                                      <td style="">A+</td>
                                    </tr>
                                                                      <tr>
                                      <td>ENGLISH</th>
                                      <td style="">O</td>
                                      <td style="">A+</td>
                                      <td style="">A+</td>
                                      <td style="">A</td>
                                      <td style="">A</td>
                                      <td style="">A</td>
                                      <td style="">A+</td>
                                    </tr>
                                                                      <tr>
                                      <td>ENVIRONMENT SCIENCE</th>
                                      <td style="">P</td>
                                      <td style="">P</td>
                                      <td style="">P</td>
                                      <td style="">-</td>
                                      <td style="">-</td>
                                      <td style="">-</td>
                                      <td style="">P</td>
                                    </tr>
                                                                      <tr>
                                      <td>WORKSHOP</th>
                                      <td style="">-</td>
                                      <td style="">-</td>
                                      <td style="">-</td>
                                      <td style="">O</td>
                                      <td style="">O</td>
                                      <td style="">O</td>
                                      <td style="">O</td>
                                    </tr>
                                                                  </table>

                                <table class="table table-hover" id="exampl_table" border="0" width="100%" style="margin-top:20px;">
                                  <tr>
                                                                          <th>Current Semester BackLog : <span style="">0</span></th>
                                      <th>Total BackLog : <span style="">0</span></th>
                                      <th>SPI: 8.32</th>
                                      <th>CPI: 8.32</th>
                                      <th>Result: Pass</th>
                                                                      </tr>
                                </table>
                                <hr>
                                <h5><strong>Note: UG/Diploma </strong>Semester - 2 Results for Summer 2021 are declared on the basis of Merit Based Progression </h5>
                                <br>
                                <h4><i>For Diploma / U.G.<i></h4>
                                <table id="exampl_table" class="table table-responsive table-bordered" border="1" style="background-color: #f7f7f7">
                                  <tr align="center">
                                  <th>Letter grade</th>
                                    <td>O <br/>(Out Standing)</td>
                                    <td>A+ <br/>(Excellent)</td>
                                    <td>A <br/>(Very Good)</td>
                                    <td>B+ <br/>(Good)</td>
                                    <td>B <br/>(Above Average)</td>
                                    <td>C <br/>(Average)</td>
                                    <td>P <br/>(Pass)</td>
                                    <td>F <br/>(Fail)</td>
                                    <td>NA/AB <br/>(Absent)</td>
                                  </tr>
                                  <tr align="center">
                                  <th>Grade Point</th>
                                    <td>10</td>
                                    <td>9</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td>6</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>0</td>
                                  </tr>
                                  <tr align="center">
                                  <th>Score range out of 100</th>
                                         
                                    <td>>=80</td>
                                    <td>70-79</td>
                                    <td>60-69</td>
                                    <td>55-59</td>
                                    <td>50-54</td>
                                    <td>45-49</td>
                                    <td>40-44</td>
                                    <td><40</td>
                                    <td>-</td>
                                  </tr>
                                </table>
                                
                                 <h4><i>For P.G.<i></h4>
                                <table id="exampl_table" class="table table-responsive table-bordered" border="1" style="background-color: #f7f7f7">
                                  <tr align="center">
                                  <th>Letter grade</th>
                                    <td>O <br/>(Out Standing)</td>
                                    <td>A+ <br/>(Excellent)</td>
                                    <td>A <br/>(Very Good)</td>
                                    <td>B+ <br/>(Good)</td>
                                    <td>B <br/>(Above Average)</td>    
                                    <td>F <br/>(Fail)</td>
                                    <td>NA/AB <br/>(Absent)</td>
                                  </tr>
                                  <tr align="center">
                                  <th>Grade Point</th>
                                    <td>10</td>
                                    <td>9</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>0</td>
                                  </tr>
                                  <tr align="center">
                                  <th>Score range out of 100</th>
                                         
                                    <td>>=80</td>
                                    <td>70-79</td>
                                    <td>60-69</td>
                                    <td>55-59</td>
                                    <td>50-54</td>                      
                                    <td><50</td>
                                    <td>-</td>
                                  </tr>
                                </table>
                              </div>
                                                    </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== COMMON JS FILES ========== -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="js/main.js"></script>
  </body>
</html>