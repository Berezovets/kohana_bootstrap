<h3>Удаление клиентов</h3>
<div class="alert alert-error" id="error" style="display:none">Ошибка валидации формы!</div>
<div class="progress progress-striped active" style="display:none;" id="loading"><div class="bar" style="width: 100%;"></div></div>
<input id="id" type="text" value="<?php echo HTML::chars(Arr::get($_POST, 'id')); ?>" placeholder="Введите id клиента" />
<button class="btn btn-primary" id="sendAjax">Удалить клиента</button>
