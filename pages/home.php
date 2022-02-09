<?php include "pages/includes/header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="action.php" method="post">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Input Word</label>
                            <div class="col-md-8">
                                <input type="text" name="input_value" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Select</label>
                            <div class="col-md-8">
                                <label for="">
                                    <input type="radio" name="type" value="word">Word Cound</label>
                                    <input type="radio" name="type" value="character">Character Cound</label>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
<!--                                <input type="text" value="--><?php //echo isset($result)? $result :'';?><!--" readonly class="form-control">-->
                                <textarea class="form-control" readonly cols="30" rows="10">

                                    <?php echo isset($result)? "$givenWord\n$wordCount\n$characterCount": '';?>

                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="View result">
                            </div>
                        </div>
                    </form>
                </div>

                </div>


            </div>
        </div>

    </section>
<?php include "pages/includes/footer.php"?>

