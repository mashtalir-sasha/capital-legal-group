<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\VidkryttiaAbout;

AdminSection::registerModel(VidkryttiaAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
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
                            AdminFormElement::text('subtitle1', 'Підзаголовок 1')->required(), 
                            AdminFormElement::html('<label>Список 1</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list1', [
                                AdminFormElement::text('item'),
                            ]),
                            AdminFormElement::text('subtitle2', 'Підзаголовок 2')->required(), 
                            AdminFormElement::html('<label>Список 2</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list2', [
                                AdminFormElement::text('item'),
                            ]),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required(),
                            AdminFormElement::text('subtitle1', 'Подзаголовок 1')->required(),
                            AdminFormElement::html('<label>Список 1</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list1', [
                                AdminFormElement::text('itemRU'),
                            ]),
                            AdminFormElement::text('subtitle2', 'Подзаголовок 2')->required(),
                            AdminFormElement::html('<label>Список 2</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list2', [
                                AdminFormElement::text('itemRU'),
                            ]),
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