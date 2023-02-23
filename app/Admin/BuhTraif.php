<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\BuhTraif;

AdminSection::registerModel(BuhTraif::class, function (ModelConfiguration $model) {

    $model->setTitle('Тарифи');
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
                            AdminFormElement::html('<label>Таблиця</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('table', [
                                AdminFormElement::text('item1', 'Система оподаткування')->required(),
                                AdminFormElement::text('item2', 'Пакет до 25 операцій')->required(),
                                AdminFormElement::text('item3', 'Пакет до 50 операцій')->required(),
                                AdminFormElement::text('item4', 'Пакет до 100 операцій')->required(),
                                AdminFormElement::text('item5', 'Пакет до 200 операцій')->required(),
                            ]),
                            AdminFormElement::ckeditor('text', 'Текст')->required(),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::html('<label>Таблица</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('table', [
                                AdminFormElement::text('item1RU', 'Система налогообложения')->required(),
                                AdminFormElement::text('item2RU', 'Пакет до 25 операций')->required(),
                                AdminFormElement::text('item3RU', 'Пакет до 50 операций')->required(),
                                AdminFormElement::text('item4RU', 'Пакет до 100 операций')->required(),
                                AdminFormElement::text('item5RU', 'Пакет до 200 операций')->required(),
                            ]),
                            AdminFormElement::ckeditor('textRU', 'Текст')->required(),
                        ]),
                    ]),
                ];
            }), 
        ]);

        return $form;
    });
});