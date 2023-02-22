<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\TendAbout;

AdminSection::registerModel(TendAbout::class, function (ModelConfiguration $model) {

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
                            AdminFormElement::hasManyLocal('list', [
                                AdminFormElement::text('item')
                            ]),

                            AdminFormElement::textarea('price_title', 'Заголовок таблиці')->required()->setRows(3),
                            AdminFormElement::text('price_price', 'Ціна таблиці')->required(),
                            AdminFormElement::textarea('price_note', 'Нотатка таблиці')->setRows(3),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required()->setRows(3),

                            AdminFormElement::html('<label>Список</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list', [
                                AdminFormElement::text('itemRU')
                            ]),

                            AdminFormElement::textarea('price_titleRU', 'Заголовок таблицы')->required()->setRows(3),
                            AdminFormElement::text('price_priceRU', 'Цена таблицы')->required(),
                            AdminFormElement::textarea('price_noteRU', 'Заметка таблицы')->setRows(3),
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