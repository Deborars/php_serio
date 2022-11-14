<!--multipart/form-data informa que aceita arquivos e textos -->

<div class="d-flex justify-content-center mt-5 ">
  <form name="post" action="./?post=true" method="post" enctype="multipart/form-data">
    <div class="form-group p-3" style="border:3px solid #caf0f8 ;">
      <p><a href="./" title="Atualizar"> Atualizar</a></p>
      <input type="file" name="file">
    </div>
    <button class="mt-4 btn btn-success">Enviar Agora!</button>
  </form>
</div>