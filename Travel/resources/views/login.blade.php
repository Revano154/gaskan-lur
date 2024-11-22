<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .modal-dialog-centered {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <!-- Button Trigger -->
    <div class="container mt-5 text-center">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    </div>

    <!-- Modal Pop-Up -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login / Daftar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login.process') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Harap masukkan alamat email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat email" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Lanjut</button>
                    </form>
                    <hr>
                    <p class="text-center">Cara Login Lainnya</p>
                    <div class="d-flex justify-content-evenly">
                        <a href="#" class="btn btn-outline-primary">Facebook</a>
                        <a href="#" class="btn btn-outline-danger">Google</a>
                        <a href="#" class="btn btn-outline-dark">Apple</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <small>Dengan login atau mendaftar, Anda dianggap telah menyetujui <a href="#">Syarat dan Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>.</small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
