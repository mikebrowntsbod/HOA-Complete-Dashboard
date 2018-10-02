<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>Towing Request Submission</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="request.php">Request<span class="sr-only">(Current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Users</a></li>
            <li><a href="#">Modify Users</a></li>
            <li><a href="#">Remove Users</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>

	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



      <div class="container">
         <form class="well form-horizontal" action="test.php" method="post"  id="contact_form">
            <fieldset>
            <!-- Form Name -->
            <legend>Request a Tow</legend>
            <!-- Text input-->
            <fieldset>
               <legend>Submitter Information</legend>
               <div class="form-group">
                  <label class="col-md-4 control-label">First Name</label>  
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" >Last Name</label> 
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label">E-Mail</label>  
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
            </fieldset>
            <!-- Text input-->
            <fieldset>
            <legend>Property Information</legend>
            <div class="form-group">
               <label class="col-md-4 control-label">Property Name</label>  
               <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <input name="propertyName"type="text" readonly value="Tanyard Springs" class="form-control">
                  </div>
               </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
               <label class="col-md-4 control-label">City</label>  
               <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <input name="city" class="form-control"  type="text" readonly value="Glen Burnie">
                  </div>
               </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
               <label class="col-md-4 control-label">State</label>
               <div class="col-md-4 selectContainer">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                     <input name="state" class="form-control" type="text" readonly value="Maryland">
                     <!--<select name="state" class="form-control selectpicker" <>
                        <option value=" " >Please select your state</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option  value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware" >Delaware</option>
                        <option value="DC" >District of Columbia</option>
                        <option value="Florida"> Florida</option>
                        <option value="Georgia" >Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas"> Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montona">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Doakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennesse">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyomin">Wyoming</option>
                        </select>-->
                  </div>
               </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
               <label class="col-md-4 control-label">Zip Code</label>  
               <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <input name="zip" class="form-control"  readonly value="21060" type="text">
                  </div>
               </div>
            </div>
            <fieldset>
               <legend>Vehicle Information</legend>
               <div class="form-group">
                  <label class="col-md-4 control-label">Make</label>
                  <div class="col-md-4 selectContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="carMake" class="form-control selectpicker">
                           <option value=" " >Please select car model</option>
                           <option value="ACURA">ACURA</option>
                           <option value="ASTON MARTIN">ASTON MARTIN</option>
                           <option value="AUDI">AUDI</option>
                           <option value="BENTLEY">BENTLEY</option>
                           <option value="BMW">BMW</option>
                           <option value="BUICK">BUICK</option>
                           <option value="CADILLAC">CADILLAC</option>
                           <option value="CHEVROLET">CHEVROLET</option>
                           <option value="CHRYSLER">CHRYSLER</option>
                           <option value="DODGE">DODGE</option>
                           <option value="FERRARI">FERRARI</option>
                           <option value="FORD">FORD</option>
                           <option value="GMC">GMC</option>
                           <option value="HONDA">HONDA</option>
                           <option value="HUMMER">HUMMER</option>
                           <option value="HYUNDAI">HYUNDAI</option>
                           <option value="INFINITI">INFINITI</option>
                           <option value="ISUZU">ISUZU</option>
                           <option value="JAGUAR">JAGUAR</option>
                           <option value="JEEP">JEEP</option>
                           <option value="KIA">KIA</option>
                           <option value="LAMBORGHINI">LAMBORGHINI</option>
                           <option value="LAND ROVER">LAND ROVER</option>
                           <option value="LEXUS">LEXUS</option>
                           <option value="LINCOLN">LINCOLN</option>
                           <option value="LOTUS">LOTUS</option>
                           <option value="MASERATI">MASERATI</option>
                           <option value="MAYBACH">MAYBACH</option>
                           <option value="MAZDA">MAZDA</option>
                           <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                           <option value="MERCURY">MERCURY</option>
                           <option value="MINI">MINI</option>
                           <option value="MITSUBISHI">MITSUBISHI</option>
                           <option value="NISSAN">NISSAN</option>
                           <option value="PONTIAC">PONTIAC</option>
                           <option value="PORSCHE">PORSCHE</option>
                           <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                           <option value="SAAB">SAAB</option>
                           <option value="SATURN">SATURN</option>
                           <option value="SUBARU">SUBARU</option>
                           <option value="SUZUKI">SUZUKI</option>
                           <option value="TOYOTA">TOYOTA</option>
                           <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                           <option value="VOLVO">VOLVO</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">Model</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="carModel" placeholder="Model" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">Plate</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="carPlate" placeholder="plate" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">State</label>
                  <div class="col-md-4 selectContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="carState" class="form-control selectpicker" >
                           <option value=" " >Please select state</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option  value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware" >Delaware</option>
                        <option value="DC" >District of Columbia</option>
                        <option value="Florida"> Florida</option>
                        <option value="Georgia" >Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas"> Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montona">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Doakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennesse">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyomin">Wyoming</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">Color</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="carColor" placeholder="color" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
            </fieldset>
            <!-- radio checks -->
            <!-- <div class="form-group">
               <label class="col-md-4 control-label">Do you have hosting?</label>
               <div class="col-md-4">
                   <div class="radio">
                       <label>
                           <input type="radio" name="hosting" value="yes" /> Yes
                       </label>
                   </div>
                   <div class="radio">
                       <label>
                           <input type="radio" name="hosting" value="no" /> No
                       </label>
                   </div>
               </div>
               </div>-->
            <fieldset>
               <legend>Location Information</Legend>
               <div class="form-group">
                  <label class="col-md-4 control-label">Location</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="carLocation" class="form-control"  placeholder="Location of Tow" type="text">
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <legend>Reason for Tow</legend>
               <div class="form-group">
                  <label class="col-md-4 control-label">Reason for Row Request</label>
                  <div class="col-md-4">
                     <div class="radio">
                        <label>
                        <input type="checkbox" name="towReason[]" value="Unauthorized Handicap Parking" />Unauthorized Handicap Parking<br />
                        <input type="checkbox" name="towReason[]" value="Unauthorized Parking" />Unauthorized Parking<br />
                        <input type="checkbox" name="towReason[]" value="No Tags/Registration" />No Tags/Registration<br />
                        <input type="checkbox" name="towReason[]" value="Expired Tags" />Expired Tags (Requires 72 hour Warning Period)<br />
                        <input type="checkbox" name="towReason[]" value="Abandoned" />Abandoned<br />
                        <input type="checkbox" name="towReason[]" value="Inoperable" />Inoperable<br />
                        <input type="checkbox" name="towReason[] value="No Parking Permit" />No Parking Permit<br />
                        <input type="checkbox" name="towReason[]" value="Invalid Permit" />Invalid Permit<br />
                        <input type="checkbox" name="towReason[]" value="Parking In Reserve Spot" />Parking in Reserve Spot<br />
                        <input type="checkbox" name="towReason[]" value="Parking In Fire Lane" />Parking in Fire Lane<br  />
			<input type="checkbox" name="towReason[]" value="Parking In No Parking Area" />Parking in No Parking Area<br  />
			<input type="checkbox" name="towReason[]" value="Long Term Parking Violation" />Long Term Parking Violation<br />
			<input type="checkbox" name="towReason[]" value="Other" />Other<br />


                        </label>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">Other<br />Required if tow reason is other</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="towReasonOther" placeholder="Other Tow Reason" class="form-control"  type="text">
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <legend>Other Information</legend>
               <div class="form-group">
                  <label class="col-md-4 control-label">Other Information</label>
                  <div class="col-md-4 inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <textarea rows="4" cols="50" name="comment"></textarea>
                     </div>
                  </div>
               </div>
            </fieldset>
            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
            <!-- Button -->
            <div class="form-group">
               <label class="col-md-4 control-label"></label>
               <div class="col-md-4">
                  <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
               </div>
            </div>
		    </fieldset>
         </form>
      </div>
      </div><!-- /.container -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
      <script  src="js/index.js"></script>
   </body>
</html>
