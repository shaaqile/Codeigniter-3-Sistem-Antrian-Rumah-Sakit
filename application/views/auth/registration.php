<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <label for="email">Email</label><br>
                                        <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Email anda">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label><br>
                                        <input type="text" class="form-control form-control-user" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama anda">
                                    </div>
                                    <div class="form-group">
                                        <label for="lahir">Tanggal lahir</label><br>
                                        <input type="date" class="form-control form-control-user" id="lahir" name="lahir" aria-describedby="emailHelp" placeholder="mm/dd/yy">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label><br>
                                        <input type="radio" name="" id=""> Laki-Laki
                                        <input type="radio" name="" id=""> Perempuan
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Password</label><br>
                                        <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    Sudah punya akun? <a class="small" href="<?= base_url('login'); ?>">Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>