<?php include "header.php"; ?>

<main>
<div class="container form">
	<div class="row">
  		<div class="col-md-12">
  			<h3 class="text-center offer">Індивідуальні замовлення</h3>
  		</div>
  	</div>
  	<hr>
  	<div class="row">
  	<div class="col-md-10">
  		<form action="https://formspree.io/f/mqazqqqr" method="post">
  			 <div class="mb-3">
    <label for="email" class="form-label">Ваш Email </label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      </div>
  <div class="mb-3">
    <label for="name" class="form-label">Ім'я і прізвище</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="tel" class="form-label">Номер телефона</label>
    <input type="text" class="form-control" id="tel" name="tel">
  </div>
  <div class="mb-3">
    <label for="msg" class="form-label">Опис замовлення</label>
    <textarea name="msg" cols="2" rows="5" class="form-control" id="msg"></textarea>
  </div>
    <button type="submit" class="btnsubmit btn-primary" id="my-form-button">Підтвердити</button>
  				</form>
  	<p id="my-form-status"></p>
  	</div>
  	</div>
  	  	</div>
  	  </div>
</main>


<?php include "footer.php"; ?>