<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\PosAbout;

AdminSection::registerModel(PosAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('sub_title')->setLabel('Підзаголовок'),
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
                            AdminFormElement::textarea('title', 'Заголовок')->required()->setRows('2'),
                            AdminFormElement::textarea('sub_title', 'Підзаголовок')->required(),
                            AdminFormElement::html('<label>Список</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list', [
                                AdminFormElement::textarea('item')->setRows('2')
                            ]),
                            AdminFormElement::ckeditor('text1', 'Текст 1')->required(),
                            AdminFormElement::ckeditor('text2', 'Текст 2'),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required()->setRows('2'),
                            AdminFormElement::textarea('sub_titleRU', 'Подзаголовок')->required(),
                            AdminFormElement::html('<label>Список</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('list', [
                                AdminFormElement::textarea('itemRU')->setRows('2')
                            ]),
                            AdminFormElement::ckeditor('text1RU', 'Текст 1')->required(),
                            AdminFormElement::ckeditor('text2RU', 'Текст 2'),
                        ]),
                    ]),
                ];
            }, 8)->addColumn(function () {
                return [
                    AdminFormElement::image('image', 'Картинка')->required(),
                ];
            }, 4), 
        ]);

        return $form;
    });
});