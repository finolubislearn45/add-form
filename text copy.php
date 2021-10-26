<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>add parcel data</title>
  </head>
<body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Okay!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Package 
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">add data</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">courier name</label>
                                            <input type="text" name="name[]" class="form-control" required placeholder="courier">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">seller</label>
                                            <input type="text" name="phone[]" class="form-control" required placeholder="Seller name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">receiver</label>
                                            <input type="text" name="name[]" class="form-control" required placeholder="receiver name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">price</label>
                                            <input type="text" name="price[]" class="form-control" required placeholder="price">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-forms"></div>
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4 text-end" >
                                        <div class="form-group mb-2">
                                            <label for="">Total Rp.</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-start">
                                        <div class="form-group mb-2">
                                           
                                        </div>
                                    </div>                                
                                    <div class="col-md-2">                        
                                        <button type="submit" name="save_multiple_data" class="btn btn-success">save</button>
                                    </div>
                                </div> 
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">receiver</label>\
                                            <input type="text" name="name[]" class="form-control" required placeholder="receiver name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Harga</label>\
                                            <input type="text" name="price[]" class="form-control" required placeholder="price">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>

</body>
</html>