<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\JurAbout;

AdminSection::registerModel(JurAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('text')->setLabel('Текст'),
            AdminColumn::text('video')->setLabel('Youtube відео'),
            AdminColumn::url('video'),
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
                            AdminFormElement::textarea('title', 'Заголовок')->required(),
                            AdminFormElement::textarea('text', 'Текст')->required(), 
                            AdminFormElement::html('<label>Список</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list', [
                                AdminFormElement::text('item'),
                            ])
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required(),
                            AdminFormElement::textarea('textRU', 'Текст')->required(),
                            AdminFormElement::html('<label>Список</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list', [
                                AdminFormElement::text('itemRU'),
                            ])
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