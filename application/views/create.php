<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">
        <h3>Create User</h3>
        <hr>
        <form method="POST" name="createUser" action="<?php echo base_url() . 'index.php/user/create'; ?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>
                            <h5>First Name</h5>
                        </label>
                        <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" class="form-control">
                        <?php echo form_error('first_name'); ?>
                    </div>
                    <div class="form-group">
                        <label>
                            <h5>Last Name</h5>
                        </label>
                        <input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" class="form-control">
                        <?php echo form_error('last_name'); ?>
                    </div>
                    <div class="form-group">
                        <label>
                            <h5>Email</h5>
                        </label>
                        <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
                        <?php echo form_error('email'); ?>
                    </div>

                    <div class="form-group">
                        <label>
                            <h5>Phone</h5>
                        </label>
                        <input type="tel" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control">
                        <?php echo form_error('phone'); ?>
                    </div>

                    <div class="form-group">
                        <label>
                            <h5>DOB</h5>
                        </label>
                        <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" class="form-control">
                        <?php echo form_error('dob'); ?>
                    </div>

                    <div class="form-group">
                        <label>
                            <h5>Blood Group</h5>
                        </label><br>
                        <select name="blood_group">
                            <option value="A+">A positive (A+)</option>
                            <option value="A-">A Negative (A-)</option>
                            <option value="B+">B positive (B+)</option>
                            <option value="B-">B Negative (B-)</option>
                            <option value="O+">O positive (O+)</option>
                            <option value="O-">O Negative (O-)</option>
                            <option value="AB+">AB positive (AB+)</option>
                            <option value="AB-">AB Negative (AB-)</option>
                        </select>
                        <?php echo form_error('blood_group'); ?>
                    </div>

                    <div class="form-group">
                        <label>
                            <h5>Gender</h5>
                        </label><br>
                        <input type="radio" name="gender" value="Male">
                          <label for="male">Male</label><br>
                          <input type="radio" name="gender" value="Female">
                          <label for="female">Female</label><br>
                          <input type="radio" name="gender" value="Other">
                          <label for="other">Other</label>
                        <?php echo form_error('gender'); ?>
                    </div>

                    <div class="form-group">
                        <label>
                            <h5>Favorite Sports</h5>
                        </label><br>
                        <input type="checkbox" name="sports" value="Football">
                        <label for="football"> Football</label><br>
                        <input type="checkbox" name="sports" value="Badminton">
                        <label for="badminton"> Badminton</label><br>
                        <input type="checkbox" name="sports" value="Hockey">
                        <label for="hockey"> Hockey</label><br>
                        <input type="checkbox" name="sports" value="Volleyball">
                        <label for="volleyball"> Volleyball</label><br>
                        <input type="checkbox" name="sports" value="Basketball">
                        <label for="basketball"> Basketball</label><br>
                        <input type="checkbox" name="sports" value="Tennis">
                        <label for="tennis"> Tennis</label><br>
                        <input type="checkbox" name="sports" value="Cricket">
                        <label for="cricket"> Cricket</label><br>
                        <input type="checkbox" name="sports" value="Table Tennis">
                        <label for="table_tennis"> Table Tennis</label><br>
                        <?php echo form_error('sports'); ?>
                    </div>

                    <div class="form-group">
                        <label>
                            <h5>Address</h5>
                        </label>
                        <textarea name="address" rows="4" cols="50" value="<?php echo set_value('address'); ?>" class="form-control"></textarea>
                        <?php echo form_error('address'); ?>
                    </div>

                    <div class="form-group">
                        <label>
                            <h5>Portfolio</h5>
                        </label>
                        <input type="file" name="portfolio" value="<?php echo set_value('portfolio'); ?>" class="form-control">
                        <?php echo form_error('portfolio'); ?>
                    </div>

                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url() . 'index.php/user/index'; ?>" class="btn-secondary btn">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>