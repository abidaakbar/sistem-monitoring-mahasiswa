<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Siap Undip</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" />
        <style>
            .logo-undip {
                position: absolute;
                top: 12;
                left: 12;
                width: 56px;
                height: 56px;
                object-fit: cover;
            }

            .ap {
                color: #211792;
            }

            .siap-undip {
                position: absolute;
                top: 14px;
                left: 66px;
            }
        </style>
    </head>

    <body style="background-color:#bfdeeb">
        <div style="position: relative;">
            <img src="{{ asset('img/logo.png') }}" alt="Informatika Undip" width="200" class="logo-undip">
            <h5 style="font-family: 'Poppins';" class="siap-undip">
                <span>Sistem Monitoring Mahasiswa</span>
                <br>
                <span class="ap">UNDIP</span>
                </b>
        </div>
        <br><br><br><br>
        <div class="d-flex justify-content-center container">
            <div class="card mt-4"
                style="width: 490px; height: 430px; border-radius: 16px; background-color: #083c7859;"
                style="box-shadow: 2px 2px rgb(69, 67, 67);">
                <section class="jumbotron text mt-4">
                    <br>
                    <h3 class="display-10 mt-2"
                        style="text-size-adjust: 30.7px; margin-left: 20px; font-family: 'Poppins';"><b>Selamat
                            Datang</b>
                    </h3>
                    <h6 class="display-10" style="margin-left: 20px; font-family: 'Poppins';">Silakan login menggunakan
                        user
                        anda</h6>
                    <h6 class="card-subtitle line-on-side text-muted font-small-3 pt-4 text-center"
                        style="display: print-inline;">
                    </h6>
                </section>

                <div class="row justify-content-center">
                    <div class="col-md-auto">
                        <form method="POST" autocomplete="on" action="/login">
                            <table style="width:auto">
                                <tr">
                                    <td style="width: 150px; font-family: 'Poppins';">
                                        <b>Email</b>
                                    </td>
                                    <td>
                                        <div>
                                            <input style="font-family: 'Poppins';" type="email"
                                                class="form-control mb-2" id="email" name="email"
                                                value="{{ old('email') }}" required autofocus autocomplete="username">
                                        </div>

                                        <div class="text-danger">
                                            @if ($errors->has('email'))
                                                {{ $errors->first('email') }}
                                            @endif
                                        </div>
                                    </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td style="font-family: 'Poppins';">
                                            <b>Password</b>
                                        </td>
                                        <td>
                                            <div>
                                                <input style="font-family: 'Poppins';" type="password"
                                                    class="form-control mb-2" id="password" name="password">
                                            </div>

                                            <div class="text-danger">
                                                @if ($errors->has('password'))
                                                    {{ $errors->first('password') }}
                                                @endif
                                            </div>

                                        </td>

                                    </tr>


                            </table>

                            <br>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn text-light pb-2 pe-5 ps-5 pt-2 text-center"
                                    name="submit"
                                    style="background-color: #101E31; font-family: 'Poppins';">Login</button>
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </body>

</html>
