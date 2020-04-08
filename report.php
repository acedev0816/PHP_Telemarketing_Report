<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- font -->
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <!-- jquery validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"> </script>
    <!-- custom -->
    <link href="css/report.css" rel="stylesheet">
    <script src="js/report.js" ></script>
</head>

<body>
    <div class="container contact-form ">
        <div class="text-right">
            <img src="img/logo.png " alt="rocket_contact " width=200px height=80px />
        </div>
        <h2 class="mytitle">Telemarketing Report</h2>
        <div class="row">
            <div class="col-md-7">
                <form method="post" id="report_form">
                    
                    <label class="col-form-label form-control-label ">Select Team:</label>
                    <div class="form-group row ">
                        <div class="col-md-12 ">
                            <div class="input-group ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text ">
                                        <i class="fa fa-users "></i>
                                    </span>
                                </div>
                                <select class="form-control" name="team">
                                    <option value="1 "> Team1</option>
                                    <option value="2 "> Team2</option>
                                    <option value="3 "> Team3</option>
                                    <option value="4 "> Team4</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <label class="col-form-label form-control-label ">Select Member:</label>
                    <div class="form-group row ">
                        <div class="col-md-12 ">
                            <div class="input-group ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text ">
                                        <i class="fa fa-user "></i>
                                    </span>
                                </div>
                                <select class="form-control" name="member">
                                    <option value="1 "> Member1</option>
                                    <option value="2 "> Member2</option>
                                    <option value="3 "> Member3</option>
                                    <option value="4 "> Member4</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <label class="col-form-label form-control-label ">Dilas:</label>
                    <div class="form-group row ">
                        <div class="col-md-12 ">
                            <div class="input-group ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text ">
                                        <i class="fa fa-phone "></i>
                                    </span>
                                </div>
                                <input class="form-control " type="number" min="0" name="dial" value="0"/>
                            </div>
                        </div>
                    </div>
                    <label class=" col-form-label form-control-label ">Contacts:</label>
                    <div class="form-group row ">
                        <div class="col-md-12 ">
                            <div class="input-group ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text ">
                                        <i class="fa fa-handshake-o "></i>
                                    </span>
                                </div>
                                <input class="form-control " type="number" min="0" name = "contact" value="0"/>
                            </div>
                        </div>
                    </div>
                    <label class="col-form-label form-control-label ">Quoted Transfers:</label>
                    <div class="form-group row ">
                        <div class="col-md-12 ">
                            <div class="input-group ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text ">
                                        <i class="fa fa-money "></i>
                                    </span>
                                </div>
                                <input class="form-control " type="number" min="0" name="qt" value="0"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center ">
                        <div  id="submit" class="btn btn-primary btnContactSubmit ">Submit</div>
                    </div>


                </form>
            </div>
            <div class="col-md-5 justify-content-center">
                <div class="calendar">
                    
                    <div class="frame">
                    <div class="left screw">
                        <div class="line"></div>
                        <div class="shine"></div>
                    </div> 
                    <div class="right screw">
                        <div class="rerotate line"></div>
                        <div class="shine"></div>
                    </div>
                    <div class="year">
                        <h1 id="yearCaption">1990</h1>
                    </div>
                    </div>
                    
                    <div class="content">
                    <h2 id="monthCaption">May</h2>
                    <h1 id="dayCaption">28</h1>
                    </div>
                    
                    <div class="over"></div>
                </div>
            </div>        
        </div> 
        <!-- msgbox    -->
        <div id="msgbox" class="modal fade mymsgbox" tabindex = "-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Telemarkekting Report</h5>
                    </div>
                    <div class="modal-body">
                        <p id="report_msg">msg here</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>