<h3>Обновление данных клиентов</h3>
<div class="alert alert-error" id="error" style="display:none">Ошибка валидации формы!</div>
<div class="progress progress-striped active" style="display:none;" id="loading"><div class="bar" style="width: 100%;"></div></div>
<input id="id" type="text" value="<?php echo HTML::chars(Arr::get($_POST, 'id')); ?>" placeholder="id обновляемого клиента" />
<input id="first_name" type="text" value="<?php echo HTML::chars(Arr::get($_POST, 'first_name')); ?>" placeholder="Имя" />
<input id="last_name" type="text" value="<?php echo HTML::chars(Arr::get($_POST, 'last_name')); ?>" placeholder="Фамилия" />
<input id="email" type="text" value="<?php echo HTML::chars(Arr::get($_POST, 'email')); ?>" placeholder="email" />
<input id="adress" type="text" value="<?php echo HTML::chars(Arr::get($_POST, 'adress')); ?>" placeholder="Адрес" />
<input id="city" type="text" value="<?php echo HTML::chars(Arr::get($_POST, 'city')); ?>" placeholder="Город" />
<input id="country" type="text" value="<?php echo HTML::chars(Arr::get($_POST, 'country')); ?>" placeholder="Страна" />
<button class="btn btn-primary" id="sendAjax">Обновить клиента</button>
