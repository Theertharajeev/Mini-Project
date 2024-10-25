
<?php
$ret = "Select  PhoneNumber,address,EmailId,footercontent from tblgenralsettings ";
$querys = $dbh -> prepare($ret);
$querys->execute();
$resultss=$querys->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($querys->rowCount() > 0)
{
foreach($resultss as $rows)
{ ?>


 <div class="information-area off-white ptb100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-3 col-xs-12">
                                <div class="single-information text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-phone"></i>
                                    </div>
                                    <h4>Phone</h4>
                                    <p>+91 9066785600</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-3 col-xs-12">
                                <div class="single-information text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <h4>E-Mail</h4>
                                    <p><a href="mailto:company@email.com">mescollege@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-3 col-xs-12">
                                <div class="single-information text-center">
                                    <div class="info-icon">
                                        <i class="zmdi zmdi-city-alt"></i>
                                    </div>
                                    <h4>MES College Of Engineering, Kuttippuram, Malappuram, Kerala, PIN-679571</h4>
                                
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            <!--information area are start-->

            <!--footer area are start-->
            <div class="footer-area" align="center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="social-area">
                             <?php echo htmlentities($rows->footercontent);?>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <?php }} ?>