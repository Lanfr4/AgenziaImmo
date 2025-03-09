<?php

require("../include/lib.php");

    writeheader();

        echo('
            <form action="admin.php">s
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-control">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            
            

        ');

    writefooter();
?>