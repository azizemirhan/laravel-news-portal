
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Lunoz - http://127.0.0.1:8000/admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose http://127.0.0.1:8000/admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!-- App favicon -->
        <link rel="shortcut icon" href="http://127.0.0.1:8000/admin/assets/images/favicon.ico">
    
        <!-- App css -->
        <link href="http://127.0.0.1:8000/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://127.0.0.1:8000/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="http://127.0.0.1:8000/admin/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    
    </head>

<body class="bg-primary">

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-4 mt-3">
                                                <a href="index.html">
                                                    <span><img src="http://127.0.0.1:8000/admin/assets/images/logo-dark.png" alt="" height="26"></span>
                                                </a>
                                            </div>
                                            <form method="POST" action="{{ route('admin.handle-login') }}" class="p-2">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="emailaddress">Email</label>
                                                    <input class="form-control" type="email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <a href="pages-recoverpw.html" class="text-muted float-right">Şifremi Unuttum</a>
                                                    <label for="password">Şifre</label>
                                                    @error('email')
                                                        <code>{{ $message }}</code>
                                                    @enderror
                                                    <input class="form-control" type="password" name="password">
                                                </div>
                                                <div class="custom-control checkbox-primary">
                                                        <input type="checkbox" name="remember">
                                                        <label class="label" for="checkbox-signin">Beni Hatırla</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group mb-4 pb-3">
                                                  
                                                <div class="mb-3 text-center">
                                                    <input class="btn btn-primary btn-block" type="submit" value="Giriş Yap">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card -->
            
                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-white-50 mb-0">Hesabın Yokmu? <a href="pages-register.html" class="text-white-50 ml-1"><b>Kayıt Ol</b></a></p>
                                        </div>
                                    </div>
            
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="http://127.0.0.1:8000/admin/assets/js/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/admin/assets/js/metismenu.min.js"></script>
    <script src="http://127.0.0.1:8000/admin/assets/js/waves.js"></script>
    <script src="http://127.0.0.1:8000/admin/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="http://127.0.0.1:8000/admin/assets/js/theme.js"></script>

</body>

</html>