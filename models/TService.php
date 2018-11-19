<?php
namespace ale10257\translate\models;

class TService
{
	public static $terms = [
		'А/м' => 'А/м',
		'Администраторы' => 'Администраторы',
		'Адрес доставки' => 'Адрес доставки',
		'Артикул' => 'Артикул',
		'Выход' => 'Выход',
		'Главная' => 'Главная',
		'Готов к упаковке' => 'Готов к упаковке',
		'Готовый к отгрузке' => 'Готовый к отгрузке',
		'Дата огрузки' => 'Дата огрузки',
		'Дата отгрузки' => 'Дата отгрузки',
		'Дата создания' => 'Дата создания',
		'Для редактирования кликните по нужной ячейке таблицы' => 'Для редактирования кликните по нужной ячейке таблицы',
		'Добавить литеру' => 'Добавить литеру',
		'Добавить термин' => 'Добавить термин',
		'Документ загружается...' => 'Документ загружается...',
		'Документы' => 'Документы',
		'Доставка' => 'Доставка',
		'Емкость' => 'Емкость',
		'Загрузить файл' => 'Загрузить файл',
		'Загрузить файл excel с переводами' => 'Загрузить файл excel с переводами',
		'Заказ' => 'Заказ',
		'Заказ #{number} успешно обработан. Он ожидает упаковки и отгрузки на складе.' => 'Заказ #{number} успешно обработан. Он ожидает упаковки и отгрузки на складе.',
		'Заказ {order_number} отгружен успешно!' => 'Заказ {order_number} отгружен успешно!',
		'Заказ {order_number} упакован успешно!' => 'Заказ {order_number} упакован успешно!',
		'Закрыть окно' => 'Закрыть окно',
		'Имя литеры' => 'Имя литеры',
		'Информация о заказе' => 'Информация о заказе',
		'Информация о клиенте' => 'Информация о клиенте',
		'Категория' => 'Категория',
		'Клиент' => 'Клиент',
		'Кол-во позиций' => 'Кол-во позиций',
		'Количество по умолчанию' => 'Количество по умолчанию',
		'Комментарий' => 'Комментарий',
		'Литера' => 'Литера',
		'Литеры склада' => 'Литеры склада',
		'Менеджер' => 'Менеджер',
		'Местонахождение' => 'Местонахождение',
		'Монитор логиста' => 'Монитор логиста',
		'На производстве' => 'На производстве',
		'Наименование' => 'Наименование',
		'Настройки' => 'Настройки',
		'Номер заказа' => 'Номер заказа',
		'Номер отгрузки' => 'Номер отгрузки',
		'Обработать' => 'Обработать',
		'Общая информация' => 'Общая информация',
		'Ожидает отгрузку' => 'Ожидает отгрузку',
		'Ожидает упаковку' => 'Ожидает упаковку',
		'Оплачено' => 'Оплачено',
		'Оприходывание' => 'Оприходывание',
		'Опт' => 'Опт',
		'Основной склад' => 'Основной склад',
		'Отгружен' => 'Отгружен',
		'Отгрузить' => 'Отгрузить',
		'Переводы' => 'Переводы',
		'Подготовить к упаковке' => 'Подготовить к упаковке',
		'Пометить заказы как огруженные' => 'Пометить заказы как огруженные',
		'Приход' => 'Приход',
		'Продукт' => 'Продукт',
		'Распечатать все документы' => 'Распечатать все документы',
		'Распечатать документы по отдельности' => 'Распечатать документы по отдельности',
		'Распечатать реестр' => 'Распечатать реестр',
		'Реализации' => 'Реализации',
		'Редактировать перевод' => 'Редактировать перевод',
		'Сбросить результаты поиска' => 'Сбросить результаты поиска',
		'Сбросить фильтры' => 'Сбросить фильтры',
		'Сгенерировать файл excel' => 'Сгенерировать файл excel',
		'Склады' => 'Склады',
		'Статус' => 'Статус',
		'Сумма доставки' => 'Сумма доставки',
		'Сумма позиций' => 'Сумма позиций',
		'Телефон' => 'Телефон',
		'Транзитный склад' => 'Транзитный склад',
		'Трек-код' => 'Трек-код',
		'Удаленные партнеры' => 'Удаленные партнеры',
		'Упаковать' => 'Упаковать',
		'Упаковка' => 'Упаковка',
		'ФИО' => 'ФИО',
		'Цена' => 'Цена',
		'№ заказа' => '№ заказа',
	];

	public static function t($message, $params = [])
	{
		$message = ModelTranslate::getMsg($message);
		$placeholders = [];
		if ($params) {
			foreach ($params as $name => $value) {
				$placeholders['{' . $name . '}'] = $value;
			}
		}
		return !$placeholders ? $message : strtr($message, $placeholders);
	}
}