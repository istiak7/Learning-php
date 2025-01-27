<?php require "views/partials/head.php"?>
<?php require "views/partials/nav.php"?>
<?php require "views/partials/banner.php"?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <form action="" method="POST">
        <label for="x">Description</label>
        <div>
            <textarea name="body" id="body" placeholder="create notes here"><?=isset($_POST['body']) ? $_POST['body']:'' ?></textarea>
           <?php if(isset($errors['body'])):?>
              <p style="color: red;"><?=$errors['body']?></p>
            <?php endif?>
        </div>
        <p><button type="submit">Create</button></p>
      </form>
    </div>
  </main>
  <?php require "views/partials/footer.php" ?>