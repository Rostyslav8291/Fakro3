<?php 
	require 'includes/config.php';

	if(isset($_POST['send_mail'])){
		print_r($_POST);
		$message = "Номер: ". $_POST['phone'] ."\nИмя: ". $_POST['name'];
		
		$message .= "\n\nЗаказ:\n";
		$message .= "Стадия строительства: ". $_POST['stage'] ."\n";
		$message .= "Дополнительные услуги: ". $_POST['services'] ."\n";
		$message .= "Вид кровли: ". $_POST['roof'] ."\n";
		$message .= "Модель окна: ". $_POST['model'] ."\n";
		$message .= "Количество: ". $_POST['number'] ."\n";
		$message .= "Размер: ". $_POST['size'] ."\n";
		$message .= "Куда отправить расчет: ". $_POST['payment'] ."\n";
		mail($config['email'], 'Новый заказ', $message);
	}
	elseif(isset($_POST['get_feedback'])){
		$message = "Номер: ". $_POST['phone'] ."\nИмя: ". $_POST['name'];
		mail($config['email'], 'Запрос звонка', $message);
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css.map">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Fakro</title>

	<style type="text/css">

	   input[type='radio']:after {
			width: 18px;
			height: 18px;
			background-color: #d1d3d1;
			content: '';
			display: inline-block;


		}

		input[type='radio']:checked:after {
			width: 18px;
			height: 18px;
			background-color: #50AC25;

		}
	</style>
</head>
<body>
	<form>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<img src="img/logo_fakro.png" class="logo">
						<h1 class="logo__item">
							официальный дилер
						</h1>
					</div>	
					<div class="gmail d-flex offset-md-1 col-md-3">
						<img src="img/gmail.png" class="header__img">
						<p class="header__info" id="gmail__title">
							<?php echo $config['email'] ?>
						</p>
					</div>
					<div class="phone d-flex col-md-6">
						<img src="img/phone.png" class="header__img">
						<p class="header__info">
							<?php echo $config['phone'] ?>
						</p>
						<input type="submit" class="btn btn-success" name="get_feedback" formaction="/ formmethod="POST" value="ЗАКАЗАТЬ ЗВОНОК">
					</div>
				</div>
			</div>		
		</header>
		<section class="roof_windows">
			<div class="container">
				<div class="row">
				<div class="offer col-md-6">
					<div class="offer-title">
						Мансардные окна
					</div>
					<p class="offer-intro">
						Больше света и уюта на Вашей мансарде
					</p>		
					<img src="img/window.jpg" class="window">
				</div>

				<div class="characteristic col-md-6">
					<div class="characteristic__title">
						Модель:
					</div>
						<select class="collapsible">
							<option>FTZ-V U2 (бюджетный вариант)</option>
							<option>FTS-V U4 (цена\качество)</option>
							<option>PTP-V U3 (пластик)</option>
						</select>
						<div class="dimensions">
							<p class="subtitle">
								Размер:
							</p>

							<div class="dimensions__title">
								<div class="dimensions__row">
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>55x78 см</span> </label>
									</div>
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>55x98 см</span> </label>
									</div>
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>66x98 см</span> </label>
									</div>
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>66x118 см</span> </label>
									</div>
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>78x98 см</span> </label>
									</div>
								</div>

								<div class="dimensions__row">
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>78x118 см</span> </label>
									</div>									
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>78x140 см</span> </label>
									</div>	
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>78x160 см</span> </label>
									</div>
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn"> <span>94x118 см</span> </label>
									</div>
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn" > <span>94x140 см</span> </label>
									</div>
								</div>

								<div class="dimensions__row">
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn" > <span>114x118 см</span> </label>
									</div>
									<div class="size_btn">
										<input id="size__btn" class="dimensions__intro" type="radio" name="size" value="55x78 см" required>
										<label class="dimensions__intro__label" for="size__btn" > <span>114x140 см</span> </label>
									</div>
								</div>
							</div>
							<p class="price d-flex">
								Цена: <span>12 345₽</span>
							</p>
						</div>
				</div>
				</div>
			</div>
		</section>

		<section class="kits">
			<div class="container">
				<div class="kits__title">
					Рассчитаем стоимость комплекта окна
					<p class="kits__intro">
						и пришлём смету в SMS или на WhatsApp + скидку на оклад и аксессуары
					</p>
				</div>

				<div>
					<img src="img/iphone.png" class="iphone">
					<div class="stage">
						<p class="stage__title">
							Стадия строительства:
						</p>
						<input class="kits__btn" type='radio' name="stage" value="Нету кровли" required/>
						<p class="stage__intro">
							Нету кровли
						</p>
						<input class="kits__btn1" type='radio' name="stage" value="Есть кровля"/>
						<p class="stage__intro1">
							Есть кровля
						</p>
					</div>
				</div>

				<div class="services">
					<p class="services__title">
						Дополнительные услуги:
					</p>
					<p class="services__intro">
						Доставка
					</p>
					<input class="services__btn" type='radio' name="services" value="Доставка" required/>
					<input class="services__btn1" type='radio' name="services" value="Доставка + монтаж"/>
					<p class="services__intro1">
						Доставка + монтаж
					</p>
					<a href="#" class="kits__btn services__btn1"></a>
				</div>

				<div class="roof">
					<div class="roof__text">
						<p class="roof__title">
							Вид кровли:
						</p>
						<p class="roof__intro"> 
							Металлочерепица
						</p>
						<input class="roof__btn" type='radio' name="roof" value="Металлочерепица" required/>
						<p class="roof__intro1">
							Битумная черепица
						</p>
						<input class="roof__btn1" type='radio' name="roof" value="Битумная черепица"/>
						<p class="roof__intro2">
							Фальцевая кровля
						</p>
						<input class="roof__btn2" type='radio' name="roof" value="Фальцевая кровля"/>
						<p class="roof__intro3">
							Натуральная черепица
						</p>
						<input class="roof__btn3" type='radio' name="roof" value="Натуральная черепица"/>
						<p class="roof__intro4">
							Композитная черепица
						</p>
						<input class="roof__btn4" type='radio' name="roof" value="Композитная черепица"/>
					</div>
				</div>

				<div class="model__window">
					<p class="model__title">
						Модель окна:
					</p>
						<p class="model__intro">
							FTZ-V U2 (самый бюджетный вариант)
						</p>
						<input class="model__btn" type='radio' name="model" value="FTZ-V U4 (двухкамерный)" required/>
						<p class="model__intro1">
							FTZ-V U4 (двухкамерный)
						</p>
						<input class="model__btn1" type='radio' name="model" value="FTZ-V U4 (двухкамерный)"/>
						<p class="model__intro2">
							FTS-V U4 (популярный, лучшее цена-качество)
						</p>
						<input class="model__btn2" type='radio' name="model" value="FTP-V U4 (премиум окна)"/>
						<p class="model__intro3">
							FTP-V U4 (премиум окна)
						</p>
						<input class="model__btn3" type='radio' name="model" value="PTP-V U3 (пластик, однокамерный)"/>
						<p class="model__intro4">
							PTP-V U3 (пластик, однокамерный)
						</p>
						<input class="model__btn4" type='radio' name="model" value="PTP-V U4 (пластик, двухкамерный)"/>
						<p class="model__intro5">
							PTP-V U4 (пластик, двухкамерный)
						</p>
						<input class="model__btn5" type='radio' name="model"/>
					<div class="number">
						<p class="number__title">
							Количество:
						</p>
						<p class="number__intro">
							1 окно
						</p>
						<input class="number__btn" type='radio' name="number" value="1 окно" required/>
						<p class="number__intro1">
							2 окна
						</p>
						<input class="number__btn1" type='radio' name="number" value="2 окна" />
						<p class="number__intro2">
							3 окна и более
						</p>
						<input class="number__btn2" type='radio' name="number" value="3 окна и более" />
					</div>
					<div class="payment">
						<p class="payment__title">
							Куда отправить расчёт?
						</p>
						<input class="payment__btn" type='radio' name="payment" value="WhatsApp" required/>
						<p class="payment__intro">
							WhatsApp
						</p>
						<p class="payment__intro1">
							SMS
						</p>
						<input class="payment__btn1" type='radio' name="payment" value="SMS" />
					</div>
				</div>
			</div>
		</section>

		<section class="size">
			<div class="container">
				<div class="size_title">
					Размер:
				</div>
				<div class="size_btn">
					<input id="size__btn" class="size__btn" type="radio" name="size" value="55x78 см" required>
					<label class="size__btn__label" for="size__btn"> <span>55x78 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn size__btn1" type="radio" name="size" value="55x98 см">
					<label class="size__btn__label size__btn__label1" for="size__btn"> <span>55x98 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn size__btn2" type="radio" name="size" value="66x98 см">
					<label class="size__btn__label size__btn__label2" for="size__btn"> <span>66x98 см</span> </label>
				</div>
				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="66x118 см">
					<label class="size__btn__label size__btn__label3" for="size__btn"> <span>66x118 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="78x98 см">
					<label class="size__btn__label size__btn__label4" for="size__btn"> <span>78x98 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="78x118 см">
					<label class="size__btn__label size__btn__label5" for="size__btn"> <span>78x118 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="78x140 см">
					<label class="size__btn__label size__btn__label6" for="size__btn"> <span>78x140 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="78x160 см">
					<label class="size__btn__label size__btn__label7" for="size__btn"> <span>78x160 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="94x118 см">
					<label class="size__btn__label size__btn__label8" for="size__btn"> <span>94x118 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size">
					<label class="size__btn__label size__btn__label9" for="size__btn"> <span>94x140 см</span> </label>
				</div>						

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="114x118 см">
					<label class="size__btn__label size__btn__label10" for="size__btn"> <span>114x118 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="114x140 см">
					<label class="size__btn__label size__btn__label11" for="size__btn"> <span>114x140 см</span> </label>
				</div>	
			</div>
		</section>

		<section class="connection">
			<p class="connection__title">
				Ваше имя:
			</p>
			<p class=" connection__title connection__title1">
				Номер телефона:
			</p>
				<input class="input__name" type="name" name="name" required>
				<input class="input__phonenumber" type="telephone" placeholder="+7 ___ ___ __ __" name="phone" required>
				<input class="form__label" type="submit" name="send_mail" formaction="/" formmethod="POST" value="ПОЛУЧИТЬ РАСЧЕТ">
		</section>
	</form>

	<footer class="footer">
		<div class="container">
				<h1 class="footer__title">
					Центральный склад: 
				<h1>
				<p class="footer__intro">
					МО, Истринский район, п. Снегири, ул. Станционная, 1
				</p>
				<h1 class="footer__title footer__title1">
					Режим работы склада:
				</h1>
				<p class="footer__intro footer__intro1">
					Пн-Пт 10:00 - 16:00
				</p>
				<img src="img/phone.png" class="phone__1">
				<h1 class="footer__title2">
					<?php echo $config['phone'] ?>
				</h1>
				<p class="footer__intro2">
					09:00 - 20:00 
				</p>
				<p class="footer__intro3">
					 БЕЗ ВЫХОДНЫХ
				</p>
		</div>
	</footer>
</body>
</html>


