<?php
session_start();
if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;

require("../include/lib.php");
    writeheader();

        echo('
            <form name="email" action="admin.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Password</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" name="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        ');

    writefooter();
?>