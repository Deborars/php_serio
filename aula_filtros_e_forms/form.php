<form name="post" action="./" method="<?= $form->method ?>" enctype="multipart/form-data" novalidate>
  <p style="margin-bottom:10px; text-align:right"><a href="./" title="atualizar">Atualizar</a></p>
  <div>
    <input type="text" name="name" value="<?= $form->name; ?>" placeholder="Nome:">
    <input type="email" name="email" value="<?= $form->email; ?>" placeholder="E-mail:">
    <br>
    <br> <br> <br>
    <button>Enviar agora!</button>
  </div>
</form>