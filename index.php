<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>	
	<title>TEST</title>

	<link href="styles.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__inner">
                    <img src="globe.png" alt="World Bank Publications">
                    <div>
                        <h2>WORLD BANK</h2>
                        <h3>Publications</h3>

                    </div>
                </div>
                <div>
                    <h2>8-800-100-5005</h2>
                    <h2>+7(3452)522-000</h2>
                </div>
            </div>
            <nav class="">
                <ul class="nav">
                    <li class="nav__link"><a href="#">Кредитные карты</a></li>
                    <li class="nav__link active"><a href="#">Вклады</a></li>
                    <li class="nav__link"><a href="#">Дебетовая карта</a></li>
                    <li class="nav__link"><a href="#">Страхование</a></li>
                    <li class="nav__link"><a href="#">Друзья</a></li>
                    <li class="nav__link"><a href="#">Интернет-банк</a></li>
                </ul>
            </nav>
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Вклады</a></li>
                <li>Калькулятор</li>
            </ul>
        </div>
    </header>

    <div class="container">
        <form action="calc.php" method="post">
            <h2>Калькулятор</h2>
            <ul class="wrapper">
                <li class="form-row">
                    <label for="dateofregister">Дата оформления вклада</label>
                    <input type="date" id="dateofregister">
                </li>
                <li class="form-row">
                    <label for="sum">Сумма вклада</label>
                    <input type="number" id="sum1" value="10000" min="1000" max="3000000" step="1000"
                    oninput="document.getElementById('sum2').value = this.value">
                    <input type="range" id="sum2" value="10000" min="1000" max="3000000" step="1000"
                    oninput="document.getElementById('sum1').value = this.value">
                </li>
                <li class="form-row">
                    <label for="period">Срок вклада</label>
                    <select id="period">
                        <option value="1">1 год</option>
                        <option value="2">2 года</option>
                        <option value="3">3 года</option>
                        <option value="4">4 года</option>
                        <option value="5">5 лет</option>
                    </select>
                </li>
                <li class="form-row">
                    <label for="">Пополнение вклада</label>
                    <input checked type="radio">Нет
                    <input type="radio">Да
                </li>
                <li class="form-row">
                    <label for="recharge">Сумма пополнения вклада</label>
                    <input type="number" id="recharge1" value="10000" min="1000" max="3000000" step="1000"
                    oninput="document.getElementById('recharge2').value = this.value">
                    <input type="range" id="recharge2" value="10000" min="1000" max="3000000" step="1000"
                    oninput="document.getElementById('recharge1').value = this.value">
                </li>
                <li class="form-row">
                    <button class="CalcButton" type="submit">Рассчитать</button>
                    <label>Результат:</label>
                </li>
            </ul>
        </form>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <ul>
                    <li><a href="#">Кредитные карты</a></li>
                    <li><a href="#">Вклады</a></li>
                    <li><a href="#">Дебетовая карта</a></li>
                    <li><a href="#">Страхование</a></li>
                    <li><a href="#">Друзья</a></li>
                    <li><a href="#">Интернет-банк</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>