<?php include('partials/header.php'); ?>

<!-- header -->
<section class="headerBlog">
    <img src="./img/kontakt-header.jpg" alt="">
    <h1 class="display-4">Kontakt</h1>
</section>

<!-- Forma -->
<section class="forma container py-5">
        <form>
            <div class="form-group">
                <label>Ime i prezime</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Poruka</label>
                <textarea cols="30" rows="10" class="form-control"></textarea>
            </div>
            <a>Posaljite poruku</a>
        </form>
    </section>


<?php include('partials/footer.php'); ?>