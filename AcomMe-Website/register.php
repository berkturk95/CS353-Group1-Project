<?php
include "header.php";
include "navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 main-page">
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Surname" name="surname">
                        </div>
                        
                        <div class="form-group">
                            <span id="helpBlock" class="help-block-strong">Birthday</span>
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option>DD</option>
                                    <?php
                                        for($i = 1; $i <= 31; $i++){
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control col-md-4">
                                    <option>MM</option>
                                    <?php
                                        for($i = 1; $i <= 12; $i++){
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control col-md-4">
                                    <option>YY</option>
                                    <?php
                                        for($i = 1970; $i <= date('Y'); $i++){
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span id="helpBlock" class="help-block-strong" style="padding-top:10px;">Address</span>
                            <input type="text" class="form-control" placeholder="District" name="district">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Street" name="street">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Building" name="building">
                        </div>
                        <div class="form-group">
                            <div class="col-md-6" style="margin-bottom:15px;">
                                <input type="number" min="1" step="1" class="form-control" placeholder="Building #" name="building_number">
                            </div>
                            <div class="col-md-6" style="margin-bottom:15px;">
                                <input type="number" min="1" step="1" class="form-control" placeholder="Apt #" name="apt">
                            </div>
                        </div>
                        
                        <div class="form-group" >
                            <div class="col-md-6" style="margin-bottom:15px;">
                                <input type="text" class="form-control" placeholder="Country" name="country">
                            </div>
                            <div class="col-md-6" style="margin-bottom:15px;">
                                <input type="text" class="form-control" placeholder="City" name="city">
                            </div>
                        </div>
                        
                        <div class="form-group" >
                            <input type="text" class="form-control" placeholder="Postal Code" name="postal_code">
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputFile" style="color:white;">Profile Picture</label>
                            <input type="file" name="profilePicture" style="color:white;">
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                        
                        <div class="form-group">
                            <label style="color:white;">Gender</label><br>
                            <label class="radio-inline" style="color:white;">
                                <input type="radio" name="gender" value="male"> Male
                            </label>
                            <label class="radio-inline" style="color:white;">
                                <input type="radio" name="gender" value="female"> Female
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control" name="bio" rows="12" placeholder="Short Bio"></textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="re_password">
                        </div>
                        
                        <div class="form-group">
                            <input type="e-mail" class="form-control" placeholder="E-mail" name="email">
                        </div>
                        <button type="submit" class="btn btn-info">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
include "footer.php";
?>