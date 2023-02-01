<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\JurTraif;

AdminSection::registerModel(JurTraif::class, function (ModelConfiguration $model) {

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
                            AdminFormElement::textarea('text1', 'Текст 1')->required(),
                            AdminFormElement::textarea('text2', 'Текст 2')->required(),
                            AdminFormElement::html('<label>Таблиця</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('table', [
                                AdminFormElement::text('price', 'Вартість обслуговування за місяць')->required(),
                                AdminFormElement::text('qty', 'Кількість оплачених годин')->required(),
                                AdminFormElement::text('tarif', 'Тариф')->required(),
                            ])
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('text1RU', 'Текст 1')->required(),
                            AdminFormElement::textarea('text2RU', 'Текст 2')->required(),
                            AdminFormElement::html('<label>Таблица</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('table', [
                                AdminFormElement::text('priceRU', 'Стоимость обслуживания за 1 месяц')->required(),
                                AdminFormElement::text('qtyRU', 'Количество оплаченных часов')->required(),
                                AdminFormElement::text('tarifRU', 'Тариф')->required(),
                            ])
                        ]),
                    ]),
                ];
            }), 
        ]);

        return $form;
    });
});