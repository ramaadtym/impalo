<?php

?>
<div class="row container-fluid bgrow">
    <div class="col-lg-8 col-sm-7 col-md-offset-3 col-sm-offset-4 ">
        <div class="row">
            <div class="col-lg-7 col-md-4 bgcolor">
                <img src="<?php echo base_url().'assets/img/Logo.png'?>" class="img-responsive logo">
            </div>
            <div class="col-lg-4 col-md-4 bgputih">
                <form>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
