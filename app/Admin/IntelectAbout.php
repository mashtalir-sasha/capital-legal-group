<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\IntelectAbout;

AdminSection::registerModel(IntelectAbout::class, function (ModelConfiguration $model) {

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
                            AdminFormElement::ckeditor('title', 'Заголовок і текст')->required(),
                            
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::ckeditor('titleRU', 'Заголовок и текст')->required(),
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