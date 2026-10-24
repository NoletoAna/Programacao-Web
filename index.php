<?php include('layouts/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm form-card">
                    <div class="card-header bg-white text-center py-4">
                        <h1 class="h3 fw-bold mb-0">Descubra seu signo:</h1>
                    </div>
                    <div class="card-body p-4">
                        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
                            <div class="mb-3 text-center">
                                <label for="data_nascimento" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Descobrir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
