<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\DosAbout;

AdminSection::registerModel(DosAbout::class, function (ModelConfiguration $model) {

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
                
                            AdminFormElement::text('price_title', 'Заголовок таблиці')->required(),
                            AdminFormElement::text('price_price', 'Ціна таблиці')->required(),
                            AdminFormElement::text('price_note', 'Нотатка таблиці'),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required()->setRows(3),

                            AdminFormElement::html('<label>Список</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list', [
                                AdminFormElement::text('itemRU')
                            ]),

                            AdminFormElement::text('price_titleRU', 'Заголовок таблицы')->required(),
                            AdminFormElement::text('price_priceRU', 'Цена таблицы')->required(),
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