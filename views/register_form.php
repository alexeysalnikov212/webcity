<div id="register">
	<div class="col-md-offset-4 col-md-4">
		<form class="form-vertical" role="form" method="post" action="register" accept-charset="UTF-8">
			<div class="form-group col-md-12">
				 <label class="sr-only" for="login">Логин</label>
				 <input type="text" class="form-control" name="login" placeholder="Логин" required>
			</div>
			<div class="form-group col-md-12">
				 <label class="sr-only" for="password">Пароль</label>
				 <input type="password" class="form-control" name="password" placeholder="Пароль" required>
				 <input type="password" class="form-control" name="confirm" placeholder="Подтвердить пароль" required>
			</div>
			<div class="form-group col-md-12">
				 <label class="sr-only" for="email">Электронная почта</label>
				 <input type="text" class="form-control" name="email" placeholder="Электронная почта" required>
			</div>
			<div class="form-group col-md-12">
				 <label class="sr-only" for="">Название компании/организации</label>
				 <input type="text" class="form-control" name="name" placeholder="Название компании/организации" required>
			</div>
			<div class="form-group col-md-12">
				 <label class="sr-only" for="description">Описание компании/организации</label>
				 <input type="text" class="form-control" name="description" placeholder="Описание компании/организации" required>
			</div>
			<div class="form-group col-md-12">
				 <label class="sr-only" for="adress">Адрес</label>
				<div class="input-group">
				 <input type="text" class="form-control" name="adress" placeholder="Адрес" required>
				 <div data-toggle="tooltip" data-placement="top" title="" class="input-group-addon mapPOL" data-data="lat=48.732049&amp;lng=37.57219&amp;latMarker=&amp;lngMarker=&amp;np=%D0%9A%D1%80%D0%B0%D0%BC%D0%B0%D1%82%D0%BE%D1%80%D1%81%D1%8C%D0%BA&amp;edit=false" data-original-title="Позначити місце розташування"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></div>
				 </div>
			</div>
			<div class="form-group col-md-12">
				 <label class="sr-only" for="phones">Телефоны</label>
				 <input type="text" class="form-control" name="phones" placeholder="Телефоны" required>
			</div>
			<div class="form-group col-md-12">
				 <label class="sr-only" for="www">WWW</label>
				 <input type="text" class="form-control" name="www" placeholder="WWW">
			</div>
			<div class="form-group col-md-12">
				 <label class="sr-only" for="logo">Логотип</label>
				 <input class="btn btn-default" type="file" class="form-control" name="logo">
			</div>

			<div class="form-group col-md-12">
				 <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>
			</div>
		</form>
	</div>
</div>
