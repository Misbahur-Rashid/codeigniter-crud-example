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
        <h3>Update User</h3>
        <hr>
        <form method="POST" name="createUser" action="<?php echo base_url() . 'index.php/user/edit/' . $user['user_id']; ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" value="<?php echo set_value('first_name', $user['first_name']); ?>" class="form-control">
                        <?php echo form_error('first_name'); ?>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" value="<?php echo set_value('last_name', $user['last_name']); ?>" class="form-control">
                        <?php echo form_error('last_name'); ?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo set_value('email', $user['email']); ?>" class="form-control">
                        <?php echo form_error('email'); ?>
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" name="phone" value="<?php echo set_value('phone', $user['phone']); ?>" class="form-control">
                        <?php echo form_error('phone'); ?>
                    </div>

                    <div class="form-group">
                        <label>DOB</label>
                        <input type="date" name="dob" value="<?php echo set_value('dob', $user['dob']); ?>" class="form-control">
                        <?php echo form_error('dob'); ?>
                    </div>

                    <div class="form-group">
                        <label>Blood Group</label>
                        <select name="blood_group">
                            <option value="<?php echo set_value('blood_group', $user['blood_group']); ?>">A positive (A+)</option>
                            <option value="<?php echo set_value('blood_group', $user['blood_group']); ?>">A Negative (A-)</option>
                            <option value="<?php echo set_value('blood_group', $user['blood_group']); ?>">B positive (B+)</option>
                            <option value="<?php echo set_value('blood_group', $user['blood_group']); ?>">B Negative (B-)</option>
                            <option value="<?php echo set_value('blood_group', $user['blood_group']); ?>">O positive (O+)</option>
                            <option value="<?php echo set_value('blood_group', $user['blood_group']); ?>">O Negative (O-)</option>
                            <option value="<?php echo set_value('blood_group', $user['blood_group']); ?>">AB positive (AB+)</option>
                            <option value="<?php echo set_value('blood_group', $user['blood_group']); ?>">AB Negative (AB-)</option>
                        </select>
                        <?php echo form_error('blood_group'); ?>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>

                        <input type="radio" <?php if ($user['gender'] == 'Male') {
                                                echo "checked";
                                            } ?> name="gender" value="Male">
                          <label for="male">Male</label><br>
                          <input type="radio" name="gender" <?php if ($user['gender'] == 'Female') {
                                                                echo "checked";
                                                            } ?> value="Female">
                          <label for="female">Female</label><br>
                          <input type="radio" name="gender" <?php if ($user['gender'] == 'Other') {
                                                                echo "checked";
                                                            } ?> value="Other">
                          <label for="other">Other</label>
                        <?php echo form_error('gender'); ?>
                    </div>

                    <div class="form-group">
                        <label>Favorite Sports</label>


                        <input type="checkbox" name="sports" <?php if ($user['sports'] == 'Football') {
                                                                    echo "checked";
                                                                } ?> value="Football">
                        <label for="football"> Football</label><br>
                        <input type="checkbox" name="sports" <?php if ($user['sports'] == 'Badminton') {
                                                                    echo "checked";
                                                                } ?> value="Badminton">
                        <label for="badminton"> Badminton</label><br>
                        <input type="checkbox" name="sports" <?php if ($user['sports'] == 'Hockey') {
                                                                    echo "checked";
                                                                } ?> value="Hockey">
                        <label for="hockey"> Hockey</label><br>
                        <input type="checkbox" name="sports" <?php if ($user['sports'] == 'Volleyball') {
                                                                    echo "checked";
                                                                } ?>value="Volleyball">
                        <label for="volleyball"> Volleyball</label><br>
                        <input type="checkbox" name="sports" <?php if ($user['sports'] == 'Basketball') {
                                                                    echo "checked";
                                                                } ?>value="Basketball">
                        <label for="basketball"> Basketball</label><br>
                        <input type="checkbox" name="sports" <?php if ($user['sports'] == 'Tennis') {
                                                                    echo "checked";
                                                                } ?>value="Tennis">
                        <label for="tennis"> Tennis</label><br>
                        <input type="checkbox" name="sports" <?php if ($user['sports'] == 'Cricket') {
                                                                    echo "checked";
                                                                } ?>value="Cricket">
                        <label for="cricket"> Cricket</label><br>
                        <input type="checkbox" name="sports" <?php if ($user['sports'] == 'Table Tennis') {
                                                                    echo "checked";
                                                                } ?>value="Table Tennis">
                        <label for="table_tennis"> Table Tennis</label><br>
                        <?php echo form_error('sports'); ?>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" rows="4" cols="50" value="<?php echo set_value('address', $user['address']); ?>" class="form-control"></textarea>
                        <?php echo form_error('address'); ?>
                    </div>

                    <div class="form-group">
                        <label>Portfolio</label>
                        <input type="file" name="portfolio" value="<?php echo set_value('portfolio', $user['portfolio']); ?>" class="form-control">
                        <?php echo form_error('portfolio'); ?>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url() . 'index.php/user/index'; ?>" class="btn-secondary btn">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>