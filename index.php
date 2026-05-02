<?php include "header.php" ?>
<div class="container ">
    <div class="row px-2 d-flex flex-column align-items-center">
        <div class="col-md-5">
            <h2 class='text-center my-3' id='compliment'>Compliment Form</h2>
            <p class='text-center' id="para">Write down some words about your collegue or class-fellow</p>
        </div>
        <div class="col-md-5 rounded-2 compliment-form">
            <div class='mb-4 mt-4'>
                <label for="" class='form-label'>Your Name</label>
                <input type="text" class='form-control' id="yourname">
                <span class='nameError'>Name is required</span>
            </div>
            <div class='mb-4'>
                <label for="" class='form-label'>Fellow Name</label>
                <input type="text" class='form-control' id="classfellowname">
                <span class='classError'>Fellow-name is required</span>
            </div>
            <div>
                <label for="" class='form-label'>Messeg to fellow</label>
                <textarea name="" class='form-control' id="textarea"></textarea>
                <span class='msgError'>Field is required</span>
            </div>
            <button class='btn mt-3 d-block' id="submit">Submit</button>
        </div>
    </div>
</div>
