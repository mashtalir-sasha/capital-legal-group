<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\VurAbout;

AdminSection::registerModel(VurAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('updated_at')->setLabel('Дата зміни')
        ]);
        return $display;
    });

    $model->disableCreating();
    $model->disableDeleting();

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()->addColumn(function () {
                return [
                    AdminDisplay::tabbed([
                        'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('title', 'Заголовок')->required()->setRows(3),

                            AdminFormElement::html('<label>Список</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::textarea('item1', 'Пункт 1')->setRows(2),
                            AdminFormElement::hasManyLocal('list1', [
                                AdminFormElement::text('item', 'Підпункт списку')
                            ]),
                            AdminFormElement::textarea('item2', 'Пункт 2')->setRows(2),
                            AdminFormElement::hasManyLocal('list2', [
                                AdminFormElement::text('item', 'Підпункт списку')
                            ]),
                            AdminFormElement::textarea('item3', 'Пункт 3')->setRows(2),
                            AdminFormElement::hasManyLocal('list3', [
                                AdminFormElement::text('item', 'Підпункт списку')
                            ]),
                            AdminFormElement::textarea('item4', 'Пункт 4')->setRows(2),
                            AdminFormElement::hasManyLocal('list4', [
                                AdminFormElement::text('item', 'Підпункт списку')
                            ]),
                            AdminFormElement::textarea('item5', 'Пункт 5')->setRows(2),
                            AdminFormElement::hasManyLocal('list5', [
                                AdminFormElement::text('item', 'Підпункт списку')
                            ]),
                            AdminFormElement::textarea('item6', 'Пункт 6')->setRows(2),
                            AdminFormElement::hasManyLocal('list6', [
                                AdminFormElement::text('item', 'Підпункт списку')
                            ]),

                            AdminFormElement::text('price_title', 'Заголовок таблиці')->required(),
                            AdminFormElement::text('price_price', 'Ціна таблиці')->required(),
                            AdminFormElement::textarea('price_text', 'Текст таблиці')->required()->setRows(3),
                            AdminFormElement::text('price_note', 'Нотатка таблиці'),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required()->setRows(3),

                            AdminFormElement::html('<label>Список</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::textarea('item1RU', 'Пункт 1')->setRows(2),
                            AdminFormElement::hasManyLocal('list1', [
                                AdminFormElement::text('itemRU', 'Подпункт списка')
                            ]),
                            AdminFormElement::textarea('item2RU', 'Пункт 2')->setRows(2),
                            AdminFormElement::hasManyLocal('list2', [
                                AdminFormElement::text('itemRU', 'Подпункт списка')
                            ]),
                            AdminFormElement::textarea('item3RU', 'Пункт 3')->setRows(2),
                            AdminFormElement::hasManyLocal('list3', [
                                AdminFormElement::text('itemRU', 'Подпункт списка')
                            ]),
                            AdminFormElement::textarea('item4RU', 'Пункт 4')->setRows(2),
                            AdminFormElement::hasManyLocal('list4', [
                                AdminFormElement::text('itemRU', 'Подпункт списка')
                            ]),
                            AdminFormElement::textarea('item5RU', 'Пункт 5')->setRows(2),
                            AdminFormElement::hasManyLocal('list5', [
                                AdminFormElement::text('itemRU', 'Подпункт списка')
                            ]),
                            AdminFormElement::textarea('item6RU', 'Пункт 6')->setRows(2),
                            AdminFormElement::hasManyLocal('list6', [
                                AdminFormElement::text('itemRU', 'Подпункт списка')
                            ]),

                            AdminFormElement::text('price_titleRU', 'Заголовок таблицы')->required(),
                            AdminFormElement::text('price_priceRU', 'Цена таблицы')->required(),
                            AdminFormElement::textarea('price_textRU', 'Текст таблицы')->required()->setRows(3),
                            AdminFormElement::text('price_noteRU', 'Заметка таблицы'),
                        ]),
                    ]),
                ];
            }, 8)->addColumn(function () {
                return [
                    AdminFormElement::text('video', 'Коротке посилання Youtube')->required(),
                ];
            }, 4), 
        ]);

        return $form;
    });
});